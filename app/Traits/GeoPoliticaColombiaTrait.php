<?php

namespace App\Traits;


trait GeoPoliticaColombiaTrait {

    public function randomSelectDepartament() {
        $geopolitico = [
            ["departamento" => "Amazonas", "ciudad" => "Leticia"],
            ["departamento" => "Antioquia","ciudad" => "Medellín"],
            ["departamento" => "Arauca","ciudad" => "Arauca"],
            ["departamento" => "Atlántico","ciudad" => "Barranquilla"],
            ["departamento" => "Bogotá","ciudad" => "Bogotá"],
            ["departamento" => "Bolívar","ciudad" => "Cartagena de Indias"],
            ["departamento" => "Boyaca","ciudad" => "Tunja"],
            ["departamento" => "Caldas","ciudad" => "Manizales"],
            ["departamento" => "Caquetá","ciudad" => "Florencia"],
            ["departamento" => "Casanare","ciudad" => "Yopal"],
            ["departamento" => "Cauca","ciudad" => "Popayán"],
            ["departamento" => "Cesar","ciudad" => "Valledupar"],
            ["departamento" => "Chocó","ciudad" => "Quibdó"]
        ];
        return fake()->randomElement($geopolitico);

    }

}