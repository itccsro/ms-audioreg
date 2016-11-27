<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScreeningTestData extends Model
{
    /**
     * Defines the relationship between ScreeningTestData and ScreeningTest.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function screeningTest()
    {
        $this->belongsTo('App\ScreeningTest');
    }
}
