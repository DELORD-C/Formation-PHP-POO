<?php

class Avion extends VehiculeVolant {
    function accélérer () {
        if ($this->vitesse == 0) {
            $this->vitesse = $this->acceleration;
        }
        else {
            $this->vitesse = $this->vitesse * $this->acceleration;
        }
    }
}