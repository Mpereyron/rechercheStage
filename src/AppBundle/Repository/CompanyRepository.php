<?php

namespace AppBundle\Repository;


class CompanyRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllAnnounce($companyId)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT a FROM AppBundle:Announce a WHERE a.tutor IN (
                    SELECT t.id FROM AppBundle:Tutor t WHERE t.company IN (
                        SELECT c.id FROM AppBundle:Company c WHERE c.id = $companyId 
                    ) 
                )"
            )
            ->getResult();
    }
}
