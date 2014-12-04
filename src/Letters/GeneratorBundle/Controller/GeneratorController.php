<?php

namespace Letters\GeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\Component\HttpFoundation\Request;

use Letters\GeneratorBundle\Entity\PartLetter as PartLetter;
use Letters\GeneratorBundle\Form\Type\PartType as PartType;

class GeneratorController extends Controller
{   

    /**
     * @Route("/generateLetter")
     * @Template()
     */
    public function generateLetterAction()
    {
        return array('name' => 'Mathurin');
    }
    
    /**
     * @Route("/addPart")
     * @Template()
     */
    public function addPartAction(Request $request)
    {
        
       $em = $this->getDoctrine()->getEntityManager();
       $query = $em->createQuery('SELECT pl FROM Letters\GeneratorBundle\Entity\PartLetter pl');
       
       $newPl = new PartLetter();
       
       $form = $this->createForm(new PartType(), $newPl);
       $form->handleRequest($request);
       
       if ($form->isValid()) {
            $newPl->setNbAgrument(substr_count($form->getData()->getPartText(), "%s"));
            $em = $this->getDoctrine()->getManager();
            $em->persist($newPl);
            $em->flush();
            $request->getSession()->getFlashBag()->set('notice', 'Message sent!');
            return $this->redirect($this->generateUrl('letters_generator_generator_addpart'));
        }
        return array('form' => $form->createView(), 'pls' => $query->getResult());
    }
}
