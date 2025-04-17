<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    use HasFactory;//used for seeding to create model instances

    protected $fillable = ['title', 'author', 'category', 'stock'];//It tells Laravel which fields are mass assignable, i.e., allowed to be filled via Book::create($request->all()) or similar.
}
