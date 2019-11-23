<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        ‘fuel’,
        ‘electric‘,
 ];
    /**
     * @var bool
     */

    private $hasParkBrake;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function switchOn()
    {
        $this->lights = true;
    }
    public function switchOff()
    {
        $this->lights = false;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->setEnergy($energy);
        }
        return $this;
    }

    public function setParkBrake()
    {
        $this->hasParkBrake = true;
    }
      public function unsetParkBrake()
    {
        $this->hasParkBrake = false;
    }

    public function start()
    {
        if ($hasParkBrake == true ){
            throw new Exception("Frein a main actif!");
        }
        try {
        } catch(Exception $e){
            $this->hasParkBrake = false;
        }finally{
            echo "Ma voiture roule comme un donut";
        }
        return "Engine started !";
    }
}
