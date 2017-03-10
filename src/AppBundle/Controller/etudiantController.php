<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 08/03/2017
 * Time: 16:27
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Etudiant;
use AppBundle\Form\etudiantForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Translation\Tests\StringClass;

class etudiantController extends Controller
{
    /**
     * @Route("/etudiant", name="etudiant",options={"expose"=true})
     */
    public function etudiantAction(Request $request)
    {

        $etudiantId = 1;
        $etudiant = new Etudiant();
        $etudiant =  $this->getDoctrine()
            ->getRepository('AppBundle:Etudiant')
            ->find($etudiantId);

        if (!$etudiant) {
            throw $this->createNotFoundException(
                'No product found for id '.$etudiantId
            );
        }



        $form = $this->createForm(etudiantForm::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $name  = $var = $form->get('name')->getData();//$this->get('name');
            $firstName = $form->get('firstName')->getData();
            $email = $form->get('email')->getData();
            $cv = $form->get('CV')->getData();

            $etudiant->setNom($name);
            $etudiant->setPrenom($firstName);
            $etudiant->setEmail($email);
            $etudiant->setCv($cv);
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->flush();
            //return $this->redirectToRoute('homepage');
        }

        return $this->render('etudiant.html.twig',[
            'etudiant' => $etudiant,
            'action' => $this->generateUrl('etudiant'),
            'etudiantForm' => $form->createView(),
        ]);
    }
}