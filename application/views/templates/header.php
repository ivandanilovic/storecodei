<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Electronix Store</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
    <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/iecss.css'); ?>" />
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/boxOver.js'); ?>"></script>
</head>
<body>
<div id="main_container">
    <div class="top_bar">
        <div class="top_search">
            <div class="search_text"><a href="#">Advanced Search</a></div>
            <input type="text" class="search_input" name="search" />
            <input type="image" src="<?php echo base_url('assets/images/search.gif'); ?>" class="search_bt"/>
        </div>
        <div class="languages">
            <div class="lang_text">Languages:</div>
            <a href="#" class="lang"><img src="<?php echo base_url('assets/images/en.gif'); ?>" alt="" border="0" /></a> <a href="#" class="lang"><img src="<?php echo base_url('assets/images/de.gif'); ?>" alt="" border="0" /></a> </div>
    </div>
    <div id="header">
        <div id="logo"> <a href="#"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" border="0" width="237" height="140" /></a> </div>
        <div class="oferte_content">
            <div class="top_divider"><img src="<?php echo base_url('assets/images/header_divider.png'); ?>" alt="" width="1" height="164" /></div>
            <div class="oferta">
                <div class="oferta_content"> <img src="<?php echo base_url('assets/images/laptop.png'); ?>" width="94" height="92" alt="" border="0" class="oferta_img" />
                    <div class="oferta_details">
                        <div class="oferta_title">Samsung GX 2004 LM</div>
                        <div class="oferta_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </div>
                        <a href="details.html" class="details">details</a> </div>
                </div>
                <div class="oferta_pagination"> <span class="current">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> </div>
            </div>
            <div class="top_divider"><img src="<?php echo base_url('assets/images/header_divider.png'); ?>" alt="" width="1" height="164" /></div>
        </div>
        <!-- end of oferte_content-->
    </div>
    <div id="main_content">
        <div id="menu_tab">
            <div class="left_menu_corner"></div>
            <ul class="menu">
                <li><a href="#" class="nav1"> Home</a></li>
                <li class="divider"></li>
                <li><a href="#" class="nav2">Products</a></li>
                <li class="divider"></li>
                <li><a href="#" class="nav3">Specials</a></li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo ($this->session->user ? 'user/' . $this->session->user->get('username') : 'signin'); ?>" class="nav4"><?php
                        echo ($this->session->user ? $this->session->user->get('username') : 'Sign In'); /*Ako je korisnik ulogovan, $this->session->user je objekat tipa User_model koji sigurno ima atribut 'username'.*/
                        ?></a>
                </li>
                <li class="divider"></li>
                <li><a href="#" class="nav4"><?php echo ($this->session->user ? 'Sign Out' : 'Sign Up'); ?></a></li>
                <li class="divider"></li>
                <li><a href="#" class="nav5">Shipping</a></li>
                <li class="divider"></li>
                <li><a href="contact.html" class="nav6">Contact Us</a></li>
                <li class="divider"></li>
                <li class="currencies">Currencies
                    <select>
                        <option>US Dollar</option>
                        <option>Euro</option>
                    </select>
                </li>
            </ul>
            <div class="right_menu_corner"></div>
        </div>
        <!-- end of menu tab -->
        <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
        <div class="left_content">
            <div class="title_box">Categories</div>
            <ul class="left_menu">
                <?php
                    foreach($kategorije as $index => $kategorija)
                    {
                        echo '
                                <li class="' . ($index%2==0 ? 'even' : 'odd') . '">
                                <a href=' . base_url('kategorija/' . $kategorija->get('id')) . '>' . $kategorija->get('naziv') . '</a>
                                </li>';
                    }
                ?>

            </ul>
            <div class="title_box">Special Products</div>
            <div class="border_box">
                <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                <div class="product_img"><a href="details.html"><img src="<?php echo base_url('assets/images/laptop.png'); ?>" alt="" border="0" /></a></div>
                <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
            </div>
            <div class="title_box">Newsletter</div>
            <div class="border_box">
                <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
                <a href="#" class="join">join</a> </div>
            <div class="banner_adds"> <a href="#"><img src="<?php echo base_url('assets/images/bann2.jpg'); ?>" alt="" border="0" /></a> </div>
        </div>
        <!-- end of left content -->
        <div class="center_content">
