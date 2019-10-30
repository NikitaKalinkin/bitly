<?php

// User.php
#################################################
##
## PHPLicengine
##
#################################################
## Copyright 2009-{current_year} PHPLicengine
## 
## Licensed under the Apache License, Version 2.0 (the "License");
## you may not use this file except in compliance with the License.
## You may obtain a copy of the License at
##
##    http://www.apache.org/licenses/LICENSE-2.0
##
## Unless required by applicable law or agreed to in writing, software
## distributed under the License is distributed on an "AS IS" BASIS,
## WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
## See the License for the specific language governing permissions and
## limitations under the License.
#################################################

namespace PHPLicengine\Service;
use PHPLicengine\Exception\ResponseException;
use PHPLicengine\Exception\CurlException;

class User extends \PHPLicengine\Api\Api {
 
      private $url;
      
      public function __construct ($api_key)
      {
             parent::__construct($api_key);
             $this->url = 'https://api-ssl.bitly.com/v4/user';       

      }
 
      /*
      Update a User
      https://dev.bitly.com/v4/#operation/updateUser
      */
      public function updateUser(array $params) 
      {
             return $this->patch($this->url, $params);
      }
      
      /*
      Retrieve a User
      https://dev.bitly.com/v4/#operation/getUser
      */
      public function getUser() 
      {
             return $this->get($this->url);
      }
      
      /*
      Add Email To User
      https://dev.bitly.com/v4/#operation/addEmailToUser
      */
      public function addEmailToUser(string $login, array $params) 
      {
             return $this->post($this->url . '/'.$login.'/emails', $params);
      }
      
      
}

