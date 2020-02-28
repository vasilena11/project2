<?php
/* Smarty version 3.1.33, created on 2020-01-12 01:12:16
  from 'D:\xampp\New folder\htdocs\ayli\templates\edit_user.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1a646022b257_06590169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38f97e24c9f798472920c65cf51ee19cb697e8e8' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\ayli\\templates\\edit_user.html',
      1 => 1578787836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1a646022b257_06590169 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	
	$( function() {
		$( "input[name='email']" ).autocomplete({
			source: "index.php?page=ajax",
			dataType: 'json',
			minLength: 2,
			select: function( event, ui ) {
				alert( "Selected: " + ui.item.value + " aka " + ui.item.id );
			}
		});
	} );
	
<?php echo '</script'; ?>
>

<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Имейл</label>
    <input value="<?php echo $_smarty_tpl->tpl_vars['USER']->value['username'];?>
" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label>Нов имейл</label>
    <input type="text" name="email" class="form-control">
  </div>
  <button type="submit" name="update" class="btn btn-primary">Актуализиране</button>
</form><?php }
}
