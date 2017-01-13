<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class FooController extends FOSRestController
{
    public function getFoosAction()
    {
        return $this->getDoctrine()->getRepository(\AppBundle\Entity\Foo::class)->findBy([], [], 30);
    }
}
