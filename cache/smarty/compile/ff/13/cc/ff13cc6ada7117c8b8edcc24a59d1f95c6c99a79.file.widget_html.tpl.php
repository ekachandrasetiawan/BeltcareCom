<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 09:05:26
         compiled from "C:\xampp\htdocs\thema_prestashop\themes\leo_hitechgame\modules\leomanagewidgets\views\widgets\displayfooter\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44545670b8d69604c6-95624723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff13cc6ada7117c8b8edcc24a59d1f95c6c99a79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\thema_prestashop\\themes\\leo_hitechgame\\modules\\leomanagewidgets\\views\\widgets\\displayfooter\\widget_html.tpl',
      1 => 1450144943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44545670b8d69604c6-95624723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5670b8d696ed76_57855889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670b8d696ed76_57855889')) {function content_5670b8d696ed76_57855889($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block footer-block block nobackground">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content toggle-footer">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
