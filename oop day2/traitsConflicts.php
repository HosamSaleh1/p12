<?php

trait media {
    public function uploadPhoto()
    {
        echo "upload photo version 1";
    }
}

trait mediaV2 {
    public function uploadPhoto () {
        echo "upload photo version 2";
    }
}


class user2 {
    use media,mediaV2{
        media::uploadPhoto AS uploadPhotoV1;
        mediaV2::uploadPhoto insteadOf media;
    }

    public function updateProfile()
    {
        $this->uploadPhoto();
    }
}

$user = new user2;

$user->updateProfile();

// namespace
// autoload classes
// absoulte path , relative path
// json
