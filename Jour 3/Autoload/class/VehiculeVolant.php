<?php

Abstract class VehiculeVolant extends Vehicule {
    function crash () {
        return $this->nom . " s'est crashé(e) !";
    }
}