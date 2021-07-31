<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:34:49
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\shippings\additional_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117222860560acd2c9124208-36749129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61933384327ccf451a323ca4bebe6f6fefee916d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\shippings\\additional_settings.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '117222860560acd2c9124208-36749129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
    'id' => 0,
    'taxes' => 0,
    'tax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd2c919e546_25238928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd2c919e546_25238928')) {function content_60acd2c919e546_25238928($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.in_array.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('icon','taxes','is_address_required','use_for_free_shipping','tt_views_shippings_update_use_for_free_shipping'));
?>
<div id="content_additional_settings">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("icon");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"shipping",'image_object_type'=>"shipping",'image_pair'=>$_smarty_tpl->tpl_vars['shipping']->value['icon'],'no_detailed'=>"Y",'hide_titles'=>"Y",'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        </div>
    </div>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("taxes");?>
:</label>
        <div class="controls">
            <?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->_loop = true;
?>
                <label class="checkbox inline" for="elm_shippings_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <input type="checkbox" name="shipping_data[tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
]" id="elm_shippings_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['tax']->value['tax_id'],$_smarty_tpl->tpl_vars['shipping']->value['tax_ids'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" />
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
</label>
                <?php }
if (!$_smarty_tpl->tpl_vars['tax']->_loop) {
?>
                &ndash;
            <?php } ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_is_address_required"
        ><?php echo $_smarty_tpl->__("is_address_required");?>
:</label>
        <div class="controls">
            <input type="hidden"
                   name="shipping_data[is_address_required]"
                   value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>

            />
            <input type="checkbox"
                   name="shipping_data[is_address_required]"
                   id="is_address_required"
                   <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['is_address_required'])===null||$tmp==='' ? $_tmp2 : $tmp)===smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>
                   value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>

            />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="free_shipping"><?php echo $_smarty_tpl->__("use_for_free_shipping");?>
:</label>
        <div class="controls">
            <input type="hidden" name="shipping_data[free_shipping]" value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
 />
            <input type="checkbox" name="shipping_data[free_shipping]" id="free_shipping" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['free_shipping']==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
 />
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_shippings_update_use_for_free_shipping");?>
</p>
        </div>
    </div>
<!--content_additional_settings--></div><?php }} ?>
