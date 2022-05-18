<?php

Use App\Blog\Article;
Use App\Blog\Category;

require __DIR__."/vendor/autoload.php";
// require __DIR__."/Blog/Category.php";
// require __DIR__."/Blog/Article.php";

$categories = [ 
    new Category (1, "foo", null),
    new Category (2, "bar", null),
    new Category (3, "baz", null)
];

dump($categories);


$articles = [
    new Article(1, "lorem", "lorem lorem", $categories[0]),
    new Article(2, "ipsum", "ipsum ipsum", $categories[1]),
    new Article(3, "sit", "sit sit", $categories[1])
];

dump($articles);

foreach ($articles as $article) {
    echo "title: {$article->getTitle()}";
    echo '<br>';

    // echo "category: {$article->getCategory()->getName()}";
    // echo '<br>';

    // fait la même chose que la ligne 24
    $category = $article->getCategory();
    echo "category: {$category->getName()}";
    echo '<br>';

    foreach ($category->getArticles() as $article) {
        echo "same category title: {$article->getTitle()}";
        echo '<br>';
    }
    echo "<br>";
}