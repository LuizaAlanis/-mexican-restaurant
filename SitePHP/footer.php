<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <?php
       include 'config.php';
    ?>
    <footer>
    <div class="main-content">
        <div class="left box">
            <h2><?php echo $lang2['about']?></h2>
            
            <div class="content">
                <p>
                </br>
                    <?php echo $lang2['aboutText']?>
                </p>
            </div>
        </div>
    <div class="center box">
        <h2><?php echo $lang2['links']?></h2>
        <div class="content">
            <div class="itens">
                </br>
                <span class="text"><a href="#"><?php echo $lang2['faq']?></a></span></br>
                <span class="text"><a href="#"><?php echo $lang2['sac']?></a></span></br>
                <span class="text"><a href="#"><?php echo $lang2['blog']?></a></span></br>
                <span class="text"><a href="#"><?php echo $lang2['localization']?></a></span>
            </div>
        </div>
    </div>

    <div class="center box">
        <h2><?php echo $lang2['team']?></h2>
        <div class="content">
            <div class="itens">
                </br>
                <span class="text"><a href="#">Guilherme Bugliani</a></span></br>
                <span class="text"><a href="#">Kayke do Nascimento</a></span></br>
                <span class="text"><a href="#">Leonardo Biguinatti</a></span></br>
                <span class="text"><a href="#">Luiza Alanis</a></span>
            </div>
        </div>
    </div>

    <div class="right box">
        <h2><?php echo $lang2['social']?></h2>
        <div class="content">
            <div class="itens">
                </br>
                <div class="social">
                    <div class="social-icons">
                        <a class="social-icon social-icon--github" href="https://github.com/LuizaAlanis/TCM2-modulo.git">
                          <i class="fa fa-github"></i>
                          <div class="tooltip">Github</div>
                        </a>
                        <a class="social-icon social-icon--instagram" href="https://www.instagram.com/balmy.dev/">
                          <i class="fa fa-instagram"></i>
                          <div class="tooltip">Instagram</div>
                        </a>
                        <a class="social-icon social-icon--linkedin" href="https://www.linkedin.com/in/balmy-developments/">
                          <i class="fa fa-linkedin"></i>
                          <div class="tooltip">LinkedIn</div>
                        </a>
                        <a class="social-icon social-icon--facebook" href="https://www.facebook.com/unification.developments.1">
                          <i class="fa fa-facebook"></i>
                          <div class="tooltip">Facebook</div>
                        </a>
                      </div>
                </div>     
            </div>
        </div>
    </div>
</footer>

<div class="credits">
    <span class="credit"><?php echo $lang2['credit']?></span>
</div>

</body>
</html>