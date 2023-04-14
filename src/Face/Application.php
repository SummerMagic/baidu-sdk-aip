<?php
/**
 * @Author: gan
 * @Description:
 * @File:  Application
 * @Version: 1.0.0
 * @Date: 2022/9/10 9:40 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Face;

use AIP\BaiduAIP\Auth\ServiceProvider as AuthServiceProvider;
use AIP\BaiduAIP\Kernel\ServiceContainer;

/**
 * Class ServiceProvider
 *
 * @package AIP\BaiduAIP\Face
 * @property Face   $face
 * @property User   $user
 * @property Group  $group
 * @property Other  $other
 */
class Application extends ServiceContainer
{
    public const Face  = 'face';
    public const User  = 'user';
    public const Group = 'group';
    public const Other = 'other';

    /**
     * @var string[]
     */
    protected array $providers = [
        AuthServiceProvider::class,
        ServiceProvider::class
    ];
}
