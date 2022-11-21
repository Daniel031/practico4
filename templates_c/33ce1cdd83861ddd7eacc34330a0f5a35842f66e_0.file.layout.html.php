<?php
/* Smarty version 3.1.33, created on 2021-07-17 11:04:51
  from '/home/grupo01sa/agenda3c-Taborga_Farel_Dennar/templates/layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60f2f193e83174_54611035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33ce1cdd83861ddd7eacc34330a0f5a35842f66e' => 
    array (
      0 => '/home/grupo01sa/agenda3c-Taborga_Farel_Dennar/templates/layout.html',
      1 => 1626532234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f2f193e83174_54611035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/usr/share/php/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang=es>
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <style type="text/css">
        .active{ 
            text-decoration:none;
            color:blue;
        }
        header{ 
            height:30px;
            width:100%;
            color:black;
            background-color: buttonface;          
        }
        footer{
            height:30px; 
            width:100%;
            color:black;
            background-color: buttonface;          
        }        
    </style>
</head>
<body>
    <header>       
        <nav>    
        <?php
$__section_pos_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pos_0_total = $__section_pos_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_pos'] = new Smarty_Variable(array());
if ($__section_pos_0_total !== 0) {
for ($__section_pos_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] = 0; $__section_pos_0_iteration <= $__section_pos_0_total; $__section_pos_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['path']->value == $_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['menu']->value][(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['url']) {?>
               <a  class='active' href=<?php echo $_smarty_tpl->tpl_vars['path']->value;
echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['url'];?>
><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['name'];?>
</a>    
            <?php } else { ?>
                <a  href=<?php echo $_smarty_tpl->tpl_vars['path']->value;
echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['url'];?>
><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['name'];?>
</a>
            <?php }?>
            
        <?php
}
}
?>   
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197676241360f2f193e6a176_99002793', "usuario");
?>
              
        </nav>
    </header>
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63073697360f2f193e715e0_05340416', "cuerpo");
?>

    
    <footer>
    Copyrigth (c) <?php echo smarty_modifier_date_format(time(),'%Y');?>

    </footer>
</body>
</html><?php }
/* {block "usuario"} */
class Block_197676241360f2f193e6a176_99002793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'usuario' => 
  array (
    0 => 'Block_197676241360f2f193e6a176_99002793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "usuario"} */
/* {block "cuerpo"} */
class Block_63073697360f2f193e715e0_05340416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cuerpo' => 
  array (
    0 => 'Block_63073697360f2f193e715e0_05340416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "cuerpo"} */
}
