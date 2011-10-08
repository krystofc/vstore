<?php

/**
 * This file is part of vStore
 * 
 * Copyright (c) 2011 Adam Staněk <adam.stanek@v3net.cz>
 * 
 * For more information visit http://www.vstore.cz
 * 
 * vStore is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * vStore is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with vStore bundle. If not, see <http://www.gnu.org/licenses/>.
 */

namespace vStore\Shop;

use vStore,
		vBuilder;

/**
 * Basic implementation of order payment method
 *
 * @author Adam Staněk (velbloud)
 * @since Oct 7, 2011
 */
class PaymentMethod extends vBuilder\Object implements IPaymentMethod {
	
	private $_id;
	private $_name;
	private $_description;
	private $_charge;
	
	/**
	 * Constructor
	 * 
	 * @param string id
	 * @param string name
	 * @param string description
	 * @param float charge for this method
	 */
	function __construct($id, $name, $description = null, $charge = 0) {
		$this->_id = $id;
		$this->_name = $name;
		$this->_description = $description;
		$this->_charge = $charge;
	}
	
	/**
	 * Returns method ID
	 * 
	 * @return string
	 */
	function getId() {
		return $this->_id;
	}
	
	/**
	 * Returns charge for this method
	 * 
	 * @return float 
	 */
	function getCharge() {
		return $this->_charge;
	}
	
	/**
	 * Returns method name
	 * 
	 * @return string
	 */
	function getName() {
		return $this->_name;
	}
		
	/**
	 * Returns method description
	 * 
	 * @return string
	 */
	function getDescription() {
		return $this->_description;
	}
	
}