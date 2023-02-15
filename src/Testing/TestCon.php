<?php

namespace Testing;

use Illuminate\Http\Request;
use Skintrphoenix\PluginLoader\Controller\Controller;

class TestCon extends Controller{

    public function controller(Request $request, array $args)
    {
        if(!isset($args[0])){

            return 'def';
        }else{
            switch($args[0]){
                case 'ok':
                    return 'ok';
                break;
                default:
                    return 'default';
                break;
            }
        }
    }
}