<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;

class UsersDataTableTransformer extends TransformerAbstract
{
    protected $index = 0;
    /**
     * @return  array
     */
    public function transform(User $user)
    {
        $this->index++;
        return [
            'id'         => $this->index,
            'name'       => $user->name,
            'email'      => $user->email,
            'created_at' => $user->created_at->format('d M Y'),
        ];
    }
}
