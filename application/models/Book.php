<?php
/**
 * Created by JetBrains PhpStorm.
 * User: michael
 * Date: 4/2/12
 * Time: 3:48 PM
 * To change this template use File | Settings | File Templates.
 */

$b = new Book();
$b->setTitle("Helo!");
DB::save($b);

class Book
{

    public $title;
    public $author;
    public $isbn;
    public $publicationDate;


    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
