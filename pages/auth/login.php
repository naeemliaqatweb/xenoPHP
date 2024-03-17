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
                                    <h2>Login form</h2>
                                    <form action="/submit-login" method="POST">
                                             <div class="mb-3 mt-3">
                                                      <label for="email">Email:</label>
                                                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                             </div>
                                             <div class="mb-3">
                                                      <label for="pwd">Password:</label>
                                                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                                             </div>
                                             <div class="form-check mb-3">
                                                      <label class="form-check-label">
                                                               <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                                      </label>
                                             </div>
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                             <a href="register" class="btn btn-dark">Register</a>

                                    </form>
                           </div>
                  </div>
         </div>

</body>

</html>