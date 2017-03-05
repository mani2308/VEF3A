<?php
/**
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;
use Mini\Core\Model;
class Book extends Model
{
    /**
     * Get all books from the database
     */
    public function getallBooks()
    {
        $sql = "SELECT book_id, name, publisher, year,description FRqOM Book";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    /**
     * Add a song to database
     */
    public function addbook($name, $publisher, $year, $description)
    {
        $sql = "INSERT INTO Book (name, publisher, year,description) VALUES (:name, :publisher, :year, :description)";
        $query = $this->db->prepare($sql);
        $parameters = array(':name'=>$name, ':publisher'=>$publisher, ':year'=>$year, ':description'=>$description );
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }
    /**
     * Delete a song in the database
     */
    public function deletebook($book_id)
    {
        $sql = "DELETE FROM Book WHERE book_id = :book_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':book_id' => $book_id);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }

    public function selectBook($book_id)
    {
        $sql = "SELECT book_id, name, publisher, year, description FROM Book WHERE book_id = :book_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':book_id' => $book_id);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    public function updatebook($name, $publisher, $year, $description, $book_id)
    {
        $sql = "UPDATE Book SET name = :name, publisher = :publisher, year = :year,description = :description WHERE book_id = :book_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':publisher' => $publisher, ':year' => $year,':description' => $description, ':book_id' => $book_id);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }

    public function getAmountofBooks()
    {
        $sql = "SELECT COUNT(name) AS amount_of_books FROM Book";
        $query = $this->db->prepare($sql);
        $query->execute();
        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_books;
    }
}