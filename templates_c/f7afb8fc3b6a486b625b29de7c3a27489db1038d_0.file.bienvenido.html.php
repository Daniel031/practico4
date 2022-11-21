<?php
/* Smarty version 3.1.33, created on 2021-07-17 11:04:51
  from '/home/grupo01sa/agenda3c-Taborga_Farel_Dennar/templates/bienvenido.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60f2f193e025d2_09926806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7afb8fc3b6a486b625b29de7c3a27489db1038d' => 
    array (
      0 => '/home/grupo01sa/agenda3c-Taborga_Farel_Dennar/templates/bienvenido.html',
      1 => 1626532132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f2f193e025d2_09926806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110168159260f2f193df84d4_96560838', "cuerpo");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "cuerpo"} */
class Block_110168159260f2f193df84d4_96560838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cuerpo' => 
  array (
    0 => 'Block_110168159260f2f193df84d4_96560838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['body']->value;?>

<?php
}
}
/* {/block "cuerpo"} */
}
