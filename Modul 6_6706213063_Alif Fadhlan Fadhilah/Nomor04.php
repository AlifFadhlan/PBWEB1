<!DOCTYPE html>
<html>
<body>

<?php
function rumusPrima($angka){
    if($angka == 1){
        return false;
    }
    if($angka == 2){
        return false;
    }

    $x = sqrt($angka);
    $x = floor($x);

    for($i=2; $i<= $x; ++$i){
        if($angka % $i == 0){
            break;
        }
    }

    if($x == $i-1){
        return true;
    } else {
        return false;
    }
}

function cekPrima($n,$m) {
    $total = 0;

    for($i = $n; $i <= $m; $i++){
        if(rumusPrima($i)){
            echo $i.', ';
            $total++;
        }
    }
    echo"<br>Jumlah bilangan prima dari $n - $m adalah ".$total."<br>";
}

cekPrima(0,100);
?>

</body>
</html>