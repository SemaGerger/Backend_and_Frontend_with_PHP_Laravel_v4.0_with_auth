<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\ArticleSubject;
use App\Models\ArticleTag;
use App\Models\Subject;
use App\Models\Tag;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $subjectIds = Subject::pluck('id')->toArray();
        $tagIds = Tag::pluck('id')->toArray();

        $article1 = Article::create([
            'title' => 'KPSS Sınavı: Devlet Memurluğu İçin Bilmeniz Gerekenler',
            'content1' => 'KPSS Nedir ve Kimler İçin Gereklidir. KPSS Lisans Konu Dağılımı Nedir. Hangi kurum tarafından düzenlenir. KPSS, adayların hangi yetenek ve bilgilerini ölçer.',
            'content2' => "KPSS (Kamu Personeli Seçme Sınavı), Türkiye'de kamu kurumlarına memur alımı için yapılan merkezi bir sınavdır. ÖSYM tarafından düzenlenen bu sınav, Genel Yetenek, Genel Kültür, Eğitim Bilimleri, Alan Bilgisi, ve Öğretmenlik Alan Bilgisi Testi (ÖABT) gibi farklı oturumları içerir. KPSS, A grubu ve B grubu kadrolar için iki farklı kategoride yapılır. A grubu kadrolar, müfettiş, uzman ve denetmen gibi kariyer meslekleri hedefleyenler için olup, B grubu ise düz memurluk pozisyonları için yapılmaktadır. Her yıl düzenlenen bu sınav, mezuniyet derecesine göre lisans, ön lisans ve ortaöğretim düzeyinde uygulanır. KPSS, adayların genel yetenek ve genel kültür bilgilerini, öğretmen adaylarının mesleki bilgilerini ölçer. Devlet memuru olmak isteyen adayların KPSS'ye girerek başarılı olmaları gerekmektedir. KPSS sonuçları, ilgili kamu kurumlarının belirlediği taban puanlara göre değerlendirilir ve atama işlemleri bu puanlara göre yapılır. KPSS, adayların kamu sektöründe kariyer yapmaları için önemli bir basamaktır.",
            'image_table' => 'KPSS_Sinavi_Sorulari.jpg',
            'meta_author' => 'Sınavım Var Sitesi',
            'meta_keywords' => 'KPSS, Sınav, Lisans',
            'main_id' => 1, 
            'exam_id' => 1, 
            'field_id' => 1,
            'lesson_id' => 1, 
            'status' => 'active',
            'published_at' => now(),
            'views' => 0,
        ]);


        $article2 = Article::create([
            'title' => 'YKS Sınavı: Üniversiteye Giriş İçin Bilmeniz Gerekenler',
            'content1' => 'YKS Nedir ve Kimler İçin Gereklidir. YKS Oturumları ve Konu Dağılımı. Hangi kurum tarafından düzenlenir. YKS, adayların hangi yetenek ve bilgilerini ölçer.',
            'content2' => "YKS (Yükseköğretim Kurumları Sınavı), Türkiye'de üniversiteye giriş için yapılan merkezi bir sınavdır. ÖSYM tarafından düzenlenen bu sınav, Temel Yeterlilik Testi (TYT), Alan Yeterlilik Testleri (AYT), ve Yabancı Dil Testi (YDT) olmak üzere üç oturumdan oluşur. TYT, adayların temel Türkçe ve matematik bilgilerini ölçerken, AYT adayların seçtikleri alan derslerindeki bilgilerini test eder. YDT ise yabancı dil bilgilerini ölçer. YKS, üniversite adaylarının genel yetenek ve bilgi seviyelerini değerlendirir. Üniversiteye girişte önemli bir aşama olan bu sınav, lisans ve ön lisans programlarına yerleşmek isteyen adaylar için zorunludur. YKS sonuçları, adayların tercih ettikleri üniversite ve programlara yerleşmelerinde belirleyici rol oynar. Her yıl düzenlenen bu sınav, adayların başarı sıralamasına göre değerlendirilir ve üniversiteler tarafından belirlenen taban puanlara göre yerleştirme işlemleri yapılır. YKS, üniversite eğitimine adım atmak isteyen adaylar için kritik bir basamaktır.",
            'image_table' => 'YKS_Sinavi_Sorulari.jpg',
            'meta_author' => 'Sınavım Var Sitesi',
            'meta_keywords' => 'YKS, Sınav',
            'main_id' => 1, 
            'exam_id' => 2, 
            'field_id' => 2,
            'lesson_id' => 2, 
            'status' => 'active',
            'published_at' => now(),
            'views' => 0,
        ]);


        $article3 = Article::create([
            'title' => 'ALES Sınavı: Lisansüstü Eğitim ve Akademik Kariyer İçin Bilmeniz Gerekenler',
            'content1' => 'ALES Nedir ve Kimler İçin Gereklidir. ALES Soru Dağılımı ve Konu Başlıkları. Hangi kurum tarafından düzenlenir. ALES, adayların hangi yetenek ve bilgilerini ölçer.',
            'content2' => "ALES (Akademik Personel ve Lisansüstü Eğitimi Giriş Sınavı), Türkiye'de lisansüstü eğitim programlarına ve akademik kariyer hedefleyen kişilere yönelik yapılan merkezi bir sınavdır. ÖSYM tarafından düzenlenen bu sınav, sayısal ve sözel olmak üzere iki ana bölümden oluşur. ALES, adayların analitik düşünme, sayısal ve sözel yeteneklerini ölçer. Bu sınav, yüksek lisans, doktora programlarına başvuru yapacak adaylar ve akademik kadro pozisyonlarına başvuracak kişiler için gereklidir. ALES sonuçları, üniversitelerin belirlediği taban puanlara göre değerlendirilir ve lisansüstü programlara yerleştirme ve akademik kadro alımlarında kullanılır. Her yıl düzenlenen bu sınav, adayların akademik ve profesyonel gelişimlerine katkıda bulunmak amacıyla yapılmaktadır.",
            'image_table' => 'ALES_Sinavi_Sorulari.jpg',
            'meta_author' => 'Sınavım Var Sitesi',
            'meta_keywords' => 'ALES, Sınav',
            'main_id' => 1, 
            'exam_id' => 1, 
            'field_id' => 3,
            'lesson_id' => 3, 
            'status' => 'active',
            'published_at' => now(),
            'views' => 0,
        ]);
  

        $article4 = Article::create([
            'title' => 'IELTS Sınavı: Uluslararası İngilizce Yeterlilik Sınavı',
            'content1' => 'IELTS Nedir ve Kimler İçin Gereklidir. IELTS Sınavı İçerikleri ve Bölümleri. Hangi kurum tarafından düzenlenir. IELTS, adayların hangi yetenek ve bilgilerini ölçer.',
            'content2' => "IELTS (International English Language Testing System), uluslararası geçerliliği olan bir İngilizce yeterlilik sınavıdır. Bu sınav, İngilizce konuşulan ülkelerde eğitim görmek, çalışmak veya göçmenlik yapmak isteyen bireylerin İngilizce dil yeterliliklerini ölçer. IELTS sınavı, dinleme, okuma, yazma ve konuşma bölümlerinden oluşur ve adayların genel İngilizce yeterlilik seviyelerini değerlendirir. IELTS, akademik ve genel eğitim olmak üzere iki ana versiyona sahiptir. Akademik IELTS, üniversite ve yüksek lisans programlarına başvuranlar için, genel eğitim IELTS ise göçmenlik ve iş başvuruları için kullanılır. IELTS, dünya çapında birçok üniversite ve kurum tarafından kabul edilmektedir ve adayların İngilizce becerilerini ölçmek için geniş bir yelpazeye hitap eder.",
            'image_table' => 'IELTS_Sinavi_Sorulari.jpg',
            'meta_author' => 'Sınavım Var Sitesi',
            'meta_keywords' => 'IELTS, Sınav',
            'main_id' => 1, 
            'exam_id' => 2, 
            'field_id' => 1,
            'lesson_id' => 2, 
            'status' => 'active',
            'published_at' => now(),
            'views' => 0,
        ]);

      
        DB::table('article_tags')->insert([
            ['article_id' => $article1->id, 'tag_id' => $tagIds[1]],
            ['article_id' => $article1->id, 'tag_id' => $tagIds[2]],
            ['article_id' => $article2->id, 'tag_id' => $tagIds[3]],
            ['article_id' => $article3->id, 'tag_id' => $tagIds[2]],
            ['article_id' => $article4->id, 'tag_id' => $tagIds[1]],
        ]);

       
        DB::table('article_subjects')->insert([
            ['article_id' => $article1->id, 'subject_id' => $subjectIds[1]],
            ['article_id' => $article2->id, 'subject_id' => $subjectIds[1]],
            ['article_id' => $article3->id, 'subject_id' => $subjectIds[2]],
            ['article_id' => $article4->id, 'subject_id' => $subjectIds[3]],
        ]);
    }
}
