<?php  

	
	//$data = new DateTime();

/*
	var_dump($data);
	echo $data->format('d-m-y') . PHP_EOL; //02-02-22
	echo $data->format('d-m-Y') . PHP_EOL; //02-02-2022
	echo $data->format('d-m-Y H:i:s') . PHP_EOL; //02-02-2022 12:31:42
/*
//---------------------------------------------------------------------
/*Date interval Parametros
->  P representação de período: vem antes de dia, mês, ano e semana
Y   anos
M   meses
D   dias
W   semanas
-> T  representação de tempo: vem antes de hora, minuto e segundo
H   horas
M   minutos
S   segundos
*/
/*
$data = new DateTime();

$intervalo = new DateInterval('PT5M'); // adiciona um período de 5 minutos
$data->add($intervalo);

var_dump($data);
*/

$data = new DateTime();

$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); 
// adiciona um período de 5 anos 10 meses 5 dias 10 horas 50 minutos e 10 segundos
$data->add($intervalo); // adiciona o intervalo de tempo pré-definido na variável intervalo (soma)
$data->sub($intervalo); // subtrai o intervalo de tempo pré-definido na variável intervalo







?>