<?php
/* Smarty version 3.1.33, created on 2019-07-18 18:58:38
  from '/var/www/html/app/View/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30c15e725bc3_11658212',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    '1a33a1e020d6232e706ddbf0aafe53f8ef5c01d1' =>
    array (
      0 => '/var/www/html/app/View/templates/index.tpl',
      1 => 1562312706,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
), false)) {
    function content_5d30c15e725bc3_11658212(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, false);
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6223932525d30c15e6a0f31_40222255', 'title');
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1038382315d30c15e6acb50_17074062', 'content');
    }
/* {block 'title'} */
    class Block_6223932525d30c15e6a0f31_40222255 extends Smarty_Internal_Block
    {
        public $subBlocks = array (
        'title' =>
        array (
        0 => 'Block_6223932525d30c15e6a0f31_40222255',
        ),
        );
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
<title><?php echo APP_NAME;?>
</title><?php
        }
    }
/* {/block 'title'} */
/* {block 'content'} */
    class Block_1038382315d30c15e6acb50_17074062 extends Smarty_Internal_Block
    {
        public $subBlocks = array (
        'content' =>
        array (
        0 => 'Block_1038382315d30c15e6acb50_17074062',
        ),
        );
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

    <div class="row">
        <div class="col mt-5">
            <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
                <h1 class="text-center display-4 mb-4"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'hello');?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->forename;?>
!</h1>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header">
                                <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'my_profile');?>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group row">
                                            <label class="col-md-5 text-left text-md-right col-form-label">
                                                <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'full_name');?>

                                            </label>
                                            <div class="col-md-7 form-control-plaintext font-weight-bold">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->forename;?>
                <?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-5 text-left text-md-right col-form-label">
                                                <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'email');?>

                                            </label>
                                            <div class="col-md-7 form-control-plaintext font-weight-bold">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-5 text-left text-md-right col-form-label">
                                                <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'phone');?>

                                            </label>
                                            <div class="col-md-7 form-control-plaintext">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->phone ? $_smarty_tpl->tpl_vars['user']->value->phone : '-';?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-5 text-left text-md-right col-form-label">
                                                <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'about');?>

                                            </label>
                                            <div class="col-md-7 form-control-plaintext">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->description ? $_smarty_tpl->tpl_vars['user']->value->description : '-';?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->picture) {?>
                                            <img class="img-fluid img-thumbnail"
                                                    src="/uploads/<?php echo $_smarty_tpl->tpl_vars['user']->value->picture;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->forename;?>
                                            <?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>
">
                                        <?php } else { ?>
                                        <img class="img-fluid img-thumbnail"
                                                src="/images/s1.jpg"
                                                alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->forename;?>
                                            <?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>
">
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <a data-ajax="no" href="<?php echo $_smarty_tpl->tpl_vars['lang_prefix']->value;?>
/logout" class="btn btn-outline-secondary btn-sm"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'logout');?>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <h1 class="display-1 mb-5"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'hello_world');?>
!</h1>
                <a href="<?php echo $_smarty_tpl->tpl_vars['lang_prefix']->value;?>
/registration" class="btn btn-lg btn-outline-primary mr-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'registration');?>
</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['lang_prefix']->value;?>
/login" class="btn btn-lg btn-outline-secondary"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'login');?>
</a>
            <?php }?>
        </div>
    </div>
            <?php
        }
    }
/* {/block 'content'} */
}
