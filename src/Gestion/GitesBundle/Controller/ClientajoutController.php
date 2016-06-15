<?PHP


namespace Gestion\GitesBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Gestion\GitesBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ClientajoutController extends Controller

      {


      public function ajoutAction(Request $request)
      {

          //initialisation du client
          $client = new Client();
          $form = $this->createFormBuilder($client)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)  //champs input
            ->add('tel', TextType::class)
            ->add('email', TextType::class)
            ->add('save', SubmitType::class,array('label'=>'Soumettre'))
            ->getForm();


            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                return $this->redirectToRoute('/');
            }




          return $this->render('GestionGitesBundle:Ajoutclient:ajoutclient.html.twig', array(
              'form' => $form->createView(),
          ));
      }
}