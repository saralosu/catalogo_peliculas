<?php

namespace App\Repository;

use App\Entity\Pelicula;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;


/**
 * @extends ServiceEntityRepository<Pelicula>
 *
 * @method Pelicula|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pelicula|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pelicula[]    findAll()
 * @method Pelicula[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PeliculaRepository
{
    public $peliculas;

    public function __construct()
    {
        $this->peliculas = [];
        $this->peliculas[] = new Pelicula('Seven', '1995', '8.5');
        $this->peliculas[] = new Pelicula('Interstellar', '2014', '7.8');
    }

    public function agregarPeliculas(array $peliculas)
    {
        foreach ($peliculas as $pelicula) {
            if ($pelicula instanceof Pelicula) {
                $this->peliculas[] = $pelicula;
            }
        }
    }

    public function obtenerPeliculas()
    {
        return $this->peliculas;
    }

    public function findAll(): array
    {
        return $this->peliculas;
    }

    public function findByTitulo($titulo): array
    {
        $peliculasFiltradas = [];

        foreach ($this->peliculas as $pelicula) {
            if (stripos($pelicula->getTitulo(), $titulo) !== false) {
                $peliculasFiltradas[] = $pelicula;
            }
        }
        return $peliculasFiltradas;
    }

    public function findByFecha($fecha): array
    {
        $peliculasFiltradas = [];

        foreach ($this->peliculas as $pelicula) {
            if ($pelicula->getFechaPublicacion() == $fecha) {
                $peliculasFiltradas[] = $pelicula;
            }
        }

        return $peliculasFiltradas;
    }

    public function findByValoracionMayor($valoracion): array
    {
        $peliculasFiltradas = [];

        foreach ($this->peliculas as $pelicula) {
            if ($pelicula->getValoracion() >= $valoracion) {
                $peliculasFiltradas[] = $pelicula;
            }
        }

        return $peliculasFiltradas;
    }

    public function findByValoracionMenor($valoracion): array
    {
        $peliculasFiltradas = [];

        foreach ($this->peliculas as $pelicula) {
            if ($pelicula->getValoracion() <= $valoracion) {
                $peliculasFiltradas[] = $pelicula;
            }
        }

        return $peliculasFiltradas;
    }



//    /**
//     * @return Pelicula[] Returns an array of Pelicula objects
//     */
//    public function findByTitulo($value): array
//    {
//        return $this->createQueryBuilder('p')
//        ->andWhere('p.titulo LIKE :val')
//        ->setParameter('val', '%'.$value.'%')
//        ->setParameter('startVal', $value.'%')
//        ->setParameter('endVal', '%'.$value)
//        ->orderBy('p.id', 'ASC')
//        ->setMaxResults(10)
//        ->getQuery()
//        ->getResult()
//        ;
//    }

//    public function findByFecha($value): ?Pelicula
//    {
//        return $this->createQueryBuilder('p')
//        ->andWhere('p.fechaPublicacion = :val')
//        ->setParameter('val', $value)
//        ->getQuery()
//        ->getOneOrNullResult()
//        ;
//    }

//    public function findByValoracionMayor($value): ?Pelicula
//    {
//        return $this->createQueryBuilder('p')
//        ->andWhere('p.valoracion >= :val')
//        ->setParameter('val', $value)
//        ->getQuery()
//        ->getOneOrNullResult()
//        ;
//    }

//    public function findByValoracionMenor($value): ?Pelicula
//    {
//        return $this->createQueryBuilder('p')
//        ->andWhere('p.valoracion <= :val')
//        ->setParameter('val', $value)
//        ->getQuery()
//        ->getOneOrNullResult()
//        ;
//    }
}
