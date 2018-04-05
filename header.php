<html>
    <head>
        <title>Smaragdová duše</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,700" rel="stylesheet"> 
        
        <!-- CSS -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
        <!-- jQuerry -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <!-- plugin_menu -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/comic_page.js"></script>
        
    </head>
    <body>
        <div class="container">
            <header>
                <a class="logo" href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="logo_emerald_soul" />
                </a>
                <nav>
                    <ul>
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> 
                    </ul>
                </nav>
            </header>