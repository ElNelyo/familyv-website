<?php class devlog{
private $_id; 
 private $_titre; 
 private $_texte; 
 private $_ajout; 
 private $_modif; 
 private $_suppr; 
 private $_date; 
 
public function get_id(){
		return $this->_id;} 
public function get_titre(){
		return $this->_titre;} 
public function get_texte(){
		return $this->_texte;} 
public function get_ajout(){
		return $this->_ajout;} 
public function get_modif(){
		return $this->_modif;} 
public function get_suppr(){
		return $this->_suppr;} 
public function get_date(){
		return $this->_date;} 

public function set_id($x){
		$this->_id=$x;} 
public function set_titre($x){
		$this->_titre=$x;} 
public function set_texte($x){
		$this->_texte=$x;} 
public function set_ajout($x){
		$this->_ajout=$x;} 
public function set_modif($x){
		$this->_modif=$x;} 
public function set_suppr($x){
		$this->_suppr=$x;} 
public function set_date($x){
		$this->_date=$x;} 
}