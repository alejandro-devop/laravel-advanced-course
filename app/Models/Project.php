<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'url', 'description'];
    // If the table is named same as the class, you don't need to declare this
    // property
    // protected $table = 'project';
    public function getRouteKeyName()
    {
    	return 'url';
    }
}
