<?php
if($_POST['id'] === 'leaver' or $_POST['id'] === 'leaveroov' and $_POST['password'] === '111111')
{
  echo 'right';
} else{
  echo 'wrong';
}
?>