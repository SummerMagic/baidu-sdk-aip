<?php
/**
 * @Author: gan
 * @Description:
 * @File:  BaseClient
 * @Version: 1.0.0
 * @Date: 2022/9/10 10:20 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Image;

use AIP\BaiduAIP\Kernel\Client;

class BaseClient extends Client
{
    protected string $baseUrl = 'https://aip.baidubce.com';
    protected bool   $isJson  = false;
    protected array  $headers = ['Content-Type' => 'application/x-www-form-urlencoded'];
}
