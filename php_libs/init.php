<?php

//*******************************
//  初期設定ファイル
//*******************************

//-------------------------------
//  デバッグ表示 ture / false
//-------------------------------

//define("_DEBUG_MODE", true);

define("_DEBUG_MODE", false);

//-------------------------------
//  エラー表示
//-------------------------------
//php.ini htaccess で設定していない場合ここで設定
//ini_set("display_errors", "On");

//----------------------------------------------------
// データベース関連
//----------------------------------------------------

// データベース接続ユーザー名
define("_DB_USER", "****");

// データベース接続パスワード
define("_DB_PASS", "****");

// データベースホスト名
define("_DB_HOST", "****");

// データベース名
define("_DB_NAME", "****");

// データベースの種類
define("_DB_TYPE", "****");

// データソースネーム
define("_DSN", _DB_TYPE . ":host=" . _DB_HOST . ";dbname=" . _DB_NAME. ";charset=utf8");

//----------------------------------------------------
// ファイル設置ディレクトリ
//----------------------------------------------------

// 関連ファイルを設置するディレクトリ
define( "_PHP_LIBS_DIR", _ROOT_DIR . "../php_libs/");

// クラスファイル
define( "_CLASS_DIR", _PHP_LIBS_DIR . "class/");

// 環境変数 
define( "_SCRIPT_NAME", $_SERVER['SCRIPT_NAME']);

//----------------------------------------------------
// Smarty関連設定
//----------------------------------------------------

//  Smartyのlibsディレクトリ
define( "_SMARTY_LIBS_DIR",         _PHP_LIBS_DIR . "smarty/libs/");

//  Smartyのテンプレートファイルを保存したディレクトリ
define( "_SMARTY_TEMPLATES_DIR",    _PHP_LIBS_DIR . "smarty/templates/");

//  Smartyのlibsディレクトリ Webサーバから書き込めるようにします。、
define( "_SMARTY_TEMPLATES_C_DIR",  _PHP_LIBS_DIR . "smarty/templates_c/");

//  Smartyのlibsディレクトリ
define( "_SMARTY_CONFIG_DIR",       _PHP_LIBS_DIR . "smarty/configs/");

//  Smartyのlibsディレクトリ Webサーバから書き込めるようにします。、
define( "_SMARTY_CACHE_DIR",        _PHP_LIBS_DIR . "smarty/cache/");


//----------------------------------------------------
// 必要なファイルの読み込み
//----------------------------------------------------
require_once( _SMARTY_LIBS_DIR. "Smarty.class.php");


//----------------------------------------------------
// クラスファイルの読み込み
//----------------------------------------------------

require_once( _CLASS_DIR      . "BaseController.php");
require_once( _CLASS_DIR      . "BaseModel.php");
require_once( _CLASS_DIR      . "CategoryController.php");
require_once( _CLASS_DIR      . "CategoryModel.php");
require_once( _CLASS_DIR      . "BookController.php");
require_once( _CLASS_DIR      . "BookModel.php");
