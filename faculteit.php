<?php
//$getal = (readline)
function faculteit($getal)
{
    $uitkomst = 1;
    while($getal > 0)
    {
        $uitkomst *= $getal;
        $getal--;
    }
    return $uitkomst;
}

echo faculteit(readline());
?>
