

<?php 
// Registration, iam going to look for place inside project to hide it...

    
    if(isset($_POST['reset'])) {

        if(isset($_SESSION['login'])) {
            session_destroy();
            unset($_SESSION['login']);
            unset($_SESSION['usuario_nombre']);
            unset($_SESSION['usuario_id']);
            unset($_SESSION['usuario_sobrenome']);
            unset($_SESSION['usuario_rol']);
        }

        if(isset($_COOKIE['_uid_']) && isset($_COOKIE['_uiid_'])) {
            setcookie('_uid_', '', time() - 60 * 60 * 24, '/', '', '', true);
            setcookie('_uiid_', '', time() - 60 * 60 * 24, '/', '', '', true);
        }

        header("Location: {$curr_page}");

    }

    if(isset($_SESSION['login'])) { 
        $usuario_id = $_SESSION['usuario_id'];
        $usuario_sobrenome = $_SESSION['usuario_sobrenome'];
        $sql = "SELECT * FROM usuarios WHERE usuario_id = :id AND usuario_sobrenome= :sobrenome";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id' => $usuario_id,
            ':sobrenome' => $usuario_sobrenome
        ]);
        $usuarios = $stmt->fetch(PDO::FETCH_ASSOC);
        $usuario_nombre = $usuarios['usuario_nombre'];
        $usuario_rol     = $usuarios['usuario_rol'];
        $_SESSION['usuario_nombre'] = $usuario_sobrenome;
        $_SESSION['usuario_rol'] = $usuario_rol;
        $_SESSION['login'] = 'success';
        ?>
        <form action="<?php echo $curr_page; ?>" method="POST">
            <button name="reset" class="btn-teal btn rounded-pill px-4 ml-lg-4">Sign out (<?php echo $usuario_nombre; ?>)</button>
        </form>
    <?php } else {
        if(!isset($_COOKIE['_uid_']) && !isset($_COOKIE['_uiid_'])) {
            echo '<a class="btn-teal btn rounded-pill px-4 ml-lg-4" href="backend/signin.php">Sign in</a>';
            echo '<a class="btn-teal btn rounded-pill px-4 ml-lg-4" href="backend/signup.php">Sign up</a>';
        } else {
            $usuario_id = base64_decode($_COOKIE['_uid_']);
            $usuario_sobrenome = base64_decode($_COOKIE['_uiid_']);
            $sql = "SELECT * FROM usuarios WHERE usuario_id= :id AND usuario_sobrenome = :sobrenome";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':id' => $usuario_id,
                ':sobrenome' => $usuario_sobrenome
            ]);
            $usuarios = $stmt->fetch(PDO::FETCH_ASSOC);
            $usuario_nombre = $usuarios['usuario_nombre'];
            $usuario_rol = $usuario_rol['usuario_rol'];
            $_SESSION['usuario_nombre'] = $usuario_sobrenome;
            $_SESSION['usuario_rol'] = $usuario_rol;
            $_SESSION['login'] = 'success'; ?>

            <form action="<?php echo $curr_page; ?>" method="POST">
                <button name="reset" class="btn-teal btn rounded-pill px-4 ml-lg-4">Sign out (<?php echo $usuario_rol; ?>)</button>
            </form>

       <?php }
        
    }
?>