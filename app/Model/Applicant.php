<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $dates = ['birthday','created_at','updated_at'];

    public function getGenderAttribute($gender)
    {
        return $gender == 1 ? "男" : "女";
    }
}
