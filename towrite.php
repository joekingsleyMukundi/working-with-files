<?php
$file = "example.txt";

if($handle = fopen($file,"w")){
    fwrite ($handle,"i love php");
    fclose($handle);
}else{
    echo "cont write";
}

