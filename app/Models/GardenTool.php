<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GardenTool extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'price', 'brand', 'image'];
}
