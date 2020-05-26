<?php

namespace Acme\Util;

/**
 * ImageExtractor
 */
class ImageExtractor
{
    const FORMAT_JPG = 'jpg';
    const FORMAT_PNG = 'png';

    /**
     * @param string $source      source filepath
     * @param string $destination destination filepath
     * @param string $format      destination format
     *
     * @return bool
     */
    public static function extract($source, $destination, $format = self::FORMAT_JPG)
    {
        if (!extension_loaded('Imagick')) {
            return false;
        }

        $imagick = new \Imagick($source . '[0]');
        $imagick->setFormat($format);

        return $imagick->writeImage($destination);
    }
}

?>
