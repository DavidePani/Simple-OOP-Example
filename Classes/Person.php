<?php
/**
* Copyright (C) 2013 Davide Pani (info@davidepani.com)
* This file is part of Simple-OOP-Example
* 
* Simple-OOP-Example is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or 
* any later version.
* 
* Simple-OOP-Example is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with Simple-OOP-Example.  If not, see <http://www.gnu.org/licenses/>.
* 
* 
* @author Davide Pani
*
*/

namespace DavidePani\OOPExample\Human;

class Person {
	
	/**
	 * @var string
	 */
	private $firstName;
    /**
     * @var string
     */
    private $lastName;

	/**
	 * @param string $firstName
	 * @param string $lastName
	 */
	function __construct($firstName, $lastName){
		$this->setFirstName($firstName);
		$this->setLastName($lastName);
	}
	
    /**
     * @param string $firstName
     * @throws \InvalidArgumentException
     */
    public function setFirstName($firstName){
        if(!is_string($firstName) || empty(trim($firstName))){
            throw new \InvalidArgumentException("First name not valid");
        }
        $this->firstName = trim($firstName);
    }
    
    /**
     * @param string $lastName
     * @throws \InvalidArgumentException
     */
    public function setLastName($lastName){
        if(!is_string($lastName) || empty(trim($lastName))){
            throw new \InvalidArgumentException("Last name not valid");
        }
        $this->lastName = trim($lastName);
    }
    
    /**
     * @return string
     */
    public function getFirstName(){
        return $this->firstName;
    }
    
    /**
     * @return string
     */
    public function getLastName(){
        return $this->lastName;
    }
    
	/**
	 * @return string
	 */
	public function getFullName(){
		return $this->getFirstName() . ' ' . $this->getLastName();
	}
} 


