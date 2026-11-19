<?php
namespace Starbug\Db\Helper;

use Starbug\Db\DatabaseInterface;

class DbHelper {
  public function __construct(
    protected DatabaseInterface $target
  ) {
  }
  public function helper() {
    return $this->target;
  }
}
