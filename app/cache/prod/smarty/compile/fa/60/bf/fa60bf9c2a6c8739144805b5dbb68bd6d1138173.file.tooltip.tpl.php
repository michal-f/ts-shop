<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 22:00:32
         compiled from "/var/www/html/pages/prestashop/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66560552659ff7bf0076815-35653244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa60bf9c2a6c8739144805b5dbb68bd6d1138173' => 
    array (
      0 => '/var/www/html/pages/prestashop/modules/welcome/views/templates/tooltip.tpl',
      1 => 1502724794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66560552659ff7bf0076815-35653244',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ff7bf008ae63_02699664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ff7bf008ae63_02699664')) {function content_59ff7bf008ae63_02699664($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
