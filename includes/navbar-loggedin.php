<div class="container-l-n">

  <div class="logo-navigation">
    <a href="index.php"><img class="l" src="images/epsilon-logo.jpg"></a>
    </div>
    <div class="tog-mob">
      <label class="btn-toggle" onclick="toggleNav()" for="toggle">&#9776;</label>
      <input type="checkbox" id="toggle"  />
      <nav class="menu">
        <ul>
          <li>  <a href="index.php#home">Home</a></li>

          <li>  <a>Events  <i class="fas fa-angle-down"></i></a>
            <ul>
              <li> <a href= "meraz-events.php">Meraz</a></li>
              <li> <a href= "tech-maitry.php">Tech Maitry</a></li>
              <li> <a href= "robo-carnival.php">Robo Carnival</a></li>
            </ul>
          </li>
          <li>  <a href="projects.php">Projects</a></li>
          <li>  <a href="the-team.php">The Team</a></li>
          <li>  <a href="index.php#contact">Contact</a></li>
          <?php
          if(isset($_SESSION['admin'])){
            ?>
            <li>  <a>Dashboard <i class="fas fa-angle-down"></i></a>
            <ul>
            <li>  <a href="admin-suggestions.php">Suggestions</a> </li>
            <li>  <a href="admin-approve-list.php">Requests</a> </li>
            <li>  <a href="admin-add-components.php">Components</a> </li>
            <li>  <a href="admin-consumed-list.php">Consumed List</a> </li>
            </ul>
          </li>
            
            <?php
          }
          else{
            ?>
            <li>  <a>Actions <i class="fas fa-angle-down"></i></a>
            <ul>
            <li>  <a href="suggestions.php">Suggestion Box</a> </li>
            <li>  <a href="components-issue.php">Issue Requests</a> </li>
            </ul>
          </li>
            
            <?php
          }
           ?>
          <li>  <a href="includes/logout.inc.php">LogOut</a> </li>



          </ul>
        </nav>
      </div>


</div>
