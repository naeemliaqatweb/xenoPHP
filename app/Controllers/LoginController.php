<?php

namespace App\Controllers;

use App\Models\User;

class LoginController
{

         public function index()
         {
                  view("auth.login");
         }
         public function login()
         {
                  $user = new User();
                  $user->email = $_POST['email'];
                  $user->password = $_POST['password'];
                  if ($user->login()) {
                           $_SESSION['ID'] = $user->id;
                           $_SESSION['NAME'] = $user->name;
                           redirect('dashboard');

                           exit();
                  } else {
                           echo "user not register";
                           redirect('login');
                  }
         }
}
