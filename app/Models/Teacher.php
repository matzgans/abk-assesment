<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;
    protected $tables = 'teachers';
    protected $guarded = [];

    public function assessmentStudents(): HasMany
    {
        return $this->hasMany(AssesmentStudent::class, 'teacher_id');
    }
}
