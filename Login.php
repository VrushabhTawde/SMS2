<!DOCTYPE html>
<html lang="en">
          <head>
          <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
                     <title class="title"> Login Page</title>
                     <style>
                         #name{
                           margin:-21px;
                            color: orange;
                            font: caption;
                            
    text-shadow: 10px 3px #0000004f, 6px 3px #00000000;
    font-weight: bold;
    font-size: 68px;

                         }
                         .admin{
                            margin: 2px;
                            margin-left: -648px;
                            
    padding: 4px;
    color: red;
    cursor: pointer;
    border-radius: 7%;
    width: 108px;
                            color: red;
                         }
                         .student{
                            padding: 4px;
                            
    margin-right: -372px;
    /* margin-top: -81px; margin-top: -100px;*/
    /* margin-bottom: 236px; */
    margin-top: -100px;
    margin-top: 374px;

                           
                            
    color: red;
    cursor: pointer;
    border-radius: 7%;
    width: 108px;
                            color: green;
                         }
                         body{
                             background-color:lightblue;
                             background-image opacity: 10%;

 
 width: 100%;
 
}
#top_span{
    color: black;
                            font: caption;
                           

}
.img2{
    width: 202px;
    margin-left: -648px;
}
.img3{
  margin-right: -392px;
    margin-top: -367px;
    margin-bottom: 341px;
    width: 223px;
  
   
}
.p{
  margin-left: -648px;

}
.t{
 /* margin-top: -377px; */
 margin-top: 26px;
    margin-right: -377px;

   
}
.q{
  margin-right: -377px;
  margin-top: -312px;
}
.student{
  margin-top: -1px;
}


                    </style>
                     
                    
                    
          </head>
<body>             
          

          
         
                <center>
                <span id="top_span"><marquee>Welcome To Login Page!</marquee></span>
               <div id="name"><h3>SCHOOL LOGIN PAGE</h3><br> </div><br
               
            <form>

            <!--input class="admin" type="submit" onclick="location.href='admin_login.php';" name="admin_login" value="Admin Login" required-->
     

            <!--input class="student"  type="submit"  onclick="location.href='student_login.php';" name="student_login" value="Student Login" required--> 
            
 <!--SECTION -->
 <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="img2" src="img2.jpg">
        </div>
        <h2 class="p">WELCOME ADMIN </h2>
        <p class="p">Admin Login Here!</p>
        <button onclick="location.href='admin_login.php';" class="admin">ADMIN</button>
      </div>
      <br><br>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="img3" src="img3.jpg">
        </div>
        <h2 class="q">WELCOME DEAR STUDENT</h2>
        <p class="t">Student Login Here!</p>
        <button onclick="location.href='student_login.php';" class="student">STUDENT</button>
      </div>
    </div>
  </div>
</section>           





















    
             </form>
             
            <!--?php
               session_start();

                    if(isset($_POST['admin_login'])){
                        header("Location: admin_login.php");
                    }
                    if(isset($_POST['student_login'])){
                        header("Location: student_login.php");
                    }  
            ?-->
                   
                    
                   </center>   
            
            
                    
    </body>
</html>

