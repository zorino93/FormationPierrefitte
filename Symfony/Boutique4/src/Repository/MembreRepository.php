<?php

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

use App\Entity\Membre;
/**
 * MembreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MembreRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry){

        parent:: __construct($registry, Membre::class);
    }
    // mes propres requêtes lié à l'entité Membre
}
