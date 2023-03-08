<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * @var string
     */
    protected $isbn;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $author;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var float
     */
    protected $price;

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
