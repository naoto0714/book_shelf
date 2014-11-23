<!doctype html>
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
        <div class="container">
            <div class="row" style="padding-top:3%;">
                <div class="col-sm-8">
                    <h2>Book List</h2><span>該当書籍：{$count}件</span>
                    {foreach from=$data item=foo}
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="index.php?type=view&id={$foo['id']}">
                                    <div class="book_list row">
                                        <div class="book_list_left col-sm-6">
                                            <p>本の写真</p>
                                        </div>
                                        <div class="book_list_right col-sm-6">
                                            <h3>{$foo['book_title']}</h3>
                                            <p>{$foo['book_author']}</p><span>{$category[$foo['category_id']]}</span>
                                            <p>{$foo['book_comment']}</p>
                                            <span>{$foo['reg_date']}</span>
                                         </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    {/foreach}
                </div>
                <div class="col-sm-4">
                    <h2>Category</h2>
                    {foreach from=$category_record item=cat}
                    <ul class="list-group">
                        <a href="index.php?type=category_search&id={$cat['category_id']}">
                            <li class="list-group-item">{$category[$cat['category_id']]}<span class="badge">{$cat['count(category_id)']}</span></li>
                        </a>
                    </ul>
                    {/foreach}   
                </div>
            </div>
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

