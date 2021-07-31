<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:11
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\products\update_detailed_images.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160084800760af5ccb7c2976-57727909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ea2a1c1f74b3b05b94af6bdca29ac0214c433f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\update_detailed_images.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '160084800760af5ccb7c2976-57727909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'product_type' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5ccb815594_85434428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5ccb815594_85434428')) {function content_60af5ccb815594_85434428($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('images'));
?>
<?php if (($_smarty_tpl->tpl_vars['product_data']->value['master_product_id']&&!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("detailed_image"))||($_smarty_tpl->tpl_vars['product_data']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&isset($_smarty_tpl->tpl_vars['product_data']->value['company_id'])&&$_smarty_tpl->tpl_vars['product_data']->value['company_id']==0)) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/form_file_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('existing_pairs'=>($_smarty_tpl->tpl_vars['product_data']->value['main_pair'] ? array($_smarty_tpl->tpl_vars['product_data']->value['main_pair']) : array())+(($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['image_pairs'])===null||$tmp==='' ? array() : $tmp),'file_name'=>"file",'image_pair_types'=>array('N'=>'product_add_additional_image','M'=>'product_main_image','A'=>'product_additional_image'),'allow_update_files'=>false), 0);?>

        </div>
    </div>
<?php }?>
<?php }} ?>
