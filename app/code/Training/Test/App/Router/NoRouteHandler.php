<?php
declare(strict_types=1);

namespace Training\Test\App\Router;

use Magento\Framework\App\Router\NoRouteHandlerInterface;

class NoRouteHandler implements NoRouteHandlerInterface
{

    /**
     * Check and process no route request
     *
     * @param \Magento\Framework\App\RequestInterface $request
     * @return bool
     */
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $moduleName = 'cms';
        $controllerPath = 'index';
        $controllerName = 'index';

        $request->setModuleName($moduleName)->setControllerName($controllerPath)->setActionName($controllerName);

        return true;
    }
}
