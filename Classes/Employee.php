<?php
/**
* Copyright (C) 2016 Davide Pani (info@davidepani.com)
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

class Employee extends Person{
    /**
     * @var \DateTime
     */
    private $start;
    /**
     * @var string
     */
    private $role;

	/**
	 * @param string $firstName
	 * @param string $lastName
	 * @param \DateTime $start
	 */
	function __construct($firstName, $lastName, \DateTime $start){
        parent::__construct($firstName, $lastName);
        
		$this->setStart($start);
	}

    /**
     * @param \DateTime $start
     * @throws \InvalidArgumentException
     */
    public function setStart(\DateTime $start){
        if(empty($start)){
            throw new \InvalidArgumentException("Start date cannot be empty");
        }
        $this->start = $start;
    }
    
    /**
     * @return DateTime
     */
    public function getStart(){
        return $this->start;
    }
    
	/**
	 * @return boolean
	 */
	public function isActive(){
        if($this->stop === null){
            return true;
        }

        return false;
	}
	
    /**
     * @param string $role
     * @throws \InvalidArgumentException
     */
    protected function setRole($role){
    	if(!is_string($role) || empty(trim($role))){
    		throw new \InvalidArgumentException("Role not valid");
    	}
        $this->role = trim($role);
    }
    
    /**
     * @return string
     */
    public function getRole(){
        return $this->role;
    }
}
