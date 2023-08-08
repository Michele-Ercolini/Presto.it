<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annuouncement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'price'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
