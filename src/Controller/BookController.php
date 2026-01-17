<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Book;
use App\Form\BookType;

class BookController extends AbstractController
{
    #[Route('/book', name: 'app_book')]
    public function addBook(): Response
    {
        $book = new Book();
        $bookForm = $this->createForm(BookType::class, $book);

        return $this->render('book/index.html.twig', [
            'bookForm' => $bookForm
        ]);
    }
}
