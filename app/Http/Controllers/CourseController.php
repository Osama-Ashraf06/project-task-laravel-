<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::withCount('students')->get();
        return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'numeric|required|min:0',
            'duration' => 'required|integer|min:1',
            'description' => 'nullable|string',
        ]);

        Course::create($validated);
        return redirect()->route('courses.index')->with('success','course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'numeric|required|min:0',
            'duration' => 'required|integer|min:1',
            'description' => 'nullable|string',
             ]);

        $course = Course::findOrFail($id);

        $course->update($validated);
        return redirect()->route('courses.index')->with('success','course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);

        if ($course->students()->exists()){
            return redirect()->route('courses.index')->with('error','cannot delete it');
        }$course->delete();
        return redirect()->route('courses.index')->with('success','course deleted successfully');

    }
}
