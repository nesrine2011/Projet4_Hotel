<?php

namespace App\Controller\Admin;


use App\Entity\Membre;
use App\Entity\Slider;
use App\Entity\Chambre;
use App\Entity\Commande;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Admin\ChambreCrudController;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    private $routeBuilder;

    public function __construct(AdminUrlGenerator $routebuilder)
    {
        $this->routeBuilder = $routebuilder;
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // permet de rediriger vers les produits pour ne pas afficher la page d'accueil par défaut (voir doc easyadmin)
        return $this->redirect($this->routeBuilder->setController(MembreCrudController::class)->generateUrl());
        // return parent::index();


    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('WORLD OF RELAXATION');
    }

    public function configureMenuItems(): iterable
    {
        return[
            MenuItem::linkToRoute("Retour à l'accueil", 'fas fa-arrow-left', 'app_main'),
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::section('Gestion des données'),
            MenuItem::linkToCrud('Commandes', 'fas fa-cash-register', Commande::class),
            MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', Membre::class),
            MenuItem::linkToCrud('Chambres', 'fas fa-chambre', Chambre::class),
            MenuItem::linkToCrud('Sliders', 'fas fa-slider', Slider::class),
        ];            
    }
}