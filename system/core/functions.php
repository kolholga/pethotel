<?php

function pr($arr){
    echo '<pre>' . print_r($arr, 1) . '</pre>';

}

// очистка строки
function clearStr($str) {
    return htmlspecialchars(strip_tags(trim($str)));
}
