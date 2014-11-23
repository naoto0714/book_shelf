<!doctype html>
<html>
    <head>
        <title>{$title}</title>
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
                    <input type="text" class="form-control" name="book_title" value="{$bookdata['book_title']}">
                </div>
                <div class="form-group">
                  <label for="book_author">著者</label>
                  <input type="text" class="form-control" name="book_author" value="{$bookdata['book_author']}">
                </div>
                <div class="form-group">
                    <label for="category" class="control-label">カテゴリー</label>
                    <select name="category_id" class="form-control">
                        {foreach  from=$category key=k item=v}
                            <option value="{$k}">{$v}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label for="book_comment" class="control-label">感想</label>
                    <textarea name="book_comment" class="form-control">{$bookdata['book_comment']}</textarea>    
                </div>
                    <input type="hidden" value="{$bookdata['id']}" name="id">
                <button class="btn btn-primary">保存</button>                                                                        
            </form>
        </div>
                
        <div class="header-wrap footer"> 
            <div class="container" style="margin-top: 25px;">
                Copyright © 2014 BookShelf
            </div>                
        </div>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
