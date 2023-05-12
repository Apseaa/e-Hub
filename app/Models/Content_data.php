<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content_data extends Model
{
    public $table = 'android_table';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
