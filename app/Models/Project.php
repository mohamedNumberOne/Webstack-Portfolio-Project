<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected  $fillable = [
        "project_name",
        "project_details",
        "project_photo",
    ];




    public function users()
    {
        return $this->belongsToMany(User::class, 'project_user_comment')
        ->withPivot('comment')
        ->withTimestamps();
    }

}
