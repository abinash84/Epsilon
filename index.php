<?php
include "includes/header.php" ;
?>
<link rel="stylesheet" href="style.css">
 <body>



   <div class="banner">
     <div class="overlay-shade">
    <section class="banner-head" >
        <h1>The Epsilon Club</h1><br />
        <h2>IIT Bhilai</h2>
    </section>
</div>
</div>
<?php

?>
<div class="container-w-p" id="home" >
<?php
if(isset($_SESSION['user_email'])){
  echo $_SESSION['user_email'];
  include "includes/navbar-loggedin.php" ;

}
else{
  include "includes/navbar.php" ;
}
?>
<div class="welcome" >
  <br><br>
  <h1>Welcome!</h1>
</div>
<div class="paras">
  <p>Alongside academics in the college curriculum, we have different Clubs that regularly give us insights of the practical and real world corresponding to the Knowledge we acquire through out the week or so.</p><br>
  <p><b>Epsilon Club</b> is One of the Clubs of IIT Bhilai, that deals with Technical knowledge and helps develop interests of the students in Robotics. Robots are one of the most important hardware implementations in the history of technology which ease the human efforts when in use, in industries : like painting robots, assembly robots, etc. , or in a place with specific targeted use, like Drones :  in giving aerial view of a particular place, or as humanoid robots which represent the development of Artificial Intelligence.</p>
  <p>With the growth of the World, growing needs and the zeal to unlock potential of the Technology,</p>
  <p>Human Life is advancing towards it’s evolution into a futuristic and much more intelligent lifestyle,</p>
  <p>a Significant part of it being the Robots.</p>
  <p>As a part of the group of India’s leading Technology Institutes, IIT Bhilai feels the presence of the Robotics Club helps the students put forward their ideas and interest into work and grow their skills with hands on experience. Keeping aside all the projects and workshops that the club plans and conducts, it is altogether like a family that grows with a common interest. With a very friendly environment and learning atmosphere, the members of the club share knowledge, learn together and let the robotics culture Bloom.</p><br>

  <p>P.S : We May not be all Tony Stark’s kids here, But we love robotics 101110111000 (that’s 3000 in Binary)</p><br><br>
  <hr>

</div>
<div class="about" id="about">
  <h1>Imagine, Invent, Inspire</h1>
</div>

<div class="paras">
The Epsilon Club, a club under the Science & Technology Clubs, IIT Bhilai, is a prodigious & one of the most appreciated feature of this Institute. The idea of providing a common platform for students interested in Robotics, is what makes it different from other clubs. The main motive of the club is to provide a really strong platform for bringing his/her ideas on robotics ,into reality.The Club provides all the necessary assistance for the same. With the motto of <b>“IMAGINE, INVENT, INSPIRE”</b> the club came into establishment in April 2017. Our esteemed group shares a common passion for the field of Robotics.<br><br>
Special Features:
<ul>
  <li>Accessibility to all students irrespective of branches. </li>
  <li>Transparency.</li>
  <li>Common platform to promote ideas of Robotics. </li>
  <li>The E-Core: The core committee would ensure smooth running of the club & necessary assistance to others. </li>
</ul><br><br>
  <hr>
</div>

</div>

<div class="heading-web">
  <h1>Web Developers</h1>
</div>

<div class="web-developers">
  <div class="row1">


    <div class="col-1">

  <figure class="founder-image">
    <img class ="image"src="images/team/Ut.jpg" alt="Utkarsh Gupta">
    <div class="hover-name">
    <h3>Utkarsh <br />Gupta</h3>
    </div>
    </figure>
    <div class="name" id="ut">
      <h3>Utkarsh Gupta</h3>
      <p>Full Stack Developer</p>
      </div>
      <div class="founder-logos">
        <ul>
          <li>
            <a href="https://www.facebook.com/utkarsh.gupta.3557" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

          </li>
            <li>
              <a href="mailto:utkarsh@iitbhilai.ac.in" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>

              </li>
              <li>
                <a href="https://www.instagram.com/utk.ug" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </li>
          </ul>
          <div class="call-logo">
            <i class="fa fa-phone" aria-hidden="true"></i> +91-9829396756
          </div>
        </div>
        </div>


        <div class="col-2">
        <figure class="founder-image">
          <img class ="image" src="images/team/Himani.jpg" alt="Himani Madaan">
          <div class="hover-name">
          <h3>Himani <br />Madaan</h3>
          </div>
          </figure>
          <div class="name">
            <h3>Himani Madaan</h3>
            <p>Front-end Developer</p>
            </div>
            <div class="founder-logos">
              <ul>
                <li>
                  <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                  </li>
                  <li>
                    <a href="mailto:himanim@iitbhilai.ac.in" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                    </li>
                    <li>
                      <a href="https://www.instagram.com/him_ani_2601/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      </li>
                </ul>
                <div class="call-logo">
                  <i class="fa fa-phone" aria-hidden="true"></i> +91-9306532133
                </div>
              </div>
            </div>
      </div>


            <div class="row2">
                <div class="col-1">

              <figure class="founder-image">
                <img class ="image"src="images/team/blobhit.jpg" alt="Blobhit Kumar Behera">
                <div class="hover-name">
                <h3>Blobhit Kumar<br />Behera</h3>
                </div>
                </figure>
                <div class="name" id="blobhit">
                  <h3>Blobhit Kumar Behera</h3>
                  <p>Content Writer</p>
                </div>
                  <div class="founder-logos">
                    <ul>
                      <li>
                        <a href="https://www.facebook.com/blobhit" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                        </li>
                        <li>
                          <a href="mailto:blobhitb@iitbhilai.ac.in" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                          </li>
                          <li>
                            <a href="https://www.instagram.com/a.drop.of.time" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                      </ul>
                      <div class="call-logo">
                        <i class="fa fa-phone" aria-hidden="true"></i> +91-7683921621
                      </div>
                    </div>
                    </div>

           </div>

</div>



<br><br><br>

<footer>
  <div class="contact" id="contact">
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
<script src="animate-index.js"></script>
<script src="preloader.js"></script>
 </body>
 </html>
