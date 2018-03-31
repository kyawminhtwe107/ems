<?php  
  require('include/user.php');

  if(@$_POST['submit'])
  {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $change = $_POST['change'];

    $position = $_POST['position'];
    $dob = $_POST['dob'];
    $nrc = $_POST['nrc'];
    $basic_salary = $_POST['basic_salary'];
    $contract = $_POST['contract'];
    $resign = $_POST['resign'];
    $avator = $_POST['avator'];

    $info = array(
      'id' => $id,
      'name' => $name,
      'email' => $email,
      'phone' => $phone,
      'address' => $address,
      'password' => $password,
      'cpassword' => $cpassword,
      'position' => $position,
      'dob' => $dob,
      'nrc' => $nrc,
      'basic_salary' => $basic_salary,
      'resign' => $resign,
      'contract' => $contract,
      'avator' => $avator,
    );

    $user = new user($con);

    $user->update($info,$change,$id);
  }

?>