<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 14:27:57
         compiled from "/vagrant/book_shelf/php_libs/smarty/templates/book_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1888869423546c95c6ce2520-61713532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8083835b2075dcadcb71d63a83055903986bb7fa' => 
    array (
      0 => '/vagrant/book_shelf/php_libs/smarty/templates/book_view.tpl',
      1 => 1416461267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1888869423546c95c6ce2520-61713532',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546c95c6dab5c7_44313352',
  'variables' => 
  array (
    'data' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c95c6dab5c7_44313352')) {function content_546c95c6dab5c7_44313352($_smarty_tpl) {?><!doctype html>
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
                    <div class="col-sm-5">
                        <h1><a href="index.php">Book Shelf</a></h1>
                    </div>

                    <div class="col-sm-4">
                            <form action="index.php?type=search" method="post" class="form-search">
                                <div class="input-append">
                                    <input type="text" name="search_key" value="" class="span2 search-query">
                                    <button class="btn">search</button>
                                </div>
                            </form>
                    </div>    
                    <div class="col-sm-3">        
                                <div class="input-append">
                                    <button class="btn" onclick="location.href='index.php?type=add'">Adding</button>
                                </div>       
                    </div>

                </div>
            </div>
        </div> 
             
        <div class="container table-wrap"  style="margin-top: 50px;">
            <table class="table table-striped">
                <tr>
                    <th>書籍名</th><td><?php echo $_smarty_tpl->tpl_vars['data']->value['book_title'];?>
</td>
                </tr>
                <tr>
                    <th>著者</th><td><?php echo $_smarty_tpl->tpl_vars['data']->value['book_author'];?>
</td>
                </tr>
                <tr>
                    <th>カテゴリ</th><td><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['data']->value['category_id']];?>
</td>
                </tr>
                <tr>
                    <th>感想</th><td><?php echo $_smarty_tpl->tpl_vars['data']->value['book_comment'];?>
</td>
                </tr>
                <tr>
                    <th>登録日</th><td><?php echo $_smarty_tpl->tpl_vars['data']->value['reg_date'];?>
</td>
                </tr>
            </table>
                
                    <button class="btn btn-primary" onclick="location.href='index.php?type=modify&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
'">編集</button>
                    <button class="btn btn-danger" onclick="location.href='index.php?type=delete&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
'">削除</button>
               
        </div>
                 
        <div class="header-wrap footer"> 
            <div class="container" style="margin-top: 25px;">
                Copyright © 2014 BookShelf
            </div>                
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
