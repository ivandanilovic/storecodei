<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo '<div class="center_title_bar">Latest Products</div>';
// Promenljiva $podaci je raspakovana od strane CI, kao polje 'podaci' iz niza $data: $data['podaci']
                                    // U nasem slucaju, $podaci je niz Proizvod_model-a...
foreach ($podaci as $proizvod) {    // ...to znaci da je svaki $proizvod jedan objekat tipa Proizvod_model.
    echo '
                    <div class="prod_box">
                    <div class="top_prod_box"></div>
                    <div class="center_prod_box">
                      <div class="product_title"><a href="'. base_url('proizvod/' . $proizvod->get('id')) .'">' . $proizvod->get('naziv') . '</a></div>
                      <div class="product_img"><a href="' . base_url('proizvod/'.$proizvod->get('id')).'"><img src="'. base_url('assets/images/'.$proizvod->get('slika')) .'" alt="" border="0" /></a></div> 
                ';
    if ($proizvod->get('akcijskacena') == 0) { // Ranije: $proizvod->getAkcijskaCena()
        echo '<div class="prod_price"><span class="price">' . $proizvod->get('cena') . ' rsd </span></div>';
    } else {
        echo '<div class="prod_price"><span class="reduce">' . $proizvod->get('cena') . ' rsd </span> <span class="price">' . $proizvod->get('akcijskacena') . ' rsd</span></div>';
    }
    echo '
            </div>
            <div class="bottom_prod_box"></div>
            <div class="prod_details_tab"> <a href="Index.php?id='.$proizvod->get('id').'&action=addtocart" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a>
             ';
    echo '
             <a href="Proizvod.php?id='.$proizvod->get('id').'&&Proizvod.php?kategorija='.$proizvod->get('kategorija').'" class="prod_details">details</a> 
            
            </div> 
        </div>
        ';
}
