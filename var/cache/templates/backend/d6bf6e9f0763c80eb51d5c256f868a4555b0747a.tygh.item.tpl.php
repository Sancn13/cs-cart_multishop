<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:33:25
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\components\picker\destinations\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84306992360bf2b552a3f07-03017311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6bf6e9f0763c80eb51d5c256f868a4555b0747a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\components\\picker\\destinations\\item.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '84306992360bf2b552a3f07-03017311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_mode' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2b552fa123_80457160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2b552fa123_80457160')) {function content_60bf2b552fa123_80457160($_smarty_tpl) {?><div class="object-picker__destinations-main">
    <div class="object-picker__name">
        <?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external"&&$_smarty_tpl->tpl_vars['type']->value==="selection") {?>
            <a href="${data.url}" class="object-picker__name-content object-picker__name-content--link">${data.destination}</a>
        <?php } else { ?>
            <div class="object-picker__name-content">${data.destination}</div>
        <?php }?>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['type']->value==="selection") {?>
    <div class="object-picker__shipping-delay">
        <input type="hidden"
               name="store_location_data[shipping_destinations][${data.destination_id}][destination_id]"
               value="${data.destination_id}"
        />
        <input type="hidden"
               name="store_location_data[shipping_destinations][${data.destination_id}][position]"
               value="${data.position}"
        />
        <input type="text"
               name="store_location_data[shipping_destinations][${data.destination_id}][shipping_delay]"
               value="${data.shipping_delay}"
               class="input-small"
        />
    </div>
    <div class="object-picker__warn-about-delay">
        <input type="hidden"
               name="store_location_data[shipping_destinations][${data.destination_id}][warn_about_delay]"
               value="0"
        />
        <input type="checkbox"
               name="store_location_data[shipping_destinations][${data.destination_id}][warn_about_delay]"
               value="1"
               
                   ${data.warn_about_delay
                       ? `checked="checked"`
                       : ``
                   }
               
        />
    </div>
<?php }?>
<?php }} ?>
