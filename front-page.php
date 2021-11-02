<?php

$image = get_field('image');
$theImage = $image['sizes']['medium'];

get_header();

?>

<div class="container">
    <div class="d-flex frontpage-column">
        <div class="p-2 frontpage-text-container">
            <h4> Hej mitt namn är Richard Zejak.</h4>
            <h2> Du kommer med idéer jag, färdigställer dom.</h2>
            <h4> Jag är en svensk webbutvecklare som älskar att vara kreativ.</h4>
            <a class="frontpage-link" href="om">Mer Om mig ></a>
        </div>
        <div class="p-2 frontpage-image-container">
            <img class="frontpage-image" src="<?php echo $theImage; ?>">
            <a class="bi bi-linkedin" href="#" target="_blank"></a>
            <a class="bi bi-github" href="#" target="_blank"></a>
            <a class="bi bi-mailbox2" href="#"></a>
            <a class="bi bi-geo-alt-fill" href="#"></a>
        </div>
    </div>
</div>








<?php

get_footer();