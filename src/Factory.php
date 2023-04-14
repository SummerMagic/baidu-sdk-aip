<?php
/**
 * @Author: gan
 * @Description:
 * @File:  Factory
 * @Version: 1.0.0
 * @Date: 2022/9/10 10:09 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP;

use AIP\BaiduAIP\Face\Application as FaceApplication;
use AIP\BaiduAIP\Ocr\Application as OcrApplication;
use AIP\BaiduAIP\Speech\Application as SpeechApplication;
use AIP\BaiduAIP\BodyAnalysis\Application as BodyApplication;
use AIP\BaiduAIP\Kg\Application as KgApplication;
use AIP\BaiduAIP\Nlp\Application as NlpApplication;
use AIP\BaiduAIP\Image\Application as ImageApplication;

class Factory
{
    /**
     * @param mixed ...$arguments
     * @return FaceApplication
     */
    public static function face(...$arguments)
    {
        return new FaceApplication(...$arguments);
    }

    /**
     * @param mixed ...$arguments
     * @return OcrApplication
     */
    public static function ocr(...$arguments)
    {
        return new OcrApplication(...$arguments);
    }

    /**
     * @param mixed ...$arguments
     * @return SpeechApplication
     */
    public static function speech(...$arguments)
    {
        return new SpeechApplication(...$arguments);
    }

    /**
     * @param mixed ...$arguments
     * @return ImageApplication
     */
    public static function image(...$arguments)
    {
        return new ImageApplication(...$arguments);
    }

    /**
     * @param mixed ...$arguments
     * @return BodyApplication
     */
    public static function body(...$arguments)
    {
        return new BodyApplication(...$arguments);
    }

    /**
     * @param mixed ...$arguments
     * @return KgApplication
     */
    public static function kg(...$arguments)
    {
        return new KgApplication(...$arguments);
    }


    /**
     * @param mixed ...$arguments
     * @return NlpApplication
     */
    public static function nlp(...$arguments)
    {
        return new NlpApplication(...$arguments);
    }
}
