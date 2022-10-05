<!DOCTYPE html>
<html>

        <head>
            
        <?php wp_head();?>

        

</head>

<body <?php body_class();?>>


<header class="sticky-top">


<div class="container">
    <?php wp_nav_menu  (


        array(

                'theme_location' => 'top-menu' ,
                'menu_class' => 'navigation'

        )

    );?>
</div>    

</header>

<div class="container">
      <h1 class="logo"></h1>

      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>