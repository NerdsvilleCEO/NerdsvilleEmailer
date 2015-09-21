<?php

interface NerdsvilleEmail {
  /* Constructor Functions */
    public function __construct($to, $from, $subject, $altBody, $HTML=False);

  /* Email Info Setters*/
    public function setTo($to);
    public function setFrom($from);
    public function setSubject($subject);
    public function setAltBody($altBody);
    public function setHTML($HTML);

  /* Email State Setters */
    public function setSent($sent=True);

  /* Email Info Getters */
    public function getTo();
    public function getFrom();
    public function getSubject();
    public function getAltBody();
    public function getHTML();

  /* Email State Getters */
    public function getSent();
}


