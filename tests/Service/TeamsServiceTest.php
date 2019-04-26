<?php
/**
 * Created by PhpStorm.
 * User: Michel van Hoof
 * Date: 2019-04-12
 * Time: 16:18
 */

namespace Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\TeamsService;


class TeamsServiceTest extends TestCase
{
    /**
     * @var TeamsService
     */
    private $adapter;

    protected function setUp(): void
    {
        $this->adapter = new TeamsService();
    }

    public function testGetTeamsThatWere2014ButNotIn2018(): void
    {
        $teamDiff1 = $this->adapter->getTeamsThatWere2014ButNotIn2018();

        $this->assertStringEqualsFile(__DIR__ . '/../data/diff_2014_2018.txt', $teamDiff1);
    }

    public function testGetTeamsThatWere2018ButNotIn2014(): void
    {
        $teamDiff2 = $this->adapter->getTeamsThatWere2018ButNotIn2014();

        $this->assertStringEqualsFile(__DIR__ . '/../data/diff_2018_2014.txt', $teamDiff2);
    }
}
