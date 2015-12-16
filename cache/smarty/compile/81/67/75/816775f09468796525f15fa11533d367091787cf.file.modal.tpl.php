<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 09:25:21
         compiled from "C:\xampp\htdocs\thema_prestashop\admin589odorvy\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95775670bd81c2bbe1-69804758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '816775f09468796525f15fa11533d367091787cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\thema_prestashop\\admin589odorvy\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1440038610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95775670bd81c2bbe1-69804758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5670bd81c31d25_23023572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670bd81c31d25_23023572')) {function content_5670bd81c31d25_23023572($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
