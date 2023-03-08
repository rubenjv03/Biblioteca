<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @var string
     */
    protected $name;

    public function books()
    {
        return $this->belongsToMany('App\Models\Book');
    }
}
