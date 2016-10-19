<?php
/**
 * List of duty stations member served at.
 *
 * qwerty qwerty qwerty
 *
 * @author <hlozano2@cnm.edu>
 * @version 4.2.0
 */

class DutyStation{
	/**
 	* id for this station; this is the primary key
 	* @var int $dutyStationId
 	**/
	private $dutyStationId;
	/**
	 * This is the actual name of the duty station and it's a unique atribute.
	 * @var int $dutyStationName
	 **/
	private $dutyStationName;
	/**
	 * This is the physical location of the duty station
	 * @var $dutyStationLocation
	 **/
	private $dutyStationLocation;
	/**
	 * This is the image/decal of the duty station
	 * @var $dutyStationImage
	 **/
	private $dutyStationImage;

	// CONSTRUCTOR GOES HERE LATER

	/**
	 * Accesor method for dutyStationId
	 *
	 * @return int|null value of duty station id
	 **/
	public function getDutyStationId() {
		return($this->dutyStationId);
	}

	/**
	 *
	 * Accesor method for dutyStationName
	 * @return int|null value of duty station name
	 **/

	public function getDutyStationName() {
		return ($this->dutyStationName);
	}

	/**
	 *
	 * Accesor method for dutyStationLocation
	 * @return int|null value of duty station loction
	 **/
	public function getDutyStationLocation() {
		return ($this->dutyStationLocation);
	}

	/**
	 * Accesor method for dutyStationImage
	 * @return int|null value of duty station image
	 **/
	public function getDutyStationImage() {
		return ($this->dutyStationImage);
	}
}