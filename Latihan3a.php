<!DOCTYPE html>
<html lang="en">

<?php
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);

function ganti_style($text, $kelas) {
    return  "<span class= '$kelas'> $text </span>"; 
}
?>

<style>
    body{
        color: #1A0547;
        text-size-adjust: 28 px;
        font-size: larger;
        font-style: italic;
    }
</style>

</html>

