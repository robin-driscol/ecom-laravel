<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
      /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}