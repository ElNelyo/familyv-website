<?php 

 class devlogDAO extends DAO {
private $_id = "id as _id";
private $_titre = "titre as _titre";
private $_texte = "texte as _texte";
private $_ajout = "ajout as _ajout";
private $_modif = "modif as _modif";
private $_suppr = "suppr as _suppr";
private $_date = "date as _date";

 public function get_devlog(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_titre, $this->_texte, $this->_ajout, $this->_modif, $this->_suppr, $this->_date FROM devlog " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}
 public function get_last_devlog(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_titre, $this->_texte, $this->_ajout, $this->_modif, $this->_suppr, $this->_date FROM devlog ORDER BY date DESC" ); 
 $req->execute(); 
 return $this->cursorToObject($req);
}

 public function get_devlog_By_PK($id){ 
 $req = $this-> prepare("SELECT   $this->_id ,  $this->_titre ,  $this->_texte ,  $this->_ajout ,  $this->_modif ,  $this->_suppr ,  $this->_date  FROM devlog  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$req->execute(); 
 return $this->cursorToObject($req);
}

 public function delete_devlog($id){ 
 $req = $this-> prepare("DELETE  FROM devlog  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$resultat = $req->execute(); 
 return $resultat;
}

 public function update_devlog($The_devlog){ 
 $req = $this-> prepare("UPDATE  devlog  SET id = :X_id , titre = :X_titre , texte = :X_texte , ajout = :X_ajout , modif = :X_modif , suppr = :X_suppr , date = :X_date  WHERE  id = :X_id");
$req->bindValue(':X_id', $The_devlog->get_id());
$req->bindValue(':X_titre', $The_devlog->get_titre());
$req->bindValue(':X_texte', $The_devlog->get_texte());
$req->bindValue(':X_ajout', $The_devlog->get_ajout());
$req->bindValue(':X_modif', $The_devlog->get_modif());
$req->bindValue(':X_suppr', $The_devlog->get_suppr());
$req->bindValue(':X_date', $The_devlog->get_date());
 $resultat = $req->execute(); 
 return $resultat ;
}

 public function insert_devlog($The_devlog){ 
 $req = $this-> prepare("INSERT INTO  devlog (id, titre, texte, ajout, modif, suppr, date) VALUES (:X_id, :X_titre, :X_texte, :X_ajout, :X_modif, :X_suppr, :X_date) ");
$req->bindValue(":X_id", $The_devlog->get_id());
$req->bindValue(":X_titre", $The_devlog->get_titre());
$req->bindValue(":X_texte", $The_devlog->get_texte());
$req->bindValue(":X_ajout", $The_devlog->get_ajout());
$req->bindValue(":X_modif", $The_devlog->get_modif());
$req->bindValue(":X_suppr", $The_devlog->get_suppr());
$req->bindValue(":X_date", $The_devlog->get_date());
 $resultat = $req->execute(); 
 return $resultat ;
}

 }