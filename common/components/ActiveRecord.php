<?php
namespace common\components;

use Yii;

class ActiveRecord extends \yii\db\ActiveRecord {

	private $_firstErrorAttribute = false;

	/**
	 * Returns the first error's attribute name
	 *
	 * @since 0.0.3
	 * @param {string} $attribute
	 * @return {string|null}
	 */
	public function isFirstErrorAttribute($attribute) {
		if($this->_firstErrorAttribute === false) {
			$errorAttributes = array_keys($this->firstErrors);
			$this->_firstErrorAttribute = array_shift($errorAttributes);
		}

		return $attribute == $this->_firstErrorAttribute;
	}

	/**
	 * Returns the first error
	 *
	 * @since 0.0.3
	 * @return {string|null}
	 */
	public function getFirstErrorInFirstErrors() {
		return array_shift($this->firstErrors);
	}

}
