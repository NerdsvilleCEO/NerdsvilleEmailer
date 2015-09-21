<?php

interface NerdsvilleEmail {
  /* Constructor Functions */
    public function __construct($to, $from, $subject, $altBody);
    public function __construct($to, $from, $subject, $altBody, $isHTML);

  /* Email Info Setters*/
    public function setTo($to);
    public function setFrom($from);
    public function setSubject($subject);
    public function setAltBody($altBody);
    public function setIsHTML($boolean=True);

  /* Email State Setters */
    public function setSent($sent=True);

  /* Email Info Getters */
    public function getTo();
    public function getFrom();
    public function getSubject();
    public function getAltBody();
    public function getIsHTML();

  /* Email State Getters */
    public function getSent();
}


