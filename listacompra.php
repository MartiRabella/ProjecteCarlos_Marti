<?php
  if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])){
      foreach($_POST['check_list'] as $selected){
        echo $selected;

        setcookie("cookie","1");

      }
    }
}
?>
