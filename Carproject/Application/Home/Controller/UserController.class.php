<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        session_start();
        $where['UserName']=strtoupper($_POST['username']);
        $where['PassWord']=md5(strtoupper($_POST['password']));
        $data=M('user')->where($where)->select();
        if($data){
          $_SESSION['name'] = strtoupper($_POST['username']);
          $this->redirect('../Home/Main/main');
        }
        else{
          $this->display('User/wronglogin');
        }
    }
    public function change(){
      $username = $_SESSION['name'];
      if($username==NULL){
        $this->display('Error/error1');
        die();
      }
      $this->display('User/change-password');
    }

    public function changepassword(){
      $username = $_SESSION['name'];
      if($username==NULL){
        $this->display('Error/error1');
        die();
      }
      $where['UserName']=$username;
      $where['PassWord']=md5(strtoupper($_POST['oldpassword']));
      $data=M('user')->where($where)->select();
      if($data==NULL){
        $this->error('密码错误','../User/change',3);
      }
      else{
        $data['PassWord']=md5(strtoupper($_POST['confirmpassword']));
        M('user')->where($where)->save($data);
        $this->success('操作完成','../Main/main',3);
      }
    }
    public function logout(){
      session_destroy();
      $this->redirect('/');
    }
}
