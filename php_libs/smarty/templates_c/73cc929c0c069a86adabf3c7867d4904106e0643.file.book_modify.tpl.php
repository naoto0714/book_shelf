<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 14:29:28
         compiled from "/vagrant/book_shelf/php_libs/smarty/templates/book_modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320278735546c9f577dc444-40357042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73cc929c0c069a86adabf3c7867d4904106e0643' => 
    array (
      0 => '/vagrant/book_shelf/php_libs/smarty/templates/book_modify.tpl',
      1 => 1416461366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320278735546c9f577dc444-40357042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546c9f57932079_30027435',
  'variables' => 
  array (
    'title' => 0,
    'bookdata' => 0,
    'category' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c9f57932079_30027435')) {function content_546c9f57932079_30027435($_smarty_tpl) {?><!doctype html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
        <div class="container">
            <form action='' method="POST" style="margin-top: 50px;">
                <div class="form-group">
                    <label for="book_title" class="control-label">タイトル</label>
                    <input type="text" class="form-control" name="book_title" value="<?php echo $_smarty_tpl->tpl_vars['bookdata']->value['book_title'];?>
">
                </div>
                <div class="form-group">
                  <label for="book_author">著者</label>
                  <input type="text" class="form-control" name="book_author" value="<?php echo $_smarty_tpl->tpl_vars['bookdata']->value['book_author'];?>
">
                </div>
                <div class="form-group">
                    <label for="category" class="control-label">カテゴリー</label>
                    <select name="category_id" class="form-control">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="book_comment" class="control-label">感想</label>
                    <textarea name="book_comment" class="form-control"><?php echo $_smarty_tpl->tpl_vars['bookdata']->value['book_comment'];?>
</textarea>    
                </div>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['bookdata']->value['id'];?>
" name="id">
                <button class="btn btn-primary">保存</button>                                                                        
            </form>
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
