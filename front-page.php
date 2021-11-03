<?php

$title = get_field('title');
$desc = get_field('description');
$desc2 = get_field('description2');

$image = get_field('image');
$theImage = $image['sizes']['medium'];

$linkedin = get_field('linkedin');
$github = get_field('github');
$mail = get_field('mail');

get_header();

?>

<div class="container">
    <div class="d-flex frontpage-column">
        <div class="p-2 frontpage-text-container">
            <h4> <?php echo $title ?></h4>
            <h2> <?php echo $desc ?></h2>
            <h4> <?php echo $desc2 ?></h4>
            <a class="frontpage-link" href="om">Mer Om mig ></a>
        </div>
        <div class="p-2 frontpage-image-container">
            <div>
                <img class="frontpage-image" src="<?php echo $theImage; ?>">
            </div>
            <div class="frontpage-icon-container">
                
                <?php
                if(!empty($linkedin))
                { ?>
                    <a class="bi bi-linkedin" href="<?php echo $linkedin ?>" target="_blank"></a> <?php
                }

                if(!empty($github))
                { ?>
                    <a class="bi bi-github" href="<?php echo $github ?>" target="_blank"></a> <?php
                }

                if(!empty($mail))
                { ?>
                    <a class="bi bi-mailbox2" href="mailto: <?php echo $mail ?>"></a> <?php
                } ?>
                <a class="bi bi-geo-alt-fill" href="#"></a>
            </div>
        </div>
    </div>
</div>








<?php

get_footer();