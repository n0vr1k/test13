<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhonebookModal extends Model
{
    use HasFactory;

    protected $table = "phonebooks";

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];


}

