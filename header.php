<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Models</title>

    <?php wp_head();?>

</head>
<body>

<header>

    <div>

        <?php

        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'flex p-4'
            )
        );

        ?>

    </div>

</header>

