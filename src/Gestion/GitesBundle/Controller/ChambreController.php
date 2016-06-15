<?PHP


namespace Gestion\GitesBundle\Controller;
use Gestion\GitesBundle\Entity\Chambres;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ChambreController extends Controller

      {


      public function chambreAction()
      {

          $em = $this->getDoctrine()->getManager();
          $chamb = new Chambres();
          $chamb->setNombrePlace(4);
          $chamb->setDisponible('O');
          $chamb->setPrix(120);
          $em->persist($chamb);

          $em->flush();


          return $this->render('GestionGitesBundle:Default:locationGite.html.twig');
      }
}