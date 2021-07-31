<?php /* Smarty version Smarty-3.1.21, created on 2021-06-24 10:42:58
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\product_variations\views\product_variations\components\generate_variations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46482424360d43782d84fa1-01852895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2779e5f3defe8d4bafe1be28c20f584aa6830406' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\generate_variations.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '46482424360d43782d84fa1-01852895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'group' => 0,
    'purpose_group_catalog_item' => 0,
    'purpose_group_variation_catalog_item' => 0,
    'feature_ids' => 0,
    'search_data' => 0,
    'selected_features' => 0,
    'feature' => 0,
    'features_variant_ids' => 0,
    'exists_features_variant_ids' => 0,
    'combinations' => 0,
    'is_all_combinations_active' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'combination' => 0,
    'combinations_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d437830365b4_80612416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d437830365b4_80612416')) {function content_60d437830365b4_80612416($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.generator.features.placeholder','product_variations.add_all_variants','product_variations.generator.feature_variants.placeholder','delete','product_variations.generator.warning.new_features_add','product_variations.no_available_features','product_variations.generator.table.title','features','name','sku','price','quantity'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/product_variations/tygh/backend/generator.js?ver=1.2"),$_smarty_tpl);?>


<div id="generate_variations_container">
    <div class="cm-variations-generator product-variations__generator"
        data-ca-container-id="generate_variations_container"
        data-ca-features-container-id="generate_variations_container__features_container"
        data-ca-combinations-container-id="generate_variations__combinations_container"
        data-ca-buttons-container-id="tools_tab_create_new_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-quick-add-feature-selector="#product_variations_quick_add_feature"
    >
        <?php if (!$_smarty_tpl->tpl_vars['group']->value) {?>
            <?php $_smarty_tpl->tpl_vars['purpose_group_catalog_item'] = new Smarty_variable(constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_CATALOG_ITEM"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['purpose_group_variation_catalog_item'] = new Smarty_variable(constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"), null, 0);?>

            <div class="control-toolbar">
                <div class="control-toolbar__btns cm-variations-generator__features" id="variations_generator_features">
                    <div class="control-toolbar__btns-center">
                        <?php $_smarty_tpl->tpl_vars['search_data'] = new Smarty_variable(array("product_id"=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],"purpose"=>array()), null, 0);?>
                        <?php $_smarty_tpl->createLocalArrayVariable('search_data', null, 0);
$_smarty_tpl->tpl_vars['search_data']->value["purpose"][] = $_smarty_tpl->tpl_vars['purpose_group_catalog_item']->value;?>
                        <?php $_smarty_tpl->createLocalArrayVariable('search_data', null, 0);
$_smarty_tpl->tpl_vars['search_data']->value["purpose"][] = $_smarty_tpl->tpl_vars['purpose_group_variation_catalog_item']->value;?>
                        <?php $_smarty_tpl->createLocalArrayVariable('search_data', null, 0);
$_smarty_tpl->tpl_vars['search_data']->value["exclude_feature_ids"] = $_smarty_tpl->tpl_vars['feature_ids']->value;?>

                        <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('empty_variant_text'=>$_smarty_tpl->__("product_variations.generator.features.placeholder"),'search_data'=>$_smarty_tpl->tpl_vars['search_data']->value,'multiple'=>true,'hide_selection'=>true,'close_on_select'=>false,'meta'=>"object-picker--product-variations-features control-toolbar__select",'allow_add'=>true,'create_option_to_end'=>"true"), 0);?>

                    </div>
                </div>
                <div class="control-toolbar__panel">
                    <div id="product_variations_quick_add_feature"
                        data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-target-id="generate_variations_container__features_container"
                        data-ca-inline-dialog-action-context="product_variation_generator"
                        data-ca-inline-dialog-url="<?php ob_start();
echo htmlspecialchars(http_build_query(array("category_ids"=>array_values((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['category_ids'])===null||$tmp==='' ? array() : $tmp)))), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_url("product_features.quick_add?category_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['main_category'])."&".$_tmp1), ENT_QUOTES, 'UTF-8');?>
&show_purposes=1&filter_purposes[]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purpose_group_catalog_item']->value, ENT_QUOTES, 'UTF-8');?>
&filter_purposes[]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purpose_group_variation_catalog_item']->value, ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>
            </div>
        <?php }?>

        <form action="<?php echo htmlspecialchars(fn_url("product_variations.generate"), ENT_QUOTES, 'UTF-8');?>
"
            name="generate_product_to_group_form"
            method="post"
            class="form-horizontal form-edit"
        >
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="cm-variations-generator__features-variants" id="generate_variations_container__features_container">
                <?php if ($_smarty_tpl->tpl_vars['selected_features']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                        <div class="control-group cm-variations-generator__select-feature-variations" data-ca-feautre-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <input type="hidden" name="feature_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                            <label class="control-label" for="variations_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>

                                <div class="link cm-variations-generator_add-all-variants" data-ca-feature-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
">
                                    <span class="btn-link"><?php echo $_smarty_tpl->__("product_variations.add_all_variants");?>
</span>
                                </div>
                            </label>
                            <div class="controls" id="product_feature_variations_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
">
                                <div class="product-assign-features__row">
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('empty_variant_text'=>$_smarty_tpl->__("product_variations.generator.feature_variants.placeholder"),'feature_id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'multiple'=>true,'close_on_select'=>false,'item_ids'=>(($tmp = @$_smarty_tpl->tpl_vars['features_variant_ids']->value[$_smarty_tpl->tpl_vars['feature']->value['feature_id']])===null||$tmp==='' ? array() : $tmp),'unremovable_item_ids'=>(($tmp = @$_smarty_tpl->tpl_vars['exists_features_variant_ids']->value[$_smarty_tpl->tpl_vars['feature']->value['feature_id']])===null||$tmp==='' ? array() : $tmp),'enable_permanent_placeholder'=>true,'input_name'=>"features_variants_ids[".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])."][]",'meta'=>"input-large"), 0);?>

                                    <?php if (!$_smarty_tpl->tpl_vars['group']->value) {?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"button-icon",'but_meta'=>"btn cm-variations-generator__delete-feature-variation",'but_icon'=>"icon-trash product-update-features_delete-icon",'title'=>$_smarty_tpl->__("delete")), 0);?>

                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($_smarty_tpl->tpl_vars['group']->value) {?>
                        <div class="well">
                            <?php echo $_smarty_tpl->__("product_variations.generator.warning.new_features_add");?>

                        </div>
                    <?php }?>
                <?php } else { ?>
                    <div class="no-items row-fluid">
                        <div class="span8 offset2 left"><?php echo $_smarty_tpl->__("product_variations.no_available_features",array("[manage_features_href]"=>fn_url("product_features.manage")));?>
</div>
                    </div>
                <?php }?>
            <!--generate_variations_container__features_container--></div>

            <div class="cm-variations-generator__combinations" id="generate_variations__combinations_container">
                <?php if ($_smarty_tpl->tpl_vars['combinations']->value) {?>
                    <p><?php echo $_smarty_tpl->__("product_variations.generator.table.title");?>
</p>
                    <table width="100%" class="table table-middle table--relative">
                        <thead>
                        <tr>
                            <th width="2%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"checkbox",'checked'=>$_smarty_tpl->tpl_vars['is_all_combinations_active']->value), 0);?>
</th>
                            <th width="2%">&nbsp;</th>
                            <th width="20%" class="nowrap"><span><?php echo $_smarty_tpl->__("features");?>
</span></th>
                            <th width="25%" class="nowrap"><span><?php echo $_smarty_tpl->__("name");?>
</span></th>
                            <th width="16%" class="nowrap"><?php echo $_smarty_tpl->__("sku");?>
</th>
                            <th width="13%" class="nowrap"><?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</th>
                            <th width="9%" class="nowrap"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                        </tr>
                        </thead>
                        <?php $_smarty_tpl->tpl_vars['combinations_count'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['combinations']->value), null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['combination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['combination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['combinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['combination']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['combination']->key => $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->_loop = true;
 $_smarty_tpl->tpl_vars['combination']->index++;
 $_smarty_tpl->tpl_vars['combination']->first = $_smarty_tpl->tpl_vars['combination']->index === 0;
?>
                            <?php if (!$_smarty_tpl->tpl_vars['combination']->value['parent_combination_id']) {?>
                                <?php if (!$_smarty_tpl->tpl_vars['combination']->first) {?>
                                    </tbody>
                                <?php }?>

                                <tbody class="combinations-table__parent-combination">
                                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/combination_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('combinations_count'=>$_smarty_tpl->tpl_vars['combinations_count']->value), 0);?>

                                </tbody>
                                <tbody data-ca-switch-id="product_variations_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/combination_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('combinations_count'=>$_smarty_tpl->tpl_vars['combinations_count']->value), 0);?>

                            <?php }?>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php }?>
            <!--generate_variations__combinations_container--></div>

        </form>
    </div>
<!--generate_variations_container--></div>
<?php }} ?>
