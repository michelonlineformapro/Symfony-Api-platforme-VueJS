<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitsController extends AbstractController
{
    /**
     * @Route("/produits", name="produits")
     */
    public function index(ProduitsRepository $repository): Response
    {

        $produits = $repository->findAll();

        $tableauProduits = array();

        foreach ($produits as $item){
            $tableauProduits[] = array(
                'id' => $item->getId(),
                'title' => $item->getTitle(),
                'description' => $item->getDescription(),
                'image' => $item->getImage(),
                'price' => $item->getPrice(),
                'date' => $item->getDate()
            );
        }
        return new JsonResponse($tableauProduits);
    }

    /**
     * @Route ("/afficher-produits", name="afficher-produits")
     */
    public function afficherProduitJson(){

        return $this->render("produits/produits.html.twig");
    }

}
