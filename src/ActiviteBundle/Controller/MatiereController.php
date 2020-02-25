<?php

namespace ActiviteBundle\Controller;

use ActiviteBundle\ActiviteBundle;
use ActiviteBundle\Entity\matieres;
use ActiviteBundle\Form\matieresType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MatiereController extends Controller
{
    /*****************************************AFFICHER_MATIERE*****************************************/
    function afficherMatiereAction()
    {
        $matiere=$this->getDoctrine()->getRepository('ActiviteBundle:matieres')->findAll();
        return $this->render("@Activite/Activite/afficherMatiere.html.twig",array('matiere'=> $matiere));
    }
    /*****************************************AJOUTER_MATIERE*****************************************/
    function ajouterMatiereAction(Request $request)
    {
        $matiere=new matieres();
        $form = $this->createForm(matieresType::class, $matiere);
        $form->handleRequest($request);
        $form1 = $form->createView();
        if ($form->isSubmitted()&&$form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($matiere);
            $em->flush();
            return $this->redirectToRoute("afficherMatiere");
        }
        return $this->render('@Activite/Activite/ajouterMatiere.html.twig', array('form1' => $form1));


    }
    /********************************************SUPPRIMER_MATIERE************************************/
    function SupprimerMatiereAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $matiere= $em->getRepository(matieres::class)->find($id);
        $em->remove($matiere);
        $em->flush();
        return $this->redirectToRoute("afficherMatiere");
    }
    /************************************************MODIFIER_MATIERE***********************************************/
    function modifierMatiereAction(Request $request,$id)
    {
        $matiere = new matieres();
        $matiere= $this->getDoctrine()->getRepository(matieres::class)->find($id);
        $form = $this->createFormBuilder($matiere)
            ->add('nomMatiere')
            ->add('sections',ChoiceType::class,['choices'=>['CHOISISSEZ'=>'','PETITE SECTION'=>'PETITE SECTION','MOYENNE SECTION'=>'MOYENNE SECTION','PRESCOLAIRE'=>'PRESCOLAIRE']])
            ->add('MODIFIER',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherMatiere');
        }
        return $this->render('@Activite/Activite/modifierMatiere.html.twig', array(
            'form' => $form->createView()
        ));

    }
    /**************************RECHECHERCH*******************************************************/
    public function searchMatiereAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $matiere =  $em->getRepository('ActiviteBundle:matieres')->find($requestString);
        if(!$matiere) {
            $result['matieres']= "Not found :( ";
        } else {
            $result['nomMatiere'] = $matiere->getNomMatiere();
            $result['sections'] = $matiere->getSections();

        }
        return new Response(json_encode($result));
    }
    /******************************************************************************/
    function afficheFMAction()
    {
        $matiere=$this->getDoctrine()->getRepository('ActiviteBundle:matieres')->findAll();
        return $this->render("@Activite/Activite/afficheFM.html.twig",array('matiere'=> $matiere));
    }
}
