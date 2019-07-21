<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
  protected $fillable = [
      'delivery_address', 'prescription',
  ];
}
