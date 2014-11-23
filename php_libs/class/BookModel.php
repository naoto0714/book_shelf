<?php

class BookModel extends BaseModel
{
    //----------------------------------------------------
    // 書籍登録処理
    //----------------------------------------------------
    public function register_book($bookdata){
        try{
            $this->pdo->beginTransaction();
            $sql = "insert into book_shelf.books (book_title, book_author, category_id, book_comment, reg_date) values (:book_title, :book_author, :category_id, :book_comment, now())";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':book_title', $bookdata['book_title'], PDO::PARAM_STR);
            $stmh->bindValue(':book_author', $bookdata['book_author'], PDO::PARAM_STR);
            $stmh->bindValue(':category_id', $bookdata['category_id'], PDO::PARAM_INT);
            $stmh->bindValue(':book_comment', $bookdata['book_comment'], PDO::PARAM_STR);
            $stmh->execute();
            $this->pdo->commit();
        } catch (Exception $ex) {
            print "エラー:" . $ex->getMessage();
            $this->pdo->rollback();

        }
    }
    //----------------------------------------------------
    // 書籍検索処理
    //----------------------------------------------------
    public function search_book($search_key){
        //postされたデータを受け取る
        
        $data = [];
        try{
            $sql = "select * from book_shelf.books where book_title like :book_title";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':book_title', $search_key, PDO::PARAM_STR);
            $stmh->execute();
            $count = $stmh->rowCount();
            $data = $stmh->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            print "エラー:" . $ex->getMessage();

        }
        return [$data, $count];
    }
    
    //----------------------------------------------------
    // 個別書籍情報
    //----------------------------------------------------
    public function view_book($id){
        $data = [];
        try {
            $sql = "select * from book_shelf.books where id = :id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':id', $id, PDO::PARAM_INT);
            $stmh->execute();
            $data = $stmh->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $data;
    
    }
    
    
    //----------------------------------------------------
    // 書籍情報更新処理
    //----------------------------------------------------
    public function modify_book($bookdata){
        
        try{
            $this->pdo->beginTransaction();
            $sql = "update book_shelf.books
                    set
                    book_title = :book_title,
                    book_author = :book_author,
                    category_id = :category_id,                    
                    book_comment = :book_comment
                    where id = :id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':book_title', $bookdata['book_title'], PDO::PARAM_STR);
            $stmh->bindValue(':book_author', $bookdata['book_author'], PDO::PARAM_STR);
            $stmh->bindValue(':category_id', $bookdata['category_id'], PDO::PARAM_INT);
            $stmh->bindValue(':book_comment', $bookdata['book_comment'], PDO::PARAM_STR);
            $stmh->bindValue(':id', $bookdata['id'], PDO::PARAM_INT);
            $stmh->execute();
            $this->pdo->commit();
        } catch (Exception $ex) {
            print "エラー：" . $ex->getMessage();
        }
    }
    
    //----------------------------------------------------
    // 会員情報を完全に削除する
    //----------------------------------------------------
    public function delete_book($id){
        try {
            $this->pdo->beginTransaction();
            $sql = "DELETE FROM book_shelf.books WHERE id = :id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':id', $id, PDO::PARAM_INT );
            $stmh->execute();
            $this->pdo->commit();
            //print "データを" . $stmh->rowCount() . "件、削除しました。<br>";
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "エラー：" . $Exception->getMessage();
        }
    }
    
    //----------------------------------------------------
    // 書籍一覧
    //----------------------------------------------------
    public function book_list(){
        
        try {
            $sql = "select * from book_shelf.books order by id desc";
            $stmh = $this->pdo->query($sql);
            //件数取得
            $count = $stmh->rowCount();
            //結果を配列に
            $i = 0;
            $data = [];
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                foreach( $row as $key => $value){
                        $data[$i][$key] = $value;
                }
                $i++;
            }            
        } catch (PDOException $ex) {
            echo $ex->getMessage();    
        }
        return [$data, $count];
    }
}
