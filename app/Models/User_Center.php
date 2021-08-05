<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Center extends Model
{
    use HasFactory;
    protected $fillable = [
		'centername','email','phone',
        'no_of_student','no_of_finish_room'
	];


}
