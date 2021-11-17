<?php
/* Smarty version 3.1.39, created on 2021-11-17 15:16:14
  from 'C:\laragon\www\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61950eaef078d1_63157909',
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
function content_61950eaef078d1_63157909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172700451861950eaef057f1_41396847', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_133648026561950eaef05ca6_10604995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_39501483861950eaef06863_52943247 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_110169474161950eaef063e0_45128411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39501483861950eaef06863_52943247', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_172700451861950eaef057f1_41396847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_172700451861950eaef057f1_41396847',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_133648026561950eaef05ca6_10604995',
  ),
  'page_content' => 
  array (
    0 => 'Block_110169474161950eaef063e0_45128411',
  ),
  'hook_home' => 
  array (
    0 => 'Block_39501483861950eaef06863_52943247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133648026561950eaef05ca6_10604995', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110169474161950eaef063e0_45128411', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
