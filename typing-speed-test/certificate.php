<?php
$wpm=$_POST['wpm'];
$cpm=$_POST['cpm'];
$errors=$_POST['errors'];
$accura=$_POST['acurr'];
$accur=number_format($accura,1)."";

header('content-type:image/jpeg');
$font=realpath("fonts/BRUSHSCI.ttf");
$font1=realpath("fonts/micross.ttf");
$image=imagecreatefromjpeg("certificate.jpg");
$color=imagecolorallocate($image, 108, 92, 231);
$color1=imagecolorallocate($image, 19, 21, 22);
$date=date("d F,Y");
$name=$_POST['name'];
$output=$name.".jpg";
$result="Result:-  \nTotal Time       : 5 min.\r\nwords/min        : ".$wpm."\ncharacters/min : ".$cpm."\nErrors                : "
.$errors."\nAccuracy          : ".$accur.'%';

imagettftext($image, 200, 0, 250, 1400, $color, $font,ucwords($name));
imagettftext($image, 50, 0, 300, 1900, $color1, $font1,$date);
imagettftext($image, 50, 0, 2500, 1900, $color1, $font1,$result);
imagejpeg($image,"certificates/".$output);
// header('Content-Description:file Transfer');
// header('Content-Disposition:attachment;filename:"'.basename($output). '"');

// imagedestroy($image);
$new="certificates/".$output;

require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image($new,0,0,210,150);
$pdf->Output();
unlink($new);



?>
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });

    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>
