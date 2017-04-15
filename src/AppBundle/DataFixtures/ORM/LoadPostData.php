<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Post;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPostData implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $post = new Post();
        $post->setTitle('post1');

        $post2 = new Post();
        $post2->setTitle('post2');

        $manager->persist($post);
        $manager->persist($post2);
        $manager->flush();
    }
}