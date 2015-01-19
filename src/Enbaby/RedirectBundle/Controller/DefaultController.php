<?php

namespace Enbaby\RedirectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('_redirect_wechat'));
    }
    public function wechatAction($index)
    {
	return $this->redirect('http://weixin.qq.com/r/DnMBGaXExPi7reF69yYc',301);
    }
}
