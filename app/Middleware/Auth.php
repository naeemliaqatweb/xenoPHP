<?php

namespace App\Middleware;

class Auth
{
         public function handle()
         {

                  if (!isset($_SESSION['ID'])) {
                           redirect('login');
                           exit();
                  }
         }
}
