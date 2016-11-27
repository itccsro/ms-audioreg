<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScreeningTest extends Model
{
    /**
     * Defines the relationship between ScreeningTest and Screening.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function screening()
    {
        $this->belongsTo('App\Screening');
    }

    /**
     * Defines the relationship between ScreeningTest and Upload.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function upload()
    {
        $this->belongsTo('App\Upload');
    }

    /**
     * Defines the relationship between ScreeningTest and ScreeningTestData.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function screeningTestData()
    {
        $this->hasOne('App\ScreeningTestData');
    }
}
