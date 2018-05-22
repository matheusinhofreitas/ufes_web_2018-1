<?php
include "head.php";
$resposta = $_REQUEST['resposta'];
$mensagem = $_REQUEST['mensagem'];
$classe = $_REQUEST['classe'];
$acao = $_REQUEST['metodo'];
?>
<!--
<section class="content-header">
    <h1>
        Top Navigation
        <small>Example 2.0</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
-->
<!-- Main content -->
<section class="content">
    <div class="callout <?php if($resposta) echo "callout-success"; else echo "callout-danger"?>">
        <h4><?php echo $mensagem;?></h4>
        <a href='index.php?class=<?php echo $classe;?>&acao=<?php echo $acao;?>'>
            <button type="submit" class="btn <?php if($resposta) echo "btn-success"; else echo "btn-danger"?>">Voltar</button>
        </a>
    </div>
</section><!-- /.content -->

<?php
include "footer.php";
?>
