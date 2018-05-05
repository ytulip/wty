<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Admin\Controller;
use User\Uti\PostImage;

/**
 * 后台频道控制器
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */

class Channel3Controller extends AdminController {

    /**
     * 频道列表
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function index(){

        if(IS_POST)
        {
            $id = I('id',0);

            if( $id == 8)
            {
                $res = M('Msg')->where(array('id'=>$id))->setField('cover_image',I('cover_image'));
                $res = M('Msg')->where(array('id'=>$id))->setField('url',I('url'));
                $res = M('Msg')->where(array('id'=>$id))->setField('target',I('target'));
            } else {
                $res = M('Msg')->where(array('id'=>$id))->setField('content',I('content'));
                $res = M('Msg')->where(array('id'=>$id))->setField('title',I('title'));
            }
            echo json_encode(['status'=>1]);
            exit;
        }

        $pid = I('get.pid', 0);
        /* 获取频道列表 */
        $map  = array();



        if(I('name')){
            $map['name']   =   array('like', '%'.I('name').'%');
        }
        if(I('telephone')){
            $map['telephone']  =   array('like', '%'.I('telephone').'%');;
        }

        if(I('email')){
            $map['email']  =   array('like', '%'.I('email').'%');;
        }
        if ( isset($_GET['timestart']) ) {
            $map['updated_at'][] = array('egt',I('timestart'));
        }
        if ( isset($_GET['timeend']) ) {
            $map['updated_at'][] = array('lt',date('Y-m-d',24*60*60 + strtotime(I('timeend'))));
        }

//        $list = M('Msg')->where($map)->order('id desc')->select();

        $Msg   =   D('Msg');

        $list = $this->lists($Msg,$map,'id desc');
        $list = $this->parseDocumentList($list,1);

        $this->assign('list', $list);
//        $this->assign('pid', $pid);
        $this->meta_title = '导航管理';

        $info1 = M('Msg')->find(1);
        $info2 = M('Msg')->find(2);
        $info3 = M('Msg')->find(3);
        $info4 = M('Msg')->find(4);
        $info5 = M('Msg')->find(5);
        $info6 = M('Msg')->find(6);
        $info7 = M('Msg')->find(7);
        $info8 = M('Msg')->find(8);

        $this->assign('info1', $info1);
        $this->assign('info2', $info2);
        $this->assign('info3', $info3);
        $this->assign('info4', $info4);
        $this->assign('info5', $info5);
        $this->assign('info6', $info6);
        $this->assign('info7', $info7);
        $this->assign('info8', $info8);

        $this->display();
    }

    /**
     * 添加频道
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function add(){
        if(IS_POST){
            $Channel = D('Channel1');
            $data = $Channel->create();
            if($data){
                $id = $Channel->add();
                if($id){
                    $this->success('新增成功', U('index'));
                    //记录行为
                    action_log('update_channel', 'channel', $id, UID);
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($Channel->getError());
            }
        } else {
            $pid = I('get.pid', 0);
            //获取父导航
            if(!empty($pid)){
                $parent = M('Channel1')->where(array('id'=>$pid))->field('title')->find();
                $this->assign('parent', $parent);
            }

            $this->assign('pid', $pid);
            $this->assign('info',null);
            $this->meta_title = '新增导航';
            $this->display('edit');
        }
    }

    private function getMillisecond()
    {
        //获取毫秒的时间戳
        $time = explode ( " ", microtime () );
        $time = $time[1] . ($time[0] * 1000);
        $time2 = explode( ".", $time );
        $time = $time2[0];
        return $time;
    }

    /**
     * 保存上次图片
     */
    public function coverImage()
    {
        require_once  APP_PATH . 'User/Util/PostImage.php';
        $savePath = APP_PATH . 'Upload/';
        $filename = $this->getMillisecond() . '.' . PostImage::getExt();
        PostImage::save( $savePath . $filename);
        echo json_encode(array('status'=>true,'path'=>'/wwwroot/Application/Upload/' . $filename));
        exit;
    }

    /**
     * 编辑频道
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function edit($id = 0){
        if(IS_POST){
            $Channel = D('Channel1');
            $data = $Channel->create();
            if($data){
                if($Channel->save()){
                    //记录行为
                    action_log('update_channel', 'channel', $data['id'], UID);
                    $this->success('编辑成功', U('index'));
                } else {
                    $this->error('编辑失败');
                }

            } else {
                $this->error($Channel->getError());
            }
        } else {
            $info = array();
            /* 获取数据 */
            $info = M('Channel1')->find($id);

            if(false === $info){
                $this->error('获取配置信息错误');
            }

            $pid = I('get.pid', 0);
            //获取父导航
            if(!empty($pid)){
                $parent = M('Channel1')->where(array('id'=>$pid))->field('title')->find();
                $this->assign('parent', $parent);
            }

            $this->assign('pid', $pid);
            $this->assign('info', $info);
            $this->meta_title = '编辑导航';
            $this->display();
        }
    }

    /**
     * 删除频道
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function del(){
        $id = array_unique((array)I('id',0));

        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }

        $map = array('id' => array('in', $id) );
        if(M('Channel1')->where($map)->delete()){
            //记录行为
            action_log('update_channel', 'channel', $id, UID);
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }

    /**
     * 导航排序
     * @author huajie <banhuajie@163.com>
     */
    public function sort()
    {
        if (IS_GET) {
            $ids = I('get.ids');
            $pid = I('get.pid');

            //获取排序的数据
            $map = array('status' => array('gt', -1));
            if (!empty($ids)) {
                $map['id'] = array('in', $ids);
            } else {
                if ($pid !== '') {
                    $map['pid'] = $pid;
                }
            }
            $list = M('Channel1')->where($map)->field('id,title')->order('sort asc,id asc')->select();

            $this->assign('list', $list);
            $this->meta_title = '导航排序';
            $this->display();
        } elseif (IS_POST) {
            $ids = I('post.ids');
            $ids = explode(',', $ids);
            foreach ($ids as $key => $value) {
                $res = M('Channel1')->where(array('id' => $value))->setField('sort', $key + 1);
            }
            if ($res !== false) {
                $this->success('排序成功！');
            } else {
                $this->error('排序失败！');
            }
        } else {
            $this->error('非法请求！');
        }
    }
}