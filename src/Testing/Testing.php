<?php

namespace Testing;

use Skintrphoenix\PluginLoader\Plugin\PluginBase;

class Testing extends PluginBase{

    public function onLoad():void{
        echo "test";
    }
}