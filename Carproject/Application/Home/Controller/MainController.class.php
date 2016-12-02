<?php
namespace Home\Controller;
use Think\Controller;
class MainController extends Controller {
  public function main(){
    $username = $_SESSION['name'];
    if($username==NULL){
      $this->display('Error/error1');
      die();
    }
    else if($username=="admin"){
      $this->redirect('../Application/Home/View/Home/exceltest');
    }
    else{
      $this->display('Home/normal-table');
    }
  }
  public function submit(){
    $username = $_SESSION['name'];
    $userid = $username;
    if($username==NULL){
      $this->display('Error/error1');
      die();
    }
    $where['UserName']=$username;
    $d = M('user')->where($where)->select();
    $username = $d[0]['name'];
    $time = date('Y-m-d',time());
    $data=array(
                        'UserId'     => $userid,
                        'TIME'       => $time,
                        'UserName'   => $username,
                        'CAR10'      => $_POST['CAR10'],
                        'CAR20'      => $_POST['CAR20'],
                        'CAR30'      => $_POST['CAR30'],
                        'CAR40'      => $_POST['CAR40'],
                        'CAR50'      => $_POST['CAR50'],
                        'CAR60'      => $_POST['CAR60'],
                        'CAR70'      => $_POST['CAR70'],
                        'CAR11'      => $_POST['CAR11'],
                        'CAR21'      => $_POST['CAR21'],
                        'CAR31'      => $_POST['CAR31'],
                        'CAR41'      => $_POST['CAR41'],
                        'CAR51'      => $_POST['CAR51'],
                        'CAR61'      => $_POST['CAR61'],
                        'CAR71'      => $_POST['CAR71'],
                    );
    M('data')->add($data);
    $this->success('操作完成','../Main/main',3);
  }
  public function select($starttime,$endtime){
    $username = $_SESSION['name'];
    if($username==NULL){
      $this->display('Error/error1');
      die();
    }
    $where['TIME']=$starttime;
    $data = M('data')->where("TIME >= '%s' AND TIME <= '%s'",array($starttime,$endtime))->select();
    //var_dump($data);
    //$this->ajaxReturn($data);
    $data=json_encode($data);
    $callback=$_GET['callback'];
    echo $callback."($data)";
  }
}
