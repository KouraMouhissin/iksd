<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and closing of the #main div.
 *
 * @package    ThemeGrill
 * @subpackage Spacious
 * @since      Spacious 1.0
 */
?>

</div><!-- .inner-wrap -->
</div><!-- #main -->
<?php do_action( 'spacious_before_footer' ); ?>

<footer id="colophon" class="clearfix">
	
	<?php get_sidebar( 'footer' ); ?>
	<div class="footer-container w-100">
        <div class="top-container w-100">
            <div class="footer-item w-100">
                <div class="item-title">
                    <h3>Qui sommes-nous?</h3>
                </div>
                <div class="item-body">
                    IKSD Consulting est une entreprise de services du numérique, spécialisée dans les solutions IT.
                </div>
            </div>
            <div class="footer-item w-100">
                <div class="item-title">
                    <h3>Liens utiles</h3>
                </div>
                <div class="item-body">
                    <ul>
                        <li><a href="/index.php/nos-services/">Services</a></li>
                        <li><a href="/index.php/nos-solutions/">Solutions</a></li>
                        <li><a href="/index.php/nos-services/formation/">Formation</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-item w-100">
                <div class="item-title">
                    <h3>Contact</h3>
                </div>
                <div class="item-body">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <img width="40" alt="location icon" src="https://iksd-consulting.com/wp-content/uploads/2022/09/broche-de-localisation.png">
                        </div>
                        <div class="contact-text">Faladié Sema</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <img width="40" alt="location icon" src="https://iksd-consulting.com/wp-content/uploads/2022/09/telephone.png">
                        </div>
                        <div class="contact-text">+223 44 38 12 44</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <img width="40" alt="location icon" src="https://iksd-consulting.com/wp-content/uploads/2022/08/iksd.jpg">
                        </div>
                        <div class="contact-text">
							<a href="mailto:iksd.consulting@gmail.com">iksd.consulting@gmail.com</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-container">
            <div class="footer-item copyright">
                Copyright © IKSD Consulting 2014 - <?=date('Y')?>
            </div>
            <div class="footer-item social">
                <a href="https://www.facebook.com/iksdconsulting" target="_blank" class="social-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/1200px-2021_Facebook_icon.svg.png" alt="Facebook">
                </a>
				<a href="https://www.linkedin.com/company/iksd-consulting/" target="_blank" class="social-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/800px-LinkedIn_logo_initials.png" alt="Twitter">
                </a>
				<a href="https://www.facebook.com/iksdconsulting" target="_blank" class="social-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/WhatsApp_logo-color-vertical.svg/480px-WhatsApp_logo-color-vertical.svg.png" alt="WhatsApp">
                </a>
            </div>
        </div>
    </div>
</footer>
<a href="#masthead" id="scroll-up"></a>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="/wp-content/themes/spacious/js/script.js"></script>
</body>
</html>
