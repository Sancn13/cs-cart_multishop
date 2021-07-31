<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:22
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\required_products\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103956025660af5cd6a17269-28600155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57dd9f62f9d6b68c2e132280eab9a8d96ff8e9a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\required_products\\hooks\\products\\tabs_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103956025660af5cd6a17269-28600155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cd6a5f774_66390045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cd6a5f774_66390045')) {function content_60af5cd6a5f774_66390045($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="required_products") {?>hidden<?php }?>" id="content_required_products">
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"required_product_ids[]",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'multiple'=>true,'view_mode'=>"external",'select_group_class'=>"btn-toolbar"), 0);?>

</div><?php }} ?>
