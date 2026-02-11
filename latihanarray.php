<?php
$mahasiswa = [
    ["Nim" =>"2023001", "Nama"=>"Andi", "Nilai" => 85],
    ["Nim" =>"2023002", "Nama"=>"Budi", "Nilai" => 72],
    ["Nim" =>"2023003", "Nama"=>"citra","Nilai" => 90],
    ["Nim" =>"2023004", "Nama"=>"Dewi", "Nilai" => 60],
];


?>
<table width="70%" border="1">
    <tr>
        <td>No</td>
        <td>Nim</td>
        <td>Nama</td>
        <td>Nilai</td>
        <td>Keterangan</td>
    </tr>

    <?php
    foreach ($mahasiswa as $key => $value) {
        $no = $key+1;
        if ($value["Nilai"] >= 80) {
            $keterangan = "lulus";
        } 
        else {
            $keterangan = "tidak lulus";
        }
    
    echo "
    <tr>
        <td>$no</td>
        <td>$value[Nim]</td> 
        <td>$value[Nama]</td>
        <td>$value[Nilai]</td>
        <td>$keterangan</td>         
    </tr>
    ";
}
?>
</table>
<br>