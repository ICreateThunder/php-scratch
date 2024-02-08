<?php

/**
 * @brief Function to wrap vsprintf, and replace spaces with non-breaking space
 *
 * @param format - The format style/string
 * @param ...data - The data to be input into the string with formatting
 *
 * @returns Formatted string with spaces replaced with non-breaking spaces
 */
function str_format($format) {
    return (string) str_replace(" ", "&nbsp;", vsprintf($format, array_slice(func_get_args(), 1)));
}

?>
