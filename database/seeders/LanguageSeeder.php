<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['language' => 'English'],
            ['language' => 'Hindi'],
            ['language' => 'Bengali'],
            ['language' => 'Portuguese'],
            ['language' => 'Russian'],
            ['language' => 'Japanese'],
            ['language' => 'Western Punjabi'],
            ['language' => 'Marathi'],
            ['language' => 'Telugu'],
            ['language' => 'Wu Chinese'],
            ['language' => 'Turkish'],
            ['language' => 'Korean'],
            ['language' => 'French'],
            ['language' => 'German'],
            ['language' => 'Vietnamese'],
            ['language' => 'Tamil'],
            ['language' => 'Yue Chinese'],
            ['language' => 'Urdu'],
            ['language' => 'Javanese'],
            ['language' => 'Italian'],
            ['language' => 'Egyptian Arabic'],
            ['language' => 'Gujarati'],
            ['language' => 'Iranian Persian'],
            ['language' => 'Bhojpuri'],
            ['language' => 'Southern Min'],
            ['language' => 'Hakka'],
            ['language' => 'Jin Chinese'],
            ['language' => 'Hausa'],
            ['language' => 'Kannada'],
            ['language' => 'Indonesian'],
            ['language' => 'Polish'],
            ['language' => 'Yoruba'],
            ['language' => 'Xiang Chinese'],
            ['language' => 'Malayalam'],
            ['language' => 'Odia'],
            ['language' => 'Maithili'],
            ['language' => 'Burmese'],
            ['language' => 'Eastern Punjabi'],
            ['language' => 'Sunda'],
            ['language' => 'Sudanese Arabic'],
            ['language' => 'Algerian Arabic'],
            ['language' => 'Moroccan Arabic'],
            ['language' => 'Ukrainian'],
            ['language' => 'Igbo'],
            ['language' => 'Northern Uzbek'],
            ['language' => 'Sindhi'],
            ['language' => 'North Levantine Arabic'],
            ['language' => 'Romanian'],
            ['language' => 'Tagalog'],
            ['language' => 'Dutch'],
            ['language' => 'Sa`idi Arabic'],
            ['language' => 'Gan Chinese'],
            ['language' => 'Amharic'],
            ['language' => 'Northern Pashto'],
            ['language' => 'Magahi'],
            ['language' => 'Thai'],
            ['language' => 'Saraiki'],
            ['language' => 'Khmer'],
            ['language' => 'Chhattisgarhi'],
            ['language' => 'Somali'],
            ['language' => 'Cebuano'],
            ['language' => 'Nepali'],
            ['language' => 'Mesopotamian Arabic'],
            ['language' => 'Assamese'],
            ['language' => 'Sinhalese'],
            ['language' => 'Northern Kurdish'],
            ['language' => 'Hejazi Arabic'],
            ['language' => 'Nigerian Fulfulde'],
            ['language' => 'Bavarian'],
            ['language' => 'South Azerbaijani'],
            ['language' => 'Greek'],
            ['language' => 'Chittagonian'],
            ['language' => 'Kazakh'],
            ['language' => 'Deccan'],
            ['language' => 'Hungarian'],
            ['language' => 'Kinyarwanda'],
            ['language' => 'Zulu'],
            ['language' => 'South Levantine Arabic'],
            ['language' => 'Tunisian Arabic'],
            ['language' => 'Sanaani Spoken Arabic'],
            ['language' => 'Northern Min'],
            ['language' => 'Southern Pashto'],
            ['language' => 'Rundi'],
            ['language' => 'Czech'],
            ['language' => 'Ta`izzi-Adeni Arabic'],
            ['language' => 'Uyghur'],
            ['language' => 'Eastern Min'],
            ['language' => 'Sylheti']
        ];

        foreach ($languages as $language) {
            Language::create($language);
        }
    }
}
