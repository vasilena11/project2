<?php
/* Smarty version 3.1.33, created on 2019-12-05 16:59:40
  from 'D:\xampp\htdocs\inf\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de9296c9dcb41_30887268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1844b5f65e1cb1dd194d9bfc24b1e6da9cc1697c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\inf\\templates\\index.html',
      1 => 1575561506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de9296c9dcb41_30887268 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Начало</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=login">Вход</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=register">Регистрация</a>
    </li>
  </ul>
</nav>
<br>


<div class="container-fluid">
	<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<div class="alert alert-danger" role="alert">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
			<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
		<div class="alert alert-success" role="alert">
			<?php echo $_smarty_tpl->tpl_vars['success']->value;?>

		</div>
	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

</body>
</html>
<?php }
}
