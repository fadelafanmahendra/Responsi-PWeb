<?php
    header("Location: tq.html");
    
    $nama = $_POST['nama'];
    $nowa = $_POST['nowa'];
    $rs = $_POST['rs'];
    $tgl = $_POST['tgl'];
    $time = $_POST['time'];

    $fp = fopen("order.txt", "a+");
    fputs($fp, "$nama|0$nowa|$rs|$tgl|$time\n");
    fclose($fp);
    
    die();
?>