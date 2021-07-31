<?php /* Smarty version Smarty-3.1.21, created on 2021-06-05 06:08:54
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\gift_certificates\hooks\cart\product_row.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81768395960baeac677ca21-06153384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '887dc13796d8e4ec2ae295fa57170fe6f3413815' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\cart\\product_row.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '81768395960baeac677ca21-06153384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'show_price' => 0,
    'customer' => 0,
    'products' => 0,
    '_product' => 0,
    'has_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60baeac68386b6_34776759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60baeac68386b6_34776759')) {function content_60baeac68386b6_34776759($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product','gift_certificate','amount','price','product','quantity','price','product','quantity','price','text_no_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['item_type']=="G") {?>
    <tr>
        <td data-th="<?php echo $_smarty_tpl->__("product");?>
">
            <?php echo $_smarty_tpl->__("gift_certificate");?>

        </td>
        <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
            <td class="center" data-th="<?php echo $_smarty_tpl->__("amount");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="right" data-th="<?php echo $_smarty_tpl->__("price");?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price'],'span_id'=>"c_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."_".((string)$_smarty_tpl->tpl_vars['product']->value).".item_id"), 0);?>
</td>
        <?php }?>
    </tr>
    <tr>
        <td <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>colspan="3"<?php }?>>
            <table cellpadding="0" cellspacing="0" border="0" width="90%" class="table table-responsive" align="center">
            <tr>
                <th width="100%"><?php echo $_smarty_tpl->__("product");?>
</th>
                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                    <th class="center"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                    <th class="right"><?php echo $_smarty_tpl->__("price");?>
</th>
                <?php }?>
            </tr>
            <?php  $_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value) {
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['_product']->value['extra']['extra']['parent']['certificate']&&$_smarty_tpl->tpl_vars['_product']->value['extra']['extra']['parent']['certificate']==$_smarty_tpl->tpl_vars['product']->value['item_id']) {?>
                <?php $_smarty_tpl->tpl_vars["has_products"] = new Smarty_variable(true, null, 0);?>
                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("product");?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['_product']->value['product'];?>
</a>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </td>
                    <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                        <td class="center" data-th="<?php echo $_smarty_tpl->__("quantity");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td class="right" data-th="<?php echo $_smarty_tpl->__("price");?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['price'],'span_id'=>"c_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value).".item_id"), 0);?>
</td>
                    <?php }?>
                </tr>
                <?php }?>
            <?php } ?>
                <?php if (!$_smarty_tpl->tpl_vars['has_products']->value) {?>
                    <tr>
                        <td colspan="3">
                            <?php echo $_smarty_tpl->__("text_no_products");?>

                        </td>
                    </tr>
                <?php }?>
            </table>
        </td>
    </tr>
<?php }?><?php }} ?>
