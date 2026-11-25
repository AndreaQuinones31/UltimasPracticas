<?php
$filas = 3;
$columnas = 3;


$matrizA = array();
$matrizB = array();
$matrizC = array();

$valorA = 100;
$valorB = 500;

// 1. llenar las matrices y sumar
for ($i = 0; $i<$filas;$i++){
	for ($j = 0; $j < $columnas; $j++){
	    $matrizA = [$i][$j]=$valorA;
	    $matrizB = [$i][$j] =$valorB;
	    $matrizC[$i][$j] =$matrizA[$i][$j] +$matrizB[$i][$j];

	    $valorA =$valorA +10;
	    $valorB =$valorB +20;


	}
}

//2. Imprimir matriz A
echo "<h3> matriz A</h3>";
echo "["
for ($i=0, $i<$filas;$i++){
	echo "<tr>";
	for ($j =0; $j<$columnas;$j++){
	    echo $matrizA[$i][$j]." ";
	}
    echo "]<br>";
}


//3. Imprimir matriz B
echo "<h3> matriz B</h3>";

for ($i=0;$i<$filas;$i++){
	echo "[";
	for ($j=0; $j<$columnas;$j++){
	    echo  $matrizB[$i][$j] . " ";
	}
    echo "]<br>";
}


//4. Imprimir matriz C
echo "<h3>matriz C(suma)</h3";
for ($i=0;$i<$filas;$i++){
	echo "[";
	for ($j=0; $j<$columnas;$j++){
		echo $matrizC[$i][$j] . " ";
	}
    echo"]<br>";
}

?>