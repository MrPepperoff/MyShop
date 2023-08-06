<?php 
/**
* @version      5.0.0 15.09.2018
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die();
?>
<div class="jshop list_product" id="comjshop_list_product">
<?php print $this->_tmp_list_products_html_start?>
<div class="container">
    <div class="row">
        <?php foreach ($this->rows as $k=>$product) : ?> 
            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 sblock">
                <div class="block_product">
                    <?php include(dirname(__FILE__)."/".$product->template_block_product);?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>    
</div>

<?php print $this->_tmp_list_products_html_end;?>
</div>