<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = students::all();
        return view('students.index', compact('students'));
    }

    public function delete($id)
    {
        students::destroy($id);
        return redirect()->route('students.list');

    }

    public function update(Request $request, $id)
{
    $student = students::find($id);
    if ($student) {
        $student->name = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->age = $request->age;
        $student->save();

        return redirect()->route('students.list');
    }
}

    public function save(Request $request)
    {

        students::create([
            "name" => $request->name,
            "address" => $request->address,
            "mobile" => $request->mobile,
            "age" => $request->age,
        ]);

        return redirect()->route('students.list');

    }
    public function updateForm($id)
    {
        $student = students::find($id);
        if ($student) {
            return view('update', ['student' => $student]);
        }
        return redirect()->route('students.list')->with('error', 'Student not found.');
    }

    public function list()
    {

        $students = students::all();

        return view("list", ["students" => $students]);
    }
}
