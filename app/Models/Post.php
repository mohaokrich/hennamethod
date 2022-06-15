<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];   

    protected $appends = ['image_full_path'];   

    protected function imageFullPath(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->photo && Storage::disk('public')->exists($this->photo) ? Storage::disk('public')->url($this->photo) : 'img/dry-grass.png'
        );
        
    }
}
