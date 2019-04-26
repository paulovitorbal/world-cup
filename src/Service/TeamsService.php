<?php
/**
 * Created by PhpStorm.
 * User: Michel van Hoof
 * Date: 2019-04-12
 * Time: 16:18
 */

namespace App\Service;

use

class TeamsService
{

    /**
     * @var JSONReader
     */
    private $JSONReader;

    public function __construct(JSONReader $JSONReader)
    {
        $this->JSONReader = $JSONReader;
    }


    public function getTeamsThatWere2018ButNotIn2014(): string
    {
        $url2014 = "https://raw.githubusercontent.com/openfootball/world-cup.json/master/2014/worldcup.teams.json";
        $url2018 = "https://raw.githubusercontent.com/openfootball/world-cup.json/master/2018/worldcup.teams.json";
        $teams2014 = $this->JSONReader->readDataFromUrl($url2014);
        $teams2018 = $this->JSONReader->readDataFromUrl($url2018);

        $diff = array_diff($teams2018, $teams2014);

        $ordered_diff = $this->makeAlphabeticalOrder($diff);

        $return = $this->printFormattedTeams($ordered_diff, "2018", "2014");

        return $return;
    }

    public function getTeamsThatWere2014ButNotIn2018(): string
    {
        $teams2014 = $this->readData2014();
        $teams2018 = $this->readData2018();

        $diff = array_diff($teams2014, $teams2018);

        $ordered_diff = $this->makeAlphabeticalOrder($diff);

        $return = $this->printFormattedTeams($ordered_diff, "2014", "2018");

        return $return;
    }

    private function makeAlphabeticalOrder(array $teams): array
    {
        sort($teams);
        return $teams;
    }

    private function printFormattedTeams(array $teams, string $initialDate, string $finalDate): string
    {
        $return = "";

        foreach ($teams as $team) {
            $return .= "$team was present in $initialDate but not in $finalDate\n";
        }

        return $return;
    }

    private function getTeamNamesFromObjects(\stdClass $objects): array
    {
        $teamNames = [];
        foreach ($objects->teams as $team) {
            $teamNames[] = $team->name;
        }
        return $teamNames;
    }


}