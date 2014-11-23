<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-19 20:55:03
         compiled from "/vagrant/php_libs/smarty/templates/user_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1802397297546c3d6fd91ca7-51446404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d404520cec9759bba47763d37414c9edd8ced91' => 
    array (
      0 => '/vagrant/php_libs/smarty/templates/user_login.tpl',
      1 => 1416398099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1802397297546c3d6fd91ca7-51446404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546c3d6fdea623_03458999',
  'variables' => 
  array (
    'userdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c3d6fdea623_03458999')) {function content_546c3d6fdea623_03458999($_smarty_tpl) {?><!doctype html>
<html>
    <head>
        <title>Book Shelf</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="main.css" rel="stylesheet">   
    </head>
    <body>
        <div class="header-wrap">
            <div id="header" class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1><a href="index.php">Book Shelf</a></h1>
                    </div>                 
                </div>
            </div>
        </div>
        <div class="login">
            <h3><a href="index.php?type=user_regist">新規登録</a></h3>
            <form action="" method="post">
                <label>email</label>
                <input type="text" name="email" value="" placeholder="email">
                <label>password</label>
                <input type="text" name="password" value="" placeholder="password">
                <input type="hidden" name="type" value="authenticate">
                <button class="btn">login</button>
            </form>
        </div>

        <div class="header-wrap">
            <div id="footer" class="container">
                footer
            </div>
        </div>
        
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
        
        <?php echo var_dump($_smarty_tpl->tpl_vars['userdata']->value);?>

    </body>
</html><?php }} ?>
