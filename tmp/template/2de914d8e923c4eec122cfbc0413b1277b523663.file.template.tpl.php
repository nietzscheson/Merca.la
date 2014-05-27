<?php /* Smarty version Smarty-3.1.18, created on 2014-05-25 01:40:47
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/merca.la/views/layout/responsive/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79755892353810415a23239-00807072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2de914d8e923c4eec122cfbc0413b1277b523663' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/merca.la/views/layout/responsive/template.tpl',
      1 => 1400974845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79755892353810415a23239-00807072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53810415b93e73_31030570',
  'variables' => 
  array (
    'titulo' => 0,
    '_lP' => 0,
    'widgets' => 0,
    'sidebar' => 0,
    'menuH' => 0,
    '_contenido' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53810415b93e73_31030570')) {function content_53810415b93e73_31030570($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
      <title>Responsive</title>
      <meta charset="UTF-8"/>
      <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin título" : $tmp);?>
</title>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['ruta_bootstrap'];?>
css/bootstrap.css"/>
      <!--<script src="<<?php ?>?php echo $_layoutParams['ruta_js']?<?php ?>>jQuery.js"></script>-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['ruta_css'];?>
dashboard.css" />
      <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>
  <body>
    <div id="wrapper">
      <div id="side-bar">
        <header id="cabezote">
          <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['root'];?>
"><?php echo $_smarty_tpl->tpl_vars['_lP']->value['configs']['app_name'];?>
</a>
        </header>
        <nav id="nav">

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

        </nav>
        <footer>
            <div id="footer-nav">
                <div class="contenido-footer">
                    Copyright &copy <a href="https://www.artesan.us" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_lP']->value['configs']['app_company'];?>
</a>
                </div>
            </div>
        </footer>
      </div>
      <div id=""></div>
      <header id="header-contenido">
        <h1><?php if (isset($_smarty_tpl->tpl_vars['titulo']->value)) {?><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<?php }?></h1>
      </header>
      <div id="contenido">
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <footer>
          <div id="footer-bottom">
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
