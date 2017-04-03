<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Announce;
use AppBundle\Entity\Tutor;
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
            ->findByStatus("En cours");

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

                $tutor = $this->getDoctrine()
                    ->getRepository('AppBundle:Tutor')
                    ->find(1);

                $announce->setTutor($tutor);
                $em = $this->getDoctrine()->getManager();
                $em->persist($announce);
                $em->flush();

                return new RedirectResponse('/announce/'.$announce->getId());
            }


        }
        return $this->render('@App/Announce/announceAdd.html.twig',
            ['announceType' => $form->createView()]);
    }

    public function eraseAction(Request $request)
    {
        $announceId = $request->get('id');
        $announce = $this->getDoctrine()
            ->getRepository('AppBundle:Announce')
            ->find($announceId);

        $em = $this->getDoctrine()->getManager();
        $em->remove($announce);
        $em->flush();

        return $this->render('@App/Announce/announceErase.html.twig');
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


    public function updateAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $announce = $em
            ->getRepository('AppBundle:Announce')
            ->findOneById($request->get('id'));

        $form = $this->createForm(AnnounceType::class, $announce);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $announce = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->flush();

                return new RedirectResponse('/announce/'.$announce->getId());
            }

        }
        return $this->render('@App/Announce/announceAdd.html.twig',
            ['announceType' => $form->createView()]);
    }
}
