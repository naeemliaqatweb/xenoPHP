<?php
include_once 'auth.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
         <title>Login page</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

         <div class="container mt-3">
                  <div class="row justify-content-center">
                           <div class="col-lg-6">
                                    <h2>DASHBOARD</h2>

                                    <h4><?php echo $_SESSION['NAME']; ?></h4>
                                    <?php
                                    if (isset($_SESSION['NAME'])) {
                                    ?>
                                             <a href="/logout" class="btn btn-dark">Logout</a>
                                    <?php
                                    }
                                    ?>
                           </div>
                  </div>
         </div>

</body>

</html>