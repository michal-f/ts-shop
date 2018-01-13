<?php /* Smarty version Smarty-3.1.19, created on 2018-01-13 10:52:08
         compiled from "/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1210994475a59d6c80f9411-64321866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd595433b0e1000e43b20c03f629078dde41ff9ec' => 
    array (
      0 => '/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/content.tpl',
      1 => 1515519450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1210994475a59d6c80f9411-64321866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a59d6c80fece1_09494751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d6c80fece1_09494751')) {function content_5a59d6c80fece1_09494751($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
