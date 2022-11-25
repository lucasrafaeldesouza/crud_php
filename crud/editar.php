<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Nav
include_once 'includes/nav.php';
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
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

<div class="row">
    <div class="col s12 m6 push-m3">
        <h4 class="light"> Editar Cliente</h4>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
            <div class="input-field col s6">  
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s6">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'] ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s6">
                <input type="text" name="numero" id="numero" value="<?php echo $dados['numero'] ?>">
                <label for="numero">Numero</label>
            </div>

            <div class="input-field col s6">
                <input type="text" name="cargo" id="cargo" value="<?php echo $dados['cargo'] ?>">
                <label for="cargo">Cargo</label>
            </div>

            <div class="input-field col s10">
                <input type="text" name="email" id="email" value="<?php echo $dados['email'] ?>">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field col s2">
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade'] ?>">
                <label for="idade">Idade</label>
            </div>

            <button type="clientes.php" name="btn-editar" class="btn">Atualizar</button>
            <a href="clientes.php" class="btn green">Lista de clientes</a>
        </form>

    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>