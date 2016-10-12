<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;

/**
 * User model
 *
 * @since 0.0.1
 * @property {integer} $id
 * @property {string} $name
 * @property {string} $email
 * @property {string} $mobile
 * @property {string} $password_hash
 * @property {string} $auth_key
 * @property {integer} $status
 * @property {integer} $created_at
 * @property {integer} $updated_at
 *
 * @property {string} $username
 * @property {string} $password
 * @property {string} $password_repeat
 * @property {string} $password_old
 * @property {boolean} $remember_me
 * @property {integer} $remember_period
 */
class User extends \yii\account\models\User {

}
