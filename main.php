<?php
echo  caesar($argv[1], $argv[2]);
function caesar($str, $n)  {
    $ret = "";
    for($i = 0 , $l = strlen($str); $i < $l; ++$i) {
        $c = ord($str[$i]);
        if (97 <= $c && $c < 123) {
            $ret.= chr(($c + $n + 7) % 26 + 97 );
        } else if (65 <= $c && $c < 91) {
            $ret.= chr(($c + $n + 13) % 26 + 65);
        } else {
            $ret.= $str[$i];
        }
    }
    return $ret.PHP_EOL;
}
?>


php main.php "Your Txt file" 3