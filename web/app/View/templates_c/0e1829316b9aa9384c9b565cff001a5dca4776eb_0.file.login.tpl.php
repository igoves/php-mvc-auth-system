<?php
/* Smarty version 3.1.33, created on 2019-07-19 06:21:14
  from '/var/www/html/app/View/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d31615a5720a0_70118720',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    '0e1829316b9aa9384c9b565cff001a5dca4776eb' =>
    array (
      0 => '/var/www/html/app/View/templates/login.tpl',
      1 => 1563517267,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
), false)) {
    function content_5d31615a5720a0_70118720(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, false);
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20205511725d31615a555681_67165629', 'title');
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2681919305d31615a55ca41_43308835', 'content');
    }
/* {block 'title'} */
    class Block_20205511725d31615a555681_67165629 extends Smarty_Internal_Block
    {
        public $subBlocks = array (
        'title' =>
        array (
        0 => 'Block_20205511725d31615a555681_67165629',
        ),
        );
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo APP_NAME;?>
</title><?php
        }
    }
/* {/block 'title'} */
/* {block 'content'} */
    class Block_2681919305d31615a55ca41_43308835 extends Smarty_Internal_Block
    {
        public $subBlocks = array (
        'content' =>
        array (
        0 => 'Block_2681919305d31615a55ca41_43308835',
        ),
        );
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

    <div class="row">
        <div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 offset-sm-2 col-sm-8">
            <div class="card card-default">
                <div class="card-body">
                    <h3 class="card-title text-center"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'account_login');?>
</h3>
                    <form id="loginForm" action="<?php echo $_smarty_tpl->tpl_vars['lang_prefix']->value;?>
/login" method="post">
                        <div class="form-group">
                            <label for="email-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'email');?>
 <span class="text-danger">*</span></label>
                            <input type="text" id="email-input" class="form-control" name="email" autofocus/>
                        </div>
                        <div class="form-group">
                            <label for="password-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'password');?>
 <span class="text-danger">*</span></label>
                            <input type="password" id="password-input" class="form-control" name="password"/>
                        </div>
                        <div class="checkbox">
                            <label for="remember">
                                <input type="checkbox" id="remember" name="remember"/> <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'remember_me');?>

                            </label>
                        </div>
                        <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/>
                        <button type="submit" class="btn btn-primary btn-block"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'sign_in');?>
</button>
                        <small class="d-block text-center mt-2">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_prefix']->value;?>
/registration"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'create_account');?>
</a>
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </div>
            <?php
        }
    }
/* {/block 'content'} */
}
