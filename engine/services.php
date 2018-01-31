<?php
/**
 * Note: We use PhpDiResolver instead of Closures so they can be cached
 */

use Elgg\Application\Database;
use Elgg\Di\PhpDiResolver;
use Elgg\Menu\Service as MenuService;
use Elgg\Views\TableColumn\ColumnFactory;

return [
	'db' => new PhpDiResolver(Database::class, 'publicDb'),
	'menus' => new PhpDiResolver(MenuService::class, 'menus'),
	'table_columns' => new PhpDiResolver(ColumnFactory::class, 'table_columns'),
];