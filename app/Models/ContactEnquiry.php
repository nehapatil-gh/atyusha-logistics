<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'phone', 'email', 'company', 'service', 'details', 'website', 'status'])]
class ContactEnquiry extends Model {}
