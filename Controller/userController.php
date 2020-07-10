<?php
include_once '../Models/userMapper.php';
include_once '../models/userModel.php';
class UserController
{
    public function InsertUser($emri, $mbiemri, $email)
    {
        $user = new User($emri, $mbiemri, $email);
        $userMapper = new UserMapper($user);
        $userMapper->Insert($emri, $mbiemri, $email);

    }

    public function GetStudents()
    {
    }
}
