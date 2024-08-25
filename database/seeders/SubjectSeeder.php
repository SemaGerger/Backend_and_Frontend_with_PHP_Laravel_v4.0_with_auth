<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\QuestionSubject;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
           
            // KPSS Türkçe
            ['name' => 'diger', 'lesson_id' => 1],
            ['name' => 'Sözcükte Anlam', 'lesson_id' => 1],
            ['name' => 'Cümlenin Anlamı', 'lesson_id' => 1],
            ['name' => 'Sözcük Türleri', 'lesson_id' => 1],
            ['name' => 'Sözcükte Yapı', 'lesson_id' => 1],
            ['name' => 'Cümlenin Ögeleri', 'lesson_id' => 1],
            ['name' => 'Ses Olayları', 'lesson_id' => 1],
            ['name' => 'Yazım Kuralları', 'lesson_id' => 1],
            ['name' => 'Noktalama İşaretleri', 'lesson_id' => 1],
            ['name' => 'Paragrafta Anlam', 'lesson_id' => 1],
            ['name' => 'Paragrafta Anlatım Yolları ve Biçimleri', 'lesson_id' => 1],
            ['name' => 'Sözel Mantık', 'lesson_id' => 1],
            ['name' => 'Sözlü ve Yazılı Anlatım', 'lesson_id' => 1],
            ['name' => 'Edebî Türler ve Şiir Bilgisi', 'lesson_id' => 1],
            ['name' => 'Dil Bilgisi ve Yapısı', 'lesson_id' => 1],
            ['name' => 'Anlam Bilgisi', 'lesson_id' => 1],
            ['name' => 'Metin Türleri', 'lesson_id' => 1],
            ['name' => 'Sözlük Bilgisi', 'lesson_id' => 1],
            ['name' => 'Çeviri ve Dilbilgisel Hatalar', 'lesson_id' => 1],
            ['name' => 'Dil ve Anlatım Bilgisi', 'lesson_id' => 1],
            ['name' => 'Cümle Türleri ve Yapısı', 'lesson_id' => 1],
            ['name' => 'Anlatım Bozuklukları', 'lesson_id' => 1],
            ['name' => 'Söz Sanatları', 'lesson_id' => 1],
            ['name' => 'Bağlaçlar ve İlişki Sözcükleri', 'lesson_id' => 1],
            ['name' => 'Yazılı Anlatım Teknikleri', 'lesson_id' => 1],
            ['name' => 'Sözcük Türetme ve Biçim Bilgisi', 'lesson_id' => 1],
            ['name' => 'Sözlük Oluşturma ve Kullanımı', 'lesson_id' => 1],
            ['name' => 'Edebiyat Akımları ve Temsilcileri', 'lesson_id' => 1],
        
            // KPSS Matematik
            ['name' => 'diger', 'lesson_id' => 2],
            ['name' => 'Temel Kavramlar', 'lesson_id' => 2],
            ['name' => 'Rasyonel Sayılar', 'lesson_id' => 2],
            ['name' => 'Ondalık Sayılar', 'lesson_id' => 2],
            ['name' => 'Basit Eşitsizlikler', 'lesson_id' => 2],
            ['name' => 'Mutlak Değer', 'lesson_id' => 2],
            ['name' => 'Üslü Sayılar', 'lesson_id' => 2],
            ['name' => 'Köklü Sayılar', 'lesson_id' => 2],
            ['name' => 'Çarpanlara Ayırma', 'lesson_id' => 2],
            ['name' => 'Denklem Çözme', 'lesson_id' => 2],
            ['name' => 'Sayı Problemleri', 'lesson_id' => 2],
            ['name' => 'Yaş Problemleri', 'lesson_id' => 2],
            ['name' => 'Hareket Problemleri', 'lesson_id' => 2],
            ['name' => 'Yüzde, Kar-Zarar, Faiz Problemleri', 'lesson_id' => 2],
            ['name' => 'Bağıntı ve Fonksiyon', 'lesson_id' => 2],
            ['name' => 'İşlem', 'lesson_id' => 2],
            ['name' => 'Olasılık', 'lesson_id' => 2],
            ['name' => 'Sayısal Mantık', 'lesson_id' => 2],
        
            // KPSS Geometri
            ['name' => 'diger', 'lesson_id' => 3],
            ['name' => 'Özel Üçgenler', 'lesson_id' => 2],
            ['name' => 'Dörtgenler', 'lesson_id' => 2],
            ['name' => 'Çokgenler', 'lesson_id' => 2],
            ['name' => 'Analitik Geometri', 'lesson_id' => 2],
        
            // KPSS Tarih
            ['name' => 'diger', 'lesson_id' => 3],
            ['name' => 'İslamiyet’ten Önceki Türk Devletleri', 'lesson_id' => 3],
            ['name' => 'İlk Müslüman Türk Devletleri', 'lesson_id' => 3],
            ['name' => 'Osmanlı Devleti Siyasi', 'lesson_id' => 3],
            ['name' => 'Osmanlı Devleti Kültür ve Uygarlık', 'lesson_id' => 3],
            ['name' => 'Kurtuluş Savaşı Hazırlık Dönemi', 'lesson_id' => 3],
            ['name' => 'Kurtuluş Savaşı Cepheleri', 'lesson_id' => 3],
            ['name' => 'Devrim Tarihi', 'lesson_id' => 3],
            ['name' => 'Atatürk Dönemi İç ve Dış Politika', 'lesson_id' => 3],
            ['name' => 'Atatürk İlkeleri', 'lesson_id' => 3],
            ['name' => 'Çağdaş Türk ve Dünya Tarihi', 'lesson_id' => 3],
        
            // KPSS Coğrafya
            ['name' => 'diger', 'lesson_id' => 4],
            ['name' => 'Türkiye’nin Coğrafi Konumu', 'lesson_id' => 4],
            ['name' => 'Türkiye’nin Yer Şekilleri ve Su Örtüsü', 'lesson_id' => 4],
            ['name' => 'Türkiye’nin İklimi ve Bitki Örtüsü', 'lesson_id' => 4],
            ['name' => 'Toprak ve Doğa Çevre', 'lesson_id' => 4],
            ['name' => 'Türkiye’nin Beşeri Coğrafyası', 'lesson_id' => 4],
            ['name' => 'Tarım', 'lesson_id' => 4],
            ['name' => 'Madenler ve Enerji Kaynakları', 'lesson_id' => 4],
            ['name' => 'Sanayi', 'lesson_id' => 4],
            ['name' => 'Ulaşım', 'lesson_id' => 4],
            ['name' => 'Turizm', 'lesson_id' => 4],
        
            // KPSS Vatandaşlık
            ['name' => 'diger', 'lesson_id' => 5],
            ['name' => 'Hukuka Giriş', 'lesson_id' => 5],
            ['name' => 'Genel Esaslar', 'lesson_id' => 5],
            ['name' => 'Yasama', 'lesson_id' => 5],
            ['name' => 'Yürütme', 'lesson_id' => 5],
            ['name' => 'İdari Yapı', 'lesson_id' => 5],
            ['name' => 'Güncel Olaylar', 'lesson_id' => 5],
        
            // İngilizce A 
            ['name' => 'diger', 'lesson_id' => 8],
            ['name' => 'Present Simple (Geniş Zaman)', 'lesson_id' => 8],
            ['name' => 'Present Continuous (Şimdiki Zaman)', 'lesson_id' => 8],
            ['name' => 'Past Simple (Geçmiş Zaman)', 'lesson_id' => 8],
            ['name' => 'Possessive Adjectives (Sahiplik Sıfatları)', 'lesson_id' => 8],
            ['name' => 'Possessive \'s (Sahiplik \'s)', 'lesson_id' => 8],
            ['name' => 'Articles (Artikeller)', 'lesson_id' => 8],
            ['name' => 'Nouns and Pronouns (İsimler ve Zamirler)', 'lesson_id' => 8],
            ['name' => 'Adjectives (Sıfatlar)', 'lesson_id' => 8],
            ['name' => 'Prepositions of Place (Yer Edatları)', 'lesson_id' => 8],
            ['name' => 'Numbers (Sayılar)', 'lesson_id' => 8],
            ['name' => 'Time Expressions (Zaman İfadeleri)', 'lesson_id' => 8],


            ['name' => 'diger', 'lesson_id' => 9],
            ['name' => 'Past Continuous (Geçmiş Zamanın Sürekli Hali)', 'lesson_id' => 9],
            ['name' => 'Present Perfect (Yakın Geçmiş Zaman)', 'lesson_id' => 9],
            ['name' => 'Future Forms (Gelecek Zaman Biçimleri)', 'lesson_id' => 9],
            ['name' => 'Comparatives and Superlatives (Karşılaştırmalar ve Üstünlük Dereceleri)', 'lesson_id' => 9],
            ['name' => 'First Conditional (Birinci Koşul Cümleleri)', 'lesson_id' => 9],
            ['name' => 'Second Conditional (İkinci Koşul Cümleleri)', 'lesson_id' => 9],
            ['name' => 'Relative Clauses (İlgi Cümlecikleri)', 'lesson_id' => 9],
            ['name' => 'Reported Speech (Dolaylı Anlatım)', 'lesson_id' => 9],
            ['name' => 'Passive Voice (Edilgen Çatı)', 'lesson_id' => 9],
            ['name' => 'Indirect Questions (Dolaylı Sorular)', 'lesson_id' => 9],
            ['name' => 'Articles (Artikeller)', 'lesson_id' => 9],
            ['name' => 'Modal Verbs (Kipli Fiiller)', 'lesson_id' => 9],
            ['name' => 'Vocabulary Expansion (Kelime Bilgisi)', 'lesson_id' => 9],
            ['name' => 'Reading Comprehension (Okuma Anlama)', 'lesson_id' => 9],
            ['name' => 'Writing Skills (Yazma Becerileri)', 'lesson_id' => 9],
            ['name' => 'Listening Skills (Dinleme Becerileri)', 'lesson_id' => 9],
        
            // KPSS Temel Matematik
            ['name' => 'diger', 'lesson_id' => 10],
            ['name' => 'Kümeler', 'lesson_id' => 10],
            ['name' => 'Sayılar', 'lesson_id' => 10],
            ['name' => 'İşlem Sırası ve Temel İşlemler', 'lesson_id' => 10],
            ['name' => 'Oran ve Orantı', 'lesson_id' => 10],
            ['name' => 'İşlem Yapma', 'lesson_id' => 10],
            ['name' => 'Denklemler ve Eşitsizlikler', 'lesson_id' => 10],
            ['name' => 'Fonksiyonlar', 'lesson_id' => 10],
            ['name' => 'Olasılık ve İstatistik', 'lesson_id' => 10],
            ['name' => 'Geometri', 'lesson_id' => 10],
            ['name' => 'Problemler ve Mantık', 'lesson_id' => 10],
            ['name' => 'Rasyonel Sayılar', 'lesson_id' => 10],
        ];
        
        foreach ($subjects as $subject) {
        
            Subject::create([
                'name' => $subject['name'],
 
                'status' => 'active',
                'lesson_id' => $subject['lesson_id'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
