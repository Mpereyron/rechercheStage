<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TutorController extends Controller
{
    public function profilAction(Request $request)
    {
        $tutorId = $request->get('id');
        $tutor = $this->getDoctrine()
            ->getRepository('AppBundle:Tutor')
            ->find($tutorId);

        return $this->render('@App/Tutor/tutorProfil.html.twig', [
            "tutor" => $tutor,
        ]);
    }
}
