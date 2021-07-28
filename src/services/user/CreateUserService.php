<?php
namespace parkingLotManagerUserServices;

class CreateUserService
{
    var $newUserData;
    public function __construct($newUserData)
    {
        $this->newUserData = $newUserData;
    }

    public function showUserData() {
        echo $this->newUserData;
    }
}