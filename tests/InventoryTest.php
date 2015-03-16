<?php

    require_once "src/Inventory.php";

    $DB = new PDO('pgsql:host=localhost; dbname=inventory_test');

    class InventoryTest extends PHPUnit_Framework_TestCase
    {

        protected function tearDown()
        {
            Inventory::deleteAll();
        }

        function test_getId()
        {
            //Arrange
            $item = "Comic book";
            $id = 1;
            $test_Inventory = new Inventory($item, $id);

            //Act
            $result = $test_Inventory->getId();

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>
