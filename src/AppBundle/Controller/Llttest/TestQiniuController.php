<?php

namespace AppBundle\Controller\Llttest;

use AppBundle\Controller\BaseController;
use QiQiuYun\SDK\Auth;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class TestQiniuController extends BaseController
{

    private $accessKey = 'Pplb_eTmCmPBrVY9Pk8-7tgYvEtl1gnbW0l6s39c';
    private $secretKey = 'ufVV5X2fL9ZBZkIG7DZMYXrN4Hpyreqh_acCNYLh';
    private $bucket = ' hq-high-room';

    public function qiNiuToken()
    {
        $auth = new Auth($this->accessKey, $this->secretKey);
        // 生成上传Token
        $token = $auth->uploadToken($this->bucket);

        return new response($token);
    }

    public function uploadQiNiuAction(Request $request)
    {
        $auth = new Auth($this->accessKey, $this->secretKey);
        // 生成上传Token
        $token = $auth->uploadToken($this->bucket);

        //构建 UploadManager 对象
        $uploadMgr = new UploadManager();

        return new response('$token');
    }


    public function toFileFormAction()
    {

        return $this->render('llttest/fileupload.html.twig', array('name' => 'llt'));

    }


    public function toLogger()
    {
        $logger = $this->get('logger'); // Log
        $logger->info('somelogcontent');
        return json_encode(array('name' => 'llt'));

    }

}
