<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:28:07
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\store_locator\hooks\orders\customer_shot_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209545784460adc04721cca0-61700147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f14cd55567f7334bb7daf762fe686dd47cfe4dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\store_locator\\hooks\\orders\\customer_shot_info.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '209545784460adc04721cca0-61700147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc047255070_94807354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc047255070_94807354')) {function content_60adc047255070_94807354($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.pickup','store_locator.work_time'));
?>
<?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping_id"]->value = $_smarty_tpl->tpl_vars["shipping"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['module']=='store_locator'&&$_smarty_tpl->tpl_vars['shipping']->value['store_data']) {?>
        <div class="well orders-right-pane form-horizontal">
            <div class="control-group shift-top">
                <div class="control-label">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("store_locator.pickup")), 0);?>

                </div>
            </div>

            <p class="strong">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['name'], ENT_QUOTES, 'UTF-8');?>

            </p>
            <p class="muted">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_address'], ENT_QUOTES, 'UTF-8');?>
<br />
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
<br />
            <?php echo $_smarty_tpl->__("store_locator.work_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_time'], ENT_QUOTES, 'UTF-8');?>
<br />
            </p>
        </div>
    <?php }?>
<?php } ?>
<?php }} ?>
