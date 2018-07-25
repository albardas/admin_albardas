<?php 
	$row = $transporters->edit();
 ?>

<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
			Editar informacion de trasportista
			</h3>
			<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
					<a href="" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-home"></i></a>    
            </div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<form action="<?=URL?>transporters/edit/" method="post"  id="addEmploye">
				<input type="hidden" name="id" value="<?= $row['id'];?>">
				<div class="mainContent mW600">
					<div class="row">
						<div class="col-lg-10">
							<label for="name">Razón social:</label>
							<input type="text" name="name" id="name" class="inputStyle" required value="<?= $row['name']?>"> 
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-10">
							<label for="rfc">R F C:</label>
							<input type="text" name="rfc" id="rfc" class="inputStyle" required  value="<?= $row['rfc']?>"> 
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-10">
							<label for="address">Direccion fiscal:</label>
							<input type="text" name="address" id="address" placeholder="" class="inputStyle" required  value="<?= $row['address']?>"> 
						</div>
					</div>
					<div class="clear"></div>
					
					<div class="row">
					
						<div class="col-lg-10">
							<label for="phone">Telefono:</label>
							<input type="text" name="phone" id="phone" placeholder="" class="inputStyle" required  value="<?= $row['phone']?>"> 
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-5">
							<label for="caat">CAAT:</label>
							<input type="text" name="caat" id="caat" placeholder="" class="inputStyle" required  value="<?= $row['caat']?>"> 
						</div>
						<div class="col-lg-5">
							<label for="alpha">ALPHA:</label>
							<input type="text" name="alpha" id="alpha" placeholder="" class="inputStyle" required  value="<?= $row['alpha']?>"> 
						</div>
						
					</div>
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-5">
							<label for="iccmx">ICCMX:</label>
							<input type="text" name="iccmx" id="iccmx" placeholder="" class="inputStyle" required  value="<?= $row['iccmx']?>"> 
						</div>
						<div class="col-lg-5">
							<label for="us_dot">US DOT:</label>
							<input type="text" name="us_dot" id="us_dot" placeholder="" class="inputStyle" required  value="<?= $row['us_dot']?>"> 
						</div>
						
					</div>
					<!-- <div class="clear"></div> -->

				</div>
				<div class="col-lg-4 ">
					<input type="submit" value="Guardar" class="btn green">
				</div>
			</form>
		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>
