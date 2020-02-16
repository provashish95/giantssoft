<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function AllDepartment(){
        $departments = DB::table('departments')->get();
        return view('department.AllDepartment',compact('departments'));
    }
    public function AddDepartment(){
        return view('department.AddDepartment');
    }
    public function StoreDepartment(Request $request)
    {
        $validatedData = $request->validate([
            'department_name' => 'required|unique:departments|max:25|min:4',
        ]);
        $data = array();
        $data['department_name'] = $request->department_name;
        $department = DB::table('departments')->insert($data);

        return Redirect()->back();
    }
    public function EditDepartment($id){
        $department = DB::table('departments')->where('id', $id)->first();
        return view('department.EditDepartment',compact('department'));
    }
    public function UpdateDepartment(Request $request,$id){
        $validatedData = $request->validate([
            'department_name' => 'required|max:25|min:4',
        ]);
        $data = array();
        $data['department_name'] = $request->department_name;
        DB::table('departments')->where('id',$id)->update($data);
        return redirect()->route('AllDepartment');
    }
    public function DeleteDepartment($id){
        $department = DB::table('departments')->where('id', $id)->delete();
        return redirect()->back();
    }
    public function AllStudentByDepartment($id){
        $department = DB::table('departments')->where('id', $id)->first();

        $students = Student::where('department_id', $id)->get();

        return view('department.ViewStudentByDepartment', compact('students','department'));
//         return response()->json($department);
    }
}
