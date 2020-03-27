<?php   require_once('Category.class.php');
        require_once('Article.class.php');
      
    // DAO Class
    class DAO {
        // Attributes
        private $db;

        // Constuctor
        function __construct($path) {
            try {
                $this->db = new PDO('sqlite:' . $path);
            } catch (\Exception $e){
                echo "Error: $e";
            }
        }

        // Getters
        function getAllCat(): array {
            // sql request
            $sql = 'select * from category;';
            $res = $this->db->query($sql);

            // Category list
            $cats = array();
            foreach ($res as $index => $badCat) {
                // Category class creation
                $cat = new Category($badCat['id'], $badCat['title']);
                // Adding the category on the list
                $cats[] = $cat;
            }

            // Category list return
            return $cats;
        }

        function getArt(int $id): Article {
            $sql = "select * from article where id = $id;";
            $res = $this->db->query($sql);

            $article;
            foreach ($res as $index => $badArticle) {
                // Article class creation
                $article = new Article($badArticle['id'], $badArticle['title'], $badArticle['price'], $badArticle['cover'], $badArticle['category'], $badArticle['description']);
            }
            
            return $article;
        }

        function getCat(int $idCat): Category {
            $sql = "select * from category where id = $idCat;";
            $res = $this->db->query($sql);

            $cat = 1;
            foreach ($res as $index => $badCat) {
                // Category class creation
                $cat = new Category($badCat['id'], $badCat['title']);
            }

            return $cat;
        }

        function getArtCat(int $idArt): Category {
            $sql = "select * from category where id in (select id from article where id = $idArt);";
            $res = $this->db->query($sql);

            $cat = 1;
            foreach ($res as $index => $badCat) {
                // Category class creation
                $cat = new Category($badCat['id'], $badCat['title']);
            }

            return $cat;
        }

        function getCatArtN(int $cat, int $n): array {
            $sql = "select * from article where category=$cat limit $n;";
            $res = $this->db->query($sql);

            $articles = array();
            foreach($res as $index => $badArticle){
                $article = new Article($badArticle['id'], $badArticle['title'], $badArticle['price'], $badArticle['cover'], $badArticle['category'], $badArticle['description']);
                $articles[] = $article;
            }
            return $articles;
        }

        function getFirstN(int $n): array {
            $sql = "select * from article limit $n;";
            $res = $this->db->query($sql);

            $articles = array();
            foreach ($res as $indexArticle => $badArticle) {
                $arcticle = new Article($badArticle['id'], $badArticle['title'], $badArticle['price'], $badArticle['cover'], $badArticle['category'], $badArticle['description']);
                $articles[] = $arcticle;
            }
            return $articles;
        }

        function next(int $id, int $n): array {
            $sql = "select * from article where id <= $id limit $n;";
            $res = $this->db->query($sql);

            $articles = array();
            foreach ($res as $index => $badArticle) {
                $article = new Article($badArticle['id'], $badArticle['title'], $badArticle['price'], $badArticle['cover'], $badArticle['category'], $badArticle['description']);
                $articles[] = $article;
            }
            return $articles;
        }

        function prev(int $id, int $n): array {
            $sql = "select * from article where id <= $id-$n limit $n;";
            $res = $this->db->query($sql);

            $articles = array();
            foreach ($res as $index => $badArticle) {
                $article = new Article($badArticle['id'], $badArticle['title'], $badArticle['price'], $badArticle['cover'], $badArticle['category'], $badArticle['description']);
                $articles[] = $article;
            }
            return $articles;
        }
    }