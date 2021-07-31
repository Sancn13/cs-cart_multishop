<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 12:29:16
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\advanced_addon\hooks\categories\manage_sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182635897760b2096c4a21f1-42168590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28703d8ba237c37f4a2b9bed0ed5d06fd15726ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\advanced_addon\\hooks\\categories\\manage_sidebar.post.tpl',
      1 => 1618566976,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182635897760b2096c4a21f1-42168590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewed_categories' => 0,
    'category_data' => 0,
    'category_id' => 0,
    'category_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b2096c4d3980_37127817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b2096c4d3980_37127817')) {function content_60b2096c4d3980_37127817($_smarty_tpl) {?><div class="statistics-box">
	<div class="statistics-body">
		<p class="strong">Viewed categories</p>
		<div class="clear">
			<?php if ($_smarty_tpl->tpl_vars['viewed_categories']->value) {?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars["category_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['viewed_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category_data"]->key => $_smarty_tpl->tpl_vars["category_data"]->value) {
$_smarty_tpl->tpl_vars["category_data"]->_loop = true;
?>
						<li><strong><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['category_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['user_name'], ENT_QUOTES, 'UTF-8');?>
</a></strong>:&nbsp;
							<?php  $_smarty_tpl->tpl_vars["category_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["category_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category_data']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category_name"]->key => $_smarty_tpl->tpl_vars["category_name"]->value) {
$_smarty_tpl->tpl_vars["category_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["category_id"]->value = $_smarty_tpl->tpl_vars["category_name"]->key;
?>
								<a href="<?php echo htmlspecialchars(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>, 
							<?php } ?>
						</li>
					<?php } ?>
				</ul>
			<?php } else { ?>
				<ul>
					<li>No data found</li>
				</ul>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
