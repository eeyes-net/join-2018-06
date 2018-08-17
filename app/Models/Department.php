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
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Department extends Model
{
    public function link($params = [])
    {
        route('department.show', array_merge([$this->id, $this->name],$params));
    }
}