<?php /* Smarty version Smarty-3.1.19, created on 2018-01-09 18:40:46
         compiled from "/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14902521405a54fe9ebed1a5-00231573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '14902521405a54fe9ebed1a5-00231573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a54fe9ec02cf0_27970496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a54fe9ec02cf0_27970496')) {function content_5a54fe9ec02cf0_27970496($_smarty_tpl) {?>
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
