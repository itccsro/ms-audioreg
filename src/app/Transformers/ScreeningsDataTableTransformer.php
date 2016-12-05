<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;

class ScreeningsDataTableTransformer extends TransformerAbstract
{
    protected $index = 0;
    /**
     * @return  array
     */
    public function transform(array $row)
    {
//        $this->index++;
//
//        $row['id'] = $this->index;
//        $created_at = new Carbon($row['created_at']);
//        $row['created_at'] = $created_at->format('d M Y');

        return $row;
    }
}
