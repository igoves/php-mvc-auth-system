<?php
/* Smarty version 3.1.33, created on 2019-07-19 06:15:14
  from '/var/www/html/app/View/templates/registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d315ff22130a4_25257422',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    'f9d1072d0bf0afd0b5aafe0185f4233acbf9623b' =>
    array (
      0 => '/var/www/html/app/View/templates/registration.tpl',
      1 => 1562312416,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
), false)) {
    function content_5d315ff22130a4_25257422(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, false);
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3065436315d315ff21d13d8_10251471', 'title');
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8763497455d315ff21e8c79_45118382', 'content');
    }
/* {block 'title'} */
    class Block_3065436315d315ff21d13d8_10251471 extends Smarty_Internal_Block
    {
        public $subBlocks = array (
        'title' =>
        array (
        0 => 'Block_3065436315d315ff21d13d8_10251471',
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
    class Block_8763497455d315ff21e8c79_45118382 extends Smarty_Internal_Block
    {
        public $subBlocks = array (
        'content' =>
        array (
        0 => 'Block_8763497455d315ff21e8c79_45118382',
        ),
        );
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

    <div class="card card-default">
        <div class="card-body">
            <h3 class="card-title text-center"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'create_new_account');?>
</h3>
            <form id="regForm" action="<?php echo $_smarty_tpl->tpl_vars['lang_prefix']->value;?>
/registration" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="forename-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forename');?>
 <span class="text-danger">*</span></label>
                                    <input type="text" id="forename-input" class="form-control"
                                           name="forename" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="surname-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'surname');?>
 <span
                                                class="text-danger">*</span></label>
                                    <input type="text" id="surname-input" class="form-control" name="surname" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'email');?>
 <span
                                                class="text-danger">*</span></label>
                                    <input type="text" id="email-input" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'phone');?>
</label>
                                    <input type="text" id="phone-input" class="form-control phone" name="phone"
                                           placeholder="+38(999)999-99-99" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'about');?>
</label>
                                    <textarea class="form-control" name="description"
                                              placeholder="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'about_placeholder');?>
"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'password');?>
 <span class="text-danger">*</span></label>
                                    <input type="password" id="password-input" class="form-control"
                                           name="password"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password-repeat-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'password_repeat');?>
 <span
                                                class="text-danger">*</span></label>
                                    <input type="password" id="password-repeat-input" class="form-control"
                                           name="password_repeat"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="phone-input"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'load_photo');?>
</label>
                            <div id="preview" class="h-25 d-inline-block">
                                <img class="img-fluid mb-3 img-thumbnail"
                                     src="/images/s1.jpg"/>
                            </div>
                            <div class="custom-file" id="customFile">
                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                       aria-describedby="fileHelp" name="picture" accept="image/*">
                                <label class="custom-file-label" for="exampleInputFile">
                                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'select_file');?>

                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/>
                <button type="submit" class="btn btn-primary "><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'registration');?>
</button> <small class="ml-3"><a href="<?php echo $_smarty_tpl->tpl_vars['lang_prefix']->value;?>
/login"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'i_have_account');?>
</a></small>
            </form>
        </div>
    </div>
            <?php
        }
    }
/* {/block 'content'} */
}
