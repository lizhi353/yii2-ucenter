# yii2Ucenter
yii2Ucenter单点登录
1. 首先在ucenter添加你的应用。

2. $webroot/frontend/config目录下添加ucenter.php文件。写入ucenter配置信息。如：

define('UC_CONNECT', 'mysql');
define('UC_DBHOST', 'localhost');
define('UC_DBUSER', 'root');
define('UC_DBPW', '');
define('UC_DBNAME', 'discuz');
define('UC_DBCHARSET', 'utf8');
define('UC_DBTABLEPRE', '`discuz`.pre_ucenter_');
define('UC_DBCONNECT', '0');
define('UC_KEY', '32182vFikUtPT8p4y9L5aPKMngsZHR/ZS4kWFhE');
define('UC_API', 'http://uc.cn/uc_server');
define('UC_CHARSET', 'utf-8');
define('UC_IP', '');
define('UC_APPID', '4');
define('UC_PPP', '20');

define('authkey', '7fc1c0rnpD9RuD7x');
define('UC_CLIENT_RELEASE', '20110501');

3. 将代码复制到将代码复制到$webroot/frontend/modules/ucenter

在$webroot/frontend/config加入ucenter配置文件

4. 在配置文件中加入module信息。
'modules' => [
        'ucenter' => [
            'class' => 'app\modules\ucenter\Module',
        ],
    ],
