<?php
namespace App\Controller;
 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
 
class Chateaux extends AbstractController
{
    const CHATEAUX = [
        ['id' => 0, 'titre' => 'Chateau de Tour',
            'txt' => 'Le château de Tours, en Indre-et-Loire, est situé en bordure de Loire dans
             le quartier le plus ancien de Tours, proche de la cathédrale Saint Gatien.',
            'url' => 'http://www.chateau-du-montellier.fr/wp-content/uploads/2017/09/004.jpg'],
        ['id' => 1, 'titre' => 'Chambord',
            'txt' => 'Le château de Chambord est un château situé dans la commune de Chambord,
             dans le département de Loir-et-Cher en région Centre-Val de Loire.',
            'url' => 'https://i.ytimg.com/vi/U-ub2DIEcZA/maxresdefault.jpg'],
        ['id' => 2, 'titre' => 'Chaumont',
            'txt' => 'Le château de Chaumont-sur-Loire se trouve dans le Val de Loire,
             sur les bords de la Loire, entre Amboise et Blois.',
            'url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e5/Chateau-Chaumont-sur-Loire7224.jpg'],
        ['id' => 3, 'titre' => 'Chenonceau',
            'txt' => 'Le château de Chenonceau est un château de la Loire situé en Touraine,
             sur la commune de Chenonceaux, dans le département d\'Indre-et-Loire en région Centre-Val de Loire.',
            'url' => 'http://2.bp.blogspot.com/-1jh7lmq4wig/UM4en3RjQrI/AAAAAAAAAMI/wpUeRCZQWEc/s1600/Chenonceau+(02).jpg']
    ];
 
    /**
* @Route("/chateaux", name="chateaux")
*/
    public function chateax(): Response
    {
 
        return $this->render('chateaux.html.twig', [
            'tout' => Chateaux::CHATEAUX,
        ]);
    }
          /**
     * @Route("/chateau/{id}", name="chateau")
     */
    public function chateau(int $id): Response
    {
     
 
        return $this->render('chateau.html.twig', [
            'info' => Chateaux::CHATEAUX[$id],
            'tout' => Chateaux::CHATEAUX,
        ]);
    }
  
}
