<?php
include "includes/header.php" ;
?>
 <body>




   <link rel="stylesheet" href="style-robo-carnival.css">
  <div class="background">
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
  <div class="snaps" id="link">
      <h1>Robo-Carnival</h1>
  </div>
  <div class="paras">
      <p>Robo Carnival was the first Annual intra institute Robotics event conducted by the Epsilon Club in April, 2018.</p><br>
      <p>The Event was based on Battle of Departmental Batches.</p>
      <p>So, The Participants were allowed to participate in groups of their respective departments.</p>
      <p>Like, EE17, ME16, and so on.</p><br>
      <p>The Event was conducted in three stages that tested the bots made by the Departmental groups in three different aspects.</p><br>
      <p>Stage One : The “Ring Rush” was speed based, in which the bots had to race in the Racing arena.</p>
      <p>Stage Two : The “Blind March” was time based, in which the bots had to start from a given point, go inside a designed planar castle and grab Checkpoints. All the teams were given only 3 minutes.</p>
      <p>Stage Three : The Final Showdown was the Special Round, in which two teams participated at a time and had to assemble objects to complete their half of the IIT Bhilai Logo.</p><br><br><br>
      <hr>
  </div>
  <div class="snaps">
    <h1>Snaps</h1>
  </div>
  <div class="snaps-pics-row1">
    <div class="pic1">
     <a href="images/robo-carnival-images/DSC_0764.JPG" data-lightbox="mygallery"> <img src="images/robo-carnival-images/DSC_0764.JPG" alt="Robo-Carnival"/></a>
    </div>
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0752.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0752.JPG" alt="Robo-Carnival"/></a>
    </div>
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0767.JPG" data-lightbox="mygallery">  <img src="images/robo-carnival-images/DSC_0767.JPG" alt="Robo-Carnival"/></a>
    </div>
  </div>
  <div class="snaps-pics-row2">
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0755.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0755.JPG" alt="Robo-Carnival"/></a>
    </div>
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0625.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0625.JPG" alt="Robo-Carnival"/></a>
    </div>
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0619.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0619.JPG" alt="Robo-Carnival"/></a>
    </div>
  </div>
  <div class="snaps-pics-row3">
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0686.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0686.JPG" alt="Robo-Carnival"/></a>
    </div>
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0640.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0640.JPG" alt="Robo-Carnival"/></a>
    </div>
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0639.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0639.JPG" alt="Robo-Carnival"/></a>
    </div>
  </div>
  <div class="snaps-pics-row4">
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0610.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0610.JPG" alt="Robo-Carnival"/></a>
    </div>
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0715.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0715.JPG" alt="Robo-Carnival"/></a>
    </div>
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0652.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0652.JPG" alt="Robo-Carnival"/></a>
    </div>
  </div>
  <div class="snaps-pics-row5">
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0713.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0713.JPG" alt="Robo-Carnival"/></a>
    </div>
    <div class="pic1">
      <a href="images/robo-carnival-images/DSC_0739.JPG" data-lightbox="mygallery"><img src="images/robo-carnival-images/DSC_0739.JPG" alt="Robo-Carnival" /></a>
    </div>
  </div>
      <br><br>

  <footer>
    <div class="contact" id="contact-robo">
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
  <script type="text/javascript" src="js_image_popup.js"></script>
  <script type="text/javascript" src="animate-robo-carnival.js"></script>
  <script src="preloader.js"></script>
</body>
