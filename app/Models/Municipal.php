<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Municipal extends Model
{
    use HasFactory;
    
    protected $fillable = [
		'district', 'municipality','town','population',
        'image','no_of_messages','free_text'
	];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            
            return asset('uploads/' . $this->image);
           //return Storage::disk('uploads')->url($this->image);
        }
        return asset('images/default-image.jpg');


    }

}
