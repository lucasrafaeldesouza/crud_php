<?php
//Header
include_once 'includes/header.php';

include_once 'includes/nav.php';
?>

<style>
h1{
    font-family: 'Inconsolata', monospace;
    font-size: 45px;
    text-align: center;
  }

</style>

<script>
    const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
    }

    const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
    }
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

<div class="row">
    <div class="col s12 m6 push-m3">
        <h4 class="light"> Novo Cliente</h4>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s6">  
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s6">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s6">
                 <input type="tel"  name="numero" id="numero" maxlength="15" onkeyup="handlePhone(event)" />
                <label for="numero">Numero</label>
            </div>

            <div class="input-field col s6">
                <input type="text" name="cargo" id="cargo">
                <label for="cargo">Cargo</label>
            </div>

            <div class="input-field col s10">
                <input type="text" name="email" id="email">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field col s2">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>

            <button type="clientes.php" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="clientes.php" class="btn green">Lista de clientes</a>
        </form>

    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';

?>