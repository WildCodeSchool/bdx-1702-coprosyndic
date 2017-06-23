<?php

namespace AKYOS\EasyCoproBundle\Repository;

class CoproprietaireRepository extends \Doctrine\ORM\EntityRepository
{

    public function findNbrCoproprietairesBySyndic($syndic){

        $qb = $this->createQueryBuilder('c')
            ->select('COUNT(c)')
            ->join('c.lot', 'l')
            ->join('l.copropriete', 'lc')
            ->join('lc.syndic', 'lcs')
            ->where('lcs = :syndic')
            ->setParameter('syndic', $syndic);
            return $qb->getQuery()->getResult();
    }

    public function findCoproprietairesBySyndic($syndic) {

        $qb = $this->createQueryBuilder('c')
            ->join('c.lot', 'l')
            ->join('l.copropriete', 'cop')
            ->join('cop.syndic', 's')
            ->where('s = :syndic')
            ->setParameter('syndic', $syndic)
        ;

        return $qb->getQuery()->getResult();
    }

    public function findCoproprietairesByCopropriete($copropriete) {

        $qb = $this->createQueryBuilder('c')
            ->join('c.lot', 'l')
            ->join('l.copropriete', 'cop')
            ->where('cop = :copropriete')
            ->setParameter('copropriete', $copropriete)
        ;

        return $qb->getQuery()->getResult();
    }

}
