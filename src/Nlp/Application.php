<?php
/**
 * @Author: gan
 * @Description:
 * @File:  Application
 * @Version: 1.0.0
 * @Date: 2022/9/10 9:40 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Nlp;

use AIP\BaiduAIP\Auth\ServiceProvider as AuthServiceProvider;
use AIP\BaiduAIP\Kernel\ServiceContainer;

/**
 * Class ServiceProvider
 *
 * @package AIP\BaiduAIP\Nlp
 * @property Nlp $nlp
 */
class Application extends ServiceContainer
{
    public const Nlp = 'nlp';

    /**
     * @var string[]
     */
    protected array $providers = [
        AuthServiceProvider::class,
        ServiceProvider::class
    ];
}
