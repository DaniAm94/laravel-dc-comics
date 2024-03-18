<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{

    protected $fillable = ['title', 'description', 'series', 'thumb', 'price', 'sale_date', 'artists', 'writers', 'type'];
    use HasFactory;
    use SoftDeletes;

    public function setPriceCurrency()
    {
        $this->price = "$$this->price";
    }
}
