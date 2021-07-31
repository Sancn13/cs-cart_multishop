<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:23
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\products\components\picker\item_extended.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79577628060af5cd77b8c16-53160543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '316d0d19442c0d8b43e07ed81cae043c50649145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\products\\components\\picker\\item_extended.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '79577628060af5cd77b8c16-53160543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cd7819756_31788340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cd7819756_31788340')) {function content_60af5cd7819756_31788340($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?>
    ${data.image && data.image.image_path
    ? `<img src="${data.image.image_path}" width="${data.image.width}" height="${data.image.height}" alt="${data.image.alt}" class="object-picker__products-image"/>`
        : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: ${data.image_width}px; height: ${data.image_height}px;"> <i class="glyph-image"></i></div>`
    }

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <?php if ($_smarty_tpl->tpl_vars['type']->value=="result") {?>
            <div class="object-picker__name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.product} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
        <?php } else { ?>
            <a href="${data.url}" class="object-picker__products-name-content object-picker__products-name-content--link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.product} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
    </div>
    <div class="object-picker__products-labels">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:object_picker_products_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:object_picker_products_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="object-picker__products-product-code">
                <span class="object-picker__products-product-code-label">${data.product_code}</span>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:object_picker_products_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<div class="object-picker__products-price">
    ${data.price_formatted}
</div><?php }} ?>
