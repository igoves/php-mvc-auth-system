<?php
/* Smarty version 3.1.33, created on 2019-07-18 18:58:38
  from '/var/www/html/app/View/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30c15e7873e3_63799928',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    '8fe8c7945339f4bfa47543d13757b50b4530750f' =>
    array (
      0 => '/var/www/html/app/View/templates/layout.tpl',
      1 => 1562303266,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
), false)) {
    function content_5d30c15e7873e3_63799928(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, false);
        ?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
<head>
        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_617443555d30c15e73cfb8_61167788', 'title');
        ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/images/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/nprogress/nprogress.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
"><?php echo APP_NAME;?>
</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="top_menu" class="navbar-nav mr-auto">
                <?php if (!$_smarty_tpl->tpl_vars['is_logged']->value) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['lang_prefix']->value;?>
/registration"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'registration');?>
</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['lang_prefix']->value;?>
/login"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'login');?>
</a>
                    </li>
                <?php }?>
            </ul>
            <ul id="lang_menu" class="navbar-nav my-2 my-lg-0 ">
                <li class="nav-item">
                    <a data-ajax="no" class="nav-link" href="#"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'eng');?>
</a>
                </li>
                <li class="nav-item">
                    <a data-ajax="no" class="nav-link" href="#"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rus');?>
</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-3">
    <div id="mc">
        <?php if ($_smarty_tpl->tpl_vars['danger']->value) {?>
            <div class="alert alert-danger" role="alert"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'danger');?>
!</strong> <?php echo $_smarty_tpl->tpl_vars['danger']->value;?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['info']->value) {?>
            <div class="alert alert-info" role="alert"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'info');?>
!</strong> <?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
            <div class="alert alert-success" role="alert"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'success');?>
!</strong> <?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
            <div class="alert alert-warning" role="alert"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'warning');?>
!</strong> <?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'errors');?>
:</h4>
                <ul>
                    <?php
                    $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'values');
                    if ($_from !== null) {
                        foreach ($_from as $_smarty_tpl->tpl_vars['values']->value) {
                            ?>
                            <?php
                            $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value, 'value');
                            if ($_from !== null) {
                                foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
                                    ?>
                            <li><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
                                    <?php
                                }
                            }
                            $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
                        }
                    }
                    $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php }?>
            <?php
            $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12901930825d30c15e782785_91603072', 'content');
            ?>

    </div>
</div>

        <?php echo '<script'; ?>
>var lang = '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
';<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/nprogress/nprogress.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/jquery.validate.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/jquery.mask.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/jquery.pjax.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/js/main.js"><?php echo '</script'; ?>
>
</body>
</html>
    <?php }
/* {block 'title'} */
    class Block_617443555d30c15e73cfb8_61167788 extends Smarty_Internal_Block
    {
        public $subBlocks = array (
        'title' =>
        array (
        0 => 'Block_617443555d30c15e73cfb8_61167788',
        ),
        );
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
        }
    }
/* {/block 'title'} */
/* {block 'content'} */
    class Block_12901930825d30c15e782785_91603072 extends Smarty_Internal_Block
    {
        public $subBlocks = array (
        'content' =>
        array (
        0 => 'Block_12901930825d30c15e782785_91603072',
        ),
        );
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
        }
    }
/* {/block 'content'} */
}
