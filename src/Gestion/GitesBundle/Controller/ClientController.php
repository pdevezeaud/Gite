<?php

namespace Gestion\GitesBundle\Controller;
use Gestion\GitesBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ClientController extends Controller
{
    public function clientAction()
    {

        $em = $this->getDoctrine()->getManager();
        $clients = new Client();
        $clients->setNom('Dupond');
        $clients->setPrenom('barney');
        $clients->setTel('0545879610');
        $clients->setEmail('rocco@yahoo.fr');
        $em->persist($clients);

        $em->flush();

        return $this->render('GestionGitesBundle:Default:locationGite.html.twig');
    }
}
