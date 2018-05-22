<?php
    include "head.php";
    $artistas = $_REQUEST['artistas'];
?>
<section class="content-header">
    <h1>
        Artistas
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Artistas</a></li>
        <li class="active">Artistas</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Artistas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Nome</th>
                            <th>Artista</th>
                            <th>Descrição</th>
                            <th>Biografia</th>
                            <th>Foto 01</th>
                            <th>Foto 02</th>
                            <th>Foto 03</th>
                            <th>Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($artistas as $artista){
                                echo "<tr>";
                                echo "<td><a href='index.php?class=Artista&acao=load_cadastro&idArtista=".$artista->get_idArtista()."'>Editar</a></td>";
                                echo "<td>{$artista->get_nome()}</td>";
                                echo "<td>{$artista->get_nomeArtistico()}</td>";
                                echo "<td>{$artista->get_descricao()}</td>";
                                echo "<td>{$artista->get_bio()}</td>";
                                echo "<td><img class='img-circle img-cadastro' alt='Foto 1' src='".$artista->get_foto1()."'></td>";
                                echo "<td><img class='img-circle img-cadastro' alt='Foto 2' src='".$artista->get_foto2()."'></td>";
                                echo "<td><img class='img-circle img-cadastro' alt='Foto 3' src='".$artista->get_foto3()."'></td>";
                                echo "<td><a href='index.php?class=Artista&acao=excluir&idArtista=".$artista->get_idArtista()."'>Excluir</a></td>";

                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Editar</th>
                                <th>Nome</th>
                                <th>Artista</th>
                                <th>Descrição</th>
                                <th>Biografia</th>
                                <th>Foto 01</th>
                                <th>Foto 02</th>
                                <th>Foto 03</th>
                                <th>Excluir</th>
                            </tr>
                        </tfoot>
                    </table>
                    <a href='index.php?class=Artista&acao=load_cadastro'>
                        <button type="submit" class="btn btn-primary">Cadastrar Novo</button>
                    </a>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->


<?php
include "footer.php";
?>