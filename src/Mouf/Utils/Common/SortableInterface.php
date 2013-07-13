<?php 
namespace Mouf\Utils\Common;

/**
 * This interface is implemented by any object that represent dataset that can be sorted.
 * An object implementing this interface will expose a "sort($key, $direction)" method.
 * 
 * @author David Négrier
 */
interface SortableInterface {
	const ASC = "ASC";
	const DESC = "DESC";
	
	/**
	 * Sorts the result set.
	 * 
	 * @param string $key The key to sort upon
	 * @param string $direction Either SortableInterface::ASC or SortableInterface::DESC
	 */
	public function sortable($key, $direction = self::ASC);
}
