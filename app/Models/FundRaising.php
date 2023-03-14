<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundRaising extends Model
{
    use HasFactory;
    protected $table = 'fund_raisings';

    public $fillable = [
        'country',
        'fund_name',
        'reference_id',

    ];

}
