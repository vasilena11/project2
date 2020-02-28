<?php
/* Smarty version 3.1.33, created on 2019-12-12 16:54:26
  from 'D:\xampp\htdocs\nov_sait\templates\users.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df262b2aa7ca7_84476079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee5e24849e6a25e62910449c811ca974b208db7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\nov_sait\\templates\\users.html',
      1 => 1576166065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df262b2aa7ca7_84476079 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
	<thead>
		<tr>
			<th>№</th>
			<th>Потребителско име</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS']->value, 'USER');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['USER']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['USER']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['USER']->value['username'];?>
</td>
			<td>
				<a href="index.php?page=edit_user&id=<?php echo $_smarty_tpl->tpl_vars['USER']->value['id'];?>
" class="btn btn-sm btn-warning">[EDIT]</a>
				<a href="index.php?page=delete_user&id=<?php echo $_smarty_tpl->tpl_vars['USER']->value['id'];?>
" class="btn btn-sm btn-danger">[DELETE]</a>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table><?php }
}
