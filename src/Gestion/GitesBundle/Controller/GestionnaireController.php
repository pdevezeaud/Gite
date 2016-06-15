<?php

namespace Gestion\GitesBundle\Controller;
use Gestion\GitesBundle\Entity\Gestionnaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionnaireController extends Controller

{
    public function gestionnaireAction()
    {

        $em = $this->getDoctrine()->getManager();
        $gestionnaires = new Gestionnaire();
        $gestionnaires->setNom('Dugland');
        $gestionnaires->setPrenom('Maurice');
        $gestionnaires->setTel('0545358810');


        $em->persist($gestionnaires);

        $em->flush();


        return $this->render('GestionGitesBundle:Default:locationGite.html.twig');
    }
}