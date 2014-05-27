<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 19:19:44
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/merca.la/modules/cuenta/views/compras/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:777487063537a3c5fbe1417-53216014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '782903a5add583a2032b33932b34e5feafacba2a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/merca.la/modules/cuenta/views/compras/index.tpl',
      1 => 1400519981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777487063537a3c5fbe1417-53216014',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537a3c5fbe21d7_95618162',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a3c5fbe21d7_95618162')) {function content_537a3c5fbe21d7_95618162($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/roles">Roles</a>
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a>
</div><?php }} ?>
