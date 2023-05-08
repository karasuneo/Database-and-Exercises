<?php
class Board
{
    public $subject;
    public $name;
    public $content;
    public function dispArticle()
    {
        print "件名 : " . $this->subject . "<br>";
        print "名前 : " . $this->name . "<br>";
        print "内容 : " . $this->content . "<br>";
    }
}
