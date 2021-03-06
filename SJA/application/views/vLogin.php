<?php 
    include("layouts/header.php")
?>
<body class = "bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">SJA ONLINE</h1>
                            </div>
                            <form class="user" action="login" method="POST">
                            <div class="form-group">
                                <input type="user" name="user" class="form-control form-control-user" id="user" placeholder="Nombre de Usuario">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Recu&eacute;rdame</label>
                                </div>
                            </div>
                            <input class="btn btn-primary btn-user btn-block" type="Submit" value="Ingresar"></input>
                            <hr>
                            </form>
                            <div class="text-center">
                            <a class="small" href="forgot-password.html">Olvid&oacute; la contraseña?</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
        
<?php include("layouts/footer.php")?>