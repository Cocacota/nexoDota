<?php

// app/Models/Book.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table='books';
    protected $fillable = [
          'title','country'
    ];

    

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
