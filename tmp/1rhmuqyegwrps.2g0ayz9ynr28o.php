<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
    <div class="container">
    <form class="form-signin  w-50 mx-auto" method="POST" action="/auth">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      
      <label for="Username" class="sr-only">Username</label>
      <input type="text" id="Username" class="form-control" placeholder="Username" required="" a utofocus="" name="username">
      
      
      
      <label for="inputPassword" class="sr-only mt-3">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="password">
     
      <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
    </div>
</body>
</html>