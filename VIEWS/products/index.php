<?php 
	$data = $products->index();
 ?>
<!-- <div class="mainContainer">
	<div class="clear"></div> -->
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de productos</h4>
		</div>
		<div class="mainContent">
			<div class="row">
				<div class="col-lg-2 padd10 ">
					
					<a href="<?= URL?>products/add/" class="btn bgBlue s14">Nuevo producto</a>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="containerTable table-responsive">
						<table id="tableCostumers">
							<thead>
								<tr>
									<td>ID</td>
									<td>NOMBRE</td>
									<td>CALIDAD</td>
									<td>TAMAÑO</td>
									<td>EMPAQUE</td>
									<td>MARCA</td>
									<td>PESO</td>
									<td>ACCIONES</td>
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($data)){?>
								    <tr>
								      	<th><?= $row['id']; ?></th>
								      	<th>
								      		<?= $row['name']; ?>
								      	</th>
								      	<th><?= $row['quality']; ?></th>
								      	<th><?= $row['size']; ?></th>
								      	<th><?= $row['pack']; ?></th>
								      	<th><?= $row['brand']; ?></th>
								      	<th>
								      		<?= $row['weight'].' '.$row['unit_measure']; ?>
								      	</th>
								      	
								      	<th>
								      		<a href="delete/?id=<?= $row['id'];?>" onclick="erase(this);" class="tool">
							      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
								      			<span class="tooltext">Eliminar</span>
								      			 
								      		</a>
								      		<a href="edit/?id=<?= $row['id'];?>" class="tool">
								      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
								      			<span class="tooltext">Editar</span>	 
								      		</a>
								      		
								      	</th>
								    </tr>
								<?php } ?>
							</tbody>
						</table>
			</div>
		</div>
	</div>
<!-- </div> -->