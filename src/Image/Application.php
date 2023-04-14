<?php
/**
 * @Author: gan
 * @Description:
 * @File:  Application
 * @Version: 1.0.0
 * @Date: 2022/9/13 4:56 下午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Image;

use AIP\BaiduAIP\Auth\ServiceProvider as AuthServiceProvider;
use AIP\BaiduAIP\Kernel\ServiceContainer;

/**
 * Class ServiceProvider
 *
 * @package AIP\BaiduAIP\Image
 * @property Censor   $censor
 * @property Classify $classify
 * @property Process  $process
 */
class Application extends ServiceContainer
{
    public const Censor   = 'censor';
    public const Classify = 'classify';
    public const Process  = 'process';

    /**
     * @var string[]
     */
    protected array $providers = [
        AuthServiceProvider::class,
        ServiceProvider::class
    ];
}
