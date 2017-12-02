<?php /* Smarty version Smarty-3.1.19, created on 2017-12-01 21:46:36
         compiled from "/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10590508055a21bfac5b1859-94526972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bc4e474b5bb07de99504d5db35153988d885c46' => 
    array (
      0 => '/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/controllers/localization/content.tpl',
      1 => 1502724660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10590508055a21bfac5b1859-94526972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a21bfac612734_33297448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21bfac612734_33297448')) {function content_5a21bfac612734_33297448($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert("<?php echo smartyTranslate(array('s'=>'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.','d'=>'Admin.International.Notification','js'=>1),$_smarty_tpl);?>
");
		});
	});
</script>
<?php }} ?>
