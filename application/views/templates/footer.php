<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</div>
<!-- end of center content -->
<div class="right_content">
    <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> 3 items <br />
            <span class="border_cart"></span> Total: <span class="price">350$</span> </div>
        <div class="cart_icon"><a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url('assets/images/shoppingcart.png'); ?>" alt="" width="48" height="48" border="0" /></a></div>
    </div>
    <div class="title_box">What�s new</div>
    <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="<?php echo base_url('assets/images/p2.gif'); ?>" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
    </div>
    <div class="title_box">Manufacturers</div>
    <ul class="left_menu">

        <?php
        foreach($brendovi as $index => $brend)
        {
            echo '
                                <li class="' . ($index%2==0 ? 'even' : 'odd') . '">
                                <a href=' . base_url('brend/' . $brend->get('id')) . '>' . $brend->get('naziv') . '</a>
                                </li>';
        }
        ?>

    </ul>
    <div class="banner_adds"> <a href="#"><img src="<?php echo base_url('assets/images/bann1.jpg'); ?>" alt="" border="0" /></a> </div>
</div>
<!-- end of right content -->
</div>
<!-- end of main content -->
<div class="footer">
    <div class="left_footer"> <img src="<?php echo base_url('assets/images/footer_logo.png'); ?>" alt="" width="170" height="49"/> </div>
    <div class="center_footer"> Template name. All Rights Reserved 2008<br />
        <a href="http://csscreme.com"><img src="<?php echo base_url('assets/images/csscreme.jpg'); ?>" alt="csscreme" border="0" /></a><br />
        <img src="<?php echo base_url('assets/images/payment.gif'); ?>" alt="" /> </div>
    <div class="right_footer"> <a href="#">home</a> <a href="#">about</a> <a href="#">sitemap</a> <a href="#">rss</a> <a href="contact.html">contact us</a> </div>
</div>
</div>
<!-- end of main_container -->
</body>
</html>
