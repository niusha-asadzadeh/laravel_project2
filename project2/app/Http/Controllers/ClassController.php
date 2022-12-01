<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClassResource;
use App\Models\ClassModel;
use App\Test\ClassTest;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function getStuednt(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
           ClassModel::with('students')->get()
        ]);
    }

    public function get(Request $request){

        $test=ClassModel::whereHas('students',function ($query){
            $query->where('id',$query);
        })->get();

        return response()->json(
            $test($request),
            ClassResource::collection(
                ClassModel::get()
            )
        );
    }

    public function getById(string $id): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            (new ClassTest())->getById($id)
        );
    }
}
