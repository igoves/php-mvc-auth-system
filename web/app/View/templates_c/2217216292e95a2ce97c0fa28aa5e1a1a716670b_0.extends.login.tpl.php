<?php
/* Smarty version 3.1.33, created on 2019-07-19 06:23:26
  from '/var/www/html/app/View/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3161de2bcfe8_86208713',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
  ),
  'includes' =>
  array (
    'file:login.tpl' => 1,
    'file:layout.tpl' => 1,
  ),
), false)) {
    function content_5d3161de2bcfe8_86208713(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        $_smarty_tpl->_subTemplateRender('file:login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
        $_smarty_tpl->inheritance->endChild($_smarty_tpl);
        $_smarty_tpl->_subTemplateRender('file:layout.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
    }
}
