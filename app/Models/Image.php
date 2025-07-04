<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ["url"];
    public function products(): MorphToMany{
        return $this->morphedByMany(Product::class, 'imageable');
    }
}
