<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:55:34
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/integration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb67036de7629_54914330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc2badc4a538252700b115c7d1bc3394375a75f6' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/integration.tpl',
      1 => 1532300604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb67036de7629_54914330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5854452155bb67036ddf4e6_46539851', "content");
}
/* {block "content"} */
class Block_5854452155bb67036ddf4e6_46539851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5854452155bb67036ddf4e6_46539851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">

        <div class="col-md-3 ib_profile_width">
            <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        </div>

        <div class="col-md-9">


            <div class="ibox float-e-margins animated fadeIn">
                <div class="ibox-title">

                    <?php if (($_smarty_tpl->tpl_vars['integration']->value)) {?>
                        <h3><?php echo $_smarty_tpl->tpl_vars['integration']->value->name;?>
</h3>
                        <?php } else { ?>
                        <h3>Add new store</h3>
                    <?php }?>

                </div>
                <div class="ibox-content">


                    <form style="max-width: 500px;" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/save-integration">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->name;?>
" <?php }?> >
                        </div>

                        <div class="form-group">
                            <label for="url">Store Url</label>
                            <input type="text" class="form-control" name="url" id="url" <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->url;?>
" <?php }?>>
                            <span class="help-block">e.g. https://www.example.com</span>
                        </div>

                        <div class="form-group">
                            <label for="key">Consumer key</label>
                            <input type="text" class="form-control" name="key" id="key" <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->key;?>
" <?php }?>>
                        </div>

                        <div class="form-group">
                            <label for="secret">Secret</label>
                            <input type="text" class="form-control" name="secret" id="secret" <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->secret;?>
" <?php }?>>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->id;?>
">
                            <?php } else { ?>
                            <input type="hidden" name="id" value="0">
                        <?php }?>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>



        </div>

    </div>
<?php
}
}
/* {/block "content"} */
}
