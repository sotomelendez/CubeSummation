<?php
	
$_fp = explode("\n",$_POST['entrada']);
$actualLine = 0;

// $stdout = fopen('php://stdout', 'w');
$output = "";

$line = $_fp[$actualLine];
$actualLine++;
$iterations = intval($line);
for($i = 0; $i < $iterations; $i++)
{
    $line = $_fp[$actualLine];
	$actualLine++;
    $parts = explode(" ",$line);
    $matrixSize = intval($parts[0]);
    //Inicializo la matriz
    $matrix = array(array(array_fill(0,$matrixSize,0)));
    for($a = 0; $a <= $matrixSize; $a++)
    {
        for($b = 0; $b <= $matrixSize; $b++)
        {
            for($c = 0; $c <= $matrixSize; $c++)
            {
                $matrix[$a][$b][$c] = 0;
            }
        }
    }
    //Ejecuto las operaciones
    $ops = intval($parts[1]);
    for($j = 0; $j < $ops; $j++)
    {
        $line = $_fp[$actualLine];
		$actualLine++;
        $operation = explode(" ",$line);
        $x1 = intval($operation[1]);
        $y1 = intval($operation[2]);
        $z1 = intval($operation[3]);
        if($operation[0] == "UPDATE")
        {
            $newValue = intval($operation[4]);
            $matrix[$x1][$y1][$z1] = intval($newValue);
        }
        else if($operation[0] == "QUERY")
        {
            $sum = 0;
            $x2 = intval($operation[4]);
            $y2 = intval($operation[5]);
            $z2 = intval($operation[6]);
            for($a = $x1; $a <= $x2; $a++)
            {
                for($b = $y1; $b <= $y2; $b++)
                {
                    for($c = $z1; $c <= $z2; $c++)
                    {
                        $sum = $sum + $matrix[$a][$b][$c];
                    }
                }
            }
            // fputs($stdout, strval($sum) . "\n");
			$output = $output . strval($sum) . "\n";
        }
    }
}

?>