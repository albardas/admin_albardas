<?php 
	$data = $costumers->address();
 ?>


<!-- <div class="mainContainer"> -->
<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title text-600">Direcciones de entrega - <b><?= $_GET['name'];?></h3>
	    </div>
		<div class="box-body padd10 bgWhite table-responsive">
			<div class="row">
				<div class="col-lg-2">
					<a href="<?= URL?>costumers/addAddress/?id=<?=$_GET['id']?>&name=<?=$_GET['name']?>" class="btn btn-primary s14"><i class="fas fa-plus"></i> Nueva direccion </a>
				</div>
				<div class="clear"></div>
			</div>
			<table id="tableCostumers" class="table bgWhite">
				<thead>
					<tr>
						<th scope="col" >ID</th>
						<th scope="col" >NOMBRE</th>
						<th scope="col" >DIRECCION	</th>
						<th scope="col" >TELEFONO</th>
						<th scope="col" >ACCIONES</th>
					</tr>
				</thead>	
				<tbody>
					<?php while($row = mysqli_fetch_array($data)){?>
					    <tr>
					      	<th ><?= $row['id']; ?></th>
					      	<th >	
					      		<a href="#"><?= $row['name']; ?></a></th>
					      	<th ><?= $row['address']; ?></th>
					      	<th ><?= $row['phone']; ?></th>
					      	<th >
					      		<a href="<?=URL?>costumers/deleteAddres/?id=<?= $row['id'];?>" onclick="deleteAddress(this);" class="tool">
				      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
					      			<span class="tooltext">Eliminar</span>
					      			 
					      		</a>
					      		<a href="<?=URL?>costumers/editAddress/?id=<?= $row['id'];?>" onclick=""  class="tool">
					      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
					      			<span class="tooltext">Editar</span>
					      			 
					      		</a>
					      	</th>
					    </tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="box-footer">
		</div>
	</div>
</div>