<?php
include "head.php";
if(isset($_REQUEST["artista"]))
    $artista = $_REQUEST["artista"];
?>
<section class="content-header">
    <h1>
        Cadastrar/Editar Artista
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Artista</a></li>
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
                    <h3 class="box-title"><?php if(!isset($artista)) echo "Cadastrar"; else echo "Editar"?> Artista</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="index.php?class=Artista&acao=cadastrar_editar" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="hidden" class="form-control" name="idArtista" <?php if(isset($artista)) echo "value=\"".$artista->get_idArtista()."\"";?>>
                            <input type="text" class="form-control" name="nome" placeholder="Entre com o nome"
                                <?php if(isset($artista)) echo "value=\"".$artista->get_nome()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>Nome Artistico</label>
                            <input type="text" class="form-control" name="nomeArtistico" placeholder="Entre com o nome artistico"
                                <?php if(isset($artista)) echo "value=\"".$artista->get_nomeArtistico()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea type="text" class="form-control" name="descricao"><?php if(isset($artista)) echo $artista->get_descricao();
                                else echo "Entre com a descrição do projeto";?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Biografia</label>
                            <textarea type="text" class="form-control" name="bio"><?php if(isset($artista)) echo $artista->get_descricao();
                                  else echo "Entre com a Biografia do Artista";?>
                               </textarea>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook" placeholder="pagina do facebook"
                                <?php if(isset($artista)) echo "value=\"".$artista->get_facebook()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" name="instagram" placeholder="Perfil do Instagram"
                                <?php if(isset($artista)) echo "value=\"".$artista->get_instagram()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>SoundCloud</label>
                            <input type="text" class="form-control" name="soundCloud" placeholder="link do SoundClound"
                                <?php if(isset($artista)) echo "value=\"".$artista->get_soundcloud()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>YouTube</label>
                            <input type="text" class="form-control" name="youtube" placeholder="Canal no YouTube"
                                <?php if(isset($artista)) echo "value=\"".$artista->get_youtube()."\"";?>>
                        </div>
                        <div class="form-group">
                            <label>PressKit</label>
                            <input type="text" class="form-control" name="site" placeholder="Site"
                                <?php if(isset($artista)) echo "value=\"".$artista->get_site()."\"";?>>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Foto 01</label>
                            <input type="file" name="foto1">
                            <img class="img-circle img-cadastro" alt="Foto 1" src="<?php if(isset($artista)) echo $artista->get_foto1();?>">
                            <input type="hidden" class="form-control" name="fotoAux1" value="<?php if(isset($artista)) echo $artista->get_foto1();?>">
                            <p class="help-block">Tamanho da foto:</p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Foto 02</label>
                            <input type="file" name="foto2">
                            <img class="img-circle img-cadastro" alt="Foto 2" src="<?php if(isset($artista)) echo $artista->get_foto2();?>">
                            <input type="hidden" class="form-control" name="fotoAux2" value="<?php if(isset($artista)) echo $artista->get_foto2();?>">
                            <p class="help-block">Tamanho da foto:</p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Foto 03</label>
                            <input type="file" name="foto3">
                            <img class="img-circle img-cadastro" alt="Foto 3" src="<?php if(isset($artista)) echo $artista->get_foto3();?>">
                            <input type="hidden" class="form-control" name="fotoAux3" value="<?php if(isset($artista)) echo $artista->get_foto3();?>">

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


