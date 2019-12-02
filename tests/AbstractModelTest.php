<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Askorm\AbstractModel;
require_once 'UserModel.php';

final class AbstractModelTest extends TestCase
{
    public function testGetInstance(): void
    {
        $userModel = UserModel::getInstance(2);
        $this->assertEquals($userModel->getId(),2);
    }

    public function testGetInstance2(): void
    {
        // singleton, same instance than previous test
        $userModel = UserModel::getInstance(100);
        $this->assertEquals($userModel->getId(), 2);
    }

    public function testIsInstanceOf(): void
    {
        $am = AbstractModel::getInstance();
        $this->assertTrue($am instanceof AbstractModel);
    }

    public function testIsInstanceOfParent(): void
    {
        //theory test, child is instance of parent
        $am = AbstractModel::getInstance();
        $this->assertTrue($am instanceof UserModel);
    }
}
