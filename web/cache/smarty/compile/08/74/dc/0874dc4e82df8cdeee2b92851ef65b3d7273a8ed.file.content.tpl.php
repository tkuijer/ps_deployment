<?php /* Smarty version Smarty-3.1.19, created on 2015-07-28 13:58:28
         compiled from "/home/tkuijer/Projects/Prestashop_deployment_test/web/back-office/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50754564755b76e64557d44-26784880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0874dc4e82df8cdeee2b92851ef65b3d7273a8ed' => 
    array (
      0 => '/home/tkuijer/Projects/Prestashop_deployment_test/web/back-office/themes/default/template/content.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50754564755b76e64557d44-26784880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b76e64560ca8_28217666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b76e64560ca8_28217666')) {function content_55b76e64560ca8_28217666($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
