<?php
/* Smarty version 3.1.32, created on 2018-10-04 14:50:40
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66100ee3af5_83273481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96398766128700967b492c0734339ef99227fa6f' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/settings.tpl',
      1 => 1535439083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb66100ee3af5_83273481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11610084285bb66100ebe916_92261550', "content");
}
/* {block "content"} */
class Block_11610084285bb66100ebe916_92261550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11610084285bb66100ebe916_92261550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/razib/Documents/valet/ibc/ibilling/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>



    <div class="row">

        <div class="col-md-3 ib_profile_width">
            <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        </div>

        <div class="col-md-9">


            <div class="ibox float-e-margins animated fadeIn">
                <div class="ibox-title">
                    <h3>Settings</h3>
                </div>
                <div class="ibox-content">

                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-6"><h4>Your Stores</h4></div>
                        <div class="col-md-6">
                            <a class="btn btn-primary pull-right" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/add-store">Add New Store</a>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">URL</th>
                            <th scope="col">Key</th>
                            <th scope="col">Manage</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if ($_smarty_tpl->tpl_vars['integrations_count']->value > 0) {?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['integrations']->value, 'integration');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['integration']->value) {
?>
                                <tr>
                                    <th scope="row"><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</th>
                                    <td><?php echo $_smarty_tpl->tpl_vars['integration']->value->name;?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['integration']->value->url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['integration']->value->url;?>
</a> </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['integration']->value->key;?>
</td>
                                    <td>
                                        <?php if (!$_smarty_tpl->tpl_vars['integration']->value->is_default) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/make-default-integration/<?php echo $_smarty_tpl->tpl_vars['integration']->value->id;?>
" class="btn btn-success">Make Default</a>
                                        <?php }?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/edit-integration/<?php echo $_smarty_tpl->tpl_vars['integration']->value->id;?>
" class="btn btn-primary">Edit</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/delete-integration/<?php echo $_smarty_tpl->tpl_vars['integration']->value->id;?>
" class="btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php } else { ?>

                            <tr>
                                <td colspan="6" class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/add-store">You didn't add any Store, Click here to add one</a>
                                </td>
                            </tr>

                        <?php }?>

                        </tbody>
                    </table>

                    <hr>

                    <h4>Webhooks</h4>
                    <p>To add webhook, go to WooCommerce → Settings → Advanced → Webhooks & add following actions.</p>
                    <p>Use generated secret & select WP REST API Integration V2 when adding hooks.</p>

                    <?php if (!isset($_smarty_tpl->tpl_vars['config']->value['woocommerce_webhooks_secret']) || ($_smarty_tpl->tpl_vars['config']->value['woocommerce_webhooks_secret'] == '')) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/webhook-generate-secret" class="btn btn-primary">Generate secret</a>
                        <?php } else { ?>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/webhook-generate-secret" class="btn btn-primary">Regenerate secret</a></td>
                                    <td>
                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['woocommerce_webhooks_secret'];?>
" onClick="this.setSelectionRange(0, this.value.length)">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    <?php }?>

                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Topic</th>
                                <th>Delivery Url</th>

                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooks']->value, 'hook');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
</td>
                                    <td><span class="label label-success">Active</span> </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
</td>
                                    <td><input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hook']->value['delivery_url'];?>
" onClick="this.setSelectionRange(0, this.value.length)"></td>

                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </table>
                    </div>

                </div>
            </div>



        </div>

    </div>
<?php
}
}
/* {/block "content"} */
}
