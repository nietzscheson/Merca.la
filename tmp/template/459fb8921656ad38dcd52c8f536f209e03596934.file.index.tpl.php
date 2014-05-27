<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 17:34:39
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/merca.la/views/ajax/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219638081537a248fbd9659-51496295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '459fb8921656ad38dcd52c8f536f209e03596934' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/merca.la/views/ajax/index.tpl',
      1 => 1398551218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219638081537a248fbd9659-51496295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'paises' => 0,
    'pais' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537a248fc29362_20540567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a248fc29362_20540567')) {function content_537a248fc29362_20540567($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
</div>

<div class="bloque">
	<form>
		<fieldset>
			<div class="form-group">
			    <label for="titulo">País:</label>
			    <select id="pais" class="form-control">
			    	<option value=""> - Seleccione - </option>
			    	<?php  $_smarty_tpl->tpl_vars['pais'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pais']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paises']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pais']->key => $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->_loop = true;
?>
			    		<option value="<?php echo $_smarty_tpl->tpl_vars['pais']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pais']->value['pais'];?>
</option>
			    	<?php } ?>
			    </select>
			 </div>
			 <div class="form-group">
			    <label for="pass">Ciudad:</label>
			   <select id="ciudad" class="form-control">
			    	
			    </select>
			 </div>
			 <div class="form-group">
			   <label for="pass">Insertar ciudad:</label>
			   <input type="text" id="ins_ciudad" class="form-control" placeholder="Contraseña" name="ciudad" />
			   <br>
			   <button type="button" class="btn btn-default" id="insertar">Insertar</button>
			 </div>
		</fieldset>		
	</form>

</div><?php }} ?>
