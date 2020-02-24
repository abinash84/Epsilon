<?php
include "includes/header.php" ;
?>
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
   <link rel="stylesheet" href="style-the-team.css">

  <div class="the-team-banner">
        <h2><button class="btn"><a class="meet-transition" href="#founder">Meet The Team</a></button></h2>
        </div>


  <div class="importance">
    <p>
      No club can be what it is without a proper functioning efficient team.
      </p>
    </div>

  <div class="founder" id="founder">
        <br><br>
        <h1>The Founder</h1>
  </div>
        <div class="founder-info" >
          <figure class="founder-image">
            <img class ="image" src="images/team/Aayush Srivastava.jpeg" alt="Aayush-srivastava" />
            <div class="hover-name">
            <h3>Aayush <br />Srivastava</h3>
            </div>
            </figure>
            <div class="name">
              <h3>Aayush Srivastva</h3>
              <p>Founder</p>
              <p>Mechanical Department</p>
              </div>
              <div class="founder-logos">
                <ul>
                  <li>
                    <a href="https://www.facebook.com/AayushIITBh" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                    </li>
                    <li>
                      <a href="mailto:aayushs@iitbhilai.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                      </li>
                      <li>
                        <a href="https://www.instagram.com/yyyuusshhh" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                  </ul>
                  <div class="call-logo">
                    <i class="fa fa-phone" aria-hidden="true"></i> +91-9648163392
                  </div>
                </div>

          </div>
          <div class="coordinator-18">
            <h1>The Coordinator</h1>
            </div>
          <div class="founder-info">
            <figure class="founder-image">
              <img class ="image"src="images/team/Sandeep.jpg" alt="Ketha Jaya Sandeep" />
              <div class="hover-name">
              <h3>Ketha Jaya <br />Sandeep</h3>
              </div>
              </figure>
              <div class="name">
                <h3>Ketha Jaya Sandeep</h3>
                <p>Coordinator-2019</p>
                <p>Mechanical Department</p>
                </div>
                <div class="founder-logos">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/jayasandeep.ketha" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                      </li>
                      <li>
                        <a href="mailto:kethas@iitbhilai.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                        </li>
                        <li>
                          <a href="https://www.instagram.com/jayasandeepketha" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          </li>
                    </ul>
                    <div class="call-logo">
                      <i class="fa fa-phone" aria-hidden="true"></i> +91-8074841553
                    </div>
                  </div>
            </div>

            <div class="core-team">
              <h1>The Core Team</h1>
            </div>



            <div class="core-team-info-row-1">
                <div class="col-1">

              <figure class="founder-image">
                <img class ="image"src="images/team/chirag.jpg" alt="Chirag Poonia" />
                <div class="hover-name">
                <h3>Chirag <br />Poonia</h3>
                </div>
                </figure>
                <div class="name" id="chirag">
                  <h3>Chirag Poonia</h3>
                  <p>Electrical Department</p>
                  </div>
                  <div class="founder-logos">
                    <ul>
                      <li>
                        <a href="#chirag" id="fb_404" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                      </li>
                        <li>
                          <a href="mailto:chiragp@iitbhilai.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                          </li>
                          <li>
                            <a href="#chirag" id="insta_404" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          </li>
                      </ul>
                      <div class="call-logo">
                        <i class="fa fa-phone" aria-hidden="true"></i> +91-8223059993
                      </div>
                    </div>
                    </div>


                    <div class="col-2">
                    <figure class="founder-image">
                      <img class ="image"src="images/team/DPB.jpg" alt="Divya Prakash Biswas" />
                      <div class="hover-name">
                      <h3>Divya Prakash <br />Biswas</h3>
                      </div>
                      </figure>
                      <div class="name" id="db">
                        <h3>Divya Prakash Biswas</h3>
                        <p>Mechanical Department</p>
                        </div>
                        <div class="founder-logos">
                          <ul>
                            <li>
                              <a href="https://www.facebook.com/divyaprakash.biswas" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                              </li>
                              <li>
                                <a href="mailto:divyab@iitbhilai.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                                </li>
                                <li>
                                  <a href="#db" id="insta_notfound" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                  </li>
                            </ul>
                            <div class="call-logo">
                              <i class="fa fa-phone" aria-hidden="true"></i> +91-7389806660
                            </div>
                          </div>
                        </div>


                        <div class="col-3">
                          <figure class="founder-image">
                            <img class ="image"src="images/team/Himani.jpg" alt="Himani Madaan" />
                            <div class="hover-name">
                            <h3>Himani <br />Madaan</h3>
                            </div>
                            </figure>
                            <div class="name" id="himani">
                              <h3>Himani Madaan</h3>
                              <p>Mechanical Department</p>
                              </div>
                              <div class="founder-logos">
                                <ul>
                                  <li>
                                    <a href="https://www.facebook.com/himani.madaan.98" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                                    </li>
                                    <li>
                                      <a href="mailto:himanim@iitbhilai.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>

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
            <div class="core-team-info-row-2">
                <div class="col-1">

              <figure class="founder-image">
                <img class ="image"src="images/team/Rathindra.jpeg" alt="Rathindra Nath Mal" />
                <div class="hover-name">
                <h3>Rathindranath <br />Mal</h3>
                </div>
                </figure>
                <div class="name" id="rathin">
                  <h3>Rathindranath Mal</h3>
                  <p>Electrical Department</p>
                  </div>
                  <div class="founder-logos">
                    <ul>
                      <li>
                        <a href="https://www.facebook.com/rathin.mal.18" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                        </li>
                        <li>
                          <a href="mailto:rathindram@iitbhilai.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                          </li>
                          <li>
                            <a href="#rathin" id="insta-not-found"target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                      </ul>
                      <div class="call-logo">
                        <i class="fa fa-phone" aria-hidden="true"></i> +91-6291027493
                      </div>
                    </div>
                    </div>
                    <div class="col-2">
                    <figure class="founder-image">
                      <img class ="image"src="images/team/Ut.jpg" alt="Utkarsh Gupta" />
                      <div class="hover-name">
                      <h3>Utkarsh <br />Gupta</h3>
                      </div>
                      </figure>
                      <div class="name" id="utkarsh">
                        <h3>Utkarsh Gupta</h3>
                        <p>Electrical Department</p>
                        </div>
                        <div class="founder-logos">
                          <ul>
                            <li>
                              <a href="https://www.facebook.com/utkarsh.gupta.3557" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                              </li>
                              <li>
                                <a href="mailto:utkarsh@iitbhilai.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>

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
                        <div class="col-3">
                          <figure class="founder-image">
                            <img class ="image"src="images/team/vivek.jpg" alt="Vivek Singh" />
                            <div class="hover-name">
                            <h3>Vivek <br />Singh</h3>
                            </div>
                            </figure>
                            <div class="name" id="vivek">
                              <h3>Vivek Singh</h3>
                              <p>Electrical Department</p>
                              </div>
                              <div class="founder-logos">
                                <ul>
                                  <li>
                                    <a href="#vivek" id="fb_notfound" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                                    </li>
                                    <li>
                                      <a href="mailto:viveks@iitbhilai.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                                      </li>
                                      <li>
                                        <a href="https://www.instagram.com/vivek_singh_162" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                  </ul>
                                  <div class="call-logo">
                                    <i class="fa fa-phone" aria-hidden="true"></i> +91-8318361095
                                  </div>
                                </div>
                              </div>
            </div>
            <br><br><br>
            <script src="scroll_img.js"></script>
            <script src="preloader.js"></script>
            <script type="text/javascript">
            jQuery(function($){
              $('#fb_404').click(function(){
                alert("This person does not have facebook account.");
              });
            });
            jQuery(function($){
              $('#insta-not-found').click(function(){
                alert("This person does not have Instagram account.");
              });
            });
            jQuery(function($){
              $('#insta_notfound').click(function(){
                alert("This person does not have Instagram account.");
              });
            });
            jQuery(function($){
              $('#fb_notfound').click(function(){
                alert("This person does not have facebook account.");
              });
            });
            jQuery(function($){
              $('#insta_404').click(function(){
                alert("This person does not have Instagram account.");
              });
            });
            </script>
  </body>
</html>
