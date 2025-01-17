<?php

/**
 * footer.php
 *
 * PHP Version 7.0
 *
 * @category   Theme
 * @package    JQ-Theme
 * @subpackage Core
 * @author     Jordan Quinn <jordanquinn11@hotmail.co.uk>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>
        </div>
        <footer class="site-footer">
            <div class="container">
                <div class="footer-upper">
                    <h3 class="display-3 text-center text-light font-weight-bold">Ready to get started?</h3>
                    <div class="get-in-touch col-md-6">
                        <a class="btn default bg-white text-dark rounded-pill border-dark" href="/contact">Get in touch</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <?php if ( is_active_sidebar( 'footcol_1' ) ) : ?>
                            <?php dynamic_sidebar( 'footcol_1' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-4">
                        <?php if ( is_active_sidebar( 'footcol_2' ) ) : ?>
                            <?php dynamic_sidebar( 'footcol_2' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-4">
                        <?php if ( is_active_sidebar( 'footcol_3' ) ) : ?>
                            <?php dynamic_sidebar( 'footcol_3' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="something-different" style="background-image:url('<?php echo JQ_IMG_URI . 'sd-background.png'?>');">
                    <h5 class="mt-4 text-center text-light">Something a little…different<img src="<?php echo JQ_IMG_URI . 'group-38.svg' ?>" class="sd-arrow" alt="Something different arrow"/></h5>
                </div>
            </div>
        </footer>
    </body>
 </html>