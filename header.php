<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'menu_class' => 'menu'
            )
        )
        ?>
    </header>
    
