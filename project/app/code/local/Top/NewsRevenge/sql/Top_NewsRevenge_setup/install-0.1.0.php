<?php
/**
* News Revenge
*/

/**
 * Intsaller 0.1.0
 * MySQL installer.
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package cms
*/

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

$tableCategory = $installer->getConnection()->newTable($installer->getTable("top_newsrevenge/category"));
$tableStory = $installer->getConnection()->newTable($installer->getTable("top_newsrevenge/story"));

$tableCategory->addColumn(
    "category_id",
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array("primary" => true, "identity" => true, "nullable" => false),
    "ID"
)->addColumn(
    "code",
    Varien_Db_Ddl_Table::TYPE_TEXT,
    "64",
    array("nullable" => false),
    "Category Code"
)->addColumn(
    "name",
    Varien_Db_Ddl_Table::TYPE_TEXT,
    "64",
    array("nullable" => false),
    "Category Name"
)->addColumn(
    "status",
    Varien_Db_Ddl_Table::TYPE_BOOLEAN,
    "null",
    array("nullable" => false),
    "Category Status"
)->addColumn(
    "created_ad",
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    "null",
    array("default" => Varien_Db_Ddl_Table::TIMESTAMP_INIT),
    "Category Created At"
)->addColumn(
    "updated_at",
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    "null",
    array("default" => Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
    "Category Created At"
);

$tableStory->addColumn(
    "story_id",
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null, //size: it isn't set
    array("primary" => true, "identity" => true, "nullable" => false),
    "Story ID"
)->addColumn(
    "title",
    Varien_Db_Ddl_Table::TYPE_TEXT,
    256,
    array("nullable" => false),
    "Story Title"
)->addColumn(
    "content",
    Varien_Db_Ddl_Table::TYPE_TEXT,
    64,
    array("nullable" => false),
    "Story Content"
)->addColumn(
    "status",
    Varien_Db_Ddl_Table::TYPE_BOOLEAN,
    null,
    array("nullable" => false),
    "Story Status"
)->addColumn(
    "category_id",
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array("nullable" => false),
    "Category Id"
)->addColumn(
    "created_at",
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null, //size
    array("default" => Varien_Db_Ddl_Table::TIMESTAMP_INIT),
    "Story Created At"
)->addColumn(
    "updated_at",
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array("default" => Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
    "Story Updated At"
)->addForeignKey(
    $installer->getFkName('top_newsrevenge/story', 'category_id', 'top_newsrevenge/category', 'category_id'),
    'category_id',
    $installer->getTable('top_newsrevenge/category'),
    'category_id',
    Varien_Db_Ddl_Table::ACTION_CASCADE,
    Varien_Db_Ddl_Table::ACTION_CASCADE
);

$installer->getConnection()->createTable($tableCategory);
$installer->getConnection()->createTable($tableStory);

$installer->endSetup();