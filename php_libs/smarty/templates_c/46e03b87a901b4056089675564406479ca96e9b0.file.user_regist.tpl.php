<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-19 16:10:48
         compiled from "/vagrant/php_libs/smarty/templates/user_regist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1997045025546c3ed7c8aaf8-35543705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46e03b87a901b4056089675564406479ca96e9b0' => 
    array (
      0 => '/vagrant/php_libs/smarty/templates/user_regist.tpl',
      1 => 1416381046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997045025546c3ed7c8aaf8-35543705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546c3ed7d05f60_33590641',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c3ed7d05f60_33590641')) {function content_546c3ed7d05f60_33590641($_smarty_tpl) {?><!doctype html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="asset/css/bootstrap.min.css" rel="stylesheet">   
    </head>
    <body>
        <div id="header" class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><a href="index.php">Book Shelf</a></h1>
                </div>
            </div>
        </div>
        <form action='' method="post">
            <label for="username">UserName</label>
            <input type="text" name="username" value="">
            <label for="email">Email</label>
            <input type="text" name="email" value="">
            <label for="password">Password</label>
            <input type="password" name="password" value="">
            <button>確認</button>
        </form>    
            <div id="footer" class="container">
            footer
            </div>
        
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
        
    </body>
</html>
<?php }} ?>
