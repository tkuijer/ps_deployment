<?php /*%%SmartyHeaderCode:19021445255b76e53e41e92-60537553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0d2f8aedef6498271c9b27417148c60ca16d768' => 
    array (
      0 => '/home/tkuijer/Projects/Prestashop_deployment_test/web/themes/default-bootstrap/modules/blockcategories/blockcategories.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
    '58fd9395e6e6e110ae2abe00551953c571f28fd6' => 
    array (
      0 => '/home/tkuijer/Projects/Prestashop_deployment_test/web/themes/default-bootstrap/modules/blockcategories/category-tree-branch.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19021445255b76e53e41e92-60537553',
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b76e53e81f23_13779793',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b76e53e81f23_13779793')) {function content_55b76e53e81f23_13779793($_smarty_tpl) {?><!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h2 class="title_block">
					Dresses
			</h2>
	<div class="block_content">
		<ul class="tree dhtml">
												
<li >
	<a 
	href="http://localhost:8080/index.php?id_category=9&amp;controller=category&amp;id_lang=1" title="You are looking for a dress for every day? Take a look at 
 our selection of dresses to find one that suits you.">
		Casual Dresses
	</a>
	</li>

																
<li >
	<a 
	href="http://localhost:8080/index.php?id_category=10&amp;controller=category&amp;id_lang=1" title="Browse our different dresses to choose the perfect dress for an unforgettable evening!">
		Evening Dresses
	</a>
	</li>

																
<li class="last">
	<a 
	href="http://localhost:8080/index.php?id_category=11&amp;controller=category&amp;id_lang=1" title="Short dress, long dress, silk dress, printed dress, you will find the perfect dress for summer.">
		Summer Dresses
	</a>
	</li>

									</ul>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>
