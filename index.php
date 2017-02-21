<?php session_start();
	if(($_SESSION['nombre_usuario']!="")&&($_SESSION['clave_usuario']!=""))
	{
		echo "";
	}
	else
	{
		header('location:iu_login.php');
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<title>Reservas de Pasajes</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald:300,400" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
	</head>
	<body role="document" onload="validarInfo()" class="admin">
		<? include('iu_menu.php'); ?>
		<div class="nav-reservations-mobile">
			<ul>
				<li class="active"><a href="index.php"><span class="icon-plane"></span>Pasajes Aereos</a></li>
				<li><a href="hotelbeds/interfaces/iu_inicioAGT.php"><span class="icon-hotel"></span>Hoteles</a></li>
				<li><a href="hotelbeds/interfaces/iu_trasladosAGT.php"><span class="icon-transport"></span>Transportes</a></li>
				<li><a href="hotelbeds/interfaces/iuentradasAGT.php"><span class="icon-tours"></span>Entradas/Tours</a></li>
			</ul>
		</div>	
		<div class="reservations">
			<div class="nav-reservations-desktop">
				<ul>
					<li class="active"><a href="index.php"><span class="icon-plane"></span>Pasajes Aereos</a></li>
					<li><a href="hotelbeds/interfaces/iu_inicioAGT.php"><span class="icon-hotel"></span>Hoteles</a></li>
					<li><a href="hotelbeds/interfaces/iu_trasladosAGT.php"><span class="icon-transport"></span>Transportes</a></li>
					<li><a href="hotelbeds/interfaces/iuentradasAGT.php"><span class="icon-tours"></span>Entradas/Tours</a></li>
				</ul>
			</div>
			<div class="flight-form">
				<div class="nav-flight-type">
				<h2>Reserva de Pasajes</h2>
					<ul>
						<li class="active"><a href="index.php">KIU (Amaszonas)</a></li>
						<li><a href="sabre3.0/interfaces/index.php">Sabre Internacional</a></li>
					</ul>
				</div>
					<div class="form-align">
					<form name="avail_search_form" action="iu_disponibilidad.php" class="form-horizontal" role="form">
						<input type="text" name="user" value="VISIONMUNDO" readonly  style="display:none"/> 
						<input type="password" name="pass" value="Too9ta0kookaeG3E" readonly  style="display:none"/>
						<input type="password" name="device" value="CBBK852005" readonly  style="display:none"/> 					
						<input type="password" name="sine" value="CBBK85207" readonly  style="display:none"/> 
							<h3>Donde quiere viajar?</h3>
							<div class="input-align">
									<label for="source" class="control-label">Origen:</label>
									<select class="input-select" ng-model="source" name="source" id="source">
										<option value="LPB" <? if($_SESSION['origen']=='LPB'){echo 'selected';} ?>>La Paz (LPB)</option>
										<option value="CBB" <? if($_SESSION['origen']=='CBB'){echo 'selected';} ?>>Cochabamba(CBB)</option>
										<option value="VVI" <? if($_SESSION['origen']=='VVI'){echo 'selected';} ?>>Santa Cruz (VVI)</option>
										<option value="TJA" <? if($_SESSION['origen']=='TJA'){echo 'selected';} ?>>Tarija(TJA)</option>
										<option value="SRE" <? if($_SESSION['origen']=='SRE'){echo 'selected';} ?>>Sucre(SRE)</option>
										<option value="ORU" <? if($_SESSION['origen']=='ORU'){echo 'selected';} ?>>Oruro(ORU)</option>
										<option value="RBQ" <? if($_SESSION['origen']=='RBQ'){echo 'selected';} ?>>Rurrenabaque(RBQ)</option>
										<option value="TDD" <? if($_SESSION['origen']=='TDD'){echo 'selected';} ?>>Trinidad(TDD)</option>
										<option value="UYU" <? if($_SESSION['origen']=='UYU'){echo 'selected';} ?>>Uyuni(UYU)</option>
										<option value="BYC" <? if($_SESSION['origen']=='BYC'){echo 'selected';} ?>>Yacuiba(BYC)</option>
										<option value="CGR" <? if($_SESSION['origen']=='CGR'){echo 'selected';} ?>>Campo Grande(CGR)</option>
										<option value="CGB" <? if($_SESSION['origen']=='CGB'){echo 'selected';} ?>>Cuiaba(CGB)</option>
										<option value="IQQ" <? if($_SESSION['origen']=='IQQ'){echo 'selected';} ?>>Iquique(IQQ)</option>
										<option value="MVD" <? if($_SESSION['origen']=='MVD'){echo 'selected';} ?>>Montevideo(MVD)</option>
										<option value="ASU" <? if($_SESSION['origen']=='ASU'){echo 'selected';} ?>>Asuncion(ASU)</option>
										<option value="CUZ" <? if($_SESSION['origen']=='CUZ'){echo 'selected';} ?>>Cusco(CUZ)</option>
										<option value="AQP" <? if($_SESSION['origen']=='AQP'){echo 'selected';} ?>>Arequipa(AQP)</option>
										<option value="SLA" <? if($_SESSION['origen']=='SLA'){echo 'selected';} ?>>Salta(SLA)</option>
										<option value="AGT" <? if($_SESSION['origen']=='AGT'){echo 'selected';} ?>>Ciudad del Este(AGT)</option>
									</select>
							</div>
							<div class="align-arrow input-align">
								<span class="arrow icon-arrow1"></span>
							</div>
							<div class="input-align">
									<label for="dest" class="control-label">Destino:</label> 
									<select class="input-select"  ng-model="dest" name="dest" id="dest">
										<option value="CBB" <? if($_SESSION['destino']=='CBB'){echo 'selected';} ?>>Cochabamba(CBB)</option>
										<option value="LPB" <? if($_SESSION['destino']=='LPB'){echo 'selected';} ?>>La Paz (LPB)</option>
										<option value="VVI" <? if($_SESSION['destino']=='VVI'){echo 'selected';} ?>>Santa Cruz (VVI)</option>
										<option value="TJA" <? if($_SESSION['destino']=='TJA'){echo 'selected';} ?>>Tarija(TJA)</option>
										<option value="SRE" <? if($_SESSION['destino']=='SRE'){echo 'selected';} ?>>Sucre(SRE)</option>
										<option value="ORU" <? if($_SESSION['destino']=='ORU'){echo 'selected';} ?>>Oruro(ORU)</option>
										<option value="RBQ" <? if($_SESSION['destino']=='RBQ'){echo 'selected';} ?>>Rurrenabaque(RBQ)</option>
										<option value="TDD" <? if($_SESSION['destino']=='TDD'){echo 'selected';} ?>>Trinidad(TDD)</option>
										<option value="UYU" <? if($_SESSION['destino']=='UYU'){echo 'selected';} ?>>Uyuni(UYU)</option>
										<option value="BYC" <? if($_SESSION['destino']=='BYC'){echo 'selected';} ?>>Yacuiba(BYC)</option>
										<option value="CGR" <? if($_SESSION['destino']=='CGR'){echo 'selected';} ?>>Campo Grande(CGR)</option>
										<option value="CGB" <? if($_SESSION['destino']=='CGB'){echo 'selected';} ?>>Cuiaba(CGB)</option>
										<option value="IQQ" <? if($_SESSION['destino']=='IQQ'){echo 'selected';} ?>>Iquique(IQQ)</option>
										<option value="MVD" <? if($_SESSION['destino']=='MVD'){echo 'selected';} ?>>Montevideo(MVD)</option>
										<option value="ASU" <? if($_SESSION['destino']=='ASU'){echo 'selected';} ?>>Asuncion(ASU)</option>
										<option value="CUZ" <? if($_SESSION['destino']=='CUZ'){echo 'selected';} ?>>Cusco(CUZ)</option>
										<option value="AQP" <? if($_SESSION['destino']=='AQP'){echo 'selected';} ?>>Arequipa(AQP)</option>
										<option value="SLA" <? if($_SESSION['destino']=='SLA'){echo 'selected';} ?>>Salta(SLA)</option>
										<option value="AGT" <? if($_SESSION['destino']=='AGT'){echo 'selected';} ?>>Ciudad del Este(AGT)</option>
									</select>    
							</div>    
							<h3>Cuando quiere viajar?</h3> 
							<div class="input-align">
								<label class="control-label">Mes:</label>
								<select class="input-select" ng-model="dateselmy" name="dateselmy" id="dateselmy"><?php echo select_month();?></select>                   
							</div>  
							<div class="input-align">   
								<label for="dateseld" class="control-label">Día:</label>                 
								<select class="input-select" ng-model="dateseld" name="dateseld" id="dateseld" selected><?php echo select_day();?></select>
							</div>    
							<div class="small-align">  
								<label for="direct" class="control-label">Solo Vuelos Directos:</label>
									<select class="input-select" ng-model="direct" name="direct" id="direct">
										<option value="false" selected="selected">No</option>
										<option value="true">Si</option>
									</select>
									<input type="hidden" name="cabin" value="Economy"/> 
									<input type="hidden" name="country" readonly value="BO"/>                
								<label for="currency" class="control-label">Moneda:</label>
									<select class="input-select" ng-model="currency" name="currency" id="currency" >
										<option value="BOB" <? if($_SESSION['currency']=='BOB'){ echo "selected";} ?> selected>BOB</option>
										<option value="USD" <? if($_SESSION['currency']=='USD'){ echo "selected";} ?>>USD</option>
									</select>     
								<h3>Cuantas Personas?</h3>              
								<label for="adulto" class="control-label">Adultos:</label>                  
								<select class="input-select" ng-model="adulto" name="adulto" id="adulto" onchange="validarInfo()">
									<option value="0" <? if($_SESSION['adulto']==0){ echo 'selected="selected"';} ?>>0</option>
									<option value="1" <? if($_SESSION['adulto']==1){ echo 'selected="selected"';} ?>>1</option>
									<option value="2" <? if($_SESSION['adulto']==2){ echo 'selected="selected"';} ?>>2</option>
									<option value="3" <? if($_SESSION['adulto']==3){ echo 'selected="selected"';} ?>>3</option>
									<option value="4" <? if($_SESSION['adulto']==4){ echo 'selected="selected"';} ?>>4</option>
									<option value="5" <? if($_SESSION['adulto']==5){ echo 'selected="selected"';} ?>>5</option>
									<option value="6" <? if($_SESSION['adulto']==6){ echo 'selected="selected"';} ?>>6</option>
								</select>  												
								<input name="senior" type="checkbox" value="1" <? if(isset($_SESSION['senior'])){echo 'Checked';}?>> Senior
								<label for="menores" class="control-label">Menores:</label>
								<select class="input-select" ng-model="menores" name="menores" id="menores" onchange="validarInfo()">
									<option value=0  <? if($_SESSION['menores']==0){ echo 'selected="selected"';} ?>>0</option>
									<option value=1 <? if($_SESSION['menores']==1){ echo 'selected="selected"';} ?>>1</option>
									<option value=2 <? if($_SESSION['menores']==2){ echo 'selected="selected"';} ?>>2</option>
									<option value=3 <? if($_SESSION['menores']==3){ echo 'selected="selected"';} ?>>3</option>
									<option value=4 <? if($_SESSION['menores']==4){ echo 'selected="selected"';} ?>>4</option>
									<option value=5 <? if($_SESSION['menores']==5){ echo 'selected="selected"';} ?>>5</option>
									<option value=6 <? if($_SESSION['menores']==6){ echo 'selected="selected"';} ?>>6</option>
								</select>
								<label for="infantes" class="control-label">Infantes:</label>
								<select class="input-select" ng-model="infantes" name="infantes" id="infantes" onchange="validarInfo()">
									<option value=0 <? if($_SESSION['infantes']==0){ echo 'selected="selected"';} ?>>0</option>
									<option value=1 <? if($_SESSION['infantes']==1){ echo 'selected="selected"';} ?>>1</option>
									<option value=2 <? if($_SESSION['infantes']==2){ echo 'selected="selected"';} ?>>2</option>
									<option value=3 <? if($_SESSION['infantes']==3){ echo 'selected="selected"';} ?>>3</option>
									<option value=4 <? if($_SESSION['infantes']==4){ echo 'selected="selected"';} ?>>4</option>
									<option value=5 <? if($_SESSION['infantes']==5){ echo 'selected="selected"';} ?>>5</option>
									<option value=6 <? if($_SESSION['infantes']==6){ echo 'selected="selected"';} ?>>6</option>
								</select>
								<div id="mensaje" style="display:none;" class="label label-danger">* Seleccione por lo menos un pasajero: Adulto o Menor</div>
								<div class="form-buttons">
									<button id="btnBuscarVuelos" type="submit" class="form-buttons__submit" disabled=disabled>Buscar Vuelos</button>
								</div>	
							</div>
						</div>       
					</form>
					</div>
				</div>				
			<div class="panel panel-default">
				<div class="daily-results__details-container">
					<h2>Itinerario</h2>
				</div>
				
				<div id="selected_segments">
					<form name="form1" method="get" action="iu_colocar_nombres.php" class="form-horizontal" role="form">
						<div class="row box-itinerario-buttons">
							<div class="col-sm-offset-3 col-sm-2">
								<a href="javascript:getFare()" class="btn btn-warning btn-block btn-sm" <?php echo (!isset($_SESSION['segmentos'])) ? 'disabled=disabled' : ''; ?>>Cotizar</a>
							</div>
							<div class="col-sm-2">
								<input type="submit" name="tarifas" id="tarifas" value="Confirmar" class="btn btn-primary btn-block btn-sm" disabled=disabled>
							</div>
							<div class="col-sm-2">
								<a href="iu_vaciar_reserva.php" class="btn btn-default btn-block btn-sm" <?php echo (!isset($_SESSION['segmentos'])) ? 'disabled=disabled' : ''; ?>>Vaciar</a> 
							</div>											
						</div>
						<div class="table-responsive">
							<table  class="table-result">
								<thead>
									<tr class="daily-results__headers">
										<th  width="10%">Linea Aerea </th>
										<th  width="15%">Número de Vuelo </th>
										<th  width="15%">Hora de Salida </th>
										<th  width="15%">Hora de Llegada</th>
										<th  width="15%">Origen</th>
										<th  width="15%">Destino</th>
										<th  width="15%">Tarifas</th>
									</tr>
								</thead>
								<tbody>
									<tr><td colspan="7" align="center"><div id="ajax-panel"></div><div id="fare_clases_segmento" class="row"></div></td></tr>
									<?
										$t= $_SESSION['segmentos'];
										//print_r($t);
										for($i=1;isset($t[$i]->MarketingAirline);$i++)
									{
									?>
									<tr>
									<td><? echo $t[$i]->MarketingAirline;?>	 </td>
									<td><? echo $t[$i]->FlightNumber;?></td>
									<td><? echo $t[$i]->DepartureDateTime;?></td>
									<td><? echo $t[$i]->ArrivalDateTime;?></td>
									<td><? echo $t[$i]->DepartureAirport;?></td>
									<td><? echo $t[$i]->ArrivalAirport;?></td>
									<td><? echo '<select class="input-select ng-model="clases_segmento" name="clases_segmento'.$i.'" id="clases_segmento'.$i.'">';
									$class = $_GET["clases_segmento$i"];
											$cont=0;
											while($clases=$t[$i]->Classes[$cont]!="")
											{
												if($clases=$t[$i]->Classes[$cont+1]=="")
												{
													echo '<option value="'.$clases=$t[$i]->Classes[$cont].'"';if($t[$i]->Classes[$cont]==$class){ echo' selected="selected"';}else{if($t[$i]->Classes[$cont]==$t[$i]->clase_seleccionada){ echo' selected="selected"';}} echo '>'.$clases=$t[$i]->Classes[$cont].'</option>';
												}
												else
												{
													echo '<option value="'.$clases=$t[$i]->Classes[$cont].'"';if($t[$i]->Classes[$cont]==$class){ echo' selected="selected"';}else{if($t[$i]->Classes[$cont]==$t[$i]->clase_seleccionada){ echo' selected="selected"';}} echo '>'.$clases=$t[$i]->Classes[$cont].'</option>';
												}
												$cont++;
											}
											echo ' </select>';
											?>
											<a href="iu_eliminar_uno_por_uno.php?pos_segmento=<? echo $i; ?>">Eliminar</a></td>
										</tr>
										<?
									}
									?>
								</tbody>
							</table>
						</div>
					</form>
				</div>
				<div id="selected_segments_fare">Busca y agrega Vuelos para crear tu Itinerario</div>
			</div> <!-- panel-default -->

			<div class="panel panel-default" id="booking_search" style="visibility:hidden">
				<div class="panel-heading">
					<h2 class="panel-title"><strong>Booking</strong></h2>
				</div>
				<div class="panel-body">
					<form name="form2" action="index.php" name="booking_search_form" onSubmit="return booking_search()"  class="form-horizontal" role="form">
						<input type="hidden" name="device" value="CBB00Z8B01"/>
						<input type="hidden" name="sine" value="SRZ00Z8AR"/>
						<input type="hidden" name="user"/>
						<input type="hidden" name="pass"/>
						<input type="hidden" name="country"/>
						<input type="hidden" name="currency"/>
						<div class="form-group">
							<label for="FistName" class="control-label">NOMBRES:</label>
							<div class="col-sm-6">
								<input type="text" name="FistName" id="FistName" placeholder="">                    
							</div>
						</div>
						<div class="form-group">
							<label for="LastName" class="control-label">APELLIDOS:</label>
							<div class="col-sm-6">
								<input type="text" name="LastName" id="LastName" placeholder="">                    
							</div>
						</div>
						<div class="form-group">
							<label for="DocType" class="control-label">TIPO DE DOCUMENTO:</label>
							<div class="col-sm-6">
								<select class="input-select" ng-model="doctype" name="DocType">
									<option value="PP">PASAPORTE</option>
									<option value="NI">CEDULA DE IDENTIDAD</option>
								</select>                    
							</div>
						</div>
						<div class="form-group">
							<label for="DocID" class="control-label">ID. DOCUMENTO:</label>
							<div class="col-sm-6">
								<input type="text" name="DocID" id="DocID" placeholder="">                    
							</div>
						</div>
						<div class="form-group">
							<label for="Telephone" class="control-label">TELEFONO:</label>
							<div class="col-sm-6">
								<input type="text" name="Telephone" id="Telephone" placeholder="">                    
							</div>
						</div>
						<div class="form-group">
							<label for="Email" class="control-label">E-MAIL:</label>
							<div class="col-sm-6">
								<input type="text" name="Email" id="Email" placeholder="">                    
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-3">	                  
								<input type="button" value="Atras" onClick="booking_back();" class="btn btn-primary"/>
							</div>
							<div class="col-sm-3">
								<input type="button" onClick="booking_submit();" value="Hacer Reserva" class="btn btn-primary"/>
							</div>
							<div class="col-sm-6">
							</div>
						</div>
					</form>
					<div id="booking_result" style="visibility:hidden"></div>
				</div> <!-- panel-body -->
			</div> <!-- panel-default -->
		<footer>
			<img src="img/logo-vm.png" alt="">
			<div class="contact-info">
				<p><b>Contáctenos</b></p>
				<ul class="social">
					<li><a href="http://www.facebook.com/VISIONMUNDO" target="_blank"><img src="img/facebook.svg" alt="facebook"></a></li>
					<li><a href=""><img src="img/twitter.svg" target="_blank" alt="twitter"></a></li>
					<li><a href="mailto:info@visionmundo.com?subject=Mail desde suscripcion"  target="_blank"><img src="img/mail.svg" alt="webmail"></a></li>
				</ul>
				<p>591-4-4455718 (Cochabamba)</p>
				<p>591-3-3334441 (Santa Cruz)</p>
				<p><a href="mailto:info@visionmundo.com?subject=Tengo una consulta" target="_blank">info@visionmundo.com</a></p>
				<p>Whatsap 591-72166614</p>
			</div>
			<div class="copyrights">
				<p>©2016 Alejandro Rodriguez Zegada</p>
				<p>powered by <a href="http://www.mokamint.com"  target="_blank">Moka Mint</a></p>
			</div>
		</footer>
		
		<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="jquery.validate.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/functions.js"></script>
	</body>
</html>

<?php
function select_day() {
	$text = '';
	$day = date('d');
	for ($i = 1 ; $i <= 31; $i++) {
		if ($i < 10) $i = "0$i";
		if ($day == $i) {
			$text .= "<option selected=\"selected\" value=\"$i\">$i</option>";
		} else {
			$text .= "<option value=\"$i\">$i</option>";
		}

	}
	return $text;
}

function select_month() {
	$months = array('Dic', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov');
	$text = '';
	$month = date('n');
	$year = date('Y');
	for ($i = $month ; $i < (12+$month); $i++) {
		if ($i == 12) {
			$text .= "<option value=\"$year-12-\">Dec $year</option>";
		}
		else {
			$mt = $m = $i%12;
			if ($m < 10) {
				$mt = "0$m";
			}
			$y = $year + floor($i/12);
			$text .= "<option value=\"$y-$mt-\">$months[$m] $y</option>";
		}
	}

	return $text;
}

function select_airport() {
	$text = '';
	foreach (array('VVI', 'LPB', 'SRE', 'CBB', 'RBQ') as $a)
		$text .= "<option value=\"$a\">$a</option>";
	return $text;
}
?>