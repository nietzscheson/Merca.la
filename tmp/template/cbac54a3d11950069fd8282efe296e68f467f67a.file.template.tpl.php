<?php /* Smarty version Smarty-3.1.18, created on 2014-05-23 05:21:33
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/merca.la/views/layout/cuenta/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:696995891537a43e9465ac7-80970480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbac54a3d11950069fd8282efe296e68f467f67a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/merca.la/views/layout/cuenta/template.tpl',
      1 => 1400815292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '696995891537a43e9465ac7-80970480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537a43e94c5082_40304629',
  'variables' => 
  array (
    'titulo' => 0,
    '_lP' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    'widgets' => 0,
    'sidebar' => 0,
    'menuH' => 0,
    '_contenido' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a43e94c5082_40304629')) {function content_537a43e94c5082_40304629($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin título" : $tmp);?>
</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['ruta_bootstrap'];?>
css/bootstrap.css"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['ruta_css'];?>
estilos.css"/>
		<!--<script src="<<?php ?>?php echo $_lP['ruta_js']?<?php ?>>jQuery.js"></script>-->
	</head>
	<body>
		<noscript>
			Esta aplicación funcionará mucho mejor usando Javascript
		</noscript>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
!</strong>
        </div>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><<?php ?>?php echo $this->_mensaje;?<?php ?>>!</strong>
        </div>
      <?php }?>
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['root'];?>
"><?php echo $_smarty_tpl->tpl_vars['_lP']->value['configs']['app_name'];?>
</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">

            <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['sidebar'])) {?>
              <?php  $_smarty_tpl->tpl_vars['sidebar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sidebar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sidebar']->key => $_smarty_tpl->tpl_vars['sidebar']->value) {
$_smarty_tpl->tpl_vars['sidebar']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>

              <?php } ?>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['menuH'])) {?>
              <?php  $_smarty_tpl->tpl_vars['menuH'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuH']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['menuH']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuH']->key => $_smarty_tpl->tpl_vars['menuH']->value) {
$_smarty_tpl->tpl_vars['menuH']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['menuH']->value;?>

              <?php } ?>
            <?php }?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
		<section>
      <div id="wrap-contenedor">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['titulo']->value)) {?><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<?php }?></h3>
          </div>
          <div class="panel-body" id="panel-body">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
        </div>
      </div>
			<!--<div id="wrap-contenedor">
				<div id="contenedor">


					<div class="panel panel-default wrap-contenido">
						<ul class="list-group">
  <li class="list-group-item"></li>
  <li class="list-group-item"></li>
</ul>

					</div>
				</div>
			</div>-->
		</section>

		<footer>
			<div id="wrap-footer">
				<div class="contenido-footer">
					Copyright &copy <a href="https://www.artesan.us" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_lP']->value['configs']['app_company'];?>
</a>
				</div>
			</div>
		</footer>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['root'];?>
public/js/jQuery.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['root'];?>
public/js/jquery.validate.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['ruta_bootstrap'];?>
js/bootstrap.min.js"/></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['ruta_js'];?>
funciones.js"></script>
		<script type="text/javascript">
			var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_lP']->value['root'];?>
';
		</script>

		<?php if (isset($_smarty_tpl->tpl_vars['_lP']->value['js'])&&count($_smarty_tpl->tpl_vars['_lP']->value['js'])) {?>
			<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_lP']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
				<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
			<?php } ?>
		<?php }?>
	</body>
</html>

<<?php ?>?php ob_end_flush();?<?php ?>>
<?php }} ?>
