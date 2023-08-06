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
<?php if ($this->allow_review){?>

    
    <?php foreach($this->reviews as $curr){?>
        <div class="review_item">
            <div class="review_header">
                <span class="review_user"><?php print $curr->user_name?></span>
                <?php if ($curr->mark && !$this->config->hide_product_rating){?>
                    <div class="review_mark">
                        <?php for($i= 0; $i < 5 ; $i++ ){
                            if($i < $this->product->average_rating){
                                echo "<span class='r_a'></span>";
                            }
                            else{
                                echo "<span class='r_n'></span>";
                            }
                        } ?>
                    </div>
                <?php } ?>
                <span class='review_time'><?php print \JSHelper::formatdate($curr->time, 1);?></span>
            </div>
            <div class="review_text"><?php print nl2br($curr->review)?></div>
            
        </div>
    <?php }?>
    
    <?php if ($this->display_pagination){?>
        <table class="jshop_pagination">
            <tr>
                <td><div class="pagination"><?php print $this->pagination?></div></td>
            </tr>
        </table>
    <?php }?>
    <?php if ($this->allow_review > 0){?>
		<?php JHtml::_('behavior.formvalidator'); ?>
        <span class="review_title"><?php print JText::_('JSHOP_ADD_REVIEW_PRODUCT')?></span>
        
        <form action="<?php print \JSHelper::SEFLink('index.php?option=com_jshopping&controller=product&task=reviewsave');?>" name="add_review" method="post" class="form-validate review_form">
            
            <input type="hidden" name="product_id" value="<?php print $this->product->product_id?>" />
            <input type="hidden" name="back_link" value="<?php print \JSHelper::jsFilterUrl($_SERVER['REQUEST_URI'])?>" />
		    <?php echo \JHTML::_('form.token');?>

            <div id="jshop_review_write" >
                <div class="container">
                    <div class = "row">

                        <div class = "col-lg-6 form-floating">
                            <input type="text" name="user_name" class="form-control inputbox required" id="floatingName review_user_name" placeholder="name" value="<?php print $this->user->name?>">
                            <label for="floatingName"><?php print JText::_('JSHOP_REVIEW_USER_NAME')?></label>
                        </div>

                        <div class = "col-lg-6 form-floating">
                            <input type="email" name="user_email" class="form-control inputbox validate-email required" id="floatingInput review_user_email" placeholder="name@example.com" value="<?php print $this->user->email?>">
                            <label for="floatingInput"><?php print JText::_('JSHOP_REVIEW_USER_EMAIL')?></label>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-12">
                            <label for="review_review" class="label_textarea"><?php print JText::_('JSHOP_REVIEW_REVIEW').":"?></label>
                        </div>
                        <div class = "col-12">
                            <textarea name="review" id="review_review" rows="4" cols="40" class="jshop inputbox required"></textarea>
                        </div>
                    </div>
                    <?php if (!$this->config->hide_product_rating){?>
                    <div class = "row align-items-center">
                        <div class = "col-lg-8">
                            <div class="row">
                                <div class="col-6">
                                    <span><?php print JText::_('JSHOP_REVIEW_MARK_PRODUCT')?></span>
                                </div>
                                <div class="col-6">
                                    <?php for($i=1; $i<=$this->stars_count*$this->parts_count; $i++){?>
                                    <input name="mark" type="radio" class="star {split:<?php print $this->parts_count?>}" value="<?php print $i?>" <?php if ($i==$this->stars_count*$this->parts_count){?>checked="checked"<?php }?>/>
                                <?php } ?>
                                </div>    
                            </div>
                            
                        </div>
                        <div class = "col-lg-4 mb-2">
                            <button type="submit" class="btn btn-primary button validate"><?php print JText::_('JSHOP_REVIEW_SUBMIT')?></button>
                       </div>
                    </div>
                    <?php }?>
                    <?php print $this->_tmp_product_review_before_submit;?>
                    <div class = "row">
                        
                    </div>     
                </div>
            </div>
        </form>
    <?php }else{?>
        <div class="review_text_not_login"><?php print $this->text_review?></div>
    <?php } ?>
<?php }?>
