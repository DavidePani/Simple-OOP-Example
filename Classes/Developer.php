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

class Developer extends Employee implements Worker{
    /**
     * @var integer
     */
    private $linesOfCode = 0;

	/**
	 * @param string $firstName
	 * @param string $lastName
	 * @param \DateTime $start
	 */
	function __construct($firstName, $lastName, \DateTime $start){
        parent::__construct($firstName, $lastName, $start);
        
        $this->setRole("Developer");
        $this->linesOfCode = rand(100, 1000);
    }

    /**
     * {@inheritDoc}
     * @see \DavidePani\OOPExample\Human\Worker::productivity()
     */
    public function productivity(){
        return $this->linesOfCode;
    }
}
