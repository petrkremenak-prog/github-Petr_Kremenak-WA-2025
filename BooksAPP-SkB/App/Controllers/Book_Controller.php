<?php
namespace App\Controllers;
use App\Models\Book;

class Book_Controller extends Controller {
    // Metoda pro zobrazení formuláře
    public function create() {
        $this->view('Books/Book_Create');
    }

    // Metoda pro uložení (tuhle volá action ve formuláři)
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bookModel = new Book();
            
            // Odeslání syrových dat z $_POST do modelu
            if ($bookModel->save($_POST)) {
                // Úspěch: Přesměrování, aby se předešlo duplicitám (The Quench)
                header('Location: /books/index');
                exit;
            } else {
                die("Chyba při zápisu do olověné reality (DB).");
            }
        }
    }
}
