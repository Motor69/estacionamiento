    <html lang="en">
    <head>
        <title>
            Bienvenido al sistema de estacionamiento
        </title>
        <script src="scripts/js/funciones.js"></script>
        <link href="css/bootstrap.min.css"rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>
        <section class="h-100 gradient-form" style="background-color:#eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="imagenes/ing.jpg"
                                        style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Bienvenido al sistema</h4>

                                    </div>
                                    <form action="login.php" method="POST">
                                        <p>Ingresa los datos de tu cuenta</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label">Usuario</label>
                                            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Correo o usuario"/>
                                            
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" >Contraseña</label>
                                            <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="********"/>
                                            
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Ingresar</button>
                                            <a class="text-muted" href="#!">Recordar contraseña?</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center ph4">
                                            <p class="mb-0 me-2"> No tienes cuenta?</p>
                                            <button type="button" class="btn btn-outline-danger">Crear cuenta</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Bienvenido al sistema de control de estacionaiento</h4>
                                    <p class="small mb-0">Texto aqui</p>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
    </div>

        </div>

        </section>
        
        <sccript src="scripts/js/bootstrap.bundle.min.js">
    </script>
    </body>


    </html>
