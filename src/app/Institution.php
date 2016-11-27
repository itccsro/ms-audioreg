<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    /**
     * Defines the relationship between Institution and User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function institution()
    {
        return $this->hasMany('App\User');
    }
}
