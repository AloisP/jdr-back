<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use App\Entity\Utilisateur;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/utilisateur/init", name="init_utilisateur")
     */
    public function index()
    {
        // init user

        $entityManager = $this->getDoctrine()->getManager();

        
        $utilisateur = new Utilisateur();
        $utilisateur->setPseudo("Alois");
        $utilisateur->setPassword("test");
        $utilisateur->setMail("alois.pin@alois.com");
        $utilisateur->setOnline(false);
        $utilisateur->setAvatar("alois.png");

        $entityManager->persist($utilisateur);
        $entityManager->flush();

        return $this->json([
            'utilisateur' => $utilisateur->getId()
        ]);
    }

    /**
     * @Route("/utilisateur/liste", name="liste_utilisateur")
    */
    public function liste()
    {
        $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $utilisateurs = $repository->findAll();
        
        print_r(json_encode(array_values($utilisateurs)));

        return $utilisateurs;
    }
}
