<?php

namespace Testing;

use Skintrphoenix\PluginLoader\Plugin\PluginBase;

class Testing extends PluginBase{

    private static $instance;

    public function onLoad():void{
        self::$instance = $this;
        $cmd = new TestCon();
        $this->register_route($cmd);
    }

    public static function getInstance() : Testing{
        return self::$instance;
    }
}