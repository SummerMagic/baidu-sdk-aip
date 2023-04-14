<?php
/**
 * @Author: gan
 * @Description:
 * @File:  ServiceProvider
 * @Version: 1.0.0
 * @Date: 2022/9/10 11:21 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Auth;

use AIP\BaiduAIP\Kernel\ServiceContainer;
use AIP\BaiduAIP\Kernel\ServiceProviders;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        if (!isset($app[ServiceProviders::AccessToken])) {
            $app[ServiceProviders::AccessToken] = function (ServiceContainer $app) {
                return new AccessToken($app);
            };
        }
    }
}
