<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function getStuednt(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
           ClassModel::with('students')->get()
        ]);
    }
}
