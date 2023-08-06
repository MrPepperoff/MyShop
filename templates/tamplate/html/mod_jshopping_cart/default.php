<div id = "jshop_module_cart">
  <a href = "<?php print \JSHelper::SEFLink('index.php?option=com_jshopping&controller=cart&task=view', 1)?>">
    <table width = "100%" class="cart__info">
      <tr>
          <td>
            <span id = "jshop_summ_product " ><i class="fa-solid fa-cart-shopping cart__info__text"></i> Товаров: </span>
          </td>
          <td>
            <span id = "jshop_quantity_products" class="cart__info__number-of-products"><?php print $cart->count_product?></span>
          </td>   
      </tr>
    </table>
  </a>
</div>

<!-- <tr>
    <td colspan="3" align="right">
      <a href = "<?php // print \JSHelper::SEFLink('index.php?option=com_jshopping&controller=cart&task=view', 1)?>"><?php //print \JText::_('GO_TO_CART')?></a>
    </td> 
</tr>-->