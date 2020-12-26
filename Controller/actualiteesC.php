<?php
    include 'C:/xampp/htdocs/sunnfun/config.php';
    class actualiteesC {
         function afficherImage()
        {
            $db=config::getConnexion();
            $sql=" select * from actualitees as a ,images as i where a.id=i.id " ;
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur : '.$e->getMessage());
    
            }
            
        }
        function afficherImage_id($id)
        {
            $db=config::getConnexion();
            $sql=" select * from actualitees as a ,images as i where a.id=i.id and i.id='$id' " ;
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur : '.$e->getMessage());
    
            }
            
        }
        public function ajouterImage ($id,$lien){
            $sql="insert into images values (:id,:lien)";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            
            
            $req->bindValue(':id',$id);
            $req->bindValue(':lien',$lien);
            
            $req->execute();
            }
            catch (Exception $e){
                die ('Erreur: ajouter image'.$e->getMessage());
            }
        }
        public function supprimer ($id){
            $sql="delete from actualitees where id=:id";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
           
            $req->bindValue(':id',$id);
          
            $req->execute();
            }
            catch (Exception $e){
                die ('Erreur: ajouter image'.$e->getMessage());
            }
        }
        public function ajoutervideo($id,$lien){
            $sql="insert into videos values (:id,:lien)";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            
            
            $req->bindValue(':id',$id);
            $req->bindValue(':lien',$lien);
            
            $req->execute();
            }
            catch (Exception $e){
                die ('Erreur: ajouter video'.$e->getMessage());
            }
        }
        function ajouterActualitees($actualitees){
            $sql="insert into actualitees values (:id,:description,:type)";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            
            $id=$actualitees->getId();
            $description=$actualitees->getDescription();
            $type=$actualitees->getType();
            $req->bindValue(':id',$id);
            $req->bindValue(':description',$description);
            $req->bindValue(':type',$type);	
            $req->execute();
            if($type=="image"){$this->ajouterImage($id,$actualitees->getLien()); }
            else{$this->ajoutervideo($id,$actualitees->getLien());}	
            }
            catch (Exception $e){
                die ('Erreur: ajouter actualitees'.$e->getMessage());
            }
        }
        function afficherVideo()
        {
            $db=config::getConnexion();
            $sql=" select * from actualitees as a ,videos as v where a.id=v.id " ;
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur : '.$e->getMessage());
    
            }
            
        }
        function afficherVideo_id($id)
        {
            $db=config::getConnexion();
            $sql=" select * from actualitees as a ,videos as v where a.id=v.id and v.id='$id'" ;
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur : '.$e->getMessage());
    
            }
            
        }
        
        public function update ($id,$description,$type,$lien){
            if($type=="image"){$table_update="update images set lien=:lien where id=:id";}
            else{
                $table_update="update videos set lien=:lien where id=:id";
            }
             $sql="update actualitees set description=:description where id=:id";
             $db = config::getConnexion();
             try{
             $req=$db->prepare($sql);
             $req->bindValue(':description',$description);
             $req->bindValue(':id',$id);
             $req->execute();
             $req1=$db->prepare($table_update);
             $req1->bindValue(':lien',$lien);
             $req1->bindValue(':id',$id);
             $req1->execute();
 
 
             }
             catch (Exception $e){
                 die ('Erreur: update actualitee'.$e->getMessage());
             }
         }
        }
        
        