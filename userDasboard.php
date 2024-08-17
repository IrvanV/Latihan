<html>
    <body>
        <?php
            session_start();
            if($_SESSION ['status'] == 'login') {
                echo '<h1> Hai ' . $_SESSION['USERNAME'].'</h1><br>';
                echo '<a href="sessionLogout.php">Logout</a>';
            }
        ?>
    </body>
</html>