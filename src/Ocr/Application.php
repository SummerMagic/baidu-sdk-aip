<?php
/**
 * @Author: gan
 * @Description:
 * @File:  Application
 * @Version: 1.0.0
 * @Date: 2022/9/10 9:40 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Ocr;

use AIP\BaiduAIP\Auth\ServiceProvider as AuthServiceProvider;
use AIP\BaiduAIP\Kernel\ServiceContainer;

/**
 * Class ServiceProvider
 *
 * @package AIP\BaiduAIP\Ocr
 * @property Ocr $ocr
 */
class Application extends ServiceContainer
{
    public const Ocr = 'ocr';

    /**
     * @var string[]
     */
    protected array $providers = [
        AuthServiceProvider::class,
        ServiceProvider::class
    ];
}
