<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <title>Balmy developments - home</title>
    <style type="text/css">
    .aaa{
        display: flex;
    }
    .primeira {
    position: relative;
    float: left;
    margin:20px;
    width:100%; 
    }
    .segunda {
        position: relative;
        float: left;
        margin: 20px;
        width: 100%;
        background-color:#23B5D3;
    }
    #Lu{
      background-image: url("img/equipe/Lu.png");
      background-color: #cccccc; /* Used if the image is unavailable */
      background-position: center; /* Center the image */
      background-repeat: no-repeat; /* Do not repeat the image */
      background-size: cover; /* Resize the background image to cover the entire container */
      height:120px;
      width:120px;
    }
    #Guilherme{
      background-image: url("img/equipe/Guilherme.png");
      background-color: #cccccc; /* Used if the image is unavailable */
      background-position: center; /* Center the image */
      background-repeat: no-repeat; /* Do not repeat the image */
      background-size: cover; /* Resize the background image to cover the entire container */
      height:120px;
      width:120px;
    }
    #Kayke{
      background-image: url("img/equipe/Kayke.png");
      background-color: #cccccc; /* Used if the image is unavailable */
      background-position: center; /* Center the image */
      background-repeat: no-repeat; /* Do not repeat the image */
      background-size: cover; /* Resize the background image to cover the entire container */
      height:120px;
      width:120px;
    }
    #Leo{
      background-image: url("img/equipe/Leo.png");
      background-color: #cccccc; /* Used if the image is unavailable */
      background-position: center; /* Center the image */
      background-repeat: no-repeat; /* Do not repeat the image */
      background-size: cover; /* Resize the background image to cover the entire container */
      height:120px;
      width:120px;
    }
    </style>
</head>
<body>
    <?php
        session_start();
        include 'config.php';
        include 'conexao.php';
        include 'nav.php';
    ?>

    <!-- w3l-content-photo-5 -->
<div class="animated animatedFadeInUp fadeInUp">
  <div class="w3l-content-photo-5 py-5">
    <div class="content-main py-lg-5 py-md-3">
      <div class="container"  style="padding-top:100px;">
        <div class="row">
          <div class="col-lg-7 content-left">
            <h3>Como softwares ajudam?</h3> <br/>
            <h4 class="mb-0">Um software personalizado pode atender requisitos específicos de uma empresa, sendo capaz
                          de poupar tempo e recursos da equipe!
            </h4>
            <a href="duvidaForm.php" class="primary-btn-style btn-primary btn mt-lg-5 mt-4"> Solicite o seu </a> <br>
          </div>
          <div class="col-lg-5 content-photo mt-lg-0 mt-sm-5 mb-md-0 mb-4"><br/><br/>
            <a href="#img"><img src="img/home/gif.gif" class="img-fluid" alt="content-photo"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- //w3l-content-photo-5 -->

    <!-- services block 2 -->
    <div class="w3l-services-block py-5" id="classes" style="text-align:center;">
    <h2 style="font-size:60px;"> Sobre </h2> </br>
            <div class="services-block_grids_bottom">
                <div class="row">
                    <div class="col-lg-4 col-md-6 service_grid_btm_left">
                        <div class="service_grid_btm_left1">
                            <div class="service_grid_btm_left2">
                            <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-flag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>
                            </svg>
                                </br>
                                </br>
                                <h5> Missão </h5>
                                </br>
                                <p>Trazer soluções que facilite a vida das pessoas.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service_grid_btm_left mt-lg-0 mt-sm-5 mt-4">
                        <div class="service_grid_btm_left1">
                            <div class="service_grid_btm_left2">
                            <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                              <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                                </br>
                                </br>
                                <h5> Visão </h5>
                                </br>
                                <p>Ser referência em TI</p>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service_grid_btm_left">
                        <div class="service_grid_btm_left1">
                            <div class="service_grid_btm_left2">
                            <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg>
                                </br>
                                </br>
                                <h5> Valores </h5>
                                </br>
                                <p>Buscamos sempre produzir os melhores softwares para o cliente e oferece-lo todo suporte necessário</p>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // services block2 -->

    <!-- services block4 -->
    <div class="w3l-services py-5" style="text-align:center;">
    <h2 style="font-size:60px;"> Equipe </h2>
        <div class="container principles-grids principles-grids1 py-lg-3">
            <div class="scrollbar -services-scroll">
                <div class="row abt-btm pt-4">
                    <div class="col-lg-3 col-sm-6 bottom-gds">
                        <div class="elite-services1">
                            <div class="bott-img">
                                <div class="icon-holder" id="Lu">
                                </div>
                                <h4 class="mission">Luiza Alanis</h4>
                                <div class="description">
                                    <p>Desenvolvedora full-stack e líder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 bottom-gds mt-md-0 mt-5">
                        <div class="elite-services2">
                            <div class="bott-img">
                                <div class="icon-holder" id="Kayke">
                                    
                                </div>
                                <h4 class="mission">Kayke Andrade</h4>
                                <div class="description">
                                    <p>Analista de sistemas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 bottom-gds mt-lg-0 mt-5">
                        <div class="elite-services3">
                            <div class="bott-img">
                                <div class="icon-holder" id="Leo">
                                </div>
                                <h4 class="mission">Leonardo Biguinatti</h4>
                                <div class="description">
                                    <p>Analista de infraestrutura</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 bottom-gds mt-lg-0 mt-5">
                        <div class="elite-services4">
                            <div class="bott-img">
                                <div class="icon-holder" id="Guilherme">
                                </div>
                                <h4 class="mission">Guilherme Bugliani</h4>
                                <div class="description">
                                    <p>Analista desenvolvedor mobile</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services block4 -->

