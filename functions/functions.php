<?php
function strCut($string,$from,$to)
{
    $strnew = "";
    $arrStr = explode(" ", $string);
    $len = 0;
    for ($i=0;$i<count($arrStr);$i++)
    { 
        $len = $len + strlen($arrStr[$i]);
        $strnew = $strnew." ".$arrStr[$i]." ";
		if (($len>=$from) && ($len<=$to))
        {
        	$strnew = $strnew;
            echo $strnew;
            break;
        } 
    }
}
?>