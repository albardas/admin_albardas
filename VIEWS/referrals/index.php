<?php 	
	$nCharge = 0;
	$tab = 1;
	if (isset($_GET['nCharge'])) {
		$nCharge = $_GET['nCharge'];
		$tab = $_GET['tab'];
	}

	$data = $referrals->selectCostumers();
	$dataProducts = $referrals->products();
	$listP = $referrals->listarP();
	$addreses = $referrals->selectAddres();
	$add = $referrals->selectAdd();
	$transporters = $referrals->selectTransporters();
	$transporter = $referrals->selectTransporter();
	$drivers = $referrals->drivers();
	$driver = $referrals->driver();
	$trucks	= $referrals->trucks();
	$truck = $referrals->truck();
	$boxes = $referrals->boxes();
	$box = $referrals->box();
	//print_r($reftransportererrals->products());
	//$dataPrody = $referrals->selectCostumers();
	$costumer = $data['costumer'];
	$list = $data['list'];
	
	//print_r($data['list']);
 ?>
<div class="">
	<div class="clear"></div>
	<div class="containerPanel padd10">

		<div class="headContent">
			<h4 class="text-bold text-uppercase">Generador de remisiones</h4>
		</div>

		<div class="clear"></div>
		<div class="clear"></div>
		<?php if (!isset($_GET['nCharge'])){
			unset($_SESSION['infoFreight']);
		?>
		<div class="row">	
			<div class="col-lg-3 ">	
				<div class="block h40 text-center">	
					<div class="middle content">
						<label for="nCharge">Numero de embarques:</label>
					</div>
				</div>	
			</div>	

			<div class="col-lg-1">	
				<select name="n" id="nCharge" class="inputStyle" onchange="nCharge(this);" required="">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
		</div>
		<?php 	} ?>

		<?php 	if (isset($_GET['nCharge'])	) {?>
		
			<ul class="tabs"> 
				<?php 	
					$x = 1;
					while( $x <= $nCharge ) { ?>
				   		<li class="<?= ($tab == $x) ? 'current' : null ; ?> tabP" id="" > 
						 	<a href="#">Remision <?= $x?></a>
						 </li>

				    
				<?php $x++; }  ?>
			</ul>

			<div class="mW900">	
				<form action="" class="padd25 border form-horizontal" method="post" action="" onsubmit="generateRemision(this);">
					
					
								
					<input type="hidden" name="nCharge" value="<?= $_GET['nCharge']?>">
					<input type="hidden" name="tab" value="<?= $_GET['tab']?>">
					<input type="hidden" name="employe" value="<?= $_GET['employe']?>">
					<input type="hidden" name="costumer" value="<?= $_GET['costumer']?>">
					<input type="hidden" name="city" id="city" value="<?= $add['city']?>">

					<input type="hidden" name="transport" id="transport" value="<?= $_GET['transport']?>">
					<input type="hidden" name="driver" id="driver" value="<?= $_GET['driver']?>">
					<input type="hidden" name="id_box" id="id_box" value="<?= $_GET['box']?>">
					<input type="hidden" name="add" id="add" value="<?= $_GET['add']?>">
					<input type="hidden" name="truck2" id="truck2" value="<?= $_GET['truck']?>">





					<input type="hidden" name="f_embark" value="f_embark">
					<input type="hidden" name="f_charge" value="f_charge">

					
					<?php if ($_GET['tab'] == $_GET['nCharge']) {?>
						<input type="hidden" name="f_freight" value="f_freight">
					<?php } ?>

					<div class="row">	
						<div class="col-lg-12 text-center borderB">	
							<h3 class="s18 text-600 text-uppercase">Remision de salida</h3>
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class=" col-sm-6 col-lg-6">
							<div class="form-group">
								<label for="date" class="control-label col-md-2">Fecha: </label>
								<div class="col-md-10">
									<input type="date" class="form-control" name="date" id="date" required="">
								</div>
							</div>
						</div>
						<div class=" col-sm-6 col-lg-6">
							<div class="form-group">
								<label for="time" class="control-label col-md-2">Hora:</label>
								<div class="col-md-10">
									<input type="time" class="form-control" name="time" id="time" required="">
								</div>
							</div>
						</div>
					</div>
					<hr>	
					<div class="row">
						<div class="col-lg-12   m5 padd10 ">	
							<!--EMPRESA-->
							<div class="row borderB">
								
								<div class="col-lg-2 ">
									<label for=""><b>EMPRESA:</b></label> <br>
									<label for="">DOMICILIO:</label> <br>
									<label for="">RFC:</label> <br>
									<div class="clear">	</div>
								</div>

								<div class="col-lg-7 col-md-7  ">
									<select name="name_employe" id="employe" onchange="setUrl(this);" class="select block" required="">
										<option value="<?=  $datos['name'];?>"><?=  $datos['name'];?></option>
										<option value="4">El Cegador SPR de RL de CV</option>
										<option value="3">Las Albardas SPR de RL de CV</option>
										<option value="1">El Calabacillal SPR de RL de CV</option>
									</select>
									<input type="text" name="address_employe" id="" value="<?= $datos['addres'];?>" class="w100 block" required="">
									<input type="text" name="rfc_employe" id="" value="<?= $datos['rfc'];?>" class="w100 block" required=""><br>
									<input type="hidden" name="id_employe" id="" value="<?= $datos['id'];?>" class="w100 block" required="">

								</div>	

								<div class="col-lg-3">
									<br>					
								</div>	
							</div>
							
							<!--CLIENTE-->
							<div class="clear">	</div>
							<div class="row borderB">
								<div class="col-lg-2 ">
									<label for="">CLIENTE:</label> <br>
									<label for="">DOMICILIO:</label> <br>
									<label for="">RFC:</label> <br>
									<div class="clear">	</div>

								</div>

								<div class="col-lg-7 col-md-7  ">
							 		<select name="name_costumer" id="costumer" onchange="setUrl(this);" required="" class="select">
										<option value="<?= $costumer['name'];?>"><?= $costumer['name'];?></option>
										<?php while($row = mysqli_fetch_array($list)){ ?>
											<option value="<?= $row['id'];?>"><?= $row['name']; ?></option>
										<?php } ?>
									</select>
									<input type="hidden" name="id_costumer" id="id_costumer" value="<?= $costumer['id'];?>">
									<input type="text" name="address_costumer" id="name_costumer" value="<?= $costumer['address'];?>" required="" class="block"> 	
									<input type="text" name="rfc_costumer" id="name_costumer" value="<?= $costumer['rfc'];?>" required=""  class="block">
									<input type="hidden" name="phone_costumer" value="<?= $costumer['phone'];?>">
								</div>	
							</div>

							<!--PRODUCTOS-->
							<div class="row">	
								<div class="col-lg-12 ">	
									<br>
									<div class="containerTable">	

										<table  class="block tableP" id="tableRemisions">	
											<thead>	
												<tr>
													<td>Cantidad</td>
													<td>Concepto</td>
													<td>Precio</td>
													<td>Acciones</td>
												</tr>
											</thead>
											<tbody>	
												<?php
													if (isset($listP)) {
													
													$i = 0;
													foreach ($listP as $key ) {
														$i++;
														$id = key($listP);
														next($listP);
														?>	
														<tr>
															<th class="s12">
																<input type="hidden" name="cant_<?= $i?>" value="<?= $key[2]?>">
																<?= $key[2]?>
															</th>
															<th class="s12">
																<input type="hidden" name="nTab" value="<?=$i?>">
																<input type="hidden" name="name_<?= $i?>" value="<?= $key[1]?>">

																<?= $key[1]?>
															</th>
															<th class="s12">$ 0.00</th>
															<th class="s12 text-center">
																<a href="<?= $id;?>" onclick="eraseP(this);" class="block">Eliminar</a>
															</th>
															

														</tr>
												<?php } }
														
													?>
													
														
											

											</tbody>
										</table>

										</div>
									<div class="block text-center">	
										<div class="clear">	</div>
										<button onclick="openModal(this,'searchP');" class="btn blue s14 center	" type="button">	
											Agregar Productos
										</button>
										<div class="clear">	</div>

									</div>
									
									<br>
									
								</div>
								
							</div>	
								
							
							<?php  if ($_GET['tab'] == 1 ){ ?>
								
							
								<div class="row">
									<div class="col-lg-6 border padd5">
										<div class="row">	
											<div class="col-lg-4 ">	
												<label for="" class="W100 ">Transportista: </label>
											</div>
											<div class="col-lg-8">	
												
												<select name="name_trasport" id="transport" class="block select" onchange="setUrl(this);">
													<option value="<?= $transporter['name']; ?>"><?= $transporter['name']; ?></option>
													<?php while ($row  = mysqli_fetch_array($transporters)) { ?>
														<option value="<?= $row['id']?>"><?= $row['name']?></option>
													<?php } ?>
												</select>
											</div>
											
										</div>
										<div class="clear"></div>
										<div class="row">	
											<div class="col-lg-4 ">	
												<label for="" class="W100 ">Chofer: </label>
											</div>
											<div class="col-lg-8">	
											

											<select name="name_driver" id="driver" class="block select"  onchange="setUrl(this)">
												<option value="<?= $driver['name']?>"><?= $driver['name'];?></option>
												<?php while ($row  = mysqli_fetch_array($drivers)) { ?>
													<option value="<?= $row['id']?>"><?= $row['name']?></option>
												<?php } ?>
											</select>
											<input type="hidden" name="phone_driver" value="<?= $driver['phone'];?>">


											</div>
											
										</div>
																	 
									</div>
									<div class="col-lg-6 border padd5">
										<div class="row">	
											<div class="col-lg-2 ">	
												<label for="" class="W100 ">Origen:</label>
											</div>
											<div class="col-lg-10">	
												<select name="origin" id="origin" class="block" required="">
													<option value="">SELECCIONA UNA OPCION </option>
													<option value="Parras de la fuente, ejido el calabacillal, Agricola las albardas.">ALBARDAS</option>
													<option value="Carretara Saltillo - matamoros, ejido el Mimbre Coah, Rancho magdalenas.">MAGDALENAS</option>
												</select>
											
											</div>
											
										</div>
										<div class="clear"></div>

										<div class="row">	
											<div class="col-lg-2 ">	
												<label for="" class="W100 ">Destino: </label>
											</div>
											<div class="col-lg-10">	
												<select name="destination" id="add" class="block" required onchange="setUrl(this);">
													<option value="<?= $add['address'].' - '.$add['city'].' - '.$add['phone']?>">
														<?= $add['address'].' - '.$add['city'].' - '.$add['phone']?>	
													</option>
													<?php while ($row = mysqli_fetch_array($addreses)) {?>
														<option value="<?= $row['id']?>"><?= $row['name']?>	</option>
													<?php } ?>
												</select>
												
											</div>
										</div>
																	 
									</div>
								</div>

								<div class="clear">	</div>

								<div class="row">	
									<!--INFORMACION DEL TRACTOR-->
									<div class="col-lg-4  border">
										<div class="clear">	</div>
										<label for="" class="text-bold s18 ">Informacion del tractor</label>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Selecciona: </label>
											</div>
											<div class="col-lg-8">	
												<select name="truck" id="truck" class="block" onchange="setUrl(this);">
													<option value=""><?= $truck['brand'];?></option>
													<?php while ($row = mysqli_fetch_array($trucks)) {?>
														<option value="<?= $row['id'];?>"><?= $row['brand']?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="clear"></div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Marca: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="brand" id="brand" class="block" required="" value="<?= $truck['brand'];?>">
											</div>
										</div>
										<div class="clear">	</div>

										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Modelo: </label>

											</div>
											<div class="col-lg-8">	
												<input type="number" name="model" id="model" class="block" required="" value="<?= $truck['model'];?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">N econ: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="n_economic" id="" class="block" required="" value="<?= $truck['num_econ'];?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Placas: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="plates_t" id="" class="block" required="" value="<?= $truck['placa']." - ".$truck['placa_2']?>">
											</div>
										</div>
										<div class="clear">	</div>
									</div>
									<!--INFORMACION DE LA CAJA-->
									<div class="col-lg-4  border">
										<div class="clear">	</div>
										<label for="" class="text-bold s18 ">Informacion de caja</label>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Selecciona: </label>
												

											</div>
											<div class="col-lg-8">	
												
												<select name="box" id="box" class="block" onchange="setUrl(this);">
													<option value="<?= $box['id']?>">
														<?= $box['type']." - ".$box['num_econ'];?></option>
													<?php while ($row = mysqli_fetch_array($boxes)) {?>
														<option value="<?= $row['id']?>"><?= $row['type']. "-".$row['num_econ']?></option>

														
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="clear"></div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Caja: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="box" id="" class="block" required="" value="<?= $box['type']?>">
											</div>
										</div>
										<div class="clear">	</div>
										
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Tempertura: </label>
											</div>
											<div class="col-lg-5">	
												<input type="text" name="temperature" id="" class="block" required="" value="<?= $box['temperature']?>">
											</div>
											<div class="col-lg-3">	
												<select name="degrees" id="degrees" class="block" required="">
													<option value="<?= $box['grades']?>"><?= $box['grades']?></option>
													<option value="C °">C °</option>		
													<option value="F °">F °</option>		
													<option value="K °">K °</option>		
												</select>
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">N econ: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="n_economicBox" id="" class="block" required="" value="<?= $box['num_econ']?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Placas: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="plates" id="" class="block" required="" value="<?= $box['placa']?>">
											</div>
										</div>
										<div class="clear">	</div>
									</div>

									<!--Otros permisos-->
									<div class="col-lg-4  border">
										<div class="clear">	</div>
										<label for="" class="text-bold s18 ">Otros permisos</label>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">CAAT: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="CAAT" id="" class="block" required="" value="<?= $transporter['caat']?>">
											</div>
										</div>
										<div class="clear">	</div>
										
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">ALPHA: </label>
											</div>
											<div class="col-lg-8">	
												<input type="text" name="ALPHA" id="" class="block" required="" value="<?= $transporter['alpha']?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">ICCMX: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="ICCMX" id="" class="block" required="" value="<?= $transporter['iccmx']; ?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">US DOT: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="US_DOT" id="" class="block" required="" value="<?= $transporter['us_dot']; ?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="clear">	</div>
										<div class="clear">	</div>
										<div class="clear">	</div>
									</div>
								</div>	
							<?php }else{ ?>
								<div class="row">
									<!--INFORMACION DE LA CAJA-->
									<div class="col-lg-4  border">
										<div class="clear">	</div>
										<label for="" class="text-bold s18 ">Informacion de caja</label>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Selecciona: </label>
												

											</div>
											<div class="col-lg-8">	
												
												<select name="box" id="box" class="block" onchange="setUrl(this);">
													<option value="<?= $box['id']?>">
														<?= $box['type']." - ".$box['num_econ'];?></option>
													<?php while ($row = mysqli_fetch_array($boxes)) {?>
														<option value="<?= $row['id']?>"><?= $row['type']. "-".$row['num_econ']?></option>

														
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="clear"></div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Caja: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="box" id="" class="block" required="" value="<?= $box['type']?>">
											</div>
										</div>
										<div class="clear">	</div>
										
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Tempertura: </label>
											</div>
											<div class="col-lg-5">	
												<input type="text" name="temperature" id="" class="block" required="" value="<?= $box['temperature']?>">
											</div>
											<div class="col-lg-3">	
												<select name="degrees" id="degrees" class="block" required="">
													<option value="<?= $box['grades']?>"><?= $box['grades']?></option>
													<option value="C °">C °</option>		
													<option value="F °">F °</option>		
													<option value="K °">K °</option>		
												</select>
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">N econ: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="n_economicBox" id="" class="block" required="" value="<?= $box['num_econ']?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Placas: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="plates" id="" class="block" required="" value="<?= $box['placa']?>">
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						
							<div class="row">
							<div class="clear">	</div>

								<div class="col-lg-12 border">
									<div class="block  text-left">	
										<div class="clear"></div>
										<label for="" class="text-bold s18 ">Comentarios</label> <br>
										<textarea name="comments" id="comments" cols="40" rows="3" class="block padd5 r5"></textarea>
										<div class="clear"></div>

									</div>		 
								</div>
							</div>
							<div class="clear">	</div>
						</div>
					</div>

					<button class="btn Green s14" type="submit" >
						<b>Generar remision</b>
					</button>
				</form>

			</div>
			
		<?php } ?>
		
		<div class="clear"></div>

	</div>
	
</div>
</div>
<div class="clear"></div>

<form class="modalContent " id="searchP">
	<div class="headModal">
		<h4 class="text-bold">Agregar productos </h4>
	</div>
	<div class="mainModal">
		<div class="containerTable">	
		<table id="tableProducts" class="block">	
			<thead>	
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Disponible</td>
					<td>Cantidad</td>
					<td>Acciones</td>

				</tr>
			</thead>
			<tbody>	
				<?php while($row = mysqli_fetch_array($dataProducts)){ ?>
					
				<tr>
			
					<th class="s12"><?= $row['id']?></th>
					<th class="s12"><?= $row['name_product']?></th>
					<th class="s12 quantity">
					<?php
					if (isset($listP)) {
					 	$n = 0;
						foreach ($listP as $key ) { 
							if ($key[0] == $row['id']) {

								$n += $key[2];

							}
						}
						$available = $row['quantity'] - $n;
						echo $available;
					 } else{
					 	echo $row['quantity'];
					 }
						
					?>
					
					</th>
					<th class="quant">
						<input type="number" placeholder="50" class="mW50" onchange="quantity(this)">
					</th>
					<th>
						<a href="<?= $row['id'];?>" onclick="addP(this);" class="little-btn blue adjust s12 mW30 text-600"><i class="material-icons s12">add</i>
						</a>
						
					</th>
				</tr>	
					
				<?php } ?>	
				
				
				
				
			</tbody>
		</table>
		</div>
	</div>
</form>

<?php if (isset($_GET['nCharge'])){ 
	if (!$_SESSION['infoFreight']) { ?>
	<form class="modal2 " id="freight" onsubmit="saveFreight(this);" method="post">
		<div class="headModal">
			<h4 class="text-bold text-center"> INFORMACION DEL FLETE  </h4>
		</div>
		<div class="mainModal">
		
				<div class="row">
					<div class="col-lg-3 col-md-3 col-lg-offset-7">
						<label for="">Precio:</label> <br>
						<input type="number" name="quantity" id="quantity" class="block border" required="">
					</div>
					<div class="col-lg-2 col-md-2">
						<label for="">Moneda:</label> <br>
						<select name="currency" id="currency" required="" class="block border ">
							<option value=""></option>
							<option value="MXN">MXN</option>
							<option value="USD">USD</option>
						</select> 
					</div>

				</div>
				<div class="clear"></div>
				<div class="containerTable">
					<table>
						<thead>
						<tr>
							<?php 	
							$e = 1;
							while( $e <= $nCharge ) { ?>
								<td class="text-center">
									Remision <?= $e?>
								</td>

						<?php $e++; }  ?>
							<td>
								Agricola	
							</td>
							<td>
								Total	
							</td>
							
						</tr>
						</thead>
						<tbody>
							<tr>
									<?php 	
							$e = 1;
							while( $e <= $nCharge ) { ?>
								<th class="text-center">
									<input type="number" name="<?= $e?>" id="" class="mW100 border remision" required="">
								</th>

						<?php $e++; }  ?>
								<th class="text-center">
									<input type="number" name="agricola" id="" class="mW100 border remision" required="" >
								</th>
								<th class="text-center">
									<input type="number" name="total" id="importe_total" class="mW100 border total">
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="clear"></div>
			<div class="row">
				<div class="col-lg-offset-7 col-md-offset-7 col-lg-4 col-md-4">
					<input type="submit" value="Guardar informacion" class="little-btn blue adjust s12  text-600">
					
				</div>
			</div>
		</div>
	</form>
	<div class="bgBlack2 " id="bgBlack2"></div>
<?php  } } ?>
<div class="bgBlack " onclick="closeModal();"></div>