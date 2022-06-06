<?php

/**
 * Template header
 * Ve template est intégré dans tous les modèles de thème
 * @link : https://developer.wordpress.org/themes
 * @package : 31w-hnn
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();
    ?>
</head>

<body>

    <section class="site">
        <header class="site__header">
            <section class="site__branding">
                31w Hanane
            </section>
            <nav class="site__navigation">
                Menu
            </nav>
        </header>