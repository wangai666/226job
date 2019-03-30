<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$job_list = M("Job");
    	$job_status = array("进行中","已结束");
    	$count      = $job_list->count();// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$show       = $Page->show();// 分页显示输出
    	$job_list = $job_list->field("id,company_name,job_name,job_status,add_time")->limit($Page->firstRow.','.$Page->listRows)->order('job_status asc,add_time desc')->select();
    	foreach ($job_list as $key => $value) {
    		$job_list[$key]['job_status'] = $job_status[$value['job_status']];
    		$job_list[$key]['add_time'] = date('Y-m-d',$value['add_time']);
    	}

    	$this->assign('job_list',$job_list);
    	$this->assign('count',$count);// 赋值分页输出
    	$this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function add_job() {
    	if (IS_POST) {
			$data['company_name']	= I('company_name','','htmlspecialchars,addslashes');
			$data['job_name']		= I('job_name','','htmlspecialchars,addslashes');
			$data['price']			= I('price','','htmlspecialchars,addslashes');
			$data['city']			= I('city','','htmlspecialchars,addslashes');
			$data['job_number']		= I('job_number','','htmlspecialchars,addslashes');
			$data['job_email']		= I('job_email','','htmlspecialchars,addslashes');
			$data['work_status']	= I('work_status','','htmlspecialchars,addslashes');
            $data['job_status']     = I('job_status','','htmlspecialchars,addslashes');
			$data['job_edu']		= I('job_edu','','htmlspecialchars,addslashes');
            $data['job_welf']        = I('job_welf','','htmlspecialchars,addslashes');
			$data['job_desc']		= I('job_desc','','addslashes');
			$data['job_req']		= I('job_req','','addslashes');
			$data['add_time']		= time();

			$add_job = M('job')->add($data);

			if ($add_job) {
				$this->success("添加成功",U('Index/index'));
			} else {
				$this->error('添加失败');
			}
    	} else {
    		$this->display();
    	}
    }

    public function edit_job() {
    	$where['id'] = I('id','','htmlspecialchars,addslashes');
    	if (IS_POST) {
			$data['company_name']	= I('company_name','','htmlspecialchars,addslashes');
			$data['job_name']		= I('job_name','','htmlspecialchars,addslashes');
			$data['price']			= I('price','','htmlspecialchars,addslashes');
			$data['city']			= I('city','','htmlspecialchars,addslashes');
			$data['job_number']		= I('job_number','','htmlspecialchars,addslashes');
			$data['job_email']		= I('job_email','','htmlspecialchars,addslashes');
			$data['work_status']	= I('work_status','','htmlspecialchars,addslashes');
			$data['job_status']		= I('job_status','','htmlspecialchars,addslashes');
            $data['job_edu']        = I('job_edu','','htmlspecialchars,addslashes');
            $data['job_welf']        = I('job_welf','','htmlspecialchars,addslashes');
			$data['job_desc']		= I('job_desc','','addslashes');
			$data['job_req']		= I('job_req','','addslashes');
			$data['add_time']		= time();

			$update_job = M('job')->where($where)->save($data);

			if ($update_job) {
				$this->success("修改成功",U('Index/index'));
			} else {
				$this->error('修改失败');
			}
    	} else {
    		$job_info = M('Job')->where($where)->find();
    		$this->assign('job_info',$job_info);
    		$this->display();
    	}
    }

    public function del_job() {
    	$where['id'] = I('id','','htmlspecialchars,addslashes');
    	$delete_job = M('Job')->where($where)->delete();
		if ($delete_job) {
			echo 1;exit;
		} else {
			echo 0;exit;
		}
    }

    public function search_job() {
    	$job = M('Job');
    	$keywords = I('keywords','','htmlspecialchars,addslashes');
    	$where['company_name'] = array('like',"%$keywords%");
    	$count      = $job->where($where)->count();// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$show       = $Page->show();// 分页显示输出

    	$job_list = $job->field("id,company_name,job_name,job_status,add_time")->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('job_status asc,add_time desc')->select();
		$job_status = array("进行中","已结束");
    	foreach ($job_list as $key => $value) {
    		$job_list[$key]['job_status'] = $job_status[$value['job_status']];
    		$job_list[$key]['add_time'] = date('Y-m-d',$value['add_time']);
    	}
    	$this->assign('job_list',$job_list);
    	$this->assign('keywords',$keywords);
    	$this->assign('count',$count);// 赋值分页输出
    	$this->assign('page',$show);// 赋值分页输出
    	$this->display('Index/index');
    }
}