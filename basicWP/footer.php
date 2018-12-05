    <div class="sidebar">
        <?php 
        // From line 26 of functions.php file
        if(is_active_sidebar('sidebar')) :
            dynamic_sidebar('sidebar');
        endif;
        ?>
    </div>
    <div class="clr"></div>
</div>

<footer>
            <div class="container">
                <p>&copy; <?php echo get_the_date('Y'); ?> - <?php echo bloginfo('name'); ?></p>
            </div>
        </footer>

        <?php wp_footer(); ?>

</body>
</html>