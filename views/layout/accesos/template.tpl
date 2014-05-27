<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>{$titulo|default:"Sin título"}</title>
        <link rel="stylesheet" href="{$_lP.ruta_bootstrap}css/bootstrap.css"/>
        <link rel="stylesheet" href="{$_lP.ruta_css}estilos.css"/>
        <!--<script src="<?php echo $_layoutParams['ruta_js']?>jQuery.js"></script>-->
    </head>
    <body>
        <noscript>
            Esta aplicación funcionará mucho mejor usando Javascript
        </noscript>
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            {if isset($_error)}
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{$_error}!</strong>
                </div>
            {/if}
            {if isset($_mensaje)}
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong><?php echo $this->_mensaje;?>!</strong>
                </div>
            {/if}
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{$_lP.root}">{$_lP.configs.app_name}</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <button type="button" class="btn btn-default navbar-btn navbar-right">Registro</button>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <section>
            <div id="wrap-contenedor">
                <div class="panel panel-default wrap-contenido">
                    {include file=$_contenido}
                </div>
                <!--<div id="contenedor">
                    <!--{if isset($widgets.sidebar)}
                        {foreach item=sidebar from=$widgets.sidebar}
                            {$sidebar}
                        {/foreach}
                    {/if}
                </div>-->
            </div>
        </section>
        <footer>
            <div id="wrap-footer">
                <div class="contenido-footer">
                    Copyright &copy <a href="https://www.artesan.us" target="_blank">{$_lP.configs.app_company}</a>
                </div>
            </div>
        </footer>
        <script src="{$_lP.root}public/js/jQuery.js"></script>
        <script src="{$_lP.root}public/js/jquery.validate.js"></script>
        <script src="{$_lP.ruta_bootstrap}js/bootstrap.min.js"/></script>
        <script src="{$_lP.ruta_js}funciones.js"></script>
        <script type="text/javascript">
            var _root_ = '{$_lP.root}';
        </script>

        {if isset($_lP.js) && count($_lP.js)}
            {foreach item=js from=$_lP.js}
                <script src="{$js}"></script>
            {/foreach}
        {/if}
    </body>
</html>

<?php ob_end_flush();?>
