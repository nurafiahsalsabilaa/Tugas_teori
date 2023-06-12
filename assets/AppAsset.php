<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
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
        'template/css/linearicons.css',
        'template/css/font-awesome.min.css',
        'template/css/bootstrap.css',
        'template/css/magnific-popup.css',
        'template/css/nice-select.css',
        'template/css/animate.min.css',
        'template/css/owl.carousel.css',
        'template/css/main.css',
    ];
    public $js = [
        'template/js/vendor/jquery-2.2.4.min.js',
        'template/js/vendor/bootstrap.min.js',
        'template/js/easing.min.js',
        'template/js/hoverIntent.js',
        'template/js/superfish.min.js',
        'template/js/jquery.ajaxchimp.min.js',
        'template/js/jquery.magnific-popup.min.js',
        'template/js/owl.carousel.min.js',
        'template/js/jquery.nice-select.min.js',
        'template/js/parallax.min.js',
        'template/js/waypoints.min.js',
        'template/js/jquery.counterup.min.js',
        'template/js/mail-script.js',
        'template/js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
