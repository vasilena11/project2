<?php
/* Smarty version 3.1.33, created on 2019-12-12 16:32:23
  from 'D:\xampp\htdocs\nov_sait\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df25d87cefa58_70074673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32144f157fc32e980eb2314a726053f592fa913f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\nov_sait\\templates\\index.html',
      1 => 1576164741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df25d87cefa58_70074673 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="index.php">Начало</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<li class="nav-item">
			<a class="nav-link" href="index.php?page=users">Потребители</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="index.php?page=logout">Изход</a>
		</li>
		<?php } else { ?>
		<li class="nav-item">
			<a class="nav-link" href="index.php?page=login">Вход</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="index.php?page=register">Регистрация</a>
		</li>
		<?php }?>
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
