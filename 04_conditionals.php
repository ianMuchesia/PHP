<?php


// $age = 17;
// if($age >= 108){
//     echo "You are too old";
// }
// else{
//     echo "You are young";
// }



$t = date("H");

// if($t < 12){
//     echo ' good morning';
// }elseif($t<17){
//     echo ' afternoon';
// }

// else{
//     echo ' Good Evening';
// }

$posts = [ 'First Post'];

if(!empty($posts)){
    echo $posts[0];
}else{
    echo 'No Posts';
}

echo !empty($posts) ? $posts[0] : 'No Posts';

$firstPost = !empty ($posts)? $posts[0] : 'No Posts';

echo $firstPost;




//switch statements


$FavColor = 'red';

switch ($FavColor){
    case 'red':
        echo 'Your Favorite color is red';
        break;
    case 'blue';
        echo 'Your Favorite color is blue';
        break;
    default:
        echo 'Your Favorite color is not red';
}