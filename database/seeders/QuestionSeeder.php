<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Question;
use App\Models\QuestionSubject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjectIds = Subject::pluck('id')->toArray();
       
        $question1 = Question::create([
            'code' => 'sinav_' . Str::upper(Str::random(6)),
            'year' => 2024,
            'question' => 'Günümüzde sosyal medyada paylaşılan içeriklerin sayısının artması, ---- bir eğilim haline geldi. Artık tatil fotoğraflarından spor aktivitelerine kadar hemen her şey ---- paylaşılır hale geldi.',
            'question2' => 'Bu parçada boş bırakılan yerlere sırasıyla aşağıdakilerden hangisi getirilmelidir?',
            'question3' => null,
            'optionA' => 'sıradan - özel olarak',
            'optionB' => 'popüler - geniş kitlelerle',
            'optionC' => 'nadir - sadece birkaç kişi tarafından',
            'optionD' => 'özensiz - detaylı olarak',
            'optionE' => 'dikkat çekici - yalnızca arkadaşlar arasında',
            'correctAnswer' => 'B',
            'explanation' => 'b) popüler - geniş kitlelerle - Sosyal medyada içerik paylaşımı yaygın hale geldiğinde, bu durum "popüler" bir eğilim olarak tanımlanabilir. İçerikler "geniş kitlelerle) paylaşılmaya başlandığında anlam bütünlüğü sağlanır.',
            'question_image_table' => null,
        ]);

        $question2 = Question::create([
            'code' => 'sinav_' . Str::upper(Str::random(6)),
            'year' => 2024,
            'question' => 'Teknolojinin gelişmesiyle birlikte, eski moda ürünler ---- bir hale geldi. Şimdi herkes, bu ürünlerin ---- teknolojiye sahip olanlarını tercih ediyor.',
            'question2' => 'Bu parçada boş bırakılan yerlere sırasıyla aşağıdakilerden hangisi getirilmelidir?',
            'question3' => null,
            'optionA' => 'sıradan - geleneksel',
            'optionB' => 'modern - güncel',
            'optionC' => 'gereksiz - en son',
            'optionD' => 'lüks - yerel',
            'optionE' => 'alışılmış - tarihi',
            'correctAnswer' => 'C',
            'explanation' => 'c) gereksiz - en son - Teknoloji geliştikçe eski moda ürünler "gereksiz" hale gelir. İnsanlar genellikle "en son" teknolojiye sahip ürünleri tercih eder, bu nedenle cümledeki anlam bütünlüğü sağlanır.',
            'question_image_table' => null,
        ]);
            
        $question3 = Question::create([
            'code' => 'sinav_' . Str::upper(Str::random(6)),
            'year' => 2024,
            'question' => 'E-ticaret sitelerindeki ürünlerin çeşitliliği, ---- bir deneyim sunuyor. Bu platformlarda, hemen her tür ürün ---- kolaylıkla bulunabiliyor.',
            'question2' => 'Bu parçada boş bırakılan yerlere sırasıyla aşağıdakilerden hangisi getirilmelidir?',
            'question3' => null,
            'optionA' => 'sınırlı - nadiren',
            'optionB' => 'standart - zorlukla',
            'optionC' => 'çeşitli - rahatça',
            'optionD' => 'karmaşık - özenle',
            'optionE' => 'belirsiz - yavaşça',
            'correctAnswer' => 'C',
            'explanation' => 'c) çeşitli - rahatça - E-ticaret sitelerindeki ürün çeşitliliği "çeşitli" bir deneyim sunar. Bu platformlarda "rahatça" her tür ürün bulunabilir, bu nedenle anlam bütünlüğü sağlanır.',
            'question_image_table' => null,
        ]);
        DB::table('question_subjects')->insert([
            ['question_id' => $question1->id, 'subject_id' => $subjectIds[1]],
            ['question_id' => $question2->id, 'subject_id' => $subjectIds[1]],
            ['question_id' => $question3->id, 'subject_id' => $subjectIds[2]],
        ]);
    }
}
