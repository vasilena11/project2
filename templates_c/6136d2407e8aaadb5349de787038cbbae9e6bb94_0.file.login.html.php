<?php
/* Smarty version 3.1.33, created on 2019-12-05 21:21:00
  from 'C:\xampp\htdocs\ue\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de9589cb24c17_23284350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6136d2407e8aaadb5349de787038cbbae9e6bb94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ue\\templates\\login.html',
      1 => 1575573619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de9589cb24c17_23284350 (Smarty_Internal_Template $_smarty_tpl) {
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
