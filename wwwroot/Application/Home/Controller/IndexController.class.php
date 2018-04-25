<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
    public function index(){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

        $this->assign('category',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('page',D('Document')->page);//分页

                 
        $this->display();
    }


    /**
     * 保存信息
     */
    public function saveMessage()
    {
        $Channel = M('Msg');
        $fillData = [];
        $fillData['name'] = I('Name');
        $fillData['email'] = I('Email');
        $fillData['telephone'] = I('Telephone');
        $fillData['subject'] = I('Subject');
        $fillData['message'] =I('Message');
        $fillData['created_at'] =date('Y-m-d H:i:s');
        $fillData['updated_at'] =date('Y-m-d H:i:s');
        if( $Channel->add($fillData) )
        {
            echo json_encode(['status'=>1]);
            exit;
        } else {
            echo json_encode(['status'=>0]);
            exit;
        }
    }

}