<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(RecipeRepository $recipeRepository): Response
    {
        $recipes = $recipeRepository->findAll();
        if(count($recipes) === 0)
        {
            $this->insert($recipeRepository);
            $recipes = $recipeRepository->findAll();
        }
        return $this->render('index/index.html.twig', [
            'recipes' => $recipes,
        ]);
    }

    private function insert(RecipeRepository $recipeRepository)
    {
        $recipeRepository->insertRecipes();
    }
}
