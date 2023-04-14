<?php
/**
 * @Author: gan
 * @Description:
 * @File:  Ocr
 * @Version: 1.0.0
 * @Date: 2022/9/10 10:34 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\Speech;

use AIP\BaiduAIP\Exception\HttpException;

class Speech extends BaseClient
{
    /**
     * 语音识别
     * @param string $speech
     * @param string $format
     * @param int $rate
     * @param array $options
     * @return array
     * @throws HttpException
     */
    public function asr(string $speech, string $format, int $rate, array $options = array())
    {
        $data = array();
        if (!empty($speech)) {
            $data['speech'] = base64_encode($speech);
            $data['len']    = strlen($speech);
        }
        $data['format']  = $format;
        $data['rate']    = $rate;
        $data['channel'] = 1;
        $data            = array_merge($data, $options);
        return $this->request("/server_api", $data, [], true);
    }
}
