<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERRO 404</title>
    <link rel="stylesheet" href="style.css">
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    * {
        border: 0;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    :root {
        font-size: calc(16px + (20 - 16)*(100vw - 320px)/(1024 - 320));
    }

	body{
		background-color: #EEE;
    	color: #363636;
    	font-family: 'Poppins';
        line-height: 1.5;
    }
    a {
        color:#247BA0;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    a:active {
        color: #247BA0;
    }
    a:visited {
        color:#247BA0;
    }
    h1 {
		font: 2em 'ADAM';
		COLOR: #247BA0;
        line-height: 1.5;
        margin-bottom: .75em;
    }
    p, ul {
        margin-bottom: 1.5em;
    }
    ul {
        margin-left: 1.5em;
    }
    main, canvas {
        display: block;
    }
    canvas {
        display: block;
        margin: 0 auto 1.5em auto;
        width: 100%;
        height: auto;
        -webkit-tap-highlight-color: transparent;
    }
    .wrap {
        margin: auto;
        padding: 1.5em;
        max-width: 37.5em;
	}
	/*
    @media (prefers-color-scheme: dark) {
        body {
            background: #323031;
            color: #f1f1f1;
        }
        a {
            color:#247BA0;
        }
        a:active {
            color:#247BA0;
        }
        a:visited {
            color: #87a9f9;
        }
    } */
    </style>	
</head>
<body>
    <?php
        include 'nav.php';
        include 'config.php';
    ?>
<main>
	<div class="wrap">
		<h1 style="padding-top:60px;"><?php echo $lang6['title']; ?></h1>
		<canvas width="560" height="312"></canvas> </br>
		<p> <?php echo $lang6['possibilities']; ?> </p>
		<p><?php echo $lang6['canDo']; ?></br></br>
            1. <?php echo $lang6['first']; ?> <a href="index.php"><?php echo $lang6['firstLink']; ?>.</a> </br>
            2. <a href="duvidaForm.php"><?php echo $lang6['secondLink']; ?></a> <?php echo $lang6['second']; ?>.
        </p>

    </div>
	<script src="js/graphic.js"></script>
</main>
</body>
</html>