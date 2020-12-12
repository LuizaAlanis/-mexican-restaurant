<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
    #switch{
        -webkit-appearance: none;
        position:relative;
        -moz-appearance: none;
        appearance: none;
        border: none;
    }
    </style>
</head>
<body>
    <?php
       include 'config.php';
    ?>
    <header class="header">
    <a href="index.php" class="logo">BALMY </a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li style="padding:18px;">
            <label for="switch">
            <input type="checkbox" id="switch">
                <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-circle-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15V1a7 7 0 1 1 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                </svg>
                
            </label>
        </li>
        <li>
            <a href="?lang=en" style="padding-bottom:0;"><img src="languages/united-states.svg" width="27em" height="27em"/></a>	
        </li>
        <li>
            <a href="?lang=pt-br" style="padding-bottom:0;"><img src="languages/brazil.svg" width="27em" height="27emem"/></a>	
        </li>   
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="blog.php">Blog</a></li>
        <?php if(empty ($_SESSION['ID'])) { ?>
            <li>
                <a href="login.php"><?php echo $lang['signIn']?></a>
            </li>
        <?php } else {
            if($_SESSION['Status'] == 0) {
                $consulta_usuario = $cn->query("select nome from usuario where id = '$_SESSION[ID]'");
                $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
        ?>
            <li><a href="#"><?php echo $lang['hello']?><?php echo $exibe_usuario['nome']; ?></a></li>
            <li><a href="sair.php"><?php echo $lang['exit']?></a></li>
        <?php } else { ?>
            <li><a href="blogLista.php"><?php echo $lang['editBlog']?></a></li>
            <li><a href="responder.php"><?php echo $lang['editFAQ']?></a></li>
            <li><a href="sair.php"><?php echo $lang['exit']?></a></li>
        <?php } } ?>
    </ul>
    </header>
    <script src="tema.js"></script>
</body>
</html>