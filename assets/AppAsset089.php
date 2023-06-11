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
class AppAsset089 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template089/css/core.css',
        'template089/css/components.css',
        'template089/css/icons.css',
        'template089/css/pages.css',
        'template089/css/responsive.css',
    ];
    public $js = [
        'template089/js/modernizr.min.js',
        'template089/js/bootstrap.min.js',
        'template089/js/detect.js',
        'template089/js/fastclick.js',
        'template089/js/jquery.slimscroll.js',
        'template089/js/jquery.blockUI.js',
        'template089/js/waves.js',
        'template089/js/wow.min.js',
        'template089/js/jquery.nicescroll.js',
        'template089/js/jquery.scrollTo.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}