<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 22:00:31
         compiled from "/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38280559759ff7befaf2649-83972878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd595433b0e1000e43b20c03f629078dde41ff9ec' => 
    array (
      0 => '/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/content.tpl',
      1 => 1502724660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38280559759ff7befaf2649-83972878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ff7befb08d83_98617767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ff7befb08d83_98617767')) {function content_59ff7befb08d83_98617767($_smarty_tpl) {?>
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
