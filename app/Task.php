<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Make Task attributes guarded to protect against mass-assignment database vulnerabilities
    // Makes all Task attributes guarded, and so not mass-assignable
    protected $guarded = [];
}
