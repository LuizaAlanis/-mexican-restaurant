<!doctype html>
<html lang="pt-br">
    <head>
        <title>Balmy Developments - Login</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include 'nav.php';
            include 'config.php';
        ?>
        <div class="animated animatedFadeInUp fadeInUp">
            <div class="abacaxi">
                <form method="POST" action="validaUsuario.php" name="logon" class="form">
                    <input type="email" name="txtemail" class="textbox" required id="email" placeholder="Email"> </br> </br>
                    <input type="password" name="txtsenha" class="textbox" required id="senha" placeholder="<?php echo $lang4['password']; ?>"> </br>
                    <br>
                    <button type="submit" class="button"><?php echo $lang4['signIn']; ?></button>
                    <div class="notMember">
                        <a href="cadastro.php"><?php echo $lang4['signUp']; ?></a>
                    </div>
                </form>
                
            </div>
        </div>

        <?php
            include 'footer.php';
        ?>
    </body>
</html>