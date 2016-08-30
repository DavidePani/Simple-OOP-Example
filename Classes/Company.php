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

namespace DavidePani\OOPExample;

use DavidePani\OOPExample\Human\Manager;
use DavidePani\OOPExample\Human\Developer;
use DavidePani\OOPExample\Human\Worker;

class Company{

	/**
	 * @var array
	 */
	private static $workers = [];

    /**
     * @param unknown $firstName
     * @param unknown $lastName
     * @param \Datetime $start
     */
    public function hirePerson($firstName, $lastName, \Datetime $start){    	
        if(rand(0, 100)%2==0){
            self::$workers[] = new Manager($firstName, $lastName, $start);
        } else {
            self::$workers[] = new Developer($firstName, $lastName, $start);
        }
    }

    /**
     * @param \DavidePani\OOPExample\Human\Worker $worker1
     * @param \DavidePani\OOPExample\Human\Worker $worker2
     * @return integer
     */
    public static function workerCompare(Worker $worker1, Worker $worker2){
        if($worker1->productivity() == $worker2->productivity()){
            return 0;
        }

        if($worker1->productivity() > $worker2->productivity()){
            return 1;
        }

        return -1;
    }
    
    /**
     * @return array of \DavidePani\OOPExample\Human\Employee
     */
    public static function getWorkes(){
    	return self::$workers;
    }

    /**
     * @return NULL|\DavidePani\OOPExample\Human\Employee
     */
    public static function getBestWorker(){
        $bestWorker = null;
        foreach(self::$workers as $worker){
            if($bestWorker === null || self::workerCompare($worker, $bestWorker) < 0){
                $bestWorker = $worker;
            }
        }
        
        return $bestWorker;
    }
    
    
} 


