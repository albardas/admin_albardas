<?php 
	$data = $transporters->trucks();
 ?>
<!-- <div class="mainContainer"> -->
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de camiones de  <span class="text-decoration"><?= $_GET['name'];?></span></h4>
		</div>
		<div class="mainContent">
			<div class="row">
				<div class="col-lg-2 padd10 ">
					
					<a href="<?= URL?>transporters/addTruck/?id=<?= $_GET['id'];?>&nameTransport=<?= $_GET['name'] ?>" class="btn bgBlue s14">Nuevo camion</a>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="containerTable table-responsive">
						<table id="tableCostumers">
							<thead>
								<tr>
									<td>ID</td>
									<td>MARCA</td>
									<td>MODELO</td>
									<td>COLOR</td>
									<td>PLACAS</td>
									<td>ACCIONES</td>
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($data)){?>
								    <tr>
								      	<th><?= $row['id']; ?></th>
								      	<th>
								      		<a href="viewWork/<?= $row['id'];?>"><?= $row['brand']?></a>
								      	</th>
								      	<th><?= $row['model']; ?></th>
								      	<th><?= $row['color']; ?></th>
								      	<th><?= $row['placa']." - ".$row['placa_2']; ?></th>
								      	<th>
								      		<a href="<?=URL?>transporters/deleteTruck/?id=<?= $row['id'];?>" onclick="erase(this);" class="tool">
							      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
								      			<span class="tooltext">Eliminar </span>
								      	       
								      		</a>
								      		<a href="<?=URL?>transporters/editTruck/?id_box=<?= $row['id'];?>&id=<?= $_GET['id'] ?>&nameTransport=<?= $_GET['name'] ?>" class="tool">
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