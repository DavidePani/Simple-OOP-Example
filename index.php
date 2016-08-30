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

use \DavidePani\OOPExample\Company;
use \DavidePani\OOPExample\Output;
use \DavidePani\OOPExample\Human\Employee;

require_once("bootstrap.php");


$data = json_decode(file_get_contents("data.json"));
foreach($data as $tmp){
    Company::hirePerson($tmp->firstName, $tmp->lastName, new \Datetime($tmp->start));
}

echo 'List of workers' . Output::getNL() . Output::getNL();
foreach(Company::getWorkes() as $worker){
	echo $worker->getFullName() . Output::getNL();
}

$bestWorker = Company::getBestWorker();

echo  Output::getNL() . '***************' . Output::getNL() . 'Worker awards' . Output::getNL() . '***************' . Output::getNL();

if ($bestWorker instanceof Employee){
	echo "The best worker is..." . Output::getNL() . $bestWorker->getFullName() . " and his/her role is " . $bestWorker->getRole() . Output::getNL();
} else {
	echo "There is not a best worker... Strange!" . Output::getNL();
}

?>