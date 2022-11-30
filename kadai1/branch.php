<?php
if(isset($_POST['disp'])==true){
    if(isset($_POST['kadaicode'])==false)
    {
        header('Location:ng.php');
        exit();
    }
    $kadai_code=$_POST['kadaicode'];
    header('Location: disp.php?kadaicode='.$kadai_code);
    exit();
}

if(isset($_POST['itiran'])==true)
{
    header('Location:itiran.php');
    exit();
}

if(isset($_POST['edit'])==true)
{
    if(isset($_POST['kadaicode'])==false)
    {
        header('Location:ng.php');
        exit();
    }
    $kadai_code=$_POST['kadaicode'];
    header('Location:edit.php?kadaicode='.$kadai_code);
    exit();
}

if(isset($_POST['delete'])==true)
{

   if(isset($_POST['kadaicode'])==false)
   {
    header('Location:ng.php');
    exit();
   }
   $kadai_code=$_POST['kadaicode'];
   header('Location:delete.php?kadaicode='.$kadai_code);
   exit();
}
?>