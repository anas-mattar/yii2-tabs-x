<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2016
 * @package yii2-tabs-x
 * @version 1.2.3
 */

namespace kartik\tabs;

use kartik\base\AssetBundle;

/**
 * Asset bundle for TabsX widget. Includes assets from bootstrap-tabs-x plugin by Krajee.
 *
 * @see http://plugins.krajee.com/tabs-x
 * @see http://github.com/kartik-v/bootstrap-tabs-x
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class TabsXAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init()
    {
        $this->setSourcePath('@vendor/kartik-v/yii2-tabs-x/assets/');
        $this->setupAssets('css', ['css/bootstrap-tabs-x.min', 'css/tabs_slider']);
        $this->setupAssets('js', ['js/bootstrap-tabs-x.min', 'js/tabs_slider']);
        parent::init();
    }
}
