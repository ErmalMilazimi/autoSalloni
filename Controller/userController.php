<?php
include_once '../Models/userMapper.php';
include_once '../Models/userModel.php';
class UserController
{
    public function InsertUser($username, $password, $email)
    {
        $user = new User($username, $password, $email);
        $userMapper = new UserMapper($user);
        $userMapper->Insert($username, $password, $email);

    }

}
