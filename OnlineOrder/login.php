 <?php

 require_once ("include/initialize.php"); 

 if (@$_GET['page'] <= 2 or @$_GET['page'] > 5) {

  # code...

    // unset($_SESSION['PRODUCTID']);

    // // unset($_SESSION['QTY']);

    // // unset($_SESSION['TOTAL']);

} 





 

if(isset($_POST['sidebarLogin'])){

  $email = trim($_POST['U_USERNAME']);

  $upass  = trim($_POST['U_PASS']);

  $h_upass = sha1($upass);

  

   if ($email == '' OR $upass == '') {



      message("Invalid Username and Password!", "error");

      redirect(web_root."index.php");

         

    } else {   

        $cus = new Customer();

        $cusres = $cus::cusAuthentication($email,$h_upass);



        if ($cusres==true){





         header('Location:'.$_SERVER['HTTP_REFERER']);

        }else{

             message("Invalid Username and Password! Please contact administrator", "error");

             redirect(web_root."index.php");

        }

 

 }

}







 if(isset($_POST['modalLogin'])){

  $email = trim($_POST['U_USERNAME']);

  $upass  = trim($_POST['U_PASS']);

  $h_upass = sha1($upass);

  

   if ($email == '' OR $upass == '') { 

      message("Invalid Username and Password!", "error");

       redirect(web_root."index.php?page=6");

         

    } else {   

        $cus = new Customer();

        $cusres = $cus::cusAuthentication($email,$h_upass);



        if ($cusres==true){



           if($_POST['proid']==''){

            redirect(web_root."index.php?q=orderdetails");

           }else{

              $proid = $_POST['proid'];

              $id = mysqli_insert_id($conn); 

              $query ="INSERT INTO `tblwishlist` (`PROID`, `CUSID`, `WISHDATE`, `WISHSTATS`)  VALUES ('". $proid."','".$_SESSION['CUSID']."','".DATE('Y-m-d')."',0)";

              mysqli_query($conn, $query) or die(mysqli_error($conn));

              redirect(web_root."index.php?q=profile");

             }



         

        }else{

             message("Invalid Username and Password! Please contact administrator", "error");

             redirect(web_root."index.php");

        }

 

 }

 }

 ?> 

 



 