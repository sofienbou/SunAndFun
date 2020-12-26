<?php
    class actualitees {
        private ?int $id;
        private string $description;
        private string $type;
        private string $lien;

        public function __construct($id, $description,$type,$lien){
            $this->id = $id;
            $this->description = $description;
            $this->type = $type;
            $this->lien = $lien;
           
        }

        public function getId () {
            return $this->id;
        }
        public function getDescription () {
            return $this->description;
        }
        public function getType () {
            return $this->type;
        }
        public function getLien () {
            return $this->lien;
        }
        public function setId ($id) {
            $this->id = $id;
        }
        
    }