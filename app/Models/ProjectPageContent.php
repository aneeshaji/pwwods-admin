<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPageContent extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = false;

    protected $fillable = [
        'contents'
    ];
}