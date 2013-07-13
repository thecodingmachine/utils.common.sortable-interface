What is this package
====================

This package contains an interface used by many objects to declare they have the ability
to sort the result set they represent.

If your objects represent a resultset (for instance your object is a resultset from a query to a database), 
and if you can sort this result set (on a column of the resultset), 
then your object should implement *SortableInterface*.

```php
interface SortableInterface {
	const ASC = "ASC";
	const DESC = "DESC";
	
	/**
	 * Sorts the result set.
	 * 
	 * @param string $key The key to sort upon
	 * @param string $direction Either SortableInterface::ASC or SortableInterface::DESC
	 */
	public function sort($key, $direction = self::ASC);
}
```

Mouf package
------------

This package is part of Mouf (http://mouf-php.com), an effort to ensure good developing practices by providing a graphical dependency injection framework.
