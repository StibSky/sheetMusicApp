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
        $response = $client->request('GET', 'http://www.songsterr.com/a/ra/songs.json?pattern='.$songs.'');
        return json_decode($response->getContent(),  JSON_PRETTY_PRINT);
    }
}
