<?php

/**
 * @file
 * Contains \Drupal\node\Tests\Migrate\MigrateNodeStubTest.
 */

namespace Drupal\node\Tests\Migrate;

use Drupal\migrate_drupal\Tests\MigrateDrupalTestBase;
use Drupal\migrate_drupal\Tests\StubTestTrait;
use Drupal\node\Entity\NodeType;

/**
 * Test stub creation for nodes.
 *
 * @group node
 */
class MigrateNodeStubTest extends MigrateDrupalTestBase {

  use StubTestTrait;

  /**
   * {@inheritdoc}
   */
  public static $modules = ['node'];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->installEntitySchema('node');
    // Need at least one node type present.
    NodeType::create([
      'type' => 'testnodetype',
      'name' => 'Test node type',
    ])->save();
  }

  /**
   * Tests creation of node stubs.
   */
  public function testStub() {
    $this->performStubTest('node');
  }

}
