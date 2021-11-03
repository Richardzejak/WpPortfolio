<?php

$title = get_field('title');
$desc = get_field('description');

$image = get_field('image');
$theImage = $image['sizes']['medium'];


get_header();

?>

<div class="container">
    <div class="d-flex about-column">
        <div class="p-2 about-text-container">
            <h2> <?php echo $title ?></h2>
            <h4> <?php echo $desc ?></h4>
        </div>
        <div class="p-2 about-image-container">
            <div>
                <img class="about-image" src="<?php echo $theImage; ?>">
            </div>
        </div>
    </div>
</div>








<?php

get_footer();