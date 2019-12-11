<?php

namespace AppBundle\Controller\Llttest;

use AppBundle\Controller\BaseController;
use Qiniu\Storage\UploadManager;
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
        $token = $auth->uploadToken($this->bucket);
        return $token;
    }

    public function uploadQiNiuAction(Request $request)
    {
        $token = $this->qiNiuToken();

        //构建 UploadManager 对象
        $uploadMgr = new UploadManager();

        return new response('$token');
    }


    public function toFileFormAction()
    {
//        $this->log("getLltLogger", 'key');
        return $this->render('llttest/fileupload.html.twig', array('name' => 'llt'));
    }


    public function toLogger1()
    {
        $logger = $this->get('logger'); // Log
        $logger->info('toLogger1');
        return json_encode(array('name' => 'llt'));
    }

    public function toLogger2()
    {
        $log = new MyLog();
        $log->baseLogger('toLogger2', 'to');
        return json_encode(array('name' => 'llt'));
    }
}
