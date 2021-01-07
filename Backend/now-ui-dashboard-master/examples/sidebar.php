 <div class="sidebar" data-color="green">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
          <a href="../../../View/index.php" class="simple-text logo-mini">
              MM
          </a>
          <a href="../../../View/index.php" class="simple-text logo-normal">
              MindsMatter
          </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="dashboard.php")
            {
             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
            <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="AfficherSuivis.php")
            {

             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="AfficherSuivis.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Gestion Suivis</p>
            </a>
          </li>
            <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="AfficherQuestions.php")
            {

             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="AfficherQuestions.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Gestion Questions</p>
            </a>
          </li>
            <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="AfficherCategories.php")
            {

             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="AfficherCategories.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Gestion Categories</p>
            </a>
          </li>
          <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="AfficherForums.php")
            {

             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="AfficherForums.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Gestion Forums</p>
            </a>
          </li>
        </ul>
      </div>
    </div>