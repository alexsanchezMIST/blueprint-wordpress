<?php

get_header();

?>

<main id="primary" class="site-main">
    <section id="hero" class="section py-6">
        <div class="container">
            <div class="intro--wrapper">
                <h1 class="hero--heading mb-2">Contact Me</h1>
                <p class="hero--subheading mb-4">I want to make it as easy as possible to get in touch with me. Either fill out the form below or click on the button to email me directly, and I'll get back to you ASAP.</p>
                <a href="mailto:jeff@morethaneng.com" class="btn btn--secondary"><span class="icon mail--icon"></span>Send me an email</a>
            </div>
        </div>
    </section>

    <section id="search" class="section py-2">
        <div class="container">
            <div class="contact-form--wrapper">
                <h2 class="contact--heading">Ask me a question ...</h2>
                    <?php echo do_shortcode("[contact-form-7 id='3507' title='Contact form 1']"); ?>
            </div>
        </div>
    </section>

    <?php the_content(); ?>

</main>

<?php
get_footer();