<?php

function listaProdutos($conexao){
        $produtos = array();
        $resultado = mysqli_query($conexao,"select*from produtos");

        while($produto = mysqli_fetch_assoc($resultado)){
                array_push($produtos, $produto);
        }

        return $produtos;
}
?>

<?php

function insereProduto($conexao,$nome,$preco,$descricao){
    $query = "insert into produtos (nome,preco,descricao) values ('{$nome}',{$preco},'{$descricao}')";
    return mysqli_query($conexao,$query);

}
?>

<?php
function removeProduto($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}
?>