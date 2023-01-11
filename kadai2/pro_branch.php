<?php
if(isset($_POST['disp'])==true){
    if(isset($_POST['proid'])==false)
    {
        header('Location: pro_ng.php');
        exit();
    }
    $pro_id=$_POST['proid'];
    header('Location: pro_disp.php?proid='.$pro_id);
    exit();
}

if(isset($_POST['add'])==true)
{
    header('Location:pro_add.php');
    exit();
}

if(isset($_POST['edit'])==true)
{
    if(isset($_POST['proid'])==false)
    {
        header('Location:pro_ng.php');
        exit();
    }
    $pro_id=$_POST['proid'];
    header('Location:pro_edit.php?proid='.$pro_id);
    exit();
}

if(isset($_POST['delete'])==true)
{

   if(isset($_POST['proid'])==false)
   {
    header('Location:pro_ng.php');
    exit();
   }
   $pro_id=$_POST['proid'];
   header('Location:pro_delete.php?proid='.$pro_id);
   exit();
}
?>