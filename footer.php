<?php
/**
 * The footer of the theme
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 12-18-2015
 * @date 04-27-2016
 * @package WordPress
 * @subpackage mmfc-site
 * @since mmfc-site 1.0
 */
?>
  </div><!-- end #container -->
</div><!-- end .mmfc-border .mmfc-container .mmfc-height .row -->
<div id="footer-hidden" class="teal accent-4">
<div class="row">
  <div class="col s12 white-text footer">
    <b>Contact Details</b>
    <ul class="footer-contact">
      <li>Address: P. Villanueva St, R. Castillo, Agdao, Davao City</li>
      <li>Email: mmfc_edu@yahoo.com</li>
      <li>Mobile No: 0928-286-0232</li>
      <li>Mobile No: 0915-734-3509</li>
      <li>Land Line: 224-0215</li>
    </ul>
    <b>Admissions</b>
    <ul class="footer-other">
      <li><a href="mailto:mmfc_edu@yahoo.com">mmfc_edu@yahoo.com</a></li>
      <li>2216225</li>
    </ul>
    <b>Registrar</b>
    <ul class="footer-other">
      <li><a href="mailto:mmfc_edu@yahoo.com">mmfc_edu@yahoo.com</a></li>
      <li>2216225</li>
    </ul>
    <ul class="footer-term">
      <li>Copyright &copy; <?php echo current_year(); ?> |</li>
      <li><a href="<?php echo $home; ?>">mmfc</a> |</li>
      <li><a href="http://greyandgreentech.com/">G&amp;G</a></li>
    </ul>
  </div>
</div>
</div>
<div id="footer" class="teal accent-4">
  <div class="row">
    <div class="col s3 white-text footer">
      <b>Quick Navigation</b>
      <?php # list of links
        $home = get_bloginfo('wpurl');
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'items_wrap'		 => '<ul class="footer-nav white-text"><li><a href="'.$home.'">Home</a></li>%3$s<li><a href="http://www.mmfcstudents.com/">Student Portal</a></li></ul>'
          )
        );
      ?>
    </div>
    <div class="col s3 white-text footer">
      <b>Contact Details</b>
      <ul class="footer-contact">
        <li>Address: P. Villanueva St, Agdao, Davao City</li>
        <li>Email: mmfc_edu@yahoo.com</li>
        <li>Mobile No: 0928-286-0232 | 0915-734-3509</li>
        <li>Land No: 224-0215</li>
      </ul>
      <b>Admissions</b>
      <ul class="footer-other">
        <li><a href="mailto:mmfc_edu@yahoo.com">mmfc_edu@yahoo.com</a></li>
        <li>Tel: 082-221-6225</li>
      </ul>
      <b>Registrar</b>
      <ul class="footer-other">
        <li><a href="mailto:mmfc_edu@yahoo.com">mmfc_edu@yahoo.com</a></li>
        <li>082-221-6225</li>
      </ul>
    </div>
    <div class="col s6">
      <div class="row">
        <div class="col s6 white-text footer">
          <b>Other Links</b>
          <ul class="footer-other">
            <li><a href="#">Alumni</a></li>
            <li><a href="#">Extra Curricular Activities</a></li>
            <li><a href="#">Downloadables Forms</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Admission Requirements</a></li>
          </ul>
        </div>
        <div class="col s6 white-text footer">
          <b>Let's Be Friends</b>
          <div class="row">
            <div class="col s12">
              <ul class="footer-social">
                <li><p class="social"><a href=""><i class="fa fa-facebook-official fa-2x"></i> Facebook</a></p></li>
                <li><p class="social"><a href=""><i class="fa fa-google-plus-square fa-2x"></i> Google Plus</a></p></li>
                <li><p class="social"><a href=""><i class="fa fa-twitter-square fa-2x"></i> Twitter</a></p></li>
                <li><p class="social"><a href=""><i class="fa fa-youtube-play fa-2x"></i> Youtube</a></p></li>
                <li><p class="social"><a href=""><i class="fa fa-rss-square fa-2x"></i> RSS</a></p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div id="map">map</div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 white-text footer">
      <div class="col s3">
        <ul class="footer-term">
          <li><i class="fa fa-globe fa-lg"></i> Philippines - English</li>
        </ul>
      </div>
      <div class="col s3">
        <ul class="footer-term">
          <li>Everything on the website is owned by MMFC</li>
        </ul>
      </div>
      <div class="col s3">
        <ul class="footer-term">
          <li><a href="#">Privacy & Cookies</a> |</li>
          <li><a href="#">Term of Use</a> |</li>
          <li><a href="#">Trademarks</a></li>
        </ul>
      </div>
      <div class="col s3">
        <ul class="footer-term">
          <li><a href="#">Copyright © 2016</a> |</li>
          <li><a href="<?php echo $home; ?>">mmfc</a> |</li>
          <li><a href="#">sitemap</a> |</li>
          <li><a href="http://greyandgreentech.com/">Grey&amp;Green Tech. Inc</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script>
  /**
   * Custom jquery functions
   * @author Fil Joseph Elman
   */
  $(document).ready(function(){
    /**
     * This make the pop up bahaviour of the vidio in the banner
     * @source colorbox
     */
    $(".vimeo").colorbox({iframe:true, innerWidth:640, innerHeight:390});
    $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
    $('.button-collapse').sideNav();
    $(".group1").colorbox({rel:'group1'});

    /**
     * triggers auto resize of the contact us text area
     * @source http://materializecss.com/forms.html
     */
    $('#message').val('Your message here.');
    $('#message').trigger('autoresize');

    /**
     * This part here manipulates the hoveing effect in the nvaigation area
     * by removing class 'acive' in html tag li if there exist class
     * .current-menu-item and adding back in reverse.
     */
    if ($('#nav-mobile li').hasClass('current-menu-item')) {
      $('#home').removeClass('active');
    } else {
      $('#home').addClass('active');
    }
  });
</script>
<?php wp_footer(); ?>
</body>
</html>
