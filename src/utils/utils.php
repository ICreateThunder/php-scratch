<?php

/**
 * @brief Function takes a list of objects, 
 * calls to_string method on each element
 * 
 * @params ...objects
 */
function echo_objects_from_list($objects) {
    foreach($objects as $object) {
        echo_object_paragraph($object);
    }    
}

/**
 * @brief Function takes a list of objects, 
 * calls to_string method on each element
 * 
 * @params ...objects
 */
function echo_objects_from_list_using_function($objects, $f) {
    foreach($objects as $object) {
        $f($object);
    }    
}

/**
 * @brief Function takes a single object, 
 * formats a string with output of object->to_string(),
 * echos the resulting string as a number of p elements
 * 
 * @params ...objects
 */
function echo_object_paragraph($object) {
    echo sprintf("<p>%s</p>", $object->to_string());
}

/**
 * @brief Function takes a single object, 
 * formats a string with output of object->to_string()
 * echos the resulting string as a list of li elements.
 * 
 * @params object - Object to be echoed
 */
function echo_object_items($object) {
    echo sprintf("<li>%s</li>", $object->to_string());
}

?>