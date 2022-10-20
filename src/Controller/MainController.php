<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Chambre;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use App\Repository\ChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(ChambreRepository $repo): Response
    {
        return $this->render('main/index.html.twig', [
            'chambre' => $repo->findAll()
        ]);
    }
   #[Route('/chambre', name:'chambre')]
    
    public function main(ChambreRepository $repo): Response
    {
        return $this->render('main/chambre.html.twig', [
            'chambre' => $repo->findAll()
        ]);
    }
    #[Route('/restaurant',name:'restaurant')]
    public function restaurant()
    { 
         return $this->render('main/restaurant.html.twig'); 
    }
  #[Route('/reservation/{id}',name:'reservation')]
  public function reservation($id,ChambreRepository $repo,EntityManagerInterface $manager, Request $globals)

  {
    $chambre=$repo->find($id);
    

    return $this->render('main/reservation.html.twig',[
        'chambre'=>$chambre

    ]);

  }
  #[Route('/spa',name:'spa')]
  public function spa()

  {
    return $this->render('main/spa.html.twig');

  }



}






