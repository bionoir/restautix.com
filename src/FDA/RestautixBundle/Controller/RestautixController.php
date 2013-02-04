<?php

namespace FDA\RestautixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RestautixController extends Controller
{
    public function accueilAction($page)
    {
        // Les événements:
        $events = array(
            array('titre' => 'Mon weekend a Phi Phi Island !',          'id' => 1, 'auteur' => 'winzou',  'contenu' => 'Ce weekend était trop bien. Blabla…',  'date' => new \Datetime()),
            array('titre' => 'Repetition du National Day de Singapour', 'id' => 2, 'auteur' => 'winzou',  'contenu' => 'Bientôt prêt pour le jour J. Blabla…', 'date' => new \Datetime()),
            array('titre' => 'Chiffre d\'affaire en hausse',            'id' => 3, 'auteur' => 'M@teo21', 'contenu' => '+500% sur 1 an, fabuleux. Blabla…',    'date' => new \Datetime())
        );
        
        return $this->render('FDARestautixBundle:Restautix:accueil.html.twig', array('page' => $page, 'nom' => 'Fabio', 'eventsList' => $events));
    }
    
    public function readEventAction($id)
    {
        $event = array('id'      => 1,
                        'title'   => 'Mon weekend a Phi Phi Island !',
                        'author'  => 'winzou',
                        'content' => 'Ce weekend était trop bien. Blabla…',
                        'date'    => new \Datetime()
        );
     
        return $this->render('FDARestautixBundle:Restautix:readEvent.html.twig', array('nom' => 'Fabio', 'event' => $event));
    }
    
    public function addEventAction()
    {
        return $this->render('FDARestautixBundle:Restautix:addEvent.html.twig');
    }
    
    public function modifyEventAction($id)
    {
        $event = array(
                        'id'      => 1,
                        'title'   => 'Mon weekend a Phi Phi Island !',
                        'author'  => 'winzou',
                        'content' => 'Ce weekend était trop bien. Blabla…',
                        'date'    => new \Datetime()
        );
         
        return $this->render('FDARestautixBundle:Restautix:modifyEvent.html.twig', array('nom' => 'Fabio', 'event' => $event));
    }
    
    public function menuAction()
    {
        // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
        $liste = array(
            array('id' => 2, 'titre' => 'Mon dernier weekend !'),
            array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
            array('id' => 9, 'titre' => 'Petit test')
        );
        
        return $this->render('FDARestautixBundle:Restautix:menu.html.twig', array('eventsList' => $liste));
    }
    
    public function deleteEventAction($id)
    {
        return $this->accueilAction(1);
    }
}

?>
