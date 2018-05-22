<?php
    include "head.php";
    $artistas = $_REQUEST['artistas'];
    $agenda = $_REQUEST['agenda'];

?>
<section class="content-header">
    <h1>
        Agenda
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Agenda</a></li>
        <li class="active">Agenda</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Agenda</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Artista</th>
                            <th>Evento</th>
                            <th>Data - Hora</th>
                            <th>Local</th>
                            <th>Foto</th>
                            <th>Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($agenda as $evento){
                                echo "<tr>";
                                echo "<td><a href='index.php?class=Agenda&acao=load_cadastro&idAgenda=".$evento->get_idAgenda()."'>Editar</a></td>";
                                echo "<td>{$artistas[$evento->get_idArtista()]}</td>";
                                echo "<td>{$evento->get_evento()}</td>";
                                echo "<td>{$evento->get_data()} - {$evento->get_hora()}</td>";
                                echo "<td>{$evento->get_local()}</td>";
                                echo "<td><img class='img-circle img-cadastro' alt='Foto' src='".$evento->get_foto()."'></td>";
                                echo "<td><a href='index.php?class=Agenda&acao=excluir&idAgenda=".$evento->get_idAgenda()."'>Excluir</a></td>";

                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Editar</th>
                                <th>Artista</th>
                                <th>Evento</th>
                                <th>Data - Hora</th>
                                <th>Local</th>
                                <th>Foto</th>
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