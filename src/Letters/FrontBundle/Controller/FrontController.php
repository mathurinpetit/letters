<?php

namespace Letters\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FrontController extends Controller {

    /**
     * @Route("/")
     * @Template()
     */
    public function accueilAction() {

        $em = $this->getDoctrine()->getManager();
        $allTypeLetters = $em->getRepository('LettersGeneratorBundle:TypeLetter')->findAll();        
        $selectedLetter = array_values($allTypeLetters)[0];
        return array('typeLetters' => $allTypeLetters, 'selectedLetter' => $selectedLetter);
    }

    /**
     * @Route("/typeLettre/{typeLetter}", name="panel_type_letter")
     * @Template()
     */
    public function panelTypeLetterAction($typeLetter) {

        $em = $this->getDoctrine()->getManager();
        $allTypeLetters = $em->getRepository('LettersGeneratorBundle:TypeLetter')->findAll();
        $selectedLetter = $em->getRepository('LettersGeneratorBundle:TypeLetter')->findOneByAlias($typeLetter);
        return array('typeLetters' => $allTypeLetters, 'selectedLetter' => $selectedLetter);
    }

}
