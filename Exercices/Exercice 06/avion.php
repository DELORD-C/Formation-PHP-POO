<?php

class Avion extends VehiculeVolant {
    function accélére () {
        $this->vitesse = $this->vitesse * $this->acceleration;
    }
}