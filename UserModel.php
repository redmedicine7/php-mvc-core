<?php


namespace redmedicine7\phpmvc;

use redmedicine7\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;

}