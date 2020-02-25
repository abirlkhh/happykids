<?php

namespace ActiviteBundle\Controller;

use ActiviteBundle\Entity\parascolaire;
use ActiviteBundle\Form\parascolaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twilio\Rest\Client;

class ParascolaireController extends Controller
{
    /*************************AJOUTER_PARASCOLAIRE*************************************************/
    function ajouterParascolaireAction(Request $request)
    {

        $user = $this->getUser();
        if ($user != null) {
            if ($user->getRoles()[0] == "MONITEUR") {

        $parascolaire=new parascolaire();
        $form = $this->createForm(parascolaireType::class, $parascolaire);
        $form->handleRequest($request);
        $form1 = $form->createView();
        if ($form->isSubmitted()&& $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($parascolaire);
            $em->flush();
            return $this->redirectToRoute("afficherParascolaire");
        }
        return $this->render('@Activite/Activite/ajouterParascolaire.html.twig', array('f' => $form1));
            }

        }
        return $this->redirectToRoute("fos_user_security_login");
    }
    /********************************AFFICHER_PARASCOLAIRE******************************************/
    function afficherParascolaireAction()
    {
        $parascolaire=$this->getDoctrine()->getRepository('ActiviteBundle:parascolaire')->findAll();
        $em = $this->getDoctrine()->getManager();
        $enfant=$em->getRepository('ActiviteBundle:parascolaire')->findAll();
        $count=$em->createQuery("select count('u') from ActiviteBundle:parascolaire u where u.typeParascolaire like '%VISITE CULTUREL%' ")->getresult();
        $excursion=$em->createQuery("select count('u') from ActiviteBundle:parascolaire u where u.typeParascolaire like '%EXCURSION%' ")->getresult();
        $sortie=$em->createQuery("select count('u') from ActiviteBundle:parascolaire u where u.typeParascolaire like '%SORTIE EN NATURE%' ")->getresult();

        return $this->render("@Activite/Activite/afficherParascolaire.html.twig",array('parascolaire'=> $parascolaire,'count'=>$count[0][1],'excursion'=>$excursion[0][1],'sortie'=>$sortie[0][1]));

    }
    /*******************************SUPPRIMER_PARASCOLAIRE******************************************/
    function SupprimerParascolaireAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $parascolaire = $em->getRepository(parascolaire::class)->find($id);
        $em->remove($parascolaire);
        $em->flush();
        return $this->redirectToRoute("afficherParascolaire");
    }
    /*****************************MODIFIER_PARASCOLAIRE********************************************/
    function modifierParascolaireAction(Request $request,$id)
    {
        $parascolaire = new parascolaire();
        $parascolaire = $this->getDoctrine()->getRepository(parascolaire::class)->find($id);
        $form = $this->createFormBuilder($parascolaire)
            ->add('typeParascolaire',ChoiceType::class,['choices'=> [ 'CHOISISSEZ'=>'','VISITE CULTUREL' => 'VISISTE CULTUREL',  'EXCURSION' => 'EXCURSION','SORTIE' => 'SORTIE']])
            ->add('lieuParascolaire')
            ->add('dateDebutParascolaire')
            ->add('dateFinParascolaire')
            ->add('MODIFIER',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherParascolaire');
        }
        return $this->render('@Activite/Activite/modifierParascolaire.html.twig', array(
            'form' => $form->createView()
        ));

    }
    /*********************************SEARCH***********************************************/
    public function searchParascolaireAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $p =  $em->getRepository('ActiviteBundle:parascolaire')->find($requestString);
        if(!$p) {
            $result['parascolaire']= "Post Not found :( ";
        } else {
            $result['typeParascolaire'] = $p->getTypeParascolaire();
            $result['lieuParascolaire'] = $p->getLieuParascolaire();
        }
        return new Response(json_encode($result));
    }
    public function SMSAction()
    {
        $account_sid = 'AC334de0d02e68da1b2613a18d2a9a8c19';
        $auth_token = '7cc25be82d646f7a1571b96274057d4f';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

        // A Twilio number you own with SMS capabilities
        $twilio_number = "+12054534139";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
        // Where to send a text message (your cell phone?)
            '+21626086732',
            array(
                'from' => $twilio_number,
                'body' => 'Bonjour Madame/Monsieur nous vous informons que votre enfant a un sortie'
            )
        );
    }
    function affichefrontAction()
    {
        $parascolaire=$this->getDoctrine()->getRepository('ActiviteBundle:parascolaire')->findAll();
        $em = $this->getDoctrine()->getManager();
        $enfant=$em->getRepository('ActiviteBundle:parascolaire')->findAll();
        return $this->render("@Activite/Activite/affichefront.html.twig",array('parascolaire'=> $parascolaire));
    }
}
