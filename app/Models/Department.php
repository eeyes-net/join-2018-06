<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Class Department
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $link
 * @property int $applicant_count
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property array $applicants
 */
class Department extends Model
{
    /**
     * @param array $params
     */
    public function link($params = [])
    {
        route('department.show', array_merge([$this->id, $this->name],$params));
    }

    public function applicants()
    {
        $first = $this->hasMany('App\Models\Applicant','first_id');
        $second = $this->hasMany('App\Models\Applicant','second_id');
        $third = $this->hasMany('App\Models\Applicant','third_id');

        return [
            'first' => $first,
            'second' => $second,
            'third' => $third,
        ];
    }
}