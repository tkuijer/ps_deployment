<?php /* Smarty version Smarty-3.1.19, created on 2015-07-28 11:55:25
         compiled from "/home/tkuijer/Projects/Prestashop_deployment_test/web/admin/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55119076655b76dad893072-60117966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f849ac41e906a1805abd9bb09ca13aa66fbe343' => 
    array (
      0 => '/home/tkuijer/Projects/Prestashop_deployment_test/web/admin/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55119076655b76dad893072-60117966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b76dad8a5461_10102189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b76dad8a5461_10102189')) {function content_55b76dad8a5461_10102189($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
