<?php
$file = 'extras/users.txt';

// if(file_exists($file)){
//     echo readfile(($file));
// }else{
//     echo 'something wrong happened';
// }



if(file_exists($file)){
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
    //we opened the file, closed the file and we do what we want with the contents

}else{

    $handle = fopen($file , 'w');
    $contents = 'Brad' . PHP_EOL . 'Sara' .PHP_EOL. 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
    
}