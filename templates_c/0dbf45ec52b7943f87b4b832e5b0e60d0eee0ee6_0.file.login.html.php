<?php
/* Smarty version 3.1.33, created on 2020-01-10 22:41:17
  from 'D:\xampp\New folder\htdocs\ayli\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e18ef7d17f0b6_56743363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dbf45ec52b7943f87b4b832e5b0e60d0eee0ee6' => 
    array (
      0 => 'D:\\xampp\\New folder\\htdocs\\ayli\\templates\\login.html',
      1 => 1575573619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e18ef7d17f0b6_56743363 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Имейл</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Парола</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="login" class="btn btn-primary">Вход</button>
</form><?php }
}
