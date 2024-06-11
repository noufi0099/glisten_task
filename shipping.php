<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $orderdate=$_POST["orderdate"];
    $ordertime=$_POST["ordertime"];
    $noshipping=[0, 6];
    $cutoff="11:00";
    $orderdatetime= DateTime::createFromFormat('Y-m-d H:i',$orderdate.' '.$ordertime);
    if ($orderdatetime->format('H:i')>$cutoff){
        $orderdatetime->modify('+1 day');
    }
    while(in_array($orderdatetime->format('w'), $noshipping)) {
        $orderdatetime->modify('+1 day');
    }
    echo "Shipping Date:".$orderdatetime->format('d-m-y');
}
?>
