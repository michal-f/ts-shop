<?php /* Smarty version Smarty-3.1.19, created on 2018-01-13 10:52:08
         compiled from "/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16830315525a59d6c82d0185-68205909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e44a6e672ea1b980b704ca99ef173f4f40ea8534' => 
    array (
      0 => '/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1515519454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16830315525a59d6c82d0185-68205909',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a59d6c82d3fd1_87629457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d6c82d3fd1_87629457')) {function content_5a59d6c82d3fd1_87629457($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
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
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
