<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 10:59:59
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\age_verification\hooks\products\product_small_item.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161386474760af517f8be177-75069990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f1e1e31970b60e41e1bab34b0dcdfe4ddaaf3bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\age_verification\\hooks\\products\\product_small_item.override.tpl',
      1 => 1621936852,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '161386474760af517f8be177-75069990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af517f927347_06018763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af517f927347_06018763')) {function content_60af517f927347_06018763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_need_age_verification','verify','product_need_age_verification','verify'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_SESSION['auth']['age']&&$_smarty_tpl->tpl_vars['product']->value['need_age_verification']=="Y") {?>
    <li class="ty-template-small__item clearfix">
        <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>    
            <div class="ty-template-small__item-description">
                <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><bdi><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</bdi>
            </div>

            <div class="ty-mt-m">
                <div class="ty-age-verification__txt"><?php echo $_smarty_tpl->__("product_need_age_verification");?>
</div>
                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__secondary",'but_role'=>"text"), 0);?>

                </div>
            </div>
    </li>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/age_verification/hooks/products/product_small_item.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/age_verification/hooks/products/product_small_item.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_SESSION['auth']['age']&&$_smarty_tpl->tpl_vars['product']->value['need_age_verification']=="Y") {?>
    <li class="ty-template-small__item clearfix">
        <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>    
            <div class="ty-template-small__item-description">
                <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><bdi><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</bdi>
            </div>

            <div class="ty-mt-m">
                <div class="ty-age-verification__txt"><?php echo $_smarty_tpl->__("product_need_age_verification");?>
</div>
                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__secondary",'but_role'=>"text"), 0);?>

                </div>
            </div>
    </li>
<?php }
}?><?php }} ?>
