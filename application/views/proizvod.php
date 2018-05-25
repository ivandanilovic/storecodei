<?php
echo ' 
        <div class="center_title_bar">' . $proizvod->get('naziv') . '</div>
          <div class="prod_box_big">
            <div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">
              <div class="product_img_big"> <a href="javascript:popImage("' . base_url('assets/images/big_pic.jpg') . '","Some Title")" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img src="'. (base_url('assets/images/' . $proizvod->get('slika'))). '" alt="" border="0" /></a>
                <div class="thumbs"> <a href="#" title="header=[Thumb1] body=[&nbsp;] fade=[on]"><img src="'. base_url('assets/images/thumb1.gif'). '" alt="" border="0" /></a> <a href="#" title="header=[Thumb2] body=[&nbsp;] fade=[on]"><img src="'. base_url('assets/images/thumb1.gif'). '" alt="" border="0" /></a> <a href="#" title="header=[Thumb3] body=[&nbsp;] fade=[on]"><img src="'. base_url('assets/images/thumb1.gif'). '" alt="" border="0" /></a> </div>
              </div>
              <div class="details_big_box">
                <div class="product_title_big">' . $proizvod->get('naziv') . '</div>
                <div class="specifications"> Disponibilitate: <span class="blue">In stoc</span><br />
                  Kategorija: <span class="blue">' . $proizvod->get('kategorija') . '</span><br />
                  Tip transport: <span class="blue">Mic</span><br />
                  Pretul include <span class="blue">TVA</span><br />
                </div>
                ';
if ($proizvod->get('akcijskacena') == 0) {
    echo '<div class="prod_price_big"><span class="price">' . $proizvod->get('cena') . ' rsd </span></div>';
} else {
    echo '<div class="prod_price_big"><span class="reduce">' . $proizvod->get('cena') . ' rsd </span> <span class="price">' . $proizvod->get('akcijskacena') . ' rsd</span></div>';
}
echo '
                <a href="#" class="addtocart">add to cart</a> <a href="#" class="compare">compare</a> </div>
            </div>
            <div class="bottom_prod_box_big"></div>
</div>
<div class="center_title_bar">Similar products</div>';

foreach ($slicni_proizvodi as $slican_proizvod) {
    echo '
              <div class="prod_box">
                <div class="top_prod_box"></div>
                <div class="center_prod_box">
                  <div class="product_title"><a href="details.html">'.$slican_proizvod->get('naziv').'</a></div>
                  <div class="product_img"><a href="details.html"><img src="' . base_url('assets/images/'.$slican_proizvod->get('slika')) . '" alt="" border="0" /></a></div>
                  ';
    if ($slican_proizvod->get('akcijskacena') == 0) {
        echo '<div class="prod_price"><span class="price">' . $slican_proizvod->get('cena') . ' rsd </span></div>';
    } else {
        echo '<div class="prod_price"><span class="reduce">' . $slican_proizvod->get('cena') . ' rsd </span> <span class="price">' . $slican_proizvod->get('akcijskacena') . ' rsd</span></div>';
    }
    echo '
                </div>
                <div class="bottom_prod_box"></div>
                <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="' . base_url('assets/images/cart.gif') .'" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="'. base_url('assets/images/favs.gif') .'" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="'. base_url('assets/images/favorites.gif') .'" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
              </div>
              
            ';
}
?>
<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=44.8152453,20.422597&amp;spn=56.506174,79.013672&amp;t=m&amp;z=12&amp;output=embed"></iframe>

