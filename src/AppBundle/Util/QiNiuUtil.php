<?php


namespace AppBundle\Util;
require_once(dirname(__FILE__) . "/../../../vendor/autoload.php");

use Qiniu\Auth;
use Qiniu\Config;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;

class QiNiuUtil
{

    public $access_key;
    public $secret_key;
    public $bucket;
    public $expires;
    public $policy;
    public $log;
    public $rootUrl;
    private static $token;

    public function __construct()
    {
        $this->access_key = 'Pplb_eTmCmPBrVY9Pk8-7tgYvEtl1gnbW0l6s39c';
        $this->secret_key = 'ufVV5X2fL9ZBZkIG7DZMYXrN4Hpyreqh_acCNYLh';
        $this->bucket = 'hq-dev-black';
        $this->expires = 3600;
        $this->policy = null;
        $this->log = new MyLog();
        $this->rootUrl = 'http://q1bszq51b.bkt.clouddn.com/';
    }

    public function getAuth()
    {
        $auth = new Auth($this->access_key, $this->secret_key);
        return $auth;
    }

    public function getToken()
    {
        $this->log->logger('七牛云TOKEN信息', self::$token);
        if (self::$token == null) {
            $auth = $this->getAuth();
            self::$token = $auth->uploadToken($this->bucket, null, $this->expires, $this->policy, true);
            $this->log->logger('未检查到TOKEN开始生成TOKEN', self::$token);
        }
        return self::$token;
    }

    /**
     * @param $key 七牛云保存的名字
     * @param $originalFile 文件真实路径
     * @param null $fileName 文件真实名称（日志）
     * @return bool
     * @throws \Exception
     */
    public function put($key, $originalFile, $fileName = null)
    {
        $token = $this->getToken();
        $uploadMgr = new UploadManager();
        list($ret, $err) = $uploadMgr->putFile($token, $key, $originalFile);
        if ($err !== null) {
            $this->log->logger('上传七牛云失败', '文件名' . $fileName . '||文件hashID' . $originalFile);
            self::$token = null;
            return false;
        } else {
            return true;
        }
    }

    public function exist($fileName)
    {
        $auth = $this->getAuth();
        $config = new Config();
        $bucketManager = new BucketManager($auth, $config);
        list($fileInfo, $err) = $bucketManager->stat($this->bucket, $fileName);
        if ($err !== null) {
            $this->log->logger('七牛云文件查询', '文件不存在' . $fileName);
            self::$token = null;
            return false;
        } else {
            return true;
        }
    }

    public function delete($fileName)
    {
        $auth = $this->getAuth();
        $config = new Config();
        $bucketManager = new BucketManager($auth, $config);
        list($fileInfo, $err) = $bucketManager->delete($this->bucket, $fileName);
        if ($err !== null) {
            $this->log->logger('七牛云文件删除', '文件不成功' . $fileName);
            self::$token = null;
            return false;
        } else {
            $this->log->logger('七牛云文件删除', '文件成功' . $fileName);
            return true;
        }
    }

}
