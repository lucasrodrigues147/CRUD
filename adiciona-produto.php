<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$conexao = mysqli_connect('localhost','root','','loja');


?>
<?php

if (insereProduto($conexao,$nome,$preco,$descricao)){ ?>         
    <p class="text-success" ><?=$nome;?> <?php echo $preco ?>Foi adicionado com sucesso!</h1> </p>
<?php }else{ 
    $msg = mysqli_error($conexao); 
    ?>
    <p class="text-danger" >O Produto <?=$nome?> Não foi Adicionado!  <?=$msg?> </p>
<?php
}
?>
<?php include("rodape.php");?>        
