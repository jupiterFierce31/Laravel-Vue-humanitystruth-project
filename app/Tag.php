<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function investigations()
    {
        return $this->belongsToMany(Investigation::class);
    }
    
    public function files()
    {
        return $this->belongsToMany(File::class);
    }
}
