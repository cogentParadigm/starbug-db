<?php
namespace Starbug\Db\Helper;

use Starbug\Db\CollectionFactoryInterface;

class CollectionsHelper {
  public function __construct(
    protected CollectionFactoryInterface $target
  ) {
  }
  public function helper() {
    return $this->target;
  }
}
