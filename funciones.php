<?php
//función para poner el mes con letra
function mes ($date)
{
    $mes = date("n",$date);
    $mesNom = array(1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',
		    5=>'Mayo',6=>'Junio',7=>'Julio',8=>'Agosto',
		    9=>'Septiembre',10=>'Octubre',11=>'Noviembre',
		    12=>'Diciembre');
    return $mesNom[$mes];
}

function fechaTxt ($date)
{
    $arrayF = explode('-',$date);
    $dia = $arrayF[2];
    $mes = mesTxt($arrayF[1]);
    $anio = $arrayF[0];	
    $fecha = $dia.' de '.$mes.' de '.$anio;
    return $fecha;
}

function mesTxt($mes){
	$mesT = "";
	switch($mes)
	{
	    case 1: $mesT='Enero'; break;
	    case 2: $mesT='Febrero'; break;
	    case 3: $mesT='Marzo'; break;
	    case 4: $mesT='Abril'; break;
	    case 5: $mesT='Mayo'; break;
	    case 6: $mesT='Junio'; break;
	    case 7: $mesT='Julio'; break;
	    case 8: $mesT='Agosto'; break;
	    case 9: $mesT='Septiembre'; break;
	    case 10: $mesT='Octubre'; break;
	    case 11: $mesT='Noviembre'; break;
	    case 12: $mesT='Diciembre'; break;
	}	
	return $mesT;
}
?>