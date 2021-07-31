<?php /* Smarty version Smarty-3.1.21, created on 2021-06-24 10:43:00
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\product_variations\views\product_variations\components\search_product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187249805560d43784a9e462-23060692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16653b224619807793779b2c0b73d133c7a54b60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\search_product_list.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '187249805560d43784a9e462-23060692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_features' => 0,
    'product_data' => 0,
    'products' => 0,
    'feature' => 0,
    'product' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d43784b69d02_08622212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d43784b69d02_08622212')) {function content_60d43784b69d02_08622212($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('image','name','sku','no_data','product_variations.no_available_features'));
?>
<div id="generate_product_group_form">
    <?php if ($_smarty_tpl->tpl_vars['selected_features']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_variations.find_variations",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"product_group_form_list,tools_tab_link_existing_".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true,'show_product_type_filter'=>false,'show_product_parent_filter'=>false), 0);?>

    <?php }?>

    <form action="<?php echo htmlspecialchars(fn_url("product_variations.link"), ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit" name="add_product_to_group_form" method="post">
        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />

        <div class="items-container" id="product_group_form_list">
            <?php if ($_smarty_tpl->tpl_vars['selected_features']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"product_group_form_list",'disable_history'=>true), 0);?>


                    <table width="100%" class="table table-middle table--relative">
                        <thead>
                        <tr>
                            <th class="center" width="1%">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </th>
                            <th width="5%"><span><?php echo $_smarty_tpl->__("image");?>
</span></th>
                            <th width="25%"><span><?php echo $_smarty_tpl->__("name");?>
 / <?php echo $_smarty_tpl->__("sku");?>
</span></th>
                            <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                                <th width="10%"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span></th>
                            <?php } ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                            <tr>
                                <td class="center" width="1%">
                                    <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item mrg-check" id="checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']))), 0);?>

                                </td>
                                <td>
                                    <a title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],140);?>
</a>
                                    <div class="product-list__labels">
                                        <div class="product-code">
                                            <span class="product-code__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        </div>
                                    </div>
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

                                </td>

                                <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                                    <td width="10%"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_features'][$_smarty_tpl->tpl_vars['feature']->value['feature_id']]['variant'], ENT_QUOTES, 'UTF-8');?>
</span></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"product_group_form_list",'disable_history'=>true), 0);?>

                <?php } else { ?>
                    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                <?php }?>
            <?php } else { ?>
                <div class="no-items row-fluid">
                    <div class="span8 offset2 left"><?php echo $_smarty_tpl->__("product_variations.no_available_features",array("[manage_features_href]"=>fn_url("product_features.manage")));?>
</div>
                </div>
            <?php }?>
        <!--product_group_form_list--></div>
    </form>
<!--generate_product_group_form--></div><?php }} ?>
