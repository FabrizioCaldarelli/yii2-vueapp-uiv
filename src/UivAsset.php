<?php

/**
 * @package yii2-vueapp-uiv
 * @version 1.0.0
 */

namespace sfmobile\vueapp\assets\uiv;

use yii\web\AssetBundle;

/**
 * Uiv asset bundle
 * @author Fabrizio Caldarelli
 * @since 1.0
 * 
 * From: https://uiv.wxsm.space
 * 
 * ATTENTION!!! To avoid conflits:
 * Vue.use(uiv, {prefix: 'uiv'}) : Components such as <alert> becomes <uiv-alert>
 * 
 */
class UivAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm-asset/uiv/dist';
    public function init()
    {
        parent::init();
        $this->js[] = YII_DEBUG ? 'uiv.min.js' : 'uiv.min.js';
    }    
}
