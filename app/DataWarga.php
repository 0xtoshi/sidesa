<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataWarga extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];

    public function data()
    {
        return $this->hasMany(data_warga::class);
    }
    
}
