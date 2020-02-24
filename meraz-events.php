<?php
include "includes/header.php" ;
?>
<link rel="stylesheet" href="style-meraz-events.css">
 <body>

  
   <?php
   if(isset($_SESSION['user_email'])){
     echo $_SESSION['user_email'];
     include "includes/navbar-loggedin.php" ;
   }
   else{
     include "includes/navbar.php" ;
   }
   ?>
  <div class="meraz-image">
    <img src="images/meraz.jpg" alt="Meraz">
    </div>

    <div class="events-comp">
      <p>
        <b>Events/Competitions:</b> This club organizes Robotic events and competitions, which increases the technical knowledge
        and skills in the field of robotics.<br/> From a different view these events and competitions also encourages the interest,
        teamwork and logical thinking among the students.<br /> The Club often organizes small or moderate scale robotic events as well as competitions
        within IIT Bhilai. <b>Large scale events/Tech-Fests</b> has been organized during Meraz jointly by the ‘Sci-Tech Council’, IIT Bhilai, in which all the
        Sci-Tech Clubs would participate.
        </p>
      </div>
    <div class="about-meraz">
      <h1>Meraz</h1>
      <p>
        Meraz is IIT Bhilai's first techno-cultural fest. It was held from 5-7th october,2018.<br />
        Meraz emerged out as a successful fest which had a participation of huge amount of students from different IIT's as well as other colleges.<br />
        </p>
      </div>

      <div class="events-meraz">
        <h1>Epsilon conducted Events</h1>
        <p>
          Three large-scale events/ competitions were conducted on the grounds of IIT Bhilai during Meraz. This includes :

            <div class="comps-row1">
              <div class="pics">
                <a href="comps_meraz_imgs/arenahastleinfo.png" data-lightbox="mygallery1"><img src="comps_meraz_imgs/arenahastle.png" src="Arena-Haste-Meraz" alt="Arena Hastle"></a>
                </div>

                <div class="pics">
                  <a href="comps_meraz_imgs/roboatinfo.png" data-lightbox="mygallery2"><img src="comps_meraz_imgs/roboat.png" src="Ro-Boat-Meraz" alt="Ro-Boat"></a>
                </div>

                  <div class="pics">
                    <a href="comps_meraz_imgs/realsteelinfo.png" data-lightbox="mygallery3"><img src="comps_meraz_imgs/realsteel.png" src="Real-Steel-Meraz" alt="Real Steel"></a>
                  </div>
              </div>

            <p>
               For further information , Please  <a target="_blank" href="https://meraz.iitbhilai.ac.in/events.html">Click Here.</a>
            </p>
          </p>
        </div>
        <div class="video-head">
          <h1>Have A Look!</h1>
          </div>
          <div class="youtube-wrapper">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/-p-9OJNJ4rA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="snaps">
            <h1>Snaps</h1>
            </div>
            <div class="snaps-pics-row1">
              <div class="pic1">
                <a href="images/Arena-Haste.JPG" data-lightbox="mygallery"><img src="images/Arena-Haste.JPG" src="Arena-Haste-Meraz" alt="Arena-Haste-Meraz"></a>
                </div>

                <div class="pic1">
                  <a href="images/Ro-Boat.PNG" data-lightbox="mygallery"><img src="images/Ro-Boat.PNG" src="Ro-Boat-Meraz" alt="Ro-Boat-Meraz"></a>
                </div>

                  <div class="pic1">
                    <a href="images/Ro-Boat2.JPG" data-lightbox="mygallery"><img src="images/Ro-Boat2.JPG" src="Ro-Boat-Meraz" alt="Ro-Boat-Meraz"></a>
                  </div>
              </div>

              <div class="snaps-pics-row2">
                <div class="pic1">
                  <a href="images/Ro-Boat3.JPG" data-lightbox="mygallery"><img src="images/Ro-Boat3.JPG" src="Ro-Boat-Meraz" alt="Ro-Boat-Meraz"/></a>
                </div>

                  <div class="pic1">
                    <a href="images/Ro-Boat4.JPG" data-lightbox="mygallery"><img src="images/Ro-Boat4.JPG" src="Ro-Boat-Meraz" alt="Ro-Boat-Meraz"/></a>
                  </div>

                    <div class="pic1">
                      <a href="images/Ro-Boat5.JPG" data-lightbox="mygallery"><img src="images/Ro-Boat5.JPG" src="Ro-Boat-Meraz" alt="Ro-Boat-Meraz"/></a>
                    </div>
                </div>
                <div class="snaps-pics-row3">
                  <div class="pic1">
                    <a href="images/Robo-Soccer.PNG" data-lightbox="mygallery"><img src="images/Robo-Soccer.PNG" src="Robo-Soccer-Meraz" alt="Robo-Soccer-Meraz"/></a>
                  </div>
                    <div class="pic1">
                      <a href="images/Robo-Sumo.PNG" data-lightbox="mygallery"><img src="images/Robo-Sumo.PNG" src="Robo-Sumo-Meraz" alt="Robo-Sumo-Meraz"/></a>
                    </div>
                  </div>
                <br><br>
                    <footer id="contact-meraz">
                      <div class="contact">
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
                    <script src="animate-meraz.js"></script>
                    <script src="preloader.js"></script>
  </body>
</html>
