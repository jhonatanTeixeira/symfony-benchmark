<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FooController extends Controller
{
    /**
     * @Route("/foos.json", name="foos")
     */
    public function getFoosAction()
    {
        try {
            $result = $this->getDoctrine()->getRepository(\App\Entity\Foo::class)->findBy([], [], 30);
            $serializer = $this->get('serializer');
            
            return new \Symfony\Component\HttpFoundation\Response(
                $serializer->serialize($result, 'json'),
                200,
                ['Content-type'=> 'application/json']
            );
        } catch (\Exception $e) {
            echo $e;
        }
        die;
    }
}
