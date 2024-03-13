<?php
$name = "Freda";
$colours = ['red','blue', 'green'];
$temperature = 36.5;

//if(condition){
//    /*do something else */
//}

if("Fred" ===$name){
    echo "<p>Hello Fred</p>";
}

//if(condition){
//    if(second condition){
//        /*do something else */
//    }
//    /*then do this */
//}else{
//    if(third condition){
//        /*do something else */
//    }
//    /*then do this*/
//}

if("Fred" === $name){
    echo "<p>Hello Fred</p>";
}else{
    echo "<p>Sorry, but you are not Fred</p>";
}



if("Freda" === $name) {
    if(array_search("blue", $colours) == true){
    echo "<p>Freda likes blue</p>";
    }
}else {
    if(array_search("pink", $colours) == true){
        echo "<p>{$name} likes pink</p>";
    }
}



//if(condition && second condition) {
//    /*do something else */
//    /*then do this */
//}else if(condition){
//        /*do something else */
//}else if(third condition){
//        /*do something else again */
//}

