<?php require_once 'global.php'; //importando a classe categoria.php  ?>

<?php

 try{

    $categoria = new Categoria(); //instanciando a classe Categoria
    $lista = $categoria->listar();//chamando o método que tem dentro da classe Categoria.php



 }catch(exception $ex){

    if(DEBUG){

        echo('<pre>');

        print_r($ex);
   
        echo('</pre>');
   

    }else{

   echo $ex->getMessage();


    }
   
     exit;

 }
   





?>
<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Categorias</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="categorias-criar.php" class="btn btn-info btn-block">Crair Nova Categoria</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha): ?>
                    <tr>
                        <td><a href="/categorias-detalhe.php" class="btn btn-link"><?php echo $linha['id'] ?></a></td>
                        <td><a href="/categorias-detalhe.php" class="btn btn-link"><?php echo $linha['nome'] ?></a></td>
                        <td><a href="/categorias-editar.php?id=<?php echo $linha['id'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="/categorias-excluir-post.php?id=<?php echo $linha['id'] ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>
