<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    // If the table is named same as the class, you don't need to declare this
    // property
    // protected $table = 'project';
}