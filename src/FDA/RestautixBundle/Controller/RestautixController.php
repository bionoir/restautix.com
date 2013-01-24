<?php

namespace FDA\RestautixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RestautixController extends Controller
{
    public function indexAction($page)
    {
        return $this->render('FDARestautixBundle:Restautix:index.html.twig', array('page' => $page, 'nom' => 'Fabio'));
    }
    
    public function readEventAction($id)
    {
        return $this->render('FDARestautixBundle:Restautix:readEvent.html.twig', array('event' => 'Test', 'idEvent' => $id));
    }
}

?>
