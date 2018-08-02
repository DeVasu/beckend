<?php session_start();?> 
<div class="welcome">
<div class="alert alert-sucess"><?= $_SESSION['message'];?></div>
welcome <span><?= $_SESSION['firstname'], $_SESSION['lastname'];?></span>
</div>
