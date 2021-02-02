<?php
namespace App\Controller;
 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
 
class StaticPages extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        $titre = 'Bienvenue';
 
        return $this->render('home.html.twig', [
            'titre' => $titre
        ]);
    }
     /**
     * @Route("/apropos", name="apropos")
     */
    public function apropos(): Response
    {
        return $this->render('apropos.html.twig', [
          
        ]);
    }
        /**
     * @Route("/nombre/{id}", name="nombre")
     */
    public function nombre(int $id): Response
    {
        $message= 'Le nombre reçu est '.$id;
 
        return $this->render('nombre.html.twig', [
            'message' => $message
        ]);
    }
}