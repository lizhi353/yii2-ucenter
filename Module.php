<?php

namespace app\modules\ucenter;
use Yii;
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\ucenter\controllers';
    public $defaultRoute = 'index';
    public function init()
    {
        require_once(\Yii::$app->basePath.'/config/ucenter.php');
        parent::init();
    }
}
