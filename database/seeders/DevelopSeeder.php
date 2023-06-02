<?php

namespace Database\Seeders;

use App\Models\Develop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $develop = new Develop();

        $develop->name = 'Lucas Passos';
        $develop->age = 21;
        $develop->email = 'lucas.passoszxu@gmail.com';
        $develop->phone = '40028922';
        $develop->github = '';
        $develop->linkedin = 'lucas-passos-7755bb203';
        $develop->img = "https://1.bp.blogspot.com/-WBAO0DvfNcE/YX6a0OKDcuI/AAAAAAAAizY/FFqgJ_y7KXIb0F2ICmmbO8UZvYpTjb3lgCNcBGAsYHQ/s1280/os-melhores-wallpapers-de-naruto-celular%2B%25283%2529.png";

        $develop->save();

        $develop = new Develop();

        $develop->name = 'João Pedro';
        $develop->age = 20;
        $develop->email = 'jpa@gmail.com';
        $develop->phone = '40028922';
        $develop->github = '';
        $develop->linkedin = 'joãopedrolvs';
        $develop->img = "https://1.bp.blogspot.com/-wFpliM65Egg/YX6aqcp7UtI/AAAAAAAAixY/AEXmzsmPQqcaTl4_dewCrdtnIfk78PGEQCNcBGAsYHQ/s1480/os-melhores-wallpapers-de-naruto-celular%2B%25281%2529.png";

        $develop->save();

        $develop = new Develop();

        $develop->name = 'Bruno';
        $develop->age = 21;
        $develop->email = 'bruno@gmail.com';
        $develop->phone = '40028922';
        $develop->github = '';
        $develop->linkedin = 'brunodebritoo';
        $develop->img = "https://1.bp.blogspot.com/-YZxv1NclCoc/YX6c68gTfSI/AAAAAAAAi0o/WGrPfFTj_Nor2DAQJUbquzvPhCeanHTJwCNcBGAsYHQ/s1334/melhores-wallpapers-de-naruto-4k%2B%25281%2529.jpg";

        $develop->save();

        
    }
}
