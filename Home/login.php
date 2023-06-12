<html>
    <title>Authentication Form</title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"></link>
    </head>
    <body>
        
        <h2 style="font-size: 72;">Welcome Back</h2>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="POST">
                    <h1>Sign In</br>Woker</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa fa-fw fa-facebook"></i></a>
                        <a href="#" class="social"><i class="fa fa-fw fa-google-plus"></i></a>
                        <a href="#" class="social"><i class="fa fa-fw fa-twitter"></i></a>
                    </div>
                    <span>or use your existing account to login</span>
                    <!-- worker -->
                    
                    <input type="email" placeholder="Email" name="WEmail" value="<?php if(isset($_POST["worker_login"])){echo ""; }?>" />
                    <input type="password" placeholder="Password" name="Wpwd" value="<?php  if(isset($_POST["worker_login"])){echo ""; }?>"/>
                    <!--<button name="worker_login">Sign In</button> -->
                    <input type="submit" class="btn" name="worker_login" value="Sign In">
                </form>
            </div>

            <div class="form-container sign-in-container">
                <form method="POST">
                    <h1>Sign In</br>Customer</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa fa-fw fa-facebook"></i></a>
                        <a href="#" class="social"><i class="fa fa-fw fa-google-plus"></i></a>
                        <a href="#" class="social"><i class="fa fa-fw fa-twitter"></i></a>
                    </div>
                    <!-- customer -->
                    <span>or use your existing account to login</span>
                    <input type="email" placeholder="Email"  name="CEmail" value="<?php if(isset($_POST["customer_login"])){echo ""; }  ?>"/>
                    <input type="password" placeholder="Password" name="Cpwd" value="<?php  if(isset($_POST["customer_login"])){echo "";  }?>"/>
                   <!-- <button  name="customer_login">Sign In</button>-->
                   <!--<input type="button" name="customer_login" value="Sign In">-->
                    <input type="submit" class="btn"  name="customer_login" value="Log In">
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    
                    <div class="overlay-panel overlay-left">
                        <h1>Customer</h1>
                        <p>To keep connected with us please login with your details if your customer</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Woker </h1>
                        <p>To keep connected with us please login with your details if your woker</p>
                       <button class="ghost" id="signUp">Sign In</button>
                    </div>
                </div>

            </div>
        </div>
        <script src="app.js"></script>



        <?php

        session_start();
        //Connection
        include("conn.php");

        if(isset($_POST["worker_login"]))
        {
            
            $Wemail=$_POST["WEmail"];
            $Wpwd=$_POST["Wpwd"];


            if(empty($Wemail)|| empty($Wpwd))
            {

                //error message 

                header("Location: login.php");

            }

            else
            {
                $WloginQ=mysqli_query($conn,"SELECT Email,Password FROM worker WHERE Email='$Wemail' AND Password='$Wpwd' ");

                $Wcount=mysqli_num_rows($WloginQ);

                    if($Wcount>0)
                    {
                        $getid= mysqli_query($conn,"select ID from worker where Email='$Wemail'");
                        $row=mysqli_fetch_row($getid);

                         
                        $_SESSION['id'] = $row[0];
                        $_SESSION['email'] = $Wemail;
                        //successfully login message
                        die($_SESSION['id']);
                       //header("Location: homepahe001.html");   //loading worker view page


                    }

                    else
                    {
                        //Invalid user name or password error meaasage

                       header("Location: login.php");//worker page


                    }
            }
          

        }
        
    if(isset($_POST["customer_login"]))
    {
            
            
            $Cemail=$_POST["CEmail"];
            $Cpwd=$_POST["Cpwd"];

            //var_dump($Cemail);

            if(empty($Cemail)|| empty($Cpwd))
            {

              
                //error message

                header("Location: login.php");

            }

            else
            {
                $CloginQ=mysqli_query($conn,"SELECT Email,Password FROM consumer WHERE Email='$Cemail' AND Password='$Cpwd' ");

                $Ccount=mysqli_num_rows($CloginQ);

                    if($Ccount>0)
                    {
                        $getid= mysqli_query($conn,"select ID from consumer where Email='$Cemail'");
                        $row=mysqli_fetch_row($getid);

                         
                        $_SESSION['id'] = $row[0];
                        $_SESSION['email'] = $Cemail;
                        //successfully login message
                        //die($_SESSION['id']);
                       header("Location: ../ProjetcCreating/projectCrating.php");   //loading worker view page


                    }

                    else
                    {
                        //Invalid user name or password error meaasage

                       header("Location: login.php");


                    }
            }

     }
        

        ?>
    </body>
</html>