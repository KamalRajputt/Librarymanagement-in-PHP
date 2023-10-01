<!DOCTYPE html>
<php lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/bootstrap.min.css"rel="stylesheet" >

  <link rel="stylesheet"href="./css/style.css">
  <script src="./java_script/1c26fb5c51.js"
   crossorigin="anonymous">

   </script>
 
  <title>Login | Kamal Library </title>
</head>
<body style="background: #212529">

    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row">
            <div class="col-md-12 login-form">
                <div class="card mb-3"
                 style="max-width: 900px;">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="./image/emil-widlund-xrbbXIXAWY0-unsplash.jpg" 
                        class="img-fluid rounded-start">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h1 class="card-title text-uppercase fw-bold">Kamal Library</h1>
                          <p class="card-text">
                           Enter Email and password to login
                          </p>
                          <form action="./Dashboard.php">
                            <div class="mb-3">
                              <label for="exampleInputEmail1"
                               class="form-label">Email Address</label>
                              <input type="email" class="form-control" 
                              id="exampleInputEmail1" aria-describedby="emailHelp">
                             
                            <div class="mb-3">
                              <label for="exampleInputPassword1" 
                              class="form-label">Password</label>
                              <input type="password"
                               class="form-control" id="exampleInputPassword1">
                            </div>
                          
                            <button type="submit" 
                            class="btn btn-primary">Login</button>
                          </form>
                        <hr/>
                         <a href="./forget-pasword.php"
                         class="card-link link-underline-light">
                         Forgot password? 
                         
                        </a>

                          
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

        </div>
    </div>
 
  <script src="java_script/bootstrap.bundle.min.js"
   integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
   crossorigin="anonymous"></script>
  

</body>
</html>

