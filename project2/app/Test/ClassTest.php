<?php

namespace App\Test;

use App\Models\ClassModel;

class ClassTest{

    public function getById(string $getId)
    {
        $check=ClassModel::where('id',$getId)->first();
        if(empty($check)){
            return [
                'message'=>'not found'
            ];
        }

        return [
            'data'=>$check
        ];
    }
}
