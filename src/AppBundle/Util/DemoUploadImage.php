<?php

require_once(dirname(__FILE__) . "/../../../vendor/autoload.php");

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class DemoUploadImage
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

    /*
     * @ 上传远端图片
     * @ 2017/10/09
     * @ 雨醉风尘
     * */
    public function uploadImg($imgUrl)
    {
        #读取网上图片内容
        $imageData = self::getImgData($imgUrl);

        $auth = new Auth($this->access_key, $this->secret_key);

        $token = $auth->uploadToken($this->bucket);

        #上传的文件名
        $key = 'imgUrl_' . microtime(true) . '.jpg';
        $up = new UploadManager();
        $mime = 'image/jpeg';

        list($rest, $err) = $up->put($token, $key, $imageData, null, $mime);
        if ($err) {
            echo '<pre>';
            print_r($err);
        } else {
            echo '<pre>';
            print_r($rest);
            $domain = '上传 Bucket 外链默认';

            #获取上传到七牛云的图片url
            $uploadUrl = $domain . $rest['key'];

            echo "<img src=$uploadUrl>";   //图片显示
        }
    }

    protected function getImgData($imgUrl)
    {
        $ch = curl_init($imgUrl);

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

        //读取图片信息
        $rawData = curl_exec($ch);
        curl_close($ch);

        //读取文件到本地
        //file_put_contents('aa.png',$rawData);

        return $rawData;
    }
}

$upTest = new demoUploadImage();

$uploadImageUrl = "http://s3.cn.bing.net/th?id=OJ.z0O2eyRKKpwmZQ&pid=MSNJVFeeds";

$upTest->uploadImg($uploadImageUrl);
