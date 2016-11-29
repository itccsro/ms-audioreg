<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{


    /**
     * Defines the relationship between Screening and ScreeningData.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function screeningData()
    {
        return $this->hasOne('App\ScreeningData');
    }

    /**
     * Defines the relationship between Screening and ScreeningTest.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function screeningTests()
    {
        return $this->hasMany('App\ScreeningTest');
    }
}
