<?php session_start(); ?>
<?php require_once('../includes/db.php'); ?>

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
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">

                                <?php
                                    if(isset($_POST['submit'])) {
                                        $email = trim($_POST['email']);
                                        $password = trim($_POST['password']);
                                        
                                        $sql = "SELECT * FROM usuarios WHERE usuario_correo = :email";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute([
                                            ':email' => $email
                                        ]);
                                        $count = $stmt->rowCount();
                                        if($count == 0) {
                                            $error = "Mala credencial!";
                                        } else if($count > 1) {
                                            $error = "Mala Credencial!";
                                        } else if($count == 1) {
                                            $usuarios = $stmt->fetch(PDO::FETCH_ASSOC);
                                            $user_password_hash = $usuarios['usuario_password'];
                                            $usuario_nombre = $usuarios['usuario_nombre'];
                                            $usuario_rol     =$usuarios['usuario_rol'];
                                            if(password_verify($password, $user_password_hash)) {
                                                $success = "Sign in successful!";
                                                if(!empty($_POST['check'])){
                                                    // Cookies, user id, user nickname
                                                    $usuario_id = $usuarios['usuario_id'];
                                                    $usuario_sobrenome =$usuarios['usuario_sobrenome'];
                                                    $d_usuario_id = base64_encode($usuario_id);
                                                    $d_usuario_sobrenome = base64_encode($usuario_sobrenome);
                                                    $d_usuario_nombre = base64_encode($usuario_nombre);

                                                    // for user_id
                                                    
                                                    setcookie('_uid',$d_usuario_id, time() + 60 * 60 * 24, '','','', true);

                                                    // for user nickname
                                                    setcookie('_uiid',$d_usuario_sobrenome, time() + 60 * 60 * 24, '','','', true);
                                                    // set cookie user name
                                                    setcookie('_uiid',$d_usuario_nombre, time() + 60 * 60 * 24, '','','', true);
                                                }
                                                $_SESSION['usuario_nombre'] = $usuario_nombre;
                                                $_SESSION['usuario_rol'] = $usuario_rol;
                                                $_SESSION['usuario_id'] = $usuarios['usuario_id'];
                                                $_SESSION['usuario_sobrenome'] =$usuarios['usuario_sobrenome'];
                                                $_SESSION['login'] = 'success';
                                               // header("Refresh:2;url=backend/index.php");
                                                header('Location: ../backend/index.php');
                                            } else {
                                                $error_password = "Mala Contraseña!";
                                            }
                                        }
                                    }
                                ?>

                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header justify-content-center"><h3 class="font-weight-light my-4">INICIAR SESIÓN</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($success)) {
                                                echo "<p class='alert alert-success'>{$success}</p>";
                                            }
                                            if(isset($error))  {
                                                echo "<p class='alert alert-danger'>{$error}</p>";
                                            } else if(isset($error_password)) {
                                                echo "<p class='alert alert-danger'>{$error_password}</p>";
                                            }
                                        ?>
                                        <form action="signin.php" method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Correo Electrónico</label>
                                                <input name="email" class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Ingrese tu correo electrónico" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Contraseña</label>
                                                <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Ingrese tu contraseña" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input name="check" class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Recordar contraseña</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="#"></a>
                                                <button name="submit" class="btn btn-primary btn-block" type="submit">INICIAR SESIÓN</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="signup.php">Necesitas una cuenta?Registrese aquí!</a></div>
                                        <div class="small"><a href="forgot-password.php">Olvida su contraseña?Recuperala aquí!</a></div>
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
