<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 09:05:25
         compiled from "C:\xampp\htdocs\thema_prestashop\modules\leomanagewidgets\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160145670b8d5ccc526-03070703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebdecfcdc983b237107d97309f81c66ffa881e67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\thema_prestashop\\modules\\leomanagewidgets\\views\\widgets\\widget_html.tpl',
      1 => 1450144944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160145670b8d5ccc526-03070703',
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
  'unifunc' => 'content_5670b8d5cebd83_74292685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670b8d5cebd83_74292685')) {function content_5670b8d5cebd83_74292685($_smarty_tpl) {?>
 
 <?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
