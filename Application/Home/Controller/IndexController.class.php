<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$job_list = M('job');
    	$work_status = array("全职","实习","兼职");
    	$job_status = array("进行中","已结束");
    	$count      = $job_list->count();// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$show       = $Page->show();// 分页显示输出
    	$job_list = $job_list->field('id,company_name,job_name,price,city,work_status,job_status,job_edu,job_welf,add_time')->limit($Page->firstRow.','.$Page->listRows)->order('job_status asc,add_time desc')->select();
    	foreach ($job_list as $key => $value) {
    		$job_list[$key]['work_status'] = $work_status[$value['work_status']];
    		$job_list[$key]['job_status'] = $job_status[$value['job_status']];
    		$job_list[$key]['add_time'] = date('Y-m-d',$value['add_time']);
    	}
    	$top = M('job')->field('id,company_name,job_name')->where("job_status = 0")->limit(15)->order("click desc")->select();
		$this->assign('top',$top);
    	$this->assign('job_list',$job_list);
    	$this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function details() {
    	$work_status = array("全职","实习","兼职");
    	$job_status = array("进行中","已结束");
		$where['id']	= I('id','','htmlspecialchars,addslashes');
    	$job_details = M('job')->where($where)->find();
    	$job_details['work_status'] = $work_status[$job_details['work_status']];
    	$job_details['job_status'] = $job_status[$job_details['job_status']];
    	$job_details['add_time'] = date('Y-m-d',$job_details['add_time']);
    	$data['click'] = $job_details['click']+=1;
    	M('job')->where($where)->save($data);

    	$top = M('job')->field('id,company_name,job_name')->where("job_status = 0")->limit(15)->order("click desc")->select();
		$this->assign('job_details',$job_details);
		$this->assign('top',$top);
    	$this->display();
    }
}