<?php /* Smarty version Smarty-3.1.21, created on 2021-06-19 12:59:08
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_rating\hooks\vendor_plans\details_tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123496454460cdbfec5dfca0-66433834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950a9785bf0c3894bcc901cb72968b11fa45e8d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_rating\\hooks\\vendor_plans\\details_tabs_content.post.tpl',
      1 => 1618545602,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '123496454460cdbfec5dfca0-66433834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'manual_rating_criterion' => 0,
    'plan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cdbfec5fb646_38761796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdbfec5fb646_38761796')) {function content_60cdbfec5fb646_38761796($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.manual_vendor_plan_rating'));
?>
<div id="content_rating_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden">
    <div class="control-group">
        <label for="elm_manual_rating" class="control-label">
            <?php echo $_smarty_tpl->__("vendor_rating.manual_vendor_plan_rating");?>
:
        </label>
        <div class="controls">
            <input type="text"
                   class="cm-numeric"
                   data-m-dec="0"
                   <?php if (isset($_smarty_tpl->tpl_vars['manual_rating_criterion']->value['range']['min'])) {?>
                       data-v-min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manual_rating_criterion']->value['range']['min'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php }?>
                   <?php if (isset($_smarty_tpl->tpl_vars['manual_rating_criterion']->value['range']['max'])) {?>
                       data-v-max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manual_rating_criterion']->value['range']['max'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php }?>
                   id="elm_manual_rating"
                   name="plan_data[manual_rating]"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['plan']->value['manual_rating'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
    </div>
<!--content_rating_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
