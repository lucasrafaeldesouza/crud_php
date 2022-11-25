<?php
//Conexão 
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';

include_once 'includes/nav.php';
?>

<link rel="preconnect" href="https://fonts.googleapis.com">

<style> 
  h1{
    font-family: 'Inconsolata', monospace;
    font-size: 45px;
    text-align: center;
  }

.container {
    width: 1150px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.container .card {
    position: relative;
    padding: 10px;
    width: 300px;
    background-color: #fff;
    margin: 20px;
    border: 1px solid black;
    border-radius: 20px;
    overflow: hidden;
    transition: 0.5s;
    text-align: center;
}

.container .card img {
    transition: 0.5s;
}

.container .card h1 {
    font-size: 2rem;
}

.container .card .content {
    padding: 20px;
    text-align: center;
}

.container .card .content p {
    color: #666;
    transition: 0.5s;
}

.container .card .content a {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    background-color: #000;
    color: #fff;
    border-radius: 40px;
    text-decoration: none;
    transition: 0.5s;
    outline: none;
    margin-top: 20px;
}

.container .card:hover {
    background-color: black;
    color: black;
    margin-top: -30px;
    box-shadow: 2px 20px 25px white;
    border-color: black;
}

.container .card:hover .content p {
    color: white;
}

.container .card:hover .content a{
    color:black;
    background-color: white;
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

  <h1>Soluções</h1>

  

  <div class="container">
        <!-- Primeiro Card -->
        <div class="card">
        <div class="card-image">
          <img src="https://forgesolucoes.com.br/img/email.png">
          
        </div>
            
            <div class="content">
                <p>
                Conectando todas os endereços em uma única plataforma, para gerir a comunicação com seu cliente. Histórico dos atendimentos, Respostas automáticas e personalizadas, agendamento de mensagens. Com o painel EmailStation.
                </p>
                <a href="#">Ler Mais</a>
            </div>
        </div>
        <!-- Segundo Card -->
        <div class="card">
        <div class="card-image">
          <img src="https://forgesolucoes.com.br/img/whats.png">
          
        </div>
            
            <div class="content">
                <p>
                Fale com sua equipe onde eles estão, automatizando suas conversas no whatsapp. Toda a comunicação centralizada em uma única plataforma para gerar notificações e campanhas. Em um painel para gestão do atendimento e respostas automatizadas.
                </p>
                <a href="#">Ler Mais</a>
            </div>
        </div>
        <!-- Terceiro Card -->
        <div class="card">
        <div class="card-image">
          <img src="https://forgesolucoes.com.br/img/crm.png">
          
        </div>
            
            <div class="content">
                <p>
                Com uma visão detalhada de sua carteira de clientes, o CrmStation traz informação e independência para seu time comercial. Realizando a gestão das atividades dos prospects/clientes e controlando os documentos, SAC e oportunidades. Integrando ao seu ERP.
                </p>
                <a href="#">Ler Mais</a>
            </div>
        </div>
    </div>

    

<?php
//Footer
include_once 'includes/footer.php';

?>