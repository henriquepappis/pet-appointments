<?php
declare(strict_types = 1);
namespace Tests\Unit;

use App\Http\Controllers\api\AtendimentoController;
use PHPUnit\Framework\TestCase;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Http\Request;

class AtendimentoControllerTest extends TestCase
{
    protected $db;
    protected $request;

    public function setUp() :void
    {
        parent::setUp();
        $this->initDb();

        $this->request = $this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        // $this->request->params = [
        //     'pet_id' => 1,
        //     'data_atendimento' => '2020-12-31',
        //     'descricao' => 'descrição'
        // ];
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
        $importSql = file_get_contents(__DIR__ . '/../resources/database/dump_atendimento.sql');
        $this->db->statement($importSql);
        $importSql = file_get_contents(__DIR__ . '/../resources/database/inject_atendimento.sql');
        $this->db->statement($importSql);
    }

    public function testFindAll()
    {
        $size = count(AtendimentoController::listAll());
        $this->assertEquals($size, 6);
    }

    public function testFindById()
    {
        $this->assertIsObject(AtendimentoController::findById(1));
    }
}
