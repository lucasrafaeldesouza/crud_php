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
    <div class="carousel-item green white-text" href="">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
        

<?php
//Footer
include_once 'includes/footer.php';

?>