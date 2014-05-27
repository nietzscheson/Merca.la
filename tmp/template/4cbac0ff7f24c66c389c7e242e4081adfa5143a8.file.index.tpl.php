<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 19:23:51
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/merca.la/modules/cuenta/views/listasdeseos/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174843943537a3e279b6bc4-55871761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cbac0ff7f24c66c389c7e242e4081adfa5143a8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/merca.la/modules/cuenta/views/listasdeseos/index.tpl',
      1 => 1400520132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174843943537a3e279b6bc4-55871761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537a3e279e3d98_56832789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a3e279e3d98_56832789')) {function content_537a3e279e3d98_56832789($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/roles">Roles</a>
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a>
</div><?php }} ?>
