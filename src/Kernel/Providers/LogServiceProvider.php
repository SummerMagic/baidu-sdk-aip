<?php
/**
 * @Author: gan
 * @Description:
 * @File:  LogServiceProvider
 * @Version: 1.0.0
 * @Date: 2022/9/10 9:44 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Kernel\Providers;

use AIP\BaiduAIP\Kernel\Log\FileLogDriver;
use AIP\BaiduAIP\Kernel\ServiceContainer;
use AIP\BaiduAIP\Kernel\ServiceProviders;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class LogServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        if (!isset($pimple[ServiceProviders::Logger])) {
            $pimple[ServiceProviders::Logger] = function (ServiceContainer $app) {
                return new FileLogDriver($app[ServiceProviders::Config]->get('log.tempDir') ?? sys_get_temp_dir());
            };
        }
    }
}
