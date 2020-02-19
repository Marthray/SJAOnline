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
                            <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                            </div>
                            <form class="user">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nombre de Usuario">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Recuerdame</label>
                                </div>
                            </div>
                            <a href="<?php echo base_url('clogin/login'); ?>" class="btn btn-primary btn-user btn-block">
                                Ingresar
                            </a>
                            <hr>
                            </form>
                            <div class="text-center">
                            <a class="small" href="forgot-password.html">Olvidó la contraseña?</a>
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