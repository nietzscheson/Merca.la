<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 19:16:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/merca.la/modules/cuenta/views/tienda/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125884432537a3bc1cfb390-21421059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0d0e735e0ea3374668c48cd443cad83c4a2a9a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/merca.la/modules/cuenta/views/tienda/index.tpl',
      1 => 1400519785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125884432537a3bc1cfb390-21421059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537a3bc1d25b40_30912509',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a3bc1d25b40_30912509')) {function content_537a3bc1d25b40_30912509($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/roles">Roles</a>
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a>
</div><?php }} ?>
