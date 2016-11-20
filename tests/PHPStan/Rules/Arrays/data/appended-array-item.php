<?php

namespace AppendedArrayItem;

// inferred from literal array
$integers = [1, 2, 3];
$integers[] = 4;
$integers['foo'] = 5;

$integers[] = 'foo';
$integers['bar'] = 'baz';

class Foo
{

	/**
	 * @param int[] $integers
	 */
	public function doFoo(
		array $integers
	)
	{
		$integers[] = 4;
		$integers['foo'] = 5;

		$integers[] = 'foo';
		$integers['bar'] = 'baz'; // already mixed[] here
	}

}