<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Class Applicant
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property string $cellphone
 * @property string $college
 * @property string $class
 * @property string $qq
 * @property string $methods
 * @property string $wanna_say
 * @property Carbon $birthday
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Department $first
 * @property Department $second
 * @property Department $third
 */
class Applicant extends Model
{
    protected $dates = ['birthday','created_at','updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function first()
    {
        return $this->belongsTo('App\Models\Department','first_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function second()
    {
        return $this->belongsTo('App\Models\Department','second_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function third()
    {
        return $this->belongsTo('App\Models\Department','third_id');
    }
}