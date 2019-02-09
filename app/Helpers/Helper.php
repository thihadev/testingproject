<?php

if (!function_exists('classActivePath')) {
    function classActivePath($segment, $value)
    {
        if(!is_array($value)) {
            return Request::segment($segment) == $value ? ' menu-open' : '';
        }
        foreach ($value as $v) {
            if(Request::segment($segment) == $v) return ' menu-open';
        }
        return '';
    }
}

if (!function_exists('classActiveSegment')) {
    function classActiveSegment($segment, $value)
    {
        if(!is_array($value)) {
            return Request::segment($segment) == $value ? 'active' : '';
        }
        foreach ($value as $v) {
            if(Request::segment($segment) == $v) return 'active';
        }
        return '';
    }
}

if (! function_exists('active_segment')) {

    function active_segment($index, $path) 
    {
        return request()->segment($index) == $path ? 'active' : '';
    }
    
}

if (! function_exists('active_path')) {

    function active_path($path) 
    {
        //return $path;
        return request()->is($path) ? 'active' : '';
    }
    
}

if (! function_exists('avatar_path')) {

    function avatar_path($object) 
    {
        return is_null($object) ? "/img/no-user.jpeg" : $object->path;
    }
    
}