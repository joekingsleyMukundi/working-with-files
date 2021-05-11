<?php
$file = "example.txt";
if($handle = fopen($file,"r")){
    echo $content = fread($handle,filesize($file));
}else{
    echo"cant read";
}