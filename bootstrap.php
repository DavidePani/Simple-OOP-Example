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


/*
 * In some cases it is better using the spl_autoload_register function with a proper folders structure to load files,
 * but in this example I have imported all files directly.
 */
require_once("./Classes/Company.php");
require_once("./Classes/Person.php");
require_once("./Interfaces/Worker.php");
require_once("./Classes/Employee.php");
require_once("./Classes/Developer.php");
require_once("./Classes/Manager.php");
require_once("./Classes/Output.php");
