<?php
/**
 * @Author: gan
 * @Description:
 * @File:  ConfigServiceProvider
 * @Version: 1.0.0
 * @Date: 2022/9/10 9:43 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Kernel\Providers;

use AIP\BaiduAIP\Kernel\Config;
use AIP\BaiduAIP\Kernel\ServiceContainer;
use AIP\BaiduAIP\Kernel\ServiceProviders;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ConfigServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        if (!isset($pimple[ServiceProviders::Config])) {
            $pimple[ServiceProviders::Config] = function (ServiceContainer $app) {
                return new Config($app->getConfig());
            };
        }
    }
}
