<?php

namespace Gestion\GitesBundle\Controller;
use Gestion\GitesBundle\Entity\Gites;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class GiteController extends Controller
{
    public function giteAction()

    {

        $em = $this->getDoctrine()->getManager();
        $git = new Gites();
        $git->setnom('Tchernobyl');
        $git->setadresse('5 rue de latom de fromage');
        $git->settel('0545999999');
        $git->setemail('ducon@lapoupee.fr');
        $em->persist($git);

        $em->flush();



        return $this->render('GestionGitesBundle:Default:locationGite.html.twig');
    }

}












