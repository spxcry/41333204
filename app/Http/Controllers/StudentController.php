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
    
}
