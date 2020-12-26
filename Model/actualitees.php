<?php
    class actualitees {
        private  $id;
        private $description;
        private  $type;
        private  $lien;

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
        public function deleteImage($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM images WHERE idImage = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function rechercherImage($title) {            
            $sql = "SELECT * from images where lien=:lien"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'lien' => $images->getImages(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
    }