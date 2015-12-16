<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 09:28:22
         compiled from "C:\xampp\htdocs\thema_prestashop\themes\leo_hitechgame\modules\productcomments\\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169145670be361492e2-51810762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc6b179e6a6a77a045fe83039ad360fd9e5b776b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\thema_prestashop\\themes\\leo_hitechgame\\modules\\productcomments\\\\tab.tpl',
      1 => 1450144943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169145670be361492e2-51810762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5670be36158e32_51149734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670be36158e32_51149734')) {function content_5670be36158e32_51149734($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value) {?>
    <li><a href="#idTab5" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
<?php } else { ?>
    <h3 id="#idTab5" class="idTabHrefShort page-subheading"><span class="title"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</span></h3>
<?php }?><?php }} ?>
