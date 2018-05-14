<?php

namespace weitzman\DrupalTestTraits\Tests\Entity;

use weitzman\DrupalTestTraits\ExampleBase;

/**
 * Test the node creation trait.
 */
class NodeCreationTraitTest extends ExampleBase
{
  public function testAutoCleanup()
  {
    $node = $this->createNode(['type' => 'article']);
    $this->assertCount(1, $this->cleanupEntities);
    $this->assertEquals($node->id(), $this->cleanupEntities[0]->id());
  }
}
