<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
    	'name',
		'email',
		'address',
		'phone',
		'validity',
		'logotype',
		'contact',
		'student_code',
		'teacher_code',
		'state_id',
		'citie_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
