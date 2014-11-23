<?php

class BaseController
{
    //system
    protected $type;
    protected $action;
    protected $file;

    //View_Template
    protected $view;
    protected $title;
    
    //Book
    protected $id;
    protected $book_title;
    protected $book_author;
    protected $book_comment;

    
    public function __construct(){
        //viewの準備
        $this->view_initialize();
    }
    
    private function view_initialize(){
        //画面表示クラス
        $this->view = new Smarty;
        
        //Smartyディレクトリの設定
        $this->view->template_dir = _SMARTY_TEMPLATES_DIR;
        $this->view->compile_dir  = _SMARTY_TEMPLATES_C_DIR;
        $this->view->config_dir   = _SMARTY_CONFIG_DIR;
        $this->view->cache_dir    = _SMARTY_CACHE_DIR;
        
        
        // リクエスト変数 typeとactionで動作を決めます。
        if(isset($_REQUEST['type'])){   $this->type   = $_REQUEST['type'];}
        if(isset($_REQUEST['action'])){ $this->action = $_REQUEST['action'];}
        if(isset($_REQUEST['id'])){ $this->id = $_REQUEST['id'];}
        
    }
    
    //----------------------------------------------------
    // フォームと変数を読み込んでテンプレートに組み込み表示
    //----------------------------------------------------
    protected function view_display(){
        $this->view->display($this->file);
    }   
    
    //----------------------------------------------------
    // pagerの作成
    //----------------------------------------------------
    protected function make_page_link($data){
        
        require_once 'Pager/Jumping.php';
        
        $params = [
            'mode'      => 'Jumping',
            'perPage'   => 5,
            'delta'     => 5,
            'itemData'  => $data
        ];
        
        $pager = new Pager_Jumping($params);

        $data  = $pager->getPageData();
        $links = $pager->getLinks();
        return [$data, $links];
        
    }
    //----------------------------------------------------
    // XSS対策
    //----------------------------------------------------
    /*protected function all_h($string){
        if(is_array($string) === true){
            return array_map("all_h", $string);
        }else{
            return htmlspecialchars($string, ENT_QUOTES,'UTF-8');
        }
    }*/
    
}