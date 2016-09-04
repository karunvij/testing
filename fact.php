<?php
/*$start = new DateTime('2016-07-20');
$end = new DateTime('2016-08-01');
$days = $start->diff($end, true)->days;

$sundays = intval($days / 7) + ($start->format('N') + $days % 6 >= 6);

echo $sundays;*/
/*$n=10;
$j=0; 
for($i=1;$i<=$n;$i++){
   echo str_repeat('&nbsp;', $n-$j);
   echo str_repeat('*', $i);
    echo "<br>";
    $j++;
}*/


?>
<?php
 $m=1; $n=5;
for($i=1; $i<=5; $i++) {
    for($j=$i; $j<=4; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($k=1; $k<=$i; $k++)  {
        echo "*";
    }
    for($c=$i; $c>1; $c--) {
        echo "*";
    }
    echo "<br>";
    
}
 
for($i=1; $i<=4; $i++) {
    for($j=$i; $j>=1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for($k=$n; $k>1; $k--) {
        echo "*";
    }
    for($c=$n-1; $c>1; $c--) {
        echo "*";
    }
    echo "<br>";
    $n--;
} ?>