<?php 
/**
* @version      5.0.0 15.09.2018
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die();

$in_row=$this->config->product_count_related_in_row;
?>
<?php if (count($this->related_prod)){?>    
    <div class="jshop_list_product">
        <div class="jshop list_related">
            <div class="container">
                <div class="row">
                <?php foreach($this->related_prod as $k=>$product) : ?>        
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sblock">
                        <div class="jshop_related block_product">
                            <?php include(dirname(__FILE__)."/../".$this->folder_list_products."/".$product->template_block_product);?>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>    
            </div>
            
        </div>
    </div> 
<?php }?>