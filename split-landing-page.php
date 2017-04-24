<?php
/**
  * Template name: Split Style Landing Page
  */

$wplp_color_background = "#212121";
$wplp_color_text       = "#f5f5f5";
$wplp_color_accent     = "#d32f2f";
$wplp_font_title       = "Playfair Display";
$wplp_font_body        = "Raleway";

$wplp_fonts = "https://fonts.googleapis.com/css?family=" . 
    str_replace(' ', '+', $wplp_font_title) . "|" .
    str_replace(' ', '+', $wplp_font_body);

?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>
        <?php echo get_the_title(); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $wplp_fonts; ?>" />
    <style>
    body {
        font-family: '<?php echo $wplp_font_body; ?>', serif;
        background: <?php echo $wplp_color_background; ?>;
        color: <?php echo $wplp_color_text?>;
        font-size: 20px;
    }
    h1,h2,h3,h4 {
        font-family: '<?php echo $wplp_font_title; ?>', sans-serif;
        font-size: 72px;
    }
    .btn-primary,
    .btn-primary:active,
    .btn-primary:focus {
        background-color: <?php echo $wplp_color_accent; ?>;
        border: none;
        opacity: 0.9;
        transition: 0.3s;
    }
    .btn-primary:hover {
        background-color: <?php echo $wplp_color_accent; ?>;
        border: none;
        opacity: 1;
        transition: 0.5s;
    }
    .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:         flex;
        flex-wrap: wrap;
    }
    .row > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
    #wplp-content {
        padding: 20px 20px 20px 36px;
    }
    #wplp-content h1,h2,h3,h4 {
        margin-bottom: 36px;
    }
    #wplp-image {
        min-height: 100vh;
        background: <?php echo $wplp_color_accent; ?> url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>') no-repeat center center;
        background-attachment: fixed;
    }
    #wplp-pane {
        background: <?php echo $wplp_color_background; ?>;
        opacity: 0.75;
        border: none;
        margin-top: 10vh;
    }
    #wplp-pane h1,
    #wplp-pane h2,
    #wplp-pane h3,
    #wplp-pane h4 {
        font-size: 36px;
    }
    #wplp-pane * {
        color: <?php echo $wplp_color_text; ?>;
    }

    </style>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div id="wplp-image" class="col-sm-6">
                <div id="wplp-pane" class="panel panel-default visible-xs">
                    <div class="panel-body">
                        <!-- CONTENT -->
                        <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php
                            endwhile;
                            wp_reset_query();
                        ?>
                        <!-- END CONTENT -->
                    </div>
                </div>
            </div>
            <div id="wplp-content" class="col-sm-6 hidden-xs">
                <!-- CONTENT -->
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>
    
</body>
</html>