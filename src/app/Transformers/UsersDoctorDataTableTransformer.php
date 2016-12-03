<?php

namespace App\Transformers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

class UsersDoctorDataTableTransformer extends TransformerAbstract
{
    protected $index = 0;

    /**
     * @param array $row
     * @return array
     */
    public function transform(array $row)
    {
        $this->index++;

        $row['id'] = $this->index;
        $created_at = new Carbon($row['created_at']);
        $row['created_at'] = $created_at->format('d M Y');

        return $row;
    }
}
