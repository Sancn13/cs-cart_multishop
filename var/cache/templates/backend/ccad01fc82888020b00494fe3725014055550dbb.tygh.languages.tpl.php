<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 05:23:26
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\storefronts\components\languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186148614560bc319ebf0cc2-57193192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccad01fc82888020b00494fe3725014055550dbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\storefronts\\components\\languages.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '186148614560bc319ebf0cc2-57193192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'all_languages' => 0,
    'language' => 0,
    'language_storefront_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc319ec0af04_92842179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc319ec0af04_92842179')) {function content_60bc319ec0af04_92842179($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('languages','storefronts.manage_language_availability'));
?>


<div class="control-group">
    <label for="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("languages");?>

    </label>
    <div class="controls" id="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['language_storefront_ids'] = new Smarty_variable(array(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['language']->value['storefront_ids']) {?>
                <?php $_smarty_tpl->tpl_vars['language_storefront_ids'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['language']->value['storefront_ids']), null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['language_storefront_ids']->value===array()||in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['language_storefront_ids']->value)) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
        <?php } ?>
        <p><a href="<?php echo htmlspecialchars(fn_url("languages.manage"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("storefronts.manage_language_availability");?>
</a></p>
    </div>
</div>
<?php }} ?>
