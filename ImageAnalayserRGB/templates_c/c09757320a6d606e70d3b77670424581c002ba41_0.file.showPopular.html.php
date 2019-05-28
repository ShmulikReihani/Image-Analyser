<?php
/* Smarty version 3.1.33, created on 2019-05-28 09:38:36
  from 'C:\xampp\htdocs\smarty-3.1.33\pdactech\showPopular.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cece57cca4708_25114240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c09757320a6d606e70d3b77670424581c002ba41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.33\\pdactech\\showPopular.html',
      1 => 1559029091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cece57cca4708_25114240 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>showPopular</title>
</head>
<style>

    .centered{
        
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    img{
        width: 500px;
        height: 300px;
    }

    .box{
        width: 60%;
        margin: 16px auto;
        border: 1px solid #eee;
        box-shadow: 0 2px 3px #ccc;
        padding: 16px;
        
    }

    .RGBColor{
        margin: 10px auto;
    }

</style>
<body>
    <div class="centered">
        <img src=<?php echo $_smarty_tpl->tpl_vars['imagepath']->value;?>
></img>

        <div class="box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
?>
                <div class="RGBColor"><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
 :  <?php echo round($_smarty_tpl->tpl_vars['value']->value,4);?>
%</div>
            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</body>
</html><?php }
}
