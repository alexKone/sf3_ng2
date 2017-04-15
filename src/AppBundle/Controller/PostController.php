<?php

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations as Rest;

class PostController extends FOSRestController implements ClassResourceInterface
{
    /**
     * @Rest\View()
     * @return \AppBundle\Entity\Post[]|array
     */
    public function cgetAction() {
        return $this->getDoctrine()->getRepository('AppBundle:Post')->findAll();
    }
}
