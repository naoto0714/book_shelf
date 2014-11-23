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
             
        <div class="container table-wrap"  style="margin-top: 50px;">
            <table class="table table-striped">
                <tr>
                    <th>書籍名</th><td>{$data['book_title']}</td>
                </tr>
                <tr>
                    <th>著者</th><td>{$data['book_author']}</td>
                </tr>
                <tr>
                    <th>カテゴリ</th><td>{$category[$data['category_id']]}</td>
                </tr>
                <tr>
                    <th>感想</th><td>{$data['book_comment']}</td>
                </tr>
                <tr>
                    <th>登録日</th><td>{$data['reg_date']}</td>
                </tr>
            </table>
                
                    <button class="btn btn-primary" onclick="location.href='index.php?type=modify&id={$data['id']}'">編集</button>
                    <button class="btn btn-danger" onclick="location.href='index.php?type=delete&id={$data['id']}'">削除</button>
               
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
