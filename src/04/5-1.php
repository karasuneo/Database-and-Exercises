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
