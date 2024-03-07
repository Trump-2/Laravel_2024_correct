<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    // 老師建議在 model.php 加上這行；但官網沒有
    protected $table = "cats";
    use HasFactory;
}
