<?php
echo ' 
        <div class="center_title_bar">' . $podatak->get('naziv') . '</div>
          <div class="prod_box_big">
            <div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">
              <div class="product_img_big"> <a href="javascript:popImage("' . base_url('assets/images/big_pic.jpg') . '","Some Title")" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img src="'. (base_url('images/assets/' . $podatak->get('slika'))). '" alt="" border="0" /></a>
                <div class="thumbs"> <a href="#" title="header=[Thumb1] body=[&nbsp;] fade=[on]"><img src="'. base_url('images/assets/thumb1.gif'). '" alt="" border="0" /></a> <a href="#" title="header=[Thumb2] body=[&nbsp;] fade=[on]"><img src="'. base_url('images/assets/thumb1.gif'). '" alt="" border="0" /></a> <a href="#" title="header=[Thumb3] body=[&nbsp;] fade=[on]"><img src="'. base_url('images/assets/thumb1.gif'). '" alt="" border="0" /></a> </div>
              </div>
              <div class="details_big_box">
                <div class="product_title_big">' . $podatak->get('naziv') . '</div>
                <div class="specifications"> Disponibilitate: <span class="blue">In stoc</span><br />
                  Kategorija: <span class="blue">' . $podatak->get('kategorija') . '</span><br />
                  Tip transport: <span class="blue">Mic</span><br />
                  Pretul include <span class="blue">TVA</span><br />
                </div>
                ';
if ($podatak->get('akcijskacena') == 0) {
    echo '<div class="prod_price_big"><span class="price">' . $podatak->get('cena') . ' rsd </span></div>';
} else {
    echo '<div class="prod_price_big"><span class="reduce">' . $podatak->get('cena') . ' rsd </span> <span class="price">' . $podatak->get('akcijskacena') . ' rsd</span></div>';
}
echo '
                <a href="#" class="addtocart">add to cart</a> <a href="#" class="compare">compare</a> </div>
            </div>
            <div class="bottom_prod_box_big"></div>
</div>';
