<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UMS\Factory\Controller;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use UMS\Controller\IndexController;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ContainerInterface $container)
    {
        return new IndexController();
    }
}
