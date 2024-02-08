<?php

/**
 * @brief Function takes a list of objects, 
 * calls echo_object_paragraph to echo a number
 * of paragraphs
 * 
 * @param ...objects
 */
function echo_objects_from_list($objects) {
    foreach($objects as $object) {
        echo_object_paragraph($object);
    }    
}

/**
 * @brief Function takes a list of objects, 
 * calls a function also passed on each object.
 * 
 * @param ...objects
 * @param f - function to call on each object in ...objects list
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
 * @param ...objects
 */
function echo_object_paragraph($object) {
    echo sprintf("<p>%s</p>", $object->to_string());
}

/**
 * @brief Function takes a single object, 
 * formats a string with output of object->to_string()
 * echos the resulting string as a list of li elements.
 * 
 * @param object - Object to be echoed
 */
function echo_object_items($object) {
    echo sprintf("<li>%s</li>", $object->to_string());
}

?>
