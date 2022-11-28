<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=[
      'name',
      'class_id'
    ];
//    public function classes(): \Illuminate\Database\Eloquent\Relations\BelongsTo
//    {
//        return $this->belongsTo(ClassModel::class,'class_id','id');
//    }

    public function classes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(ClassModel::class,'class_student','student_id','class_id');
    }
}
