<?php /*%%SmartyHeaderCode:106404065155b76e540f6ab6-32602226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6f1d01ae6fd4d205594de7c9a38a7bc0ca84fb9' => 
    array (
      0 => '/home/tkuijer/Projects/Prestashop_deployment_test/web/themes/default-bootstrap/modules/blockspecials/blockspecials.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106404065155b76e540f6ab6-32602226',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b76e54190306_68995121',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b76e54190306_68995121')) {function content_55b76e54190306_68995121($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost:8080/index.php?controller=prices-drop" title="Specials">
            Specials
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost:8080/index.php?id_product=7&amp;controller=product&amp;id_lang=1">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost:8080/img/p/2/0/20-small_default.jpg" 
                    alt="" 
                    title="Printed Chiffon Dress" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost:8080/index.php?id_product=7&amp;controller=product&amp;id_lang=1" title="Printed Chiffon Dress">
                            Printed Chiffon Dress
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Printed chiffon knee length dress...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    19,85 €                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    24,81 €                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost:8080/index.php?controller=prices-drop" 
            title="All specials">
                <span>All specials<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
