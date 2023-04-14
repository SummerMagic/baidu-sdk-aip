<?php
/**
 * @Author: gan
 * @Description:
 * @File:  HttpClientServiceProvider
 * @Version: 1.0.0
 * @Date: 2022/9/10 10:31 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Kernel\Providers;

use AIP\BaiduAIP\Kernel\HttpClient\HttpClientManager;
use AIP\BaiduAIP\Kernel\HttpClient\SwooleClientDriver;
use AIP\BaiduAIP\Kernel\ServiceContainer;
use AIP\BaiduAIP\Kernel\ServiceProviders;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class HttpClientServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        if (!isset($pimple[ServiceProviders::HttpClientManager])) {
            $pimple[ServiceProviders::HttpClientManager] = function (ServiceContainer $app) {
                return new HttpClientManager(
                    $app[ServiceProviders::Config]->get('request.httpClientDriver') ?? SwooleClientDriver::class
                );
            };
        }
    }
}
