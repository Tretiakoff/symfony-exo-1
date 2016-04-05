<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotPinkController extends Controller
{
    public function crimzonCloverAction()
    {
        return $this->render('LeaderboardBundle:CrimzonClover:index.html.twig');
    }

    public function crimzonCloverTypeAction($type){
        $type = ['type' => $type];
        return $this->render('LeaderboardBundle:CrimzonClover:index.html.twig', $type);
    }

    public function ikarugaAction()
    {
        return $this->render('LeaderboardBundle:Ikaruga:index.html.twig');
    }

    public function ikarugaBackgroundAction($background){
        $background = ['background' => $background];
            return $this->render('LeaderboardBundle:Ikaruga:index.html.twig',$background);
    }
}