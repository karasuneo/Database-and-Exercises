<?php
class Board
{
    public $subject = "数学";
    public $name = "田中太郎";
    public $content = "分からない問題があります。";
    public function dispArticle()
    {
        print "件名 : " . $this->subject . "<br>";
        print "名前 : " . $this->name . "<br>";
        print "内容 : " . $this->content . "<br>";
    }
}

class NewBoard extends Board
{
    public $subject = "新しい掲示板です";
    public function submitArticle()
    {
        print "記事を投稿しました。";
    }
    public function editArticle()
    {
        print "記事を編集しました。";
    }
    public function deleteArticle()
    {
        print "記事を削除しました。";
    }
}

$board = new NewBoard();
$board->submitArticle();
$board->editArticle();
$board->deleteArticle();
