<?php
/* Smarty version 3.1.33, created on 2020-01-10 22:41:22
  from 'D:\xampp\New folder\htdocs\ayli\templates\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e18ef82aa6cf8_77612061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bc297a9022713dc53abef9e5494d01af45dcc23' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\ayli\\templates\\register.html',
      1 => 1575558970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e18ef82aa6cf8_77612061 (Smarty_Internal_Template $_smarty_tpl) {
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
