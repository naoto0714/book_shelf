<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 14:52:14
         compiled from "/vagrant/book_shelf/php_libs/smarty/templates/book_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:849236279546c9528234ea8-48559020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '311bdcd92eeba63c4d7f473df2d3599e0512d499' => 
    array (
      0 => '/vagrant/book_shelf/php_libs/smarty/templates/book_category.tpl',
      1 => 1416462728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '849236279546c9528234ea8-48559020',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546c95283d1a98_63223322',
  'variables' => 
  array (
    'count' => 0,
    'data' => 0,
    'foo' => 0,
    'category' => 0,
    'category_record' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c95283d1a98_63223322')) {function content_546c95283d1a98_63223322($_smarty_tpl) {?><!doctype html>
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
                    <div class="col-sm-7">
                        <h1><a href="index.php">Book Shelf</a></h1>
                    </div>

                    <div class="col-sm-5">
                            <form action="" method="post" class="form-search">
                                <div class="input-append">
                                    <input type="text" name="search" value="" class="span2 search-query">
                                    <button class="btn">search</button>
                                    <button class="btn">Adding</button>
                                </div>
                            </form>
                    </div>

                </div>
            </div>
        </div>    
        <div class="container">
            <div class="row" style="padding-top:3%;">
                <div class="col-sm-8">
                    <h2>Book List</h2><span>該当書籍：<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
件</span>
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="index.php?type=view&id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
">
                                    <div class="book_list row">
                                        <div class="book_list_left col-sm-6">
                                            <p>本の写真</p>
                                        </div>
                                        <div class="book_list_right col-sm-6">
                                            <h3><?php echo $_smarty_tpl->tpl_vars['foo']->value['book_title'];?>
</h3>
                                            <p><?php echo $_smarty_tpl->tpl_vars['foo']->value['book_author'];?>
</p><span><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['foo']->value['category_id']];?>
</span>
                                            <p><?php echo $_smarty_tpl->tpl_vars['foo']->value['book_comment'];?>
</p>
                                            <span><?php echo $_smarty_tpl->tpl_vars['foo']->value['reg_date'];?>
</span>
                                         </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    <?php } ?>
                </div>
                <div class="col-sm-4">
                    <h2>Category</h2>
                    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_record']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                    <ul class="list-group">
                        <a href="index.php?type=category_search&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
">
                            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['cat']->value['category_id']];?>
<span class="badge"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count(category_id)'];?>
</span></li>
                        </a>
                    </ul>
                    <?php } ?>   
                </div>
            </div>
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
