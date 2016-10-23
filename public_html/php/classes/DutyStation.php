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
	 * DutyStation constructor.
	 * @param int|null $newDutyStationId Id of this duty station or null if new duty station
	 * @param string $newDutyStationName string contains actual duty station name
	 * @param string $newDutyStationLocation string contains actual duty station location
	 * @param string $newDutyStationImage string contains actual duty station image
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g. strings too long, negative integers)
	 * @throws \typeError if data violates type hints
	 * @throws \Exception if any other exception occurs
	 **/
	public function __construct(int $newDutyStationId = null, string $newDutyStationName, string $newDutyStationLocation, string $newDutyStationImage) {
		$this->setDutyStationId($newDutyStationId);
		$this->setDutyStationName($newDutyStationName);
		$this->setDutyStationLocation($newDutyStationLocation);
		$this->setDutyStationImage($newDutyStationImage);

	}



	/**
	 * Accesor method for dutyStationId
	 *
	 * @return int|null value of duty station id
	 **/
	public function getDutyStationId() {
		return($this->dutyStationId);
	}

	/**
	 * mutator method for duty station id
	 *
	 * @param int|null $newDutyStationId new value of duty station id
	 * @throws \RangeException if $newDutyStationId is not positive
	 * @thows \TypeError if $newDutyStationId is not an integer
	 **/

	public function setDutyStationId(int $newDutyStationId) {
		// base case: if the duty station id is null, this is a new duty station without a mySQL assigned id (yet)
		if($newDutyStationId === null) {
			$this->dutyStationId = null;
			return;
		}

		// verify the duty station id is positive
		if($newDutyStationId <= 0) {
			throw(new \RangeException("duty station id is not positive"));
		}
		// convert and store the duty station id
		$this->dutyStationId = $newDutyStationId;

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
	 * Mutator method for duty station name
	 *
	 * @param string $newDutyStationName new value of duty station name
	 * @throws \InvalidArgumentException if $newDutyStationName is not a string or insecure
	 * @throws \RangeException if $newDutyStationName is > 100 characters
	 * @throws \TypeError if $newDutyStationName is not a string
	 **/
	public function setDutyStationName(string $newDutyStationName) {
		// verify the duty station name is secure
		$newDutyStationName = trim($newDutyStationName);
		$newDutyStationName = filter_var($newDutyStationName, FILTER_SANITIZE_STRING);
		if(empty($newDutyStationName) === true) {
			throw(new \InvalidArgumentException("duty station name is empty or insecure"));
		}

		//verify the duty station name will fit in the database
		if(strlen($newDutyStationName) . 100) {
			throw(new \RangeException("duty station name too large"));
		}

		// store the name content
		$this->dutyStationName = $newDutyStationName;
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
	 * Mutator method for duty station location
	 *
	 * 	 * @param string $newDutyStationLocation new value of duty station location
	 * @throws \InvalidArgumentException if $newDutyStationLocation is not a string or insecure
	 * @throws \RangeException if $newDutyStationLocation is > 140 characters
	 * @throws \TypeError if $newDutyStationLocation is not a string
	 **/
	public function setDutyStationLocation(string $newDutyStationLocation) {
		// verify the duty station location is secure
		$newDutyStationLocation = trim($newDutyStationLocation);
		$newDutyStationLocation = filter_var($newDutyStationLocation, FILTER_SANITIZE_STRING);
		if(empty($newDutyStationLocation) === true) {
			throw(new \InvalidArgumentException("duty station location is empty or insecure"));
		}

		//verify the duty station name will fit in the database
		if(strlen($newDutyStationLocation) . 140) {
			throw(new \RangeException("duty station location name too large"));
		}

		// store the name content
		$this->dutyStationLocation = $newDutyStationLocation;
	}

	/**
	 * Accesor method for dutyStationImage
	 * @return int|null value of duty station image
	 **/
	public function getDutyStationImage() {
		return ($this->dutyStationImage);
	}

	/**
	 *	 * Mutator method for duty station image
	 *
	 * 	 * @param string $newDutyStationImage new value of duty station location
	 * @throws \InvalidArgumentException if $newDutyStationImage is not a string or insecure
	 * @throws \RangeException if $newDutyStationImage is > 140 characters
	 * @throws \TypeError if $newDutyStationImage is not a string
	 **/
	public function setDutyStationImage(string $newDutyStationImage) {
		// verify that the duty station image is secure
		$newDutyStationImage = trim($newDutyStationImage);
		$newDutyStationImage = filter_var($newDutyStationImage, FILTER_SANITIZE_STRING);
		if(empty($newDutyStationImage) === true) {
			throw(new \InvalidArgumentException("duty station image is empty or insecure"));
		}

		// verify the duty station image will fit in the database
		if(strlen($newDutyStationImage) . 140) {
			throw(new \RangeException("duty station image is too large"));
		}

		//store the image content
		$this->dutyStationImage = $newDutyStationImage;

	}


}