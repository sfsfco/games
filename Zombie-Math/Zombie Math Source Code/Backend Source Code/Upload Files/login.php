<?php include './templates/header.php'; ?>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <main class="main-content container-fluid">
          <!-- <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>Success!</strong> Your profile has been updated! </div> -->
          <div class="main-content-container col-sm-8 col-md-6 col-lg-3 mx-auto" style="margin-top: 130px;">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 text-center mb-0">
                <h3 class="page-title mb-2">Zombie Math - Login</h3>
                <p class="mb-1">Log in to your dashboard.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                 <ul class="list-group list-group-flush">
                    <li class="list-group-item px-3">
                      <form action="authenticate.php" method="post">
                        <div class="input-group mb-3">
                          <label for="exampleInputEmail1">Username</label>
                          <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">person</i>
                              </span>
                            </span>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Username"> 
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <label for="exampleInputEmail1">Password</label>
                          <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">lock</i>
                              </span>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          </div>
                        </div>
                        <button type="submit" class="mb-1 btn btn-primary btn-block">Sign In</button>
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
              <p class="col-12 text-center">Copyright © <?= date('Y'); ?> <a href="https://hamzawasim.net" rel="nofollow">Hamza Wasim.</a></p>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>