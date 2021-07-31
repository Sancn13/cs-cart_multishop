<?php /* Smarty version Smarty-3.1.21, created on 2021-05-28 04:02:47
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\seo\hooks\product_features\feature_code.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202171625660b04137336fb5-21350222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e907c10826714b4e914597fbf44c64a6c692c3e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\seo\\hooks\\product_features\\feature_code.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '202171625660b04137336fb5-21350222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'feature_codes' => 0,
    'feature_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b0413735d760_36938693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b0413735d760_36938693')) {function content_60b0413735d760_36938693($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('seo.product_feature.feature_code.notice'));
?>
<div id="elm_feature_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_description" class="muted description">
    <p><?php echo $_smarty_tpl->__("seo.product_feature.feature_code.notice");?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['feature_codes']->value) {?>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['feature_code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature_code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_codes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature_code']->key => $_smarty_tpl->tpl_vars['feature_code']->value) {
$_smarty_tpl->tpl_vars['feature_code']->_loop = true;
?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_code']->value['name'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_code']->value['description'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } ?>
        </ul>
    <?php }?>
</div><?php }} ?>
