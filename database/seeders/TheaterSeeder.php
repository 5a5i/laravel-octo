<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Theater;

class TheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theaters = [
            ['name' => 'AEON Tebrau City Shopping Centre'],
            ['name' => 'AEON Bukit Indah Shopping Centre'],
            ['name' => 'Toppen Shopping Centre'],
            ['name' => 'Tasek Central Mall'],
            ['name' => 'AEON Mall Kulaijaya'],
            ['name' => 'The Mall, Mid Valley Southkey'],
            ['name' => 'Paradigm Mall Johor Bahru'],
            ['name' => 'Sunway Big Box Mall'],
            ['name' => 'KSL City Mall'],
            ['name' => 'Square One Mall'],
            ['name' => 'Heritage Mall'],
            ['name' => 'Kluang Mall'],
            ['name' => 'AEON Mall Bandar Dato Onn'],
            ['name' => 'Mall of Medini'],
            ['name' => 'U Mall'],
            ['name' => 'Johor Bahru City Square'],
            ['name' => 'Segamat Central'],
            ['name' => 'Today`s Mall Ulu Tiram'],
            ['name' => 'U Sentral Segamat'],
            ['name' => 'Today`s Market Seri Alam'],
            ['name' => 'Kluang Parade'],
            ['name' => 'Perling Mall'],
            ['name' => 'Skudai Parade'],
            ['name' => 'Beletime Danga Bay'],
            ['name' => 'R&F Mall'],
            ['name' => 'Batu Pahat Mall'],
            ['name' => 'Kompleks Pusat Bandar Pasir Gudang'],
            ['name' => 'New Lido Cinemas'],
            ['name' => 'Broadway Theatre'],
            ['name' => 'Aman Central'],
            ['name' => 'Amanjaya Mall'],
            ['name' => 'Central Square'],
            ['name' => 'Kulim Central'],
            ['name' => 'Riverfront City'],
            ['name' => 'Alor Star Mall'],
            ['name' => 'Village Mall'],
            ['name' => 'Jitra Mall'],
            ['name' => 'Langkawi Parade'],
            ['name' => 'Mid Valley Megamall'],
            ['name' => 'Pavilion KL'],
            ['name' => 'MyTown Shopping Mall'],
            ['name' => 'NU Sentral'],
            ['name' => 'Quill City Mall'],
            ['name' => 'Melawati Mall'],
            ['name' => 'Berjaya Times Square'],
            ['name' => 'EkoCheras Mall'],
            ['name' => 'The Gardens Mall'],
            ['name' => 'Kepong Village Mall'],
            ['name' => 'Setapak Central'],
            ['name' => 'Suria KLCC'],
            ['name' => 'Wangsa Walk Mall'],
            ['name' => 'Sunway Velocity Mall'],
            ['name' => '1 Shamelin'],
            ['name' => 'Cheras Sentral'],
            ['name' => 'AEON Metro Prima'],
            ['name' => 'AEON AU2'],
            ['name' => 'Sunway Putra Mall'],
            ['name' => 'Ampang Point Shopping Centre'],
            ['name' => 'Brem Mall'],
            ['name' => 'The Ridge @ KL East Mall'],
            ['name' => 'Ampang Spectrum'],
            ['name' => 'Sentul Cinema'],
            ['name' => 'Federal Cinema'],
            ['name' => 'Pandan Capital'],
            ['name' => 'Coliseum Theatre'],
            ['name' => 'Bukit Bintang City Centre'],
            ['name' => 'The Exchange TRX'],
            ['name' => '118 Mall'],
            ['name' => 'Pavilion Bukit Jalil'],
            ['name' => 'Pavilion Damansara Heights'],
            ['name' => 'Solaris Parq'],
            ['name' => 'Perdana Cineplex Labuan'],
            ['name' => 'Dataran Pahlawan Malacca'],
            ['name' => 'AEON Mall Bandaraya Melaka'],
            ['name' => 'Element Mall'],
            ['name' => 'Melaka Mall Complex'],
            ['name' => 'Mahkota Parade'],
            ['name' => 'Song Seng Plaza'],
            ['name' => 'Melaka Gateway Shopping Mall'],
            ['name' => 'Palm Mall'],
            ['name' => 'Terminal 1'],
            ['name' => 'Era Square Mall'],
            ['name' => 'AEON Mall Seremban 2'],
            ['name' => 'Kiara Square'],
            ['name' => 'KM Plaza'],
            ['name' => 'MesaMall'],
            ['name' => 'East Coast Mall'],
            ['name' => 'Mentakab Star Mall'],
            ['name' => 'Berjaya Megamall'],
            ['name' => 'Kuantan City Mall'],
            ['name' => 'SkyAvenue'],
            ['name' => 'Gurney Plaza'],
            ['name' => 'Queensbay Mall'],
            ['name' => 'Sunway Carnival Mall'],
            ['name' => 'GEM Megamall'],
            ['name' => 'Gurney Paragon Mall'],
            ['name' => '1st Avenue'],
            ['name' => 'AEON Bukit Mertajam'],
            ['name' => 'Batu Kawan Shopping Mall'],
            ['name' => 'Prangin Mall'],
            ['name' => 'Megamall Penang'],
            ['name' => 'Sunshine Bertam Shopping Mall'],
            ['name' => 'LFS Butterworth'],
            ['name' => 'AEON Mall Station 18'],
            ['name' => 'AEON Mall Taiping'],
            ['name' => 'AEON Mall Klebang'],
            ['name' => 'AEON Mall Seri Manjung'],
            ['name' => 'AEON Mall Kinta City'],
            ['name' => 'Kerian Sentral Mall'],
            ['name' => 'D` Mall Seri Iskandar'],
            ['name' => 'mmCineplexes Kampar'],
            ['name' => 'Taiping Sentral Mall'],
            ['name' => 'MBO Cinemas Teluk Intan'],
            ['name' => 'LFS Cinemas Sitiawan'],
            ['name' => 'Bangunan Seri Kinta'],
            ['name' => 'My Cinema'],
            ['name' => 'My Cinema'],
            ['name' => 'Ipoh Parade'],
            ['name' => 'AEON BIG Midtown Falim'],
            ['name' => 'Taiping Mall'],
            ['name' => 'IOI City Mall (Phase 1)'],
            ['name' => 'IOI City Mall (Phase 2)'],
            ['name' => 'Alamanda'],
            ['name' => '1 Borneo Hypermall'],
            ['name' => 'Suria Sabah'],
            ['name' => 'Centre Point Sabah'],
            ['name' => 'Imago Mall'],
            ['name' => 'Harbour Mall'],
            ['name' => 'City Mall'],
            ['name' => 'Eastern Plaza'],
            ['name' => 'Megalong Mall'],
            ['name' => 'Keningau Mall'],
            ['name' => 'Harbour Town'],
            ['name' => 'International Technology and Commercial Centre (ITCC)'],
            ['name' => 'PacifiCity Mall'],
            ['name' => 'Grand Merdeka Mall'],
            ['name' => 'CityONE Megamall'],
            ['name' => 'Bintang Megamall'],
            ['name' => 'Times Square Megamall'],
            ['name' => 'Permaisuri Imperial City Mall'],
            ['name' => 'ViVaCity Megamall'],
            ['name' => 'Boulevard Shopping Mall'],
            ['name' => 'Boulevard Shopping Mall Bintulu'],
            ['name' => 'Summer Mall'],
            ['name' => 'The Spring Mall'],
            ['name' => 'AEON Central Mall'],
            ['name' => 'The Spring Bintulu'],
            ['name' => 'Bintulu Commerce Square Mall'],
            ['name' => 'Premier Hotel'],
            ['name' => '1 Utama (Old Wing)'],
            ['name' => 'Sunway Pyramid'],
            ['name' => 'AEON Bukit Tinggi'],
            ['name' => 'Setia Walk Mall'],
            ['name' => 'Central i-City'],
            ['name' => 'Bukit Raja Shopping Centre'],
            ['name' => 'AEON Rawang'],
            ['name' => 'AEON Cheras Selatan'],
            ['name' => 'D`Pulze'],
            ['name' => 'Encorp Strand Mall'],
            ['name' => 'Jaya Shopping Centre'],
            ['name' => 'The Mines'],
            ['name' => '1 Utama (New Wing)'],
            ['name' => 'IOI Mall'],
            ['name' => 'Setia City Mall'],
            ['name' => 'Paradigm Mall'],
            ['name' => '3 Damansara'],
            ['name' => 'Klang Parade'],
            ['name' => 'The Summit USJ'],
            ['name' => 'The Starling Mall'],
            ['name' => 'Citta Mall'],
            ['name' => 'Subang Parade'],
            ['name' => 'Tropicana Gardens Mall'],
            ['name' => 'Selayang Star City Mall'],
            ['name' => 'KL Northgate @ Paragon Mall'],
            ['name' => 'Harbour Place'],
            ['name' => 'Atria Shopping Gallery'],
            ['name' => 'Space U8'],
            ['name' => 'Ecohills Walk Mall'],
            ['name' => 'Sri Intan'],
            ['name' => 'Capitol Selayang'],
            ['name' => 'Metro Kajang Plaza'],
            ['name' => 'PJ State'],
            ['name' => 'e@Curve'],
            ['name' => '1 Plaza'],
            ['name' => 'One City Mall'],
            ['name' => 'IRDKL Mall'],
            ['name' => 'Amerin Mall'],
            ['name' => 'Lido Banting'],
            ['name' => 'Pawagam Sun Rawang'],
            ['name' => 'da:men'],
            ['name' => 'Empire City Damansara Mall'],
            ['name' => 'Pinnacle PJ'],
            ['name' => 'Paya Bunga Sentral'],
            ['name' => 'Mesra Mall'],
            ['name' => 'Kompleks Boling Bandar Baru Kijal'],
            ['name' => 'KTCC Mall'],
            ['name' => 'Mayang Mall']
        ];

        foreach ($theaters as $theater) {
            Theater::create($theater);
        }
    }
}
