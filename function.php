<?php

function handleForm($data, $user) 
{
    if ( !empty($data['email']) && !empty($data['password']) ) {
        if ($data['email'] === $user['email']) {
            $testHashPassword = md5($data['password']);
            if ($user['password'] === $testHashPassword) {
                $_SESSION['user'] = $user;
                header('Location: shop.php');
            } else {
                return "Password not match";
            }
        } else {
            return "User not found";
        }
    } else {
        return "Tous les champs sont obligatoires !";
    }
}