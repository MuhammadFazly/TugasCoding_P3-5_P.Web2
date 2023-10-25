<?php
$jawabanIsset = "<br><br>";
$jawabanEmpty = "<br><br>";

function soal($style){
    $text = "pengertian dari Insset dan Empty <br>";

    if (Isset($style)){
        $jawabanIsset = applyCSSStyle("Isset adalah........<br>", $style);
    } else {
        $jawabanIsset = applyCSSStyle("Isset adalah........", $style);
    }


    if (empty($style)){
        $jawabanEmpty = applyCSSStyle("Empty adalah........<br>", $style);
    } else {
        $jawabanEmpty = applyCSSStyle("Empty adalah........", $style);
    }
    echo $text, $jawabanIsset, $jawabanEmpty;
    }

function applyCSSStyle($text, $cssClass) {
    //Menambahkan kelas CSS ke teks
    $styledText = '<span class=."'. $cssClass. '">'. $text . '</span>';
    return $styledText;

}

//Contoh penggunaan fungsi soal dengan kelas CSS "my-custom-css-class"
soal("my-custom-css-class");
    

?>