<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 09:05:20
         compiled from "C:\xampp\htdocs\thema_prestashop\themes\leo_hitechgame\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163195670b8d0bdec54-73919076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ee5b2b3f5a10d8079854a0070eab5cb99669148' => 
    array (
      0 => 'C:\\xampp\\htdocs\\thema_prestashop\\themes\\leo_hitechgame\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1450146499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163195670b8d0bdec54-73919076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5670b8d0eaf9e9_65697233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670b8d0eaf9e9_65697233')) {function content_5670b8d0eaf9e9_65697233($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
		<div class="cat-title"><i class="fa fa-navicon"></i></div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

		</ul>
			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
			<div class="sf-search noBack">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
			</div>
			<?php }?>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
