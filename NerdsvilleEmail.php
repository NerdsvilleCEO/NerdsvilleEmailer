<?php
require_once "interfaces/NerdsvilleEmailInterface.php";

class NerdsvilleEmail implements NerdsvilleEmailInterface {
  /* Constructor Functions */
  public function __construct($to, $from, $subject, $altBody, $HTML=False){
    setInitialState($to, $from, $subject, $altBody);
    if($HTML !== False){
      $this->HTML = $HTML;
    }
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

  public function setHTML($HTML){
    $this->HTML = $HTML;
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

  public function getHTML(){
    return $this->getHTML();
  }

  /* Email State Getters */
  public function getSent(){
    return $this->sent;
  }

  private function getError(){
    return $this->error;
  }
}

