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

class Output{
    /**
     * @return string - \n if command line interface or </br> in all other cases
     */
    static function getNL(){
        if(PHP_SAPI === 'cli'){
            return "\n";
        }

        return "</br>";
    }
}
