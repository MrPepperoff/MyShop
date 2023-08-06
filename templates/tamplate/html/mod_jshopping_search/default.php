<script type = "text/javascript">
function isEmptyValue(value){
    var pattern = /\S/;
    return ret = (pattern.test(value)) ? (true) : (false);
}
</script>
<form class="form-inline mod-shop-search" name = "searchForm" method = "post" action="<?php print \JSHelper::SEFLink("index.php?option=com_jshopping&controller=search&task=result", 1);?>" onsubmit = "return isEmptyValue(jQuery('#jshop_search').val())">
<input type="hidden" name="setsearchdata" value="1">
<input type = "hidden" name = "category_id" value = "<?php print $category_id?>" />
<input type = "hidden" name = "search_type" value = "<?php print $search_type;?>" />
<input type = "text" class = "inputbox input-small" placeholder="Введите название товара" name = "search" id = "jshop_search" value = "<?php print htmlspecialchars($search)?>" />
<button class = "button btn btn-primary search__button">
    <i class="fa-solid fa-magnifying-glass"></i>
</button>
<?php if ($adv_search) {?>
<?php } ?>
</form>