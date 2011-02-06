<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 *
 * Copyright (c) 2004, 2011 David Grudl (http://davidgrudl.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace Nette;

use Nette;



/**
 * Generic recursive iterator.
 *
 * @author     David Grudl
 */
class GenericRecursiveIterator extends \IteratorIterator implements \RecursiveIterator, \Countable
{

	/**
	 * Has the current element has children?
	 * @return bool
	 */
	public function hasChildren()
	{
		$obj = $this->current();
		return ($obj instanceof \IteratorAggregate && $obj->getIterator() instanceof \RecursiveIterator) || $obj instanceof \RecursiveIterator;
	}



	/**
	 * The sub-iterator for the current element.
	 * @return \RecursiveIterator
	 */
	public function getChildren()
	{
		$obj = $this->current();
		return $obj instanceof \IteratorAggregate ? $obj->getIterator() : $obj;
	}



	/**
	 * Returns the count of elements.
	 * @return int
	 */
	public function count()
	{
		return iterator_count($this);
	}

}
