<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Balmy Developments - Cadastre-se</title>
</head>
<body>
    <?php
        include 'nav.php';
        include 'config.php';
    ?>
    <div class="animated animatedFadeInUp fadeInUp">
    <div class="abacaxi">
            <form method="POST" action="inserirUsuario.php" name="logon" class="form">
                <input type="text" name="txtnome" class="textbox" required id="nome" placeholder="<?php echo $lang5['name']; ?>"> </br></br>               
                <input type="email" name="txtemail" class="textbox" required id="email" placeholder="Email"></br></br>
                <input type="password" name="txtsenha" class="textbox" required id="senha" placeholder="<?php echo $lang5['password']; ?>"></br>
                <br>
                <button type="submit" class="button"><?php echo $lang5['signUp']; ?></button>
                <div class="notMember">
                    <a href="login.php"><?php echo $lang5['signIn']; ?></a>
                </div>
            </form>
        </div>
    </div>
    </br></br></br></br></br></br>
    <?php
        include 'footer.php';
    ?>
</body>
</html>