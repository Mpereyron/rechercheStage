<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Announce;
use AppBundle\Forms\AnnounceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class AnnounceController extends Controller
{
    public function listAction(Request $request)
    {
        $announces = $this->getDoctrine()
            ->getRepository('AppBundle:Announce')
            ->findAll();
        return $this->render('@App/Announce/announceList.html.twig', [
            'announces' => $announces,
        ]);
    }

    public function addAction(Request $request)
    {
        $form = $this->createForm(AnnounceType::class, new Announce());

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $announce = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($announce);
                $em->flush();

                return new RedirectResponse('/announce/details/'.$announce->getId());
            }


        }
        return $this->render('@App/Announce/announceAdd.html.twig',
            ['announceType' => $form->createView()]);
    }

    public function profilAction(Request $request)
    {
        $announceId = $request->get('id');
        $announce = $this->getDoctrine()
            ->getRepository('AppBundle:Announce')
            ->find($announceId);

        return $this->render('@App/Announce/announceProfil.html.twig', [
            'announce' => $announce,
        ]);
    }
}
