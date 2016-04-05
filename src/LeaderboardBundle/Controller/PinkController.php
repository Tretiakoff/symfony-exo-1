<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PinkController extends Controller
{
    public function deathsmilesAction()
    {
        return $this->render('LeaderboardBundle:Deathsmiles:index.html.twig');
    }

    public function mushihimesamaAction()
    {
        return $this->render('LeaderboardBundle:Mushihimesama:index.html.twig');
    }
}
