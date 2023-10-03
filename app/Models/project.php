<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'tech_stack',
        'logo',
        'visibility',
        'source_code_url',
        'preview_url'
    ];
}
