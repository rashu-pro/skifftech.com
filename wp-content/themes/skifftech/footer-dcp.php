<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skifftech
 */

$templateDirectoryUri = get_template_directory_uri();
?>

<!-- Footer-->
<footer class="bg-blue-light">
    <div class="footer-top">
        <div class="container px-4">
            <div class="text-center">
                <img src="<?php echo $templateDirectoryUri ?>/images/dcp_logo_footer.png">
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p class="m-0 text-center text-white">Copyright © 2022 DCP Online Control</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<!-- End / footer -->
<!-- Vendors-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    let head_foot_height = $('#mainNav').height() + $('footer').height(),
        min_height = "calc(100vh - " + head_foot_height + "px)";
    $('.page-wrapper').css('min-height', min_height);
    $('.page-wrapper').css('padding-top', $('#mainNav').outerHeight()+"px");
</script>

<?php wp_footer(); ?>

</body>
</html>
