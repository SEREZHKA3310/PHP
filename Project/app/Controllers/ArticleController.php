<?php

namespace app\Controllers;
use app\View\View;
use app\Models\Articles\Article;
use app\config\Db;

class ArticleController extends Article
{
    private $view;
    private $db;
    public function __construct()
    {
        $this->view = new View;  
        $this->id = 1;//int
    }

    public function index(){
        $articles = Article::findAll();
        $this->view->renderHtml('article/index', ['articles'=>$articles]);
    }

    public function show($id){
        $article = Article::getById($id);
            if ($article == []) 
        {
            $this->view->renderHtml('error/404', [], 404);
            return;
        }
        $this->view->renderHtml('article/show', ['article'=>$article]);
    }

    public function edit($id){
        $article = Article::getById($id);
        $this->view->renderHtml('article/edit', ['article'=>$article]);
    }

    public function update($id){
        $article = Article::getById($id);
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->save();
        return header('Location:http://localhost/student-241/321/Project/www/article/'.$article->getId());
    }

    public function create(){
        $this->view->renderHtml('article/create');
    }

    public function store(){
        $article = new Article;
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->authorId = 1;
        $article->save();
        return header('Location:http://localhost/student-241/321/Project/www/index.php');
    }

    public function delete(int $id, $tablename){
        $article = Article::getById($id);
        $article->delete();
        return header('Location:http://localhost/student-241/321/Project/www/index.php');
    }

public function addArticle()
{
    // Получаем данные (в вашем примере они захардкожены)
    $title = 2;
    $date = 3;
    $text = 2;
    $author = 5;
    
    // Получаем соединение с БД
    $db = Db::getInstance();
    
    try {
        // Подготавливаем SQL-запрос
        $sql = 'INSERT INTO '.static::getTableName().' 
                (`title`, `text`, `author`, `data`, `id`) 
                VALUES (1,1,1,1,1)';
        
        // Выполняем запрос с именованными параметрами
        $result = $db->query(
            $sql,
            null,
            static::class
        );

            $this->view->renderHtml('article/create');
        
    } catch (\PDOException $e) {
        // Логируем ошибку
        error_log('Error adding article: ' . $e->getMessage());
        return false;
    }
}

    /**
     * @param int $id
     * @param int $userId
     * 
     * @return [type]
     */
    // public function removeArticle(int $id, int $userId)
    // {
    //     try {
    //         $this->verifyTable;

    //         self::$db->beginTransaction();

    //         $stmt = $this->network->QuaryRequest__Article['removeArticle'];
    //         $result = $stmt->execute([$id, $userId]);

    //         if ($result) {
    //             self::$db->commit();
    //             return true;
    //         }

    //         self::$db->rollBack();
    //         return false;
    //     } catch (\PDOException $e) {
    //         if (self::$db->inTransaction()) {
    //             self::$db->rollBack();
    //         }
    //         error_log("Ошибка при удалении статьи: " . $e->getMessage());
    //         return false;
    //     }
    // }

}