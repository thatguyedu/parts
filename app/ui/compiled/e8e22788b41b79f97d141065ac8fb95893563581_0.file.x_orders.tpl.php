<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:55:25
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/x_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb6702da229f7_12700293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8e22788b41b79f97d141065ac8fb95893563581' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/x_orders.tpl',
      1 => 1532338526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb6702da229f7_12700293 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-horizontal" method="post" action="">
    <div class="form-group">
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="fa fa-search"></span>
                </div>
                <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

            </div>
        </div>

    </div>
</form>

<table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
    <thead>
    <tr>
        <th>#</th>
        <th>Order #</th>
        <th>Customer #</th>
        <th>Status</th>
        <th>Total</th>
        <th>
            Payment Method
        </th>
        <th>Date Created</th>
        <th class="text-right" width="120px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
    </tr>
    </thead>
    <tbody>

    <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
            <tr>
                <td  data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['order']->value->number;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['order']->value->billing->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->billing->last_name;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['order']->value->status;?>
 </td>
                <td class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value->total;?>
</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['order']->value->payment_method_title;?>
 </td>
                <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['order']->value->date_created);?>
"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['order']->value->date_created));?>
</td>

                <td class="text-right">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/view-order/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="btn btn-primary">View</a>

                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php }?>

    </tbody>

    <tfoot>
    <tr>
        <td colspan="8">
            <ul class="pagination">
            </ul>
        </td>
    </tr>
    </tfoot>

</table><?php }
}
