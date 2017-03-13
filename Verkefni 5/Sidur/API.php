<?php

include "Incl.php";

$banki = file_get_contents("http://apis.is/currency/arion");
$results = json_decode($banki, true);
$skammstof = array();
$agildi = array();
$bgildi = array();
$br = array();

foreach($results as $r)
{
    foreach ($r as $n) {
        array_push($skammstof,$n['skammstof']) ;
        array_push($agildi,$n['agildi']) ;
        array_push($bgildi,$n['bgildi']) ;
        array_push($br, $n['skiptapenge']);
    }
}
?>

<!-- Taflan sem sýnir gildin -->
<table>
    <tr>
        <th>Gjaldmiðill</th>
        <th>Kaup</th>
        <th>Sala</th>
        <th>Br.</th>
    </tr>

    <?php
    for ($i=0; $i < count($skammstof) ; $i++) {
        echo "<tr>".
            "<td>".$skammstof[$i]."</td>".
            "<td>".$bgildi[$i]."</td>".
            "<td>".$agildi[$i]."</td>".
            "<td>".$br[$i]."</td>".
            "</tr>";
    }
    ?>

</table>

