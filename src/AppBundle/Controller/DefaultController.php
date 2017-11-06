<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Finder\Finder;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request)
    {

        $finder = new Finder();
        $finder->files()->in('images');
        $listafile = array();

        foreach ($finder as $file) {
            array_push($listafile,$file);
//            dump($file);

        }
        dump($listafile);

        return [
            'listafile'=>$listafile
        ];
    }
}
