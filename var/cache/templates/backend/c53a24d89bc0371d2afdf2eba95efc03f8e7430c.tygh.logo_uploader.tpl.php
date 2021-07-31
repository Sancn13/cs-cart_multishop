<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 12:19:14
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\paypal\settings\logo_uploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6082306860bc931213f0a0-93697787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c53a24d89bc0371d2afdf2eba95efc03f8e7430c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\paypal\\settings\\logo_uploader.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6082306860bc931213f0a0-93697787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_storefront_id' => 0,
    'app' => 0,
    'is_update_for_all_available' => 0,
    'pp_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc93121f5b68_37364043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc93121f5b68_37364043')) {function content_60bc93121f5b68_37364043($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('paypal_logo','ttc_paypal_logo'));
?>
<?php $_smarty_tpl->tpl_vars['is_update_for_all_available'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['selected_storefront_id']->value&&$_smarty_tpl->tpl_vars['app']->value['storefront.repository']->getCount(array('cache'=>true))>1, null, 0);?>
<div id="paypal_logo_uploader" class="in collapse <?php if ($_smarty_tpl->tpl_vars['is_update_for_all_available']->value) {?>disable-overlay-wrap<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['is_update_for_all_available']->value) {?>
        <div class="disable-overlay" id="pp_logo_disable_overlay"></div>
    <?php }?>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_logo"><?php echo $_smarty_tpl->__("paypal_logo");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"paypal_logo",'image_object_type'=>"paypal_logo",'image_pair'=>$_smarty_tpl->tpl_vars['pp_settings']->value['main_pair'],'no_thumbnail'=>true,'hide_alt'=>true), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['is_update_for_all_available']->value) {?>
                <div class="right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>true,'object_id'=>"pp_settings",'name'=>"pp_settings[pp_logo_update_all_storefronts]",'hide_element'=>"paypal_logo_uploader"), 0);?>

                </div>
            <?php }?>
            <p class="muted description"><?php echo $_smarty_tpl->__("ttc_paypal_logo");?>
</p>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        $('.cm-update-for-all-icon[data-ca-hide-id=paypal_logo_uploader]').on('click', function () {
            $('#paypal_logo_uploader').toggleClass('disable-overlay-wrap');
            $('#pp_logo_disable_overlay').toggleClass('disable-overlay');
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
