<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 09:28:21
         compiled from "C:\xampp\htdocs\thema_prestashop\modules\socialsharing\views\templates\hook\socialsharing_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9685670be351e3e32-40236825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a972aa37aa6276f219aed7c4e993e1a4cfe630ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\thema_prestashop\\modules\\socialsharing\\views\\templates\\hook\\socialsharing_header.tpl',
      1 => 1440038614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9685670be351e3e32-40236825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
    'meta_description' => 0,
    'link_rewrite' => 0,
    'cover' => 0,
    'link' => 0,
    'pretax_price' => 0,
    'currency' => 0,
    'price' => 0,
    'weight' => 0,
    'weight_unit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5670be352a1339_18277262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670be352a1339_18277262')) {function content_5670be352a1339_18277262($_smarty_tpl) {?>
<meta property="og:type" content="product" /> 
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['request']->value;?>
" /> 
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" /> 
<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['link_rewrite']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value['id_image'])) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['link_rewrite']->value,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />
<?php }?>
<meta property="product:pretax_price:amount" content="<?php echo $_smarty_tpl->tpl_vars['pretax_price']->value;?>
" /> 
<meta property="product:pretax_price:currency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" /> 
<meta property="product:price:amount" content="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" /> 
<meta property="product:price:currency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" /> 
<?php if (isset($_smarty_tpl->tpl_vars['weight']->value)&&($_smarty_tpl->tpl_vars['weight']->value!=0)) {?>
<meta property="product:weight:value" content="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" /> 
<meta property="product:weight:units" content="<?php echo $_smarty_tpl->tpl_vars['weight_unit']->value;?>
" /> 
<?php }?>
<?php }} ?>
