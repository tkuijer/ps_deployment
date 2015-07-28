<?php /* Smarty version Smarty-3.1.19, created on 2015-07-28 13:59:07
         compiled from "/home/tkuijer/Projects/Prestashop_deployment_test/web/back-office/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59519323855b76e8b498931-10226677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a19ec2c1fd46a30d246ebb95d9cab201c60eb9b2' => 
    array (
      0 => '/home/tkuijer/Projects/Prestashop_deployment_test/web/back-office/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59519323855b76e8b498931-10226677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b76e8b4a5df4_99338960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b76e8b4a5df4_99338960')) {function content_55b76e8b4a5df4_99338960($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
