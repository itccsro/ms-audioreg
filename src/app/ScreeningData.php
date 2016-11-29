<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScreeningData extends Model
{
    protected $table = 'screenings_data';

    /**
     * Defines the relationship between ScreeningData and Screening.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function screeningData()
    {
        return $this->belongsTo('App\Screening');
    }
}
