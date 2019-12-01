<?php


namespace AppBundle\Util;
require_once(dirname(__FILE__) . "/../../../vendor/autoload.php");

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class DemoQiNiuUtil
{

    public $access_key;
    public $secret_key;
    public $bucket;

    public function __construct()
    {
        $this->access_key = 'Pplb_eTmCmPBrVY9Pk8-7tgYvEtl1gnbW0l6s39c';
        $this->secret_key = 'ufVV5X2fL9ZBZkIG7DZMYXrN4Hpyreqh_acCNYLh';
        $this->bucket = 'hq-high-room';
    }

    public function uploadQiNiu()
    {
        $auth = new Auth($this->access_key, $this->secret_key);
        $token = $auth->uploadToken($this->bucket);
        $uploadMgr = new UploadManager();
        $filePath = './file/test.txt';
        list($ret, $err) = $uploadMgr->putFile($token, "text1.txt", $filePath);

    }

}


$qn = new DemoQiNiuUtil();
$qn->uploadQiNiu();