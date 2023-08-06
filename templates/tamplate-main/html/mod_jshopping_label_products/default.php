<div class="label_products jshop">
<div class="container">
<div class="row">
<?php foreach($rows as $product){ ?>
	 <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 sblock">
	 <div class="block_product">
<?php 	if ($show_image && $product->image){// option modul  show_image ?>
		<div class="image">
		<a href="<?php print $product->product_link?>" class="i_link"><i class="fa-solid fa-info"></i></a>
			<div class="image_block">
<?php 		print $product->_tmp_var_image_block;?>
<?php 		if($product->label_id && $show_image_label){?>		
				<div class="product_label">
<?php 			if($product->_label_image){?>
					<img src="<?php print $product->_label_image?>" alt="<?php print htmlspecialchars($product->_label_name)?>" />
<?php			}else{?>
					<span class="label_name"><?php print $product->_label_name;?></span>
<?php			}?>						 
				</div>
<?php 		}?>
				<a href="<?php print $product->product_link?>">
					<img class="jshop_img" src="<?php print $product->image ? $product->image : $noimage;?>" alt="<?php print htmlspecialchars($product->name);?>" />
				</a>
			</div>
		</div>
<?php 	} ?>
<?php if($allow_review){?>
	<div class="review_mark">
		<?php
			for ($i=0; $i < 5; $i++){
				if($product->average_rating > $i){
					echo "<span class='r_a'></span>";
				}
				else{
					echo "<span class='r_n'></span>";
				}
			}
		//print \JSHelper::showMarkStar($product->average_rating);?>
	</div>
<?php }?>
<?php 	print $product->_tmp_var_bottom_foto;?>

		<div class="name">
            <a href="<?php print $product->product_link?>"><?php print $product->name?></a>
            <?php if ($jshopConfig->product_list_show_product_code){?><span class="jshop_code_prod">(<?php print \JText::_('JSHOP_EAN')?>: <span><?php print $product->product_ean;?></span>)</span><?php }?>
        </div>
		
<?php	if($short_description){	// option modul short_description ?>		
		 <div class="description">
            <?php print $product->short_description?>
        </div>
<?php 	} ?>

<?php 	if ($product->manufacturer->name && $manufacturer_name){// option modul manufacturer_name ?>
        <div class="manufacturer_name"><?php print \JText::_('JSHOP_MANUFACTURER');?>: <span><?php print $product->manufacturer->name?></span></div>
<?php 	}?>

<?php 	if ($product->product_quantity <=0 && !$jshopConfig->hide_text_product_not_available && $product_quantity){// option modul product_quantity?>
		<div class="not_available"><?php print \JText::_('JSHOP_PRODUCT_NOT_AVAILABLE');?></div>
<?php 	}?>
<div class="price_wrap">
<?php	if( $product_old_price){?>
<?php 		if ($product->product_old_price > 0){// option modul product_old_price?>
		<div class="old_price"><?php if ($jshopConfig->product_list_show_price_description) print \JText::_('JSHOP_OLD_PRICE').": ";?><span><?php print \JSHelper::formatprice($product->product_old_price)?></span></div>
<?php 		}?>
<?php 	print $product->_tmp_var_bottom_old_price;?>
<?php 	}?>

<?php 	if ($product->product_price_default > 0 && $jshopConfig->product_list_show_price_default && $product_price_default){ // option modul product_price_default?>
        <div class="default_price"><?php print \JText::_('JSHOP_DEFAULT_PRICE').": ";?><span><?php print \JSHelper::formatprice($product->product_price_default)?></span></div>
<?php 	}?>

<?php	if($display_price){?>
<?php 		if ($product->_display_price){// option modul display_price?>
		<div class = "jshop_price">
<?php 		if ($jshopConfig->product_list_show_price_description) print \JText::_('JSHOP_PRICE').": ";?>
<?php 		if ($product->show_price_from) print \JText::_('JSHOP_FROM')." ";?>
			<span><?php print \JSHelper::formatprice($product->product_price);?></span>
		</div>
<?php 		}?>
<?php 	print $product->_tmp_var_bottom_price;?>
<?php 	}?>
</div>
<?php 	if ($jshopConfig->show_tax_in_product && $product->tax > 0 && $show_tax_product){// option modul show_tax_product?>
		<span class="taxinfo"><?php print \JSHelper::productTaxInfo($product->tax);?></span>
<?php 	}?>

<?php 	if ($jshopConfig->show_plus_shipping_in_product && $show_plus_shipping_in_product){?>
        <span class="plusshippinginfo"><?php print sprintf(\JText::_('JSHOP_PLUS_SHIPPING'), $shippinginfo);?></span>
<?php 	}?>

<?php 	if ($product->basic_price_info['price_show'] && $basic_price_info){// option modul basic_price_info?>
		<div class="base_price"><?php print \JText::_('JSHOP_BASIC_PRICE')?>: <?php if ($product->show_price_from) print \JText::_('JSHOP_FROM');?> <span><?php print \JSHelper::formatprice($product->basic_price_info['basic_price'])?> / <?php print $product->basic_price_info['name'];?></span></div>
<?php 	}?>

<?php 	if ($jshopConfig->product_list_show_weight && $product->product_weight > 0 && $product_weight){// option modul product_weight?>
        <div class="productweight"><?php print \JText::_('JSHOP_WEIGHT')?>: <span><?php print \JSHelper::formatweight($product->product_weight)?></span></div>
<?php 	}?>

<?php 	if ($product->delivery_time != '' && $delivery_time){// option modul delivery_time?>
            <div class="deliverytime"><?php print \JText::_('JSHOP_DELIVERY_TIME')?>: <span><?php print $product->delivery_time?></span></div>
<?php 	}?>

<?php 	if (is_array($product->extra_field) && $extra_field){// option modul extra_field?>
		<div class="extra_fields">
<?php 		foreach($product->extra_field as $extra_field){?>
			<div><?php print $extra_field['name'];?>: <?php print $extra_field['value']; ?></div>
<?php 		}?>
		</div>
<?php	}?>

<?php 	if ($product->vendor && $vendor){// option modul vendor?>
        <div class="vendorinfo"><?php print \JText::_('JSHOP_VENDOR')?>: <a href="<?php print $product->vendor->products?>"><?php print $product->vendor->shop_name?></a></div>
<?php 	}?>

<?php 	if ($jshopConfig->product_list_show_qty_stock && $product_list_qty_stock){// option modul product_list_qty_stock?>
            <div class="qty_in_stock"><?php //print \JText::_('JSHOP_QTY_IN_STOCK')?>На складе: <span><?php print \JSHelper::sprintQtyInStock($product->qty_in_stock)?></div>
<?php 	}?>

<?php	if($show_button){?>
<?php 	print $product->_tmp_var_top_buttons;?>

        <div class="buttons">
<?php 		if ($product->buy_link && $show_button_buy){?>
            <a class="button_buy btn btn-success" href="<?php print $product->buy_link?>"><?php print \JText::_('JSHOP_BUY')?></a> 
<?php 		} else{?>
			<button class="button_buy btn btn-success" disabled><?php print \JText::_('JSHOP_BUY')?></button>
<?php 		}?>
<?php 		if ($show_button_detal){?>
            <a class="button_detail btn btn-primary" href="<?php print $product->product_link?>"><?php print \JText::_('JSHOP_DETAIL')?></a>
<?php		}?>
<?php	if($allow_review){	// option modul allow_review ?>
		<div class="count_commentar">
<?php 		print sprintf(\JText::_('JSHOP_X_COMENTAR'), $product->reviews_count);?>
		</div>
<?php 	} ?>

<?php 		print $product->_tmp_var_buttons;?>
        </div>
		
<?php 	print $product->_tmp_var_bottom_buttons;?>
<?php	}?>
	</div>	
	
<?php print $product->_tmp_var_end?>
</div>
<?php } ?>
</div>
</div>
</div>