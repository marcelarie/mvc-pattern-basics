<?php
function spacesConverter($string, $replacment)
{
    return preg_replace('/\s+/', $replacment, $string);
}
