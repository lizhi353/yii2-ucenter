<?php
/**
 * Created by PhpStorm.
 * User: lizhi
 * Date: 2015/11/5
 * Time: 11:52
 */

namespace app\modules\ucenter\models;
use yii\base\Model;
use Yii;

class ApiUser extends Model{
    const API_RETURN_SUCCEED = 1;

    public function synlogout($get) {
        Yii::$app->user->logout();
    }

    public function synlogin($get) {//同步登录
        $uid = isset($get['uid']) ? $get['uid'] : '';
        header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
        $model = new \common\models\LoginForm();
        $model->loginByUid($uid);
    }

    public function test() {//应用通信
        return self::API_RETURN_SUCCEED;
    }
}
