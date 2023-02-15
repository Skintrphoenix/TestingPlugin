<?php

namespace Testing;

use Skintrphoenix\PluginLoader\Plugin\PluginBase;

class Testing extends PluginBase{

    public function onLoad():void{
        $cmd = new TestCon('testing/{args1}', $this);
        $this->register_route($cmd);
    }
}