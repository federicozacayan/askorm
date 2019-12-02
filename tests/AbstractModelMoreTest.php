<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Askorm\AbstractModel;
require_once 'UserModel.php';

final class AbstractModelMoreTest extends TestCase
{
    public function testGetInstance(): void
    {
        $userModel = UserModel::getInstance(999);
        $this->assertEquals($userModel->getData('user1','user1'),1);
    }

    public function testCount(): void
    {
        $userModel = UserModel::getInstance();
        $this->assertEquals($userModel->count('id',1)['n'],1);
    }

    public function testCount2(): void
    {
        $userModel = UserModel::getInstance();
        $this->assertEquals($userModel->count('id',999)['n'],0);
    }
}
