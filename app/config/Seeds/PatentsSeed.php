<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Patents seed.
 */
class PatentsSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $table = $this->table('patents');
        $rows = $this->fetchRow('SELECT COUNT(*) AS count FROM patents');

        if ((int)$rows['count'] === 0) {
            $patents = [
                [
                    'id' => 1,
                    'patent_id' => 'US-11074495-B2',
                    'title' => 'System and method for extremely efficient image and pattern recognition and artificial intelligence platform',
                    'assignee' => 'Z Advanced Computing Inc. (Zac)',
                    'inventor_author' => 'Lotfi A. Zadeh Saied, Tadayon Bijan Tadayon',
                    'priority_date' => '2013-02-28'
                ],
                [
                    'id' => 2,
                    'patent_id' => 'US-11526167-B1',
                    'title' => 'Autonomous vehicle component maintenance and repair',
                    'assignee' => 'State Farm Mutual Automobile Insurance Company',
                    'inventor_author' => 'Blake Konrardy, Scott T. Christensen, Gregory Hayward, Scott Farris',
                    'priority_date' => '2016-01-22'
                ],
                [
                    'id' => 3,
                    'patent_id' => 'AU-2021204774-B2',
                    'title' => 'Security in a smart-sensored home',
                    'assignee' => 'Google Llc',
                    'inventor_author' => 'Anthony M. Fadell Yoky Matsuoka Matthew Lee, Rogers Honjo Shigefumi, David Sloo, Maxime Veron',
                    'priority_date' => '2013-03-14'
                ],
                [
                    'id' => 4,
                    'patent_id' => 'US-11238538-B1',
                    'title' => 'Accident risk model determination using autonomous vehicle operating data',
                    'assignee' => 'State Farm Mutual Automobile Insurance Company',
                    'inventor_author' => 'Blake Konrardy, Scott T. Christensen, Gregory Hayward, Scott Farris',
                    'priority_date' => '2014-05-20'
                ],
                [
                    'id' => 5,
                    'patent_id' => 'US-11694122-B2',
                    'title' => 'Distributed machine learning systems apparatus and methods',
                    'assignee' => 'Nantomics Llc Nant Holdings Ip Llc',
                    'inventor_author' => 'Christopher W. Szeto Stephen, Charles Benz, Nicholas J. Witchey',
                    'priority_date' => '2016-07-18'
                ],
            ];
            $table->insert($patents)->save();
        }
    }
}
