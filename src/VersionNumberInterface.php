<?php declare(strict_types=1);

namespace In2it\Masterclass;

use JsonSerializable;

interface VersionNumberInterface extends JsonSerializable
{
	public function increment() : VersionNumberInterface;

	public function greaterThan( VersionNumberInterface $other ) : bool;
}
