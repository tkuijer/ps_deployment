<?php /* Smarty version Smarty-3.1.19, created on 2015-07-28 13:58:06
         compiled from "/home/tkuijer/Projects/Prestashop_deployment_test/web/modules/blockspecials/views/templates/hook/blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17641864155b76e4e4d60f6-23382002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11796533aa0dba694bd1dcd070f3225035c94f4c' => 
    array (
      0 => '/home/tkuijer/Projects/Prestashop_deployment_test/web/modules/blockspecials/views/templates/hook/blockspecials-home.tpl',
      1 => 1436343240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17641864155b76e4e4d60f6-23382002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b76e4e4e7521_76631110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b76e4e4e7521_76631110')) {function content_55b76e4e4e7521_76631110($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
