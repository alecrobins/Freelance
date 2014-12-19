<?php
/*
Template Name: Terms
MultiEdit: termsTitle,introTerms,termsByNumber
*/
?>
<?php get_header(); ?>
<div class="in-wrap">
    <div id="terms">
        <div id="terms-title"><?php multieditDisplay('termsTitle'); ?></div>
        <div id="terms-intro"><?php multieditDisplay('introTerms'); ?></div>
        <div id="terms-numbers"><?php multieditDisplay('termsByNumber'); ?></div>
    </div>
</div>
<?php get_footer(); ?>

