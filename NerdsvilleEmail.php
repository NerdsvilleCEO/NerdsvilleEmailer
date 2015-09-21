<?php
require_once "interfaces/NerdsvilleEmailInterface.php";

class NerdsvilleEmailObject implements NerdsvilleEmail {
  /* Constructor Functions */
  public function __construct($to, $from, $subject, $altBody){
    setInitialState($to, $from, $subject, $altBody);
  }

  public function __construct($to, $from, $subject, $altBody, $HTML){
    setInitialState($to, $from, $subject, $altBody);
    $this->HTML = $HTML;
  }

  private function setInitialState($to, $from, $subject, $altBody){
    $this->to = $to;
    $this->from = $from;
    $this->subject = $subject;
    $this->altBody = $altBody;
  }

  /* Email Info Setters*/
  public function setTo($to){
    $this->to = $to;
  }

  public function setFrom($from){
    $this->from = $from;
  }

  public function setSubject($subject){
    $this->subject = $subject;
  }

  public function setAltBody($altBody){
    $this->altBody = $altBody;
  }

  public function setIsHTML($boolean=True){
    $this->isHTML = $boolean;
  }

  /* Email State Setters */
  public function setSent($sent=True){
    $this->sent = $sent;
  }

  private function setError($error){
    $this->error = $error;
  }

  /* Email Info Getters */
  public function getTo(){
    return $this->to;
  }

  public function getFrom(){
    return $this->from;
  }

  public function getSubject(){
    return $this->subject;
  }

  public function getAltBody(){
    return $this->altBody;
  }

  /* Email State Getters */
  public function getSent(){
    return $this->sent;
  }

  private function getError(){
    return $this->error;
  }
}

