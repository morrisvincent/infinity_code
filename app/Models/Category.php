<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected $fillable=['name'];
    use HasFactory;

    public function announcements(){
        return $this->hasMany(Announcement::class);
    
    }
}
