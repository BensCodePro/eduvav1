<?php session_start(); ?>
<?php require_once("../includes/db.php"); ?>

<?php
if (isset($_SESSION['login']) || isset($_COOKIE['_uid_']) || isset($_COOKIE['_uiid_'])) {

header("Location:index.php");

exit(); // Stop executing the script and redirect immediately

}

?>
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
                    <?php
                        if(isset($_POST['submit'])){
                            $nombres =  trim($_POST['nombres']);
                            $apellidos =  trim($_POST['apellidos']);
                            $nombre_completo = $nombres . "" .$apellidos;
                            $sobrenome        = trim($_POST['sobrenome']);

                            $sobrenome = trim($_POST['sobrenome']);
                            // nickname already exist
                            $sql2 = "SELECT * FROM usuarios WHERE usuario_sobrenome = :sobrenome";
                            $stmt2 = $pdo->prepare($sql2);
                            $stmt2->execute([
                                ':sobrenome' => $sobrenome
                            ]);
                            $countNickname = $stmt2->rowCount();
                            if($countNickname != 0) {
                                $error_nickname_exist = "Sobrenome ya existe!";
                            };

                            $correo = trim($_POST['correo']);
                            // email already exist
                            $sql1 = "SELECT * FROM usuarios WHERE usuario_correo = :correo";
                            $stmt1 = $pdo->prepare($sql1);
                            $stmt1->execute([
                                ':correo' => $correo
                            ]);
                            $countEmail = $stmt1->rowCount();
                            if($countEmail != 0) {
                                $error_email_exist = "Correo ya existe!";
                            }

                            $password = trim($_POST['password']);
                            $confirm_password = trim($_POST['confirm-password']);
                            if($password != $confirm_password) {
                                $error = "La contraseña no se cumple";
                            } else {
                                date_default_timezone_set('asia/dhaka');
                                $hash = password_hash($password, PASSWORD_BCRYPT, ['cost'=>10]);
                                $sql = "INSERT INTO usuarios (usuario_nombre, usuario_sobrenome, usuario_correo, usuario_password, usuario_fotos, registro_en) VALUES (:nombre, :sobrenome, :correo, :password, :fotos, :date)";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    ':nombre' =>  $nombre_completo,
                                    ':sobrenome' =>  $sobrenome,
                                    ':correo' => $correo,
                                    ':password' => $hash,
                                    ':fotos' => 'default-logo.png',
                                    ':date' => date("M n, Y") . ' at ' . date("h:i A")
                                ]);
                                $success = true;
                            }

                        }
                    ?>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5 mb-3">
                                    <div class="card-header justify-content-center"><h3 class="font-weight-light my-4">Crear Cuenta</h3></div>
                                    <div class="card-body">
                                        <form action="signup.php" method="POST">
                                            <?php 
                                                if(isset($error_nickname_exist)) {
                                                    echo "<p class='alert alert-danger'>{$error_nickname_exist}</p>";
                                                } else if(isset($error_email_exist)) {
                                                    echo "<p class='alert alert-danger'>{$error_email_exist}</p>";
                                                } else if(isset($error)) {
                                                    echo "<p class='alert alert-danger'>{$error}</p>";
                                                } else if(isset($success)) {
                                                    echo "<p class='alert alert-success'>
                                                            Account created successfully. <a href='signin.php'>Sign in now</a>
                                                          </p>";
                                                }
                                            ?>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nombres</label>
                                                        <input name="nombres" class="form-control py-4" id="inputFirstName" type="text" placeholder="Ingrese tus nombres" required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Apellidos</label>
                                                        <input name="apellidos" class="form-control py-4" id="inputLastName" type="text" placeholder="Ingrese tus apellidos" required="true" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="userNickname">Sobrenome</label>
                                                <input name="sobrenome" class="form-control py-4" id="userNickname" type="text" placeholder="Ingrese tu sobrenome" required="true" />
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Correo</label>
                                                <input name="correo" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Ingrese tu correo" required="true" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Contraseña</label>
                                                        <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Ingrese tu contraseña" required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirma contraseña</label>
                                                        <input name="confirm-password" class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirma tu contraseña" required="true" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button name="submit" class="btn btn-primary btn-block" type="submit">Crear cuenta</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            <a href="signin.php">¿Ya tienes una  cuenta?Ingrese aqui</a>
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
