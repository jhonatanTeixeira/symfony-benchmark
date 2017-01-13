<?php

namespace App\Action;

use App\Entity\Foo;
use Doctrine\ORM\EntityManager;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Stream;

class FoosAction
{
    /**
     * @var EntityManager
     */
    private $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $serializer = SerializerBuilder::create()->build();
        
        $data = $this->em->getRepository(Foo::class)->findBy([], [], 30);
        
        $json = $serializer->serialize($data, 'json');
        
        $body = new Stream('php://temp', 'wb+');
        $body->write($json);
        
        return $response->withAddedHeader('Content-type', 'application/json')->withBody($body);
    }
}
