<?php /* Smarty version Smarty-3.1.21, created on 2021-06-24 10:43:00
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\product_variations\views\product_variations\find_variations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207845578860d437849065d7-03761054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '620d47cf193bc943ddd0f3379c846a9f02f425bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\find_variations.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '207845578860d437849065d7-03761054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d43784997bb8_85331100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d43784997bb8_85331100')) {function content_60d43784997bb8_85331100($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.add_variations'));
?>
<div id="content_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/search_product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<div id="tools_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_variations.add_variations"),'but_role'=>"submit-link",'but_name'=>"dispatch[product_variations.link]",'but_meta'=>"btn-primary",'but_target_form'=>"add_product_to_group_form"), 0);?>

    <?php }?>
<!--tools_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
