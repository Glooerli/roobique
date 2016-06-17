<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 01.06.2016
 * Time: 22:36
 */

namespace roobique\Wrappers
{
    use MongoDB;

    class DatabaseWrapper
    {
        /**
         * @var bool
         */
        private $isConnected = false;

        /**
         * @var string
         *
         */
        private $db = 'roobique';

        private $connection;

        public function getConnection($collection)
        {
            $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

            $collection = new MongoDB\Collection($manager, "testcollection", "items");
            $initialCollectionCount = $collection->count();


            $client = new MongoDB\Driver\Manager(
                'mongodb://localhost:27017',
                ['readPreference' => 'secondaryPreferred']
            );

            $db = $client->selectDatabase('roobique');

            $collection = $client->selectCollection($db, $collection);
            $document = $collection->findOne(['username' => 'janos_imhof']);
            var_dump($document);
        }

        private function connect()
        {
            if (!$this->isConnected) {

                echo 'Connected to Database';
            }else{

                die('Etwas ist schief gelaufen!');
            }

            return $this->connection;

        }
    }
}