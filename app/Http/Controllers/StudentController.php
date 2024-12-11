<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function AppData(Request $request) {
        // สร้างตัวแปรเพื่อสร้าง object ใหม่ของ Student
        $student = new Student;
        
        // ตั้งค่าฟิลด์ต่าง ๆ โดยรับข้อมูลจาก request
        $student->name = $request->name;
        $student->email = $request->email;
        $student->department = $request->department;
        $student->section = $request->section;
        
        // บันทึกข้อมูลลงในฐานข้อมูล
        $result = $student->save();

        if($result){
            return ["Result" => "Data Inserted"];
        }else{
            return ["Result" => "Data Not Inserted"];
        }
    }
    //Update Put Data
    public function UpdateData(Request $request){
        $Student = Student::find($request->id);
        $Student->name = $request->name;
        $Student->email = $request->email;
        $Student->department = $request->department;
        $Student->section = $request->section;

        $result = $Student->save();
        if($result){
            return ["Result" => "Data Updated"];
        }else{
            return ["Result" => "Data Not Updated"];
        }
    }
    ///Update Patch Data
    public function UpdatePatchData(Request $request, $id){
        $Student = Student::find($id);

        if(!$Student){
            return ["Result" => "Data Not Found"];
        }

        $Student->name = $request->name ?? $Student->name;
        $Student->email = $request->email ?? $Student->email;
        $Student->department = $request->department ?? $Student->department;
        $Student->section = $request->section ?? $Student->section;

        $result = $Student->save();
        if($result){
            return ["Result" => "Data Updated"];
        }else{
            return ["Result" => "Data Not Updated"];
        }
    }
    
        // Delete Data
        public function deleteData($id)
        {
            // ค้นหา Student ตาม ID
            $student = Student::find($id);
    
            if(!$student){
                return ["Result" => "Data Not Found"];
            }
    
            // ลบข้อมูล
            $result = $student->delete();
    
            if($result){
                return ["Result" => "Data Deleted"];
            }else{
                return ["Result" => "Data Not Deleted"];
            }
        }
}