<!-- stats -->
<section class="w3l-stats py-lg-5 py-4" id="stats">
        <div class="gallery-inner container py-md-5 py-4">
            <div class="row stats-con text-white">
                <div class="col-sm-3 col-6 stats_info counter_grid">
                    <span class="fa fa-lightbulb-o"></span>
                    <p class="counter">645</p>
                    <h4>Projetos Feitos</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid1">
                    <span class="fa fa-heart"></span>
                    <p class="counter">563</p>
                    <h4>Clientes satisfeitos</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid mt-sm-0 mt-5">
                    <span class="fa fa-magic"></span>
                    <p class="counter">1145</p>
                    <h4>Prêmios</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid2 mt-sm-0 mt-5">
                    <span class="fa fa-smile-o"></span>
                    <p class="counter">1045</p>
                    <h4>Clientes felizes</h4>
                </div>
            </div>
        </div>
  </br>
        
    </section>
    <!-- //stats -->
        <!-- w3l-content-photo-5 -->
<div class="animated animatedFadeInUp fadeInUp">
  <div class="w3l-content-photo-5 py-5" style="text-align:center;">
  <h2 style="font-size:60px; "> Portifólio </h2>
    <div class="content-main py-lg-5 py-md-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-0 content-left">
          </div>
  
          <div class="col-lg-12 content-photo mt-lg-0 mt-sm-5 mb-md-0 mb-4">
            <img src="img/equipe/flyer.png" alt="Banner" width="100%" heighy="100%"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- //w3l-content-photo-5 -->

<!-- home page blog-->
<section class="w3l-blog py-5 bg-light">
    <div class="container py-lg-5 py-md-3">
        <div class="row">
            <div class="col-lg-5">
                <h3>Leia o nosso blog !</h3>
                <h5 class="mt-3"> Artigos sobre tecnologia toda semana </h5>
            </div>
            <div class="col-lg-7 mt-lg-0 mt-4">
                <div class="img-block">
                    <a href="blog.php">
                        <img src="assets/images/g1.jpg" class="img-fluid" alt="image" />
                        <span>Comandos SQL</span>
                    </a>
                </div>
                <div class="img-block mt-3">
                    <a href="blog.php"> <img src="assets/images/g2.jpg" class="img-fluid" alt="image" />
                        <span>Produtividade com home office</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page blog-->

<!-- iphone home block -->
<section class="w3l-blog py-5">
    <div class="container py-lg-5">
        <div class="row">
            <div class="col-lg-3 col-6 pr-md-3 pr-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3221444192927!2d-46.730950684872056!3d-23.520913165985355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8c1d3806777%3A0x8d03885c01c45d8a!2sR.%20Guaip%C3%A1%2C%20678%20-%20Vila%20Leopoldina%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002675-031!5e0!3m2!1sen!2sbr!4v1607493530216!5m2!1sen!2sbr" width="500" height="450" frameborder="0" style="border:0; border-radius:20px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-3 col-6 pl-md-3 pl-2">
            </div>
            <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                <h3>Localização</h3>
                <h5 class="mt-3">Veja onde nós estamos</h5>
                <p class="mt-4 mb-0"> OBS.: Devido á pandemia, a nossa equipe trabalha remotamente.</br>
                  Por conta disso, substituimos as reuniões presenciais por vídeo-conferência.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- //iphone home block -->
<div class="animated animatedFadeInUp fadeInUp">
  <div class="w3l-content-photo-5 py-5">
    <div class="content-main py-lg-5 py-md-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 content-left">
          <h3>Sustentabilidade</h3>
                <h5 class="mt-3">Nós nos importamos!</h5>
                <h4 class="mt-4 mb-0"> A Balmy Developments é uma empresa preocupada em seguir os principios de uma
                  TI Verde com equipamentos ecológicos e o uso de uma fonte de energia limpa, afim de preservar o nosso meio ambiente. Além disso a Balmy também ajuda ONG's de proteção ao meio ambiente.
                </h4>
          </div>
          <div class="col-lg-5 content-photo mt-lg-0 mt-sm-5 mb-md-0 mb-4"><br/><br/>

                <img src="img/home/verde.jpg" class="img-fluid" alt="image" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- testimonial -->
<section class="w3l-quote-main">
    <div class="quote py-5">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col-lg-9">
                    <h4>Feedback do cliente</h4> </br>
                    <h4>"Gerenciar o meu restaurante se tornou algo muito mais simples com o sistema produzido pela Balmy Developments, é um investimento que certamente vale apena."</h4>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-3 text-lg-center tablet-grid">
                    <img src="assets/images/client2.jpg" alt="" class="img-fluid" />
                    <div>
                        <h6 class="mb-0 mt-lg-3">Margarito</h6>
                        <h5 class="mt-1"> Chef </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonial -->


<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
	<span class="fa fa-angle-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->

<!-- common jquery -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery -->

    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->

    <?php
        include 'config.php';
        include 'footer.php';
    ?>

</body>
</html>