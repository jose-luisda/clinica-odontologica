
<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>
<br><br><br><br><br>
<div class="container">
<div class="row">
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Acceder al Sistema</h4>
  </div>
  <div class="card-content table-responsive">
			    	<form accept-charset="UTF-8" role="form" method="post" action="./?action=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" name="mail" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
			    		</div>
			    		<div class="form-group">
			    			<select class="form-control" name="type_user">

								<option value="1"> ADMINISTRADOR</option>

								<option value="0">SECRETARIA(O)</option>

							</select>
			    		</div>
			    		<input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
			    	</fieldset>
			      	</form>
			      	</div>
			   
		</div>
	</div>
</div>
