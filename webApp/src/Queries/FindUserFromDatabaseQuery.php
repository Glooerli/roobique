<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 18.06.2016
 * Time: 10:31
 */

namespace roobique\Queries {



    class FindUserFromDatabaseQuery extends AbstractQuery
    {
        public function execute($userData)
        {
            $this->find($userData);
        }

        private function find($userData)
        {
            $connection = $this->connectCollection('Users');
            $userInformation = $connection->find($userData);
            foreach ($userInformation as $doc) {
                var_dump($doc);
            }             
        }
    }
}