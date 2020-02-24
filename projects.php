
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script type="type/javascript" href="bootstrap/js/bootstrap.min.js"></script>
<?php
include "includes/header.php" ;
?>
 <body>

  
   <div class="projects-background">
     <h1> Projects</h1>
   </div>
   <?php
   if(isset($_SESSION['user_email'])){
     echo $_SESSION['user_email'];
     include "includes/navbar-loggedin.php" ;
   }
   else{
     include "includes/navbar.php" ;
   }
   ?>
   <link rel="stylesheet" href="style-projects.css">
     <div class="essence">
       <h1>Essence</h1>
       </div>
       <div class="paras">
         <p>
           It is important to learn about the potential of the Knowledge that we acquire, to maximize the efficiency of it’s practical implementation. So, the Epsilon Club plans projects that implement the ideas put forward by the very members, seeing to it that the project helps the members involved it gain experience in making something that is new, challenging, as well as of any practical use.<br />
           The Club welcomes suggestion of ideas regarding projects, or workshops, from all the members,
           and supports their involvement in the discussion of the club, when meetings are held, with prior notice. The Institute supports the Projects selected by the club to work on, by funding the requirements of the respective projects.<br /><br />
           Everyone here, at IIT Bhilai is supportive of the growth that comes through hard work and experience, and encourages others to be the same and be a part of the Growth as a Movement,
           by working for it.<br /><br />
           We believe,<br />
           Application is an Operation Over Knowledge that yields Experience.

           </p><br /><br /><br />
           <hr>
         </div>
         <div class="snaps">
           <h1>Snaps</h1>
           </div>
            <div class="snaps-pics-row1">
         <?php

         $dir="images/projects/";
         $files=scandir($dir);
         if($files){
           foreach($files as $file){
             ?>
             <div class="pic1">
               <a href="images/projects/<?php echo $file;?>" data-lightbox="mygallery" data-title="<?php echo $file;?>"><img class="image" src="images/projects/<?php echo $file;?>" alt="<?php echo $file;?>"/></a>
             </div>
              <?php
           }

         }
          ?>
             </div>

            <!-- <div class="snaps-pics-row2">
               <div class="pic1">
                 <a href="images/projects/LineFollowing and Obstacle Avoiding Robot.jpg" data-lightbox="mygallery" data-title="Line Following and Obstacle Avoiding Robot"><img class="image" src="images/projects/LineFollowing and Obstacle Avoiding Robot.jpg" alt="Line Following and Obstacle Avoiding Robot"/></a>
                </div>

                 <div class="pic1">
                   <a href="images/projects/Quadruped Robot.JPG" data-lightbox="mygallery" data-title="Quadruped Robot"><img class="image" src="images/projects/Quadruped Robot.JPG" alt="Quadruped Robot"/></a>
                  </div>

                   <div class="pic1">
                     <a href="images/projects/Rubix Cube Solver Robot.JPG" data-lightbox="mygallery" data-title="Rubix Cube Solver"><img class="image" src="images/projects/Rubix Cube Solver Robot.JPG" alt="Rubix Cube Solver Robotprojects/"></a>
                    </div>
               </div>-->
             <br /><br /><br />
             <footer>
               <div class="contact" id="contact-projects">
                 <div class="contact-us">
                   <p class="c-us">
                     CONTACT US
                   </p>
                     <div class="icon">
                       <ul>
                         <li>
                             <a class="fb" href="https://www.facebook.com/epsiloniitbh/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                         </li>
                       </ul>
                     </div>
                     <br>
                     <hr><br>
                   <p class="coordinator">
                     COORDINATOR
                   <br>
                     KETHA JAYA SANDEEP
                   </p>
                 </div>
                 <div class="icon">
                   <ul>

                       <li><i class="fa fa-phone"></i> <pre> +91-8074841553   </pre> </li>
                       <li>
                         <a class="mail" href="mailto:kethas@iitbhilai.ac.in"><i class="fa fa-envelope"> </i></a> kethas@iitbhilai.ac.in</li>

                   </ul>

                 </div>
               </div>

             </footer>
             <div class="copyright">
               &copy; Copyright The Epsilon, IIT Bhilai
             </div>
             <br><br><br>
             <script src="animate-projects.js"></script>
             <!-- <script src="preloader.js"></script> -->

   </body>
</html>
