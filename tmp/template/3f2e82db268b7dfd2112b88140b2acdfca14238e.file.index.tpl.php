<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 17:00:54
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/merca.la/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18482887895379ed370758c2-06584354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2e82db268b7dfd2112b88140b2acdfca14238e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/merca.la/views/login/index.tpl',
      1 => 1400511654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18482887895379ed370758c2-06584354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5379ed37085424_51911462',
  'variables' => 
  array (
    '_lP' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5379ed37085424_51911462')) {function content_5379ed37085424_51911462($_smarty_tpl) {?><div class="bloque">
	<form id="form1" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_lP']->value['root'];?>
login" class="form">
		<input type="hidden" name="enviar" value="1">
		<fieldset>
			<legend>Entrar</legend>
			<div class="form-group">
			    <label for="titulo">Usuario:</label>
			    <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['usuario'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['usuario'];?>
<?php }?>">
			 </div>
			 <div class="form-group">
			    <label for="pass">Contraseña:</label>
			    <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['pass'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['pass'];?>
<?php }?>">
			 </div>
			  <input type="submit" value="Entrar" class="btn btn-primary">

		</fieldset>		
	</form>

</div><?php }} ?>
