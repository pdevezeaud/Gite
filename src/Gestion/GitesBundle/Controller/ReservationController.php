<?php

namespace Gestion\GitesBundle\Controller;
use Gestion\GitesBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ReservationController extends Controller

{
    public function reservationAction()
    {

        $em = $this->getDoctrine()->getManager();
        $recupId  = $em->getRepository('GestionGitesBundle:Chambres');




        $em = $this->getDoctrine()->getManager();
        $reservations = new Reservation();
        $reservations-> setDate(new \DateTime('2016-11-12'));
        $reservations->setStatus('libre');
        $reservations->setPaiement('carte');


        $em->persist($reservations);

        $em->flush();


        return $this->render('GestionGitesBundle:Default:locationGite.html.twig');
    }

}