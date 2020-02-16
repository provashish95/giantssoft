<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function AddStudent(){
          $departments = DB::table('departments')->get();
          return view('student.AddStudent',compact('departments'));
    }
    public function StoreStudent(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:25|min:3',
            'roll' => 'required|max:4|min:2',
        ]);
        $data=array();
        $data['name']=$request->name;
        $data['department_id']=$request->department_id;
        $data['roll']=$request->roll;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        DB::table('students')->insert($data);
        return redirect()->back();
    }

    public function AllStudent(){
//            $students = DB::table('students')
//            ->join('departments','students.department_id','departments.id')
//            ->select('students.*','departments.department_name')
//            ->get();
        $students =Student::all();
        if ($students){
            return view('student.students',compact('students'));
        }

//        if (Student::where('department_id', '=', Input::get('department_id'))->count() > 0) {
//            return view('student.AllStudent',compact('students'));
//        }else{
//            return redirect()->back();
//        }


    }
    public function ViewStudent($id){
//           $students = DB::table('students')
//              ->join('departments','students.department_id','departments.id')
//               ->select('students.*','departments.department_name')
//               ->where('students.id',$id)
//               ->first();
        $students = Student::findorfail($id);
//         return response()->json($students);
        return view('student.ViewStudent',compact('students'));
    }
    public function EditStudent($id){
        $departments = DB::table('departments')->get();
        $student = DB::table('students')->where('id',$id)->first();
        return view('student.EditStudent',compact('departments','student'));
    }
    public function UpdateStudent(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|max:25|min:3',
            'roll' => 'required|max:4|min:2',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['department_id']=$request->department_id;
        $data['roll']=$request->roll;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        DB::table('students')->where('id',$id)->update($data);
        return redirect()->route('AllStudent');
    }
    public function DeleteStudent($id){
        $student = DB::table('students')->where('id', $id)->delete();
        return redirect()->back();
    }
}
