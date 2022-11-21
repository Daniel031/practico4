<?php
/* Smarty version 3.1.33, created on 2021-07-17 11:12:29
  from '/home/grupo01sa/agenda3c-Taborga_Farel_Dennar/templates/pc_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60f2f35d673978_32773597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39144e085ed31fe5cb020ec0858a0c84372720f7' => 
    array (
      0 => '/home/grupo01sa/agenda3c-Taborga_Farel_Dennar/templates/pc_login.html',
      1 => 1626534696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f2f35d673978_32773597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175798528160f2f35d660bb0_26697620', "cuerpo");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "cuerpo"} */
class Block_175798528160f2f35d660bb0_26697620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cuerpo' => 
  array (
    0 => 'Block_175798528160f2f35d660bb0_26697620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form  method="get" action="<?php echo $_smarty_tpl->tpl_vars['pslogin']->value;?>
">
   
      <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<br></h2>
 
    <table >
      <tr>
        <td width="89">Usuario:</td>
        <td width="145"><input name="user" type="text"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input name="password" type="password"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <input type="reset" name="Reset" value="Limpiar">
            <input type="submit" name="Submit" value="Ingresar">
        </div></td>
      </tr>
    </table>
</form>
<br>
<?php
}
}
/* {/block "cuerpo"} */
}
