<?php

class BookController extends BaseController
{
    
    public function run()
    {
        //最初に読み込まれるメソッド
        $this->categoryC = new CategoryController();
        switch ($this->type){
            case "view":
                $this->book_view();
                break;
            case "category_search":
                $this->categoryC->get_book_by_category_id();
                break;
            case "add":
                $this->add_book();
                break;
            case "modify":
                $this->modify_book();
                break;
            case "delete":
                $this->delete_book();
                break;
            case "search":
                $this->search_book();
                break;
            default :
                $this->book_top();
        } 
        
    }
    
    //----------------------------------------------------
    // 書籍一覧画面
    //----------------------------------------------------
    public function book_top()
    {
        
        $bookModel = new BookModel();
        list($data, $count) = $bookModel->book_list();
        
        //カテゴリデータの取得
        $categoryModel = new CategoryModel();
        $category_array = $categoryModel->get_category_data();
        $category_record_array = $categoryModel->get_category_record_data();
        
        //Pager表示のメソッド
        list($data, $links) = $this->make_page_link($data);
        
        
        $this->view->assign('category_record', $category_record_array);
        $this->view->assign('category', $category_array);
        $this->view->assign('count', $count);
        $this->view->assign('data', $data);
        $this->view->assign('links', $links['all']);
        $this->title = 'Book List';
        $this->file = 'book_top.tpl';
        $this->view_display();
    }
    
    //----------------------------------------------------
    // 個別書籍情報
    //----------------------------------------------------
    public function book_view()
    {
        $id = $this->id;
        $bookModel = new BookModel();
        $data = $bookModel->view_book($id);
        
        $categoryModel = new CategoryModel();
        $category_array = $categoryModel->get_category_data();
        
        $this->view->assign('category', $category_array);
        $this->view->assign('data', $data);
        $this->title = 'Book List';
        $this->file = 'book_view.tpl';
        $this->view_display();
    }
    
    //----------------------------------------------------
    // 個別書籍情報編集
    //----------------------------------------------------
    public function modify_book()
    {
        //GET
        if ($_SERVER['REQUEST_METHOD'] === "GET"){
            
            $id = $this->id;
            $bookModel = new BookModel();
            $bookdata = $bookModel->view_book($id);
            
            $categoryModel = new CategoryModel();
            $category_array = $categoryModel->get_category_data();
            

            $this->view->assign('category', $category_array);
            $this->view->assign('bookdata', $bookdata);
            $this->title = 'Book List';
            $this->file = 'book_modify.tpl';
            $this->view_display();
        }
        
        
        //POST
        if ($_SERVER['REQUEST_METHOD'] === "POST"){

            //編集情報の更新
            $bookModel = new BookModel();
            $bookdata = $_POST; 
            $bookModel->modify_book($bookdata);
            header("Location: index.php");
            exit();
        }
        
        
    }
    //----------------------------------------------------
    // 個別書籍情報削除
    //----------------------------------------------------
    public function delete_book(){
        $id = $this->id;
        $bookModel = new BookModel();
        $data = $bookModel->delete_book($id);
        header("Location: index.php");
        exit();
    }
    //----------------------------------------------------
    // 書籍の追加
    //----------------------------------------------------
    public function add_book()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET"){
            $categoryModel = new CategoryModel();
            $category_array = $categoryModel->get_category_data();

            $this->view->assign('category', $category_array);
            $this->title = 'Book List';
            $this->file = 'book_add.tpl';
            $this->view_display();
        }
        
        if ($_SERVER['REQUEST_METHOD'] === "POST"){
            $bookdata = $_POST;
            $bookModel = new BookModel();
            $data = $bookModel->register_book($bookdata);
            header("Location: index.php");
            exit();
        }
        
    }
    //----------------------------------------------------
    // 書籍の検索
    //----------------------------------------------------
    public function search_book(){
       
        $search_key = '%'. $_POST['search_key'] .'%';
        
        $bookModel = new BookModel();
        list($data, $count) = $bookModel->search_book($search_key);
        
        $categoryModel = new CategoryModel();
        $category_array = $categoryModel->get_category_data();
        $category_record_array = $categoryModel->get_category_record_data();
        
        
        $this->view->assign('category', $category_array);
        $this->view->assign('category_record', $category_record_array);
        $this->view->assign('data', $data);
        $this->view->assign('count', $count);
        $this->title = 'Book List';
        $this->file = 'search_book.tpl';
        $this->view_display();
    }
    
}
