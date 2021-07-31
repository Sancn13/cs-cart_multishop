<?php /* Smarty version Smarty-3.1.21, created on 2021-07-17 05:59:11
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_rating\settings\components\formula.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209449655460f2477ff07d89-94737926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30e9f691c65a0aed8f4080bd72b314d8330bc665' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_rating\\settings\\components\\formula.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '209449655460f2477ff07d89-94737926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'criteria' => 0,
    'criterion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60f2478006bf81_61322032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60f2478006bf81_61322032')) {function content_60f2478006bf81_61322032($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.rating_formula','vendor_rating.invalid_formula','vendor_rating.variables'));
?>
<div class="control-group setting-wide vendor-rating-formula" data-ca-vendor-rating-formula>
    <label for="elm_formula" class="control-label cm-required vendor-rating-formula__label">
        <?php echo $_smarty_tpl->__("vendor_rating.rating_formula");?>

    </label>
    <div class="controls">
        <input type="text"
               id="elm_formula"
               class="input input-full vendor-rating-formula__input"
               name="addon_settings[formula]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['formula'], ENT_QUOTES, 'UTF-8');?>
"
               data-ca-vendor-rating-formula-input
               data-ca-vendor-rating-label-class="vendor-rating-formula__label"
               data-ca-vendor-rating-formula-error-message="<?php echo $_smarty_tpl->__("vendor_rating.invalid_formula");?>
"
        />
        <span class="vendor-rating-formula__error help-inline"
              data-ca-vendor-rating-formula-error
        ></span>
    </div>
</div>

<div class="control-group setting-wide">
    <label for="" class="control-label">&nbsp;</label>
    <div class="controls">
        <p><?php echo $_smarty_tpl->__("vendor_rating.variables");?>
</p>
        <dl>
            <?php  $_smarty_tpl->tpl_vars['criterion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criterion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criteria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->key => $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->_loop = true;
?>
                <dt class="vendor-rating-variable__variable">
                    <code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criterion']->value['variable_name'], ENT_QUOTES, 'UTF-8');?>
</code>
                </dt>
                <dd class="vendor-rating-variable__name">
                    <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['criterion']->value['name']['template'],$_smarty_tpl->tpl_vars['criterion']->value['name']['params']);?>

                </dd>
                <dd class="vendor-rating-variable__description">
                    <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['criterion']->value['description']['template'],$_smarty_tpl->tpl_vars['criterion']->value['description']['params']);?>

                </dd>
            <?php } ?>
        </dl>
    </div>
</div>

<?php }} ?>
