<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryModel
 *
 * @author naoto
 */
class CategoryModel extends BaseModel{
    //----------------------------------------------------
    // カテゴリ取得
    //----------------------------------------------------
    public function get_category_data()
    {
        $category_array = [];
        try{
            $sql = "select * from book_shelf.category";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $category_array[$row['id']] = $row['category'];
            }
        } catch (Exception $ex) {
            print "エラー：" . $Exception->getMessage();

        }
        return $category_array;
    }
    
    //----------------------------------------------------
    //グループごとにレコード数を求める
    //----------------------------------------------------
    
    public function get_category_record_data()
    {
        $category_record_array = [];
        try{
            $this->pdo->beginTransaction();
            $sql = "select category_id, count(category_id) from book_shelf.books group by category_id";
            $stmh = $this->pdo->query($sql);
            $category_record_array = $stmh->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            print "エラー：" . $ex->getMessage();

        }
        return $category_record_array;
    }
    
    //----------------------------------------------------
    //category_idから書籍情報取得
    //----------------------------------------------------
    
    public function get_category_id_record($category_id){
        
        try{
            $sql = "select * from book_shelf.books where category_id = :category_id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':category_id', $category_id, PDO::PARAM_INT);
            $stmh->execute();
            $count = $stmh->rowCount();
            $data = $stmh->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            print "エラー:" . $ex->getMessage();
        }
        return [$data, $count];
    }
}
