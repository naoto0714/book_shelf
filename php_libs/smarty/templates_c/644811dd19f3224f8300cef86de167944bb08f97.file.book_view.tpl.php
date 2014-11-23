<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 21:50:00
         compiled from "/vagrant/php_libs/smarty/templates/book_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167885935468d1d0f22385-42839012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644811dd19f3224f8300cef86de167944bb08f97' => 
    array (
      0 => '/vagrant/php_libs/smarty/templates/book_view.tpl',
      1 => 1416228544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167885935468d1d0f22385-42839012',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5468d1d0f31b32_28451012',
  'variables' => 
  array (
    'data' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5468d1d0f31b32_28451012')) {function content_5468d1d0f31b32_28451012($_smarty_tpl) {?><!doctype html>
<html>
    <head>
        <title>Book Shelf</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="asset/css/bootstrap.min.css" rel="stylesheet">   
    </head>
    <body>
        <div id="header" class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1><a href="index.php"><i class="glyphicon glyphicon-book"></i>Book Shelf</a></h1>
                </div>
                
                <div class="col-sm-2" style="padding-top:2%;">
                    <h3><a href="index.php?type=add"><i class="glyphicon glyphicon-plus"></i>Add Book</a></h3>
                </div>
                
                <div class="col-sm-6" style="padding-top:4%;">
                        <form action="" method="post" class="form-search">
                            <div class="input-append">
                                <label class="control-label" for="serch"><i class="glyphicon glyphicon-search"></i>Book Search</label>
                                <input type="text" name="search" value="" class="span2 search-query">
                                <button class="btn">search</button>
                            </div>
                        </form>
                </div>
                
            </div>
        </div>
             
        <h3><?php echo $_smarty_tpl->tpl_vars['data']->value['book_title'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['book_author'];?>
</p><span><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['data']->value['category_id']];?>
</span>
        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['book_comment'];?>
</p>
        <span><?php echo $_smarty_tpl->tpl_vars['data']->value['purchase_date'];?>
</span>/<span><?php echo $_smarty_tpl->tpl_vars['data']->value['reg_date'];?>
</span>
        
        <p><a href="index.php?type=modify&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">修正</a></p>
        <p><a href="index.php?type=delete&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">削除</a></p>
        

    </body>
</html>
<?php }} ?>
