<html>
<head>
    <meta charset="utf-8">
    <title>MultiChange</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="cssbot/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body>
 <div class=login-page>

   <div class=row>
      <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
   <!--envio ao banco -->    
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
    <center>              
    <?php
    require 'conexao.php';

    mysqli_query($conectar, "SET NAMES 'utf-8';");
    $nome = $_POST["nome"];
    $curso = $_POST["curso"];
    $turno = $_POST["turno"];
    $per = $_POST["per"];

    $sql = "INSERT INTO aluno (nome, curso, turno, per) VALUES ('$nome','$curso', '$turno', '$per')";
    mysqli_query($conectar, $sql) or die('Error'.msqli_error($conectar));

    echo"<h1><small>Cadastro Realizado com Sucesso!!</small></h1>"
    ?>
<!--fim envio -->
<br>
<br>
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Criar novo Cadastro" onclick="javascript: location.href='cadastro.html';" />
<br>
<br>
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Voltar a tela principal" onclick="javascript: location.href='index.html';" />
</center>
<br>
<br>
</body>
</html>
