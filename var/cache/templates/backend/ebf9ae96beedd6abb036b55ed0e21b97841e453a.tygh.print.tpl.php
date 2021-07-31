<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:27:54
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\orders\components\bulk_edit\print.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108209010360adc03a1e7375-41864997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf9ae96beedd6abb036b55ed0e21b97841e453a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\orders\\components\\bulk_edit\\print.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108209010360adc03a1e7375-41864997',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc03a217515_95669372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc03a217515_95669372')) {function content_60adc03a217515_95669372($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('invoice','invoice_pdf','packing_slip'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("invoice"),'dispatch'=>"dispatch[orders.bulk_print]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("invoice_pdf"),'dispatch'=>"dispatch[orders.bulk_print..pdf]",'form'=>"orders_list_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("packing_slip"),'dispatch'=>"dispatch[orders.packing_slip]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>

</li>
<?php }} ?>
