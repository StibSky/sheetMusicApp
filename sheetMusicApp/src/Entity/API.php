<?php


class API
{
    public function index()
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'http://www.songsterr.com/a/wa/bestMatchForQueryString?s={runescape theme}&a={runescape}');
        return json_decode($response->getContent(), true, JSON_PRETTY_PRINT);
    }
}
