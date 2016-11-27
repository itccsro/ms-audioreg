<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{

    protected $fillable = ['original_file_name'];

    public function generateStorageName()
    {
        return $this->id . '.xml';
    }

}
