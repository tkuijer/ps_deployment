<?php /*%%SmartyHeaderCode:142815568455b76e541bb2a6-62133408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b0df975b5f5ce40a8c9cafc60d02ed50aaad17b' => 
    array (
      0 => '/home/tkuijer/Projects/Prestashop_deployment_test/web/themes/default-bootstrap/modules/blockstore/blockstore.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142815568455b76e541bb2a6-62133408',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b76e541f1237_87484617',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b76e541f1237_87484617')) {function content_55b76e541f1237_87484617($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://localhost:8080/index.php?controller=stores" title="Our stores">
			Our stores
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost:8080/index.php?controller=stores" title="Our stores">
				<img class="img-responsive" src="http://localhost:8080/modules/blockstore/store.jpg" alt="Our stores" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost:8080/index.php?controller=stores" 
			title="Our stores">
				<span>Discover our stores<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
