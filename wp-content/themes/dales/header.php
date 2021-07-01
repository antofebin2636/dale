<?php
/* ------------------------------------------------------
| 🗣 Header - Header
|--------------------------------------------------------
Use this to create your global site header, also including a 'main' wrapper which is finished in footer.php
---------------------------------------------------------
*/
?>
<?php include( locate_template('head.php') ); ?>


<header class="Header">
    <?php get_template_part('snippets/header/banner'); ?>
</header>
<main role="main">