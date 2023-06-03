<?php
class Mascota {
    public $id;
    public $Nombre;
    public $Raza;
    public $Dueno

    public function Mostrar Datos ()
    {
        echo 'Datos de la mascota' . '<br>';
        echo 'id' . $this->id . '<br>' ;
        echo 'Nombre' . $this->Nombre . '<br>' ;
        echo 'Raza' . $this->Raza . '<br>';



        echo '----------------' . '<br>';
        echo 'Dueno'. '<br>';
        echo 'id'. $this->Dueno->id .  '<br>';
        echo 'Nombre' . $this->Dueno->Nombre . '<br>';
        echo 'Documento' . $this->Dueno->Documento .  '<br>';
        echo 'Apellido' . $this->Dueno->Apellido .  '<br>';
        echo 'Celular' . $this->Dueno->Celular .  '<br>' ;
        echo 'Direccion' . $this->Dueno->Direccion .  '<br>' ;
        

    }

    


}