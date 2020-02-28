<?php
/* Smarty version 3.1.33, created on 2019-12-05 16:16:30
  from 'D:\xampp\htdocs\inf\templates\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de91f4eec5638_81874851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a81ffc8b38c584a9dad40d7c682c6ed2af6e508' => 
    array (
      0 => 'D:\\xampp\\htdocs\\inf\\templates\\register.html',
      1 => 1575558970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de91f4eec5638_81874851 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Имейл</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Парола</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Повтори парола</label>
    <input type="password" name="password2" class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" name="register" class="btn btn-primary">Регистрация</button>
</form><?php }
}
