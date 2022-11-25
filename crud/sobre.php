<?php
//Conexão 
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';

include_once 'includes/nav.php';
?>
<style>
  h1{
    font-family: 'Inconsolata', monospace;
    font-size: 45px;
    text-align: center;
  }
  .container{
    text-align: center;
    position: relative;
    top: 20px;
  }
  h6{
    position: relative;
    top: 30px;
  }

</style>

<script>
    var instance = M.Carousel.init({
      fullWidth: true,
      indicators: true
    });
  
    // Or with jQuery
  
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
    });   
</script>

  <div class="carousel carousel-slider center">
    <div class="carousel-item" href="">
      <h1>Soluções <b>Digitais</b> na Medida Certa</h1>
      <img src="https://forgesolucoes.com.br/img/banner6.jpg" alt="">
    </div>
    <div class="carousel-item" href="">
      <h1>Gestão <b>Eficiente</b> Gerenciameno de processos comerciais</h1>
      <img src="https://forgesolucoes.com.br/img/banner.jpg" alt="">
    </div>  
  </div>

  <h1>Quem Somos?</h1>

  <div class="container">
    <img src="https://forgesolucoes.com.br/img/quemsomos.png" alt="">
    <h6><b>A Forge é uma empresa especializada em Soluções de Sistemas e Consultoria para a área Comercial. Com soluções dinâmicas e práticas, tem como objetivo aproximar a empresa de seus clientes, atuando com soluções de gestão da área comercial e melhorias nos processos. Nossa Missão é dinamizar os processos de nossos clientes, criando uma área comercial mais presente e atuante.</b></h6>
  </div>


<?php
//Footer
include_once 'includes/footer.php';

?>