<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Company;
use AppBundle\Forms\CompanyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class CompanyController extends Controller
{
    public function profilAction(Request $request)
    {
        $companyId = $request->get('id');
        $company = $this->getDoctrine()
            ->getRepository('AppBundle:Company')
            ->find($companyId);

        return $this->render('@App/Company/companyProfil.html.twig', [
            'company' => $company,
        ]);
    }

    public function addAction(Request $request)
    {
        $form = $this->createForm(CompanyType::class, new Company());

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $company = $form->getData();
                var_dump($company);
                $em = $this->getDoctrine()->getManager();
                $em->persist($company);
                $em->flush();

                return new RedirectResponse('/company/details/' . $company->getId());
            }
        }

        return $this->render('@App/Company/companyAdd.html.twig',
            ['companyType' => $form->createView()]
        );
    }


}
