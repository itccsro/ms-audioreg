<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{

    protected $fillable = ['original_name'];

    public function generateStorageName()
    {
        return $this->id . '.xml';
    }

    /**
     * Defines the relationship between User and Upload.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
