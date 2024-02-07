<?php

function str_format($format) {
    return (string) str_replace(" ", "&nbsp;", vsprintf($format, array_slice(func_get_args(), 1)));
}

?>