<?php
/* Smarty version 3.1.39, created on 2021-11-15 15:36:27
  from 'C:\laragon\www\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6192706ba5fe70_35014878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eadfe43b72385ee44478b26e9ce207e9fde4a710' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1620401312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6192706ba5fe70_35014878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20968957316192706ba5dbb9_48724899', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17132363416192706ba5e082_25857784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2003841356192706ba5ebf3_75734999 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1841490846192706ba5e802_21785488 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2003841356192706ba5ebf3_75734999', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20968957316192706ba5dbb9_48724899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20968957316192706ba5dbb9_48724899',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17132363416192706ba5e082_25857784',
  ),
  'page_content' => 
  array (
    0 => 'Block_1841490846192706ba5e802_21785488',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2003841356192706ba5ebf3_75734999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17132363416192706ba5e082_25857784', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1841490846192706ba5e802_21785488', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
