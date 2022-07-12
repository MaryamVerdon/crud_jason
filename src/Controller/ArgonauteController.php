<?php

namespace App\Controller;

use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ArgonauteRepository;
use App\Entity\Argonaute;
use App\Form\ArgonauteForm;
use Doctrine\Persistence\ManagerRegistry;

class ArgonauteController extends AbstractController
{
    /**
     * @Route("/", name="app_argonaute")
     */
    public function index(Request $request, ManagerRegistry $doctrine, ArgonauteRepository $argonauteRepository): Response
    {
        $em = $doctrine->getManager();
        $argonaute = new Argonaute;
        $form = $this->createForm(ArgonauteForm::class, $argonaute);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($argonaute);
            $em->flush();

            return $this->render('argonaute/index.html.twig', [
                'argonautes' => $argonauteRepository->findAll(),
                'form' => $form->createView()
            ]);
        }
        return $this->render('argonaute/index.html.twig', [
            'argonautes' => $argonauteRepository->findAll(),
            'form' => $form->createView()
        ]);
    }
}
