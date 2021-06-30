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
        </br>
        </br>
        </br>
   <!--envio ao banco -->    
   <br>
    <center> 
     <h1><small> 
     <div class="btn btn-white btn-outline btn-lg btn-rounded">            
    <?php
    require 'conexao.php';

    mysqli_query($conectar, "SET NAMES 'utf-8';");
    $listagem = mysqli_query($conectar, "SELECT * FROM aluno WHERE turno LIKE '4%'");

    while ($linha=mysqli_fetch_array($listagem)){
        echo "<br>Matricula: ";
        echo ($linha['id_matri']); ?>

    <a class=btn btn-danger href="excluir_dados.php?id=<?=$linha['id_matri'];?>" role="button"> Excluir </a>
   
    <?php
    echo "<br>Nome: ";
    echo ($linha['nome']);
    echo "<br>Curso: ";
    echo ($linha['curso']);
    echo "<br>Turno: ";
    echo ($linha['turno']);
    echo "<br>Período: ";
    echo ($linha['per']);
    echo "<br>";
    echo "<br>";
    echo "<br>";
       }
    ?>
    </div>
    </small></h1>
<!--fim envio -->
</center>
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Escolher outro curso" onclick="javascript: location.href='cursos.html';" />
<br>
<br>
<input type="button" class="btn btn-white btn-outline btn-lg btn-rounded" value="Voltar a tela principal" onclick="javascript: location.href='index.html';" />
</body>
</html>
