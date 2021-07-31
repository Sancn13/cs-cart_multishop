<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:05:13
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\age_verification\hooks\profiles\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64937161160af52b944fc68-63088524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f357bf1df5ee3f79dc423ec91c5765057e830bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\age_verification\\hooks\\profiles\\detailed_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '64937161160af52b944fc68-63088524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_type' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af52b947a0f0_08797101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af52b947a0f0_08797101')) {function content_60af52b947a0f0_08797101($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('age_verification','birthday'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_type']->value=="C") {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("age_verification"),'target'=>"#age_verification_fields"), 0);?>

<div id="age_verification_fields" class="collapse">
    <fieldset class="form-horizontal">
        <div class="control-group">
            <label for="birthday" class="control-label"><?php echo $_smarty_tpl->__("birthday");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"birthday",'date_name'=>"user_data[birthday]",'date_val'=>$_smarty_tpl->tpl_vars['user_data']->value['birthday']), 0);?>

            </div>
        </div>
    </fieldset>
</div>
<?php }?><?php }} ?>
