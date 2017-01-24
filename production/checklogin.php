<?php
//make an associative array of users and their corresponding passwords.
$user_pass_list = array("_cargo_owner" => "whatislife", "_dispatcher" => "whatislife", "_port" => "whatislife", "Railroad" => "whatislife", "Trucker" => "whatislife", "Terminal" => "whatislife");

//assign the 'user' variable passed in the post from html to a new php variable called $user
$user = $_POST['user'];
//assign the 'pass' variable passed in the post from html to a new php variable called $pass
$pass = $_POST['pass'];

//check if the user exists in our array
if(array_key_exists($user, $user_pass_list)){
  //if it does, then check the password
  if($user_pass_list[$user] == $pass){
      $format = "%s + %s + %s"; // pattern for building the string
      $first = "Location: index";
      $second = $user;
      $third = ".php";
      $string = sprintf($format, $first, $second, $third);
    header($string); 
    exit;
  }else{
    echo "Login Failure";
  }
}else{
  echo "User does not exist";
}

?>