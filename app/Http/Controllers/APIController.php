<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class APIController extends Controller
{
    public function getPrayerTime($location)
    {
      $client = new Client(['base_uri' => "https://muslimsalat.p.rapidapi.com/"]);
      $req = $client->request('GET',$location.'.json',[
        'headers' => [
          'X-RapidAPI-Host' => 'muslimsalat.p.rapidapi.com',
          'X-RapidAPI-Key' => 'a87b025783msh27c9984bcc2c9e6p138316jsn6fa1d61b9315',
        ]
      ]);

      $res = json_decode((string) $req->getBody(), true);

      $html = '<table class="table table-bordered">
        <tr>
          <td>Location</td>
          <td>'.$res['query'].'</td>
        </tr>
        <tr>
          <td>Date</td>
          <td>'.$res['items'][0]['date_for'].'</td>
        </tr>
        <tr>
          <td>Fajr</td>
          <td>'.$res['items'][0]['fajr'].'</td>
        </tr>
        <tr>
          <td>Shurooq</td>
          <td>'.$res['items'][0]['shurooq'].'</td>
        </tr>
        <tr>
          <td>Dhuhr</td>
          <td>'.$res['items'][0]['dhuhr'].'</td>
        </tr>
        <tr>
          <td>Asr</td>
          <td>'.$res['items'][0]['asr'].'</td>
        </tr>
        <tr>
          <td>Maghrib</td>
          <td>'.$res['items'][0]['maghrib'].'</td>
        </tr>
        <tr>
          <td>Isha</td>
          <td>'.$res['items'][0]['isha'].'</td>
        </tr>
      </table>';

      return $html;
    }
}
