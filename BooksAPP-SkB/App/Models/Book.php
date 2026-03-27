<?php
namespace App\Models;

class Book extends Model {
    public function save($data) {
        $db = Database::getConnection(); 
        
        // SQL příkaz pro zápis do tabulky books
        $sql = "INSERT INTO books (title, author, published_year, price, isbn, synopsis) 
                VALUES (:title, :author, :year, :price, :isbn, :synopsis)";
        
        $stmt = $db->prepare($sql);
        
        // Mapování Marrow (dat) na SQL parametry
        return $stmt->execute([
            ':title'    => $data['Title'],
            ':author'   => $data['Autor'],
            ':year'     => $data['Rok_vydani'],
            ':price'    => $data['Cena'] ?? null,
            ':isbn'     => $data['isbn'],
            ':synopsis' => $data['synopsis'] ?? null
        ]);
    }