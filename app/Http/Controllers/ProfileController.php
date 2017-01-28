<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function getProfile() {
      $adam = [
        'name' => 'Adam Levine',
        'occupation' => 'Singer - Maroon 5',
        'website' => 'maroon5.com',
        'skills' => [
          'Vocal', 'Guitar', 'Actor'
        ]
      ];
      $wiruj = [
        'name' => 'Wiruj Suwanpramote',
        'occupation' => 'Developer',
        'website' => 'blackcatz.com',
        'skills' => [
          'C', 'C++', 'C#', 'Java', 'PHP', 'Unity3D', 'Android'
        ]
      ];

      return view('profile', ['profiles' => [$adam, $wiruj]]);
    }
}
