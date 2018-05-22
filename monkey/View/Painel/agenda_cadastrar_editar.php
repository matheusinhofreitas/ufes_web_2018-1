<?php
include "head.php";
if(isset($_REQUEST["agenda"]))
    $agenda = $_REQUEST["agenda"];
$artistas = $_REQUEST["artistas"];

?>
<section class="content-header">
    <h1>
        Cadastrar/Editar Agenda
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Agenda</a></li>
        <li class="active">Cadastrar/Editar </li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php if(!isset($agenda)) echo "Cadastrar"; else echo "Editar"?> Agenda</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="index.php?class=Agenda&acao=cadastrar_editar" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Evento</label>
                            <input type="hidden" class="form-control" name="idAgenda" <?php if(isset($agenda)) echo "value=\"".$agenda->get_idAgenda()."\"";?>>
                            <input type="text" class="form-control" name="evento" placeholder="Entre com o nome do evento"
                                <?php if(isset($agenda)) echo "value=\"".$agenda->get_evento()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>Artista</label>
                            <select class="form-control" name="idArtista">
                                <?php foreach ($artistas as $artista){?>
                                <option value=" <?php echo $artista->get_idArtista();?>" <?php if(isset($agenda) && ($agenda->get_idArtista() == $artista->get_idArtista())) echo "selected"; ?>>
                                    <?php echo $artista->get_nomeArtistico();?>
                                </option>
                                <?php }?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Data</label>
                            <input type="date" class="form-control" name="data" placeholder="Entre com a data do evento"
                                <?php if(isset($agenda)) echo "value=\"".$agenda->get_data()."\"";?>>
                        </div>

                        <div class="form-group">
                            <label>Horário</label>
                            <input type="text" class="form-control" name="hora" placeholder="Horário"
                                <?php if(isset($agenda)) echo "value=\"".$agenda->get_hora()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>Local</label>
                            <input type="text" class="form-control" name="local" placeholder="Local do Evento"
                                <?php if(isset($agenda)) echo "value=\"".$agenda->get_local()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook" placeholder="Evento ou pagina Facebook"
                                <?php if(isset($agenda)) echo "value=\"".$agenda->get_facebook()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" name="instagram" placeholder="Instagram"
                                <?php if(isset($agenda)) echo "value=\"".$agenda->get_instagram()."\"";?>>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Foto</label>
                            <input type="file" name="foto" >
                            <img class="img-circle img-cadastro" alt="Foto" src="<?php if(isset($agenda)) echo $agenda->get_foto();?>">
                            <input type="hidden" class="form-control" name="fotoAux" value="<?php if(isset($agenda)) echo $agenda->get_foto();?>">
                            <p class="help-block">Tamanho da foto:</p>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div><!--/.col (left) -->

    </div>   <!-- /.row -->
</section><!-- /.content -->








<?php
include "footer.php";
?>


