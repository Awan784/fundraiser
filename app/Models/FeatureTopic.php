<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureTopic extends Model
{
    use HasFactory;
    protected $table='feature_topics';
    public $fillable = [
        'title',
        'description',
        'status',
        'topic_image',
    ];
}
