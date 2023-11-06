<?php

namespace App\Controller;

use App\Entity\Pelicula;
use App\Repository\PeliculaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class WebController extends AbstractController
{
    private $peliculaRepository;

    public function __construct()
    {
    }

    public function agregarPelicula(PeliculaRepository $peliculaRepository): Response
    {
        $peliculas = [];

        $peliculaRepository->agregarPeliculas($peliculas);
        return new JsonResponse($peliculaRepository->obtenerPeliculas());
    }


    public function listarPeliculas(): JsonResponse
    {
        $pelicula = new Pelicula('Seven', '1995', '8.5');
        $pelicula2 = new Pelicula('Interstellar', '2014', '7.8');

        $peliculas = [$pelicula, $pelicula2];

        return  new JsonResponse($peliculas);
    }
    
    public function filtrarPorTitulo(string $titulo,PeliculaRepository $peliculaRepository): JsonResponse
    {

        $peliculasFiltradas = $peliculaRepository->findByTitulo($titulo);

        return new JsonResponse($peliculasFiltradas);
    }

        public function filtrarPorFecha(string $fecha,PeliculaRepository $peliculaRepository): JsonResponse
    {
        $peliculasFiltradas = $peliculaRepository->findByFecha($fecha);

        return new JsonResponse($peliculasFiltradas);
    }

    public function filtrarPorValoracionMayor(string $valoracion,PeliculaRepository $peliculaRepository): JsonResponse
    {
        $peliculasFiltradas = $peliculaRepository->findByValoracionMayor($valoracion);

        return new JsonResponse($peliculasFiltradas);
    }

    public function filtrarPorValoracionMenor(string $valoracion,PeliculaRepository $peliculaRepository): JsonResponse
    {
        $peliculasFiltradas = $peliculaRepository->findByValoracionMenor($valoracion);

        return new JsonResponse($peliculasFiltradas);
    }
}
