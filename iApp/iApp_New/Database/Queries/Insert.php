<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Insert extends Connector {
      	public function insert($statement, $collection) {
          $this->connect($collection)->insertOne($statement);
        }

        public function find($statement, $collection) {}
        public function count($collection) {}
    }
  }
