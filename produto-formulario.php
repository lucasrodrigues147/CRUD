<?php include("cabecalho.php");?>
            <h1> Formulário De Produtos</h1>


                <form action = "adiciona-produto.php" method="post">
                    <table class="table">
                        <tr>
                          <td>Nome:</td>
                          <td> <input class="form-control" type="text" name="nome"/> <br/></td>
                        </tr>

                        <tr>
                            <td>Preço: </td>
                            <td><input class="form-control" type="number" name="preco"/> <br/></td>
                        </tr>

                        <tr>
                            <td> Descrição:</td>
                            <td><textarea class="form-control" name="descricao"></textarea></td>    
                        </tr>
                    
                        <tr>
                            <td><input class="btn btn-primary" type="submit" value="cadastrar"/></td>
                        </tr>
                     </table> 
                </form>    
<?php include("rodape.php");?>        
