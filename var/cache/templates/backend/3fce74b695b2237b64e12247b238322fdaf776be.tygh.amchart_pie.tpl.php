<?php /* Smarty version Smarty-3.1.21, created on 2021-06-22 05:59:07
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\sales_reports\components\amchart_pie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56760214460d151fbd88198-93525106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fce74b695b2237b64e12247b238322fdaf776be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\sales_reports\\components\\amchart_pie.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '56760214460d151fbd88198-93525106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chart_id' => 0,
    'chart_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d151fbe31d80_97745856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d151fbe31d80_97745856')) {function content_60d151fbe31d80_97745856($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.inline_script.php';
?><div id="chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_pie" style="width: 100%; height: 410px;"></div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        $.ceEvent('on', 'ce.tab.show', function(){
            var chart = new AmCharts.AmPieChart();
            var legend = new AmCharts.AmLegend();
            legend.align = "center",
            legend.borderAlpha = 1,
            legend.borderColor = "#ddd",
            legend.marginLeft = 100,
            legend.marginRight = 100,
            legend.autoMargins = false,
            chart.addLegend(legend);
            chart.titleField = "label";
            chart.descriptionField = "full_descr";
            chart.valueField = "count";
            chart.outlineColor = "#FFFFFF";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            chart.balloonText = "[[description]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
            chart.height = '100%';
            chart.dataProvider = <?php echo json_encode($_smarty_tpl->tpl_vars['chart_data']->value);?>
;
            // this makes the chart 3D
            chart.depth3D = 15;
            chart.angle = 30;

            chart.write("chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_pie");
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
