//** Group Members: Tony Nguyen, Zoha Imtiaz  */

<header class="header">  
  <div class="header__wrapper">
    <h1 class="header__heading">Art Store</h1>
    <nav class="navigation">
      <ul class="navigation__list">
        <?php

        /* write loop to generate list items as follows: 
            <li class='navigation__list-item'><a href='index.php'>Home</a></li> */
            $links = [
              'Home' => 'index.php',
              'Browse' => 'browse.php',
              'About' => 'about.php' 
              ];
                    foreach ($links as $text => $url) {
                      echo "<li class='navigation__list-item'>
                              <a href='$url'>$text</a>
                            </li>";
                        }
        ?>
      </ul>
    </nav>  
  </div>
</header> 
