<?php
/*
 Template Name: Contact
 */

$fullName = get_field('fullname');
$workTitle = get_field('worktitle');

$linkedin = get_field('linkedin');
$github = get_field('github');
$mail = get_field('mail');


    get_header();

 ?>

<div clas="container">
    <div class="row contact_row">
        <div class="col-md-6 contact_column contact_left">
            <h1><?php echo $fullName ?></h1>
            <h2><?php echo $workTitle ?></h2>
        </div>
        <div class="col-md-6 contact_column">
            <h3 class="contact_link" id="mail"><?php echo $mail ?> <i class="bi bi-mailbox2 contact_bi"></i></h3>
            <h3 class="contact_link"><?php echo $linkedin ?> <i class="bi bi-linkedin contact_bi"></i></h3>
            <h3 class="contact_link"><?php echo $github ?> <i class="bi bi-github contact_bi"></i> </h3>
        </div>
    </div>

</div>
<?php

get_footer();