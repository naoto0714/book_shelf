<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryController
 *
 * @author naoto
 */
class CategoryController extends BaseController{
    

    //----------------------------------------------------
    // category_idより書籍情報を取得し、標示
    //----------------------------------------------------
    public function get_book_by_category_id(){
        
        $id = $this->id;
        
        $categoryModel = new CategoryModel();
        $category_array = $categoryModel->get_category_data();
        $category_record_array = $categoryModel->get_category_record_data();
        
        list($data, $count) = $categoryModel->get_category_id_record($id);
        
        $this->view->assign('category_record', $category_record_array);
        $this->view->assign('category', $category_array);
        $this->view->assign('count', $count);
        $this->view->assign('data', $data);
        $this->title = 'Book List';
        $this->file = 'book_category.tpl';
        $this->view_display();
        
    }

}