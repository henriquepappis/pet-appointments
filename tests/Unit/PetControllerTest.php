<?php
declare(strict_types = 1);
namespace Tests\Unit;

use App\Http\Controllers\api\PetController;
use PHPUnit\Framework\TestCase;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetControllerTest extends TestCase
{
    protected $db;
    protected $request;

    public function setUp() :void
    {
        parent::setUp();
        $this->initDb();


        $this->validator = $this->getMockBuilder(Validator::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        $this->request = $this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        $this->request->nome = 'AA';
        $this->request->especie = 'C';
    }

    protected function initDb()
    {
        $capsule = new Manager();
        $capsule->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        $this->db = $capsule->getDatabaseManager();

        // loading simple DB tables creation
        $importSql = file_get_contents(__DIR__ . '/../resources/database/dump_pet.sql');
        $this->db->statement($importSql);
        $importSql = file_get_contents(__DIR__ . '/../resources/database/inject_pet.sql');
        $this->db->statement($importSql);
    }

    public function testFindAll()
    {
        $size = count(PetController::listAll($this->request));
        $this->assertEquals($size, 6);
    }
}
