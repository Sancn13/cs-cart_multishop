<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:28:09
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_communication\hooks\orders\details_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100352133060adc0491e3ce2-91414734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '251ba832b9ba964eebe4e1d2a2a12f628c7efb30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\orders\\details_tools.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '100352133060adc0491e3ce2-91414734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc04920ab34_54241425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc04920ab34_54241425')) {function content_60adc04920ab34_54241425($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'menu_button'=>true,'divider'=>true), 0);?>
<?php }} ?>
