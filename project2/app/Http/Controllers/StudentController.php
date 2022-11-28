<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getClass(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            StudentModel::with('classes')->get()
        ]);
    }
    public function getById(string $id){
        $student=StudentModel::where('id',$id)->with('classes')->first();
        if (!empty($student)){
            return response()->json([new StudentResource($student)]);
        }
        return response()->json([
            'message'=>'not found',
            'code'=>'1'
        ]);
    }
}
