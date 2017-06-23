<?php class media{
private $_id; 
 private $_titre; 
 private $_texte; 
 private $_image; 
 private $_date; 
 
public function get_id(){
		return $this->_id;} 
public function get_titre(){
		return $this->_titre;} 
public function get_texte(){
		return $this->_texte;} 
public function get_image(){
		return $this->_image;} 
public function get_date(){
		return $this->_date;} 

public function set_id($x){
		$this->_id=$x;} 
public function set_titre($x){
		$this->_titre=$x;} 
public function set_texte($x){
		$this->_texte=$x;} 
public function set_image($x){
		$this->_image=$x;} 
public function set_date($x){
		$this->_date=$x;} 
}