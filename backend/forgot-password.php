<?php require_once "../includes/db.php"; ?>



<!DOCTYPE html>


<html lang="en">


    <head>


        <meta charset="utf-8" />


        <meta http-equiv="X-UA-Compatible" content="IE=edge" />


        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


        <title>EducaBlog || Admin Panel</title>


        <link href="css/styles.css" rel="stylesheet" />


        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />


        <script data-search-pseudo-elements defer src="js/all.min.js"></script>


        <script src="js/feather.min.js"></script>


    </head>


    <body class="bg-primary">


        <div id="layoutAuthentication">


            <div id="layoutAuthentication_content">


                <main>


                    <div class="container">


                        <div class="row justify-content-center">


                            <div class="col-lg-5">


                                <div class="card shadow-lg border-0 rounded-lg mt-5">


                                    <div class="card-header justify-content-center"><h3 class="font-weight-light my-4">Restablecer la contraseña</h3></div>


                                    <div class="card-body">

                                    <?php 

                                    if (isset($_POST["reset"])) {

                                        $usuario_sobrenome = trim($_POST["sobrenome"]);

                                        $usuario_correo = trim($_POST["correo"]);

                                        $sql = " SELECT * FROM usuarios WHERE usuario_sobrenome = :sobrenome AND usuario_correo = :correo";

                                        $stmt = $pdo->prepare($sql);

                                        $stmt->execute([

                                            ":sobrenome" => $usuario_sobrenome,

                                            ":correo" => $usuario_correo,

                                        ]);


                                        $count = $stmt->rowCount();

                                        if ($count == 1) {

                                            $usuarios = $stmt->fetch(PDO::FETCH_ASSOC);

                                            $usuario_id =  $usuarios['usuario_id'];

                                            $show = true;

                                            // echo "<p class='alert alert-success'>Gracias,se encuentra el usuario en la base de datos</p>";

                                        } else {

                                            echo "<p class='alert alert-danger'>Mala credencial</p>";

                                        }

                                    } 

                                    if(isset($_POST['update'])){

                                        $nueva_contrasena = trim($_POST['nueva_contrasena']);

                                        $confirmar_contrasena = trim($_POST['confirmar_contrasena']);

                                        $usuario_id = $_POST['id'];

                                        if($nueva_contrasena == $confirmar_contrasena){

                                            $sql1 = "UPDATE usuarios SET usuario_password = :nueva_contrasena WHERE usuario_id = :id";

                                            $stmt = $pdo->prepare($sql1);

                                            $stmt->execute([

                                                ":nueva_contrasena" => password_hash($nueva_contrasena, PASSWORD_DEFAULT),

                                                ":id" => $usuario_id,

                                            ]);

                                            echo "<p class='alert alert-success'>Contraseña actualizada con éxito</p>";

                                        } else {

                                            echo "<p class='alert alert-danger'>Las contraseñas no coinciden</p>";

                                        }

                                    }

                                    

                                    

                                    ?>

              <?php if (isset($show)) { ?>


                                             <form action="forgot-password.php" method="POST">

                                        <div class="form-group">


                                        <input name="id" value="<?php echo $usuario_id ;?>" type="hidden"/>

                                        <label  class="small mb-1" for="inputEmailAddress">Nueva Contraseña</label>



                                   <input name="nueva_contrasena" class="form-control py-4" id="nueva_contraseña" type="password" aria-describedby="emailHelp" placeholder="Ingrese tu nueva contraseña" required="true"/></div>



                                    <div class="form-group">



                                  <label class="small mb-1" for="inputEmailAddress">Confirmar Contraseña</label>



                                <input  name="confirmar_contrasena" class="form-control py-4"  type="password"  placeholder="Confirme tu nueva contraseña" required="true"/></div>



                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">



                               <a class="small" href="signin.php">Volver a iniciar sesión</a>



                                    <button name="update" class="btn btn-primary">Actualizar Contraseña</button>



                                        </div>



                                       </form>



                            <?php } else { ?>



                              <form action="forgot-password.php" method="POST">



                              <div class="form-group">



                                 <label  class="small mb-1" for="inputEmailAddress">Sobrenome</label>




                               <input name="sobrenome" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Ingrese tu sobre nome" required="true"/></div>


                                      <div class="form-group">


                                  <label class="small mb-1" for="inputEmailAddress">Correo</label>


        <input  name="correo" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Ingrese tu correo" required="true"/></div>


    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">


    <a class="small" href="signin.php">Volver a iniciar sesión</a>


    <button name="reset" class="btn btn-primary">Restablecer la contraseña</button>


    </div>


    </form>


<?php } ?>



<div class="card-footer text-center">


    <div class="small"><a href="signup.php">¿Ya tienes una cuenta?Ingrese aqui</a></div>


</div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </main>

            </div>

        </div>


        <!--Script JS-->

        <script src="js/jquery-3.4.1.min.js"></script>

        <script src="js/bootstrap.bundle.min.js"></script>

        <script src="js/scripts.js"></script>

    </body>

</html>
