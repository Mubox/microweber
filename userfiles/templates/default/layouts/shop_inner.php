<?php

/*

 
*/


?>
<? include THIS_TEMPLATE_DIR. "header.php"; ?>
 
<section id="content">
  <div class="container">
    <div class="row"> 
      <!-------------- Product -------------->

      <div class="span9">
        <div class="page-header1">
          <h2 class="edit"  field="title" rel="post">Product inner page</h2>
        </div>

        <div class="clearfix"> <br />
          <br />
        </div>
        <div class="row">
          <div class="span8">
            <div class="span4">
              <module type="pictures" data-content-id="<? print POST_ID ?>" template="slider" />
            </div>
            <div class="span3">

             <div class="edit"  field="content" rel="post">
              <p class="p0 element">Describe your product</p>
             </div>

              <module type="shop/cart_add" data-content-id="<? print POST_ID ?>" />
            </div>
          </div>
        </div>
      </div>
      
      <!------------ Sidebar -------------->
      <div class="span3">
        <? include_once ACTIVE_TEMPLATE_DIR. 'layouts' . DS."shop_sidebar.php"; ?>
      </div>
    </div>
  </div>
</section>
<? include THIS_TEMPLATE_DIR. "footer.php"; ?>
