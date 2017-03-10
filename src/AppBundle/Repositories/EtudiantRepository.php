<?php

/**
 * Created by PhpStorm.
 * User: lp
 * Date: 09/03/2017
 * Time: 14:56
 */
class EtudiantRepository
{
    public function findAll()
    {
        $stmt = $this->dbal->prepare('SELECT * FROM etudiant LIMIT 1');
        $stmt->execute();

        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);


        foreach ($rows as $row) {
            $etudiant[] = unserialize($row['serializedReservation']);
        }

        return $reservations;
    }
}