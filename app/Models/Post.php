<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
  protected $fillable = [
     'user_id',
     'hole_id',
     'evaluation',
     'body',
     'image_url'
]; 
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    

}
