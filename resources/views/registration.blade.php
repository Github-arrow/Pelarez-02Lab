<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 02</title>
    @vite (['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand fs-4 fw-bold">Tagoloan Community College</a>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </header>
    <div class="section-login">
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <div class="row border rounded-5 p-3 bg-white shadow box-area" style="width: 930px">
                <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box">
                    <div class="featured-image">
                        <img src="/img/TCC.png" height="260" alt="featured-image">
                    </div>
                </div>
                <div class="col md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-2 fs-3 fw-bold">
                            <p class="text-center mt-3">Registration Form</p>
                        </div>
                        <div class="input-group mb-1">
                            <input type="text" class="form-control from-control-lg bg-light fs-6" placeholder="Username">
                        </div>
                        <div class="input-group mb-1">
                            <input type="text" class="form-control from-control-lg bg-light fs-6" placeholder="Email Address">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control from-control-lg bg-light fs-6" placeholder="Password">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control from-control-lg bg-light fs-6" placeholder="Verify Password">
                        </div>
                        <div class="input-group mb-1 d-flex justify-content-between">
                            <div class="form-check">
                                <div class="remember">
                                    <input type="checkbox" class="form-check-input" id="formCheck">
                                    <label for="formcheck" class="form-check-label text-secondary mb-4">Remember Me</label>
                                </div>
                                <div class="forgot">
                                    <small><a href="#" class="text-secondary mt-1">Forgot Password</a></small>
                                </div>
                            </div>
                        </div>
                            <div class="input-group mb-1">
                                <button class="btn btn-lg btn btn-success fs-5 w-100 fw-bold">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
