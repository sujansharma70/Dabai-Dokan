<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
      'issue_date', 'deliver_date', 'is_deliver',
  ];
}
