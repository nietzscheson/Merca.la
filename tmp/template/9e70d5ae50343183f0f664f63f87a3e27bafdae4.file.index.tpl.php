<?php /* Smarty version Smarty-3.1.18, created on 2014-05-23 18:22:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/merca.la/modules/cuenta/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1166361279537a2cfd71d223-44330540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e70d5ae50343183f0f664f63f87a3e27bafdae4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/merca.la/modules/cuenta/views/index/index.tpl',
      1 => 1400854644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166361279537a2cfd71d223-44330540',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537a2cfd748ea1_74945102',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a2cfd748ea1_74945102')) {function content_537a2cfd748ea1_74945102($_smarty_tpl) {?><ul class="list-group col-md-6">
  <li class="list-group-item ">
    Algo
  </li>
</ul>
<ul class="list-group col-md-6">
  <li class="list-group-item ">
    Algo
  </li>
</ul>

  <div class="panel panel-default">
    <div class="panel-heading">Datos personales</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form">
        <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nombre(s)</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Apellido(s)</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Apellido(s)">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Usuario</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="Usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
">
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">

          </div>
      </div>
      <button type="submit" class="btn btn-success">Guardar</button>
      <?php }?>
    </form>
    </div>
  </div>

<div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" >Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>


<div class="bloque">

	<ul class="nav nav-tabs">
  		<li class="active"><a href="#datos" data-toggle="tab">Datos</a></li>
  		<li><a href="#pass" data-toggle="tab">Contraseña</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
  		<div class="tab-pane fade in active" id="datos">

  		</div>
  		<div class="tab-pane fade" id="pass">
  			<form class="form-horizontal" role="form">
  				<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-4 control-label">Su password</label>
			    	<div class="col-sm-8">
			      	<input type="email" class="form-control" id="inputEmail3" placeholder="Password">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-4 control-label">Nuevo password</label>
			    	<div class="col-sm-8">
			      	<input type="email" class="form-control" id="inputEmail3" placeholder="Nuevo password">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputPassword3" class="col-sm-4 control-label">Repetir password</label>
			    	<div class="col-sm-8">
			      		<input type="text" class="form-control" id="inputPassword3" placeholder="Repetir password">
			    	</div>
			  	</div>
				<button type="submit" class="btn btn-success">Guardar</button>
				<?php }?>
			</form>
  		</div>
	</div>



</div>
<?php }} ?>
