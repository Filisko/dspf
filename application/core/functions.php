<?php

function config($val) {
    if (isset($GLOBALS['dspf'][$val])) {
        return $GLOBALS['dspf'][$val];
    } else {
        return FALSE;
    }
}

function error($header = 'Error', $message = 'Error encountered', $status = FALSE) {
    
    if ($status != FALSE) {
        http_response_code($status);
    }
    
    require_once APP . 'controllers/error.php';
    $error = new Error();
    call_user_func_array([$error, 'index'], ['header' => $header, 'message' => $message]);
}