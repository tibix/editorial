<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Cluj, CJ',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in lacus ac diam pellentesque mollis. Cras fringilla, odio eu commodo iaculis, orci ipsum auctor nisi, a porta quam ipsum eu turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum sollicitudin neque auctor leo ultricies, nec consequat elit mollis. Vestibulum ornare accumsan placerat. Nunc non erat nulla. Suspendisse potenti. Sed hendrerit mattis eros sed lobortis. Morbi feugiat scelerisque lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In enim dui, gravida at mauris ultrices, mattis blandit nunc. Duis in erat id nunc pharetra sodales quis sodales augue. In id sagittis risus. Vestibulum maximus blandit felis, non suscipit ante consequat eu.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in lacus ac diam pellentesque mollis. Cras fringilla, odio eu commodo iaculis, orci ipsum auctor nisi, a porta quam ipsum eu turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum sollicitudin neque auctor leo ultricies, nec consequat elit mollis. Vestibulum ornare accumsan placerat. Nunc non erat nulla. Suspendisse potenti. Sed hendrerit mattis eros sed lobortis. Morbi feugiat scelerisque lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In enim dui, gravida at mauris ultrices, mattis blandit nunc. Duis in erat id nunc pharetra sodales quis sodales augue. In id sagittis risus. Vestibulum maximus blandit felis, non suscipit ante consequat eu.'
        // ]);
    }
}
