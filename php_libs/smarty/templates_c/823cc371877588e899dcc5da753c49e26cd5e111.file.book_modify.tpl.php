<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 21:50:18
         compiled from "/vagrant/php_libs/smarty/templates/book_modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124868722754696cc00fd6b3-76007912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823cc371877588e899dcc5da753c49e26cd5e111' => 
    array (
      0 => '/vagrant/php_libs/smarty/templates/book_modify.tpl',
      1 => 1416228557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124868722754696cc00fd6b3-76007912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54696cc017b341_52415513',
  'variables' => 
  array (
    'bookdata' => 0,
    'category' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54696cc017b341_52415513')) {function content_54696cc017b341_52415513($_smarty_tpl) {?>        <div id="header" class="container">
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

    <form action='' method="post">
            
            <label for="book_title">タイトル</label>
            <input type="text" name="book_title" value="<?php echo $_smarty_tpl->tpl_vars['bookdata']->value['book_title'];?>
">
            <label for="book_author">著者</label>
            <input type="text" name="book_author" value="<?php echo $_smarty_tpl->tpl_vars['bookdata']->value['book_author'];?>
">
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
            <input type="text" name="purchase_date" value="<?php echo $_smarty_tpl->tpl_vars['bookdata']->value['purchase_date'];?>
">
            <label for="book_comment">コメント</label>
            <textarea type="text" name="book_comment"><?php echo $_smarty_tpl->tpl_vars['bookdata']->value['book_comment'];?>
</textarea>
            
            <input type="submit" value="保存">
            
    </form>
    <?php echo var_dump($_smarty_tpl->tpl_vars['bookdata']->value);?>

    <?php echo var_dump($_smarty_tpl->tpl_vars['category']->value);?>

    <?php }} ?>
