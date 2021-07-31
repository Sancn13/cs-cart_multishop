<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:10:22
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\views\products\components\quick_view_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113668315960accd0ead80d9-70943049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12afe3f2e422f156541d2c02c68ba2dd253b847c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\views\\products\\components\\quick_view_link.tpl',
      1 => 1617678753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '113668315960accd0ead80d9-70943049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'product' => 0,
    'current_url' => 0,
    'block' => 0,
    'quick_view_url' => 0,
    'quick_nav_ids' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60accd0eb35600_43156863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60accd0eb35600_43156863')) {function content_60accd0eb35600_43156863($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('quick_product_viewer','quick_view','quick_product_viewer','quick_view'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-quick-view-button">
    <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("quick_view_url", null, null); ob_start(); ?>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_quick_view_url")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_quick_view_url"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo htmlspecialchars("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), ENT_QUOTES, 'UTF-8');?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_quick_view_url"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['quick_view_url']), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['type']&&$_smarty_tpl->tpl_vars['block']->value['type']!='main') {?>
        <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_plain=Y"), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['quick_nav_ids']->value) {?>
        <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(implode(",",$_smarty_tpl->tpl_vars['quick_nav_ids']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_items=".((string)$_smarty_tpl->tpl_vars['quick_nav_ids']->value)), null, 0);?>
    <?php }?>
    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['quick_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"><?php echo $_smarty_tpl->__("quick_view");?>
</a>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/quick_view_link.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/quick_view_link.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-quick-view-button">
    <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("quick_view_url", null, null); ob_start(); ?>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_quick_view_url")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_quick_view_url"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo htmlspecialchars("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), ENT_QUOTES, 'UTF-8');?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_quick_view_url"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['quick_view_url']), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['type']&&$_smarty_tpl->tpl_vars['block']->value['type']!='main') {?>
        <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_plain=Y"), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['quick_nav_ids']->value) {?>
        <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(implode(",",$_smarty_tpl->tpl_vars['quick_nav_ids']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_items=".((string)$_smarty_tpl->tpl_vars['quick_nav_ids']->value)), null, 0);?>
    <?php }?>
    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['quick_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"><?php echo $_smarty_tpl->__("quick_view");?>
</a>
</div><?php }?><?php }} ?>
