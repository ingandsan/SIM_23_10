variable: {{$variable}}
<table>
<tr>
<td>	
<?php
include_once('inegifacil/INEGI_library.php');
$inegi = new INEGI_library();

switch ($variable) {
case 4:
?>
<caption  align='center'>Producto Interno Bruto (PIB)</caption>
<caption align='center'>Millones de pesos a precios corrientes</caption>
<thead align='center' border='2px'>
<tr width:'100%' align='center' border='2px'>
<th scope='col' width:'33.3%' align='center' border='2px'>Año</th>
<th scope='col' width:'33.3%' align='center' border='2px'>Nacional</th>
<th scope='col' width:'33.3%' align='center' border='2px'>Estado de<br>Puebla</th>
</tr>
</thead>
<tbody align='center'>
	<?php
		$indice = 388100; //
		$lugar = 00;
		$indice1 = 388121; //
		$lugar1 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 

		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		echo "</tbody>";
break;
case 7:
?>
<caption  align='center'>Producto Interno Bruto (PIB)</caption>
<caption  align='center'>Millones de pesos a precios constantes de 2008</caption>";
<thead  align='center' border='2px'>
<tr width:'100%' align='center' border='2px'>
<th scope='col' width:'33.3%' align='center' border='2px'>Año</th>
<th scope='col' width:'33.3%' align='center' border='2px'>Nacional</th>
<th scope='col' width:'33.3%' align='center' border='2px'>Estado de<br>Puebla</th>
</tr>
</thead>
<tbody align='center'>
	<?php
		$indice = 392984; //
		$lugar = 00;
		$indice1 = 393761; //
		$lugar1 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		echo "</tbody>";		
	break;
	case 8:
	?>
		<caption  align='center'>Producto Interno Bruto (PIB)</caption>
		<caption  align='center'>Variación % real anual</caption>
		<thead  align='center' border='2px'>
           <tr align='center' border='2px'>
            <th scope='col' width:'33.3%' align='center' border='2px'>Año</th>
             <th scope='col' width:'33.3%' align='center' border='2px'>Nacional</th>
             <th scope='col' width:'33.3%' align='center' border='2px'>Estado de<br>Puebla</th>
           </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice = 386879; //
		$lugar = 00;
		$indice1 = 386900; //
		$lugar1 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		echo "</tbody>";
break;

case 12:
		
		
	?>	
	
		<caption width:'100%' align='center'>PIB por Actividad Económica Estado de Puebla</caption>
		<caption width:'100%' align='center'>(Millones de pesos a precios de 2008)</caption>
		
		<thead width:'100%' align='center' border='2px'>
           <tr width:'100%' align='center' border='2px'>
             <th scope='col' width:'20%' align='center' border='2px'>Periodo</th>
             <th scope='col' width:'20' align='center' border='2px'>Total de la<br>actividad<br>económica</th>
             <th scope='col' width:'20%' align='center' border='2px'>Actividades<br>primarias</th>
			 <th scope='col' width:'20' align='center' border='2px'>Actividades<br>secundarias</th>
             <th scope='col' width:'20%' align='center' border='2px'>Actividades<br>tercearias</th>
          </tr>
        </thead>


		<tbody align='center'>
		<?php
		$indice = 383237; //
		$lugar = 21;
		$indice1 = 383270; //
		$lugar1 = 21;
		$indice2 = 383336; //
		$lugar2 = 21;
		$indice3 = 383963; //
		$lugar3 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$array6 = json_encode($response2 ['indices'][$i]['TIME_PERIOD']);
		$array7 = json_encode($response2 ['indices'][$i]['OBS_VALUE']);
		$array8 = json_encode($response3 ['indices'][$i]['TIME_PERIOD']);
		$array9 = json_encode($response3 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		$texto22=str_replace('"','',$array6); 
		$texto22=str_replace('\/','',$texto22); 
		$texto23=str_replace('"','',$array7);
		$texto33=str_replace('"','',$array8); 
		$texto33=str_replace('\/','',$texto33); 
		$texto34=str_replace('"','',$array9);
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto22){
		echo '<td>'.number_format($texto23, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto33){
		echo '<td>'.number_format($texto34, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		echo "</tbody>";
break;


case 14:
?>
			
		<caption align='center'>PIB Actividades Secundarias Nacional</caption>
		<caption align='center'>(Millones de pesos a precios de 2008)</caption>
		<thead align='center' border='2px'>
           <tr align='center' border='2px'>
             <th scope='col' width:'16%' align='center' border='2px'>Periodo</th>
             <th scope='col' width:'16%' align='center' border='2px'>Total Actividades<br>Secundarias</th>
             <th scope='col' width:'16%' align='center' border='2px'>Mineria</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación,<br>transmisión y<br>distribución de <br>energía eléctrica,<br>suministro de<br>agua y de gas por<br>ductos al<br>consumidor final</th>
			 <th scope='col' width:'16%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'16%' align='center' border='2px'>Industrias<br>Manufactureras</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice = 383315; //
		$lugar = 00;
		$indice1 = 383348; //
		$lugar1 = 00;
		$indice2 = 383447; //
		$lugar2 = 00;
		$indice3 = 383480; //
		$lugar3 = 00;
		$indice4 = 383513; //
		$lugar4 = 00;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$array6 = json_encode($response2 ['indices'][$i]['TIME_PERIOD']);
		$array7 = json_encode($response2 ['indices'][$i]['OBS_VALUE']);
		$array8 = json_encode($response3 ['indices'][$i]['TIME_PERIOD']);
		$array9 = json_encode($response3 ['indices'][$i]['OBS_VALUE']);
		$array10 = json_encode($response4 ['indices'][$i]['TIME_PERIOD']);
		$array11 = json_encode($response4 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		$texto22=str_replace('"','',$array6); 
		$texto22=str_replace('\/','',$texto22); 
		$texto23=str_replace('"','',$array7);
		$texto33=str_replace('"','',$array8); 
		$texto33=str_replace('\/','',$texto33); 
		$texto34=str_replace('"','',$array9);
		$texto44=str_replace('"','',$array10); 
		$texto44=str_replace('\/','',$texto44); 
		$texto45=str_replace('"','',$array11);
		
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto22){
		echo '<td>'.number_format($texto23, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto33){
		echo '<td>'.number_format($texto34, 2, '.', ' ') .'</td>';
		};
		if ( $texto==$texto44){
		echo '<td>'.number_format($texto45, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		
		
		echo "</tbody>";
break;

case 15:
	?>		
		<caption align='right'><button align='right'><a href='impre.php?id=".$variable."' target='_blank'>Exportar</a></button><button align='right' onclick='mos()'>Definición</button><button align='right' onclick='mostrardiv()'>Metadato</button></caption>
		
		<caption width:'100%' align='center'>(Millones de pesos a precios de 2008)</caption>
		
		
		<caption width:'100%' align='center'>PIB Actividades Secundarias Estado de Puebla</caption>
		
		
		<thead width:'100%' align='center' border='2px'>
         <tr width:'100%' align='center' border='2px'>
            <th scope='col' width:'16%' align='center' border='2px'>Periodo</th>
             <th scope='col' width:'16%' align='center' border='2px'>Total Actividades<br>Secundarias</th>
             <th scope='col' width:'16%' align='center' border='2px'>Mineria</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación,<br>transmisión y<br>distribución de <br>energía eléctrica,<br>suministro de<br>agua y de gas por<br>ductos al<br>consumidor final</th>
			 <th scope='col' width:'16%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'16%' align='center' border='2px'>Industrias<br>Manufactureras</th>
		   </tr>
        </thead>

		<tbody align='center'>
		<?php
		$indice = 383336; //
		$lugar = 21;
		$indice1 = 383369; //
		$lugar1 = 21;
		$indice2 = 383468; //
		$lugar2 = 21;
		$indice3 = 383501; //
		$lugar3 = 21;
		$indice4 = 383534; //
		$lugar4 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$array6 = json_encode($response2 ['indices'][$i]['TIME_PERIOD']);
		$array7 = json_encode($response2 ['indices'][$i]['OBS_VALUE']);
		$array8 = json_encode($response3 ['indices'][$i]['TIME_PERIOD']);
		$array9 = json_encode($response3 ['indices'][$i]['OBS_VALUE']);
		$array10 = json_encode($response4 ['indices'][$i]['TIME_PERIOD']);
		$array11 = json_encode($response4 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		$texto22=str_replace('"','',$array6); 
		$texto22=str_replace('\/','',$texto22); 
		$texto23=str_replace('"','',$array7);
		$texto33=str_replace('"','',$array8); 
		$texto33=str_replace('\/','',$texto33); 
		$texto34=str_replace('"','',$array9);
		$texto44=str_replace('"','',$array10); 
		$texto44=str_replace('\/','',$texto44); 
		$texto45=str_replace('"','',$array11);
		
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto=$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto22){
		echo '<td>'.number_format($texto23, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto33){
		echo '<td>'.number_format($texto34, 2, '.', ' ') .'</td>';
		};
		if ( $texto==$texto44){
		echo '<td>'.number_format($texto45, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		
		
		echo "</tbody>";

		
		break;

case 17:
	
?>
		
		<caption  align='center'>PIB Industrias Manufactureras Nacional</caption>
		<caption width:'100%' align='center'>(Millones de pesos a precios de 2008)</caption>
		
	
		
		
		
		<thead  align='center' border='2px'>
          <tr  align='center' border='2px'>
             <th scope='col' align='center' border='2px'>Periodo</th>
             <th scope='col' align='center' border='2px'>Industrias Manufactureras</th>
             <th scope='col' align='center' border='2px'>Industria alimentaria</th>
			 <th scope='col' align='center' border='2px'>Industria de las<br>bebidas y del tabaco</th>
			 <th scope='col' align='center' border='2px'>Fabricación de insumos textiles y acabado de textiles; Fabricación de productos textiles, excepto prendas de vestir</th>
			 <th scope='col' align='center' border='2px'>Fabricación de prendas de vestir; Curtido y acabado de cuero y piel,  y fabricación de productosde cuero, piel y materiales sucedáneos</th>
			 <th scope='col' align='center' border='2px'>Industria de la madera</th>
			 <th scope='col' align='center' border='2px'>Industrias del papel; Impresión e industrias conexas</th>
			 <th scope='col' align='center' border='2px'>Fabricación de productos derivados del petróleo y carbón; Industria química; Industria del plástico y del hule</th>
             <th scope='col' align='center' border='2px'>Fabricación de productos a base de minerales no metálicos</th>
             <th scope='col' align='center' border='2px'>Industrias metálicas básicas; Fabricación de productos metálicos</th>
			 <th scope='col' align='center' border='2px'>Fabricación de maquinaria y equipo; Fabricación de equipo de computación, comunicación, medición y de otros equipos, componentes y accesorios electrónicos electrónicos; Fabricación de accesorios, aparatos eléctricos y equipo de generación de energía eléctrica</th>
			 <th scope='col' align='center' border='2px'>Fabricación de muebles, colchones y persianas</th>
			 <th scope='col' align='center' border='2px'>Otras industrias manufactureras</th>
		  </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =383513; //
		$lugar = 00;
		$indice1 =383546; //
		$lugar1 = 00;
		$indice2 =383579; //
		$lugar2 = 00;
		$indice3 =383612; //
		$lugar3 = 00;
		$indice4 =383645; //
		$lugar4 = 00;
		$indice5 =383678; //
		$lugar5 = 00;
		$indice6 =383711; //
		$lugar6 = 00;
		$indice7 =383744; //
		$lugar7 = 00;
		$indice8 =383777; //
		$lugar8 = 00;
		$indice9 =383810; //
		$lugar9 = 00;
		$indice10 =383843; //
		$lugar10 = 00;
		$indice11 =383876; //
		$lugar11 = 00;
		$indice12 =383909; //
		$lugar12 = 00;
		

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice7, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		$response9 = $inegi->index($indice9, $lugar9);
		$response10 = $inegi->index($indice10, $lugar10);
		$response11 = $inegi->index($indice11, $lugar11);
		$response12 = $inegi->index($indice12, $lugar12);
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		for($i10=0;$i10<count($response9 ["indices"]);$i10++){
		$array19 = json_encode($response9 ['indices'][$i10]['TIME_PERIOD']);
		$array20 = json_encode($response9 ['indices'][$i10]['OBS_VALUE']);
		if ($array==$array19){
		$texto20=str_replace('"','',$array20); 
		echo '<td>'.number_format($texto20, 2, '.', ' ') .'</td>';
		};		
		}
		for($i11=0;$i11<count($response10 ["indices"]);$i11++){
		$array21 = json_encode($response10 ['indices'][$i11]['TIME_PERIOD']);
		$array22 = json_encode($response10 ['indices'][$i11]['OBS_VALUE']);
		if ($array==$array21){
		$texto22=str_replace('"','',$array22); 
		echo '<td>'.number_format($texto22, 2, '.', ' ') .'</td>';
		};		
		}
		for($i12=0;$i12<count($response11 ["indices"]);$i12++){
		$array23 = json_encode($response11 ['indices'][$i12]['TIME_PERIOD']);
		$array24 = json_encode($response11 ['indices'][$i12]['OBS_VALUE']);
		if ($array==$array23){
		$texto24=str_replace('"','',$array24); 
		echo '<td>'.number_format($texto24, 2, '.', ' ') .'</td>';
		};		
		}
		for($i13=0;$i13<count($response12 ["indices"]);$i13++){
		$array25 = json_encode($response12 ['indices'][$i13]['TIME_PERIOD']);
		$array26 = json_encode($response12 ['indices'][$i13]['OBS_VALUE']);
		if ($array==$array25){
		$texto26=str_replace('"','',$array26); 
		echo '<td>'.number_format($texto26, 2, '.', ' ') .'</td>';
		};		
		};	
		
		echo '</tr>';
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;
		$i4++;
		$i5++;
		$i6++;
		$i7++;	
		$i8++;
		$i9++;
		$i10++;	
		$i11++;
		$i12++;
		$i13++;
		echo "</tbody>";
	break;

	case 18:
		?>

		<caption  align='center'>PIB Industrias Manufactureras Estado de Puebla</caption>
		<caption  align='center'>(Millones de pesos a precios de 2008)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
            <th scope='col' align='center' border='2px'>Periodo</th>
             <th scope='col' align='center' border='2px'>Industrias Manufactureras</th>
             <th scope='col' align='center' border='2px'>Industria alimentaria</th>
			 <th scope='col' align='center' border='2px'>Industria de las bebidas y del tabaco</th>
			 <th scope='col' align='center' border='2px'>Fabricación de insumos textiles y acabado de textiles; Fabricación de productos textiles, excepto prendas de vestir</th>
			 <th scope='col' align='center' border='2px'>Fabricación de prendas de vestir; Curtido y acabado de cuero y piel,  y fabricación de productosde cuero, piel y materiales sucedáneos</th>
			 <th scope='col' align='center' border='2px'>Industria de la madera</th>
			 <th scope='col' align='center' border='2px'>Industrias del papel; Impresión e industrias conexas</th>
			 <th scope='col' align='center' border='2px'>Fabricación de productos derivados del petróleo y carbón; Industria química; Industria del plástico y del hule</th>
             <th scope='col' align='center' border='2px'>Fabricación de productos a base de minerales no metálicos</th>
             <th scope='col' align='center' border='2px'>Industrias metálicas básicas; Fabricación de productos metálicos</th>
			 <th scope='col' align='center' border='2px'>Fabricación de maquinaria y equipo; Fabricación de equipo de computación, comunicación, medición y de otros equipos, componentes y accesorios electrónicos electrónicos; Fabricación de accesorios, aparatos eléctricos y equipo de generación de energía eléctrica</th>
			 <th scope='col' align='center' border='2px'>Fabricación de muebles, colchones y persianas</th>
			 <th scope='col' align='center' border='2px'>Otras industrias manufactureras</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =383534; //
		$lugar = 00;
		$indice1 =383567; //
		$lugar1 = 00;
		$indice2 =383600; //
		$lugar2 = 00;
		$indice3 =383633; //
		$lugar3 = 00;
		$indice4 =383666; //
		$lugar4 = 00;
		$indice5 =383699; //
		$lugar5 = 00;
		$indice6 =383732; //
		$lugar6 = 00;
		$indice7 =383765; //
		$lugar7 = 00;
		$indice8 =383798; //
		$lugar8 = 00;
		$indice9 =383831; //
		$lugar9 = 00;
		$indice10 =383864; //
		$lugar10 = 00;
		$indice11 =383897; //
		$lugar11 = 00;
		$indice12 =383930; //
		$lugar12 = 00;
		

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice7, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		$response9 = $inegi->index($indice9, $lugar9);
		$response10 = $inegi->index($indice10, $lugar10);
		$response11 = $inegi->index($indice11, $lugar11);
		$response12 = $inegi->index($indice12, $lugar12);
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		for($i10=0;$i10<count($response9 ["indices"]);$i10++){
		$array19 = json_encode($response9 ['indices'][$i10]['TIME_PERIOD']);
		$array20 = json_encode($response9 ['indices'][$i10]['OBS_VALUE']);
		if ($array==$array19){
		$texto20=str_replace('"','',$array20); 
		echo '<td>'.number_format($texto20, 2, '.', ' ') .'</td>';
		};		
		}
		for($i11=0;$i11<count($response10 ["indices"]);$i11++){
		$array21 = json_encode($response10 ['indices'][$i11]['TIME_PERIOD']);
		$array22 = json_encode($response10 ['indices'][$i11]['OBS_VALUE']);
		if ($array==$array21){
		$texto22=str_replace('"','',$array22); 
		echo '<td>'.number_format($texto22, 2, '.', ' ') .'</td>';
		};		
		}
		for($i12=0;$i12<count($response11 ["indices"]);$i12++){
		$array23 = json_encode($response11 ['indices'][$i12]['TIME_PERIOD']);
		$array24 = json_encode($response11 ['indices'][$i12]['OBS_VALUE']);
		if ($array==$array23){
		$texto24=str_replace('"','',$array24); 
		echo '<td>'.number_format($texto24, 2, '.', ' ') .'</td>';
		};		
		}
	
	
	
	
		for($i13=0;$i13<count($response12 ["indices"]);$i13++){
		$array25 = json_encode($response12 ['indices'][$i13]['TIME_PERIOD']);
		$array26 = json_encode($response12 ['indices'][$i13]['OBS_VALUE']);
		if ($array==$array25){
		$texto26=str_replace('"','',$array26); 
		echo '<td>'.number_format($texto26, 2, '.', ' ') .'</td>';
		};		
		};	
		
		echo '</tr>';
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;
		$i4++;
		$i5++;
		$i6++;
		$i7++;	
		$i8++;
		$i9++;
		$i10++;	
		$i11++;
		$i12++;
		$i13++;
		echo "</tbody>";
		break;



















}
?>
</td>
</tr>
</table>