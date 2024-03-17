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
                                    <h2>Register form</h2>
                                    <form action="submit-register" method="post">
                                             <div class="mb-3 mt-3">
                                                      <label for="name">Name:</label>
                                                      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
                                             </div>
                                             <div class="mb-3 mt-3">
                                                      <label for="email">Email:</label>
                                                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                             </div>
                                             <div class="mb-3">
                                                      <label for="password">Password:</label>
                                                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                             </div>

                                             <button type="submit" class="btn btn-primary">Submit</button>
                                             <a href="login" class="btn btn-dark">Login</a>
                                    </form>
                           </div>
                  </div>
         </div>

</body>

</html>