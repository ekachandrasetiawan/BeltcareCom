<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 09:05:24
         compiled from "C:\xampp\htdocs\thema_prestashop\themes\leo_hitechgame\modules\blockwishlist\blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178085670b8d4eaabd3-77483006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e38e97a3613f74d8576d36dbbbd121798dffb62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\thema_prestashop\\themes\\leo_hitechgame\\modules\\blockwishlist\\blockwishlist_button.tpl',
      1 => 1450144942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178085670b8d4eaabd3-77483006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5670b8d504aca2_00705413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670b8d504aca2_00705413')) {function content_5670b8d504aca2_00705413($_smarty_tpl) {?>


<a class="btn-tooltip WhiteRounded addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-star-o"></i> 
</a><?php }} ?>
