<?php
/**
 * @Author: gan
 * @Description:
 * @File:  AccessToken
 * @Version: 1.0.0
 * @Date: 2022/9/10 11:17 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Auth;

use AIP\BaiduAIP\Kernel\AccessToken as BaseAccessToken;

use AIP\BaiduAIP\Kernel\ServiceProviders;

class AccessToken extends BaseAccessToken
{
    protected function getEndpoint(): string
    {
        return 'https://aip.baidubce.com/oauth/2.0/token?' . $this->getCredentials();
    }

    protected function getCredentials(): string
    {
        return http_build_query([
            'grant_type'    => 'client_credentials',
            'client_id'     => $this->app[ServiceProviders::Config]->get('client_id'),
            'client_secret' => $this->app[ServiceProviders::Config]->get('client_secret')
        ]);
    }
}
