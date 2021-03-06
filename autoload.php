<?php
/**
 * Created by PhpStorm.
 * User: fatihcapak7@gmail.com
 * Date: 20/04/15
 * Time: 11:54
 */

function __autoload($className)
{
    $class = explode('_', $className);

    if ($class) {
        $requireUrl = '/';

        for ($i=0; $i<count($class)-1; $i++) {
            $requireUrl .= $class[$i].'/';
        }
    }

    if ($requireUrl) {
        $requireUrl .= $class[count($class)-1].'.php';

        if (file_exists(__DIR__. $requireUrl)){
            require_once __DIR__. $requireUrl;
        } else {
            echo __DIR__. $requireUrl . ' did not include.';
            return;
        }
    }
}
