<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-18 15:40:36
         compiled from "/vagrant/php_libs/smarty/templates/book_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7596539015469979df3e087-83130112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d31d2ee85023785e40d319b9469e5325e0df37a' => 
    array (
      0 => '/vagrant/php_libs/smarty/templates/book_add.tpl',
      1 => 1416239713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7596539015469979df3e087-83130112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5469979e099ec8_41412031',
  'variables' => 
  array (
    'title' => 0,
    'category' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5469979e099ec8_41412031')) {function content_5469979e099ec8_41412031($_smarty_tpl) {?><!doctype html>
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
        <form action='' method="post">
            
            <label for="book_title">タイトル</label>
            <input type="text" name="book_title" value="">
            <label for="book_author">著者</label>
            <input type="text" name="book_author" value="">
            <label for="category">カテゴリー</label>
            <select name="category_id">
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
            <label for="purchase_date">購入日</label>
            <input type="text" name="purchase_date" value="">
            <label for="book_comment">コメント</label>
            <textarea type="text" name="book_comment"></textarea>
            
            <input type="submit" value="保存">
            
            <div id="footer" class="container">
            footer
            </div>
        
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
        </form>
    </body>
</html>
<?php }} ?>
