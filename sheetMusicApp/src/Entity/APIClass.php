<?php

namespace App\Entity;

use App\Repository\APIClassRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpClient\HttpClient;

/**
 * @ORM\Entity(repositoryClass=APIClassRepository::class)
 */
class APIClass
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function index()
    {
        $songs = $_GET["song"] ?? "";

        $client = HttpClient::create();

        $songsterrResponse = $client->request('GET', 'http://www.songsterr.com/a/ra/songs.json?pattern=' . $songs . '');
        $geniusResponse = $client->request('POST', 'https://genius.p.rapidapi.com/search/q='. $songs, [
            'headers' => [
                "x-rapidapi-host" => "genius.p.rapidapi.com",
                "x-rapidapi-key" => "03a7b6cf72mshfa048cb2511248fp1e0424jsndc2ad8729005"
            ]
        ]);
        die($geniusResponse->getContent());


        return json_decode($songsterrResponse->getContent(), JSON_PRETTY_PRINT);
    }

}
