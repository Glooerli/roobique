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
            $InstaID = $userData['InstaID'];
            echo $userData['InstaID'];
            var_dump($userData);

//            $connection = $this->connectCollection('Users');
//            $userInformation = $connection->find(array('id' => $InstaID));
//            foreach ($userInformation as $doc) {
//                echo $doc['_id'];
//                echo $doc['username'];
//            }
        }
    }
}