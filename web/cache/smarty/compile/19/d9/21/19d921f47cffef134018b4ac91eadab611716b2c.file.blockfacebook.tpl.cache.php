<?php /* Smarty version Smarty-3.1.19, created on 2015-07-28 13:58:05
         compiled from "/home/tkuijer/Projects/Prestashop_deployment_test/web/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72799039555b76e4db6aec4-94375884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19d921f47cffef134018b4ac91eadab611716b2c' => 
    array (
      0 => '/home/tkuijer/Projects/Prestashop_deployment_test/web/modules/blockfacebook/blockfacebook.tpl',
      1 => 1436343218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72799039555b76e4db6aec4-94375884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b76e4db78626_22131859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b76e4db78626_22131859')) {function content_55b76e4db78626_22131859($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
