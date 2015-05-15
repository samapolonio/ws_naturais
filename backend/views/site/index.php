<?php
/* @var $this yii\web\View */

$this->title = 'WS Naturais';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>WS Naturais</h1>

        <p class="lead">Sistema de controle de pedidos.</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Servi&ccedil;os</h2>
                <!--<p><a class="btn btn-default" href="http://localhost/advanced/backend/web/index.php?r=produto">Produtos</a></p>-->
				<p>Pedidos</a></p>
				<p>Remessas</p>
            </div>
            <div class="col-lg-4">
                <h2>Cadastro de Clientes</h2>
                <p><a href="../../backend/web/index.php?r=cliente">Cliente</a></p>
				<p><a href="../../backend/web/index.php?r=categoria">Categoria de Clientes</a></p>
				<p><a href="../../backend/web/index.php?r=bairro">Bairro</a></p>
				<p><a href="../../backend/web/index.php?r=cidade">Cidade</a></p>
				<p><a href="../../backend/web/index.php?r=uf">UF</a></p>
				
            </div>
            <div class="col-lg-4">
                <h2>Cadastros Gerais</h2>
				<p><a href="../../backend/web/index.php?r=produto">Produtos</a></p>
                <p><a href="../../backend/web/index.php?r=formaspagamento">Formas de Pagamento</a></p>
				<p><a href="../../backend/web/index.php?r=situacaopedido">Situa&ccedil;&otilde;es de Pedido</a></p>
				<p><a href="../../backend/web/index.php?r=tipopedido">Tipos de Pedido</a></p>
            </div>
        </div>

    </div>
</div>
