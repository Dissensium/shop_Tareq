<?php
session_start();

$font = 'fonts/destroyfont.ttf';
if(file_exists($font)){
   echo sprintf('file %s exists'."<BR> \n",$font);
  }else{
   echo sprintf('file %s does not exist'."<BR> \n",$font);
  }

if(isset($_POST['captcha'])) {
   if($_POST['captcha'] == $_SESSION['captcha']) {
      echo "Captcha valide !<BR>";
   } else {
      echo "Captcha invalide...<BR>";
   }
}

?>
<form method="POST">
   <img src="captcha.php" />
   <input type="text" name="captcha" />
   <input type="submit" />
</form>