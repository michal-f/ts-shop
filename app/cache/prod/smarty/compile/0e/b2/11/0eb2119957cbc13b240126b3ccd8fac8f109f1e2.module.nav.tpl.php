<?php /* Smarty version Smarty-3.1.19, created on 2017-12-02 01:31:31
         compiled from "module:ps_contactinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5906370505a21f4634a10c9-94840530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfo/nav.tpl',
      1 => 1502724660,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '5906370505a21f4634a10c9-94840530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a21f4634cef93_10951225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21f4634cef93_10951225')) {function content_5a21f4634cef93_10951225($_smarty_tpl) {?>
<div id="_desktop_contact_link">
  <div id="contact-link">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      
      <?php echo smartyTranslate(array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
    <?php }?>
  </div>
</div>
<?php }} ?>
