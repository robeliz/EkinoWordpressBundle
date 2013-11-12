<?php

namespace Ekino\WordpressBundle\Tests\Entity;

use Ekino\WordpressBundle\Entity\Term;

/**
 * Class TermTest
 *
 * This is the Wordpress term entity test
 */
class TermTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test entity getters & setters
     */
    public function testGettersSetters()
    {
        $entity = new Term();

        $entity->setGroup(3);
        $entity->setName('term name');
        $entity->setSlug('term-slug');

        $this->assertEquals(3, $entity->getGroup());
        $this->assertEquals('term name', $entity->getName());
        $this->assertEquals('term-slug', $entity->getSlug());
    }
}