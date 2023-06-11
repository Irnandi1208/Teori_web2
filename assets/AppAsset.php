<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web2/css/bootstrap.min.css',
        'web2/css/templatemo.css',
        'web2/css/custom.css',
        'web2/css/fontawesome.min.css',
    ];
    public $js = [
        'web2/js/jquery-1.11.0.min.js',
        'web2/js/jquery-migrate-1.2.1.min.js',
        'web2/js/bootstrap.bundle.min.js',
        'web2/js/templatemo.js',
        'web2/js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
