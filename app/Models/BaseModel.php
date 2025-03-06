<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];
    protected $fillable = [];

    public static function boot()
    {
        parent::boot();
        
        static::saving(function ($model) {
            return false;
        });

        static::creating(function ($model) {
            return false;
        });

        static::updating(function ($model) {
            return false;
        });

        static::deleting(function ($model) {
            return false;
        });
    }
}
