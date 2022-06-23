<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiMovieController extends AbstractController
{
    #[Route('/api/movies', name: 'app_api_adresse', methods:['GET'])]
    public function index(MovieRepository $rep, SerializerInterface $serializer)
    {
        $movies = $rep->findAll();

        // $json = $serializer->serialize($movies, 'json', [
        //     'groups' => 'movie:read'
        // ]);
        // $reponse = new Response($json, 200, ['content-type' => 'application/json']);
        // return $reponse;
        return $this->json($movies, 200, []);
    }
}
