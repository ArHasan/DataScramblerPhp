<?php 

$key = "abcdefghijklmnopqrstwxyz1234567890";
$divide = str_split($key);
shuffle($divide);
echo "<pre>";
print_r($divide);
echo "</pre>";
$key = join(' ',$divide);
var_dump($key);

function scrambleData($originalData,$key){
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length  = strlen($originalData);
    for($i=0; $i<$length; $i++){
        $currentChar = $originalData[$i];
        $position = strpos($originalKey,$currentChar);
        if($position !== false){
            $data .= $key[$position];
        }else{
            $data .= $currentChar;
        }
    }
    echo $data;
}
scrambleData($originalKey,$key);
?>