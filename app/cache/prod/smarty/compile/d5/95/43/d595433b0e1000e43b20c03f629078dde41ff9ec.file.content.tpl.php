<?php /* Smarty version Smarty-3.1.19, created on 2017-12-12 09:14:38
         compiled from "/var/www/html/pages/prestashop/admin872bpy797/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116404205a2f8fee755468-84424229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '116404205a2f8fee755468-84424229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2f8fee75d715_77147400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f8fee75d715_77147400')) {function content_5a2f8fee75d715_77147400($_smarty_tpl) {?>
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
