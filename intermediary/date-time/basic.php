<?php 

echo "Empresa \u{A9} " .  date('Y-m-d H:i:s');

# UNIX TIMESTAMP
# é o total de segundos decorridos desde de 01/01/1970, que é a data que marca
# o inicio dos sistemas Unix
echo "\n" . time();
echo "\n" . microtime();

# DATETIME
echo "\nDATETIME\n\n";
$time = new DateTime();
echo $time->format('d-m-Y H:i:s');
echo PHP_EOL;

$time = new DateTime('03-05-1998');
$time->setdate(2001,10,3);
$time->setTime(23,12);
echo $time->format('d-m-Y H:i:s');
echo PHP_EOL;


/*
    DateInterval
    P - Período de dias
    PT - Peíodo de tempo
*/
echo PHP_EOL;
$now  = new DateTime();
$now->add(new DateInterval('P365D'));
// $now->add(new DateInterval('P12W'));
// $now->add(new DateInterval('PT72H'));
// $now->add(new DateInterval('PT72H30M33S'));
echo $now->format('d-m-Y H:i:s');
echo PHP_EOL;
$now->sub(new DateInterval('P365D'));
echo $now->format('d-m-Y H:i:s');


// $date = DateTime::createFromFormat('d-m-Y','03-05-1998');

# DATETIME - intervalo entre duas datas
echo "\n\n";
$data_nascimento = new DateTime('03-05-1998');
$agora = new DateTime();

$intervalo = $data_nascimento->diff($agora);
echo $intervalo->y;

# ** Explore função diff  **
# ** Explore ->modify ** 

echo "\n Calculando Idade\n";
echo calcularIdade(new DateTime('03-11-1998'));

function calcularIdade($dateNascimento)
{
    $agora =  new DateTime();
    $nascimentoMes = (int)$dateNascimento->format('m');
    $nascimentoAno = (int)$dateNascimento->format('Y');

    $agoraMes = (int)$agora->format('m');
    $agoraAno = (int)$agora->format('Y');
    
    if($nascimentoAno == $agoraAno) {
        $anos = 1;
    } else  {
        $anos = $agoraAno - $nascimentoAno;
    }

    if($agoraMes < $nascimentoMes  || (($nascimentoMes == $agoraMes) && ($dateNascimento->format('d') < $agora->format('d')))) {
        $anos--;
    }
        
    return $anos != 1? "$anos anos" : "1 ano";
}