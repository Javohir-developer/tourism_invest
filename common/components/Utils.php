<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 12.02.2019
 * Time: 10:33
 */

namespace common\components;


class Utils extends \oks\filemanager\models\Files
{
    public static function fileSize($file)
    {
        $dist = self::dist($file->upload_dir, $file->file) . "." . $file->type;
        return filesize($dist);
    }
}