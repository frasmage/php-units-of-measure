<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\PhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;

class Length extends PhysicalQuantity
{
    /**
     * Configure all the standard units of measure
     * to which this quantity can be converted.
     *
     * @return void
     */
    public function __construct($value, $unit)
    {
        parent::__construct($value, $unit);

        // Meter
        $newUnit = UnitOfMeasure::NativeUnitFactory('m');
        $newUnit->addAlias('meter');
        $newUnit->addAlias('meters');
        $newUnit->addAlias('metre');
        $newUnit->addAlias('metres');
        $this->registerUnitOfMeasure($newUnit);

        // Millimeter
        $newUnit = UnitOfMeasure::LinearUnitFactory('mm', 0.001);
        $newUnit->addAlias('millimeter');
        $newUnit->addAlias('millimeters');
        $newUnit->addAlias('millimetre');
        $newUnit->addAlias('millimetres');
        $this->registerUnitOfMeasure($newUnit);

        // Centimeter
        $newUnit = UnitOfMeasure::LinearUnitFactory('cm', 0.01);
        $newUnit->addAlias('centimeter');
        $newUnit->addAlias('centimeters');
        $newUnit->addAlias('centimetre');
        $newUnit->addAlias('centimetres');
        $this->registerUnitOfMeasure($newUnit);

        // Decimeter
        $newUnit = UnitOfMeasure::LinearUnitFactory('dm', 0.1);
        $newUnit->addAlias('decimeter');
        $newUnit->addAlias('decimeters');
        $newUnit->addAlias('decimetre');
        $newUnit->addAlias('decimetres');
        $this->registerUnitOfMeasure($newUnit);

        // Kilometer
        $newUnit = UnitOfMeasure::LinearUnitFactory('km', 1000);
        $newUnit->addAlias('kilometer');
        $newUnit->addAlias('kilometers');
        $newUnit->addAlias('kilometre');
        $newUnit->addAlias('kilometres');
        $this->registerUnitOfMeasure($newUnit);

        // Foot
        $newUnit = UnitOfMeasure::LinearUnitFactory('ft', 0.3048);
        $newUnit->addAlias('foot');
        $newUnit->addAlias('feet');
        $this->registerUnitOfMeasure($newUnit);

        // Inch
        $newUnit = UnitOfMeasure::LinearUnitFactory('in', 0.0254);
        $newUnit->addAlias('inch');
        $newUnit->addAlias('inches');
        $this->registerUnitOfMeasure($newUnit);

        // Mile
        $newUnit = UnitOfMeasure::LinearUnitFactory('mi', 1609.344);
        $newUnit->addAlias('mile');
        $newUnit->addAlias('miles');
        $this->registerUnitOfMeasure($newUnit);

        // Yard
        $newUnit = UnitOfMeasure::LinearUnitFactory('yd', 0.9144);
        $newUnit->addAlias('yard');
        $newUnit->addAlias('yards');
        $this->registerUnitOfMeasure($newUnit);
    }
}