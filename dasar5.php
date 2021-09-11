<?php
// pengulangan for
for ($x = 0; $x < 5; $x++) {
    echo "Data : $x <br>";
}
// for bersarang 
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Ini perulangan ke ($i, $j)<br>";
    }
}

// pengulangan while
$x=0;
while ($x < 5) {
    echo "Data : $x <br>";
    $x++;
}

// pengulanga do while
$x=0;
do {
    echo "Data : $x <br>";
    $x++;
} while ($x < 5);
?>