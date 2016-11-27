<?php

namespace App\Policies;

use App\User;
use App\Upload;
use Illuminate\Auth\Access\HandlesAuthorization;

class UploadPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the upload.
     *
     * @param  \App\User  $user
     * @param  \App\Upload  $upload
     * @return mixed
     */
    public function view(User $user, Upload $upload)
    {
        return $user->isDoctor() && $this->owns($user, $upload);
    }

    /**
     * Determine whether the user can download the upload.
     *
     * @param  \App\User  $user
     * @param  \App\Upload  $upload
     * @return mixed
     */
    public function download(User $user, Upload $upload)
    {
        return $user->isDoctor() && $this->owns($user, $upload);
    }

    /**
     * Determine whether the user can create uploads.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isDoctor();
    }

    /**
     * Tells whether given upload was made by given user.
     *
     * @param User $user
     * @param Upload $upload
     * @return bool
     */
    protected function owns(User $user, Upload $upload)
    {
        return $upload->user_id === $user->id;
    }
}
