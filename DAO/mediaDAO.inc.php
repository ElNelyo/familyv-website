<?php 

 class mediaDAO extends DAO {
private $_id = "id as _id";
private $_titre = "titre as _titre";
private $_texte = "texte as _texte";
private $_image = "image as _image";
private $_date = "date as _date";

 public function get_media(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_titre, $this->_texte, $this->_image, $this->_date FROM media " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}
 public function get_last_media(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_titre, $this->_texte, $this->_image, $this->_date FROM media ORDER BY date desc " ); 
 $req->execute(); 
 return $this->cursorToObject($req);
}

 public function get_media_By_PK($id){ 
 $req = $this-> prepare("SELECT   $this->_id ,  $this->_titre ,  $this->_texte ,  $this->_image ,  $this->_date  FROM media  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$req->execute(); 
 return $this->cursorToObject($req);
}

 public function delete_media($id){ 
 $req = $this-> prepare("DELETE  FROM media  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$resultat = $req->execute(); 
 return $resultat;
}

 public function update_media($The_media){ 
 $req = $this-> prepare("UPDATE  media  SET id = :X_id , titre = :X_titre , texte = :X_texte , image = :X_image , date = :X_date  WHERE  id = :X_id");
$req->bindValue(':X_id', $The_media->get_id());
$req->bindValue(':X_titre', $The_media->get_titre());
$req->bindValue(':X_texte', $The_media->get_texte());
$req->bindValue(':X_image', $The_media->get_image());
$req->bindValue(':X_date', $The_media->get_date());
 $resultat = $req->execute(); 
 return $resultat ;
}

 public function insert_media($The_media){ 
 $req = $this-> prepare("INSERT INTO  media (id, titre, texte, image, date) VALUES (:X_id, :X_titre, :X_texte, :X_image, :X_date) ");
$req->bindValue(":X_id", $The_media->get_id());
$req->bindValue(":X_titre", $The_media->get_titre());
$req->bindValue(":X_texte", $The_media->get_texte());
$req->bindValue(":X_image", $The_media->get_image());
$req->bindValue(":X_date", $The_media->get_date());
 $resultat = $req->execute(); 
 return $resultat ;
}

 }