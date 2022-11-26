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

  .coluna{
  float: left;
  width: 33.33%;
  text-align: center;
  position: relative;
  top: 100px;
.row::after {
  content: "";
  clear: both;
  display: table;
}

.container{
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
  
  <h1>Serviços</h1>

<div class="container">
    <h6><b>Experiencia em negócio e tecnologia, com desenvolvimento em linguagens atuais de programação. Customizando seu ERP e desenvolvendo soluções aderentes. <br>Nossas soluções digitais vão trazer mais gestão e automatização aos processos de sua empresa. Disponibilizando informação e controle aos setores. <br>Equipe qualificada e prestativa, sempre de prontidão para auxiliar. Seja tirando dúvidas ou sugerindo soluções, estamos à disposição. <br>Nossa equipe possui profissionais qualificados para identificar as necessidades de software aderentes ao seu processo. Melhorando procedimentos e sugerindo soluções. <br>Nossas soluções digitais vão trazer mais gestão e automatização aos processos de sua empresa. Disponibilizando informação e controle aos setores.</b></h6>
</div>

  <div class="row" style="display: table">
  <div class="coluna">
    <img src="https://miro.medium.com/max/900/1*OrjCKmou1jT4It5so5gvOA.jpeg" style="width:200px" alt="descrição da imagem">
  </div>
  <div class="coluna">
    <img src="https://docs.flutter.dev/assets/images/flutter-logo-sharing.png" style="width:200px" alt="descrição da imagem">
  </div>
  <div class="coluna">
    <img src="https://cl9.com.br/wp-content/uploads/2020/03/quais-as-diferencas-entre-as-versoes-do-sql-server-p10dnfny4wpoh5oxcvtewb4ezm48eemcycsg2jvhl4.jpg" style="width:200px" alt="descrição da imagem">
  </div></div>
  

  

<?php
//Footer
include_once 'includes/footer.php';

?>