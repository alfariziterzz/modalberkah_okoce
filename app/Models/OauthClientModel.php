<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OauthClientModel extends Model
{
  use HasFactory;

  protected $table = 'oauth_clients';
}
