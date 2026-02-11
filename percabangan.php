<?php
$jenis='Biasa Saja';
$lama=6;
if($jenis=='vip'){
$harga=200000;
}elseif($jenis=='Biasa Saja'){
$harga=150000;
}else{
$harga=400000;
}
$total=$harga*$lama;
if($lama > 5){
$diskon=0.1 * $total;
}else{
$diskon=0;
}
$bayar=$total-$diskon;
echo "jenis       :$jenis<br>";
echo "lama inap   :$lama<br>";
echo "Total       :Rp $total<br>";
echo "Diskon      :Rp $diskon<br>";
echo "Total Bayar :Rp $bayar";
?>