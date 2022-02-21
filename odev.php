<?php 
$gelen_sayi = $_REQUEST["sayi"];

function control($sayi)
{
    global $gelen_sayi;

    if(empty($gelen_sayi)){
        return "Lütfen bir değer giriniz";
    } 
    elseif (!is_numeric($gelen_sayi)) {
        return "Girdiğiniz değer bir sayi olmalıdır";
    }else{
        if($gelen_sayi % 3 == 0){
                return "Girdiğiniz sayı 3'e bölünebilir";
            } else { 
                $a = round($gelen_sayi/3, 0) * 3;
                return "Girdiğiniz sayi 3'e bölünemez.<br> Girebileceğiniz en yakın değer: "."<b>".$a."<b>";
            }
    }
}
echo control(4);
?>