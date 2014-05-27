<ul class="list-group col-md-6">
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
        {if isset($usuario)}
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nombre(s)</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="{$usuario.nombre}" value="{$usuario.nombre}">
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
              <input type="text" class="form-control" id="inputPassword3" placeholder="Usuario" value="{$usuario.usuario}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="email" value="{$usuario.email}">
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">

          </div>
      </div>
      <button type="submit" class="btn btn-success">Guardar</button>
      {/if}
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
  				{if isset($usuario)}
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
				{/if}
			</form>
  		</div>
	</div>



</div>
