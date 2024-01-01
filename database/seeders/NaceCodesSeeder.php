<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\NaceCodes;

class NaceCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // Önce ilgili tablodan tüm kayıtları sil
            DB::table('nace_codes')->delete();

            // Sonra auto-increment değerini sıfırla
            DB::statement("ALTER TABLE `nace_codes` AUTO_INCREMENT = 1");

            // Yeni kayıtları tanımla
            $new_records = [
                [
                   'nace_code'=>'01.11.07',
                   'business'=>'Baklagillerin yetiştirilmesi (fasulye (taze ve kuru), bakla, nohut, mercimek, acı bakla, bezelye, araka vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.11.12',
                   'business'=>'Tahıl yetiştiriciliği (buğday, dane mısır, süpürge darısı, arpa, çavdar, yulaf, darı, kuş yemi vb.) (pirinç hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.11.14',
                   'business'=>'Yağlı tohum yetiştiriciliği (soya fasulyesi, yer fıstığı, pamuk çekirdeği, kene otu çekirdeği (Hint yağı çekirdeği), keten tohumu, hardal tohumu, nijer tohumu, kolza, aspir tohumu, susam tohumu, ayçiçeği tohumu vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.12.14',
                   'business'=>'Çeltik (kabuklu pirinç) yetiştirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.13.17',
                   'business'=>'Şeker pancarı yetiştirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.13.18',
                   'business'=>'Yenilebilir kök ve yumruların yetiştiriciliği (patates, tatlı patates, manyok, Hint yer elması, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.13.19',
                   'business'=>'Diğer sebze tohumlarının yetiştiriciliği (şeker pancarı tohumu dahil, diğer pancar tohumları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.13.20',
                   'business'=>'Meyvesi yenen sebzelerin yetiştirilmesi (hıyar, kornişon, sivri ve dolmalık biber, kavun, karpuz, kabakgil türleri, domates, biber, patlıcan vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.13.21',
                   'business'=>'Mantar ve yer mantarları (domalan) yetiştirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.13.22',
                   'business'=>'Kökleri, soğanları, yumruları tüketilen sebzelerin yetiştirilmesi (havuç, şalgam, sarımsak, soğan, arpacık soğan, pırasa ve diğer benzer sebzeler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.13.23',
                   'business'=>'Yapraklı veya saplı sebzelerin yetiştirilmesi (enginar, kuşkonmaz, lahana, karnabahar ve brokoli, marul ve hindiba, ıspanak vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.14.01',
                   'business'=>'Şeker kamışı yetiştirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.15.01',
                   'business'=>'Tütün yetiştiriciliği',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.16.02',
                   'business'=>'Pamuk yetiştiriciliği',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.16.90',
                   'business'=>'Diğer lifli bitkilerin yetiştirilmesi (keten, kenevir, jüt vs.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.19.01',
                   'business'=>'Hayvan yemi bitkilerinin yetiştiriciliği (sarı şalgam, mangoldlar, yemlik kökleri, yonca, korunga, yemlik mısır ve diğer otlar ile bunların tohumları ve pancar tohumları dahil, şeker pancarı tohumları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.19.02',
                   'business'=>'Çiçek yetiştiriciliği (lale, kasımpatı, zambak, gül vb. ile bunların tohumları)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.19.90',
                   'business'=>'Başka yerde sınıflandırılmamış tek yıllık diğer bitkisel ürünlerin yetiştirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.21.05',
                   'business'=>'Üzüm yetiştiriciliği (şaraplık, sofralık ve diğer üzümler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.22.05',
                   'business'=>'Tropikal ve subtropikal meyvelerin yetiştiriciliği (muz, hurma, incir, avokado, mango vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.23.02',
                   'business'=>'Turunçgillerin yetiştirilmesi (greyfurt, limon, misket limonu, portakal, mandalina vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.24.04',
                   'business'=>'Yumuşak veya sert çekirdekli meyvelerin yetiştirilmesi (elma, kayısı, kiraz, ayva, erik vb.) (turunçgiller ve üzüm hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.25.08',
                   'business'=>'Diğer ağaç ve çalı (çok yıllık bitkilerin) meyvelerinin ve sert kabuklu meyvelerin (yaban mersini, kuş üzümü, kestane, fıstık, çilek, ahududu, ceviz, keçiboynuzu vb. (fındık hariç)) yetiştirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.25.09',
                   'business'=>'Fındık yetiştiriciliği',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.26.02',
                   'business'=>'Zeytin yetiştiriciliği',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.26.90',
                   'business'=>'Diğer yağlı meyvelerin yetiştiriciliği (Hindistan cevizi, hurma palmiyeleri vb.) (zeytin hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.27.02',
                   'business'=>'Çay yetiştiriciliği (siyah çay, yeşil çay, Paraguay çayı vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.27.90',
                   'business'=>'İçecek üretiminde kullanılan diğer bitkisel ürünlerin yetiştiriciliği (kahve, kakao, vb.) (çay yetiştiriciliği hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.28.01',
                   'business'=>'Baharatlık, aromatik (ıtırlı), uyuşturucu nitelikte ve eczacılıkla ilgili bitkisel ürünlerin (anason, muskat, tarçın, karanfil, zencefil, vanilya, beyaz veya kara biber, ıhlamur, adaçayı vb.) yetiştirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.29.01',
                   'business'=>'Kauçuk ağacı, yılbaşı ağacı, örgü, dolgu ve tabaklama yapmak için kullanılan bitkisel ürünler vb. uzun ömürlü bitkisel ürünlerin yetiştirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.30.03',
                   'business'=>'Dikim için sebze fidesi, meyve fidanı vb. yetiştirilmesi',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'01.30.04',
                   'business'=>'Dikim için çiçek ve diğer bitkilerin yetiştirilmesi (dekoratif amaçlarla bitki ve çim yetiştirilmesi dahil, sebze fidesi, meyve fidanı hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>' 01.41.31',
                   'business'=>'(Değişik satır:RG-11/8/2023-32276) Sütü sağılan büyükbaş hayvan yetiştiriciliği (sütü için inek ve manda yetiştiriciliği)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.42.09',
                   'business'=>'Diğer sığır ve manda yetiştiriciliği (sütü için yetiştirilenler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.43.01',
                   'business'=>'At ve at benzeri diğer hayvan yetiştiriciliği (eşek, katır veya bardo vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.44.01',
                   'business'=>'Deve yetiştiriciliği',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.45.01',
                   'business'=>'Koyun ve keçi (davar) yetiştiriciliği (işlenmemiş süt, kıl, tiftik, yapağı, yün vb. üretimi dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.46.01',
                   'business'=>'Domuz yetiştiriciliği',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.47.01',
                   'business'=>'Kümes hayvanlarının yetiştirilmesi (tavuk, hindi, ördek, kaz ve beç tavuğu vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.47.02',
                   'business'=>'Kuluçkahanelerin faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.47.03',
                   'business'=>'Kümes hayvanlarından yumurta üretilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.49.01',
                   'business'=>'Arıcılık, bal ve bal mumu üretilmesi (arı sütü dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.49.02',
                   'business'=>'İpekböceği yetiştiriciliği ve koza üretimi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.49.03',
                   'business'=>'Evcil hayvanların yetiştirilmesi ve üretilmesi (balık hariç) (kedi, köpek, kuşlar, hamsterler vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.49.05',
                   'business'=>'Deve kuşlarının yetiştirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.49.90',
                   'business'=>'Yarı evcilleştirilmiş veya diğer canlı hayvanların yetiştirilmesi ve üretilmesi (diğer kuşlar (kümes hayvanları hariç), böcekler, tavşanlar ve diğer kürk hayvanları, salyangoz, solucan çiftlikleri, sürüngen çiftlikleri, hayvan embriyosu vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.50.06',
                   'business'=>'Karma çiftçilik (bitkisel veya hayvansal üretim konusunda uzmanlaşma olmaksızın üretim)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.61.01',
                   'business'=>'Bitkisel üretimi destekleyici gübreleme, tarlanın sürülmesi, ekilmesi, çapalama ile meyvecilikle ilgili budama vb. faaliyetler (çiçek yetiştiriciliğini destekleyici faaliyetler ile hava yoluyla yapılan gübreleme hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.61.02',
                   'business'=>'Bitkisel üretimi destekleyici mahsulün hasat ve harmanlanması, biçilmesi, balyalanması, biçerdöver işletilmesi vb. faaliyetler',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.61.03',
                   'business'=>'Bitkisel üretimi destekleyici tarımsal amaçlı sulama faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.61.04',
                   'business'=>'Bitkisel üretimi destekleyici ilaçlama ve zirai mücadele faaliyetleri (zararlı otların imhası dahil, hava yoluyla yapılanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'01.61.05',
                   'business'=>'Çiçek yetiştiriciliğini destekleyici gübreleme, tarlanın sürülmesi, ekilmesi, bakımı, toplama vb. ile ilgili faaliyetler (hava yoluyla yapılan gübreleme hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.61.06',
                   'business'=>'Hava yoluyla yapılan bitkisel üretimi destekleyici gübreleme, ilaçlama ve zirai mücadele faaliyetleri (zararlı otların imhası dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'01.62.01',
                   'business'=>'Hayvan üretimini destekleyici olarak sürülerin güdülmesi, başkalarına ait hayvanların beslenmesi, kümeslerin temizlenmesi, kırkma, sağma, barınak sağlama, nalbantlık vb. faaliyetler',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.62.02',
                   'business'=>'Hayvan üretimini destekleyici olarak sürü testi, kümes hayvanlarının kısırlaştırılması, yapay dölleme, vb. faaliyetler (kuluçkahanelerdeki faaliyetler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.63.01',
                   'business'=>'Hasat sonrası diğer ürünlerin ayıklanması ve temizlenmesi ile ilgili faaliyetler (pamuğun çırçırlanması ve nişastalı kök ürünleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.63.02',
                   'business'=>'Sert kabuklu ürünlerin kabuklarının kırılması ve temizlenmesi ile ilgili faaliyetler',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.63.03',
                   'business'=>'Haşhaş vb. ürünlerin sürtme, ezme ve temizlenmesi ile ilgili faaliyetler',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.63.04',
                   'business'=>'Mısır vb. ürünlerin tanelenmesi ve temizlenmesi ile ilgili faaliyetler',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.63.05',
                   'business'=>'Tütünün sınıflandırılması, balyalanması vb. hizmetler',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'01.63.06',
                   'business'=>'Nişastalı kök ürünlerinin ayıklanması ve temizlenmesi (patates vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.63.07',
                   'business'=>'Çırçırlama faaliyeti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.63.90',
                   'business'=>'Hasat sonrası bitkisel ürünler ile ilgili diğer faaliyetler',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.64.01',
                   'business'=>'Üretim amaçlı tohum işleme hizmetleri (vernelizasyon işlemleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.70.01',
                   'business'=>'Ticari olmayan av hayvanı ve yabani hayvan avlama ve yakalama faaliyetleri (yenilmesi, kürkleri, derileri, araştırmalarda kullanılmaları vb. amaçlar için) (balıkçılık hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'01.70.02',
                   'business'=>'Ticari olan av hayvanı ve yabani hayvan avlama ve yakalama faaliyetleri (yenilmesi, kürkleri, derileri, araştırmalarda kullanılmaları vb. amaçlar için) (balıkçılık hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'02.10.01',
                   'business'=>'Baltalık olarak işletilen ormanların yetiştirilmesi (kağıtlık ve yakacak odun üretimine yönelik olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'02.10.02',
                   'business'=>'Orman yetiştirmek için fidan ve tohum üretimi',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'02.10.03',
                   'business'=>'Orman ağaçlarının yetiştirilmesi (baltalık ormanların yetiştirilmesi hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'02.20.01',
                   'business'=>'Endüstriyel ve yakacak odun üretimi (geleneksel yöntemlerle odun kömürü üretimi dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'02.30.01',
                   'business'=>'Ağaç dışındaki yabani olarak yetişen ürünlerinin toplanması (mantar meşesinin kabuğu, kök, kozalak, balsam, lak ve reçine, meşe palamudu, at kestanesi, yosun ve likenler, yabani çiçek, yabani meyve, yenilebilir mantar vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'02.40.01',
                   'business'=>'Ormanda ağaçların kesilmesi, dallarından temizlenmesi, soyulması vb. destekleyici faaliyetler',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'02.40.02',
                   'business'=>'Ormanda kesilmiş ve temizlenmiş ağaçların taşınması, istiflenmesi ve yüklenmesi faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'02.40.03',
                   'business'=>'Ormanda silvikültürel hizmet faaliyetleri (seyreltilmesi, budanması, repikaj vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'02.40.04',
                   'business'=>'Ormanı zararlılara (böcek ve hastalıklar) karşı koruma faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'02.40.05',
                   'business'=>'Ormanı yangın ve kaçak kesime (izinsiz kesim) karşı koruma faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'02.40.06',
                   'business'=>'Ormanı koruma ve bakımı amaçlı orman yolu yapımı ve bakımı faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'02.40.07',
                   'business'=>'Diğer ormancılık hizmet faaliyetleri (ormancılık envanterleri, orman işletmesi, orman idaresi danışmanlık hizmetleri, orman (bakımı, verimi, vb.) ile ilgili araştırma geliştirme, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'03.11.01',
                   'business'=>'Deniz ve kıyı sularında yapılan balıkçılık (gırgır balıkçılığı, dalyancılık dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'03.11.02',
                   'business'=>'Deniz kabuklularının (midye, ıstakoz vb.), yumuşakçaların, diğer deniz canlıları ve ürünlerinin toplanması (sedef, doğal inci, sünger, mercan, deniz yosunu, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'03.12.01',
                   'business'=>'Tatlı sularda (ırmak, göl) yapılan balıkçılık (alabalık, sazan, yayın vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'03.21.01',
                   'business'=>'Denizde yapılan balık yetiştiriciliği (çipura, karagöz, kefal vb. yetiştiriciliği ile kültür balığı, balık yumurtası ve yavrusu dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'03.21.02',
                   'business'=>'Denizde yapılan diğer su ürünleri yetiştiriciliği (midye, istiridye, ıstakoz, karides, eklembacaklılar, kabuklular, deniz yosunları vb.) (balık hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'03.22.01',
                   'business'=>'(Değişik:RG-31/1/2018-30318) Tatlı sularda yapılan balık yetiştiriciliği (süs balığı, kültür balığı, balık yumurtası ve yavrusu dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'03.22.02',
                   'business'=>'Tatlısu ürünleri yetiştiriciliği (yumuşakçalar, kabuklular, kurbağalar vb.) (balık hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'05.10.01',
                   'business'=>'Taş kömürü madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'05.20.01',
                   'business'=>'Linyit madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'06.10.01',
                   'business'=>'Ham petrolün çıkarılması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'06.20.01',
                   'business'=>'(Değişik satır:RG-11/8/2023-32276) Doğal gaz çıkarılması (madenciliği)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.10.01',
                   'business'=>'Demir cevheri madenciliği (sinterlenmiş demir cevheri üretimi dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.21.01',
                   'business'=>'Katran ve zift ihtiva eden cevherlerden uranyum metalinin ayrıştırılması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.21.02',
                   'business'=>'Katran ve zift ihtiva eden cevherlerden toryum metalinin ayrıştırılması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.21.03',
                   'business'=>'Uranyum madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.21.04',
                   'business'=>'Toryum madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.21.05',
                   'business'=>'Sarı pasta (U3O8) imalatı (uranyum cevherinden elde edilen)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.29.01',
                   'business'=>'Altın, gümüş, platin gibi değerli metal madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.29.02',
                   'business'=>'Alüminyum madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.29.03',
                   'business'=>'Bakır madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.29.04',
                   'business'=>'Nikel madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.29.05',
                   'business'=>'Kurşun, çinko ve kalay madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.29.06',
                   'business'=>'Krom madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'07.29.07',
                   'business'=>'Başka yerde sınıflandırılmamış demir dışı diğer metal cevherleri madenciliği (cıva, manganez, kobalt, molibden, tantal, vanadyum vb.) (değerli metaller, demir, bakır, kurşun, çinko, alüminyum, kalay, krom, nikel hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.11.01',
                   'business'=>'Mermer ocakçılığı (traverten dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.11.02',
                   'business'=>'Granit ocakçılığı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.11.03',
                   'business'=>'Yapı taşları ocakçılığı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.11.04',
                   'business'=>'Süsleme ve yapı taşlarının kırılması ve kabaca kesilmesi',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.11.05',
                   'business'=>'Dolomit ve kayağan taşı (arduvaz / kayraktaşı) ocakçılığı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.11.06',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Kireçtaşı (kalker) ocakçılığı (kireçtaşının kabaca kırılması ve parçalanması dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.11.07',
                   'business'=>'Tebeşir, alçıtaşı ve anhidrit ocakçılığı (çıkarma, parçalama, pişirme işlemi dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.12.01',
                   'business'=>'Çakıl ve kum ocakçılığı (taşların kırılması ile kil ve kaolin madenciliği hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.12.02',
                   'business'=>'Çakıl taşlarının kırılması ve parçalanması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.12.03',
                   'business'=>'Kil, refrakter kil ve kaolin madenciliği ile bentonit, andaluzit, siyanit, silimanit, mulit, şamot veya dinas toprakları çıkarımı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.91.01',
                   'business'=>'Kimyasal ve gübreleme amaçlı mineral madenciliği (azot, potasyum, fosfor, fosfat, nitrat, barit, baryum, pirit, vb.) (bor, kükürt madenciliği hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.91.02',
                   'business'=>'Bor mineralleri madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.91.03',
                   'business'=>'Kükürt madenciliği (ocakçılığı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.91.04',
                   'business'=>'Guano madenciliği (kuş gübresi, güherçile dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.91.05',
                   'business'=>'Kehribar, Oltu taşı ve lületaşı ocakçılığı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.92.01',
                   'business'=>'Turba çıkarılması ve toplanması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.93.01',
                   'business'=>'Kaya tuzunun çıkarımı (tuzun elenmesi ve kırılması dahil) (tuzun yemeklik tuza dönüştürülmesi hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.93.02',
                   'business'=>'Deniz, göl ve kaynak tuzu üretimi (tuzun yemeklik tuza dönüştürülmesi hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'08.99.01',
                   'business'=>'Aşındırıcı (törpüleyici) materyaller (zımpara), amyant, silisli fosil artıklar, arsenik cevherleri, sabuntaşı (talk) ve feldispat madenciliği (kuartz, mika, şist, talk, silis, sünger taşı, asbest, doğal korindon vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.99.02',
                   'business'=>'Doğal asfalt, asfaltit, asfaltlı taş (doğal katı zift) ve bitüm madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.99.03',
                   'business'=>'Kıymetli ve yarı kıymetli taşların (yakut, zümrüt, safir, kalsedon vb.) ocakçılığı (kehribar, Oltu taşı, lüle taşı ve elmas hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.99.04',
                   'business'=>'Grafit ocakçılığı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.99.05',
                   'business'=>'Elmas (endüstri elmasları dahil) madenciliği',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'08.99.90',
                   'business'=>'(Değişik satır:RG-11/8/2023-32276) Başka yerde sınıflandırılmamış diğer madencilik ve taş ocakçılığı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'09.10.01',
                   'business'=>'Doğalgazın sıvılaştırılması ve gaz haline getirilmesi (maden alanında gerçekleştirilenler)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'09.10.02',
                   'business'=>'Petrol ve gaz çıkarımıyla ilgili sondaj hizmetleri (tetkik, araştırma hizmetleri, jeolojik gözlemler, kuyu çalıştırılması ve kapatılması ile test amaçlı sondaj faaliyetleri vb. dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'09.10.03',
                   'business'=>'Petrol ve gaz çıkarımı ile ilgili vinç ve sondaj kulesi kurma, onarım, sökme vb. hizmet faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'09.90.01',
                   'business'=>'Madencilik ve taş ocakçılığını destekleyici diğer hizmet faaliyetleri (tetkik, araştırma hizmetleri, jeolojik gözlemler, boşaltma, pompalama hizmetleri) (test amaçlı sondaj faaliyetleri ile petrol ve doğalgaz için yapılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'09.90.02',
                   'business'=>'Madencilik ve taş ocakçılığını destekleyici test amaçlı sondaj faaliyetleri (petrol ve doğalgaz için yapılanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'10.11.01',
                   'business'=>'Sığır, koyun, keçi vb. hayvanların kesimi ve kesim sırasındaki etin işlenmesi (mezbahacılık) (taze, soğutulmuş veya dondurulmuş olarak saklanması dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.12.01',
                   'business'=>'Kümes hayvanları etlerinin üretimi (taze veya dondurulmuş) (yenilebilir sakatatları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.12.02',
                   'business'=>'Kümes hayvanlarının kesilmesi, temizlenmesi veya paketlenmesi işi ile uğraşan mezbahaların faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.12.03',
                   'business'=>'Kümes hayvanlarının yağlarının sofra yağına çevrilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.12.04',
                   'business'=>'Kuş tüyü ve ince kuş tüyü imalatı (derileri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.13.01',
                   'business'=>'Et ve kümes hayvanları etlerinden üretilen pişmemiş köfte vb. ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.13.02',
                   'business'=>'Et ve kümes hayvanları etlerinden üretilen sosis, salam, sucuk, pastırma, kavurma et, konserve et, salamura et, jambon vb. tuzlanmış, kurutulmuş veya tütsülenmiş ürünlerin imalatı (yemek olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.13.03',
                   'business'=>'Et ve sakatat unları imalatı (et ve kümes hayvanları etlerinden üretilen)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.13.04',
                   'business'=>'Sığır, koyun, keçi vb. hayvanların sakatat ve yağlarından yenilebilir ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.20.03',
                   'business'=>'Balıkların, kabuklu deniz hayvanlarının ve yumuşakçaların işlenmesi ve saklanması (dondurulması, kurutulması, pişirilmesi, tütsülenmesi, tuzlanması, salamura edilmesi, konservelenmesi vb. faaliyetler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.20.04',
                   'business'=>'Balık, kabuklu deniz hayvanı ve yumuşakça ürünlerinin üretimi (balık filetosu, balık yumurtası, havyar, havyar yerine kullanılan ürünler vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.20.05',
                   'business'=>'Balık unları, kaba unları ve peletlerinin üretilmesi (insan tüketimi için)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.20.06',
                   'business'=>'Balığın sadece işlenmesi ve saklanmasıyla ilgili faaliyet gösteren tekne ve gemilerin faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.20.07',
                   'business'=>'Pişirilmemiş balık yemekleri imalatı (mayalanmış balık, balık hamuru, balık köftesi vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.20.08',
                   'business'=>'Balıkların, kabukluların, yumuşakçaların veya diğer su omurgasızlarının unları, kaba unları ve peletlerinin üretimi (insan tüketimine uygun olmayan) ile bunların diğer yenilemeyen ürünlerinin üretimi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.31.01',
                   'business'=>'Patatesin işlenmesi ve saklanması (dondurulmuş, kurutulmuş, suyu çıkartılmış, ezilmiş patates imalatı) (soyulması dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.31.02',
                   'business'=>'Patates cipsi, patates çerezi, patates unu ve kaba unlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.32.01',
                   'business'=>'Katkısız sebze ve meyve suları imalatı (şalgam suyu, domates suyu, havuç suyu, portakal suyu, elma suyu, kayısı suyu vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.32.02',
                   'business'=>'Konsantre meyve ve sebze suyu imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.39.01',
                   'business'=>'Sebze ve meyve konservesi imalatı (salça, domates püresi dahil, patatesten olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.39.02',
                   'business'=>'Kavrulmuş, tuzlanmış vb. şekilde işlem görmüş sert kabuklu yemişler ile bu meyvelerin püre ve ezmelerinin imalatı (pişirilerek yapılanlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.39.03',
                   'business'=>'Meyve ve sebzelerden jöle, pekmez, marmelat, reçel vb. imalatı (pestil imalatı dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.39.04',
                   'business'=>'Tuzlu su, sirke, sirkeli su, yağ veya diğer koruyucu çözeltilerle korunarak saklanan sebze ve meyvelerin imalatı (turşu, salamura yaprak, sofralık zeytin vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.39.05',
                   'business'=>'Dondurulmuş veya kurutulmuş meyve ve sebzelerin imalatı (kuru kayısı, kuru üzüm, kuru bamya, kuru biber vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.39.06',
                   'business'=>'Leblebi imalatı ile kavrulmuş çekirdek, yerfıstığı vb. üretimi (sert kabuklular hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.39.07',
                   'business'=>'Susamın işlenmesi ve tahin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.39.90',
                   'business'=>'Başka yerde sınıflandırılmamış meyve ve sebzelerin başka yöntemlerle işlenmesi ve saklanması (kesilmiş ve paketlenmiş olanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.41.01',
                   'business'=>'Ayçiçek yağı imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.41.02',
                   'business'=>'Bitkisel sıvı yağ (yenilebilen) imalatı (soya, susam, haşhaş, pamuk, fındık, kolza, hardal vb. yağlar) (zeytin yağı, ayçiçeği yağı ve mısır yağı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.41.03',
                   'business'=>'Beziryağı imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.41.05',
                   'business'=>'Prina yağı imalatı (diğer küspelerden elde edilen yağlar dahil) (mısır yağı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.41.06',
                   'business'=>'Kakao yağı, badem yağı, kekik yağı, defne yağı, hurma çekirdeği veya babassu yağı, keten tohumu yağı, Hint yağı, tung yağı ve diğer benzer yağların imalatı (bezir yağı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.41.07',
                   'business'=>'Zeytinyağı imalatı (saf, sızma, rafine)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.41.10',
                   'business'=>'Balık ve deniz memelilerinden yağ elde edilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.41.11',
                   'business'=>'Domuz don yağı (stearin), domuz sıvı yağı, oleostarin, oleoil ve yenilemeyen sıvı don yağı (tallow oil) ile diğer hayvansal katı ve sıvı yağların imalatı (işlenmemiş)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.42.01',
                   'business'=>'Margarin, karışık yemeklik ve sofralık katı yağların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.51.01',
                   'business'=>'Süt imalatı, işlenmiş (pastörize edilmiş, sterilize edilmiş, homojenleştirilmiş ve/veya yüksek ısıdan geçirilmiş) (katı veya toz halde süt hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.51.02',
                   'business'=>'Peynir, lor ve çökelek imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.51.03',
                   'business'=>'Süt tozu, peynir özü (kazein), süt şekeri (laktoz) ve peynir altı suyu (kesilmiş sütün suyu) imalatı (katı veya toz halde süt, krema dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.51.04',
                   'business'=>'Süt temelli hafif içeceklerin imalatı (kefir, salep vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.51.05',
                   'business'=>'Sütten yapılan diğer ürünlerin imalatı (tereyağı, yoğurt, ayran, kaymak, krema, vb.) (krem şanti dahil) (katı veya toz halde krema hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.52.01',
                   'business'=>'Dondurma imalatı (sade, sebzeli, meyveli vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.52.02',
                   'business'=>'Şerbetli diğer yenilebilen buzlu gıdaların imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.61.01',
                   'business'=>'Kahvaltılık tahıl ürünleri ile diğer taneli tahıl ürünlerinin imalatı (buğday, yulaf, mısır, çavdar vb. ezmeleri ile mısır gevreği ve patlamış mısır dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.61.02',
                   'business'=>'Tahılların öğütülmesi ve un imalatı (mısır unu, kepek, razmol dahil, pirinç unu hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.61.05',
                   'business'=>'Pirinç, pirinç ezmesi ve pirinç unu imalatı (çeltik fabrikası ve ürünleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.61.06',
                   'business'=>'İrmik imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.61.07',
                   'business'=>'Ön pişirme yapılmış veya başka şekilde hazırlanmış tane halde hububat imalatı (bulgur dahil, fakat mısır hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.61.08',
                   'business'=>'Sebzelerin ve baklagillerin öğütülmesi ve sebze unu ile ezmelerinin imalatı (karışımları ile hazır karıştırılmış sebze unları dahil) (pişirilerek yapılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.61.09',
                   'business'=>'Fırıncılık ürünlerinin imalatında kullanılan hamur ve un karışımlarının imalatı (sebze un karışımları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.61.10',
                   'business'=>'Dövülmüş diğer tahıl ürünlerinin imalatı (keşkeklik buğday vb. dahil) (bulgur ve irmik hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.62.01',
                   'business'=>'Nişasta imalatı (buğday, pirinç, patates, mısır, manyok vb. ürünlerden)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.62.02',
                   'business'=>'Glikoz, glikoz şurubu, fruktoz, maltoz, inulin, vb. imalatı (invert şeker dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.62.04',
                   'business'=>'Yaş mısırın öğütülmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.62.05',
                   'business'=>'Glüten imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.62.06',
                   'business'=>'Mısır yağı imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.71.01',
                   'business'=>'Taze pastane ürünleri imalatı (yaş pasta, kuru pasta, poğaça, kek, börek, pay, turta, waffles vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.71.02',
                   'business'=>'Fırın ürünleri imalatı (ekmek, sade pide, simit vb. dahil, taze pastane ürünlerinin imalatı hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.71.03',
                   'business'=>'Hamur tatlıları imalatı (tatlandırılmış kadayıf, lokma tatlısı, baklava vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.72.01',
                   'business'=>'Peksimet, bisküvi, gofret, dondurma külahı, kağıt helva vb. ürünlerin imalatı (çikolata kaplı olanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.72.02',
                   'business'=>'Tatlı veya tuzlu hafif dayanıklı fırın ve pastane ürünlerinin imalatı (kurabiyeler, krakerler, galeta, gevrek halkalar vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.72.03',
                   'business'=>'Tatlandırılmamış dayanıklı hamur tatlıları imalatı (pişirilmiş olsun olmasın tatlandırılmamış kadayıf, baklava vb.) (yufka imalatı dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.73.03',
                   'business'=>'Makarna, şehriye, kuskus ve benzeri mamullerin imalatı (doldurulmuş veya dondurulmuş olanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.81.01',
                   'business'=>'Şeker kamışından, pancardan, palmiyeden, akça ağaçtan şeker (sakkaroz) ve şeker ürünleri imalatı veya bunların rafine edilmesi (sıvı şeker ve melas üretimi dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.81.03',
                   'business'=>'Akçaağaç şurubu imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.82.01',
                   'business'=>'Çikolata ve kakao içeren şekerlemelerin imalatı (beyaz çikolata ve sürülerek yenilebilen kakaolu ürünler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.82.02',
                   'business'=>'Şekerlemelerin ve şeker pastillerinin imalatı (bonbon şekeri vb.) (kakaolu şekerlemeler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.82.03',
                   'business'=>'Sürülerek yenebilen kakaolu ürünler imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.82.04',
                   'business'=>'Lokum, pişmaniye, helva, karamel, koz helva, fondan, beyaz çikolata vb. imalatı (tahin helvası dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.82.05',
                   'business'=>'Ciklet imalatı (sakız)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.82.06',
                   'business'=>'Sert kabuklu meyve, meyve kabuğu ve diğer bitki parçalarından şekerleme imalatı (meyan kökü hülasaları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.82.07',
                   'business'=>'Kakao tozu, kakao ezmesi/hamuru ve kakao yağı imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.83.01',
                   'business'=>'Çay ürünleri imalatı (siyah çay, yeşil çay ve poşet çay ile çay ekstreleri, esansları ve konsantreleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.83.02',
                   'business'=>'Kahve ürünleri imalatı (çekilmiş kahve, eritilebilir kahve ile kahve ekstre, esans ve konsantreleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.83.03',
                   'business'=>'Bitkisel çayların imalatı (nane, yaban otu, papatya, ıhlamur, kuşburnu vb. çaylar).',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.83.04',
                   'business'=>'Kahve içeren ve kahve yerine geçebilecek ürünlerin imalatı (şeker, süt vb. karıştırılmış ürünler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.84.01',
                   'business'=>'Baharat imalatı (karabiber, kırmızı toz/pul biber, hardal unu, tarçın, yenibahar, damla sakızı, baharat karışımları vb.) (işlenmiş)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.84.02',
                   'business'=>'Sirke ve sirke ikamelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.84.03',
                   'business'=>'Sos ve çeşnilerin imalatı (soya sosu, ketçap, mayonez, hardal sosu, çemen, mango çeşnisi vb.) (baharat, sirke ve salça hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.84.05',
                   'business'=>'Gıda tuzu imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.85.01',
                   'business'=>'Hazır yemek imalatı (vakumla paketlenmiş veya korunmuş olanlar) (lokanta ve catering hizmetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.86.01',
                   'business'=>'Bebek ve çocukların beslenmesinde kullanılan müstahzarların imalatı (bebek mamaları, pudingleri vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.86.02',
                   'business'=>'Hastalar için veya diyet amaçlı hazırlanan homojenize gıda müstahzarlarının imalatı (glüten içermeyen gıda maddeleri, sodyum içermeyen tuzlar vb. gıdalar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.86.03',
                   'business'=>'Besin yönünden zenginleştirilmiş sporcu yiyeceklerinin imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'(Değişik satır:RG-8/3/2020-31062) 10.89.01',
                   'business'=>'Hazır çorba (geleneksel ve yöresel olarak imal edilenler dahil) ile hazır et suyu, balık suyu, tavuk suyu ve konsantrelerinin imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.89.02',
                   'business'=>'Maya ve kabartma tozu imalatı (bira mayası dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.89.04',
                   'business'=>'Suni bal, karamela, kabuksuz yumurta, yumurta albümini vb. imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.89.05',
                   'business'=>'Bitki özsu ve ekstreleri ile peptik maddeler, müsilaj ve kıvam arttırıcı maddelerin imalatı (kola konsantresi, malt özü, meyan balı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.89.06',
                   'business'=>'Başka yerde sınıflandırılmamış çeşitli gıda ürünleri imalatı (çabuk bozulan hazır gıdalar, peynir fondüleri, şeker şurupları vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'10.91.01',
                   'business'=>'Çiftlik hayvanları için hazır yem imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'10.92.01',
                   'business'=>'Ev hayvanları için hazır gıda imalatı (kedi ve köpek mamaları, kuş ve balık yemleri vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'11.01.01',
                   'business'=>'Damıtılmış alkollü içeceklerin imalatı (viski, brendi, cin, likör, rakı, votka, kanyak vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'11.01.02',
                   'business'=>'Damıtılmış alkollü içeceklerle karıştırılmış içki imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'11.01.03',
                   'business'=>'Etil alkol üretimi (doğal özellikleri değiştirilmemiş/tağyir edilmemiş, alkol derecesi <%80)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'11.02.01',
                   'business'=>'Üzümden şarap, köpüklü şarap, şampanya vb. üretimi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'11.02.02',
                   'business'=>'Üzüm şırası imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'11.03.01',
                   'business'=>'Elma şarabı ve diğer meyve şaraplarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'11.04.02',
                   'business'=>'Diğer damıtılmamış mayalı içeceklerin imalatı (vermut ve benzeri içkiler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'11.05.01',
                   'business'=>'Bira imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'11.06.01',
                   'business'=>'Malt imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'11.07.01',
                   'business'=>'Doğal veya suni maden sularının üretimi (tatlandırılmış ve aromalandırılmış olanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'11.07.02',
                   'business'=>'Diğer alkolsüz içeceklerin üretimi (limonata, gazoz, kolalı içecekler, meyveli içecekler, tonik, buzlu çay vb. içecekler) (içme suyu ve maden suları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'11.07.03',
                   'business'=>'İçme suyu üretimi (şişelenmiş, gazsız, tatlandırılmamış ve aromalandırılmamış)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'11.07.04',
                   'business'=>'Boza imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'12.00.04',
                   'business'=>'Tütün ürünleri imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.03',
                   'business'=>'Doğal pamuk elyafının imalatı (kardelenmesi, taraklanması, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.05',
                   'business'=>'Doğal yün ve tiftik elyafının imalatı (kardelenmesi, taraklanması, yün yağının giderilmesi, karbonize edilmesi ve yapağının boyanması vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.06',
                   'business'=>'Doğal jüt, keten ve diğer bitkisel tekstil elyaflarının imalatı (kardelenmesi, taraklanması vb.) (pamuk hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.08',
                   'business'=>'İpeğin kozadan ayrılması ve sarılması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.09',
                   'business'=>'Sentetik veya suni devamsız elyafın kardelenmesi ve taraklanması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.10',
                   'business'=>'Doğal ipeğin bükülmesi ve iplik haline getirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.12',
                   'business'=>'Pamuk elyafının bükülmesi ve iplik haline getirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.13',
                   'business'=>'Yün ve tiftik elyafının bükülmesi ve iplik haline getirilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.14',
                   'business'=>'Jüt, keten ve diğer bitkisel tekstil elyaflarının bükülmesi ve iplik haline getirilmesi (pamuk hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.10.15',
                   'business'=>'Suni ve sentetik elyafların bükülmesi ve iplik haline getirilmesi (filament ipliği ve suni ipek elyafı imalatı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.20.14',
                   'business'=>'Kot kumaşı imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.20.16',
                   'business'=>'Pamuklu dokuma kumaş (pamuklu dokuma tül kumaş dahil) imalatı (havlı veya şönil kumaş, havlu kumaş, tülbent, pelüş vb. ilmeği kesilmemiş kumaşlar ile kot, kadife ve tafting kumaşlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.20.17',
                   'business'=>'Doğal kıl ve yünden dokuma kumaş imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.20.19',
                   'business'=>'Doğal ipekten kumaş (doğal ipekten dokuma tül kumaş dahil) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.20.20',
                   'business'=>'Keten, rami, kenevir, jüt elyafları ile diğer bitkisel tekstil elyaflarından dokuma kumaş (bitkisel elyaftan dokuma tül kumaş dahil) imalatı (pamuk hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.20.21',
                   'business'=>'Havlı, şönil, havlu, pelüş, tırtıl ve benzeri ilmeği kesilmemiş dokuma kumaşlar ile tafting kumaş imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.20.22',
                   'business'=>'Suni ve sentetik filamentlerden ve devamsız elyaflardan dokuma kumaş (suni ve sentetik elyaftan dokuma tül kumaş dahil) imalatı (havlı veya şönil kumaş, havlu kumaş, tülbent, pelüş vb. ilmeği kesilmemiş kumaşlar ile kot, kadife ve tafting kumaşlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.20.23',
                   'business'=>'Dokuma yoluyla imitasyon kürk kumaş imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.20.24',
                   'business'=>'Cam elyafından dokuma kumaş imalatı (cam elyafından dar kumaşlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.30.01',
                   'business'=>'Kumaş ve tekstil ürünlerini ağartma ve boyama hizmetleri (giyim eşyası dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.30.02',
                   'business'=>'Tekstil elyaf ve ipliklerini ağartma ve boyama hizmetleri (kasarlama dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.30.03',
                   'business'=>'Kumaş ve tekstil ürünlerine baskı yapılması hizmetleri (giyim eşyası dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.30.04',
                   'business'=>'Kumaş ve tekstil ürünlerine ilişkin diğer bitirme hizmetleri (apreleme, pliseleme, sanforlama, vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.91.01',
                   'business'=>'Örgü ve tığ işi kumaşların imalatı (penye ve havlı kumaşlar ile raschel veya benzeri makineler ile örülen tül kumaş, perdelik kumaş vb. örgü veya tığ ile örülmüş kumaşlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.91.02',
                   'business'=>'Örme yoluyla imitasyon kürk kumaşı imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.01',
                   'business'=>'Yatak örtü takımları, yatak çarşafları, yastık kılıfları, masa örtüsü ile tuvalet ve mutfakta kullanılan örtülerin imalatı (el ve yüz havluları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.02',
                   'business'=>'Yorgan, kuştüyü yorgan, minder, puf, yastık, halı yastık, uyku tulumu ve benzerlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.03',
                   'business'=>'Perdelerin ve iç storların, perde veya yatak saçaklarının, farbelalarının ve malzemelerinin imalatı (gipür, hazır tül perde ve kalın perdeler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.04',
                   'business'=>'Tekstilden yer bezi, bulaşık bezi, toz bezi vb. temizlik bezleri imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.05',
                   'business'=>'Battaniye imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.06',
                   'business'=>'Tekstilden çuval, torba, çanta ve benzerlerinin imalatı (eşya paketleme amacıyla kullanılanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.07',
                   'business'=>'Can yeleği ve can kurtaran simidi imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.08',
                   'business'=>'Paraşüt (yönlendirilebilen paraşütler dahil) ve rotoşüt ile bunların parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.09',
                   'business'=>'Bayrak, sancak ve flama imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.10',
                   'business'=>'Tekstilden örtü ve kılıf imalatı (araba, makine, mobilya vb. için)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.92.11',
                   'business'=>'Branda, tente, stor (güneşlik), yelken, çadır ve kamp malzemeleri imalatı (şişme yataklar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.93.01',
                   'business'=>'Halı (duvar halısı dahil) ve kilim imalatı (paspas, yolluk ve benzeri tekstil yer kaplamaları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.93.02',
                   'business'=>'Halı, kilim vb. için çözgücülük, halı oymacılığı vb. faaliyetler',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'13.94.02',
                   'business'=>'Ağ ve ağ ürünleri imalatı, sicim, kınnap, halat veya urgandan (balık ağı, yük boşaltma ağları, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'13.94.03',
                   'business'=>'Sicim, urgan, halat, kordon ve benzerleri imalatı (kauçuk veya plastik emdirilmiş, kaplanmış olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.95.01',
                   'business'=>'Dokusuz kumaşlar ile bunlardan yapılan ürünlerin imalatı (giyim eşyası hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.96.01',
                   'business'=>'Dokunabilir ipliklerden metalize iplik ve metalize gipe iplik ile bunlardan dokuma kumaş imalatı (giyim ve döşemecilikte kullanılan)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.96.02',
                   'business'=>'Tekstil malzemelerinden parça halinde kordonlar; işleme yapılmamış şeritçi eşyası ve benzeri süs eşyalarının imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'13.96.03',
                   'business'=>'Dar dokuma kumaşların imalatı (etiket, arma ve diğer benzeri eşyalar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.96.04',
                   'business'=>'Tekstil malzemelerinden dokuma etiket, rozet, arma ve diğer benzeri eşyaların imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'13.96.05',
                   'business'=>'Teknik kullanım amaçlı tekstil ürünleri ve eşyaları imalatı (fitil, lüks lambası gömleği, tekstil malzemesinden hortumlar, taşıma veya konveyör bantları, elek bezi ve süzgeç bezi dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.96.06',
                   'business'=>'Kord bezi imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.96.07',
                   'business'=>'Tekstille kaplanmış kauçuk iplik veya kordon ile kauçuk veya plastikle kaplanmış veya emdirilmiş tekstilden iplik veya şeritler ve bunlardan yapılmış mensucat imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.96.08',
                   'business'=>'Kaplanmış veya emdirilmiş tekstil kumaşlarının imalatı (cilt kapağı için mensucat, mühendis muşambası, tiyatro dekorları, tuval vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.99.02',
                   'business'=>'Oya, dantel ve nakış imalatı (yaka, fisto yaka, lez, aplik, motif, kapitone ürünleri vb. dahil) ile tül ve diğer ağ kumaşların (dokuma, örgü (triko) veya tığ işi (kroşe) olanlar hariç) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.99.03',
                   'business'=>'Keçe, basınçlı hassas giysi dokumaları, tekstilden ayakkabı bağı, pudra ponponu vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.99.04',
                   'business'=>'Tekstil kırpıntısı imalatı (yatak, yorgan, yastık, şilte ve benzeri doldurmak için)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'13.99.06',
                   'business'=>'Gipe iplik ve şeritlerin, şönil ipliklerin, şenet ipliklerin imalatı (metalize olanlar ile gipe lastikler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'14.11.05',
                   'business'=>'Deri giyim eşyası imalatı (deri karışımlı olanlar dahil, ayakkabı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'14.12.07',
                   'business'=>'Endüstriyel iş giysisi (iş önlükleri, iş elbiseleri, iş tulumları, vb.) imalatı (dikişsiz plastik olanlar ile ateşe dayanıklı ve koruyucu güvenlik kıyafetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.12.08',
                   'business'=>'Mesleki kıyafet imalatı (resmi ve özel üniforma vb. ile okul önlükleri dahil, endüstriyel iş giysileri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.13.04',
                   'business'=>'Dış giyim eşyası imalatı, dokuma, örme (trikotaj) ve tığ işi (kroşe), vb. kumaştan olanlar (kaban, palto, ceket, pantolon, takım elbise, döpiyes, anorak, yağmurluk, gece kıyafetleri vb.) (iş giysileri ve terzilerin faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.13.05',
                   'business'=>'Siparişe göre ölçü alınarak dış giyim eşyası imalatı, dokuma, örgü (triko) ve tığ işi (kroşe), vb. kumaştan olanlar (terzilerin faaliyetleri) (giyim eşyası tamiri ile gömlek imalatı hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.13.06',
                   'business'=>'Sahne ve gösteri elbiseleri imalatı, dokuma, örgü (triko) ve tığ işi (kroşe), vb. kumaştan olanlar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.13.07',
                   'business'=>'Gelinlik imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.14.01',
                   'business'=>'Gömlek, tişört, bluz, vb. ceket altına giyilebilen giyim eşyası imalatı (dokuma, örgü veya tığ işi kumaştan)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.14.02',
                   'business'=>'Gecelik, sabahlık, pijama, bornoz ve ropdöşambır imalatı (dokuma, örgü veya tığ işi kumaştan)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.14.03',
                   'business'=>'Atlet, fanila, külot, slip, iç etek, kombinezon, jüp, jüpon, sütyen, korse vb. iç çamaşırı imalatı (dokuma, örgü veya tığ işi kumaştan)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.14.04',
                   'business'=>'Çorap bağları, jartiyer, pantolon askıları ve benzeri iç giyim aksesuarları imalatı (dokuma, örgü veya tığ işi kumaştan)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.19.01',
                   'business'=>'Spor ve antrenman giysileri, kayak kıyafetleri, yüzme kıyafetleri vb. imalatı (mayo, bikini dahil) (dokuma, örgü veya tığ işi kumaştan)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.19.02',
                   'business'=>'Yazma, tülbent, eşarp, vb. imalatı (dokuma, örgü veya tığ işi kumaştan)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'14.19.04',
                   'business'=>'Eldiven, kemer, şal, papyon, kravat, saç fileleri, kumaş mendil, atkı, fular, duvak vb. giysi aksesuarları imalatı (deriden, dokusuz kumaştan veya dokuma, örgü veya tığ işi kumaştan) (bebekler için olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.19.05',
                   'business'=>'Bebek giyim eşyası ve aksesuarları imalatı (dokuma, örgü veya tığ işi kumaştan) (tabansız panduf dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.19.07',
                   'business'=>'Şapka, kep, başlık, kasket, tabla ve el manşonları ile bunların parçalarının imalatı (kürkten şapka ve başlıklar dahil, bebekler için olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.19.08',
                   'business'=>'Giyim eşyası imalatı (keçeden veya diğer dokusuz kumaştan ya da emdirilmiş veya kaplanmış tekstil kumaşından olanlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.20.04',
                   'business'=>'Post, kürk veya kürklü deriden yapılmış eşya ve parçaların imalatı (giyim eşyası ve giysi aksesuarları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'14.20.05',
                   'business'=>'Post, kürk veya kürklü deriden yapılmış giyim eşyası ve giysi aksesuarları imalatı (kürkten şapka, başlık ve eldiven hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'14.31.01',
                   'business'=>'Çorap imalatı (örme ve tığ işi olan külotlu çorap, tayt çorap, kısa kadın çorabı, erkek çorabı, patik ve diğer çoraplar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'14.39.01',
                   'business'=>'Örgü (triko) ve tığ işi (kroşe) diğer giyim eşyası imalatı (doğrudan süveter, kazak, hırka, yelek, vb. şekillerde üretilenler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'15.11.10',
                   'business'=>'Deri ve kürklü deri imalatı (kürkün ve derinin tabaklanması, sepilenmesi, boyanması, cilalanması ve işlenmesi)(işlenmiş derinin başka işlemlere tabi tutulmaksızın yalnızca tamburda ütülenmesi ve kurutulması hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'15.11.11',
                   'business'=>'Kürklü derinin ve postların kazınarak temizlenmesi, kırkılması, tüylerinin yolunması ve ağartılması (postlu derilerin terbiyesi dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'15.11.13',
                   'business'=>'Deri ve kösele esaslı terkip ile elde edilen levha, yaprak, şerit deri ve kösele imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'15.11.14',
                   'business'=>'İşlenmiş derinin başka işlemlere tabi tutulmaksızın yalnızca tamburda ütülenmesi ve kurutulması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'15.12.07',
                   'business'=>'Deri, kösele, karma deri ve diğer malzemelerden bavul, el çantası, cüzdan, okul çantası, evrak çantası, deriden sigaralık, deri ayakkabı bağı, kişisel bakım, dikiş, vb. amaçlı seyahat seti, vb. ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'15.12.08',
                   'business'=>'Deriden veya diğer malzemelerden saraçlık ve koşum takımı imalatı (kamçı, semer, eyer, tasma kayışı, heybe, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'15.12.09',
                   'business'=>'Deri saat kayışı imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'15.12.10',
                   'business'=>'Plastik veya kauçuk saat kayışı imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'15.12.11',
                   'business'=>'Kumaş ve diğer malzemelerden saat kayışı imalatı (metal olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'15.12.12',
                   'business'=>'Tabii/terkip yoluyla elde edilen deri ve köseleden taşıma ve konveyör bantları imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'15.20.15',
                   'business'=>'Deriden ayakkabı, mes, bot, çizme, postal, terlik, vb. imalatı (tamamıyla tekstilden olanlar ile ortopedik ayakkabı ve kayak ayakkabısı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'15.20.17',
                   'business'=>'Plastik veya kauçuktan ayakkabı, bot, çizme, postal, terlik, vb. imalatı (tamamıyla tekstilden olanlar ile ortopedik ayakkabı ve kayak ayakkabısı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'15.20.18',
                   'business'=>'Tekstilden ve diğer malzemelerden ayakkabı, mes, bot, çizme, postal, terlik, vb. imalatı (deri ve plastik olanlar ile tamamıyla tekstilden olanlar, ortopedik ayakkabı ve kayak ayakkabısı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'15.20.19',
                   'business'=>'Ayakkabıların deri kısımlarının ve ayakkabı parçalarının (kauçuk, plastik ve ahşap parçalar hariç) imalatı (üst ve alt parçaları, topuklar, vb. imalatı ile sayacılık faaliyetleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.10.01',
                   'business'=>'Kereste imalatı (ağaçların biçilmesi, planyalanması, rendelenmesi ve şekillendirilmesi faaliyetleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.10.02',
                   'business'=>'Ahşap demir yolu veya tramvay traversi imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.10.03',
                   'business'=>'Ağaç yünü, ağaç unu, ağaç talaşı, ağaç yonga imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'16.10.05',
                   'business'=>'Ahşap döşemelerin ve yer döşemelerinin imalatı (birleştirilebilir parkeler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.10.06',
                   'business'=>'Tomruk ve kerestelerin kurutulması, emprenye edilmesi veya kimyasal işlemden geçirilmesi hizmetleri (başkalarının adına olanlar)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'16.21.01',
                   'business'=>'Ahşap, bambu ve diğer odunsu malzemelerden kaplamalık plaka, levha, vb. imalatı (yaprak halde) (preslenmemiş)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.21.02',
                   'business'=>'Sıkıştırılmış lif, tahta ve tabakalardan kontrplak, mdf, sunta, vb. levha imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'16.22.01',
                   'business'=>'Birleştirilebilir ahşap parke yer döşemelerinin imalatı (lamine ve laminat parkeler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.23.01',
                   'business'=>'Ahşap pencere, kapı ve bunların kasaları ve eşikleri ile ahşap merdiven, tırabzan, veranda, parmaklık vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.23.02',
                   'business'=>'Ahşap prefabrik yapılar ve ahşap taşınabilir evlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.23.90',
                   'business'=>'Başka yerde sınıflandırılmamış inşaat doğrama ve marangozluk ürünleri (ahşaptan kiriş, kalas, payanda, beton kalıbı, çatı padavrası, vb.) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.24.01',
                   'business'=>'Kutu, sandık, fıçı ve benzeri ahşap ambalaj malzeme imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.24.02',
                   'business'=>'Palet, kutu palet ve diğer ahşap yükleme tablaları imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.24.03',
                   'business'=>'Ahşap kablo makarası, bobin, takoz, vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.29.01',
                   'business'=>'Ahşap mutfak ve sofra eşyası imalatı (kaşık, kepçe, spatula, bardak, havan, havan eli, tepsi vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'16.29.02',
                   'business'=>'Doğal mantar (kabaca köşelendirilmiş veya blok, levha vb. halde), ezilmiş veya granül haline getirilmiş mantar ile doğal mantar veya aglomera mantar ürünlerinin imalatı (mantardan yer döşemeleri, makara, tıpa ve tıkaç dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'16.29.03',
                   'business'=>'Sedef kakma ahşap işleri, kakma ile süslü ahşap eşyalar, mücevher için veya çatal-kaşık takımı ve benzeri eşyalar için ahşap kutular, ahşap biblo, heykel ve diğer süslerin imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'16.29.04',
                   'business'=>'Ahşaptan iş aletleri, alet gövdeleri, alet sapları, süpürge veya fırça gövdeleri ile sapları, ayakkabı kalıpları, ahşap mandal, elbise ve şapka askıları imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.29.05',
                   'business'=>'Ahşap çerçeve (tablo, fotoğraf, ayna ve benzeri nesneler için) ve ahşaptan diğer eşyaların imalatı (panolar, tuval için çerçeveler, ip vb. için makaralar, ayakkabının ahşap topuk ve tabanları, arı kovanları, köpek kulübeleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'16.29.07',
                   'business'=>'Hasır veya diğer örme malzemesinden (kamış, saz, saman vb.) eşyaların imalatı ile sepet türü ve hasır işi eşyaların imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'16.29.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer ağaç ürünleri ile enerji için yakıt kütükleri ve peletlerinin imalatı (karbonlaştırılmamış olanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.11.08',
                   'business'=>'Kağıt hamuru imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.12.07',
                   'business'=>'Kağıt ve mukavva imalatı (daha ileri sanayi işlemleri için rulo veya tabaka halinde) (ziftli, lamine, kaplanmış ve emprenye edilmiş olanlar ile krepon ve kırışık kağıtlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.21.10',
                   'business'=>'Bürolarda, dükkanlarda ve benzeri yerlerde kullanılan kağıt evrak tasnif kutuları, mektup kutuları ve benzeri eşyaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.21.11',
                   'business'=>'Kağıt ve kartondan torba ve çanta imalatı (kese kağıdı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.21.12',
                   'business'=>'Kağıt veya mukavvadan koli, kutu ve benzeri muhafazaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.21.13',
                   'business'=>'Oluklu kağıt ve oluklu mukavva imalatı (rulo veya tabaka halinde)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.22.02',
                   'business'=>'Kullanıma hazır tuvalet kağıdı, kağıt mendil, temizlik veya yüz temizleme için kağıt mendil ve havlular ile masa örtüsü ve peçetelerin imalatı (kağıt hamurundan, kağıttan, selüloz vatkadan veya selüloz lifli ağlardan yapılmış)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.22.03',
                   'business'=>'Kağıt veya mukavvadan yapılmış tepsi, tabak, kase, bardak ve benzerlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.22.04',
                   'business'=>'Hijyenik havlu ve tamponlar, kadın bağı, pedler, bebek bezleri vb. hijyenik ürünler ile giyim eşyası ve giysi aksesuarlarının imalatı (kağıt hamurundan, kağıttan, selüloz vatkadan veya selüloz lifli ağlardan yapılmış)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.23.04',
                   'business'=>'Kullanıma hazır karbon kağıdı, kendinden kopyalı kağıt ve diğer kopyalama veya transfer kağıtları, mumlu teksir kağıdı, kağıttan ofset tabakalar ile tutkallı veya yapışkanlı kağıtların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.23.06',
                   'business'=>'Kağıt veya mukavvadan ana niteliği bilgi içermeyen eğitim ve ticari kırtasiye malzemeleri imalatı (ajandalar, defterler, sicil defterleri, muhasebe defterleri, ciltler, kayıt formları ve diğer benzeri kırtasiye ürünleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.23.07',
                   'business'=>'Kağıt veya mukavvadan dosya, portföy dosya, klasör ve benzerlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.23.08',
                   'business'=>'Kullanıma hazır basım ve yazım kağıdı ile diğer kağıt ve mukavvaların imalatı (basılı olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.23.09',
                   'business'=>'Baskısız zarf, mektup kartı, yazışma kartı ve benzerlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.24.02',
                   'business'=>'Duvar kağıdı ve benzeri duvar kaplamalarının imalatı (tekstil duvar kaplamaları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.24.03',
                   'business'=>'Tekstil duvar kaplamalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.29.01',
                   'business'=>'Kağıt veya mukavvadan etiketlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.29.02',
                   'business'=>'Filtre kağıdı, kartonları ve mukavvaları, kağıt hamurundan filtre edici blok ve levhalar ile kalıplanmış ya da sıkıştırılmış eşyaların imalatı (kağıt veya karton esaslı contalar ve rondelalar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.29.03',
                   'business'=>'Sigara kağıdı, kağıt ve mukavvadan bobin, makara, masura, yumurta viyolü ve benzeri kağıt, mukavva veya kağıt hamurundan destekler ile kağıttan hediyelik ve süs eşyaları imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'17.29.04',
                   'business'=>'Jakar makinelerinde kullanmak için kağıt ve mukavvadan kartlar ile kaydedici cihazlara mahsus diyagram kağıtları imalatı (bobin, tabaka/disk halinde)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.11.01',
                   'business'=>'Gazetelerin, dergilerin ve süreli yayınların basım hizmetleri (haftada dört veya daha fazla yayınlananlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.12.01',
                   'business'=>'Çıkartma, takvim, ticari katalog, tanıtım broşürü, poster, satış bülteni, kartpostal, davetiye ve tebrik kartları, yıllık, rehber, resim, çizim ve boyama kitapları, çizgi roman vb. basım hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.12.02',
                   'business'=>'Gazetelerin, dergilerin ve süreli yayınların basım hizmetleri (haftada dört kereden daha az yayınlananlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.12.03',
                   'business'=>'Ansiklopedi, sözlük, kitap, kitapçık, müzik eserleri ve müzik el yazmaları, atlas, harita vb. basım hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.12.04',
                   'business'=>'Röprodüksiyon basımı (bir sanat eserinin aslını bozmadan basılması)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.12.05',
                   'business'=>'Serigrafi faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.12.06',
                   'business'=>'Posta pulu, damga pulu, matbu belgeler, tapu senetleri, akıllı kart, çek defterleri, kağıt para ve diğer değerli kağıtların ve benzerlerinin basım hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.12.07',
                   'business'=>'Plastik, cam, metal, ağaç ve seramik üstüne baskı hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.13.01',
                   'business'=>'Basımda kullanmak üzere baskı klişeleri ya da silindirleri ile diğer basım unsurlarının üretilmesi (klişecilik vb.) ile mizanpaj, dizgi, tabaka yapım hizmetleri, gravür baskı için silindirlerin kazınması veya asitle aşındırılması vb. hizmetler',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'18.13.02',
                   'business'=>'Basım öncesi bilgisayar destekli hizmetler (bilgisayar destekli sayfa tasarımı ile saydam, asetat, reprografik sunum araçları ve diğer sayısal sunum ortamları, taslaklar, planlar vb. baskı ürünlerinin tasarlanması) (masa üstü yayımcılık dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'18.14.01',
                   'business'=>'Ciltçilik ve ilgili hizmetler/mücellitlik (katlama, birleştirme, dikme, yapıştırma, kesme, kapak takma gibi işlemler ile damgalama, Braille alfabesi kopyalama vb. hizmetler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'18.20.02',
                   'business'=>'Ses ve görüntü kayıtlarının çoğaltılması hizmetleri (CD \'lerin, DVD \'lerin, kasetlerin ve benzerlerinin asıl (master) kopyalarından çoğaltılması)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'18.20.03',
                   'business'=>'Yazılımların çoğaltılması hizmetleri (CD, kaset vb. ortamlardaki bilgisayar yazılımlarının ve verilerin asıl (master) kopyalarından çoğaltılması)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'19.10.10',
                   'business'=>'Linyit ve turbadan kok fırını ürünlerinin imalatı (kok ve yarı kok kömürü, karni kömürü, katran, zift ve zift koku vb. ürünlerin imalatı ile kok kömürünün topak haline getirilmesi dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'19.10.11',
                   'business'=>'Taşkömüründen kok fırını ürünlerinin imalatı (kok ve yarı kok kömürü, karni kömürü, katran, zift ve zift koku vb. ürünlerin imalatı ile kok kömürünün topak haline getirilmesi dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'19.20.12',
                   'business'=>'Turba, linyit ve taş kömürü briketleri imalatı (kömür tozundan basınçla elde edilen yakıt)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'19.20.15',
                   'business'=>'Petrol türevi yakıtların, petrol gazları ve diğer hidrokarbonların imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'19.20.16',
                   'business'=>'Petrolden madeni yağların (yağlama ve makine yağları) imalatı (gres yağı dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'19.20.17',
                   'business'=>'Vazelin, parafin mumu, petrol mumu, petrol koku, petrol bitümeni ve diğer petrol ürünlerinin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'19.20.19',
                   'business'=>'Ağırlık itibariyle %70 veya daha fazla oranda petrol yağları veya bitümenli yağlardan elde edilen diğer karışımların üretimi (%70 petrol yağı ile karıştırılmış biyodizelden ürünler dahil, madeni yağlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.11.01',
                   'business'=>'Sanayi gazları imalatı (hidrojen, asal gazlar, azot, oksijen, karbondioksit ve ametallerin diğer inorganik oksijen bileşikleri, soğutucu-dondurucu gazlar ile hava gibi sıvı veya sıkıştırılmış inorganik sanayi gazları ve tıbbi gazlar)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.12.01',
                   'business'=>'Boya maddeleri ve pigment imalatı (birincil formda veya konsantre olarak herhangi bir kaynaktan) (hazır boyalar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.12.02',
                   'business'=>'Tabaklama ekstreleri, bitkisel kökenli; tanenler ve tuzları, eterleri, esterleri ve diğer türevleri; bitkisel veya hayvansal kökenli renklendirme maddelerinin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.13.02',
                   'business'=>'Metalik halojenler, hipokloritler, kloratlar ve perkloratların imalatı (çamaşır suyu dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.13.03',
                   'business'=>'Sülfidler (sülfürler), sülfatlar, fosfinatlar, fosfonatlar, fosfatlar ve nitratların imalatı (şap dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.13.04',
                   'business'=>'Karbonatların imalatı (sodyum, kalsiyum ve diğerleri) (çamaşır sodası dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.13.06',
                   'business'=>'Uranyum, plütonyum ve toryum cevherlerinin zenginleştirilmesi (nükleer reaktörler için yakıt kartuşları dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.13.07',
                   'business'=>'Diğer metal tuzları ve temel inorganik kimyasalların imalatı (izotoplar ve bunların bileşikleri, oksometalik/peroksometalik asitlerin tuzları, siyanürler, boratlar, hidrojen peroksit, kükürt, kavrulmuş demir piritler, piezo-elektrik kuvarsı vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.13.90',
                   'business'=>'Başka yerde sınıflandırılmamış kimyasal elementler, inorganik asitler ve bileşiklerin imalatı (klor, iyot, flor, bor, silisyum, fosfor, arsenik gibi metaloidler, skandium, cıva, oksitler, hidroksitler, hidrojen klorür vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.14.01',
                   'business'=>'Temel organik kimyasalların imalatı (hidrokarbonlar, alkoller, asitler, aldehitler, ketonlar, sentetik gliserin, azot fonksiyonlu bileşikler vb.) (etil alkol, sitrik asit dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.14.04',
                   'business'=>'Odunun ve kömür katranının damıtılması (odun kreozotu, odun naftası, bitkisel zift, benzol, toluol, fenol, naftalin vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.14.05',
                   'business'=>'Tabii reçine ve türevleri, kolofanlar, kolofanın modifikasyon ve esterifikasyon ürünleri, çam terebentin ve çam terebentin esansları ile doğal zamk imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.15.01',
                   'business'=>'Fosfatlı veya potasyumlu gübreler, iki (azot ve fosfor veya fosfor ve potasyum) veya üç besin maddesi (azot, fosfor ve potasyum) içeren gübreler, sodyum nitrat ile diğer kimyasal ve mineral gübrelerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.15.02',
                   'business'=>'Bileşik azotlu ürünlerin imalatı (nitrik asit, sülfonitrik asit, saf amonyak, amonyum klorür (nişadır), amonyum karbonat, nitritler, potasyum nitratlar vb.) (gübreler hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.16.01',
                   'business'=>'Birincil formda poliamitler, üre reçineleri, melamin reçineleri, vb. plastik hammaddelerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.16.02',
                   'business'=>'Birincil formda alkid reçine, polyester reçine, epoksi reçine, poliasetal, polikarbonat ile diğer polieter ve polyester imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.16.03',
                   'business'=>'Birincil formda polimerlerin imalatı (etilen, propilen, stiren, vinil klorür, vinil asetat, vinil esterleri, akrilik vb. polimerleri ile sertleştirilmiş proteinler, doğal kauçuğun kimyasal türevleri dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.16.04',
                   'business'=>'Birincil formda silikon ve polimer esaslı iyon değiştiricileri imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.16.05',
                   'business'=>'Birincil formda diğer amino reçineler, fenolik reçineler, poliüretanlar, politerpenler, polisülfürler, selüloz ve kimyasal türevleri ile diğer petrol reçineleri imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.17.01',
                   'business'=>'Birincil formda sentetik kauçuk imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.20.11',
                   'business'=>'Böcek ilacı, kemirgen ilacı, küf ve mantar ilacı, yabancı otla mücadele ilacı imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.20.13',
                   'business'=>'Çimlenmeyi önleyici ve bitki gelişimini düzenleyici ürün imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.20.14',
                   'business'=>'Diğer zirai kimyasal ürünlerin imalatı (gübre ve azotlu bileşik imalatı hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.20.15',
                   'business'=>'(Ek satır:RG-24/2/2021-31405) Dezenfektan imalatı (tarımsal ve diğer kullanımlar için) (hijyenik maddeler, bakteriostatlar ve sterilize ediciler dahil) (doğal dezenfektanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.20.16',
                   'business'=>'(Ek satır:RG-24/2/2021-31405) Doğal dezenfektan imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.30.11',
                   'business'=>'Boya ve vernikler, akrilik ve vinil polimer esaslı olanların (sulu ortamda dağılanlar, çözülenler ve çözeltiler) imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.30.12',
                   'business'=>'Macun imalatı (dolgu, cam, sıvama için olanlar ile üstübeç, vb. dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.30.13',
                   'business'=>'Diğer boya, vernik ve ilgili ürünlerin imalatı (renk ayarlayıcılar, matbaa mürekkepleri, solventler, incelticiler (tiner))',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.30.14',
                   'business'=>'Boya ve vernikler, polyester, akrilik ve vinil polimer esaslı olanların (susuz ortamda dağılanlar, çözülenler ve çözeltiler) imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.30.15',
                   'business'=>'Hazır boya pigmentleri, matlaştırıcılar (opaklaştırıcı) ve renklendiriciler, camlaştırılabilir emay ve sırlar, astarlar, cam firit, sıvı cilalar ve benzerlerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.30.16',
                   'business'=>'Boya müstahzarları hazır kurutucu maddelerinin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.30.17',
                   'business'=>'Elektrostatik toz boya imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.41.01',
                   'business'=>'Kapalı alanlar için kokulu müstahzarlar ve koku gidericiler ile suni mumların imalatı (kişisel kullanım için olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.41.03',
                   'business'=>'Ham gliserin (gliserol) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.41.04',
                   'business'=>'Sabun, yıkama ve temizleme müstahzarları (deterjanlar) ile sabun olarak kullanılan müstahzarlar imalatı (kişisel bakım için olanlar ile ovalama toz ve kremleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.41.06',
                   'business'=>'Cila, krem ve ovalama krem ve tozlarının imalatı (ayakkabı, mobilya, yer döşemesi, kaporta, cam, metal vb. için)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.42.01',
                   'business'=>'Ağız veya diş bakım ürünleri imalatı (diş macunu, vb. ile takma dişleri ağızda sabit tutmaya yarayan macun ve tozlar ile diş temizleme iplikleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.42.02',
                   'business'=>'Kolonya imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.42.03',
                   'business'=>'Parfüm ve koku verici diğer sıvı ürün, manikür/pedikür müstahzarı, güneş koruyucu ürünler, dudak ve göz makyajı ürünü, banyo tuzu, kozmetik veya kişisel bakım amaçlı pudra, sabun ve organik yüzey aktif müstahzarı, deodorant, vb. imalatı (kolonya hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.42.04',
                   'business'=>'Şampuan, saç kremi, saç spreyi, jöle, saç düzleştirme ve perma ürünleri, saç losyonları, saç boyaları, vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.51.21',
                   'business'=>'Barut, vb. itici tozların imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.51.22',
                   'business'=>'Hazır patlayıcılar, emniyet fitilleri, çarpma kapsülleri, infilak fitilleri, ateşleyiciler, dinamit, elektrikli kapsüller, havai fişekler, sis işaretleri, işaret fişekleri, vb. patlayıcı veya piroteknik malzeme imalatı (barut hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.51.23',
                   'business'=>'Kibrit imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.52.05',
                   'business'=>'Tutkal imalatı (kazein esaslı, hayvansal esaslı, nişasta esaslı, kauçuk esaslı, plastik esaslı, polimer esaslı vb. olanlar)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.53.02',
                   'business'=>'Uçucu yağların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.01',
                   'business'=>'Fotografik levha ve filmlerin (hassaslaştırılmış, ışığa maruz kalmamış olanlar), anında baskılanan filmlerin, fotoğrafçılıkta kullanılan kimyasal müstahzarların ve karışımsız (saf) ürünlerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.03',
                   'business'=>'Aktif karbon imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.04',
                   'business'=>'Yağlama müstahzarları (hidrolik fren sıvıları dahil), vuruntu önleyici müstahzarlar ile katkı maddeleri ve antifrizlerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.05',
                   'business'=>'Yazım ve çizim mürekkepleri ve diğer mürekkeplerin imalatı (matbaa mürekkebi imalatı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.06',
                   'business'=>'Peptonlar, diğer protein maddeleri ve bunların türevlerinin ve deri tozlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.07',
                   'business'=>'Laboratuvar için hazır kültür ortamları, model hamurları, kompozit diyagnostik reaktifler veya laboratuvar reaktifleri imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.08',
                   'business'=>'Elektronikte kullanılan macun kıvamında (dope edilmiş) olan kimyasal elementler ile bileşiklerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.09',
                   'business'=>'Bitirme (apreleme dahil) maddeleri, boya hammaddesi ve benzeri ürünlerin sabitlenmesini veya boyayıcılığını hızlandıran boya taşıyıcı maddelerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.10',
                   'business'=>'Dekapaj (temizleme) müstahzarları, eritkenler, hazır vulkanizasyon hızlandırıcı maddeler, kauçuk veya plastikler için plastikleştirici bileşikler ve stabilizatörler, başka yerde sınıflandırılmamış katalitik müstahzarlar imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.11',
                   'business'=>'Jelatin ve jelatin türevleri ile süt albüminlerinin imalatı (gıda endüstrisinde kullanılan jelatinler ve süt albüminleri hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.12',
                   'business'=>'Kimyasal olarak değiştirilmiş veya yenilemeyen hayvansal veya bitkisel katı ve sıvı yağlar ve yağ karışımlarının imalatı (linoksin, teknik ve sanayi amaçlı bitkisel sabit sıvı yağlar, sanayide kullanılan sıvı yağlar, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.13',
                   'business'=>'Biyodizel, vb. biyoyakıt imalatı (bitkisel veya hayvansal yağlardan elde edilen uzun zincirli yağ asitlerinin mono alkil esterleri) (%70 veya daha fazla petrol yağı ile karıştırılmış biyodizelden ürünler hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.14',
                   'business'=>'Başka yerde sınıflandırılmamış diğer kimyasal ürünlerin imalatı (vakum tüpleri için emiciler, pirolinyitler, kazan taşı önleyici bileşikler, yağ emülsiyonlaştırıcıları, dökümhanelerde kullanılan yardımcı kimyasal ürünler ve hazır bağlayıcılar, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.15',
                   'business'=>'Yangın söndürücü müstahzarları ve dolum malzemeleri imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.59.16',
                   'business'=>'Jelatin ve süt albüminlerinin imalatı (yalnızca gıda endüstrisinde kullanılanlar)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.60.01',
                   'business'=>'Kardelenmemiş ve taranmamış suni ve sentetik elyaf imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'20.60.02',
                   'business'=>'Sentetik filament ipliği ve sentetik monofilamentlerin, şeritlerin ve benzerlerinin imalatı (poliamidden ve polyesterden yüksek mukavemetli filament iplikler dahil) (bükülü, katlı ve tekstürize olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'21.10.01',
                   'business'=>'Temel eczacılık ürünlerinin imalatı (antibiyotik, vitamin, salisilik asit gibi ilaçların imalatında farmakolojik özelliklerinden yararlanmak üzere tıbbi olarak etken maddeler ile kan ürünlerinin, salgı bezi ve ekstrelerin, hormonların vb. imalatı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'21.20.01',
                   'business'=>'Eczacılığa ilişkin tıbbi ilaçların imalatı (antibiyotik içeren tıbbi ilaçlar, ağrı kesiciler, hormon içeren tıbbi ilaçlar vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'21.20.02',
                   'business'=>'Yapışkanlı bandajlar, katkütler ve benzeri tıbbi malzemelerin üretimi (steril cerrahi katgütler, eczacılık maddeleri ile birlikte kullanılan tamponlar, hidrofil pamuk, gazlı bez, sargı bezi vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'21.20.03',
                   'business'=>'Hayvan sağlığına ilişkin tıbbi ilaçların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'21.20.04',
                   'business'=>'Diğer eczacılık müstahzarlarının imalatı (antiserumlar, panzehirler, aşılar, hormon ve spermisit esaslı kimyasal kontraseptik müstahzarlar, diyagnostik reaktifleri ve diğer eczacılık müstahzarları) (hayvan sağlığı için olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.11.17',
                   'business'=>'Kauçuktan iç lastiklerin imalatı (dış lastikler için değişebilir sırtlar, kolonlar ve şeritlerin imalatı dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'22.11.18',
                   'business'=>'Kauçuktan dış lastik imalatı (motosikletler, bisikletler, otomobiller, otobüsler, kamyonlar, hava taşıtları, traktörler ve diğer araç ve donanımlar için) (dolgu veya alçak basınçlı lastikler dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'22.11.19',
                   'business'=>'Lastik tekerleklerinin yeniden işlenmesi ve sırt geçirilmesi (lastiğin kaplanması)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.01',
                   'business'=>'Kauçuktan hijyenik ve eczacılık ürünlerinin imalatı (prezervatifler, emzikler, hijyenik eldivenler vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.02',
                   'business'=>'Kauçuktan tüp, boru ve hortumların imalatı (vulkanize kauçuktan)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.03',
                   'business'=>'Kauçuktan giyim eşyası ve giysi aksesuarlarının imalatı (giysiler, eldivenler vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.04',
                   'business'=>'Kauçuktan süpürgelerin ve fırçaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.05',
                   'business'=>'Kauçuk ayakkabı/bot tabanları ve ayakkabı/botların diğer kauçuk parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.06',
                   'business'=>'Kauçuktan yer döşemeleri ve paspasların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.07',
                   'business'=>'Kauçuk kaplanmış, emdirilmiş, sıvanmış ve lamine edilmiş tekstil kumaşlarının imalatı, ana bileşeni kauçuk olanlar (kord bezi hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.08',
                   'business'=>'Kauçuktan paket lastiği, tütün kesesi, cam silecekleri, tarih ıstampaları için karakterler, tapalar, lavabo pompaları, şişeler için tıpa ve halkalar ile sert kauçuktan diğer çeşitli eşyaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.09',
                   'business'=>'Kauçuktan konveyör bantları ve taşıma kayışlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.10',
                   'business'=>'Rejenere kauçuk imalatı, birincil formda veya levha, tabaka veya şerit halinde',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.12',
                   'business'=>'Kauçuktan silgi, rondela, conta, tekne veya iskele usturmaçaları, gözenekli vulkanize kauçuktan teknik işlerde kullanılan diğer eşyalar ile demiryolu, kara yolu taşıtları ve diğer araçlar için kalıplanmış parçaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.19.13',
                   'business'=>'Vulkanize edilmiş (kükürtle sertleştirilmiş) kauçuk imalatı (ip, kordon, levha, tabaka, şerit, çubuk ve profil halinde)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.21.03',
                   'business'=>'Plastikten mamul halde tüp, boru, hortum ve bunların bağlantı elemanlarının imalatı (suni bağırsaklar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.21.04',
                   'business'=>'Plastikten yarı mamul halde profil, çubuk, tabaka, levha, blok, film, folyo, şerit, vb. ile monofilament imalatı (naylon brandalar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.22.43',
                   'business'=>'Plastik poşet, çöp torbası, çanta, torba, çuval, file, sandık, kutu, kasa, damacana, şişe, bidon, makara, masura, bobin, tıpa, kapak, kapsül vb. paketleme malzemelerinin imalatı (idrar torbası dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.23.03',
                   'business'=>'Plastikten depo, tank, fıçı ve benzeri kapların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.23.04',
                   'business'=>'Plastikten prefabrik yapıların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.23.05',
                   'business'=>'Vinil, linolyum (muşamba) gibi esnek yer kaplamaları ile plastik zemin, duvar ve tavan kaplamalarının imalatı (duvar kağıdı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.23.06',
                   'business'=>'Plastikten merdiven, merdiven korkuluğu, panjur, güneşlik, jaluzi, stor, vb. eşya ile bunların parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.23.07',
                   'business'=>'Plastikten banyo küvetleri, lavabolar, klozet kapakları, oturakları ve rezervuarları ile benzeri sıhhi ürünlerin imalatı (kalıcı tesisat için kullanılan montaj ve bağlantı parçaları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.23.08',
                   'business'=>'Plastikten /PVC\'den kapı, pencere, bunların kasaları, pervazları, kapı eşikleri, vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.23.90',
                   'business'=>'Başka yerde sınıflandırılmamış plastik inşaat malzemelerinin imalatı (plastik suni taş-mermerit imalatı)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.29.01',
                   'business'=>'Plastikten sofra, mutfak, banyoda kullanılan eşya (silikon kek kalıbı, leğen, tas, kova vb.) ve diğer ev eşyası imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.29.02',
                   'business'=>'Plastikten dikişsiz giyim eşyası ve giysi aksesuarlarının imalatı (eldiven dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.29.03',
                   'business'=>'Plastikten büro ve okul malzemelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.29.04',
                   'business'=>'Ayakkabı ve terliklerin plastik parçalarının imalatı (plastik ayakkabı kalıbı imalatı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.29.05',
                   'business'=>'Makine, mobilya, kaporta, el aletleri ve benzerlerinin plastikten bağlantı parçaları, plastikten taşıyıcı bantların ve konveyör bantlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.29.06',
                   'business'=>'Plastik başlık (koruma amaçlı olanlar hariç), izolasyon bağlantı parçaları ile lambaların, aydınlatma ekipmanlarının, ışıklı tabelaların, vb.nin başka yerde sınıflandırılmamış plastik kısımlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.29.07',
                   'business'=>'Plastikten mandal, askı, sünger, sabunluk, tarak, bigudi, toka, saç firketesi, boncuk, biblo, heykelcik ve diğer eşyalar ile mamul haldeki kendinden yapışkanlı levha, şerit vb. ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'22.29.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer plastik ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.11.01',
                   'business'=>'Levha veya tabaka halinde düz cam imalatı (telli, buzlu cam, renkli veya boyalı düz cam dahil) (dökülmüş, haddelenmiş, çekilmiş, üflenmiş, float, yüzeyi parlatılmış veya cilalanmış ancak başka şekilde işlenmemiş olanlar)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.12.01',
                   'business'=>'Cam ayna imalatı (taşıtlar için dikiz aynaları dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.12.02',
                   'business'=>'Sertleştirilmiş emniyet camı ve temperli düz cam imalatı (oto camı dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.12.03',
                   'business'=>'Çok katlı yalıtım camları imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.12.04',
                   'business'=>'Levha veya tabaka halinde işlenmiş cam imalatı (kavislendirilmiş, kenarları işlenmiş, gravür yapılmış, delinmiş, emaylanmış/sırlanmış veya başka bir şekilde işlenmiş, fakat çerçevelenmemiş veya monte edilmemiş olanlar) (optik camlar dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.13.01',
                   'business'=>'Camdan şişe, kavanoz ve diğer muhafaza kapları, bardaklar, termos ve diğer vakumlu kapların camdan yapılmış iç yüzeyleri ile camdan sofra ve mutfak eşyaları imalatı (ampuller hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.13.02',
                   'business'=>'Tuvalet, banyo, büro, iç dekorasyon, vb. amaçlarla kullanılan cam ve kristal eşya imalatı (camdan biblo, boncuk vb. küçük cam eşyalar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.14.01',
                   'business'=>'Cam elyafı imalatı (cam yünü ve bunlardan yapılmış dokuma dışı ürünler dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.19.01',
                   'business'=>'Sıkıştırılmış veya kalıplanmış camdan döşeme blokları, tuğlalar, karolar ve diğer ürünler, kurşunlu lambalar ve benzerleri, blok, plaka veya benzer şekillerdeki gözenekli, köpüklü camların imalatı (vitray cam hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.19.02',
                   'business'=>'Duvar saati, kol saati veya gözlük için camlar (bombeli, kavisli, içi oyuk vb. şekilde fakat, optik açıdan işlenmemiş) ile bu tür camların imalatı için kullanılan içi boş küre ve bunların parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.19.03',
                   'business'=>'Cam zarflar (açık) ve bunların cam parçalarının imalatı (elektrik ampulleri, elektrik lambaları, katot-ışınlı tüpler vb. için kullanılan)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.19.04',
                   'business'=>'Küçük cam eşya imalatı (biblo, vb. süs eşyası, boncuklar, imitasyon inciler/taşlar, imitasyon mücevherler, vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.19.05',
                   'business'=>'Lamba ve aydınlatma teçhizatının, ışıklı işaretlerin, isim tabelalarının vb.nin cam parçalarının imalatı (cam tabelaların imalatı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.19.06',
                   'business'=>'Laboratuvar, hijyen veya eczacılık ile ilgili cam eşyalar ile cam ampullerin (serum ampulleri) imalatı (ambalajlama ve taşımada kullanılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.19.07',
                   'business'=>'Camdan elektrik izolasyon malzemesi imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.19.08',
                   'business'=>'Vitray cam imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.19.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer cam ürünlerin imalatı ve işlenmesi (düz camdan yapılmış akvaryumların imalatı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.20.16',
                   'business'=>'Silisli süzme topraktan (kizelgur) ısı yalıtımlı seramik ürünler ile ateşe dayanıklı briket, blok, tuğla, ateş tuğlası, vb. ateşe dayanıklı seramik yapı ürünleri imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.20.17',
                   'business'=>'Ateşe dayanıklı imbikler, damıtma kabı, eritme potası, vana ucu, tüp, boru, döküm potaları, mufl ocağı, püskürtme tüpleri vb. seramik ürünlerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.20.19',
                   'business'=>'(Ek satır:RG-8/3/2020-31062) Ateşe dayanıklı çimento imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.20.20',
                   'business'=>'(Ek satır:RG-8/3/2020-31062) Ateşe dayanıklı çamur, harç, beton vb. imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.31.01',
                   'business'=>'Seramik karo ve kaldırım taşı imalatı (mozaik taşı ve mozaik küpleri dahil) (ateşe dayanıklı olanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.32.02 (Ek:RG-18/3/2022-31782) ',
                   'business'=>'Fırınlanmış, ateşe dayanıklı olmayan kil ve topraktan baca künkleri ve başlıkları, şömine ve baca boruları, oluklar ve bağlantı parçaları ile karo vb. inşaat malzemeleri imalatı (seramikten oluklar, borular ve bağlantı parçaları dahil) (tuğla ve kiremit hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.32.03 (Ek:RG-18/3/2022-31782) ',
                   'business'=>'Fırınlanmış, ateşe dayanıklı olmayan kil ve topraktan tuğla ve kiremit imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.41.01',
                   'business'=>'Seramik veya porselenden sofra takımları (tabak, bardak, fincan, vb.) ve diğer ev ve tuvalet eşyasının imalatı (çiniden olanlar ve sıhhi ürünler hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.41.02',
                   'business'=>'Seramik ve porselenden heykelcik, vazo, biblo, vb. süs eşyası imalatı (oyuncaklar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.41.03',
                   'business'=>'Çiniden sofra takımı, ev, tuvalet ve süs eşyası imalatı (çinicilik) (çini dekoru dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.41.04',
                   'business'=>'Topraktan güveç, çanak, çömlek, küp, vazo, vb. eşyalar ile topraktan heykel vb. süs ve dekoratif eşya imalatı (porselen ve çiniden olanlar ile malların ambalajlanması ve taşınması için olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.42.01',
                   'business'=>'Seramik sıhhi ürünlerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.43.01',
                   'business'=>'Seramik yalıtkanların (izolatörlerin) ve yalıtkan bağlantı parçalarının imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.44.01',
                   'business'=>'Diğer teknik seramik ürünlerin imalatı (laboratuvar, kimyasal ve diğer teknik alanlarda kullanılan seramikten ürünler) (ateşe dayanıklı seramik ürünler hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.49.01',
                   'business'=>'Tarımsal amaçlı olanlar ile malların taşınması ya da ambalajlanması için kullanılan seramik ürünlerin imalatı (seramik çömlekler, kavanozlar, vb. ile yalaklar, tekneler vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.49.02',
                   'business'=>'Başka yerde sınıflandırılmamış yapı işlerinde kullanılmayan diğer seramik eşyaların imalatı (dekoratif amaçlı olmayan seramik saksılar dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.51.01',
                   'business'=>'Çimento imalatı (çimento klinkeri, portland, alüminyumlu çimento (boksit çimentosu), cüruf çimento, süper fosfat çimentolar ve benzeri suya dayanıklı çimentolar)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.52.01',
                   'business'=>'Sönmemiş kireç, sönmüş kireç ve suya dayanıklı kireç imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.52.02',
                   'business'=>'Sönmüş alçıtaşından ya da sönmüş sülfattan alçı imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.52.03',
                   'business'=>'Yanmış (kalsine edilmiş) veya aglomera edilmiş dolomit imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.61.01',
                   'business'=>'Çimentodan, betondan veya suni taştan prefabrik yapı elemanları imalatı (gaz betondan ve kireç taşından olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.61.02',
                   'business'=>'Çimentodan, betondan veya suni taştan karo, döşeme taşı, kiremit, tuğla, boru, vb. inşaat amaçlı ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.61.03',
                   'business'=>'Betondan yapılmış prefabrik yapıların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.62.01',
                   'business'=>'İnşaat amaçlı alçı ürünlerin imalatı (kartonpiyer, levhalar, panolar, paneller, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.63.01',
                   'business'=>'Hazır beton imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.64.01',
                   'business'=>'Toz harç imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.65.02',
                   'business'=>'Lif ve çimento karışımlı ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.69.01',
                   'business'=>'Başka yerde sınıflandırılmamış alçı ve alçı esaslı bileşenlerden ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.69.02',
                   'business'=>'Beton, çimento ya da suni taştan yapılmış diğer ürünlerin imalatı (heykel, alçak ve yüksek kabartma, vazo, çiçek saksısı, mimari süsler, bahçe süsleri, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.70.01',
                   'business'=>'Taş ve mermerin kesilmesi, şekil verilmesi ve bitirilmesi (doğal taşlardan, mermerden, su mermerinden, travertenden, kayağantaşından levha/tabaka, kurna, lavabo, karo, kaldırım taşı, yapı taşı, mezar taşı, vb. imalatı dahil, süs eşyası hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.70.02',
                   'business'=>'Doğal taşlardan, mermerden, su mermerinden, travertenden, kayağantaşından süs eşyası imalatı (lületaşı, kehribar, vb.nden olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'23.91.01',
                   'business'=>'Aşındırıcı ürünlerin imalatı (değirmen taşları, bileği taşı, zımpara taşı vb.)(dokuma tekstil kumaşlarına, kağıt ve mukavvaya tutturulmuş zımparalar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.91.02',
                   'business'=>'Dokuma tekstil kumaşlarına, kağıt ve mukavvaya tutturulmuş olan zımparaların imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.99.01',
                   'business'=>'Asfalttan ve benzeri malzemelerden yapılan ürünlerin imalatı (çatı yapımında veya su yalıtımında kullanılan bitüm esaslı keçeler dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.99.02',
                   'business'=>'Mineral ses/ısı izolasyon malzemelerinin imalatı (cüruf yünleri, taş yünü, madeni yünler, pul pul ayrılmış vermikulit, genleştirilmiş kil, soğuk tandiş plakası, vb. ısı ve ses yalıtım malzemeleri)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.99.03',
                   'business'=>'İşlenmiş asbest (amyant) lifleri, asbest ve magnezyum karbonat esaslı karışımlar, bu karışımlardan veya asbestten yapılan ürünler, fren, debriyaj ve benzerleri için monte edilmemiş sürtünme malzemeleri (fren balatası vb.) imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.99.04',
                   'business'=>'İşlenmiş mika ve mikadan ürünlerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.99.05',
                   'business'=>'Bitümlü karışımların imalatı (doğal veya suni taştan malzemeler ile bir bağlayıcı olarak bitüm, doğal asfalt veya ilgili maddelerin karıştırılmasıyla elde edilenler)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.99.07',
                   'business'=>'Amyantlı kağıt imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.99.09',
                   'business'=>'Suni korindon imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.99.10',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Öğütülmüş veya kaplanmış kalsit imalatı (madencilik kapsamında yapılanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'23.99.90',
                   'business'=>'Diğer metal dışı minerallerden (turbadan, grafitten, vb. monte edilmemiş) ürünlerin imalatı (karbon elyafı dahil, elektrik amaçlı olanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.01',
                   'business'=>'Ham çelik üretilmesi (kütük veya diğer birincil formlarda ya da yarı mamul çelik ürünler halinde)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.02',
                   'business'=>'Çelikten açık profil imalatı (sıcak haddeleme, sıcak çekme veya kalıptan çekme işlemlerinden daha ileri işlem görmemiş)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.03',
                   'business'=>'Demir ve çelikten sıcak veya soğuk çekilmiş yassı hadde ürünleri imalatı (demir veya çelik alaşımlı levha, şerit, sac, teneke sac, vb. dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.05',
                   'business'=>'Sıcak haddelenmiş demir veya çelikten bar ve çubukların üretilmesi (inşaat demiri dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.06',
                   'business'=>'Demir veya çelik granül ve demir tozu üretilmesi',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.07',
                   'business'=>'Demir ya da çelik hurdaların yeniden eritilmesi',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.08',
                   'business'=>'Demir cevherinin doğrudan indirgenmesiyle elde edilen demirli ürünler ve diğer sünger demir ürünlerinin imalatı ile elektroliz veya diğer kimyasal yöntemlerle istisnai saflıkta demir üretilmesi',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.09',
                   'business'=>'Çelikten demir yolu ve tramvay yolu yapım malzemesi (birleştirilmemiş raylar ile ray donanımı, aksamı, vb.) ile levha kazıkları (palplanş) ve kaynaklı açık profil imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.10',
                   'business'=>'Pik demir ve manganezli dökme demir (aynalı demir/spiegeleisen) üretimi (külçe, blok, veya diğer birincil formlarda)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.10.12',
                   'business'=>'Ferro alaşımların imalatı (ferro manganez, ferro silisyum, ferro siliko manganez, ferro krom ve diğerleri)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.20.09',
                   'business'=>'Çelikten/demirden yapılmış tüp, boru, içi boş profiller ve ilgili bağlantı parçalarının imalatı (sıcak çekilmiş veya sıcak haddelenmiş)',
                   'hazard_class'=>'Çok tehlikeli',
                ],
                [
                   'nace_code'=>'24.20.10',
                   'business'=>'Çelikten/demirden yapılmış tüp, boru, içi boş profiller ve ilgili bağlantı parçalarının imalatı (soğuk çekilmiş veya soğuk haddelenmiş)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.31.01',
                   'business'=>'Çelik barların ve içi dolu profillerin soğuk çekme yöntemiyle imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.32.01',
                   'business'=>'Çelik dar şeritlerin soğuk hadde yöntemiyle imalatı (genişliği < 600 mm olan)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.33.01',
                   'business'=>'Açık profillerin, nervürlü levhaların ve sandviç panellerin soğuk şekillendirme veya katlama yöntemiyle imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.34.01',
                   'business'=>'Çelik tellerin soğuk çekme yöntemiyle imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.41.16',
                   'business'=>'İşlenmemiş, yarı işlenmiş, toz halde altın imalatı ile gümüş veya adi metallerin altınla preslenerek kaplanması (Mücevher ve benzeri eşyaların imalatı hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.41.17',
                   'business'=>'İşlenmemiş, yarı işlenmiş, toz halde gümüş imalatı ile adi metallerin gümüşle preslenerek kaplanması (Mücevher ve benzeri eşyaların imalatı hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.41.18',
                   'business'=>'İşlenmemiş, yarı işlenmiş, toz halde platin imalatı ile altın, gümüş veya adi metallerin platinle preslenerek kaplanması (paladyum, rodyum, osmiyum ve rutenyum imalatı ile platin katalizör imalatı dahil) (Mücevher ve benzeri eşyaların imalatı hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.41.19',
                   'business'=>'Değerli metal alaşımlarının imalatı (Mücevher ve benzeri eşyaların imalatı hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.42.16',
                   'business'=>'Alüminyum folyo imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.42.17',
                   'business'=>'Alüminyum imalatı (işlenmemiş halde)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.42.18',
                   'business'=>'Alüminyum sac, levha, tabaka, şerit imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.42.20',
                   'business'=>'Alüminyum oksit imalatı (suni korindon hariç) (alümina)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.42.21',
                   'business'=>'Alüminyum bar, çubuk, tel ve profil, tüp, boru ve bağlantı parçaları imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.43.01',
                   'business'=>'Kurşun tabaka, levha, şerit, folyo, kurşun tozu ve pulu imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.43.02',
                   'business'=>'Kurşun imalatı (işlenmemiş)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.43.04',
                   'business'=>'Kalay bar, çubuk, profil, tel, vb. imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.43.05',
                   'business'=>'Kalay imalatı (işlenmemiş halde)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.43.06',
                   'business'=>'Çinko imalatı (işlenmemiş halde)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.43.07',
                   'business'=>'Çinko bar, çubuk, profil, tel vb. imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.43.08',
                   'business'=>'Çinko sac, tabaka, levha, şerit, folyo, çinko tozları, vb. imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.44.01',
                   'business'=>'Bakır, bakır matı, bakır tozu, semente bakır, bakır anotu ile bakır ve bakır alaşımlarının imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.44.03',
                   'business'=>'Bakır sac, tabaka, levha, şerit, folyo imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.44.04',
                   'business'=>'Bakırın çekilmesi ve haddelenmesi ile tüp, boru, bunların bağlantı elemanları, bar, çubuk, tel ve profil imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'24.45.01',
                   'business'=>'Maden cevherlerinden ya da oksitlerden işlenmemiş krom, manganez, nikel, tungsten, molibden, tantalum, kobalt, bizmut, titanyum, zirkonyum, berilyum, germanyum vb. imalatı (alaşımları dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.45.02',
                   'business'=>'Krom, manganez, tungsten, molibden, tantalum, kobalt, bizmut, titanyum, zirkonyum, berilyum, germanyum vb. demir dışı metallerden yapılan ürünlerin imalatı (sermetler ve diğer ara ürünler dahil, nikelden olanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.45.06',
                   'business'=>'Nikel matları, nikel oksit sinterleri ve diğer ara ürünleri ile nikel bar, çubuk, profil, tel, levha, şerit, folyo, tüp, boru ve bağlantı parçaları imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.46.01',
                   'business'=>'Uranyum ve radyumlu maden cevherlerinden veya diğer cevherlerden metalik uranyum üretimi, uranyumun ergitilmesi ve rafine edilmesi (zenginleştirilmiş plutonyum, uranyum, toryum ile bunların bileşiklerinin imalatı hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.51.13',
                   'business'=>'Demir döküm (yarı mamul demir ürünlerin dökümü, gri demir dökümü, küresel grafit demir dökümü, dövülebilir dökme demir ürünleri dökümü, tüpler, borular ve içi boş profiller ile dökme demirden tüp ve borular ile bunların bağlantı parçalarının imalatı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.52.20',
                   'business'=>'Çelik dökümü',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.53.01',
                   'business'=>'Hafif metallerin dökümü (alüminyum, magnezyum, titanyum, çinko vb.den yarı mamul ürünlerin dökümü ile dökme hafif metallerin dökümü)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.54.01',
                   'business'=>'Demir dışı ağır metallerin dökümü (bakır vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'24.54.02',
                   'business'=>'Değerli metallerin dökümü',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.11.06',
                   'business'=>'İnşaat ve inşaatın parçaları için metal çatı ya da iskeletlerin imalatı (kuleler, direkler, destekler, köprüler vb.) (kepenk ve yangın merdiveni ile prefabrik yapılar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.11.07',
                   'business'=>'Metalden kepenk ve yangın merdiveni imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.11.08',
                   'business'=>'Metalden prefabrik yapı imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.12.04',
                   'business'=>'Alüminyum kapı, pencere, bunların kasaları, kapı eşiği, panjur, vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.12.05',
                   'business'=>'Çelik kapı, pencere, bunların kasaları, kapı eşiği, panjur, vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.12.06',
                   'business'=>'Demir kapı, pencere, bunların kasaları, kapı eşiği, panjur, vb. imalatı (bahçe kapıları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.21.10',
                   'business'=>'Merkezi ısıtma radyatörleri imalatı (elektrikli radyatörler ile döküm olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.21.11',
                   'business'=>'Merkezi ısıtma kazanları (boyler) imalatı (kombi, kat kaloriferi ve diğer merkezi ısıtma kazanları) (buhar jeneratörleri ve kızgın su üreten kazanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.21.12',
                   'business'=>'Merkezi ısıtma radyatörleri imalatı, döküm olanlar (elektrikli radyatörler hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.29.01',
                   'business'=>'Sıkıştırılmış veya sıvılaştırılmış gaz için kullanılan metal konteynerlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.29.02',
                   'business'=>'Metalden rezervuarlar, tanklar, fıçılar ve benzeri kapasitesi > 300 litre olan konteynerlerin imalatı (sıkıştırılmış veya sıvılaştırılmış gazlar için olanlar ile mekanik veya termal ekipmanlı olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.30.01',
                   'business'=>'Buhar üretim kazanları (buhar jeneratörü), kızgın su kazanları (boyler) ve bunların parçaları ile kazanlar (boylerler) için yardımcı üniteler ve buhar veya diğer buhar güç üniteleri için kondansatör imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.30.02',
                   'business'=>'Nükleer reaktörler ve nükleer reaktör parçası imalatı (izotop ayırıcılar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.40.01',
                   'business'=>'Tabanca, revolver (altıpatlar), av tüfeği, havalı tabanca, cop, vb. askeri amaçlı olmayan ateşli silahlar ve benzeri aletlerin ve bunların parçalarının imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.40.02',
                   'business'=>'Askeri silah ve bunların parçalarının imalatı (büyük toplar, savaş araçları, füzeatarlar, torpil kovanları, ağır makineli tüfekler, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.40.03',
                   'business'=>'Bomba, füze ve benzeri savaş gereçleri, fişekler, diğer mermi ve mühimmatlar ile bunların parçalarının imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.50.01',
                   'business'=>'Metallerin dövülmesi, preslenmesi, baskılanması ve damgalanması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.50.02',
                   'business'=>'Toz metalürjisi',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.61.01',
                   'business'=>'Metallerin ısıl işlem ve anodlama, sertleştirme, vernikleme, vb. yüzey işlemleri, elektroliz, çinkoyla galvanizleme veya kimyasal işlemlerle metalik kaplama (kalay ve nikel kaplama hariç) ve plastik, teflon, vb. metal dışı malzemelerle kaplama faaliyeti',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.61.02',
                   'business'=>'Metallerin kalay ile kaplanması (kalaycılık) faaliyeti',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.61.03',
                   'business'=>'Metallerin nikel ile kaplanması (nikelajcılık) faaliyeti',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.62.01',
                   'business'=>'CNC oksijen, CNC plazma, CNC su jeti vb. makinelerinin kullanılması yoluyla metallerin kesilmesi veya üzerlerinin yazılması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.62.02',
                   'business'=>'Metallerin makinede işlenmesi (torna tesfiye işleri, metal parçaları delme, tornalama, frezeleme, rendeleme, parlatma, oluk açma, perdahlama, birleştirme, kaynak yapma vb. faaliyetler) (metallerin lazerle kesilmesi hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.62.03',
                   'business'=>'Lazer ışınlarının kullanılması yoluyla metallerin kesilmesi veya üzerlerinin yazılması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.71.01',
                   'business'=>'Kaşık, çatal, kepçe, kevgir, servis spatulası, şeker maşası ve benzeri mutfak gereçleri, sofra takımları, çatal bıçak takımları imalatı (balık bıçakları, kahvaltı ve meyve bıçakları dahil fakat, sofra bıçakları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.71.02',
                   'business'=>'Sofra bıçakları (balık bıçakları, kahvaltı ve meyve bıçakları hariç), budama bıçakları, sustalı bıçaklar, satır, vb. bıçaklar (makineler için olanlar hariç) ile terzi makasları, vb. makaslar ve bunların ağızlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.71.03',
                   'business'=>'Kılıç, pala, kasatura, mızrak, süngü, avcı bıçağı ve benzeri silahlar ile bunların parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.71.04',
                   'business'=>'Manikür veya pedikür setleri ve aletleri, kağıt bıçakları, mektup açacakları, kalemtıraşlar ve bunların bıçakları, kırma, yarma ve kıyma bıçakları, saç kesme ve hayvan kırkma makine ve aletleri ile benzeri elektriksiz kesici aletlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.71.05',
                   'business'=>'Tıraş bıçakları, usturalar ile jiletler ve tıraş makinelerinin bıçaklarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.72.01',
                   'business'=>'Asma kilit, kilit, anahtar, menteşe, otomatik kapı kapayıcıları, kilitli klipsler, bağlantı takozu, askılıklar, bulaşıklıklar, anahtar askıları, vb. ile binalar, mobilyalar, taşıtlar, vb. için küçük tekerleklerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.73.02',
                   'business'=>'El aletleri, takım tezgahı uçları, testere ağızları, mengeneler, kıskaçlar, sıkıştırma anahtarları vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.73.03',
                   'business'=>'Metalden kalıp ve döküm modeli imalatı (kek ve ayakkabı kalıpları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.73.04',
                   'business'=>'Kuyumculuk aletleri ve parçalarının imalatı (pense, keski, çekiç vb. aletler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.73.05',
                   'business'=>'Plastikten kalıp ve döküm modeli imalatı (kek ve ayakkabı kalıpları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.73.06',
                   'business'=>'Ahşap ve diğer malzemelerden kalıp ve döküm modeli imalatı (kek ve ayakkabı kalıpları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.91.01',
                   'business'=>'Çelik varil ve benzer muhafazaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.92.01',
                   'business'=>'Demir veya çelikten yiyecek, içecek ve diğer ürünler için kapasitesi < 50 litre olan kutuların imalatı (lehim veya kıvrılarak kapatılanlar) (tenekeden olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.92.02',
                   'business'=>'Adi metalden dişli kapaklar (şişe kapağı vb.) ve tıpalar ile tıkaçlar ve kapakların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.92.03',
                   'business'=>'Kapasitesi 300 lt.yi geçmeyen alüminyum varil fıçı, kova, kutu, vb. imalatı (diş macunu, krem gibi kapaklı tüpler ve katlanabilir kutular ile aerosol kutuları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.93.01',
                   'business'=>'Metalden zincirler (mafsallı bağlantı zinciri hariç) ve parçaları ile yay ve yay yaprakları, kaplanmış veya nüveli teller, çubuklar, tüpler, levhalar ve elektrotların imalatı (elektrik işlerinde kullanılanlar ile elektrik yalıtımı olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.93.02',
                   'business'=>'İğne, çengelli iğne, çuvaldız, örgü şişi, tığ, raptiye, çivi, vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.93.03',
                   'business'=>'Telden yapılan diğer ürünlerin imalatı (örgülü tel, örme şerit, taşıma askısı, dikenli tel (elektrik yalıtımı olanlar hariç) ve demir, çelik veya bakır tellerden mensucat, ızgara, ağ, kafeslik ve çitler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.94.01',
                   'business'=>'Yivsiz bağlantı malzemeleri imalatı, demir, çelik veya bakırdan (rondelalar, perçinler, perçin çivileri, kamalı pimler, kopilyalar vb. ürünler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.94.02',
                   'business'=>'Yivli bağlantı malzemeleri imalatı, demir, çelik veya bakırdan (vidalar, cıvatalar, somunlar vb. yivli ürünler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.01',
                   'business'=>'Demir, çelik ve alüminyumdan sofra ve mutfak eşyalarının imalatı (tencere, tava, çaydanlık, cezve, yemek kapları, bulaşık telleri vb.) (teflon, emaye vb. ile kaplanmışlar dahil, bakırdan olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.02',
                   'business'=>'Metalden yapılmış eviye, lavabo, küvet, duş teknesi, jakuzi (emaye olsun-olmasın) ve diğer sıhhi ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.03',
                   'business'=>'Zırhlı veya güçlendirilmiş kasalar, kasa daireleri, kilitli para kasaları, zırhlı kapılar vb. imalatı (adi metalden)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.04',
                   'business'=>'Adi metalden büro malzemeleri imalatı (dosya kutuları, kaşeler, zımba telleri, kağıt ataçları vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.05',
                   'business'=>'Metalden yapılmış çeşitli eşyaların imalatı (klips, tarak, saç tokası, saç firketesi, bigudi, kopça, elbise askısı, rozet, rütbe, kapan, tuzak, çöp sepeti, sigara tabakası, palet, makara, kanca, kozmetik kutuları vb.) (tekstil ürünleri imalatında kullanılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.06',
                   'business'=>'Bakırdan sofra ve mutfak eşyası imalatı (cezve, tencere, çanak, tabak, ibrik vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.07',
                   'business'=>'Kalıcı metalik mıknatısların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.08',
                   'business'=>'Metalden gemi ve tekne pervaneleri ve bunların aksamları ile çıpalar, filika demirleri vb. imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.09',
                   'business'=>'Alüminyum jaluzi perde imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.10',
                   'business'=>'Metal merdiven imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.11',
                   'business'=>'Zil, çan, gong vb. eşyalar ile adi metallerden biblo, heykelcik, çerçeve, ayna ve diğer süs eşyası imalatı (bisiklet zilleri dahil ancak kalıba dökülerek yapılanlar, bakırdan olanlar ile mutfak eşyaları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.12',
                   'business'=>'Kalıba dökülerek yapılan zil, çan, gong vb. eşyalar ile adi metallerden kalıba dökülerek yapılan biblo, heykelcik ve diğer süs eşyası imalatı (bisiklet zilleri dahil ancak bakırdan olanlar ile mutfak eşyaları hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.13',
                   'business'=>'Metalden çatı olukları, çatı kaplamaları vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.14',
                   'business'=>'Adi metallerden işaret levhaları ve tabelalar ile rakamlar, harfler ve diğer sembollerin imalatı (oto plakaları dahil, ışıklı olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.15',
                   'business'=>'Kurşun tüp, boru ve bunların bağlantı parçaları ile kurşun bar, çubuk, profil, tel vb. imalatı (alaşımdan olanlar dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.16',
                   'business'=>'Kalay plaka, tabaka, sac, levha, şerit, folyo, tüp, boru ve kalay tozları ile diğer ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.17',
                   'business'=>'Çinko tüp, boru ve bağlantı parçaları ile diğer ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.18',
                   'business'=>'Bakırdan yapılan biblolar, çerçeveler, aynalar ve diğer süsleme eşyaları ile süsleme işleri (mutfak eşyaları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.19',
                   'business'=>'Demir yolu veya tramvay hatlarında kullanılan adi metalden sabit malzemeler ve bağlantı parçaları ile bunların parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.20',
                   'business'=>'Elektriksiz sebze-meyve dilme, doğrama ve sularını çıkarma aletleri, et kıyma aletleri, kahve ve baharat değirmenleri, el havanı, rende vb. el gücüyle çalışan mutfak aletleri ve aksesuarları imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.21',
                   'business'=>'Elektriksiz hazneli döner bacaların, havalandırma kanallarının vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'25.99.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer fabrikasyon metal ürünlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.11.04',
                   'business'=>'Diyotların, transistörlerin, diyakların, triyaklar, tristör, rezistans, ledler, kristal, röle, mikro anahtar, sabit veya ayarlanabilir direnç ve kondansatörler ile elektronik entegre devrelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.11.05',
                   'business'=>'Katot ışınlı görüntü tüpleri, televizyon kamerası tüpleri ve magnetronlar, klistronlar, mikrodalga tüpleri ve diğer valf tüplerinin, LCD ve plazma TV panelleri ve göstergelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.11.06',
                   'business'=>'Çıplak baskılı devre kartlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.11.90',
                   'business'=>'Bys. diğer elektronik bileşenlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.12.01',
                   'business'=>'Yüklü elektronik kart imalatı (yüklü baskılı devre kartları, ses, görüntü, denetleyici, ağ ve modem kartları ile akıllı kartlar vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.20.01',
                   'business'=>'Bilgisayar ve bilgisayar çevre birimleri imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.30.02',
                   'business'=>'Radyo ve televizyon stüdyoları ve yayın teçhizatları ile radyo ve televizyon iletim cihazlarının imalatı (tv kameraları ve baz istasyonları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.30.03',
                   'business'=>'Kızıl ötesi (enfraruj) sinyal kullanan iletişim cihazlarının imalatı (örn: uzaktan kumanda cihazları)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.30.05',
                   'business'=>'Alıcı ve verici antenlerin imalatı (harici, teleskopik, çubuk, uydu, çanak ve hava ve deniz taşıtlarının antenleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.30.06',
                   'business'=>'Kablolu ve kablosuz telefon, cep telefonu, kablolu görüntülü telefon, çağrı cihazı ve faks cihazı imalatı (telesekreter imalatı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.30.08',
                   'business'=>'Merkezi iletişim santral donanımları ile sayısal veya analog telefon-telgraf santrallerinin ve ağ geçitleri, köprüleri, yönlendiricileri gibi veri iletim donanımlarının imalatı (mors veya mors tipi kaydedici ve anahtarlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.30.09',
                   'business'=>'Hırsız ve yangın alarm sistemleri ve kapı konuşma sistemlerinin (diyafon) (görüntülü olanlar dahil) imalatı (motorlu kara taşıtları için alarm sistemleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.30.10',
                   'business'=>'Ses, görüntü veya diğer verilerin alınması, dönüştürülmesi, iletilmesi/yeniden oluşturulması için kullanılan diğer makinelerin imalatı (alıcısı/vericisi bulunan telgraf, teleks cihazları ile anahtarlama ve yönlendirme cihazları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.30.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer iletişim ekipmanlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.40.08',
                   'business'=>'Ses ve görüntü oynatıcı ve kaydedicileri, ev tipi video kameralar ve diğer görüntü kayıt veya görüntü çoğaltma cihazlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.40.09',
                   'business'=>'Radyo ve televizyon imalatı (taşıtlarda kullanılanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.40.10',
                   'business'=>'Mikrofon, hoparlör ve kulaklıklar ile elektrikli ses yükselteçlerinin (amplifikatörler) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.40.11',
                   'business'=>'Monitörler ve projektörlerin imalatı (bilgisayar gibi bir otomatik veri işleme sisteminde kullanılmayanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.40.12',
                   'business'=>'Video oyun ve konsollarının (televizyonla kullanılanlar ve kendi ekranı olanlar) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.40.90',
                   'business'=>'Bys. tüketici elektroniği ürünlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.02',
                   'business'=>'Dedektör imalatı (yeraltı kaynakları, maden, mayın, güvenlik kontrol, radyasyon vb. dedektörleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.03',
                   'business'=>'Elektrik miktarını (volt, akım vb.) ölçmek ve kontrol etmek için kullanılan alet ve cihazların imalatı (avometre, voltmetre, osiloskop ile diğer voltaj, akım, direnç veya elektrik gücünü ölçüm veya kontrol için olanlar) (elektrik sayaçları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.04',
                   'business'=>'Hız ve mesafe ölçümünde kullanılan alet ve cihazların imalatı (taşıt hız göstergesi, takometre, taksimetre vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.05',
                   'business'=>'Isı ve sıcaklık ölçümünde kullanılan alet ve cihazların imalatı (termometre, termostat, pirometre vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.06',
                   'business'=>'Işık, ışın ve renk ölçümünde kullanılan alet ve cihazların imalatı (polarimetre, kolorimetre, refraktometre vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.07',
                   'business'=>'Meteorolojide kullanılan alet ve cihazların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.08',
                   'business'=>'Yön bulma pusulaları ile diğer seyrüsefer alet ve cihazlarının, radar ve sonar cihazlarının imalatı (hava, kara ve deniz taşımacılığında kullanılanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.09',
                   'business'=>'Hava, sıvı ve gazların akış, seviye, basınç veya diğer değişkenlerini ölçme ve kontrol etme için kullanılan aletlerin imalatı (hidrometre, debimetre, barometre, higrometre vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.10',
                   'business'=>'Gaz, sıvı veya elektrik üretim veya tüketim sayaçlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.11',
                   'business'=>'Teçhizatlı çizim masaları ve makineleri ile diğer çizim, işaretleme veya matematiksel hesaplama aletlerinin imalatı (pergel takımı, pantograf, resim, çizim, hesap yapmaya mahsus elektrikli/elektronik çiziciler vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.12',
                   'business'=>'Laboratuvar, kuyumculuk vb. yerlerde kullanılan hassas tartıların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.13',
                   'business'=>'Sanayide kullanılan işlem kontrol amaçlı teçhizatların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.14',
                   'business'=>'Telemetreler, teodolitler ve diğer arazi ölçümü, hidrografik, oşinografik, hidrolojik veya jeofizik alet ve cihazlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.15',
                   'business'=>'Seyrüsefere yardımcı telsiz cihazları ile uzaktan kumandalı kontrol cihazlarının (roketler, füzeler, makineler vb) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.51.90',
                   'business'=>'Bys. ölçme, test ve seyrüsefer amaçlı alet ve cihazların imalatı (hidrolik veya pnömatik otomatik ayar veya kontrol aletleri ile milometreler, pedometreler, stroboskoplar, monostatlar, kumpaslar, spektrometreler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.52.03',
                   'business'=>'Devam kayıt cihazları, zaman kayıt cihazları, parkmetreler; duvar ve kol saati makineli zaman ayarlı anahtarların imalatı (vardiya saati vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.52.04',
                   'business'=>'Kol, masa, duvar ve cep saatlerinin, bunların makinelerinin, kasalarının ve diğer parçalarının imalatı (kronometreler ve taşıtlar için gösterge panellerinde bulunan saatler ve benzeri tipteki saatler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.60.01',
                   'business'=>'Işınlama, elektromedikal ve elektroterapi ile ilgili cihazların imalatı (elektro-kardiyograf cihazı, işitme cihazı, radyoloji cihazı, röntgen cihazları, X, Alfa, Beta, Gama, mor ötesi ve kızıl ötesi ışınların kullanımına dayalı cihazlar, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'26.70.11',
                   'business'=>'Objektif merceği, levha ve tabaka halinde polarizan madde, renk filtresi, optik mercek, prizma, ayna ve diğer optik elemanlar ile dürbün, optik mikroskop, optik teleskop ve diğer astronomik aletler ile bunların aksam ve parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.70.12',
                   'business'=>'Mikrofilm, mikrofiş ve diğer mikroform okuyucuların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.70.13',
                   'business'=>'Sinematografik kameraların ve projektörlerin, diyapozitif (slayt) ve diğer projektörlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.70.16',
                   'business'=>'Fotoğraf makinesi imalatı (dijital, anında görüntü basan, dokümanların mikrofilm, vb. üzerine kaydedilmesinde, deniz altında, hava fotoğrafçılığında, adli tıp veya kriminolojik laboratuvarlarda, vb. kullanılanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.70.19',
                   'business'=>'Flaş lambaları, fotografik agrandisörler (büyütücüler), fotoğraf laboratuvarları için cihazlar, negatoskoplar (ince ışıklı panel), projeksiyon ekranları, likit kristal cihazlar ile lazerlerin (lazer diyotlar hariç) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.80.01',
                   'business'=>'Boş manyetik ses ve görüntü kaset bantlarının imalatı (plak dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.80.02',
                   'business'=>'Manyetik şeritli kartların imalatı (boş telefon kartı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.80.03',
                   'business'=>'Boş CD, DVD, disket, mavi ışınlı (blu-ray) disk, vb. ürünlerin imalatı (disk üretimi için kullanılan kalıp (matris) ve master dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'26.80.90',
                   'business'=>'Bys. manyetik ve optik ortamların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.11.01',
                   'business'=>'Elektrik motoru, jeneratör ve transformatörlerin imalatı (aksam ve parçaları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.11.03',
                   'business'=>'Elektrik motoru, jeneratör ve transformatörlerin aksam ve parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.12.01',
                   'business'=>'Elektrik devrelerinin anahtarlanması, korunması ile elektriğin kontrol ve dağıtımına özgü cihazların imalatı (sigorta, otomatik devre kesici, röle, yalıtım, devre ve yük ayırıcı anahtarlar, voltaj sınırlayıcı, dalga bastırıcı vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.12.02',
                   'business'=>'Elektrik devrelerinin anahtarlanması, korunması ve elektriğin kontrol ve dağıtımına özgü cihazların parçalarının imalatı (kumanda panosu için tablo, konsol, kabin vb. diğer mesnetler dahil, elektrik düğmesi, fişi ve prizi hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.20.01',
                   'business'=>'Elektrik akümülatör parçalarının imalatı (akümülatör plakaları, separatörler, kurşun ızgaralar) (akümülatör kutu ve kapaklarının imalatı hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'27.20.02',
                   'business'=>'Şarj edilemeyen (birincil) pil ve bataryalar ile bunların aksam ve parçalarının imalatı (manganez dioksitli, cıva oksitli, gümüş oksitli, lityum oksitli, çinko-hava reaksiyonlu pil ve bataryalar)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'27.20.03',
                   'business'=>'Akümülatör imalatı (kurşun asitli, nikel kadmiyum, nikel metal hidrit, lityum-iyon, lityum polimer, nikel demir ve diğer elektrik akümülatörleri)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'27.20.04',
                   'business'=>'Şarj edilebilir pil ve batarya ile bunların parçalarının imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'27.20.05',
                   'business'=>'Akümülatör kutu ve kapaklarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.31.04',
                   'business'=>'Fiber optik kabloların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.32.03',
                   'business'=>'Diğer elektronik ve elektrik telleri ve kablolarının imalatı (koaksiyel kablo ve diğer koaksiyel elektrik iletkenleri, yalıtılmış bobin telleri, izolasyonlu toprak su altı iletkenler, asetatlı ve silikonlu bakır iletkenler, vb.) (fiberoptik kablo hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.33.02',
                   'business'=>'Kablolamada kullanılan gereçlerin imalatı (fiş, soket, baskılı, düğmeli vb. anahtar, priz, duy, plastikten elektrik boru ve kablo tablaları, makine ve cihazları izole edici plastik bağlantı parçaları, vb.) (elektronik bileşenlerde kullanılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.40.01',
                   'business'=>'Deşarj ampulü, mor ötesi veya kızıl ötesi ampul, ark ampulü, tungsten halojen filamentli ampul, diğer filamentli ampul ile fotoğrafçılıkta kullanılan flaş ampulü, flaş küpü ve benzerlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.40.02',
                   'business'=>'Hava ve motorlu kara taşıtları için monoblok far üniteleri, kara, hava ve deniz taşıtları için elektrikli aydınlatma donanımları veya görsel sinyalizasyon ekipmanları imalatı (polis araçları, ambulans vb. araçların dış ikaz lambaları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.40.03',
                   'business'=>'Avize, aplik ve diğer elektrikli aydınlatma armatürleri, sahne, fotoğraf veya sinema stüdyoları için projektörler ve spot ışıkları, elektrikli masa lambaları, çalışma lambaları, abajur vb. lambaların imalatı (süsleme için ışıklandırma setleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.40.04',
                   'business'=>'Sokak aydınlatma donanımlarının imalatı (trafik ışıkları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.40.05',
                   'business'=>'Pil, akümülatör veya manyeto ile çalışan portatif elektrik lambaları ve elektriksiz lambalar ile el feneri, gaz ve lüks lambası vb. aydınlatma armatürlerinin imalatı (taşıtlar için olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.40.06',
                   'business'=>'Işıklı tabela, ışıklı reklam panosu ve benzerlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.40.07',
                   'business'=>'Bys diğer lamba ve aydınlatma armatürleri ile lambaların, aydınlatma armatürü ve benzerlerinin aksam ve parçalarının imalatı (cam veya plastikten olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.51.02',
                   'business'=>'Ev tipi elektrikli su ısıtıcıları (depolu su ısıtıcıları, anında su ısıtıcıları, şofben, termosifon dahil), elektrikli ısıtma cihazları (elektrikli soba, radyatör, vb.) ve elektrikli toprak ısıtma cihazlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.51.03',
                   'business'=>'Ev tipi elektrikli süpürge ve halı temizleme/yıkama makineleri ile kuru veya ıslak elektrikli süpürgeler, şarjlı veya pilli el süpürgelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.51.04',
                   'business'=>'Mutfakta kullanılan elektrikli küçük ev aletlerinin imalatı (çay veya kahve makinesi, semaver, ızgara, kızartma cihazı, ekmek kızartma makinesi, mutfak robotu, mikser, blender, meyve sıkacağı, et kıyma makinesi, tost makinesi, fritöz vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.51.05',
                   'business'=>'Elektrikli diğer küçük ev aletleri (elektrotermik el kurutma makinesi, elektrikli ütü, havlu dispenseri, hava nemlendirici) ile elektrikli battaniyelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.51.06',
                   'business'=>'Elektrikli kişisel bakım eşyalarının imalatı (elektrikli tıraş makinesi, epilatör ve saç kesme makinesi, elektrotermik saç şekillendirme makinesi (saç kurutma makinesi, bigudi, tarak, saç maşası), elektrikli diş fırçası, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.51.07',
                   'business'=>'Elektrikli ev aletleri aksam ve parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.51.08',
                   'business'=>'Ev tipi buzdolabı, dondurucu, çamaşır makinesi, çamaşır kurutma makinesi, bulaşık makinesi, vantilatör, aspiratör, fan, aspiratörlü davlumbaz, fırın, ocak, mikrodalga fırın, elektrikli pişirme sacı vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.51.90',
                   'business'=>'Bys. diğer elektrikli ev aletlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.52.02',
                   'business'=>'Elektriksiz ev tipi gaz, sıvı veya katı yakıtlı soba, kuzine, ızgara, şömine, mangal, semaver, su ısıtıcısı (termosifon, şofben vb.) vb. aletlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.52.05',
                   'business'=>'Elektriksiz yemek pişirme cihazlarının imalatı (gaz yakıtlı set üstü ocaklar, gaz veya sıvı yakıtlı fırınlar ve ocaklar vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.52.06',
                   'business'=>'Elektriksiz ev aletlerinin aksam ve parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.90.02',
                   'business'=>'Elektrik kondansatörleri, dirençleri (ısıtma rezistansları hariç), reostaları ve potansiyometrelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.90.03',
                   'business'=>'Elektrikli sinyalizasyon, güvenlik veya trafik kontrol ekipmanlarının imalatı (demir yolları, kara yolları, iç su yolları, taşıt park alanları, limanlar ve hava meydanları için) (trafik ışıkları ve sinyal donanımları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.90.04',
                   'business'=>'Karbon elektrotlar ve elektrik işlerinde kullanılan grafitten veya karbondan diğer ürünlerin imalatı (ısıtıcı kömür rezistanslar, pil kömürleri, ark lambaları ve diğer lambalar için kömürler vb. dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'27.90.05',
                   'business'=>'Elektrikli kaynak ve lehim teçhizatı (lehim havyaları, ark kaynak makineleri, endüksiyon kaynak makineleri vb.) ile metallerin veya sinterlenmiş metal karbürlerin sıcak spreylenmesi için elektrikli makine ve cihazlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.90.06',
                   'business'=>'Sıvı kristal cihazlı (LCD) veya ışık yayan diyotlu (LED) gösterge panelleri ile bys. elektrikli sesli veya görsel sinyalizasyon cihazlarının imalatı (elektronik sayı levhası (skorbord) dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.90.08',
                   'business'=>'Kendine özel fonksiyonu olan elektrikli makine ve cihazların imalatı (anten yükselteçleri, çitlere elektrik verici cihazlar, tercüme veya sözlük fonksiyonlu elektrikli makineler, ses kayıt cihazlarında kullanılan gürültü azaltma üniteleri vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.90.09',
                   'business'=>'Elektrik yalıtkanlarının (izolatörlerinin) imalatı (cam ve seramikten olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.90.10',
                   'business'=>'Solaryum yatakları, solaryum lambaları vb. bronzlaşma ekipmanlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'27.90.90',
                   'business'=>'Bys. elektrikli diğer ekipmanların imalatı (elektromıknatıslar, elektromanyetik kaplinler, frenler ve vinç başları ile elektrikli parçacık hızlandırıcılar, sinyal jeneratörleri vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.11.08',
                   'business'=>'Türbin ve türbin parçalarının imalatı (rüzgar, gaz, su ve buhar türbinleri ile su çarkları ve bunların parçaları) (hava taşıtları için turbo jetler veya turbo pervaneler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.11.09',
                   'business'=>'Deniz taşıtlarında, demir yolu taşıtlarında ve sanayide kullanılan kıvılcım ateşlemeli veya sıkıştırma ateşlemeli içten yanmalı motorların ve bunların parçalarının imalatı (hava taşıtı, motorlu kara taşıtı ve motosiklet motorları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.11.10',
                   'business'=>'Tüm içten yanmalı motorlar, dizel motorlar vb.de kullanılan pistonlar, silindirler ve silindir blokları, silindir başları, silindir gömlekleri, emme ve egzos subapları, segmanlar, hareket kolları, karbüratörler, yakıt memeleri vb.nin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.12.05',
                   'business'=>'Akışkan gücü ile çalışan ekipmanların ve bunların parçalarının imalatı (hidrolik ve pnömatik motorlar, hidrolik pompalar, hidrolik ve pnömatik valfler, hidrolik sistemler ve bunların parçaları)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.13.01',
                   'business'=>'Hava veya vakum pompaları ile hava veya diğer gaz kompresörlerinin imalatı (el ve ayakla çalışan hava pompaları ile motorlu taşıtlar için olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.13.02',
                   'business'=>'Sıvı pompaları ve sıvı elevatörleri imalatı (yakıt, yağlama, soğutma ve diğer amaçlar için) (deplasmanlı ve santrifüjlü pompalar ile benzinliklerde kullanılan akaryakıt pompaları dahil) (tulumba dahil, içten yanmalı motorlar için olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.13.03',
                   'business'=>'El ve ayakla çalışan hava pompalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.13.04',
                   'business'=>'İçten yanmalı motorlara monte edilmek üzere tasarlanmış pompaların imalatı (yağ pompaları, yakıt pompaları (benzin, mazot vb. pompaları) ve soğutma pompaları)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.14.01',
                   'business'=>'Diğer musluk ve valf/vana imalatı, dökme olanlar (sanayi musluk, valf ve vanaları, sıhhi tesisat ve ısıtmada kullanılan musluk ve vanalar ile doğalgaz vanaları dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'28.14.02',
                   'business'=>'Diğer musluk ve valf/vana imalatı (sanayi musluk, valf ve vanaları, sıhhi tesisat ve ısıtmada kullanılan musluk ve vanalar ile doğalgaz vanaları dahil, dökme olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.15.01',
                   'business'=>'Rulmanlar ve mekanik güç aktarma donanımları imalatı (bilyeli ve makaralı rulmanlar, aktarma milleri (şaftları), kam ve krank milleri, kranklar vb. ile rulman yatakları, düz mil rulmanları, yatak kovanları ve mil şaft yatakları vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.15.02',
                   'business'=>'Debriyajlar (kavramalar), mil (şaft) kaplinler ve üniversal mafsalların imalatı (motorlu kara taşıtlarında kullanılan debriyajlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.15.03',
                   'business'=>'Dişliler/dişli takımları, bilyeli ve makaralı vidalar, şanzımanlar, vites kutuları ve diğer hız değiştiricilerin imalatı (motorlu kara taşıtlarında kullanılan vites kutuları ve diferansiyelleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.15.04',
                   'business'=>'Volanlar ve kasnaklar ile mafsallı bağlantı zincirleri ve güç aktarım zincirlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.21.07',
                   'business'=>'Elektrikli veya elektriksiz laboratuar ocakları, döküm ocakları vb. endüstriyel ocak ve fırınlarının imalatı (çöp yakma fırınları ile elektrikli ekmek ve unlu mamul fırınları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.21.08',
                   'business'=>'Ocak brülörleri (ateşleyicileri) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.21.09',
                   'business'=>'Mekanik kömür taşıyıcıları, mekanik ızgaralar, mekanik kül boşaltıcıları ve benzeri cihazların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.21.10',
                   'business'=>'Güneşle (güneş kolektörleri), buharla ve yağla ısıtma sistemleri ile benzeri ocak ve ısınma donanımları gibi elektriksiz ev tipi ısıtma donanımlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.21.11',
                   'business'=>'Endüksiyon veya dielektrik ısıtma ekipmanlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.21.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer fırın ve ocakların (sanayi ocakları) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.22.10',
                   'business'=>'El veya motor gücü ile çalışan kaldırma, taşıma, yükleme ya da boşaltma makinelerinin imalatı (vinç palangası, yük asansörü, bocurgat, demir ırgat, kriko, forklift, kaldırma ve taşıma kuleleri, vinçler, hareketli kaldırma kafesleri vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.22.11',
                   'business'=>'Asansör, yürüyen merdiven ve yürüyen yolların imalatı (yeraltında kullanılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.22.12',
                   'business'=>'Pnömatik ve diğer devamlı hareketli asansör, elavatör ve konveyörlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.22.13',
                   'business'=>'Diğer kaldırma, taşıma, yükleme veya boşaltma makinelerinin imalatı (teleferikler, telesiyejler vb. için çekme mekanizmaları, tarımsal kullanım için yükleme makineleri, akıllı raf sistemleri ve diğerleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.23.01',
                   'business'=>'Hesap makineleri ve hesaplama fonksiyonu olup verilen bilgileri kaydeden, kaydedilen bilgileri yeniden veren ve gösteren cep tipi makinelerin imalatı (elektrikli, elektronik, mekanik vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.23.02',
                   'business'=>'Dikte makinelerinin imalatı (taşınabilir ve küçük ses kayıt cihazları)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.23.03',
                   'business'=>'Yazarkasa imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.23.04',
                   'business'=>'Para sayma ve para paketleme makinelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.23.05',
                   'business'=>'Daktilo, stenografi ve kelime işlem makineleri imalatı (elektrikli veya elektriksiz) (kabartma yazı yazanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.23.06',
                   'business'=>'Fotokopi ve termokopi makineleri ile büro tipi ofset baskı makinelerinin (kağıt ebadı <=22x36 cm) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.23.07',
                   'business'=>'Toner kartuşu, delgi aleti, zımba makinesi, bant kesicisi, yazı tahtası (akıllı tahta dahil), kalemtıraş vb. büro alet ve donanımlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.23.08',
                   'business'=>'Teksir makineleri, posta işleme makineleri, adres basma makineleri ile diğer büro makinelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.24.01',
                   'business'=>'Motorlu veya pnömatik el aletlerinin imalatı (zımparalama, taşlama, parlatma vb. elektrikli elle kullanılan aletler ile dairesel veya zincirli testere, matkap, çivileme aleti, perçin tabancası vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.25.01',
                   'business'=>'Sanayi tipi soğutucu ve dondurucu donanımları ile ısı pompalarının imalatı (camekanlı, tezgahlı veya mobilya tipi soğutucular, kondenserleri ısı değiştiricisi fonksiyonu gören kompresörlü üniteler vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.25.02',
                   'business'=>'Sanayi tipi fan ve vantilatörlerin imalatı (çatı havalandırma pervaneleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.25.03',
                   'business'=>'İklimlendirme cihazlarının (klimalar) imalatı (motorlu taşıtlarda kullanılanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.25.04',
                   'business'=>'Isı değiştirici birimlerin (eşanjörler), hava veya diğer gazların sıvılaştırılmasında kullanılan makinelerin ve hava/gazların filtrelenmesi ve arıtılması için kullanılan makine ve cihazların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.01',
                   'business'=>'Petrol rafinerileri, kimya sanayi, içecek sanayi vb. için damıtma ve rektifiye donanımları imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.02',
                   'business'=>'Gaz jeneratörleri, su gazı jeneratörleri, asetilen gazı jeneratörleri ve benzerlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.03',
                   'business'=>'Şişeleri veya diğer muhafaza kaplarını temizleme ve kurutma makineleri imalatı (kavanoz, bidon, fıçı, kutu vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.04',
                   'business'=>'Sıvılar için filtreleme veya arıtma makine ve cihazlarının imalatı (suyun filtre edilmesi/arıtılmasına mahsus cihazlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.05',
                   'business'=>'Doldurma, paketleme ve ambalajlama makinelerinin imalatı (doldurma, kapatma, mühürleme, kapsülleme veya etiketleme ve içecekleri gazlandırma vb. için makineler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.06',
                   'business'=>'Otomatik ürün satış makinelerinin imalatı (yiyecek, içecek, vb. otomatik satış makinesi) (para bozma makineleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.07',
                   'business'=>'Metal tabakalardan contaların ve mekanik salmastraların imalatı (diğer malzemelerle birleştirilmiş metal tabakalardan veya iki ya da daha fazla metal tabakasından yapılmış olanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.08',
                   'business'=>'Tartı aletleri ve baskül imalatı (ev ve dükkanlarda kullanılan terazi ve kantarlar, sürekli ölçüm için tartılar, taşıt baskülleri (köprü tipi basküller) vb.) (kuyumculukta ve laboratuvarlarda kullanılan hassas tartılar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.09',
                   'business'=>'Santrifüj imalatı (krema makinesi, çamaşır kurutma makinesi, laboratuvarlarda kullanılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.10',
                   'business'=>'Yangın söndürücüler, püskürtme tabancaları, buhar veya kum püskürtme makineleri vb. sıvı ve tozları atan, dağıtan ya da püskürten mekanik cihazların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.11',
                   'business'=>'Elektrikli olmayan kaynak ve lehim aletleri ile gazla çalışan yüzey temperleme (menevişleme) makine ve cihazlarının imalatı (pürmüz ve şalümolar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.12',
                   'business'=>'Sanayi tipi bulaşık makinelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.17',
                   'business'=>'Kalender veya diğer hadde makinelerinin imalatı (metal ve cam için olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.18',
                   'business'=>'İçten yanmalı motorlar için yağ filtresi, yakıt filtresi, hava filtresi, gres nipelleri, yağ keçesi ve benzerlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.19',
                   'business'=>'Seviye tespit aletleri (nivolar), ölçü çubukları, mezura, çelik metre ve cetveller ile elle kullanılan diğer ölçü aletlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.29.20',
                   'business'=>'Maddelerin ısı değişimi yoluyla işlenmesi için bys. makinelerin imalatı (su sirkülasyonu yoluyla doğrudan soğutma için soğutma kuleleri ve benzerleri ile metallerin buhar biriktirme yoluyla kaplanması için vakum-buhar tesisleri vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.08',
                   'business'=>'Tarımsal amaçlı römork veya yarı-römork imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.09',
                   'business'=>'Yumurta, meyve ve diğer tarımsal ürünlerin temizlenmesi, tasnif edilmesi veya derecelendirilmesi için kullanılan makine ve ekipmanların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.10',
                   'business'=>'Traktörlerin ve yaya kontrollü traktörlerin (motokültörler) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.11',
                   'business'=>'Kümes hayvanı makineleri, arıcılık makineleri ve hayvan yemi hazırlama makinelerinin ve donanımlarının imalatı (kuluçka makineleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.12',
                   'business'=>'Çim biçme makinelerinin imalatı (traktörlere monte edilen kesici barlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.13',
                   'business'=>'Hasat ve harman makinelerinin imalatı (biçer-döver, saman yapma makinesi, ot ve saman balyalama makinesi, kök ve yumru hasat makinesi, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.14',
                   'business'=>'Pulluk, saban, tırmık, diskaro, skarifikatör, kültivatör, çapa makinesi, mibzer, fide ve fidan dikim makinesi vb. toprağın hazırlanmasında, ekiminde, dikiminde kullanılan aletler ile gübreleme makinelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.15',
                   'business'=>'Süt sağma makinelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.16',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Tarım ve bahçecilikte kullanılan hava, sıvı veya toz atma, dağıtma, püskürtme ve iklimlendirme makinelerinin imalatı (sulama cihazları, pülverizatörler, zirai mücadelede kullanılan portatif sıvı ve toz püskürtücüler, don pervaneleri vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.30.17',
                   'business'=>'Ormancılığa özgü makineler ile tarla bahçe bakımına mahsus diğer makine ve cihazların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.41.01',
                   'business'=>'Takım tezgahları (metal işlemek için lazer ve benzerleriyle çalışanlar) ile metal ve benzerlerini işlemek için işleme merkezlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.41.03',
                   'business'=>'Metal tornalama, delme, frezeleme ve planyalama takım tezgahlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.41.06',
                   'business'=>'Metal işlemek için kullanılan diğer takım tezgahlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.41.07',
                   'business'=>'Metal işleyen takım tezgahlarının parça ve aksesuarlarının imalatı (alet tutacakları ve kendinden açılan pafta kafaları, iş tutacakları, ayırıcı kafalar ve takım tezgahları için diğer özel aksesuarlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.49.02',
                   'business'=>'Elektro kaplama makinelerinin imalatı (galvanoplasti, elektro kaplama, elektroliz veya elektroforez için)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.49.03',
                   'business'=>'Taş, seramik, beton veya benzeri mineral malzemeleri işlemek veya camı soğuk işlemek için olan takım tezgahı ile bunların parçalarının imalatı (testere, taşlama, parlatma, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.49.04',
                   'business'=>'Ahşap, mantar, kemik, sert kauçuk, sert plastik veya benzeri sert malzemeleri işlemek için olan takım tezgahı ile bunların parçalarının imalatı (transfer, testere, planya, freze, taşlama, zımparalama, parlatma, bükme, delme, dilimleme, pres, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.49.05',
                   'business'=>'Takım tezgahları ve el aletleri için takım tutucuları ve kendinden açılan pafta kafaları, işlenecek parça tutucuları, bölme başlıkları ve diğer özel ek parçalar, dingiller, yüksükler ve rakorlar ile fikstürlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.49.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer takım tezgahlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.91.01',
                   'business'=>'Konvertörler (metalürji), külçe kalıpları (ingot kalıpları), döküm kepçeleri, döküm makineleri, vb. sıcak metallerin işlenmesi için kullanılan makine ve teçhizatın imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.91.02',
                   'business'=>'Sıcak ve soğuk metal haddeleme makinesi ve metal boru imaline özgü hadde makinesi ile hadde ve metalürji makineleri için silindir ve diğer parçaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.92.01',
                   'business'=>'Beton ve harç karıştırıcıların imalatı (mikserler dahil, beton karıştırıcılı (mikserli) kamyonlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.92.02',
                   'business'=>'Buldozer, angledozer, greyder, skreyper, düzleyici, önden küreyici-yükleyici, kepçeli yükleyici, mekanik kepçe, ekskavatör, kazık çakma (kazık varyosları) ve sökme makineleri, harç ve asfalt yayıcılar ile beton kaplama makinelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.92.03',
                   'business'=>'Taş, toprak, cevher, alçı, çimento ve diğer mineral maddeleri tasnif etme, eleme, ayırma, yıkama, ezme, öğütme, karıştırma, yoğurma vb. işlemden geçirme için kullanılan makinelerin imalatı (beton ve harç karıştırıcılar (mikserler) hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.92.05',
                   'business'=>'Kömür veya kaya kesicileri (havözler), tünel ve kuyu açma makineleri ile delme ve sondaj makinelerinin imalatı (yeraltı veya yerüstü)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.92.06',
                   'business'=>'Yer altı kullanımı için sürekli hareketli elevatör ve konveyörlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.92.08',
                   'business'=>'Paletli traktörlerin imalatı (inşaat veya madencilikte kullanılan traktörler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.92.09',
                   'business'=>'Kara yolu dışında kullanılan damperli kamyonların imalatı (mega kamyonlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.92.10',
                   'business'=>'(Değişik satır:RG-11/8/2023-32276) Kar küreyici ve püskürtücüleri, toprağı sıkıştırmaya veya bastırıp sıkıştırmaya mahsus makineler ile maden, taş ocağı, inşaat, imar, park vb. işler için kullanılan diğer makinelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.92.11',
                   'business'=>'Delme, sondaj, hafriyat ve kazı makinesi parçalarının, vinç ve hareketli kaldırma kafeslerinin ve toprak, taş ve benzeri maddeleri tasnifleme, öğütme, karıştırma veya diğer işlerde kullanılan makine parçalarının imalatı (buldozer bıçakları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.93.01',
                   'business'=>'Gıda ve içeceklerin endüstriyel olarak hazırlanması veya imalatı için bys. makinelerin imalatı (ekmek, bisküvi, makarna, şekerleme, çikolata, şeker, et, meyve, sebze, sıvı ve katı yağlar vb.nin hazırlanması veya imalatı için sanayi makineleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.93.02',
                   'business'=>'Şarap, meyve suyu ve benzeri içeceklerin imalatında kullanılan makinelerin imalatı (presler, eziciler ve benzeri makineler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.93.03',
                   'business'=>'Süt ürünleri makinelerinin ve santrifüjlü krema ayırıcılarının imalatı (homojenizeleştiriciler, irradyatörler (ışınlayıcılar), yağ yapma makineleri, peynir yapma makineleri vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.93.04',
                   'business'=>'Tütünün hazırlanmasında ve işlenmesinde kullanılan makinelerin imalatı (tütün yapraklarını damarlarından ayıran makineler ile enfiye, sigara, puro, pipo tütünü veya çiğneme tütünleri imalinde kullanılan makineler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.93.06',
                   'business'=>'Değirmencilik sanayiinde, hububat veya kurutulmuş sebzelerin işlenmesi veya öğütülmesi için kullanılan makinelerin imalatı (un, kaba un vb. üretmek için kullanılan makineler, elekler, kepek temizleyiciler, çeltik soyma makinesi vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.93.07',
                   'business'=>'Ekmek ve diğer unlu mamuller için elektrikli olmayan fırınların imalatı (gaz, sıvı ve katı yakıtlı olanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.93.08',
                   'business'=>'Ev tipi olmayan pişirme veya ısıtma cihazlarının imalatı (ev tipi olmayan filtreli kahve makineleri vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.93.09',
                   'business'=>'Tarımsal ürünler için kurutucuların imalatı (kahve, kuruyemiş vb. için kavurma makine ve cihazları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.93.10',
                   'business'=>'Tohumların, tanelerin veya kuru baklagillerin temizlenmesi, tasnif edilmesi veya derecelendirilmesi için kullanılan makinelerin imalatı (tarımsal selektörler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.94.01',
                   'business'=>'Post, deri ve köselelerin işlenmesi ile ayakkabı ve diğer deri eşyaların üretimi veya tamiri için kullanılan makinelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.94.02',
                   'business'=>'Sanayi tipi çamaşır makinesi, kuru temizleme makinesi, çamaşır kurutma makinesi, ütü makinesi ve pres ütü imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.94.03',
                   'business'=>'Sanayi ve ev tipi dikiş makinelerinin imalatı (dikiş makinelerinin iğneleri, mobilyaları, tabanları, kapakları vb. parçaları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.94.04',
                   'business'=>'Suni ve sentetik tekstil malzemesinin ekstrüzyonu, çekilmesi, tekstüre edilmesi veya kesilmesi için kullanılan makineler ile doğal tekstil elyafı hazırlama makineleri ve dokuma makinelerinin imalatı (çırçır makinesi, taraklama makinesi vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.94.05',
                   'business'=>'Tekstil ipliği ve kumaşını yıkama, ağartma, boyama, apreleme, temizleme, sıkma, sarma, emprenye etme, bitirme, kesme, surfile ve benzerleri için makineler ile keçe imalatında ve bitirilmesinde kullanılan makinelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.94.06',
                   'business'=>'Tekstil büküm makineleri ile katlama, bükme, bobine sarma veya çile yapma makinelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.94.07',
                   'business'=>'Örgü, trikotaj ve benzeri makineler ile tafting makinelerinin imalatı (gipe iplik, tül, dantel, nakış, süs, örgü veya ağ yapma makineleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.94.08',
                   'business'=>'Tekstil amaçlı makinelerle kullanılan yardımcı makinelerin ve tekstil baskı makinelerinin imalatı (ratiyerler, jakardlar, vb.) (ofset baskı makineleri, tipografik, fleksografik, gravür baskı makineleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.94.09',
                   'business'=>'Tekstil, giyim eşyası ve deri üretiminde kullanılan makinelerin parçalarının imalatı (dikiş makinelerinde kullanılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.95.01',
                   'business'=>'Kağıt ve mukavva üretiminde kullanılan makinelerin ve bunların parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.96.01',
                   'business'=>'Plastik ve kauçuk makinelerinin imalatı (plastik ve kauçuk işlemek için veya bu malzemelerden ürün imalatı için kullanılan makineler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.01',
                   'business'=>'Basım ve ciltleme makineleri ile basıma yardımcı makinelerin ve bunların parçalarının imalatı (ofset baskı makinesi, tipografik baskı makinesi, dizgi makinesi, baskı kalıpları için makineler, ciltleme makinesi vb.) (büro tipi baskı makinesi hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.02',
                   'business'=>'Cam ve cam eşya imalatında ve cam eşyaların sıcak işlenmesinde kullanılan makinelerin ve elektrikli veya elektronik lamba, tüp, ampul montajında kullanılan makinelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.04',
                   'business'=>'Kiremit, briket, şekilli seramik hamuru, boru, grafit elektrotu, yazı tahtası tebeşiri vb. ürünlerin üretilmesinde kullanılan makinelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.05',
                   'business'=>'Otomatik bovling salonu donanımlarının, dönme dolap, atlı karınca, salıncak, poligon, vb. diğer panayır alanı eğlence donanımları ile kumarhane oyun masalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.06',
                   'business'=>'Hava taşıtı fırlatma donanımlarının, uçak gemilerinde kullanılan katapultların (kısa mesafede hava taşıtlarının kalkmasını sağlayan mekanizma) ve ilgili donanımların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.07',
                   'business'=>'Yarı iletken tek kristalli külçe (boules) ve yonga plakalar ile yarı iletken aygıtların, elektronik entegre devre veya düz panel ekranların imalatı için kullanılan makine ve cihazların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.08',
                   'business'=>'Sicim ve halat makinelerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.09',
                   'business'=>'Lastik tekerlerin balansında ve hizalanmasında kullanılan donanımların imalatı (jant için kullanılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.10',
                   'business'=>'Özel amaçlar için çoklu görevlerde kullanılabilen sanayi robotlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.11',
                   'business'=>'Kurutucuların imalatı (odun, kağıt hamuru, kağıt, mukavva, süt tozu ve diğer malzemelerin imalatında kullanılanlar) (ev tipi, tarım ürünleri ve tekstil için olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.12',
                   'business'=>'İzotopik ayırma makineleri ve cihazlarının imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'28.99.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer özel amaçlı makinelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.10.01',
                   'business'=>'Kamyonet, kamyon, yarı römorklar için çekiciler, tankerler, vb. karayolu taşıtlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.10.02',
                   'business'=>'Otomobil ve benzeri araçların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.10.03',
                   'business'=>'Motorlu kara taşıtlarının motorlarının imalatı (motorların fabrikada yeniden yapımı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.10.04',
                   'business'=>'Minibüs, midibüs, otobüs, troleybüs, metrobüs, vb. yolcu nakil araçlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.10.05',
                   'business'=>'Kar motosikleti, golf arabası, ATV motosikletler, go-kart arabaları vb. taşıtların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.10.07',
                   'business'=>'Özel amaçlı motorlu kara taşıtlarının imalatı (amfibi araçlar, çöp kamyonu, yol temizleme araçları, zırhlı nakil araçları, mikserli kamyon, vinçli kamyon, itfaiye aracı, ambulans, motorlu karavan vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.10.08',
                   'business'=>'Motorlu kara taşıtları için şasi imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.20.01',
                   'business'=>'Treyler (römork), yarı treyler (yarı römork) ve mekanik hareket ettirici tertibatı bulunmayan diğer araçların parçalarının imalatı (bu araçların karoserleri, kasaları, aksları ve diğer parçaları)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.20.02',
                   'business'=>'Motorlu kara taşıtları için karoser, kabin, kupa, dorse ve damper imalatı (otomobil, kamyon, kamyonet, otobüs, minibüs, traktör, damperli kamyon ve özel amaçlı motorlu kara taşıtlarının karoserleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.20.03',
                   'business'=>'Konteyner imalatı (bir veya daha fazla taşıma şekline göre özel olarak tasarlanmış olanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.20.04',
                   'business'=>'Treyler (römork) ve yarı treyler (yarı römork) imalatı (karavan tipinde olanlar ve tarımsal amaçlı olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.20.05',
                   'business'=>'Karavan tipinde treyler (römork) ve yarı treyler (yarı römork) imalatı - ev olarak veya kamp için',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.20.06',
                   'business'=>'Motorlu kara taşıtlarının modifiye edilmesi ve karoser hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.31.04',
                   'business'=>'Motorlu taşıtlar için ateşleme kablo takımları ve diğer kablo setleri ile ateşleme bujisi ve manyetosu, dinamo, manyetik volan, distribütör, ateşleme bobini, marş motoru, alternatör vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.31.05',
                   'business'=>'Motorlu kara taşıtları ve motosikletler için elektrikli sinyalizasyon donanımları, kornalar, sirenler, cam silecekleri, buğu önleyiciler, elektrikli cam/kapı sistemleri, voltaj regülatörleri vb. elektrikli ekipmanların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.31.06',
                   'business'=>'Oto alarm sistemlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.31.07',
                   'business'=>'Bisikletler için elektrikli veya pille çalışan aydınlatma veya işaret cihazlarının imalatı (bisiklet dinamoları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.32.20',
                   'business'=>'Motorlu kara taşıtları için diğer parça ve aksesuarların imalatı (fren, vites kutusu, jant, süspansiyon sistemleri, amortisör, radyatör, egzoz, debriyaj, direksiyon kutusu, rot, rotbaşı, rotil vb.) (traktör, itfaiye araçları, vb. için olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.32.21',
                   'business'=>'Motorlu kara taşıtları için karoser, kabin ve kupalara ait parça ve aksesuarların imalatı (tamponlar, koltuk emniyet kemerleri, hava yastıkları, kapılar vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'29.32.22',
                   'business'=>'Motorlu kara taşıtları için koltuk imalatı (demiryolu ve havayolu için olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.11.01',
                   'business'=>'Yüzen ve su altında kalabilen sondaj platformlarının inşası faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.11.02',
                   'business'=>'Yolcu gemi ve tekneleri, feribotlar, tankerler, frigorifik gemiler, kuru yük gemileri, çekici ve itici römorkörler, tarak gemileri, açık deniz gemileri, hover kraftların ve diğer gemilerin inşası (spor ve eğlence amaçlı olanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.11.03',
                   'business'=>'Savaş gemileri ve denizaltıların imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.11.04',
                   'business'=>'Balıkçı gemi ve tekneleri ile deniz ürünlerinin işlenmesine ve saklanmasına yönelik fabrika gemilerinin yapımı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.11.05',
                   'business'=>'Yüzen rıhtımlar, dubalar, batardolar, koferdamlar, yüzen iskeleler, şamandıralar, yüzen tanklar, mavnalar, salapuryalar, yüzen vinçler, eğlence amaçlı olmayan şişme botlar vb. imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.11.06',
                   'business'=>'Gemiler ve yüzer yapılar için oturulacak yerlerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.11.07',
                   'business'=>'Gemiler ve yüzer yapılar için iç bölmelerin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.11.08',
                   'business'=>'Gemilerin, yüzer platformların ve yüzer yapıların büyük çapta değiştirilmesi ve yeniden inşası',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.12.01',
                   'business'=>'Jet ski vb. kişisel su araçlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.12.03',
                   'business'=>'Şişirilebilir motorlu/motorsuz botların imalatı (eğlence ve spor amaçlı olanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.12.04',
                   'business'=>'Eğlence ve sportif amaçlı motorlu/motorsuz yelkenlilerin, motorlu tekne ve yatların, sandalların, kayıkların, kanoların, eğlence amaçlı hover kraftların ve benzer araçların imalatı (polyester tekneler dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.20.01',
                   'business'=>'Demir yolu ve tramvay lokomotifleri, vagonları, bagaj vagonları, lokomotif tenderleri, demir yolu veya tramvay bakım veya servis araçları imalatı (lokomotiflere ve vagonlara ait parçalar ile koltuklarının imalatı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.20.02',
                   'business'=>'Demir yolu ve tramvay lokomotif veya vagonlarının parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.20.03',
                   'business'=>'Raylı sistem taşıtları için koltuk imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.20.04',
                   'business'=>'Mekanik veya elektromekanik sinyalizasyon, emniyet veya trafik kontrol cihazları ve bunların parçalarının imalatı (demir yolu, tramvay hatları, kara yolları, dahili su yolları, park yerleri, liman tesisleri veya hava alanları için olanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.20.05',
                   'business'=>'Demir yolu veya tramvay lokomotiflerinin ve vagonlarının büyük çapta yenilenmesi ve donanım hizmetleri (tamamlama)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.30.01',
                   'business'=>'Helikopter imalatı (helikopter veya helikopter motorlarının fabrikalarda büyük çaplı revizyonu ve değiştirilmesi dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.30.02',
                   'business'=>'Hava taşıtı parçalarının imalatı (uçak gövdesi, kanatları, kapıları, kumanda yüzeyleri, iniş takımları gibi ana montaj parçaları, pervaneler, helikopter rotorları, motorlar, turbo jetler, turbo pervaneli motorlar vb. ile bunların parçaları)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.30.03',
                   'business'=>'Sıcak hava balonu, zeplin, planör, delta kanatlı planör ve diğer motorsuz hava araçlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.30.04',
                   'business'=>'Uçak ve benzer hava taşıtlarının imalatı (uçak veya uçak motorlarının fabrikalarda büyük çaplı revizyonu ve değiştirilmesi dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.30.05',
                   'business'=>'Yer uçuş eğitim cihazları ve bunların parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.30.06',
                   'business'=>'Uzay aracı, uzay aracı fırlatma araçları ve mekanizmaları ile uydular, uzay roketleri, yörünge istasyonları ve uzay mekiklerinin imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.30.07',
                   'business'=>'Kıtalar arası balistik füzelerin (ICBM) imalatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.30.08',
                   'business'=>'Hava taşıtları ve uzay araçlarında kullanılan koltukların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.40.01',
                   'business'=>'Askeri savaş araçlarının imalatı (tank, zırhlı savaş araçları ve bunların parçaları)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'30.91.01',
                   'business'=>'Motosiklet, moped ve motorlu bisiklet (bir yardımcı motoru bulunan bisikletler) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.91.02',
                   'business'=>'Motosiklet parça ve aksesuarları imalatı (sele, motosiklet yan sepeti, motosiklet vitesi vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.91.03',
                   'business'=>'Motosiklet motorları imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.92.01',
                   'business'=>'Motorsuz bisiklet imalatı (üç tekerlekli servis bisikleti, iki ya da daha fazla kişilik bisiklet, yarış bisikleti, vitesli bisiklet) (çocuklar için plastik bisikletler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.92.02',
                   'business'=>'Bisiklet parça ve aksesuarlarının imalatı (jantlar, gidonlar, iskelet, çatallar, pedal fren göbekleri/poyraları, göbek/poyra frenleri, krank-dişlileri, pedallar ve serbest dişlilerin parçaları, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.92.03',
                   'business'=>'Engelli araçlarının imalatı (motorlu, motorsuz, akülü, şarjlı, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.92.04',
                   'business'=>'Engelli araçlarının parça ve aksesuarlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.92.05',
                   'business'=>'Bebek arabaları, pusetler ve bunların parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.99.01',
                   'business'=>'Mekanik hareket ettirici tertibatı bulunmayan araçların imalatı (alışveriş arabaları, sanayi el arabaları, işportacı arabaları, bagaj arabaları, elle çekilen golf arabaları, hasta nakli için arabalar, kızaklar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'30.99.02',
                   'business'=>'Hayvanlar tarafından çekilen araçların imalatı (at, eşek arabası, fayton, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'30.99.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer ulaşım ekipmanlarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.01.01',
                   'business'=>'Büro, okul, ibadethane, otel, lokanta, sinema, tiyatro vb. kapalı alanlar için mobilya imalatı (taş, beton, seramikten olanlar hariç) (vestiyer, dosya dolapları, mihraplar, minberler, kürsüler, öğrenci sıraları, büro tipi sandalye ve koltuklar, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.01.02',
                   'business'=>'Laboratuvarlar ve teknik bürolar için tezgahların ve mobilyaların imalatı (mikroskop masaları, laboratuvar masaları (vitrinli, gaz memeli, musluk tertibatlı, vb. olsun olmasın), çeker ocaklar, teçhizatsız çizim masaları, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.01.03',
                   'business'=>'Mağazalar için tezgah, banko, vitrin, raf, çekmeceli dolap vb. özel mobilya imalatı (laboratuvarlar ve teknik bürolar için olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.01.04',
                   'business'=>'Büro mobilyalarının iskeletlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.02.01',
                   'business'=>'Mutfak mobilyalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.03.01',
                   'business'=>'Yatak imalatı (yatak destekleri, kauçuk şişme yatak ve su yatağı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.03.02',
                   'business'=>'Yatak desteklerinin imalatı (yaylı veya çelik tel ağlı ahşap veya metal iskeletler, ahşap latalı döşenmiş somya bazaları, somya, karyola, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.09.01',
                   'business'=>'Mobilyaların boyanması, verniklenmesi, cilalanması vb. tamamlayıcı işlerin yapılması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'31.09.02',
                   'business'=>'Sandalyelerin, koltukların vb. döşenmesi gibi tamamlayıcı işlerin yapılması (büro ve ev mobilyalarının yeniden kaplanması hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.09.03',
                   'business'=>'Dikiş makinesi, TV, bilgisayar, vb. için dolap, sehpa, vb. mobilyaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.09.04',
                   'business'=>'Yatak odası, yemek odası, banyo dolabı, genç ve çocuk odası takımı, gardırop, vestiyer, vb. imalatı (gömme dolap, masa, zigon, vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.09.05',
                   'business'=>'Sandalye, koltuk, kanepe, çekyat, divan, vb iskeletlerinin imalatı (iskeletçiler) (plastik olanlar ile bürolarda kullanılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.09.06',
                   'business'=>'Park ve bahçelerde kullanılan bank, masa, tabure, sandalye, koltuk, vb. mobilyaların imalatı (plastik olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.09.07',
                   'business'=>'Sandalye, koltuk, kanepe, oturma takımı, çekyat, divan, markiz, vb. imalatı (plastik olanlar ile bürolarda ve park ve bahçelerde kullanılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'31.09.08',
                   'business'=>'Plastikten bank, masa, tabure, sandalye vb. mobilyaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.11.01',
                   'business'=>'Madeni para basımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.12.01',
                   'business'=>'Değerli metallerden takı ve mücevherlerin imalatı (değerli metallerle baskı, yapıştırma vb. yöntemlerle giydirilmiş adi metallerden olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.12.03',
                   'business'=>'Değerli metallerden yapılan teknik ve laboratuvar malzemeleri imalatı (maden eritme kapları, spatulalar, elektrolitik kaplama anotları, vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.12.04',
                   'business'=>'İnci ve değerli doğal taşların işlenmesi ve değerli taşlardan takı ve mücevher ile bunların parçalarının imalatı (sentetik veya yeniden oluşturulmuş olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.12.06',
                   'business'=>'Değerli olsun olmasın metal eşyalar üzerine oyma ve kabartma yapılması faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.12.07',
                   'business'=>'Sanayi elmaslarının işlenmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.12.08',
                   'business'=>'Değerli metallerden veya değerli metallerle preslenerek kaplanmış adi metallerden yemek takımı, çatal bıçak takımı, tuvalet malzemesi, büro malzemesi, vb. malzemelerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.13.01',
                   'business'=>'İmitasyon takılar ve ilgili eşyaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.20.21',
                   'business'=>'Elektronik müzik aletleri veya klavyeli çalgıların imalatı (elektrik gücüyle ses üreten veya sesi güçlendirilen enstrümanlar) (dijital piyano, sintizayzır, elektrogitar, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.20.22',
                   'business'=>'Diğer yaylı/telli müzik aletlerinin imalatı (saz, gitar, keman, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'32.20.23',
                   'business'=>'Ağızları huni gibi genişleyen neviden olan boru esaslı müzik aletleri ile diğer üflemeli müzik aletlerinin imalatı (saksafon, flüt, trombon, borazan, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.20.24',
                   'business'=>'Vurmalı çalgıların imalatı (trampet, davul, ksilofon, zil, kas vs.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.20.25',
                   'business'=>'Piyanolar ve diğer klavyeli yaylı/telli çalgıların imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'32.20.26',
                   'business'=>'Borulu ve klavyeli orglar, armonyumlar, akordiyonlar, ağız mızıkaları (armonikalar), tulum vb. çalgıların imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'32.20.27',
                   'business'=>'Müzik kutuları, orkestriyonlar, laternalar, çıngıraklar vb. imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'32.20.28',
                   'business'=>'Metronomlar, akort çatalları (diyapazonlar) ve akort düdükleri, müzik kutuları için mekanizmalar, müzik aleti telleri ile müzik aletlerinin parça ve aksesuarlarının imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'32.20.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer müzik aletlerinin imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'32.30.17',
                   'business'=>'Kar kayakları, kayak ayakkabıları, kayak botları, kayak batonları, buz patenleri ve tekerlekli patenler ile su kayağı araçları, sörf tahtaları, rüzgar sörfleri vb. ekipmanlar ile bunların parçalarının imalatı (kaykaylar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.30.18',
                   'business'=>'Jimnastik ve atletizm eşyaları ile form tutma salonlarına ait eşya ve ekipmanların imalatı (atlama beygiri, dambıl ve halterler, kürek çekme ve bisiklete binme aletleri, ciritler, çekiçler; boks çalışma topları, boks veya güreş için ringler vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.30.19',
                   'business'=>'Spor amaçlı dağcılık, avcılık veya balıkçılık eşyalarının imalatı (kasklar, olta kamışları, olta iğneleri ve kancaları, otomatik olta makaraları, el kepçeleri, kelebek ağları, yapma balıklar, sinekler gibi suni yemler, kurşunlar, yapma kuşlar vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.30.20',
                   'business'=>'Spor veya açık hava oyunları için diğer eşyaların imalatı (boks eldiveni, spor eldiveni, yaylar, beyzbol ve golf sopaları ile top ve diğer eşyaları, tenis masası, raket, ağ ve topları, tozluklar, bacak koruyucular, şişme ve diğer havuzlar vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.30.21',
                   'business'=>'Top imalatı (beyzbol, futbol, basketbol ve voleybol için)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.01',
                   'business'=>'Oyun kağıt ve kartlarının imalatı (iskambil vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.02',
                   'business'=>'Bozuk para veya jetonla çalışan oyun makineleri ile bilardo için kullanılan eşya ve aksesuarların imalatı (rulet vb. oyun makineleri ile bilardo masa ve istekaları, isteka dayanakları, bilardo topları, tebeşirleri, toplu veya sürgülü puan sayaçları vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.03',
                   'business'=>'Yap boz, puzzle ve benzeri ürünlerin imalatı (lego vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.04',
                   'business'=>'İçi doldurulmuş oyuncak bebeklerin ve oyuncak hayvanların imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.05',
                   'business'=>'Oyuncak bebek, kukla ve hayvanlar ile bunların giysi, parça ve aksesuarlarının imalatı (içi doldurulmuş olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.06',
                   'business'=>'Lunapark, masa ve salon oyunları için gereçlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.07',
                   'business'=>'Oyuncak müzik aletleri imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.08',
                   'business'=>'Binmek için tasarlanmış tekerlekli oyuncakların imalatı (plastik bisikletler ve üç tekerlekli bisikletler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.09',
                   'business'=>'Oyun tahtaları (satranç, dama, dart, tavla tahtaları, okey istekası, go vb.) ve tabu, monopol vb. oyunların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.10',
                   'business'=>'Tekerlekli oyuncaklar, oyuncak bebek arabaları, oyuncak trenler ve diğer küçültülmüş boyutlu modeller/maketler veya inşaat oyun takımları, yarış setleri imalatı (motorlu olanlar, pres döküm oyuncaklar ve plastik diğer oyuncaklar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.11',
                   'business'=>'Elektronik oyun imalatı (elektronik damalar, satranç vb.) (televizyonla birlikte kullanılan video oyun konsolları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.40.90',
                   'business'=>'Başka yerde sınıflandırılmamış oyun ve oyuncakların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.01',
                   'business'=>'Gözlük (göz kusurlarını giderici, düzeltici, koruyucu ve diğer amaçlı), gözlük camı, kontak lens ile gözlük ve benzeri için çerçeve ve çerçeve parçalarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.02',
                   'business'=>'Suni uzuvlar, protez ve ortopedik ürünler ile bunların parça ve aksesuarlarının imalatı (suni eklem, dişçilikle ilgili bağlantı parçaları, ortopedik ayakkabı ve korse, diş teli, tıbbi çivi, fıtık bağı vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.03',
                   'business'=>'Dişçilikte kullanılan araç-gereç ve cihazların imalatı (dişçi aeratörleri dahil) (şırınga, iğne, katater, kanül ve benzerleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.04',
                   'business'=>'Tıbbi, cerrahi, dişçilik veya veterinerlikle ilgili mobilyaların, berber koltukları ve benzeri sandalyeler ile bunların parçalarının imalatı (ameliyat ve tetkik masası, ayarlanabilir hastane yatağı, dişçi koltuğu, vb.) (X ışını masa ve koltukları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.06',
                   'business'=>'Dişçi çimentosu, dişçilik mumları, dolgu maddesi, kemik tedavisinde kullanılan çimento, jel preparat, steril adhezyon bariyeri, dikiş malzemesi (katgüt hariç), doku yapıştırıcısı, laminarya, emilebilir hemostatik, vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.07',
                   'business'=>'Tıpta, cerrahide, dişçilikte veya veterinerlikte kullanılan şırınga, iğne, katater, kanül ve benzerlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.08',
                   'business'=>'Göz tedavisi ile ilgili cerrahi, tanı, test ve benzeri aletlerin imalatı (korneaya ait yuvarlak testereler, oftalmoskop, retinoskop, keratometreler, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.09',
                   'business'=>'Mekano terapi cihazları, masaj aletleri, psikolojik eğilim-testi aletleri (tamamen hareketsiz mekano terapi cihazları hariç), ozon terapi, oksijen terapi, aerosol terapi ve solunum cihazları imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.10',
                   'business'=>'Tıbbi, cerrahi veya laboratuvar sterilizasyon aletlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.11',
                   'business'=>'Tansiyon aletleri, tansiyometreler, osilometreler, tıbbi endoskoplar, klinik veya veterinerlik termometreleri, böbrek diyaliz cihazları, transfüzyon cihazları (kan depolama için özel cam şişeler hariç) imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.12',
                   'business'=>'Anestezi cihaz ve aletleri, diyatermik cihazlar (ultrasonikler dahil), ultrasonik litotripsi aletleri ve laboratuvarlarda kullanılan santrifüjlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.13',
                   'business'=>'Diş laboratuvarlarının faaliyetleri (protez diş, metal kuron, vb. imalatı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'32.50.90',
                   'business'=>'Tıpta, cerrahide, dişçilikte veya veterinerlikte kullanılan bys. diğer araç ve gereçlerin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.91.01',
                   'business'=>'Ev veya büro temizliği için olan süpürge ve fırçaların imalatı (elektrikli olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.91.02',
                   'business'=>'Boyama, badana, duvar kağıdı ve vernik fırçaları ile rulolarının imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.91.03',
                   'business'=>'Diş fırçaları, saç fırçaları, tıraş fırçaları ve kişisel bakım için kullanılan diğer fırçalar ile resim fırçaları, yazı fırçaları ve kozmetik fırçaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.91.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer süpürge ve fırçaların imalatı (elektrikli olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.01',
                   'business'=>'Terzi mankeni, el kalbur ve eleği, yapma çiçek, meyve ve bitkiler, şaka ve sihirbazlık benzeri eşya, koku püskürtücüleri ve mekanizmaları, tabut vb. eşyaların imalatı (gelin çiçeği dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.02',
                   'business'=>'Kot vb. baskı düğmeleri, çıtçıtlar, düğmeler, fermuarlar vb. imalatı (düğme formları ve fermuar parçaları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.03',
                   'business'=>'Pipo, sigara ağızlıkları, Oltu veya lüle taşından tespih vb. imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.04',
                   'business'=>'Mekanik olsun veya olmasın her çeşit dolma kalem, tükenmez ve kurşun kalem ile boya kalemi, pastel boya imalatı (kalem ucu ve kurşun kalem içleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.06',
                   'business'=>'Peruk, takma saç, takma sakal, takma kaş vb. imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.07',
                   'business'=>'Şemsiyeler, güneş şemsiyeleri, baston ve koltuklu baston, koltuk değneği vb. imalatı (parçaları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.08',
                   'business'=>'Tarih verme, damga, mühür veya numara verme kaşeleri, numeratör, elle çalışan basım aletleri, kabartma etiketleri, el baskı setleri, hazır daktilo şeritleri ve ıstampaların imalatı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.09',
                   'business'=>'Koruyucu amaçlı solunum ekipmanları ve gaz maskelerinin imalatı (tedavi edici olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.10',
                   'business'=>'Ateşe dayanıklı ve koruyucu güvenlik kıyafetleri ve başlıkları ile diğer güvenlik ürünlerinin imalatı (solunum ekipmanları ve gaz maskeleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.11',
                   'business'=>'Mantar can simitlerinin imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.13',
                   'business'=>'Termos ve vakumlu kapların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.14',
                   'business'=>'Tebeşir imalatı (yazı, çizim veya terzi tebeşiri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.15',
                   'business'=>'Suni balmumu ile suni mumların ve müstahzar mumların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.16',
                   'business'=>'Yazı veya çizim tahtaları imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.17',
                   'business'=>'Sigara çakmakları ve diğer çakmaklar ile çabuk tutuşan (piroforik) alaşımların imalatı (çakmaklar için kap hacmi ≤ 300cm3 sıvı veya sıvılaştırılmış gaz yakıtları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.18',
                   'business'=>'Fildişi, kemik, boynuz, sedef gibi hayvansal malzemelerden oyma eşyaların imalatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'32.99.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer imalatlar (bağırsak (ipek böceği guddesi hariç), kursak ve mesaneden mamul eşyalar dahil, tıbbi amaçlı steril olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.11.01',
                   'business'=>'Metal boru ve boru hatları ile pompa istasyonlarının bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.11.02',
                   'business'=>'Ateşli silahların ve savaş gereçlerinin bakım ve onarımı (spor ve eğlence amaçlı silahların onarımı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.11.03',
                   'business'=>'Buhar kazanları veya buhar jeneratörlerinin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.11.04',
                   'business'=>'Merkezi ısıtma sıcak su kazanları (boyler) ve radyatörlerin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.11.10',
                   'business'=>'Metal tankların, rezervuarların ve muhafaza kaplarının (konteynerler dahil) onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.11.11',
                   'business'=>'Nükleer reaktörlerin bakım ve onarımı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'33.11.90',
                   'business'=>'Başka yerde sınıflandırılmamış metal ürünlerin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.02',
                   'business'=>'Tarım ve ormancılık makinelerinin bakım ve onarımı (traktörlerin bakım ve onarımı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.03',
                   'business'=>'Motor ve türbinlerin bakım ve onarımı (hidrolik, rüzgar, gaz, su, buhar türbinleri) (gemi ve tekne motorları dahil, motorlu kara taşıtı ve motosiklet motorları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.04',
                   'business'=>'Sanayi fırınlarının, ocaklarının ve ocak brülörlerinin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.05',
                   'business'=>'Kaldırma ve taşıma ekipmanlarının bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.06',
                   'business'=>'Sanayi tipi soğutma ve havalandırma ekipmanlarının bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.07',
                   'business'=>'Tartı aletlerinin bakım ve onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.08',
                   'business'=>'Madencilik, inşaat, petrol ve gaz sahalarında kullanılan makinelerin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.09',
                   'business'=>'Tarım ve ormancılıkta kullanılan motokültörler ve traktörlerin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.10',
                   'business'=>'Akışkan gücü ile çalışan ekipmanlar, pompalar, kompresörler ile valflerin ve vanaların bakım ve onarımı (akaryakıt pompalarının tamiri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.11',
                   'business'=>'Metal işleme makinelerinin ve takım tezgahlarının bakım ve onarımı (CNC olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.12',
                   'business'=>'Motorlu veya pnömatik (hava basınçlı) el aletlerinin onarımı (yuvarlak/vargel/zincir testere, matkap, pnömatik veya motorlu metal kesme makası, darbeli cıvata anahtarı vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.13',
                   'business'=>'Elektrikli kaynak ve lehim aletlerinin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.14',
                   'business'=>'Metalürji makinelerinin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.15',
                   'business'=>'Gıda, içecek ve tütün işleme makinelerinin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.16',
                   'business'=>'Tekstil, giyim eşyası ve deri üretim makinelerinin bakım ve onarımı (triko makinelerinin onarımı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.17',
                   'business'=>'Kağıt, karton ve mukavva üretiminde kullanılan makinelerin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.18',
                   'business'=>'Büro ve muhasebe makinelerin bakım ve onarımı (daktilo, yazar kasa, fotokopi makineleri, hesap makineleri, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.19',
                   'business'=>'Ağaç, mantar, taş, sert kauçuk veya benzeri sert malzemeleri işlemede kullanılan takım tezgahlarının bakım ve onarımı (CNC olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.21',
                   'business'=>'Sıvılar için filtreleme ya da temizleme makineleri ve aparatlarının bakım ve onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.27',
                   'business'=>'Kesici aletler ile el aletlerinin bakım ve onarımı (matbaa giyotini, şerit testere, el testeresi, çapa, orak vb. bileyleme ve çarkçılık dahil) (motorlu ve pnömatik olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.28',
                   'business'=>'Plastik ve kauçuk imalatında ve işlenmesinde kullanılan makinelerin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.29',
                   'business'=>'Endüstriyel rulmanların, dişlilerin, dişli takımlarının ve tahrik tertibatı elemanlarının bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.30',
                   'business'=>'Tarımsal amaçlı kullanılan römorkların bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.12.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer makinelerin bakım ve onarımı (yangın söndürme tüplerinin dolumu ve tamiri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.13.01',
                   'business'=>'Ölçme, test ve seyrüsefer alet ve cihazlarının bakım ve onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'33.13.02',
                   'business'=>'Işınlama, elektromedikal ve elektroterapi ekipmanlarının bakım ve onarımı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'33.13.03',
                   'business'=>'Profesyonel optik aletlerin ve fotoğrafçılık ekipmanlarının bakım ve onarımı (tüketici elektronik ürünlerinin onarımı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.13.04',
                   'business'=>'Diğer profesyonel elektronik ekipmanların bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.14.01',
                   'business'=>'Güç transformatörleri, dağıtım transformatörleri ve özel transformatörlerin bakım ve onarımı (elektrik dağıtım ve kontrol cihazları dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.14.02',
                   'business'=>'Elektrik motorları, jeneratörler ve motor jeneratör setlerinin bakım ve onarımı (bobinlerin tekrar sarımı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.14.03',
                   'business'=>'Diğer profesyonel elektrikli ekipmanların bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.15.01',
                   'business'=>'Gemilerin ve teknelerin bakım ve onarımı (yüzen yapılar, sandal, kayık, vb. bakım ve onarımı ile bunların kalafatlanması dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'33.16.01',
                   'business'=>'Hava taşıtlarının ve uzay araçlarının bakım ve onarımı (fabrikalarda yapılan dönüştürme, elden geçirme ve yeniden üretme hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.17.01',
                   'business'=>'Demir yolu lokomotiflerinin ve vagonlarının bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.17.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer ulaşım ekipmanlarının bakım ve onarımı (at arabaları ve dört tekerlekli yük arabalarının bakım ve onarımı dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'33.19.01',
                   'business'=>'Tentelerin, kamp ekipmanlarının, çuvalların ve balıkçılık ağları gibi diğer hazır tekstil malzemelerinin onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'33.19.02',
                   'business'=>'Halatlar, gemi çarmık ve halatları ile yelken bezleri ve bez astarlı muşambaların onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'33.19.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer ekipmanların onarımı (ahşap konteyner, gemi fıçı ve varilleri, madeni para ile çalışan oyun makineleri, değirmentaşı, bileme taşı vs.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.33',
                   'business'=>'Tarımsal amaçlı sanayi makine ve ekipmanlarının kurulumu',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.34',
                   'business'=>'Kaldırma ve taşıma ekipmanlarının kurulumu (asansörler ve yürüyen merdivenler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.35',
                   'business'=>'Motor ve türbinlerin (hava taşıtı, motorlu kara taşıtı ve motosiklet motorları hariç) ve pompa ve kompresörlerin kurulumu',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.36',
                   'business'=>'Metallerin işlenmesinde, kesilmesinde ve şekillendirilmesinde kullanılan makinelerin kurulum hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.37',
                   'business'=>'Metalürji için sanayi makinelerinin ve ekipmanlarının kurulum hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.38',
                   'business'=>'(Değişik satır:RG-11/8/2023-32276) Maden, taş ocağı ve inşaatlarda kullanılan makinelerin kurulumu',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.39',
                   'business'=>'Gıda, içecek ve tütün işleme için sanayi makinelerinin ve ekipmanlarının kurulum hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.40',
                   'business'=>'Tekstil, giyim eşyası ve deri üretimi için sanayi makinelerinin ve ekipmanlarının kurulum hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.41',
                   'business'=>'Kağıt ve mukavva üretimi için sanayi makinelerinin ve ekipmanlarının kurulum hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.42',
                   'business'=>'Sanayi fabrikalarında cam ve seramik boruların ve hatların kurulumu',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.43',
                   'business'=>'Değirmencilikte kullanılan makinelerin kurulumu',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.44',
                   'business'=>'Metal muhafaza tanklarının ve sarnıçların kurulumu',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.45',
                   'business'=>'Sanayi tipi ısıtma, iklimlendirme ve soğutma cihaz ve ekipmanlarının kurulumu',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.46',
                   'business'=>'Genel amaçlı makinelerin kurulum hizmetleri (tartma, filtreleme, damıtma, paketleme, şişeleme, püskürtme, buhar/kum püskürtme, kalenderleme için olanlar ile büro ve muhasebe makinelerinin kurulum hizmetleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.48',
                   'business'=>'Ağaç, mantar, taş, sert kauçuk veya benzeri sert malzemeleri işlemede kullanılan takım tezgahlarının kurulum hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.49',
                   'business'=>'Plastik ve kauçuk üretimi için sanayi makinelerinin ve ekipmanlarının kurulum hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.50',
                   'business'=>'Profesyonel tıbbi makineler, hassas ve optik aletler ve profesyonel elektronik ekipmanların kurulum hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.51',
                   'business'=>'Elektrikli ekipmanların kurulum hizmetleri (elektrik motorları, jeneratörler ve transformatörlerin, elektrik dağıtım ve kontrol cihazları ile diğer elektrikli ekipmanların kurulumu (yollar, vb. için elektrikli sinyalizasyon ekipmanları hariç))',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.52',
                   'business'=>'Fabrikasyon metal ürünlerin kurulum hizmetleri (buhar jeneratörlerinin kurulum hizmetleri ve sanayi tesislerindeki metal boru sistemlerinin kurulumu dahil, merkezi ısıtma sıcak su kazanları (boylerleri) ile makine ve ekipmanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.53',
                   'business'=>'Endüstriyel işlem kontrol ekipmanlarının kurulum hizmetleri (endüstriyel işlem kontrol ekipmanlarının ve otomatik üretim tesislerinin tasarımı ve montajı, endüstriyel zaman ölçüm alet ve cihazlarının kurulumu) (otomasyon destekliler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.54',
                   'business'=>'Sanayi fırınlarının ve ocak brülörlerinin (ocak ateşleyicilerinin) kurulumu',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'33.20.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer sanayi makine ve ekipmanlarının kurulum hizmetleri (matbaa makineleri ve çimento imalatında kullanılan makilerin kurulumu dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'35.11.19',
                   'business'=>'Elektrik enerjisi üretimi',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'35.12.13',
                   'business'=>'Elektrik enerjisinin iletimi (elektrik üretim kaynağından dağıtım sistemine aktaran iletim sistemlerinin işletilmesi)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'35.13.01',
                   'business'=>'Elektrik enerjisinin dağıtımı (üretim kaynağından veya iletim sisteminden son kullanıcıya iletim sistemiyle taşınan elektrik enerjisi dağıtım sisteminin işletilmesi)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'35.13.02',
                   'business'=>'Elektrik sayaçlarının bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'35.14.01',
                   'business'=>'Diğer işletmeler tarafından işletilen güç dağıtım sistemleri aracılığı ile elektrik satışını düzenleyen elektrik komisyoncuları ve acentelerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'35.14.03',
                   'business'=>'Elektrik için elektrik ve iletim kapasitesi değiştirme faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'35.14.04',
                   'business'=>'(Ek satır:RG-11/8/2023-32276) Kullanıcılara yönelik elektrik ticareti (komisyoncular ve acenteler ile elektrikli araçlar için şarj istasyonlarının faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'35.14.05',
                   'business'=>'(Ek satır:RG-11/8/2023-32276) Elektrikli araçlar (otomobil, motosiklet, dizüstü bilgisayar, cep telefonu vb.) için şarj istasyonlarının faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'35.21.01',
                   'business'=>'Doğalgaz dahil, çeşitli türdeki gazlardan arındırma, karıştırma, vb. işlemlerle kalorifik değerde gazlı yakıtların üretimi',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'35.21.02',
                   'business'=>'Kömürün karbonlaştırılması, tarımsal yan ürün veya atıklarından gaz üretimi',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'35.22.01',
                   'business'=>'Ana şebeke üzerinden gaz yakıtların dağıtımı (her çeşit gazlı yakıtın, ana boru sistemiyle dağıtımı ve tedariki)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'35.22.02',
                   'business'=>'Gaz sayaçlarının bakım ve onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'35.23.01',
                   'business'=>'Ana şebeke üzerinden kullanıcılara yönelik gaz ticareti (komisyoncular ve acenteler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'35.23.02',
                   'business'=>'Diğer işletmeler tarafından işletilen gaz dağıtım sistemleri aracılığıyla, gaz satışını düzenleyen gaz komisyoncuları veya acentelerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'35.30.21',
                   'business'=>'Buhar ve sıcak su üretimi, toplanması ve dağıtımı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'35.30.22',
                   'business'=>'Soğutulmuş hava ve soğutulmuş su üretim ve dağıtımı (buz üretimi dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'36.00.02',
                   'business'=>'Suyun toplanması, arıtılması ve dağıtılması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'36.00.03',
                   'business'=>'Su sayaçlarının bakım ve onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'37.00.01',
                   'business'=>'Kanalizasyon (kanalizasyon atıklarının uzaklaştırılması ve arıtılması, kanalizasyon sistemlerinin ve atık su arıtma tesislerinin işletimi, foseptik çukurların ve havuzların boşaltılması ve temizlenmesi, seyyar tuvalet faaliyetleri vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'38.11.01',
                   'business'=>'Tehlikesiz atıkların toplanması (çöpler, geri dönüştürülebilir maddeler, tekstil atıkları, vb.) (inşaat ve yıkım atıkları, çalı, çırpı, moloz gibi enkazlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'38.11.02',
                   'business'=>'İnşaat ve yıkım atıklarının, çalı, çırpı, moloz gibi enkazların toplanması ve kaldırılması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'38.11.03',
                   'business'=>'Tehlikesiz atık transfer istasyonlarının işletilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'38.12.01',
                   'business'=>'Tehlikeli atıkların toplanması (patlayıcı, oksitleyici, yanıcı, zehirli, aşındırıcı, bulaşıcı ve insan sağlığı için zararlı atıkların ve maddelerin toplanması faaliyetleri) (nükleer atıklar, biyokimyasal atıklar, kullanılmış piller vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'38.21.01',
                   'business'=>'Tehlikesiz atıkların ıslahı ve bertaraf edilmesi ve bertarafı için depolama alanlarının işletilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'38.22.01',
                   'business'=>'Tehlikeli atıkların ıslahı ve bertaraf edilmesi (tehlikeli atıkların ıslahını yapan tesislerin işletilmesi, zararlı atıkların yok edilmesi için kullanılmış malların bertarafı vb. faaliyetler) (radyoaktif atıklar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'38.22.02',
                   'business'=>'Radyoaktif atıkların ıslahı ve bertaraf edilmesi',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'38.31.01',
                   'business'=>'Gemi ve yüzer yapıların hurdalarının materyallerinin geri kazanımı amacıyla parçalara ayrılması (sökülmesi)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'38.31.02',
                   'business'=>'Hurdaların geri kazanım amacıyla parçalara ayrılması (otomobil, bilgisayar, televizyon vb. donanımlar) (gemiler ve yüzer yapılar ile satmak için kullanılabilir parçalar oluşturmak amacıyla sökme hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'38.32.01',
                   'business'=>'Tasnif edilmiş metal atıklar, hurdalar ve diğer parçaların genellikle mekanik veya kimyasal değişim işlemleri ile geri kazanılması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'38.32.02',
                   'business'=>'Tasnif edilmiş metal dışı atıklar, hurdalar ve diğer parçaların genellikle mekanik veya kimyasal değişim işlemleri ile geri kazanılması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'39.00.01',
                   'business'=>'İyileştirme faaliyetleri ve diğer atık yönetimi hizmetleri (kirletilmiş toprak ve yeraltı sularının temizlenmesi, kara mayınlarının temizlenmesi, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'41.10.01',
                   'business'=>'Bina projelerinin geliştirilmesi (satışa yönelik bina projeleri için mali, teknik ve fiziksel araçların bir araya getirilmesi suretiyle konut veya diğer amaçlı kullanıma yönelik bina projelerinin organize edilmesi) (yapı kooperatifleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'41.10.02',
                   'business'=>'Konut yapı kooperatiflerinin faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'41.10.03',
                   'business'=>'İşyeri yapı kooperatiflerinin faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'41.20.01',
                   'business'=>'İkamet amaçlı olmayan binaların inşaatı (fabrika, atölye vb. sanayi üretimini amaçlayan binalar ile hastane, okul, otel, işyeri, mağaza, alışveriş merkezi, lokanta, kapalı spor tesisi, cami, kapalı otopark, tuvalet, vb. inşaatı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'41.20.02',
                   'business'=>'İkamet amaçlı binaların inşaatı (müstakil konutlar, birden çok ailenin oturduğu binalar, gökdelenler vb.nin inşaatı) (ahşap binaların inşaatı hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'41.20.03',
                   'business'=>'Prefabrik binalar için bileşenlerin alanda birleştirilmesi ve kurulması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'41.20.04',
                   'business'=>'İkamet amaçlı ahşap binaların inşaatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'41.20.05',
                   'business'=>'Mevcut ikamet amaçlı olan veya ikamet amaçlı olmayan binaların yeniden düzenlenmesi veya yenilenmesi (büyük çaplı revizyon)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.11.01',
                   'business'=>'Oto yollar, kara yolları, şehir içi yollar ve diğer araç veya yaya yollarının inşaatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.11.02',
                   'business'=>'Yol yüzeylerinin asfaltlanması ve onarımı, kaldırım, kasis, bisiklet yolu vb.lerin inşaatı, yolların vb. yüzeylerin boyayla işaretlenmesi, yol bariyeri, trafik işaret ve levhaları vb.nin kurulumu gibi yol, tünel vb. yerlerdeki yüzey işleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.11.03',
                   'business'=>'Havaalanı pisti inşaatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.12.01',
                   'business'=>'Demir yolları ve metroların inşaatı (bakım ve onarımı dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.13.01',
                   'business'=>'Köprülerin inşaatı (yükseltilmiş kara yolları-viyadükler dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.13.02',
                   'business'=>'Tünel inşaatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.21.01',
                   'business'=>'Akışkanlar için uzun mesafe boru hatlarının inşaatı (petrol ürünleri ve gaz taşımacılığı ile su ve diğer ürünlerin taşımacılığına yönelik karada ve deniz altında uzun mesafe boru hattı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.21.02',
                   'business'=>'Su kuyusu açma ve septik sistem kurulum faaliyetleri (kuyu, artezyen vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.21.03',
                   'business'=>'Ana su şebekeleri ve su hatları ile su arıtma tesisleri, kanalizasyon bertaraf tesisleri ve pompa istasyonları inşaatı (sulama sistemleri (kanallar) dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.21.05',
                   'business'=>'Akışkanlar için kısa mesafe (yerel) boru hatlarının inşaatı (petrol ürünleri ve gaz taşımacılığı ile su, kanalizasyon, sıcak su, buhar ve diğer ürünlerin taşımacılığına yönelik kısa mesafe boru hattı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.22.01',
                   'business'=>'Uzun mesafe elektrik hatlarının inşaatı (uzun mesafe yüksek gerilim elektrik iletim hatları ile uzun mesafe yer üstü/altı veya deniz altı iletim hatları)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.22.02',
                   'business'=>'Enerji santralleri inşaatı (hidroelektrik santrali, termik santral, nükleer enerji üretim santralleri vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.22.04',
                   'business'=>'Kentsel (kısa mesafe) elektrik hatlarının inşaatı (trafo istasyonları ve yerel sınırlar içerisindeki dağıtım alt istasyonları vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.22.05',
                   'business'=>'Telekomünikasyon şebeke ve ağlarının bakım ve onarımı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.22.06',
                   'business'=>'Uzun mesafe telekomünikasyon (iletişim) hatlarının inşaatı (uzun mesafe yer üstü/altı veya deniz altı telekomünikasyon iletim hatları)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.22.07',
                   'business'=>'Kentsel (kısa mesafe) telekomünikasyon (iletişim) hatlarının inşaatı (anten dahil iletim kuleleri ve trafo istasyonları ve yerel sınırlar içerisindeki dağıtım alt istasyonları vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.91.01',
                   'business'=>'Kıyı ve liman inşaatları ve ilgili hidromekanik yapıların inşaatı (su yolları, liman ve yat limanları, kıyı düzenlemeleri, iskele ve rıhtımlar, dalgakıranlar, kanallar vb. yapılar)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.91.02',
                   'business'=>'Su ve su zemininin taranması ve temizlenmesi (deniz, nehir, göl vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.91.03',
                   'business'=>'Tersane, dok ve kanal havuzu inşaatı (gemi inşaatı ve tamiri için)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.91.04',
                   'business'=>'Baraj ve bentlerin inşaatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.99.01',
                   'business'=>'Açık havada yapılan sporlara uygun tesislerin ve eğlence alanları yapılarının inşaatı (golf sahaları, açık stadyumlar, tenis kortları, atletizm sahaları, plaj tesisi, dağ barınakları, eğlence parkları vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.99.02',
                   'business'=>'Madencilik ve imalat sanayisi yapılarının inşaatı (sarım mili ve kuleleri, maden yükleme ve boşaltma istasyonları, rafineriler, kimyasal tesisler vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.99.03',
                   'business'=>'Başka yerde sınıflandırılmamış bina dışı diğer yapıların inşaatı (arazi iyileştirilmesi ile birlikte arazinin parsellemesi dahil, iyileştirme yapılmaksızın parselleme hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'42.99.04',
                   'business'=>'Doğalgaz işleme tesisleri inşaatı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.11.01',
                   'business'=>'Yıkım işleri (binaların ve diğer yapıların yıkılması ve sökülmesi)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.12.01',
                   'business'=>'Zemin ve arazi hazırlama, alanın temizlenmesi ile kazı ve hafriyat işleri (tarımsal arazinin hazırlanması, dinamitleme ve kayaların kaldırılması, inşaat, tarım vb. alanların drenajı, hafriyat, kazı, dolgu vb. işler) (madencilik için yapılanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.12.02',
                   'business'=>'Maden sahalarının hazırlanması (tünel açma dahil, petrol ve gaz sahaları için olanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.13.01',
                   'business'=>'Test sondajı ve delme (inşaat, jeofizik, jeolojik vb. amaçlar için test sondajı ve delme işleri ile örnekleme sondajı) (madencilikle bağlantılı olarak gerçekleştirilen test sondajı hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.21.01',
                   'business'=>'Bina ve bina dışı yapıların (ulaşım için aydınlatma ve sinyalizasyon sistemleri hariç) elektrik tesisatı, kablolu televizyon ve bilgisayar ağı tesisatı ile konut tipi antenler (uydu antenleri dahil), elektrikli güneş enerjisi kollektörleri, elektrik sayaçları, yangın ve hırsızlık alarm sistemleri vb. kurulumu',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.21.03',
                   'business'=>'Karayolları, demiryolları ve diğer raylı yolların, liman ve havaalanlarının aydınlatma ve sinyalizasyon sistemlerinin tesisatı (havaalanı pisti aydınlatmasının tesisatı dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.22.03',
                   'business'=>'Bina ve diğer inşaat projelerinde su ve kanalizasyon tesisatı ve onarımı (yağmurlama sistemlerinin kurulumu dahil sıhhi tesisat işleri, yangın söndürme sistemlerinin kurulumu, kanalizasyon tesisatı döşeme işleri vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.22.05',
                   'business'=>'Gaz tesisatı faaliyetleri (hastanelerdeki oksijen gazı temini için kurulum işleri dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.22.06',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Bina veya diğer inşaat projelerinde ısıtma, havalandırma, soğutma ve iklimlendirme sistemlerinin bakım ve onarımı (ev tipi boyler (kombi, kazan vb.) ve brülörler ile elektriksiz güneş enerjisi kolektörlerinin bakım ve onarımı dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.22.07',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Bina veya diğer inşaat projelerinde ısıtma, havalandırma, soğutma ve iklimlendirme sistemlerinin kurulumu (ev tipi boyler (kombi, kazan vb.) ve brülörler ile elektriksiz güneş enerjisi kolektörlerinin kurulumu dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.29.01',
                   'business'=>'Asansörlerin, yürüyen merdivenlerin, yürüyen yolların, otomatik ve döner kapıların bakım ve onarımı dahil kurulum işleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.29.02',
                   'business'=>'Başka yerde sınıflandırılmamış diğer tesisat işleri (paratonerlerin, tabelaların (ışıklı olsun veya olmasın), stor ve güneşliklerin montaj işleri vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.29.03',
                   'business'=>'Isı, ses veya titreşim yalıtımı ile diğer inşaat tesisatı işleri (mantolama ve vakumlu temizleme sistemlerinin kurulumu dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.29.05',
                   'business'=>'Parmaklık ve korkuluk tesisatı işleri (metal yangın merdivenlerinin kurulumu dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.31.01',
                   'business'=>'Sıva işleri (binalarda veya diğer inşaatlarda iç ve dış sıva veya alçı sıva işleri ile alçıpan işleri vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.32.01',
                   'business'=>'Hazır mutfaklar, mutfak tezgahları, gömme dolaplar, iç merdivenler ile ince tahta, lambri ve benzerlerinin montajı işleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'43.32.02',
                   'business'=>'Herhangi bir malzemeden yapılan kapı ve pencere kasaları, kapılar (zırhlı kapılar dahil, otomatik ve döner kapılar hariç), pencereler, kepenkler, panjurlar, garaj kapıları ve benzerlerinin montajı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'43.32.03',
                   'business'=>'Seyyar bölme ve metal yapı üzerine asma tavan montaj işleri ile diğer doğrama tesisatı işleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'43.33.01',
                   'business'=>'Bina ve diğer yapıların içi veya dışında yer ve duvar kaplama faaliyetleri (mermer, mozaik, granit, karo ve kaldırım taşlarının, parke dahil ahşap yer ve duvar kaplamalarının döşenmesi vb.) (halı, taban muşambası ve kağıt kaplama hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.33.02',
                   'business'=>'Başka yerde sınıflandırılmamış diğer yer döşeme ve kaplama ile duvar kaplama işleri (halı, taban muşambası ve diğer esnek yer kaplamaları ile duvar kaplama işleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'43.34.01',
                   'business'=>'Binaların iç ve dış boyama işleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.34.02',
                   'business'=>'Cam takma işleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.34.03',
                   'business'=>'Bina dışı yapıların boyama işleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.39.01',
                   'business'=>'Dekoratif malzemenin, bezemelerin ve süslerin montajı ile inşaatlardaki bys. diğer bütünleyici ve tamamlayıcı işler (radyatörleri kaplayan ızgaraların montajı ile akustik panel, karo veya diğer malzemeleri içeren akustik işler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'43.39.02',
                   'business'=>'Yeni binaların inşaat sonrası temizliği',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'43.91.01',
                   'business'=>'Çatı işleri (çatı iskeleti kurulumunu içeren inşaat işleri, çatı yapımı, çatı oluğu ve oluk ağzı montaj işleri ile metal ve diğer malzemeden çatı kaplama işleri) (dülgerlik işleri dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.01',
                   'business'=>'Yapısal çelik bileşenlerin kurulması işleri (bina, köprü, gezer vinç veya elektrik iletim kulesi gibi diğer yapılar için prefabrik yapısal çelik bileşenlerin kurulması vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.02',
                   'business'=>'Yeraltı çalışmaları (madencilik, depolama, vb. için düşey galeri ve kuyu açma faaliyeti dahil, su kuyusu açma hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.03',
                   'business'=>'Açık yüzme havuzlarının inşaatı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.04',
                   'business'=>'Vinç ve benzeri diğer inşaat ekipmanlarının operatörü ile birlikte kiralanması (özel bir inşaat çeşidinde yer almayan)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.05',
                   'business'=>'İnşaatlarda beton işleri (kalıp içerisine beton dökülmesi vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.06',
                   'business'=>'Duvarcılık ve tuğla örme işleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.07',
                   'business'=>'İnşaat iskelesi ve çalışma platformunu kurma ve sökme işleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.08',
                   'business'=>'Su yalıtım işleri (düz çatı ve teraslardaki su yalıtım işleri, inşaat ve diğer yer altı yapıların dış cephesindeki su yalıtım işleri, nem yalıtımı vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.10',
                   'business'=>'Baca ve sanayi fırınlarının inşaatı ve kurulması (fırınlar için yanma odasına ateş tuğlası döşenmesi işleri dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.11',
                   'business'=>'İnşaat amaçlı kazık çakma ve temel inşaatı işleri (forekazık çakma dahil)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.12',
                   'business'=>'Yapıların dış cepheleri için buharlı temizleme, kum püskürtme ve benzeri uzmanlaşmış inşaat faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.13',
                   'business'=>'İnşaat demirciliği (inşaat demirinin bükülmesi ve bağlanması)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.14',
                   'business'=>'Prefabrik yapıların montajı ve kurulması (prefabrik binalar hariç her çeşit prefabrik sokak düzeneklerinin (otobüs durağı, telefon kulübesi, bank vb.) kurulumu vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'43.99.15',
                   'business'=>'Başka yerde sınıflandırılmamış diğer uzmanlaşmış inşaat işleri (şömine, barbekü dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'45.11.10',
                   'business'=>'Otomobillerin ve hafif motorlu kara taşıtlarının toptan ticareti (ambulans ve minibüs benzeri motorlu yolcu taşıtları dahil (3,5 tondan daha az))',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.11.11',
                   'business'=>'Otomobillerin ve hafif motorlu kara taşıtlarının belirli bir mala tahsis edilmiş mağazalarda perakende ticareti (ambulans ve minibüs benzeri motorlu yolcu taşıtları dahil (3,5 tondan daha az)) (galericiler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.11.12',
                   'business'=>'Otomobil ve hafif motorlu kara taşıtlarının bir ücret veya sözleşmeye dayalı olarak (aracılar) toptan ticareti (ambulans ve minibüs benzeri motorlu yolcu taşıtları (3,5 tondan daha az) dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.11.13',
                   'business'=>'Otomobil ve hafif motorlu kara taşıtlarının diğer perakende ticareti (ambulans ve minibüs benzeri motorlu yolcu taşıtları dahil (3,5 tondan daha az)) (aracılar ile internet, TV. Vb. Üzerinden ticaret dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.19.01',
                   'business'=>'Diğer motorlu kara taşıtlarının toptan ticareti (kamyonlar, çekiciler, otobüsler, römorklar, yarı römorklar, karavanlar ve motorlu karavanlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.19.02',
                   'business'=>'Diğer motorlu kara taşıtlarının perakende ticareti (kamyonlar, çekiciler, otobüsler, römorklar, yarı römorklar, karavanlar ve motorlu karavanlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.20.01',
                   'business'=>'Motorlu kara taşıtlarının elektrik sistemlerinin onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.20.02',
                   'business'=>'Motorlu kara taşıtlarının lastik onarımı (tekerlek ayar ve balansı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'45.20.03',
                   'business'=>'Araba yağlama, yıkama, cilalama ve benzeri faaliyetler',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.20.04',
                   'business'=>'Motorlu taşıtların koltuk ve döşemelerinin bakım ve onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'45.20.05',
                   'business'=>'Motorlu kara taşıtlarının karoser ve kaporta onarımı vb. faaliyetler (kapı, kilit, cam, çarpma onarımı, boyama vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'45.20.06',
                   'business'=>'Motorlu kara taşıtlarının genel bakım ve onarımı (radyatör, klima ve egzoz bakım ve onarımı dahil, aynı işletmede yapılanlar ile elektrik sistemi, tekerlek ve karoser onarım hizmetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'45.20.07',
                   'business'=>'Motorlu kara taşıtlarının genel bakım ve onarım hizmetleri (aynı işletmede mekanik, elektrik sistemi, kaporta, boya, fren sistemi, cam, pencere vb. bakım ve onarımının yapılması)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'45.20.08',
                   'business'=>'(Değişik satır:RG-24/2/2021-31405) Motorlu kara taşıtlarına yakıt sistemi (benzin, dizel, LPG, CNG, LNG vb.) montajı ve bakımı hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'45.20.09',
                   'business'=>'Motorlu kara taşıtlarının sadece boyanması faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'45.31.10',
                   'business'=>'Motorlu kara taşıtlarının aksesuarlarının toptan ticareti (oto alarm sistemleri dahil, motosiklet parça ve aksesuarları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.31.11',
                   'business'=>'Motorlu kara taşıtlarının parçalarının toptan ticareti (dorse, damper, akü dahil, motosiklet parça ve aksesuarları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.31.12',
                   'business'=>'Motorlu kara taşıtı lastiklerinin ve jantlarının toptan ticareti (motosiklet ve bisiklet lastiği ve jantları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.31.13',
                   'business'=>'Motorlu kara taşıtlarının camlarının toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.31.14',
                   'business'=>'Motorlu kara taşıtlarının parça ve aksesuarlarının bir ücret ya da sözleşmeye dayalı olarak toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.32.03',
                   'business'=>'Motorlu kara taşıtı lastiklerinin ve jantlarının belirli bir mala tahsis edilmiş mağazalarda perakende ticareti (motosiklet parça ve aksesuarları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.32.04',
                   'business'=>'Motorlu kara taşıtlarının aksesuarlarının belirli bir mala tahsis edilmiş mağazalarda perakende ticareti (motosiklet parça ve aksesuarları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.32.05',
                   'business'=>'Motorlu kara taşıtı camlarının belirli bir mala tahsis edilmiş mağazalarda perakende ticareti (motosiklet parça ve aksesuarları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.32.06',
                   'business'=>'Motorlu kara taşıtlarının ikinci el (kullanılmış) parçalarının belirli bir mala tahsis edilmiş mağazalarda perakende ticareti (motosiklet parça ve aksesuarları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.32.07 (Ek:RG-18/3/2022-31782) ',
                   'business'=>'Motorlu kara taşıtlarının parçalarının belirli bir mala tahsis edilmiş mağazalarda perakende ticareti (dorse ve damper dahil) (lastik ve camlar, aküler ile motosiklet parça ve aksesuarları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.32.08 (Ek:RG-18/3/2022-31782) ',
                   'business'=>'Motorlu kara taşıtlarının akülerinin belirli bir mala tahsis edilmiş mağazalarda perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.32.90',
                   'business'=>'Motorlu kara taşıtlarının parça ve aksesuarlarının diğer perakende ticareti (uzmanlaşmamış olanlar ile internet, posta, tezgah, pazar vb. yoluyla yapılanlar) (motosiklet parça ve aksesuarları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.40.01',
                   'business'=>'Motosiklet ve motorlu bisikletlerin bakım ve onarım hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'45.40.02',
                   'business'=>'Motosikletler ve motorlu bisikletlerin belirli bir mala tahsis edilmiş mağazalarda perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.40.03',
                   'business'=>'Motosikletler ve motorlu bisikletlerin parça ve aksesuarlarının belirli bir mala tahsis edilmiş mağazalarda perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.40.04',
                   'business'=>'Motosikletler ve motorlu bisikletlerin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.40.05',
                   'business'=>'Motosikletler ve motorlu bisikletlerin parça ve aksesuarlarının toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.40.06',
                   'business'=>'Motosikletler, motorlu bisikletler ve bunların parça ve aksesuarlarının bir ücret veya sözleşmeye dayalı olarak toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'45.40.07',
                   'business'=>'Motosikletler, motorlu bisikletler ve bunların parça ve aksesuarlarının diğer perakende ticareti (uzmanlaşmamış olanlar ile internet, posta, tezgah, pazar vb. yoluyla yapılanlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.11.01',
                   'business'=>'Çiçeklerin, bitkilerin, diğer tarımsal hammaddelerin, tekstil hammaddelerinin ve yarı mamul malların bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.11.02',
                   'business'=>'Canlı hayvanların bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.12.01',
                   'business'=>'Katı, sıvı ve gaz haldeki yakıtların ve ilgili ürünlerin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar (motorlu taşıt yakıtları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.12.02',
                   'business'=>'Endüstriyel kimyasallar, gübreler ve zirai kimyasal ürünlerin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.12.03',
                   'business'=>'Birincil formdaki metaller ve metal cevherlerinin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar (inşaat demiri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.13.01',
                   'business'=>'İnşaat malzemesinin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar (inşaat demiri ve kerestesi hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.13.02',
                   'business'=>'Kereste ve kereste ürünlerinin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.14.01',
                   'business'=>'Bilgisayar, yazılım, elektronik ve telekomünikasyon donanımlarının ve diğer büro ekipmanlarının bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.14.02',
                   'business'=>'Başka yerde sınıflandırılmamış tarım, makine ve sanayi ekipmanlarının bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.14.03',
                   'business'=>'Gemilerin, hava taşıtlarının ve başka yerde sınıflandırılmamış diğer ulaşım araçlarının bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.15.01',
                   'business'=>'Mobilyaların bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.15.02',
                   'business'=>'Hırdavatçı (nalburiye) eşyalarının ve el aletlerinin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.15.03',
                   'business'=>'Radyo, televizyon ve video cihazlarının bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.15.04',
                   'business'=>'Başka yerde sınıflandırılmamış çatal-bıçak takımı, diğer kesici aletler ve ev eşyalarının bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.16.01',
                   'business'=>'Deri giyim eşyası, kürk ve ayakkabının bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.16.02',
                   'business'=>'Deri eşyalar ve seyahat aksesuarlarının bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.16.03',
                   'business'=>'Giyim eşyalarının bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar (deri giyim eşyaları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.16.04',
                   'business'=>'Tekstil ürünlerinin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar (iplik, kumaş, ev tekstili, perde vb. ürünler) (giyim eşyaları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.17.01',
                   'business'=>'Gıda maddelerinin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar (aracı üretici birlikleri dahil, yaş sebze ve meyve hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.17.02',
                   'business'=>'Yaş sebze ve meyvelerin bir ücret ve sözleşmeye dayalı olarak toptan satışını yapan aracılar (kabzımallık ve aracı üretici birlikleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.17.03',
                   'business'=>'Tütün ve tütün ürünlerinin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar (aracı üretici birlikleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.17.04',
                   'business'=>'İçeceklerin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.18.01',
                   'business'=>'Oyun ve oyuncak, spor malzemesi, bisiklet, kitap, gazete, dergi, kırtasiye ürünleri, müzik aleti, saat ve mücevher ile fotoğrafçılıkla ilgili ve optik aletlerin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.18.02',
                   'business'=>'Kozmetik, parfüm ve bakım ürünleri ile temizlik malzemesinin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.18.03',
                   'business'=>'Tıbbi ürünlerin, araç ve malzemelerin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.18.04',
                   'business'=>'Kağıt ve karton (mukavva) ile ilgili belirli ürünlerin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.18.05',
                   'business'=>'Eczacılıkla ilgili ürünlerin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.18.06',
                   'business'=>'İşlenmemiş ağaç, atık, hurda ve geri dönüştürülebilir malzemeler, vb. başka yerde sınıflandırılmamış diğer belirli ürünlerin bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.19.01',
                   'business'=>'Çeşitli malların bir ücret veya sözleşmeye dayalı olarak toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.19.02',
                   'business'=>'Çeşitli malların müzayede, mezat, açık arttırma yoluyla toptan satışını yapan aracılar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.21.01',
                   'business'=>'Hayvan yemi toptan ticareti (kuş yemi, yemlik kökleri, yemlik kıvırcık lahana, darı, kaplıca, yonca, yemlik mısır vb. ile kepek, kırma, küspe, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.21.02',
                   'business'=>'Tahıl toptan ticareti (buğday, arpa, çavdar, yulaf, mısır, çeltik vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.21.03',
                   'business'=>'Yağlı tohum ve yağlı meyvelerin toptan ticareti (soya fasulyesi, yer fıstığı, pamuk çekirdeği, keten tohumu, kolza, ayçiçeği tohumu, pamuk çekirdeği vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.21.04',
                   'business'=>'İşlenmemiş tütün toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.21.05',
                   'business'=>'İpek böceği kozası toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.21.06',
                   'business'=>'Pamuk toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.21.07',
                   'business'=>'Yün ve tiftik toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.21.08',
                   'business'=>'Tohum (yağlı tohumlar hariç) toptan ticareti (sebze tohumları, çiçek tohumları ve orman ağacı tohumları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.21.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer tarımsal ham maddelerin toptan ticareti (işlenmemiş yenilemeyen sakatatlar, kuştüyü ve derileri, laka, kına çiçeği, doğal süngerler, doğal mantar (yenilenler hariç), karabiber, doğal kauçuk vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.22.01',
                   'business'=>'Çiçek, bitki ve çiçek soğanı toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.23.01',
                   'business'=>'Canlı hayvanların toptan ticareti (celepçilik) (kümes hayvanları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.23.02',
                   'business'=>'Canlı kümes hayvanları (tavuk, hindi, vb.) toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.24.01',
                   'business'=>'Ham deri, post ve kürklü deri toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.24.02',
                   'business'=>'Tabaklanmış deri, güderi ve kösele toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.01',
                   'business'=>'Fındık, antep fıstığı, yer fıstığı ve ceviz toptan ticareti (kavrulmuş olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.02',
                   'business'=>'Taze incir ve üzüm toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.03',
                   'business'=>'Narenciye toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.04',
                   'business'=>'Diğer taze meyve sebze toptan ticareti (patates dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.05',
                   'business'=>'Zeytin (işlenmiş) toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.06',
                   'business'=>'Kültür mantarı toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.08',
                   'business'=>'Kuru bakliyat ürünleri toptan ticareti (fasulye, mercimek, nohut, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.09',
                   'business'=>'Kavrulmuş veya işlenmiş kuruyemiş toptan ticareti (leblebi, kavrulmuş fındık, fıstık, çekirdek vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.10',
                   'business'=>'Kuru üzüm toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.11',
                   'business'=>'Kuru incir toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.12',
                   'business'=>'Kuru kayısı toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.31.90',
                   'business'=>'Diğer işlenmiş veya korunmuş sebze ve meyve toptan ticareti (reçel, pekmez, pestil, salamura veya turşusu yapılmış olanlar dahil) (fındık, incir, üzüm, narenciye, zeytin, kültür mantarı ve kuruyemiş hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.32.01',
                   'business'=>'Kümes hayvanları ve av hayvanları etlerinin toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.32.02',
                   'business'=>'Et toptan ticareti (av hayvanları ve kümes hayvanları etleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.32.03',
                   'business'=>'Yenilebilir sakatat (ciğer, işkembe, böbrek, taşlık vb.) toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.32.04',
                   'business'=>'Et ürünlerinin toptan ticareti (salam, sosis, sucuk, pastırma vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.33.01',
                   'business'=>'Süt ürünleri toptan ticareti (işlenmiş süt, süt tozu, yoğurt, peynir, kaymak, tereyağ vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.33.02',
                   'business'=>'Yumurta ve yumurta ürünleri toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.33.03',
                   'business'=>'Hayvan veya bitkisel kaynaklı yenilebilir sıvı ve katı yağların toptan ticareti (tereyağ hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.34.01',
                   'business'=>'Alkollü içeceklerin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.34.02',
                   'business'=>'Meyve ve sebze suları, maden suyu, meşrubat ve diğer alkolsüz içeceklerin toptan ticareti (su hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.34.03',
                   'business'=>'Su toptan ticareti (su istasyonları dahil, şebeke suyu hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.35.01',
                   'business'=>'Tütün ürünlerinin toptan ticareti (pipo tütünü, sigara, puro vb.) (işlenmemiş tütün hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.36.01',
                   'business'=>'Çikolata ve şekerleme toptan ticareti (helva, lokum, akide şekeri, bonbon şekeri vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.36.02',
                   'business'=>'Fırıncılık mamullerinin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.36.03',
                   'business'=>'Şeker toptan ticareti (toz şeker, kesme şeker, kristal şeker vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.36.04',
                   'business'=>'Dondurma ve diğer yenilebilir buzların toptan satışı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.37.01',
                   'business'=>'Çay toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.37.02',
                   'business'=>'Kahve, kakao ve baharat toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.37.03',
                   'business'=>'İçecek amaçlı kullanılan aromatik bitkilerin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.38.01',
                   'business'=>'Balık, kabuklular, yumuşakçalar ve diğer su ürünleri toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.38.02',
                   'business'=>'Ev hayvanları için yemlerin veya yiyeceklerin toptan ticareti (çiftlik hayvanları için olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.38.03',
                   'business'=>'Gıda tuzu (sofra tuzu) toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.38.04',
                   'business'=>'Un, nişasta, makarna, şehriye vb. ürünler ile hazır gıdaların (et/sebze suları, hazır çorbalar vb.) toptan ticareti (ekmek mayası, kuru maya vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.38.05',
                   'business'=>'Hazır homojenize gıda ile diyetetik gıda ürünleri toptan ticareti (bebek maması, diyet gıdaları, sporcu gıdaları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.38.06',
                   'business'=>'Başka yerde sınıflandırılmamış diğer gıda ürünlerinin toptan ticareti (doğal bal, malt, hazır yemek, sirke vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.39.01',
                   'business'=>'Belli bir mala tahsis edilmemiş mağazalarda dondurulmuş gıda toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.39.02',
                   'business'=>'Belli bir mala tahsis edilmemiş mağazalarda gıda (dondurulmamış), içecek ve tütün toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.41.01',
                   'business'=>'Evde kullanılan tekstil takımları, perdeler ve çeşitli tekstil malzemesinden ev eşyaları toptan ticareti (çarşaf, yatak takımı, yastık kılıfı, masa örtüsü, havlu, battaniye, yorgan, diğer mefruşatlar vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.41.02',
                   'business'=>'Tuhafiye ürünleri toptan ticareti (iğne, dikiş ipliği, düğme, fermuar, çıtçıt, fisto, dantel, gipür vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.41.03',
                   'business'=>'Kumaş toptan ticareti (manifatura ürünleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.41.04',
                   'business'=>'İplik toptan ticareti (tuhafiye ürünleri ile dikiş ipliği hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.41.05',
                   'business'=>'Diğer tekstil ürünleri toptan ticareti (balık ağı, çuval, çul, halat, urgan dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.42.01',
                   'business'=>'Bebek giysileri, sporcu giysileri ve diğer giyim eşyalarının toptan ticareti (kayak kıyafetleri, yüzme kıyafetleri, mayo vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.42.02',
                   'business'=>'Ayakkabı toptan ticareti (terlik, çarık, mes, vb. dahil, spor ayakkabıları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.42.03',
                   'business'=>'Çorap ve giysi aksesuarlarının toptan ticareti (şapka, eldiven, şal, papyon, kravat vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.42.04',
                   'business'=>'Kürk ve deriden giyim eşyalarının toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.42.05',
                   'business'=>'Dış giyim eşyalarının toptan ticareti (iş giysileri ile triko olanlar dahil, kürk ve deriden olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.42.06',
                   'business'=>'İç giyim eşyalarının toptan ticareti (slip, külot, gömlek, tişört, sabahlık, pijama, sütyen, korse, bornoz, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.42.07',
                   'business'=>'Şemsiye toptan ticareti (güneş ve bahçe şemsiyeleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.42.08',
                   'business'=>'Ayakkabı malzemeleri toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.43.01',
                   'business'=>'Beyaz eşya toptan ticareti (buzdolabı, çamaşır makinesi, bulaşık makinesi, fırın, çamaşır kurutma makinesi vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.43.04',
                   'business'=>'Plak, ses ve görüntü kasetleri, CD ve DVD toptan ticareti (boş olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.43.05',
                   'business'=>'Elektrik malzemeleri toptan ticareti (kablo, sigorta, duy, fiş, priz, ampul, elektrik anahtarı, devre kesici, şalter, röle, pil, batarya, vb.) (endüstriyel olanlar ile elektrikli makine, cihaz ve aletlerde kullanılanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.43.08',
                   'business'=>'Hırsız ve yangın alarmları ile benzeri cihazların toptan ticareti - evlerde kullanım amaçlı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.43.09',
                   'business'=>'Radyo, televizyon, video ve DVD cihazlarının toptan ticareti (antenler ile arabalar için radyo ve TV ekipmanları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.43.10',
                   'business'=>'Fotoğrafçılıkla ilgili ürünlerin toptan ticareti (flaş lambaları, fotoğrafçılık emülsiyonları, polarizan maddeler, fotografik levha ve filmler vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.43.11',
                   'business'=>'Optik ürünlerin toptan ticareti (gözlükler, saat ve gözlük camları, dürbün, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.43.12',
                   'business'=>'Konutlarda, bürolarda ve mağazalarda kullanılan (sanayi tipi olmayan) klimaların toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.43.90',
                   'business'=>'Başka yerde sınıflandırılmamış elektrikli ev aletleri toptan ticareti (ütü, elektrik süpürgesi, aspiratör, vantilatör,tıraş makinesi, saç kurutma makinesi, su arıtma cihazı, dikiş makinesi, şofben, elektrikli soba, elektrikli radyatör vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.44.01',
                   'business'=>'Porselen ve cam eşyalar ile toprak ve seramikten yapılan ürünlerin toptan ticareti (çini, billuriye, cam veya porselenden çanak, tabak, bardak, vazo, tepsi, süs eşyası, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.44.02',
                   'business'=>'Temizlik malzemesi toptan ticareti (deterjan, ovma krem ve tozları, yumuşatıcılar, Arap sabunu, vb. dahil, kişisel temizlik sabunları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.44.04',
                   'business'=>'Cila ve krem (ayakkabı, mobilya, yer döşemesi, kaporta, cam veya metal için) toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.45.01',
                   'business'=>'Parfüm, kozmetik ürünleri ve kolonya toptan ticareti (ıtriyat dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.45.02',
                   'business'=>'Sabun toptan ticareti (kişisel temizlik için)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.46.01',
                   'business'=>'Cerrahi, tıbbi ve ortopedik alet ve cihazların toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.46.02',
                   'business'=>'Temel eczacılık ürünleri ile eczacılık müstahzarlarının toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.46.03',
                   'business'=>'Dişçilikte kullanılan alet ve cihazların toptan ticareti (protezler, bağlantı parçaları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.46.04',
                   'business'=>'Hayvan sağlığı ile ilgili ilaçların toptan ticareti (serum, aşı, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.47.01',
                   'business'=>'Mobilya ve mobilya aksesuarları toptan ticareti (yatak dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.47.02',
                   'business'=>'Halı, kilim, vb. yer kaplamaları toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.47.03',
                   'business'=>'Aydınlatma ekipmanlarının toptan ticareti (avize, abajur, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.48.01',
                   'business'=>'Mücevher ve takı toptan ticareti (altın, gümüş, vb. olanlar) (imitasyon olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.48.02',
                   'business'=>'Saat toptan ticareti (kol, masa, duvar, vb. saatler ile kronometreler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.01',
                   'business'=>'Deri eşyalar ve seyahat aksesuarları toptan ticareti (çanta, valiz, cüzdan, kemer, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.02',
                   'business'=>'Spor malzemesi toptan ticareti (basketbol, futbol, vb. spor ayakkabıları, kayak botları gibi özel spor ayakkabıları, bisikletler ve bisiklet parçaları ile aksesuarları, çadır ve kamp malzemeleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.03',
                   'business'=>'Kırtasiye ürünleri toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.04',
                   'business'=>'Oyun ve oyuncak toptan ticareti (yap-bozlar, oyun kağıtları, jetonla çalışan oyun makineleri vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.05',
                   'business'=>'Hasır eşyalar, mantar eşyalar ve diğer ahşap ürünlerin toptan ticareti (ip vb. için makaralar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.06',
                   'business'=>'Müzik aletleri toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.07',
                   'business'=>'Çatal-bıçak takımı ve diğer kesici aletler ile metal sofra ve mutfak eşyalarının toptan ticareti (bakır mutfak eşyaları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.08',
                   'business'=>'Tuvalet kağıdı, peçete, kağıt havlu ile kağıt tepsi, tabak, bardak, çocuk bezi vb. toptan ticareti (plastikten olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.09',
                   'business'=>'Sportif amaçlı avcılık ve balıkçılık malzemeleri toptan ticareti (tabanca, av tüfeği ve balık ağları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.11',
                   'business'=>'Kitap, dergi ve gazete toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.12',
                   'business'=>'Hediyelik eşya toptan ticareti (pipo, tespih, bakır süs eşyaları, imitasyon takılar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.16',
                   'business'=>'Kişisel veya ev tipi tartı aletleri ve basküllerin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.17',
                   'business'=>'Plastik sofra, mutfak ve diğer ev eşyası ile tuvalet eşyası toptan ticareti (plastik tepsi, bardak, tabak, poşet, sünger vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.21',
                   'business'=>'Sanat eserleri toptan ticareti (büst ve heykeller dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.22',
                   'business'=>'Tıraş bıçakları, usturalar ve jiletlerin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.23',
                   'business'=>'Sanatsal reprodüksiyon ürünlerinin toptan ticareti (resim, fotoğraf vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.24',
                   'business'=>'Resim, fotoğraf vb. için çerçeve toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.25',
                   'business'=>'Arı kovanı toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.26',
                   'business'=>'Spor ve eğlence amaçlı teknelerin, kayıkların ve kanoların toptan ticareti (deniz taşıtları için dıştan takmalı motorlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.27',
                   'business'=>'Pul ve jeton toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.49.90',
                   'business'=>'Başka yerde sınıflandırılmamış ev eşyaları ve ev gereçlerinin toptan ticareti (güneş ve bahçe şemsiyesi, çakmak, kibrit, süpürge fırçası, diş fırçası, saç fırçası, yapma çiçek, mum, bebek arabası, şişme yatak, elektriksiz soba, kuzine, gaz ocağı vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.51.01',
                   'business'=>'Bilgisayar, bilgisayar çevre birimleri ve yazılımlarının toptan ticareti (bilgisayar donanımları, pos cihazları, ATM cihazları vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.52.01',
                   'business'=>'Telekomünikasyon ekipman ve parçalarının toptan ticareti (telefon ve iletişim ekipmanları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.52.02',
                   'business'=>'Elektronik cihaz ve parçalarının toptan ticareti (elektronik valfler, tüpler, yarı iletken cihazlar, mikroçipler, entegre devreler, baskılı devreler, vb.) (seyrüsefer cihazları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.52.04',
                   'business'=>'Boş ses ve görüntü kaset ve disketleri ile manyetik ve optik disk, CD ve DVD toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.52.05',
                   'business'=>'Yön bulma pusulaları ve diğer seyrüsefer alet ve cihazlarının toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.61.02',
                   'business'=>'Tarım, hayvancılık ve ormancılık makine ve ekipmanları ile aksam ve parçalarının toptan ticareti (traktör, tarımsal römork, pulluk, gübre yayma makinesi, mibzer, biçer döver, süt sağma makinesi, kümes hayvanları makineleri, arıcılık makineleri, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.61.03',
                   'business'=>'Çim biçme ve bahçe makine ve ekipmanları ile aksam ve parçalarının toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.62.01',
                   'business'=>'Ağaç işleme takım tezgahları ve parçalarının toptan ticareti (parça tutucuları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.62.02',
                   'business'=>'Metal işleme takım tezgahlarının ve parçalarının toptan ticareti (parça tutucuları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.62.04',
                   'business'=>'Lehimleme veya kaynak yapma için kullanılan makineler ile metallerin veya sinterlenmiş metal karbürlerin sıcak spreylenmesi için kullanılan elektrikli makine ve cihazlar ile parçalarının toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.62.90',
                   'business'=>'Diğer malzemeleri işleme için takım tezgahları ve parçalarının toptan ticareti (parça tutucuları dahil) (ağaç ve metal işlemede kullanılanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.63.01',
                   'business'=>'Bina ve bina dışı inşaat iş makinelerinin toptan ticareti (inşaat pompaları, dozer, greyder, kepçe vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.63.02',
                   'business'=>'Madencilik makinelerinin toptan ticareti (madenler için bocurgatlar, sürekli hareketli elavatörler ve konveyörler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.64.01',
                   'business'=>'Tekstil endüstrisi makineleri ile dikiş ve örgü makinelerinin toptan ticareti (ev tipi olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.64.02',
                   'business'=>'Tekstil endüstrisi makinelerinin, dikiş ve örgü makinelerininin parça ve aksesuarlarının toptan ticareti (ev tipi olanlara ait parça ve aksesuarlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.65.01',
                   'business'=>'Büro mobilyalarının toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.66.01',
                   'business'=>'Diğer büro makine ve ekipmanlarının toptan ticareti (bilgisayar ve bilgisayar çevre donanımları hariç) (hesap makinesi, daktilo, yazarkasa, fotokopi makinesi, stenografi makinesi, kalemtıraş, büro tipi zımba, delgi aleti vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.01',
                   'business'=>'Ulaşım araçları toptan ticareti (gemi, römorkör, lokomotif, hava taşıtları vb. ile bunların parçaları ve konteynerler dahil, motorlu kara taşıtları, motosiklet ve bisikletler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.03',
                   'business'=>'Akümülatör, batarya, pil ve buların parçalarının toptan ticareti (evlerde, motosikletlerde ve motorlu kara taşıtlarında kullanılanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.04',
                   'business'=>'Kompresör ve parçalarının toptan ticareti (soğutma, hava ve diğer amaçlar için)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.05',
                   'business'=>'Silah ve mühimmat toptan ticareti (tabanca, av tüfeği vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.06',
                   'business'=>'Makine ve ekipmanlarla ilgili aksam ve parçaların toptan ticareti (değirmentaşı, bileği taşı, zımpara ve aşındırma ürünleri, konveyör bantları, teknik kullanım için cam ve seramik ürünler, rulmanlar, vb.) (motorlu kara taşıtları için olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.07',
                   'business'=>'Kaldırma ve taşıma ekipmanlarının toptan ticareti (forkliftler, araç liftleri, asansörler, yürüyen merdivenler, konveyörler, vinçler, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.08',
                   'business'=>'Gıda, içecek ve tütün sanayisinde kullanılan makineler ile parçalarının toptan ticareti (şişe vb. kapları temizleme ve doldurma makineleri, süt ürünleri makineleri, içecek ve tütün işleme makineleri, tarımsal ürün kurutucuları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.09',
                   'business'=>'Rüzgar türbinleri, kondansatörler, elektrik yalıtkanları (izolatör), AC/AD/DC motorlar, jeneratörler, yalıtılmış bobin telleri vb. elektrikli makine, cihaz ve aletlerin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.10',
                   'business'=>'Hırsız ve yangın alarmları ile sinyalizasyon ve trafik kontrol ekipmanları toptan ticareti (ev ve arabalar için olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.11',
                   'business'=>'Gaz, sıvı veya elektrik temin veya üretim sayaçları toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.12',
                   'business'=>'Su buharı, hidrolik ve gaz türbinlerinin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.13',
                   'business'=>'Baskül, kantar ve diğer tartı ve ölçüm makineleri toptan ticareti (ev tipi olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.14',
                   'business'=>'X ışınının veya alfa, beta ya da gama ışınlarının kullanımına dayalı cihazların toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.15',
                   'business'=>'Buhar üretim kazanları ve kızgın su kazanlarının toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.16',
                   'business'=>'Zırhlı veya güçlendirilmiş kasalar ve kutular ile kasa daireleri için zırhlı veya güçlendirilmiş kapılar ve kilitli kutular ile para veya evrak kutuları, vb. (adi metalden) toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.17',
                   'business'=>'Yangın söndürücüler, püskürtme tabancaları, buhar veya kum püskürtme makineleri ile benzeri mekanik cihazların toptan ticareti (tarımsal amaçlı kullanılanlar ile taşıtlar için yangın söndürücüler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.18',
                   'business'=>'İş güvenliği amaçlı kişisel koruyucu donanımların toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.69.90',
                   'business'=>'Genel ve özel amaçlı diğer makine, cihaz ve aletlerin toptan ticareti (metal döküm için kalıplar, demir veya çelikten tanklar, variller, fıçılar, kutular ile tıpalar, şişe kapakları, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.71.01',
                   'business'=>'Sıvı yakıtlar ve bunlarla ilgili ürünlerin toptan ticareti (ham petrol, ham yağ, mazot, benzin, biodizel, fuel oil, gaz yağı, madeni yağlar, gres yağları vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'46.71.02',
                   'business'=>'Katı yakıtlar ve bunlarla ilgili ürünlerin toptan ticareti (linyit, taş kömürü, odun kömürü, kok kömürü, yakacak odun vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'46.71.03',
                   'business'=>'Gazlı yakıtlar ve bunlarla ilgili ürünlerin toptan ticareti (LPG (bütan ve propan), tüpgaz, doğalgaz (LNG, CNG) vb. dahil, şebeke üzerinden yapılanlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.01',
                   'business'=>'Demir dışı metal cevherleri ve konsantrelerinin toptan ticareti (alüminyum, bakır, nikel, kurşun, çinko, kalay, vb. cevherleri dahil, uranyum ve toryum cevherleri ile değerli metal cevherleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.02',
                   'business'=>'Birincil formdaki demir dışı metallerin toptan ticareti - kütük, blok, granül, toz, pelet, levha, bar, çubuk, profil vb. formlarda (alüminyum, bakır, nikel, kurşun, çinko, kalay, vb. dahil, altın, gümüş ve platin hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.03',
                   'business'=>'Değerli metal cevherleri ve konsantrelerinin toptan ticareti (altın, gümüş, platin vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.04',
                   'business'=>'Demir cevherleri toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.05',
                   'business'=>'Birincil formdaki demir ve çelik toptan ticareti - kütük (ingot), blok, granül, toz, pelet, parça vb. formlarda (pik demir, manganezli dökme demir, demir, çelik ve çelik alaşımları vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.06',
                   'business'=>'Birincil formdaki değerli metallerin toptan ticareti - kütük, blok, granül, toz, pelet, levha, bar, çubuk, profil vb. formlarda (altın, gümüş, platin vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.07',
                   'business'=>'Uranyum ve toryum cevherleri toptan ticareti',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.08',
                   'business'=>'Demir/çelikten haddelenmiş/soğuk çekilmiş yassı ürünlerin toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.09',
                   'business'=>'Demir/çelikten bar ve çubukların, profillerin, levha kazıkların (palplanş), tüp ve boruların toptan ticareti (filmaşin, inşaat demiri, sondaj borusu, petrol, gaz vb. hatlar için borular, vb. ile tel dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.72.10',
                   'business'=>'Demir/çelikten diğer birincil formdaki ürünlerin toptan ticareti (nervürlü levhalar, sandviç paneller ve demir yolu veya tramvay yolu yapım malzemesi dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.01',
                   'business'=>'Ağacın ilk işlenmesinden elde edilen ürünlerin toptan ticareti (kereste, ağaç yünü, talaş ve yongası, demir yolu ve tramvay traversleri, kontrplak, yonga ve lifli levhalar (mdf, sunta vb.), parke panel, ahşap varil, fıçı ve diğer muhafazalar, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.02',
                   'business'=>'Boya, vernik ve lak toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.03',
                   'business'=>'Düz cam toptan ticareti (pencere camı, cam ayna, emniyet camı, temperli düz cam, çok katlı yalıtım camları, camdan döşeme blokları, tuğlalar vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.05',
                   'business'=>'Banyo küvetleri, lavabolar, eviyeler, klozet kapakları, tuvalet taşı ve rezervuarları ile seramikten karo ve fayans vb. sıhhi ürünlerin toptan ticareti (seramik, cam, mermer, plastik, mermerit, demir, çelik, bakır veya alüminyum vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.06',
                   'business'=>'Metalden prefabrik yapıların, köprülerin, köprü parçalarının, kulelerin, kafes direklerin, konstrüksiyon elemanlarının, diğer yapıların ve yapı elemanlarının toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.07',
                   'business'=>'Çimento, alçı, harç, kireç, mozaik vb. inşaat malzemeleri toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.08',
                   'business'=>'Tuğla, kiremit, briket, kaldırım taşı vb. inşaat malzemeleri toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.09',
                   'business'=>'Taş, kum, çakıl, mıcır, kil, kaolin vb. inşaat malzemeleri toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.10',
                   'business'=>'İşlenmiş mermer, traverten, kaymaktaşı (su mermeri) ve bunlardan yapılmış ürünlerin toptan ticareti (levha halinde olanlar ile lavabo vb. sıhhi ürünler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.11',
                   'business'=>'Mermer, granit, kayağan taşı, kum taşı vb. toptan ticareti (işlenmemiş veya blok halde olanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.12',
                   'business'=>'İşlenmemiş ağaç (tomruk-ham haldeki) toptan ticareti (orman ağaçları, endüstriyel odunlar vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.13',
                   'business'=>'Metalden kapı, pencere ve bunların kasaları ile kapı eşiklerinin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.14',
                   'business'=>'Ahşap kapı, pencere ve bunların kasaları ile kapı eşiklerinin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.15',
                   'business'=>'Plastik kapı, pencere ve bunların kasaları ile kapı eşikleri, panjurlar, jaluziler, storlar ve benzeri eşyaların toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.16',
                   'business'=>'Betondan, çimentodan ve suni taştan prefabrik yapıların, yapı elemanlarının ve diğer ürünlerin toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.17',
                   'business'=>'Plastikten prefabrik yapılar ve yapı elemanlarının toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.18',
                   'business'=>'Ahşaptan prefabrik yapıların ve yapı elemanlarının toptan ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.19',
                   'business'=>'Alçı ve alçı esaslı bileşenlerden inşaat amaçlı ürünlerin toptan ticareti (kartonpiyer, panel, levha vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.20',
                   'business'=>'Plastikten inşaat amaçlı tabakalar, levhalar, filmler, folyolar, şeritler ve borular ile asfalt vb. malzemeden çatı kaplama ürünlerinin toptan ticareti (inşaat, sera vb. için naylon örtü, shingle, mantolama amaçlı strafor, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.21',
                   'business'=>'Duvar kağıdı, tekstil duvar kaplamaları, plastikten zemin, duvar veya tavan kaplamalarının toptan ticareti (paspas, kauçuk paspas, yer muşambası, marley vb. yer kaplamaları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.22',
                   'business'=>'İnşaatlarda izolasyon amaçlı kullanılan malzemelerin toptan ticareti (rulolar halinde cam yünü, taş yünü, bitüm esaslı malzemeler, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.23',
                   'business'=>'Masif, lamine ve laminant parke toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.73.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer inşaat malzemesi toptan ticareti (merdiven, korkuluk, plastik depolar, seramik borular vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.74.01',
                   'business'=>'Hırdavat (nalburiye) malzemesi ve el aletleri toptan ticareti (çivi, raptiye, vida, adi metalden kilit, menteşe, bağlantı parçası, çekiç, testere, pense, tornavida, takım tezgahı uçları, çengel, halka, perçin, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.74.03',
                   'business'=>'Sıhhi tesisat ve ısıtma tesisatı malzemesi toptan ticareti (lavabo musluğu, vana, valf, tıkaç, t-parçaları, bağlantılar, vb.) (kombiler ve radyatörler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.74.04',
                   'business'=>'Demirden veya çelikten merkezi ısıtma radyatörleri, merkezi ısıtma kazanları (kombiler dahil) ile bunların parçalarının toptan ticareti (buhar jeneratörleri ve kızgın su üreten kazanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.74.05',
                   'business'=>'Demir veya çelikten dikenli tel, bakır veya alüminyumdan örgülü tel, kablo, örme şerit ve benzerleri (elektrik yalıtımı olanlar hariç), demir, çelik veya bakır tellerden mensucat, ızgara, ağ, kafeslik ve çit toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.74.06',
                   'business'=>'Metal rezervuar, tank, fıçı ve benzeri konteyner toptan ticareti, kapasitesi > 300 litre olanlar (merkezi ısıtma amaçlı olanlar ile mekanik veya termal ekipmanlı olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.74.07',
                   'business'=>'Tarım ve ormancılık alet ve malzemeleri toptan ticareti (balta, kazma, orak, tırpan, vb. dahil, tarımsal amaçlı makine ve ekipmanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.75.01',
                   'business'=>'Endüstriyel kimyasalların toptan ticareti (anilin, matbaa mürekkebi, kimyasal yapıştırıcı, havai fişek, boyama maddeleri, sentetik reçine, metil alkol, parafin, esans ve tatlandırıcı, soda, sanayi tuzu, parafin, nitrik asit, amonyak, sanayi gazları vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'46.75.02',
                   'business'=>'Suni gübrelerin toptan ticareti (gübre mineralleri, gübre ve azot bileşikleri ve turba ile amonyum sülfat, amonyum nitrat, sodyum nitrat, potasyum nitrat vb. dahil, nitrik asit, sülfonitrik asit ve amonyak hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.75.03',
                   'business'=>'Hayvansal veya bitkisel gübrelerin toptan ticareti (kapalı alanda yapılan ticaret)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'46.75.04',
                   'business'=>'Zirai kimyasal ürünlerin toptan ticareti (haşere ilaçları, yabancı ot ilaçları, dezenfektanlar, mantar ilaçları, çimlenmeyi önleyici ürünler, bitki gelişimini düzenleyiciler ve diğer zirai kimyasal ürünler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.75.05',
                   'business'=>'Hayvansal veya bitkisel gübrelerin toptan ticareti (açık alanda yapılan ticaret)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.76.01',
                   'business'=>'Tekstil elyafı toptan ticareti (bükülmemiş ham ipek, yün, hayvan kılı, kardelenmiş veya taranmış pamuk, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.76.02',
                   'business'=>'Dökme halde kağıt ve mukavva toptan ticareti (dökme gazete kağıdı, sigara kağıdı, mukavva, karbon kağıdı, tuvalet kağıdı, peçete, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.76.03',
                   'business'=>'İşlenmemiş inci, değerli ve yarı değerli taşların toptan ticareti (sanayi tipi elmaslar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.76.04',
                   'business'=>'Birincil formdaki plastik ve kauçuk toptan ticareti (etilen, stiren, vinil klorür, akrilik, vb. polimerler ile birincil formda sentetik ve rejenere kauçuklar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.76.05',
                   'business'=>'Sanayide kullanım amaçlı plastik poşet, çanta, torba, çuval, vb. ambalaj malzemelerinin toptan ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.76.90',
                   'business'=>'Başka yerde sınıflandırılmamış ara ürün (tarım hariç) toptan ticareti (korindon, lastik kord bezi, teknik kullanım amaçlı tekstil ürünleri (hortum, konveyör bandı, elek bezi), plastik veya kauçuk levha ve boru, sanayi elması, gıda dışı buz, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.77.01',
                   'business'=>'Atık ve hurda toptan ticareti (metal olanlar) (kağıt, cam, plastik vb. ikincil hammaddeler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.77.02',
                   'business'=>'Atık ve hurda toptan ticareti (kağıt, cam, plastik vb. olanlar) (metal olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'46.90.01',
                   'business'=>'Belirli bir mala tahsis edilmemiş mağazalardaki toptan ticaret (çeşitli malların toptan satışı) (bir başka ülkeyle yapılan toptan ticaret hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'46.90.04',
                   'business'=>'Belirli bir mala tahsis edilmemiş mağazalardaki bir başka ülkeyle yapılan toptan ticaret (çeşitli malların toptan satışı)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.11.01',
                   'business'=>'Bakkal ve marketlerde yapılan perakende ticaret (belirli bir mala tahsis edilmemiş mağazalarda gıda, içecek veya tütün ağırlıklı perakende ticaret)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.11.02',
                   'business'=>'Süpermarket ve hipermarketlerde yapılan perakende ticaret (belirli bir mala tahsis edilmemiş mağazalarda gıda, içecek veya tütün ağırlıklı perakende ticaret)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.11.05',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Belirli bir mala tahsis edilmemiş büfelerde gıda, alkollü ve alkolsüz içecek veya tütün ağırlıklı perakende ticaret',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.11.99',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Bys. belirli bir mala tahsis edilmemiş mağazalarda gıda, içecek veya tütün ağırlıklı perakende ticaret (tanzim satış ve gıda tüketim kooperatifleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.19.01',
                   'business'=>'Belirli bir mala tahsis edilmemiş mağazalarda yapılan diğer perakende ticaret (giyim eşyası, mobilya, bilgisayar, hırdavat, kozmetik, mücevher, oyuncak vb. reyonları olan mağazalar (gıda, içecek ve tütün ağırlıklı olmayanlar))',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.21.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda taze sebze ve meyve perakende ticareti (manav ürünleri ile kültür mantarı dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.21.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda işlenmiş ve korunmuş meyve ve sebzelerin perakende ticareti (turşular ile dondurulmuş, salamura edilmiş, konserve ve kurutulmuş sebze ve meyveler vb. dahil, baklagil, zeytin ve kuruyemiş hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.21.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda zeytin perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.21.04',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kuru bakliyat ürünleri perakende ticareti (fasulye, mercimek, nohut, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.21.05',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kuruyemiş perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.22.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda et ürünleri perakende ticareti (sosis, salam, sucuk, pastırma vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.22.05',
                   'business'=>'(Ek satır:RG-8/3/2020-31062) Belirli bir mala tahsis edilmiş mağazalarda et (av ve kümes hayvanı etleri dahil) perakende ticareti (kasapların faaliyetleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.22.06',
                   'business'=>'(Ek satır:RG-8/3/2020-31062) Belirli bir mala tahsis edilmiş mağazalarda sakatat perakende ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.23.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda balık, kabuklu hayvanlar ve yumuşakçaların perakende ticareti (canlı, taze, soğutulmuş ve dondurulmuş olanlar ile balık filetosu gibi bunlardan yapılan ürünler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.24.01',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Belirli bir mala tahsis edilmiş mağazalarda (büfeler dahil) ekmek, pasta ve unlu mamullerin perakende ticareti (ekmek, bisküvi, pasta, çörek, dondurma külahı vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.24.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda çikolata ve şekerleme perakende ticareti (bonbon şekeri, akide şekeri, lokum, helva vb. dahil, dondurma hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.24.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda dondurma, aromalı yenilebilir buzlar vb. perakende ticareti (pastanelerde verilen hizmetler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.25.01',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Belirli bir mala tahsis edilmiş mağazalarda (büfeler dahil) alkollü ve alkolsüz içeceklerin perakende ticareti (rakı, bira gibi alkollü içkiler ile meyve suyu, şıra, şalgam suyu, gazlı içecekler vb. dahil; içme suyu hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.25.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda içme suyu perakende ticareti (şişelendirilmiş veya damacanaya konulmuş olanlar dahil, şebeke suyu hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.26.01',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Belirli bir mala tahsis edilmiş mağazalarda (büfeler dahil) tütün ve tütün ürünleri perakende ticareti (nargile tütünü, pipo tütünü, sigara, puro vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.26.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda pipo, nargile, sigara ağızlığı, vb. perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.29.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda süt ve süt ürünleri perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.29.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda toz, kesme ve kristal şeker perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.29.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda çay, kahve, kakao ve baharat perakende ticareti (bitki çayları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.29.04',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda yenilebilir katı ve sıvı yağların perakende ticareti (yemeklik yağ dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.29.06',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda hububat, un ve zahire ürünleri perakende ticareti (bulgur, pirinç, mısır, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.29.11',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda yumurta perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.29.12',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda homojenize gıda müstahzarları ve diyetetik ürünlerin perakende ticareti (glüten içermeyen gıda maddeleri, sodyum içermeyen tuzlar vb. ile besin yönünden zenginleştirilmiş sporcu gıdaları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.29.90',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda başka yerde sınıflandırılmamış diğer gıda ürünlerinin perakende ticareti (hazır yemek, gıda tuzu, sos, maya, çorba, pekmez, reçel, fındık ezmesi, makarna, bal, ev hayvanı yemleri vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.30.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda motorlu kara taşıtı ve motosiklet yakıtının (benzin, mazot, dizel, biodizel, LPG, CNG vb.) perakende ticareti',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'47.30.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda motorlu kara taşıtları için yağlama ve soğutma ürünlerinin perakende ticareti (madeni yağ, antifriz vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.41.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bilgisayarların, çevre donanımlarının ve yazılımların perakende ticareti (video oyun konsolları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.42.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda telekomünikasyon teçhizatının perakende ticareti (telefon, cep telefonu, faks vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.43.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda ses ve görüntü cihazlarının ve bunların parçalarının perakende ticareti (radyo, televizyon, müzik seti, teyp, DVD oynatıcı, mp3 çalar, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.51.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kumaş perakende ticareti (manifatura ürünleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.51.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda tuhafiye ürünleri perakende ticareti (iğne, dikiş ipliği, orlon, düğme, fermuar, çıtçıt, fisto, dantel, gipür vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.51.04',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda goblen veya nakış yapımı için temel materyallerin perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.51.05',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda evde kullanılan tekstil takımları ve çeşitli tekstil malzemesinden ev eşyaları perakende ticareti (çarşaf, yatak takımı, yastık kılıfı, masa örtüsü, havlu, battaniye, yorgan, diğer mefruşatlar vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.51.90',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda diğer tekstil ürünleri perakende ticareti (tuhafiye ürünleri ve dikiş ipliği hariç; diğer iplikler, gazlı dokumalar, gaz lambası fitili, araba örtüleri vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda çimento, alçı, harç, kireç, tuğla, kiremit, briket, taş, kum, çakıl vb. inşaat malzemeleri perakende ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda hırdavat (nalburiye) malzemesi ve el aletleri perakende ticareti (çivi, vida, kilit, menteşe, çekiç, testere, pense, tornavida, takım tezgahı uçları, perçin, vb.) (tarım ve bahçecilik el aletleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda boya, vernik ve lak perakende ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.04',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda düz cam perakende ticareti (pencere camı, cam ayna, emniyet camı, temperli düz cam, çok katlı yalıtım camları, camdan döşeme blokları, cam tuğlalar vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.05',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda metalden kapı, pencere ve bunların kasaları ile kapı eşiklerinin perakende ticareti (çelik kapı dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.06',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda sıhhi tesisat ve ısıtma tesisatı malzemesi perakende ticareti (lavabo musluğu, vana, valf, tıkaç, t-parçaları, bağlantılar, vb. dahil) (kombiler ve radyatörler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.09',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda plastik kapı, pencere ve bunların kasaları ile kapı eşikleri, panjurlar, jaluziler, storlar ve benzeri eşyaların perakende ticareti (PVC olanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.10',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda ağacın ilk işlenmesinden elde edilen ürünlerin perakende ticareti (kereste, ağaç talaşı ve yongası, kontrplak, yonga ve lifli levhalar (mdf, sunta vb.), parke, ahşap varil, fıçı ve diğer muhafazalar, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.11',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda banyo küveti, lavabo, klozet kapağı, tuvalet taşı ve rezervuarı ile seramikten karo ve fayans vb. sıhhi ürünlerin perakende ticareti (seramik, cam, mermerit, plastik, demir, çelik, bakır vb. dahil, mermer hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.13',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda demir/çelikten bar ve çubukların, profillerin, tüp ve boruların perakende ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.15',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda demirden veya çelikten merkezi ısıtma radyatörleri, merkezi ısıtma kazanları (kombiler dahil) ile bunların parçalarının perakende ticareti (buhar jeneratörleri ve kızgın su üreten kazanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.16',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda çim biçme ve bahçe ekipmanları perakende ticareti (kar küreyiciler dahil) (tarım ve bahçecilikte kullanılan el aletleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.17',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda ahşap kapı, pencere ve bunların kasaları ile kapı eşiklerinin perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.18',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda prefabrik yapılar ve yapı elemanlarının perakende ticareti (metalden, betondan, plastikten, ahşaptan vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.19',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda işlenmiş mermer, traverten, kaymaktaşı (su mermeri) ve bunlardan yapılmış ürünlerin perakende ticareti (levha halinde olanlar ile mermer lavabo vb. sıhhi ürünler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.20',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda alçı ve alçı esaslı bileşenlerden inşaat amaçlı ürünlerin perakende ticareti (kartonpiyer, panel, levha vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.21',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda plastikten inşaat amaçlı levhalar, folyolar, şeritler ve borular ile asfalt vb. malzemeden çatı kaplama ürünlerinin perakende ticareti (inşaat için naylon örtü, shıngle, mantolama amaçlı strafor vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.22',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda masif, lamine ve laminant parke perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.52.90',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda başka yerde sınıflandırılmamış inşaat malzemesi perakende ticareti (ev tipi lehim ve kaynak makinesi, merdiven, korkuluk, metal veya plastik depo, seramik boru vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.53.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda perde, iç stor, perde veya yatak saçağı ve farbelası perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.53.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda halı, kilim ve diğer tekstil yer döşemeleri perakende ticareti (keçeden olanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.53.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda duvar kağıdı, tekstil duvar kaplamaları, kauçuk yer döşemeleri ve paspaslar ile plastik zemin, duvar veya tavan kaplamaları perakende ticareti (linolyum gibi elastiki zemin kaplamaları, marley, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.54.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda beyaz eşya ve elektrikli küçük ev aleti perakende ticareti (buzdolabı, çamaşır makinesi, su ısıtıcı, vantilatör, davlumbaz, tost makinesi, mutfak robotu, vb.) (radyo, televizyon ve fotoğrafçılık ürünleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.54.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda evde kullanım amaçlı elektrik tesisat malzemesi perakende ticareti (transformatör, sigorta, röle, pil ve batarya, elektrik akümülatörü, koaksiyel kablo, elektrik iletkenleri, anahtar, duy, bys. fiş, priz, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.54.90',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Belirli bir mala tahsis edilmiş mağazalarda bys. elektrikli ev aletleri perakende ticareti (ev tipi hırsız ve yangın alarmı, tıraş, dikiş, dokuma ve örgü makinesi, fırın, soba, radyatör, ev tipi klima vb.) (radyo, TV ve fotoğrafçılık ürünleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda elektrikli olmayan ev aletleri ile çatal bıçak takımı, tabak-çanak, cam eşya, porselen ve çömlek ürünleri gibi züccaciye ürünlerinin perakende ticareti (metal tabak-çanak hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda aydınlatma teçhizatı perakende ticareti (lambalar, aydınlatma armatürleri, avize, abajur, ışıklı tabela, portatif elektrik lambaları vb.) (elektrik malzemeleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda ev mobilyalarının ve aksesuarlarının perakende ticareti (baza, somya, karyola dahil, hasır ve sepetçi söğüdü gibi malzemelerden olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.04',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda ahşap, mantar ve hasır eşyaların perakende ticareti (ahşap sofra ve mutfak eşyaları, ahşap çerçeveler, sepetçi ürünleri, mücevher vb. için ahşap kutular, ahşap biblolar, mantar ürünler, hasır vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.05',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda müzik aletleri ve müzik partisyonu (nota kağıdı) perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.06',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda metal sofra ve mutfak eşyası perakende ticareti (düdüklü tencere, tencere, cezve, çanak vb. dahil, bakır olanlar ile çatal-bıçak takımı hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.07',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda plastikten sofra, mutfak, tuvalet ve diğer ev eşyalarının perakende ticareti (plastikten tabak, bardak, torba, kutu, şişe, matara, makara, bobin, mobilya parçaları, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.08',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda büro mobilyaları ve aksesuarlarının perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.09',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bakır eşya, bakır sofra ve mutfak eşyası perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.10',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bahçe mobilyalarının perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.11',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda yatak perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.12',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kağıt veya mukavvadan tuvalet kağıdı, kağıt mendil, kağıt havlular, kağıt masa örtüsü ve peçeteler ile kağıt veya mukavvadan tepsi, tabak, kase, bardak ve benzerlerinin perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.13',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda elektriksiz hava ısıtıcıları veya sıcak hava dağıtıcılarının perakende ticareti (soba, kuzine vb. ile parçaları)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.14',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda elektriksiz fırın ve ocaklar ile şofben ve termosifon gibi su ısıtıcıları vb.lerinin perakende ticareti (gaz, sıvı veya katı yakıtlı)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.59.90',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bys. diğer ev eşyalarının perakende ticareti (ev tipi tartı ve basküller, güneş ve bahçe şemsiyeleri, ev tipi çakmaklar ile ev temizliği için süpürge ve fırçalar, ev tipi metal kutu, kasa ve çerçeveler, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.61.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kitap perakende ticareti (kitap, ansiklopedi, rehber vb. ile CD ve DVD ortamındaki kitaplar vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.62.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kırtasiye ürünlerinin perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.62.03',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Belirli bir mala tahsis edilmiş mağazalarda (büfeler dahil) gazete ve dergilerin perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.63.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda müzik ve video kayıtlarının perakende ticareti (dolu ses, müzik ve video kasetleri, CD/DVD vb. ürünler ile boş olanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.64.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bys. avcılık ve balıkçılık teçhizatı ile malzemelerinin perakende ticareti (sportif/avcılık amaçlı tüfekler ve mühimmatları ile olta çubuğu, iğnesi ve mantarları ile yapma balıklar, yapma kuşlar, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.64.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda motorlu taşıtlar dışındaki eğlence ve spor amaçlı taşıtların perakende ticareti (tekne, yelkenli, kano, kayık, bot, balon, zeplin, vb. ile deniz taşıtları için dıştan takmalı motorlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.64.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kamp malzemeleri perakende ticareti (çadır ve uyku tulumları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.64.05',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bisiklet perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.64.06',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda spor ayakkabısı perakende ticareti (kayak botları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.64.07',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda jimnastik ve atletizm eşya ve ekipmanları ile form tutma merkezlerine ait eşya ve ekipmanların perakende ticareti (halter, yürüme bantları, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.64.90',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda diğer spor malzemelerinin perakende ticareti (paraşütler, rotoşütler, cankurtaran yelekleri, cankurtaran simitleri, spor amaçlı ip ve urganlar, binicilik kamçıları, kayak ve patenler vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.65.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda oyun ve oyuncakların perakende ticareti (her türlü materyalden yapılmış bebek, oyun kağıdı, havai fişek, jetonla çalışan diğer oyun makineleri, sihirbazlık veya şaka malzemeleri, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bebek ve çocuk giyim eşyası perakende ticareti (bebek iç giyim eşyaları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda giysi aksesuarları perakende ticareti (eldiven, kravat, şapka, eşarp, şal, mendil, kemer, pantolon askısı, şemsiye, baston, vb. (güneş şemsiyeleri hariç))',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kürklü deriden giyim eşyalarının perakende ticareti (işlenmiş kürklü deriler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.04',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda diğer dış giyim perakende satışı (palto, kaban, anorak, takım elbise, ceket, pantolon, şort (tekstil kumaşından veya örgü ve tığ işi))',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.05',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda iç giyim ve çorap perakende ticareti (gömlek, külot, slip, gecelik, pijama, bornoz, ropdöşambır, kombinezon, iç etek, jüpon, sabahlık, atlet, fanila, sütyen, korse, tişört, külotlu çorap, tayt, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.07',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda deri veya deri bileşimli giyim eşyası perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.08',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda süveter, kazak, hırka, yelek ve benzeri eşyaların perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.09',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda iş giysisi perakende ticareti (endüstriyel ve mesleki pantolonlar, bahçıvan tipi iş tulumları, binici/külot pantolonları, şortlar, takımlar, ceketler ve blazerler, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.11',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda spor giysisi perakende ticareti (eşofman, mayo, kayak giysisi, dağcılık kıyafetleri, vb)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.12',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda gelinlik perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.71.90',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bys. giyim eşyası perakende ticareti (plastikten, vulkanize kauçuktan, kağıttan, dokusuz kumaştan ya da emdirilmiş veya kaplanmış tekstil kumaşından giysiler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.72.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda ayakkabı, terlik vb. perakende ticareti (kavafiye dahil, spor ayakkabıları ile tamamı tekstilden olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.72.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bavul, el çantası ve diğer seyahat aksesuarlarının perakende ticareti (deriden, deri bileşimlerinden, plastik levhadan, tekstil malzemesinden, vulkanize (ebonit) elyaf veya mukavvadan)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.72.05',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda saraciye ürünleri ve koşum takımı perakende ticareti (eyer, semer, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.72.06',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda ayakkabı parçaları perakende ticareti (deri, ayakkabı sayası, topuk, topuk yastığı, ayakkabı bağları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.72.90',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda başka yerde sınıflandırılmamış deriden veya deri bileşimlerinden diğer ürünlerin perakende ticareti (deri veya deri bileşimli giyim eşyası hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.73.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda insan sağlığına yönelik eczacılık ürünlerinin perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.73.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda hayvan sağlığına yönelik ilaç, aşı, vb. ürünlerin perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.74.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda tıbbi ve ortopedik ürünlerin perakende ticareti (gözlük hariç diğer medikal ürünler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.75.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kozmetik ve kişisel bakım malzemelerinin perakende ticareti (diş fırçaları, saç fırçaları, elektriksiz tıraş makineleri, jilet, ustura, parfümeri ürünleri ve kolonya, doğal sünger, sabun dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.76.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda ev hayvanları ile bunların mama ve gıdalarının perakende ticareti (süs balıkları, köpek, kuş, hamster, kaplumbağa vb., akvaryum, kafes ve kedi ve köpekler için tasmalar vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.76.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda çiçek, bitki ve tohum perakende ticareti (meyve, sebze ve çiçek tohumları, kesme çiçek, dikim bitkileri, canlı bitkiler, yumrular ve kökler, aşı kalemleri, mantar miseli, ağaç fidanları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.76.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda gübre ve zirai kimyasal ürünlerin perakende ticareti (turba, kimyasal gübreler, hayvansal veya bitkisel gübreler, haşere ilaçları, yabancı ot ilaçları vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.77.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda altın ve diğer değerli metallerden takı, eşya ve mücevherat perakende ticareti (kuyumculuk ürünleri perakende ticareti dahil, gümüşten olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.77.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda gümüş takı, eşya ve mücevherat perakende ticareti (gümüşçü ürünleri perakende ticareti)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.77.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda saat (kol, masa, duvar vb. saatler ile kronometreler) perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.77.05',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda doğal inciden veya kültür incisinden ürünler ile değerli ya da yarı değerli taşlardan ürünlerin perakende ticareti (pırlanta, yakut, zümrüt, safir vb.den yapılan ürünler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda pul ve jeton perakende ticareti (özel günlerde çıkarılan pul ve paraların perakende ticareti dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.02',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kömür ve yakacak odun perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda gözlük, kontak lens, gözlük camı vb. perakende ticareti (gözlükçülerin hizmetleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.04',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda hediyelik eşyaların, elişi ürünlerin ve imitasyon takıların perakende ticareti (sanat eserleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.05',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda silah ve mühimmat perakende ticareti (sportif ve avcılık amaçlı olanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.06',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda sanat eserlerinin perakende ticareti (ticari sanat galerilerinin hizmetleri ile ressamların, gravürcülerin, heykeltıraşların, bestekarların ve diğer sanatçıların orijinal çalışmaları) (antika eşyalar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.07',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda optik ve hassas aletlerin perakende ticareti (mikroskop, dürbün ve pusula dahil, gözlük camı, fotografik ürünler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.08',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda büro makine ve ekipmanlarının perakende ticareti (hesaplama makineleri, daktilolar, fotokopi makineleri, tarama ve faks cihazları, çizim masaları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.09',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda evlerde kullanılan fuel oil perakende ticareti (dökme olanlar ile müşterinin istediği yere ulaştırılarak yapılan doğrudan fuel oil satışı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.10',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda evlerde kullanılan tüpgaz perakende ticareti',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.15',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda temizlik malzemesi perakende ticareti (Arap sabunu, deterjan, yumuşatıcılar, şampuanlar vb. dahil, kişisel hijyen için olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.16',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda yün, tiftik vb. perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.22',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda fotoğrafçılık malzemeleri ve aletlerinin perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.23',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda yangın söndürücüler ve ekipmanlarının perakende ticareti (arabalar için olanlar ve yüksek basınçlı olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.26',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda yapma çiçek, yaprak ve meyveler ile mum perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.27',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bebek arabaları ve bunların parçalarının perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.28',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda canlı büyükbaş ve küçükbaş hayvanların perakende ticareti (ev hayvanları hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.29',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda canlı kümes hayvanlarının perakende ticareti',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.30',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda tekstilden çuval, torba, vb. perakende ticareti (eşya paketleme amacıyla kullanılanlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.78.90',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda bys. diğer yeni (kullanılmamış) malların perakende ticareti (sentetik sünger dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.79.01',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda antika perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.79.03',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda ikinci el kitapların perakende ticareti (sahafların faaliyetleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.79.04',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kullanılmış mobilya, elektrikli ve elektronik ev eşyası perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.79.05',
                   'business'=>'Kullanılmış malların müzayede salonları vasıtasıyla perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.79.06',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda kullanılmış giysiler ve aksesuarlarının perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.79.90',
                   'business'=>'Belirli bir mala tahsis edilmiş mağazalarda diğer ikinci el eşya perakende ticareti (ikinci el motorlu kara taşıtları ve motosiklet parçaları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.81.02',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Tezgahlar ve pazar yerleri vasıtasıyla sebze ve meyve (taze veya işlenmiş) (zeytin dahil) perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.81.05',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Tezgahlar ve pazar yerleri vasıtasıyla yenilebilir katı ve sıvı yağ (tereyağı hariç) perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.81.08',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla balık ve diğer su ürünleri perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.81.09',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla çay, kahve, kakao, baharat perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.81.10',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla fırın ürünleri perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.81.11',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla şekerleme perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.81.12',
                   'business'=>'Seyyar olarak ve motorlu araçlarla gıda ürünleri ve içeceklerin (alkollü içecekler hariç) perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.81.13',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Tezgahlar ve pazar yerleri vasıtasıyla şarküteri ürünleri, süt ve süt ürünleri ile yumurta perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.81.90',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Tezgahlar ve pazar yerleri vasıtasıyla diğer gıda ürünleri (bal, un, tahıl, pirinç, bakliyat vb. dahil) perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.82.01',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla iç giyim eşyası, dış giyim eşyası, çorap, giysi aksesuarı ve ayakkabı perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.82.02',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla tuhafiye, manifatura ve mefruşat ürünleri perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.82.03',
                   'business'=>'Seyyar olarak ve motorlu araçlarla tekstil, giyim eşyası ve ayakkabı perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.01',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla ev ve büro mobilyaları (ağaç, metal, vb.) perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.04',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla çiçek, bitki ve bitki tohumu (çiçek toprağı ve saksıları dahil) perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.05',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Tezgahlar ve pazar yerleri vasıtasıyla elektrikli alet, cihaz ve elektrik malzemeleri, el aletleri ile hırdavat perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.10',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla mutfak eşyaları ile banyo ve tuvalette kullanılan eşyaların perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.18',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla halı, kilim, vb. perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.19',
                   'business'=>'Seyyar olarak ve motorlu araçlarla diğer malların perakende ticareti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.20',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) (Değişik satır:RG-11/8/2023-32276) Tezgahlar ve pazar yerleri vasıtasıyla canlı büyük ve küçükbaş hayvan, canlı kümes hayvanı, ev hayvanı ve yemlerinin perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.21',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Tezgahlar ve pazar yerleri vasıtasıyla imitasyon takı, süs eşyası, oyun, oyuncak, turistik ve hediyelik eşya perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.22',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Tezgahlar ve pazar yerleri vasıtasıyla kişisel bakım ve kozmetik ürünleri ile temizlik ürünleri perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.89.90',
                   'business'=>'Tezgahlar ve pazar yerleri vasıtasıyla bys. diğer malların perakende ticareti (seyyar satıcılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.91.14',
                   'business'=>'Radyo, TV, posta yoluyla veya internet üzerinden yapılan perakende ticaret',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.99.10',
                   'business'=>'Otomatik satış makineleri ile yapılan perakende ticaret',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.99.11',
                   'business'=>'Mağaza, tezgah, pazar yeri dışında yapılan perakende ticaret (ev ev dolaşarak veya komisyoncular tarafından perakende olarak yapılanlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'47.99.12',
                   'business'=>'Mağaza, tezgah, pazar yeri dışında müşterinin istediği yere ulaştırılarak yapılan doğrudan yakıt satışı (kalorifer yakıtı, yakacak odun, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'49.10.01',
                   'business'=>'Demir yolu ile şehirler arası yolcu taşımacılığı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.20.01',
                   'business'=>'Demir yolu ile şehirler arası ve şehiriçi yük taşımacılığı (donmuş ürünlerin, petrol ürünlerinin, dökme sıvı ve gazların, kuru yüklerin, vb. taşınması)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'49.31.01',
                   'business'=>'Demir yolu, metro, tramvay, vb. ile şehir içi ve banliyö yolcu taşımacılığı (şehir içi ve banliyö taşımacılığının parçası olan füniküler, teleferik, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.31.04',
                   'business'=>'Halk otobüsü/otobüs ile yapılan şehir içi ve banliyö yolcu taşımacılığı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.31.05',
                   'business'=>'Belediye otobüsü ile yapılan şehir içi ve banliyö yolcu taşımacılığı (belediyenin sağladığı havaalanı otobüsü dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.31.06',
                   'business'=>'Minibüs ve dolmuş ile yapılan şehir içi ve banliyö yolcu taşımacılığı (belirlenmiş güzergahlarda)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.31.90',
                   'business'=>'Kara yolu taşımacılığı ile yapılan diğer şehir içi ve banliyö yolcu taşımacılığı (troleybüs, vb. dahil, halk otobüsü, minibüs, belediye otobüsü ile havaalanı otobüsü hariç) (belirlenmiş güzergahlarda)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.32.01',
                   'business'=>'Taksi ile yolcu taşımacılığı (dolmuşlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.32.02',
                   'business'=>'Sürücüsü ile birlikte diğer özel araç (otomobil, limuzin, vb. dahil, minibüs, otobüs vb. hariç) kiralama faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.39.01',
                   'business'=>'Şehirler arası tarifeli kara yolu yolcu taşımacılığı (şehirler arası otobüs ve tramvay, şehirler arası personel ve okul servisleri, vb. dahil, şehir içi ve şehirler arası havaalanı servisleri ile şehir içi havaalanı otobüsleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.39.02',
                   'business'=>'Kara yolu şehir içi ve şehirler arası havaalanı servisleri ile yolcu taşımacılığı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.39.03',
                   'business'=>'Şehir içi, banliyö ve kırsal alanlarda kara yolu ile personel, öğrenci, vb. grup taşımacılığı (şehir içi personel ve okul servisleri, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.39.04',
                   'business'=>'Kara yolu (otobüs, vb.) ile uluslararası yolcu taşımacılığı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.39.06',
                   'business'=>'Sürücüsü ile birlikte otobüs, minibüs vb. kiralama (belirlenmemiş güzergahlar için) ile geziler için kara yolu yolcu taşımacılığı (şehir turu otobüsleri, gezi otobüsü, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.39.08',
                   'business'=>'İnsanlar veya hayvanlar tarafından çekilen taşıtlarla veya yük hayvanları ile yolcu taşımacılığı (fayton, bisiklet, vb. ile yolcu taşımacılığı)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.39.90',
                   'business'=>'Kablolu trenler (füniküler), teleferikler ve telesiyejler (şehir içi, banliyö veya metropol transit sistemlerin parçası olanlar hariç) ve diğer şoförlü taşıtlarla başka yerde sınıflandırılmamış kara yolu yolcu taşımacılığı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.01',
                   'business'=>'Karayolu ile şehir içi yük taşımacılığı (gıda, sıvı, kuru yük, vb.) (gaz ve petrol ürünleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.02',
                   'business'=>'Kara yolu ile şehirler arası yük taşımacılığı (gıda, sıvı, kuru yük, vb.) (gaz ve petrol ürünleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.03',
                   'business'=>'Kara yolu ile uluslararası yük taşımacılığı (gıda, sıvı, kuru yük, vb.) (gaz ve petrol ürünleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.05',
                   'business'=>'Kara yolu ile canlı hayvan taşımacılığı (çiftlik hayvanları, kümes hayvanları, vahşi hayvanlar vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.06',
                   'business'=>'Şoförü ile birlikte kamyon ve diğer motorlu yük taşıma araçlarının kiralanması',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.07',
                   'business'=>'Karayolu ile insan veya hayvan tarafından çekilen taşıtlarla yük taşımacılığı (tornet, at arabası vb. ile yük taşımacılığı)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.08',
                   'business'=>'Kara yolu ile şehir içi yük taşımacılığı (gaz ve petrol ürünleri, kimyasal ürünler vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.09',
                   'business'=>'Kara yolu ile şehirler arası yük taşımacılığı (gaz ve petrol ürünleri, kimyasal ürünler vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.10',
                   'business'=>'Kara yolu ile uluslararası yük taşımacılığı (gaz ve petrol ürünleri, kimyasal ürünler vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'49.41.90',
                   'business'=>'Kara yolu ile çeşitli taşıma türüne uygun konteyner ve diğer yük taşımacılığı hizmetleri (evden eve nakliyat, vb. hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'49.42.01',
                   'business'=>'Kara yolu taşımacılığı ile ev ve iş yerlerinin taşınması (evden eve nakliyat, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'49.50.01',
                   'business'=>'Boru hattı ile ham petrol, rafine petrol ve petrol ürünleri taşımacılığı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'49.50.03',
                   'business'=>'Boru hattı pompa istasyonlarını işletme hizmetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'49.50.04',
                   'business'=>'Boru hattı ile doğalgaz taşımacılığı',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'49.50.90',
                   'business'=>'Boru hattı ile diğer malların taşımacılığı (kömür çamuru, kimyasal ürünler, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'50.10.12',
                   'business'=>'Deniz ve kıyı sularında yolcu gemilerinin ve teknelerinin mürettebatıyla birlikte kiralanması (gezinti tekneleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.10.13',
                   'business'=>'Kıyı sularında yolcuların feribotlarla, kruvaziyer gemilerle ve teknelerle taşınması (deniz otobüsleri işletmeciliği dahil, uluslararası denizler ile göl ve nehirlerde yapılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.10.14',
                   'business'=>'Deniz ve kıyı sularında yat işletmeciliği',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'50.10.15',
                   'business'=>'Deniz ve kıyı sularında gezi veya tur bot ve teknelerinin işletilmesi (yat işletmeciliği hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.10.16',
                   'business'=>'Uluslararası denizlerde yolcuların gemilerle taşınması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.10.90',
                   'business'=>'Deniz ve kıyı sularında diğer yolcu taşımacılığı (deniz taksi vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.17',
                   'business'=>'Uluslararası sularda ham petrolün, petrol ürünlerinin ve kimyasalların tanker gemilerle taşınması (gazlar hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.18',
                   'business'=>'Uluslararası sularda dökme kuru yük taşınması (kimyasalların taşınması hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.19',
                   'business'=>'Uluslararası sularda ve kabotaj hattında çekme ve itme hizmetleri (römorkaj) (mavnaların, petrol kulelerinin vb.nin taşınması) (iç sular hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.20',
                   'business'=>'Uluslararası sularda frigorifik gemilerle dondurulmuş veya soğutulmuş malların taşınması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.21',
                   'business'=>'Uluslararası sularda çoklu taşıma türüne uygun konteynerlerin konteyner gemileriyle taşınması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.22',
                   'business'=>'Uluslararası sularda ve kabotaj hattında yük taşımacılığı gemilerinin mürettebatıyla birlikte kiralanması (iç sular hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.23',
                   'business'=>'Uluslararası sularda diğer dökme sıvıların tanker gemilerle taşınması (ham petrolün, petrol ürünlerinin, gazların ve kimyasalların taşınması hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.24',
                   'business'=>'Uluslararası sularda gazların tanker gemilerle taşınması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.25',
                   'business'=>'Kabotaj hattında ham petrolün, petrol ürünlerinin ve kimyasalların tanker gemilerle taşınması (gazlar hariç) (iç sular hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.26',
                   'business'=>'Kabotaj hattında dökme kuru yük taşınması (kimyasalların taşınması hariç) (iç sular hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.27',
                   'business'=>'Kabotaj hattında frigorifik gemilerle dondurulmuş veya soğutulmuş malların taşınması (iç sular hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.28',
                   'business'=>'Kabotaj hattında çoklu taşıma türüne uygun konteynerlerin konteyner gemileriyle taşınması (iç sular hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.29',
                   'business'=>'Kabotaj hattında diğer sıvıların tanker gemilerle taşınması (ham petrolün, petrol ürünlerinin, gazların ve kimyasalların taşınması hariç) (iç sular hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.30',
                   'business'=>'Kabotaj hattında gazların tanker gemilerle taşınması (iç sular hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.90',
                   'business'=>'Uluslararası sularda yapılan diğer yük taşımacılığı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.20.91',
                   'business'=>'Kabotaj hattında yapılan diğer yük taşımacılığı (iç sular hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.30.08',
                   'business'=>'İç sularda yolcu taşımacılığı (nehir, kanal ve göllerde yapılanlar, vb.) (gezinti amaçlı olanlar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.30.09',
                   'business'=>'İç sularda yolcu taşıma gemilerinin ve teknelerinin mürettebatıyla birlikte kiralanması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.40.05',
                   'business'=>'İç sularda yük taşımacılığı (nehir, kanal ve göllerde yapılanlar, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.40.07',
                   'business'=>'İç sularda yük taşıma gemi ve teknelerinin mürettebatıyla birlikte kiralanması hizmetleri (nehir, kanal ve göllerde, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'50.40.08',
                   'business'=>'İç sularda çekme ve itme hizmetleri (römorkaj) (mavnaların, şamandıraların vb.nin taşınması) (nehir, kanal ve göllerde, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'51.10.01',
                   'business'=>'Hava yolu yolcu taşımacılığı (tarifeli olanlar)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'51.10.02',
                   'business'=>'Hava yolu yolcu taşımacılığı (turistik ve gezi amaçlı olanlar ile tarifesiz olanlar) (hava taksi taşımacılığı dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'51.10.03',
                   'business'=>'Hava yolu yolcu taşıma araçlarının mürettebatıyla birlikte kiralanması',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'51.21.17',
                   'business'=>'Hava yolu ile yük taşımacılığı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'51.22.02',
                   'business'=>'Uzay taşımacılığı (uyduların ve uzay taşıtlarının fırlatılması, yük ve yolcuların uzaya taşınması)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'52.10.02',
                   'business'=>'Frigorifik depolama ve antrepoculuk faaliyetleri (bozulabilir gıda ürünleri dahil dondurulmuş veya soğutulmuş mallar için depolama)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.10.03',
                   'business'=>'Hububat depolama ve antrepoculuk faaliyetleri (hububat silolarının işletilmesi vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.10.04',
                   'business'=>'Petrol, petrol ürünleri, kimyasallar, gaz, vb. depolama ve antrepoculuk faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'52.10.05',
                   'business'=>'Dökme sıvı depolama ve antrepoculuk faaliyetleri (yağ, şarap, vb. dahil, petrol, petrol ürünleri, kimyasallar, gaz, vb. hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.10.90',
                   'business'=>'Diğer depolama ve antrepoculuk faaliyetleri (frigorifik depolar ile hububat, kimyasallar, dökme sıvı ve gaz depolama faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.04',
                   'business'=>'Kara yolu taşımacılığı ile ilgili özel ve ticari araçlar için çekme ve yol yardımı faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.05',
                   'business'=>'Demir yolu taşımacılığını destekleyici faaliyetler (demir yolu çekme ve itme hizmetleri, manevra ve makas değiştirme hizmetleri, demir yolu terminal hizmetleri vb. dahil, emanetçilik hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.06',
                   'business'=>'Kara taşımacılığına yönelik emanet büroları işletmeciliği (demir yollarında yapılanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.07',
                   'business'=>'Otopark ve garaj işletmeciliği (bisiklet parkları ve karavanların kışın saklanması dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.08',
                   'business'=>'Otoyol, tünel ve köprü işletmeciliği',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.09',
                   'business'=>'Kara yolu yolcu taşımacılığına yönelik otobüs terminal hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.10',
                   'business'=>'Kara yolu yolcu taşımacılığına yönelik otobüs, minibüs ve taksi duraklarının işletilmesi (otobüs terminal hizmetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.12',
                   'business'=>'Kara taşımacılığını destekleyici olarak gazların sıvılaştırılması',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.13',
                   'business'=>'Yolcu taşımacılığı kooperatiflerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.21.90',
                   'business'=>'Kara taşımacılığını destekleyici diğer hizmetler (kamyon terminal işletmeciliği dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.22.06',
                   'business'=>'Su yolu taşımacılığını destekleyici olarak liman ve su yollarının işletilmesi (limanların, iskelelerin, rıhtımların, su yolu havuzlarının, deniz terminallerinin vb. işletilmesi) (deniz feneri, fener dubası vb. işletilmesi hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.22.07',
                   'business'=>'Su yolu taşımacılığını destekleyici olarak deniz feneri, fener dubası, fener gemisi, şamandıra, kanal işaretleri vb. seyir yardımcıları ile verilen hizmet faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.22.08',
                   'business'=>'Deniz ve kıyı suları ile iç sularda kılavuzluk ve rıhtıma yanaştırma faaliyetleri (geminin havuzlanması ve havuzdan çıkarılması dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.22.10',
                   'business'=>'Deniz ve kıyı suları ile iç sularda gemi kurtarma ve tekrar yüzdürme faaliyetleri (zor durumdaki gemilerin çekilmesi, bu gemilerin ve kargolarının kurtarılması vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.22.90',
                   'business'=>'Su taşımacılığını destekleyici diğer hizmetler',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.23.03',
                   'business'=>'Havaalanı yer hizmet faaliyetleri (kargo ve bagaj yükleme boşaltma hizmetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.23.04',
                   'business'=>'Havaalanı işletmeciliği (uçak pisti işletme, yolcu terminali ve havayolu şirketlerinin kendi bilet satış hizmetleri dahil; havaalanı yer hizmetleri ve bilet acentelerinin faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.23.06',
                   'business'=>'Hava trafik kontrol hizmetleri (havaalanında yer alan kule ve radar istasyonları tarafından sağlanan hizmetler dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.23.07',
                   'business'=>'Uzay taşımacılığını destekleyici hizmetler',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'52.23.90',
                   'business'=>'Hava taşımacılığını destekleyici diğer faaliyetler (havaalanlarında yangın söndürme ve yangın önleme faaliyetleri, hava taşıtlarının çekilmesi, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'52.24.08',
                   'business'=>'Su yolu taşımacılığıyla ilgili kargo ve bagaj yükleme boşaltma hizmetleri (konteyner yükleme boşaltma hizmetleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.24.09',
                   'business'=>'Hava yolu taşımacılığıyla ilgili kargo ve bagaj yükleme boşaltma hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.24.10',
                   'business'=>'Kara yolu taşımacılığıyla ilgili kargo yükleme boşaltma hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.24.11',
                   'business'=>'Demir yolu taşımacılığıyla ilgili kargo yükleme boşaltma hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.01',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Deniz yolu yük nakliyat komisyoncuları ve brokerlerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.02',
                   'business'=>'Uluslararası deniz yolu yük nakliyat acentelerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.03',
                   'business'=>'Hava yolu yük nakliyat acentelerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.04',
                   'business'=>'Gümrük komisyoncularının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.05',
                   'business'=>'Kantar hizmetleri (yüklü araçların tartılması, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.06',
                   'business'=>'Kara yolu yük nakliyat acentelerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.07',
                   'business'=>'Kara yolu yük nakliyat komisyoncularının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.09',
                   'business'=>'Yetkili gümrük müşavirliği veya gümrük müşavirliği',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.11',
                   'business'=>'Taşıma belgelerinin ve irsaliyelerin düzenlenmesi ve tedarik edilmesi',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.13',
                   'business'=>'Hava yolu yük nakliyat komisyoncularının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.14',
                   'business'=>'Demir yolu yük nakliyat acentelerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.15',
                   'business'=>'Demir yolu yük nakliyat komisyoncularının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.16',
                   'business'=>'Taşınan malların kasalardan, sandıklardan vb.lerinden çıkarılması, numune alınması, incelenmesi vb. faaliyetler',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.17',
                   'business'=>'Yük taşımacılığı kooperatiflerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.18',
                   'business'=>'Kabotaj hattı deniz yolu yük nakliyat acentelerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'52.29.90',
                   'business'=>'Bys. taşımacılığı destekleyici diğer faaliyetler (grup sevkiyatının organizasyonu, malların taşınması sırasında korunması için geçici olarak kasalara vb. yerleştirilmesi, yüklerin birleştirilmesi, gruplanması ve parçalara ayırılması, vb. dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'53.10.01',
                   'business'=>'Evrensel hizmet yükümlülüğü altında postacılık faaliyetleri (kargo ve kurye şirketlerinin faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'53.20.08',
                   'business'=>'Gıda, mobilya vb. satın alınan şeylere ilişkin evlere dağıtım faaliyetleri (şehir içi yük taşımacılığı ve evden eve nakliyat vb. hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'53.20.09',
                   'business'=>'Kurye faaliyetleri (kara, deniz ve hava yolu ile yapılanlar dahil, evrensel hizmet yükümlülüğü altında postacılık faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'53.20.10',
                   'business'=>'Paket ve koli gibi kargoların toplanması, sınıflandırılması, taşınması ve dağıtımı faaliyetleri (dökme yükler ve evrensel hizmet yükümlülüğü altında postacılık faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'55.10.02',
                   'business'=>'Otel vb. konaklama yerlerinin faaliyetleri (günlük temizlik ve yatak yapma hizmeti sağlanan yerlerin faaliyetleri) (kendi müşterilerine restoran hizmeti vermeyenler ile devre mülkler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'55.10.05',
                   'business'=>'Otel vb. konaklama yerlerinin faaliyetleri (günlük temizlik ve yatak yapma hizmeti sağlanan yerlerin faaliyetleri) (kendi müşterilerine restoran hizmeti verenler ile devre mülkler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'55.20.01',
                   'business'=>'Tatil ve diğer kısa süreli konaklama faaliyetleri (hosteller, devre mülkler, tatil evleri, apart oteller, bungalov, dağ evleri, vb.nde) (günlük temizlik ve yatak yapma hizmeti sağlanan oda veya süit konaklama faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'55.20.03',
                   'business'=>'Kendine ait veya kiralanmış mobilyalı evlerde bir aydan daha kısa süreli olarak konaklama faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'55.20.04',
                   'business'=>'Tatil amaçlı pansiyonların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'55.30.36',
                   'business'=>'Kamp alanlarının, motorlu karavan, vb. için park yerlerinin faaliyetleri (çadır veya karavan ile kamp kurma amaçlı açık hava tesisi sağlanması, yetişkinler veya çocuklar için kamp programlarında ve avcılık kamplarında konaklama hizmetinin sağlanması, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'55.90.01',
                   'business'=>'Öğrenci ve işçi yurtları, pansiyonlar ve odası kiralanan evlerde yapılan konaklama faaliyetleri (tatil amaçlı olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'55.90.02',
                   'business'=>'Misafirhaneler, ordu evi, polis evi ve öğretmen evleri ile eğitim ve dinlenme tesisleri gibi konaklama yerlerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'55.90.03',
                   'business'=>'Diğer konaklama yerlerinin faaliyetleri (başka bir birim tarafından işletildiğinde yataklı vagonlar, vb. dahil, misafirhaneler, öğretmen evi, vb. hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.01',
                   'business'=>'Seyyar yemek servisi faaliyetleri (simit, poğaça, börek, kokoreç, nohut-pilav, piyaz, dondurma, vb. ile kayıklarda yapılanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.02',
                   'business'=>'Börekçilerin faaliyetleri (imalatçıların faaliyetleri ile seyyar olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.03',
                   'business'=>'Çorbacıların ve işkembecilerin faaliyetleri (imalatçıların faaliyetleri ile seyyar olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.04',
                   'business'=>'Dondurmacıların faaliyetleri (imalatçıların faaliyetleri ile seyyar olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.08',
                   'business'=>'Diğer lokanta ve restoranların (içkili ve içkisiz) faaliyetleri (garson servisi sunanlar ile self servis sunanlar dahil, imalatçıların ve al götür tesislerin faaliyetleri ile seyyar olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.09',
                   'business'=>'Pastanelerin ve tatlıcıların (sütlü, şerbetli vb.) faaliyeti (garson servisi sunanlar ile self servis sunanlar dahil, imalatçıların ve al götür tesislerin faaliyetleri ile seyyar olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.10',
                   'business'=>'Pizzacıların faaliyeti (garson servisi sunanlar ile self servis sunanlar dahil, imalatçıların ve al götür tesislerin faaliyetleri ile seyyar olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.14',
                   'business'=>'Başka birimler tarafından işletildiğinde gemi ve trenlerde restoran işletmeciliği (yemekli vagon, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.17',
                   'business'=>'Mantıcı ve gözlemecilerin faaliyeti (garson servisi sunanlar ile self servis sunanlar dahil, imalatçıların ve al götür tesislerin faaliyetleri ile seyyar olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.18',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Oturacak yeri olan fast-food (hamburger, sandviç, tost vb.) satış yerleri (büfeler dahil) tarafından sağlanan yemek hazırlama ve sunum faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.19',
                   'business'=>'Yiyecek ağırlıklı hizmet veren kafe ve kafeteryaların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.20',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Oturacak yeri olmayan içli pide ve lahmacun fırınlarının faaliyetleri (al götür tesisi olarak hizmet verenler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.21',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Oturacak yeri olmayan fast-food (hamburger, sandviç, tost vb.) satış yerleri (büfeler dahil), al götür tesisleri (içli pide ve lahmacun fırınları hariç) ve benzerleri tarafından sağlanan diğer yemek hazırlama ve sunum faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.22',
                   'business'=>'(Ek satır:RG-24/2/2021-31405) Lahmacun ve pidecilik (içli pide (kıymalı, peynirli vb.)) faaliyeti (garson servisi sunanlar ile self servis sunanlar dahil; imalatçıların ve al götür tesislerin faaliyetleri ile seyyar olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.10.23',
                   'business'=>'(Ek satır:RG-24/2/2021-31405) Döner, ciğer, kokoreç, köfte ve kebapçıların faaliyeti (garson servisi sunanlar ile self servis sunanlar dahil; imalatçıların ve al götür tesislerin faaliyetleri ile seyyar olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.21.01',
                   'business'=>'Özel günlerde dışarıya yemek sunan işletmelerin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.29.01',
                   'business'=>'Kantinlerin faaliyetleri (spor, fabrika, okul veya işyeri kantinleri, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.29.03',
                   'business'=>'Hava yolu şirketleri ve diğer ulaştırma şirketleri için sözleşmeye bağlı düzenlemelere dayalı olarak yiyecek hazırlanması ve temini hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.29.90',
                   'business'=>'Dışarıya yemek sunan diğer işletmelerin faaliyetleri (spor, fabrika, işyeri, üniversite, vb. mensupları için tabldot servisi, vb. dahil, özel günlerde hizmet verenler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.30.02',
                   'business'=>'Çay ocakları, kıraathaneler, kahvehaneler, kafeler (içecek ağırlıklı hizmet veren), meyve suyu salonları ve çay bahçelerinde içecek sunum faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.30.03',
                   'business'=>'Lokallerde içecek sunum faaliyeti (alkollü-alkolsüz)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.30.04',
                   'business'=>'Bar, meyhane ve birahanelerde içecek sunum faaliyetleri (alkollü-alkolsüz)',
                   'hazard_class'=>'Tehlikeli ',
                ],
                [
                   'nace_code'=>'56.30.05',
                   'business'=>'Gazino, gece kulübü, taverna, diskotek, kokteyl salonları, vb. yerlerde içecek sunum faaliyetleri (alkollü-alkolsüz)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'56.30.06',
                   'business'=>'Trenlerde ve gemilerde işletilen barların faaliyetleri (alkollü-alkolsüz)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.30.08',
                   'business'=>'Boza, şalgam ve sahlep sunum faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'56.30.90',
                   'business'=>'Seyyar içecek satanlar ile diğer içecek sunum faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.11.01',
                   'business'=>'Kitap yayımı (broşür, risale, ansiklopedi, vb. dahil, çocuk kitaplarının, ders kitaplarının ve yardımcı ders kitaplarının yayımlanması hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.11.03',
                   'business'=>'Çocuk kitaplarının yayımlanması',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.11.04',
                   'business'=>'Ders kitaplarının ve yardımcı ders kitaplarının yayımlanması (sözlük, atlas, grafikler, haritalar vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.12.01',
                   'business'=>'Rehberlerin ve posta adres listelerinin yayımlanması (telefon rehberleri, iş ve ticaret rehberleri, belediye ve şehir rehberleri, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.13.01',
                   'business'=>'Gazetelerin yayımlanması (haftada en az dört kez yayımlananlar) (reklam gazeteleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.14.02',
                   'business'=>'Eğitime destek amaçlı dergi ve süreli yayınların yayımlanması (haftada dörtten az yayımlananlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.14.03',
                   'business'=>'Bilimsel, teknik, kültürel vb. dergi ve süreli yayınların yayımlanması (haftada dörtten az yayımlananlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.14.90',
                   'business'=>'Diğer dergi ve süreli yayınların yayımlanması (haftada dörtten az yayımlananlar) (çizgi roman, magazin dergileri vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.19.04',
                   'business'=>'Değerli kağıtların yayımlanması faaliyetleri (pul, tahvil, hisse senedi, bono veya senet vb. değerli kağıtlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.19.90',
                   'business'=>'Bys. diğer yayıncılık faaliyetleri (kartpostal, tebrik kartları vb. ile katalog, poster, reklam materyali vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.21.01',
                   'business'=>'Bilgisayar oyunlarının yayımlanması',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'58.29.01',
                   'business'=>'Diğer yazılım programlarının yayımlanması',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'59.11.04',
                   'business'=>'(Ek satır:RG-11/8/2023-32276) Sinema filmi, video ve televizyon programları yapım faaliyetleri (belgesel yapımcılığı dahil; fenomenler ve vloggerların yapım ve yayın faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'59.11.05',
                   'business'=>'(Ek satır:RG-11/8/2023-32276) Video içeriklerinin yapım ve yayın faaliyetleri (örn.: fenomenler (influencerlar) ve vloggerlar tarafından)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'59.12.01',
                   'business'=>'Sinema filmi, video ve televizyon programları çekim sonrası faaliyetleri (ses-görüntü redaksiyonu, asıl kopyaların aktarımı, renk düzeltme, sayısal iyileştirme, görsel efekt, animasyon, alt yazı, başlıklandırma, grafik, vb. işler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'59.13.02',
                   'business'=>'Sinema filmi, video ve televizyon programları dağıtım faaliyetleri (film hakları ve gelirleri için lisanslama hizmetleri, çalışmaların gösterimi, yayımlanması ve kiralanması için izin verilmesi, elde edilen gelirlerin dağıtılması vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'59.14.02',
                   'business'=>'Sinema filmi gösterim faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'59.20.01',
                   'business'=>'Müzik yayımcılığı faaliyetleri (basılı müzik notaları, elektronik formdaki müzikal besteler, müzikal ses diskleri, indirilebilir müzikler vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'59.20.02',
                   'business'=>'Ses kayıt ve canlı kayıt faaliyetleri (seslerin, sözlerin ve müziğin ses kayıt stüdyosunun özel teknik ekipmanları kullanılarak kaydedilmesi ile konferans, seminer, konser vb. canlı etkinliklerde yapılan kayıt hizmetleri vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'59.20.03',
                   'business'=>'Orijinal ses kayıtlarını kullanım hakkı için lisanslama faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'59.20.06',
                   'business'=>'Radyo programı yapımcılık faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'60.10.09',
                   'business'=>'Radyo yayıncılığı (radyo yayın stüdyoları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'60.20.01',
                   'business'=>'Televizyon programcılığı ve yayıncılığı faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'61.10.15',
                   'business'=>'Kablolu telekomünikasyon faaliyetleri (kablolu ağlar üzerinden internet erişiminin sağlanması hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'61.10.17',
                   'business'=>'Kablolu ağlar üzerinden internet erişiminin sağlanması',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'61.20.02',
                   'business'=>'Kablosuz telekomünikasyon faaliyetleri (kablosuz ağlar üzerinden internet erişiminin sağlanması ve uydu üzerinden yapılanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'61.20.03',
                   'business'=>'Kablosuz ağlar üzerinden internet erişiminin sağlanması',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'61.30.01',
                   'business'=>'Uydu üzerinden telekomünikasyon faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'61.90.04',
                   'business'=>'Telekomünikasyon uygulamalarına yönelik radar istasyonlarının işletilmesi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'61.90.05',
                   'business'=>'İnternet kafelerin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'61.90.07',
                   'business'=>'Telekomünikasyon hizmeti yeniden satıcılarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'61.90.90',
                   'business'=>'Bys. diğer telekomünikasyon faaliyetleri (uydudan izleme, iletişim telemetresi vb. uzmanlık gerektiren telekomünikasyon uygulamalarının sağlanması, çevrim içi internet erişimi sağlanması, VOIP sağlanması, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'62.01.01',
                   'business'=>'Bilgisayar programlama faaliyetleri (sistem, veri tabanı, network, web sayfası vb. yazılımları ile müşteriye özel yazılımların kodlanması vb)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'62.02.01',
                   'business'=>'Bilgisayar danışmanlık faaliyetleri (donanım gereksinimleri gibi donanımla ilgili bilişim konularında uzman görüşü sağlanması, bilgisayar gereksinimlerinin belirlenmesi, bilgisayar sistemlerinin planlanması ve tasarlanması vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'62.03.01',
                   'business'=>'Bilgisayar tesisleri yönetim faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'62.09.01',
                   'business'=>'Bilgisayarları felaketten kurtarma ve veri kurtarma faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'62.09.02',
                   'business'=>'Diğer bilgi teknolojisi ve bilgisayar hizmet faaliyetleri (kişisel bilgisayarların ve çevre birimlerinin kurulumu, yazılım kurma vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'63.11.08',
                   'business'=>'Veri işleme, barındırma ve ilgili faaliyetler (veri girişi, verinin işlenmesi, özel raporların oluşturulması, depolanması, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'63.12.01',
                   'business'=>'Web portalı faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'63.91.01',
                   'business'=>'Haber ajanslarının faaliyetleri (medya için haber, resim ve röportaj tedarik eden haber bürosu ve haber ajanslarının faaliyetleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'63.99.01',
                   'business'=>'Başka yerde sınıflandırılmamış diğer bilgi hizmet faaliyetleri (bilgi araştırma hizmetleri, gazete kupürleri hizmetleri vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.11.06',
                   'business'=>'Merkez bankası faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.19.01',
                   'business'=>'Bankaların faaliyetleri (katılım bankaları, mevduat bankaları, kredi birlikleri vb. dahil, merkez bankası ve yatırım bankaları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.20.19',
                   'business'=>'Holding şirketlerinin faaliyetleri (bağlı iştiraklerini yönetenler hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.30.01',
                   'business'=>'Trustlar, fonlar ve benzeri mali varlıklar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.91.01',
                   'business'=>'Finansal kiralama (finansal leasing)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.92.01',
                   'business'=>'Diğer kredi verme faaliyetleri (bankacılık sistemi dışında borç para verilmesi, uluslararası ticari finansman, mevduat kabul etmeyen uzmanlaşmış kuruluşlarca konut kredisi verilmesi, rehin karşılığında borç para verilmesi vb.) (ikrazatçılar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.92.04',
                   'business'=>'Tarım kredi kooperatiflerinin kredi verme faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.92.07',
                   'business'=>'İkrazatçıların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.92.08',
                   'business'=>'Tüketici finansman şirketlerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.99.01',
                   'business'=>'Faktoring faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.99.03',
                   'business'=>'Gayrimenkul yatırım ortaklığı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.99.08',
                   'business'=>'Yatırım bankacılığı faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.99.09',
                   'business'=>'Varlık yönetim şirketlerinin faaliyetleri (mülkiyet devri yoluyla yapılanlar)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.99.10',
                   'business'=>'Menkul kıymet yatırım ortaklığı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'64.99.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer finansal hizmet faaliyetleri (swap, opsiyon ve diğer riskten korunma sözleşmelerinin yazılması, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'65.11.02',
                   'business'=>'Hayat sigortası faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'65.12.13',
                   'business'=>'Hayat sigortası dışındaki sigortacılık faaliyetleri (sağlık, yangın, motorlu taşıt, konut, tarım, denizcilik, havacılık, kaza, doğal afet, ulaştırma, nakliyat, para kaybı, borçlanma, mali sorumluluk, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'65.20.01',
                   'business'=>'Reasürans faaliyetleri (sigorta şirketleri tarafından taahhüt edilen sigorta poliçelerine ilişkin riskin üstlenilmesi)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'65.30.01',
                   'business'=>'Emeklilik fonu faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.11.02',
                   'business'=>'Finansal piyasaların yönetimi (emtia sözleşmeleri borsası, menkul kıymetler borsası, hisse senedi borsası, vb. yönetimi dahil, kamu otoriteleri tarafından yapılanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.12.01',
                   'business'=>'Menkul kıymetler aracılık faaliyetleri (borsa aracılığı ve vadeli işlemler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.12.04',
                   'business'=>'Döviz bürolarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.12.06',
                   'business'=>'Kambiyo hizmetleri (döviz bürolarının faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.12.08',
                   'business'=>'Emtia sözleşmeleri aracılık faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.19.02',
                   'business'=>'İpotekli satış ile kredi simsarlığı ve danışmanlığı faaliyetleri (sigorta ve emeklilik fonları ile esnaf ve sanatkarlar kredi kefalet kooperatiflerinin faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.19.03',
                   'business'=>'Finansal danışmanlık faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.19.04',
                   'business'=>'Menkul kıymetlerin operasyon ve takas işlemi faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.19.05',
                   'business'=>'Yatırım bankacılığına ilişkin yardımcı faaliyetler (birleşme ve devir faaliyeti, işletme finansmanı ve risk sermayesi finansman faaliyeti, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.19.06',
                   'business'=>'Esnaf ve sanatkarlar kredi kefalet kooperatiflerinin kredi aracılık faaliyetleri ile kredi garanti fonunun faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.19.90',
                   'business'=>'Başka yerde sınıflandırılmamış finansal hizmetlere yardımcı diğer faaliyetler (finansal işlemlerin operasyonu ve takas merkezi faaliyetleri, servet yönetimi ve saklama hizmetleri, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.21.01',
                   'business'=>'Risk ve hasar değerlemesi faaliyetleri (sigorta eksperliği dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.22.01',
                   'business'=>'Sigorta acentelerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.22.02',
                   'business'=>'Sigorta brokerlarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.29.01',
                   'business'=>'Aktüerya faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.29.90',
                   'business'=>'Başka yerde sınıflandırılmamış sigorta ve emeklilik fonuna yardımcı diğer faaliyetler (kurtarılan sigortalı eşyanın idaresi, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.30.02',
                   'business'=>'Bir ücret veya sözleşmeye dayalı olarak fon yönetimi faaliyetleri (portföy yönetimi, müşterek fonların yönetimi, emeklilik fonlarının yönetimi, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'68.10.01',
                   'business'=>'Kendine ait gayrimenkulün alınıp satılması (kendine ait binalar, devre mülkler, araziler, müstakil evler, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'68.20.02',
                   'business'=>'Kendine ait veya kiralanan gayrimenkullerin kiraya verilmesi veya leasingi (kendine ait binalar, devre mülkler, araziler, müstakil evler, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'68.31.01',
                   'business'=>'Gayrimenkul acentelerinin faaliyetleri (gayrimenkulün ücret veya sözleşme temeline dayalı olarak satın alınması, satılması ve kiralanmasında aracılık, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'68.31.02',
                   'business'=>'Bir ücret veya sözleşmeye dayalı olarak yapılan gayrimenkul danışmanlık ve ekspertiz faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'68.32.02',
                   'business'=>'Bir ücret veya sözleşmeye dayalı olarak yapılan gayrimenkul yönetimi faaliyetleri (site yöneticiliği, mobil ev alanlarının, müşterek mülkiyetli konutların, devre mülklerin, ikamet amaçlı olmayan mülklerin, vb. yönetimi)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'68.32.03',
                   'business'=>'Bir ücret veya sözleşmeye dayalı olarak yapılan kira toplama faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'68.32.04',
                   'business'=>'Bir ücret veya sözleşmeye dayalı olarak yapılan apartman yöneticiliği',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.10.01',
                   'business'=>'Bilirkişi faaliyetleri (hukuki konularda)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.10.02',
                   'business'=>'Hukuk müşavirliği',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.10.03',
                   'business'=>'Hukuk danışmanlığı ve temsil faaliyetleri (avukatlık faaliyetleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.10.04',
                   'business'=>'Diğer hukuki hizmet faaliyetleri (patent, telif hakkı ve diğer fikri mülkiyet hakları, varlıkların tasviyesi vb. danışmanlık ve diğer yasal hizmetler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.10.07',
                   'business'=>'Noterlik faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.10.08',
                   'business'=>'Sosyal güvenlik müşavirlerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.10.09',
                   'business'=>'Hukuki arabuluculuk ve uzlaştırma faaliyetleri (işgücü ve yönetim arasında, işletmeler arasında veya şahıslar arasında ortaya çıkan anlaşmazlığın çözümü için tahkim veya arabuluculuk hizmetleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.10.10',
                   'business'=>'(Ek:RG-31/1/2018-30318) Yediemin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.20.01',
                   'business'=>'Mali müşavirlik hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.20.02',
                   'business'=>'Muhasebe ve defter tutma faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.20.03',
                   'business'=>'Vergi danışmanlığı ve vergi beyannamesinin hazırlanması faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.20.04',
                   'business'=>'Yeminli mali müşavirlik faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'69.20.05',
                   'business'=>'Mali denetim faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'70.10.01',
                   'business'=>'İdare merkezi faaliyetleri (idare merkezi tarafından aynı şirket veya girişimin diğer birimlerine sağlanan yönetim hizmetleri ile bağlı iştiraklerini yöneten holdingler dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'70.21.01',
                   'business'=>'Halkla ilişkiler ve iletişim faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'70.22.02',
                   'business'=>'İşletme ve diğer idari danışmanlık faaliyetleri (bir organizasyonun stratejik, mali, pazarlama, üretim, iş süreçleri, proje vb. yönetim hizmetleri ile ticari marka ve imtiyaz konularında danışmanlık)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'70.22.03',
                   'business'=>'İnsan kaynakları yönetim danışmanlığı faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.11.01',
                   'business'=>'Mimarlık faaliyetleri ve mimari danışmanlık faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.11.02',
                   'business'=>'Şehir ve bölge planlama faaliyetleri (nazım imar planı, vaziyet planı vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.11.04',
                   'business'=>'Peyzaj mimarisi faaliyetleri ve peyzaj konusunda mimari danışmanlık faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.01',
                   'business'=>'Yer yüzeyinin araştırılması ve harita yapımına yönelik mühendislik faaliyetleri (jeodezik, fotogrametrik ve hidrografik ölçüm yapma, topografya hizmetleri ile yol, kadastro, topoğrafik, vb. haritaların hazırlanması)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.03',
                   'business'=>'Bina projelerine yönelik mühendislik ve danışmanlık faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.04',
                   'business'=>'Jeolojik, jeofizik ve ilgili araştırma ve danışmanlık hizmetlerine yönelik mühendislik faaliyetleri (maden yatağı, yer altı toprak oluşumu, vb. hizmetler) (petrol ve doğalgaz için olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.05',
                   'business'=>'Petrol ve doğalgaz çıkarım projelerine yönelik mühendislik ve danışmanlık faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.06',
                   'business'=>'Ulaştırma projelerine yönelik mühendislik ve danışmanlık faaliyetleri (karayolu, köprü, tünel, demir yolları, havaalanı, petrol ve gaz taşımacılık projeleri, liman vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.07',
                   'business'=>'Su, kanalizasyon ve drenaj projelerine yönelik mühendislik ve danışmanlık faaliyetleri (içme suyu dağıtım sistemleri, pompa istasyonları, yağmur suyu yönetim sistemleri, atık suların toplanması vb. projeler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.08',
                   'business'=>'Sanayi ve imalat projelerine yönelik mühendislik ve danışmanlık faaliyetleri (haddehaneler, farineriler, ulaşım araçları, sanayi makineleri, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.09',
                   'business'=>'Enerji projelerine yönelik mühendislik ve danışmanlık faaliyetleri (kömür, petrol ve gaz gibi enerji yakıtları kullananlar ile nükleer, su, güneş, rüzgar ve diğer enerjiler için santrallere ve enerji iletim ve dağıtım hatlarına yönelik hizmetler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.10',
                   'business'=>'Mühendislik danışmanlık hizmetleri (bir projeyle bağlantılı olarak yapılanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.14',
                   'business'=>'Yapı denetim kuruluşları',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.12.90',
                   'business'=>'Diğer projelere yönelik mühendislik ve danışmanlık faaliyetleri (telekomünikasyon ve yayıncılık projeleri, doğalgaz ve buhar dağıtım projeleri ve diğerleri ile inşaat projelerinin yönetimi dahil))',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.20.05',
                   'business'=>'Kara yolu taşıma araçlarının teknik muayene faaliyetleri (otomobil, motosiklet, otobüs, pikap, kamyon ve diğer kara yolu araçlarının periyodik teknik muayene hizmetleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'71.20.07',
                   'business'=>'Bileşim ve saflık konularında teknik test ve analiz faaliyetleri (atık, yakıt, metal, mineral ve kimyasallar gibi maddelerin biyolojik ve kimyasal özellikleri ile mikrobiyoloji, biyokimya vb. ilgili alanlarda test ve analiz faaliyetleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'71.20.08',
                   'business'=>'Su, hava vb. kirliliği konularında teknik test ve analiz faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'71.20.09',
                   'business'=>'Fiziksel özellikler konusunda teknik test ve analiz faaliyetleri (metal, plastik, tekstil, beton ve diğer maddelerin mukavemeti, esnekliği, iletkenliği gibi fiziksel özellikleri ile gerilim, sertlik, darbe direnci vb. test ve analiz faaliyetleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'71.20.10',
                   'business'=>'Ürünlerin ruhsatlandırılması faaliyetleri (tüketim malları, motorlu kara taşıtları, uçaklar, ilaçlar vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'71.20.11',
                   'business'=>'Gıda konusunda teknik test ve analiz faaliyetleri (veteriner denetimi de dahil olmak üzere gıda hijyeni alanında teknik test faaliyetleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'71.20.12',
                   'business'=>'Entegre mekanik ve elektrik sistemleri konusunda teknik test ve analiz faaliyetleri (mekanik ve elektrik bileşenli makine, motor, otomobil, alet, cihaz, iletişim ekipmanı vb. ekipmanların test ve analiz faaliyetleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'71.20.13',
                   'business'=>'Polis laboratuvarlarının analiz faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'71.20.90',
                   'business'=>'Diğer teknik test ve analiz faaliyetleri (makine parça ve yapıların kusurlarını belirlemek için radyografik, manyetik ve ultrasonik testleri, sanatsal çalışmaların doğruluğunun kanıtlanması, kaynakların radyolojik muayenesi ve diğerleri)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'72.11.01',
                   'business'=>'Biyoteknolojiyle ilgili araştırma ve deneysel geliştirme faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'72.19.01',
                   'business'=>'Doğal bilimler ve mühendislikle ilgili diğer araştırma ve deneysel geliştirme faaliyetleri (tarımsal araştırmalar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'72.20.01',
                   'business'=>'Sosyal bilimlerle ve beşeri bilimlerle ilgili araştırma ve deneysel geliştirme faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'73.11.01',
                   'business'=>'Reklam ajanslarının faaliyetleri (kullanılacak medyanın seçimi, reklamın tasarımı, sözlerin yazılması, reklam filmleri için senaryonun yazımı, satış noktalarında reklam ürünlerinin gösterimi ve sunumu vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'73.11.03',
                   'business'=>'Reklam araç ve eşantiyonların dağıtımı ve teslimi faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'73.12.02',
                   'business'=>'Çeşitli medya reklamları için alan ve zamanın bir ücret veya sözleşmeye dayalı olarak satışı (ilan tahtası, billboard, bina, araç vb. üzerinden reklam alanlarının ve zamanlarının satışı dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'73.20.03',
                   'business'=>'Piyasa ve kamuoyu araştırma faaliyetleri (anket yapma, kamuoyu yoklamaları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.10.01',
                   'business'=>'İç mimarların faaliyetleri (iç dekorasyon dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.10.02',
                   'business'=>'Diğer uzmanlaşmış tasarım faaliyetleri (tekstil, giyim, ayakkabı gibi kişisel eşyalar ve ev eşyaları tasarımı ile endüstriyel tasarım dahil, iç mimarların ve uzmanlaşmış grafik tasarımcıların faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.10.03',
                   'business'=>'Uzmanlaşmış grafik tasarımcılarının faaliyetleri (marka ve alametifarika tasarımı dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.20.22',
                   'business'=>'Tüketicilere yönelik fotoğrafçılık faaliyetleri (pasaport, okul, düğün vb. için vesikalık ve portre fotoğrafçılığı vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.20.25',
                   'business'=>'Hava ve su altı fotoğrafçılığı faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'74.20.26',
                   'business'=>'Reklamcılık ile ilgili fotoğrafçılık faaliyetleri (reklam görselleri, broşür, gazete ilanı, katalog vb. için ticari ürünlerin, moda kıyafetlerinin, makinelerin, binaların, kişilerin, vb.nin fotoğraflarının çekilmesi)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.20.27',
                   'business'=>'Etkinlik fotoğrafçılığı ve etkinliklerin videoya çekilmesi faaliyetleri (düğün, mezuniyet, konferans, resepsiyon, moda gösterileri, spor ve diğer ilgi çekici olayların fotoğraflanması veya videoya çekilmesi)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.20.28',
                   'business'=>'Bağımsız foto muhabirlerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.20.29',
                   'business'=>'Fotoğraf işleme faaliyetleri (negatiflerin tab edilmesi ve resimlerin basılması, negatiflerin veya slaytların çoğaltılması, fotografik slaytların hazırlanması, filmlerin kopyalanması vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.20.90',
                   'business'=>'Diğer fotoğrafçılık faaliyetleri (fotomikrografi, mikrofilm hizmetleri, fotoğrafların restorasyonu ve rötuşlama, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.30.12',
                   'business'=>'Tercüme ve sözlü tercüme faaliyetleri (yeminli tercüme büroları, mütercimlik ve tercümanlık faaliyetleri vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.90.01',
                   'business'=>'Ekspertiz faaliyetleri (antika eşyalar, mücevherler vb. için ekspertiz hizmetleri) (deniz, gayrimenkul ve sigorta için olan ekspertiz faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.90.02',
                   'business'=>'İşyeri komisyonculuğu faaliyetleri (küçük ve orta ölçekli işletmelerin alım ve satımının düzenlenmesi vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.90.03',
                   'business'=>'Fatura denetimi ve navlun oranı bilgi faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.90.04',
                   'business'=>'Hava tahmini ve meteorolojik faaliyetler',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.90.05',
                   'business'=>'Sanatçı, sporcu, şovmen, manken ve diğerleri için ajansların ve menajerlerin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.90.06',
                   'business'=>'Gemi Klas Müesseseleri, Deniz Ekspertiz ve Deniz Sürveyör faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'74.90.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer mesleki, bilimsel ve teknik faaliyetler (çevre danışmanlığı, güvenlik danışmanlığı, matematikçiler, istatistikçiler, agronomlar vb. tarafından verilen danışmanlık hizmetleri, patent aracılığı vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'75.00.02',
                   'business'=>'Hayvan hastanelerinin faaliyetleri (evcil hayvanlar için ambulans faaliyetleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'75.00.04',
                   'business'=>'Veterinerlik hizmetleri (hayvan hastanelerinde verilen hizmetler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'77.11.01',
                   'business'=>'Motorlu hafif kara taşıtlarının ve arabaların sürücüsüz olarak kiralanması ve leasingi (3.5 tondan daha az olan otomobil, kamyonet, vb. dahil, motosiklet hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.12.01',
                   'business'=>'Motorlu ağır kara taşıtlarının sürücüsüz olarak kiralanması ve leasingi (3.5 tondan daha fazla olan kamyon, treyler (römork), vb.) (karavan ve tarımsal makine ve ekipmanlar ile inşaat makine ve ekipmanlarının kiralanması ve leasingi hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.21.01',
                   'business'=>'Eğlence ve spor amaçlı olarak at, midilli, deve vb. kiralanması ve leasingi (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.21.02',
                   'business'=>'Bisikletlerin kiralanması ve leasingi (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.21.04',
                   'business'=>'Eğlence ve spor amaçlı sandal, tekne, kano, yelkenli, vb.nin mürettebatsız olarak kiralanması ve leasingi (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.21.90',
                   'business'=>'Diğer eğlence ve spor eşyalarının kiralanması ve leasingi (kar kayağı, buz pateni, planör, delta kanat, sörf tahtası, su kayağı, golf sopası, kamp malzemesi, plaj sandalyesi ve şemsiyesi, saha oyunları için malzeme, oyuncak vb.) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.22.01',
                   'business'=>'Video kasetlerinin, plakların ve disklerin kiralanması (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.29.01',
                   'business'=>'Gelinlik, kostüm, tekstil, giyim eşyası, ayakkabı ve mücevherlerin kiralanması (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.29.02',
                   'business'=>'Bys. diğer kişisel ve ev eşyalarının kiralanması ve leasingi (mobilya, elektrikli ve elektronik alet, kitap, TV, kamera, bitki, vb. dahil, müzik aleti, giyim eşyası, mücevher, vb. ile video kasetler, büro mobilyaları, eğlence ve spor ekipmanları hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.29.03',
                   'business'=>'Müzik aletlerinin kiralanması ve leasingi (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.31.01',
                   'business'=>'Tarımsal makine ve ekipmanların operatörsüz olarak kiralanması ve leasingi (tarımsal traktör, pulluk, biçerdöver, süt sağma makinesi, arıcılık makinesi, vb. dahil, çim biçme makineleri hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.32.01',
                   'business'=>'Bina ve bina dışı inşaatlarda kullanılan makine ve ekipmanların operatörsüz olarak kiralanması ve leasingi (vinç kamyonu, inşaat ve toprak taşımak için traktör, yol greyderi ve silindiri, buldozer, yapı iskelesi, şantiye kulübesi, vb.) (kurma/sökme hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.33.01',
                   'business'=>'Büro makine ve ekipmanlarının operatörsüz olarak kiralanması ve leasingi (kasa, fotokopi makinesi, daktilo, yazar kasa, vb. dahil, bilgisayarlar ve çevre birimleri, telefon ve faks makineleri ve büro mobilyaları hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.33.02',
                   'business'=>'Büro mobilyalarının kiralanması ve leasingi (büro sandalyesi ve masasının kiralanması dahil) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.33.03',
                   'business'=>'Bilgisayar ve çevre birimlerinin operatörsüz olarak kiralanması ve leasingi (elektronik veri işlemci, merkezi işlem birimi, çevre birimleri, manyetik veya optik okuyucular, vb.) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.34.01',
                   'business'=>'Su yolu taşımacılığı ekipmanlarının operatörsüz olarak kiralanması ve leasingi (yolcu ve yük taşımacılığı için ticari tekne ve gemiler dahil, gezinti tekneleri hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.35.01',
                   'business'=>'Hava taşımacılığı araçlarının operatörsüz olarak kiralanması ve leasingi (uçak, helikopter, balon, vb.) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.01',
                   'business'=>'Demir yolu ulaşım ekipmanlarının operatörsüz olarak kiralanması ve leasingi (lokomotif ve diğer vagonlar, metro vagonları, hafif demir yolu ekipmanları, tramvay, vb.) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.02',
                   'business'=>'Konteynerlerin kiralanması veya leasingi (konaklama ve büro amaçlı olanlar, birden çok taşıma türlerine uygun olanlar ve diğerleri) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.03',
                   'business'=>'Motosiklet, karavan ve kamp gereçlerinin operatörsüz olarak kiralanması veya leasingi (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.04',
                   'business'=>'Maden ve petrol sahasında kullanılan ekipmanların operatörsüz olarak kiralanması veya leasingi (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.05',
                   'business'=>'Motorlar ve türbinlerin operatörsüz olarak kiralanması veya leasingi (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.06',
                   'business'=>'Mesleki ve bilimsel amaçlı ölçüm ve kontrol ekipmanlarının operatörsüz olarak kiralanması veya leasingi (tıbbi cihaz ve ekipmanların kiralanması dahil) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.07',
                   'business'=>'Ticari radyo, televizyon ve telekomünikasyon ekipmanları, sinema filmi yapım ekipmanları, telefon, faks makinesi, çağrı cihazı ve hücresel telefonların operatörsüz olarak kiralanması veya leasingi (kişisel ve ev eşyası olan TV, radyo, kameralar hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.08',
                   'business'=>'Madeni para ile çalışan kumar makinelerinin operatörsüz olarak kiralanması veya leasingi (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.10',
                   'business'=>'Takım tezgahlarının ve diğer ticari ve endüstriyel makinelerin operatörsüz olarak kiralanması veya leasingi (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.11',
                   'business'=>'Tiyatro dekor ve malzemelerinin kiralanması (kostümler hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.13',
                   'business'=>'Hayvanların kiralanması faaliyetleri (hayvan sürüleri, yarış atları vb.) (eğlence ve spor amaçlı olanlar hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.39.90',
                   'business'=>'Başka yerde sınıflandırılmamış genellikle endüstride sermaye malı olarak kullanılan diğer makine, ekipman ve eşyaların operatörsüz olarak kiralanması ve leasingi (sergi malzemesi, palet, vb. dahil, kişisel eşyalar ve ev eşyaları hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'77.40.01',
                   'business'=>'Fikri mülkiyet haklarının ve benzer ürünlerin leasingi (patentli varlıklar, markalar, imtiyaz sözleşmeleri, vb. dahil, telif hakkı alınmış olan çalışmalar hariç) (finansal leasing hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'78.10.01',
                   'business'=>'İş bulma acentelerinin faaliyetleri (işe girecek kişilerin seçimi ve yerleştirilmesi faaliyetleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'78.10.04',
                   'business'=>'Oyuncu seçme ajansları ve bürolarının faaliyetleri (tiyatro rol dağıtım ajansları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'78.20.01',
                   'business'=>'Geçici iş bulma acentelerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'78.30.03',
                   'business'=>'Diğer insan kaynaklarının sağlanması (uzun süreli çalışma dönemleri için personel sağlanması hizmetleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'79.11.01',
                   'business'=>'Seyahat acentesi faaliyetleri (hava yolu, deniz yolu, kara yolu, demir yolu ulaşımı için bilet rezervasyon işlemleri ve bilet satışı, seyahat, tur, ulaşım ve konaklama hizmetlerinin toptan veya perakende satışı, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'79.12.01',
                   'business'=>'Tur operatörü faaliyetleri (turların düzenlenmesi)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'79.90.01',
                   'business'=>'Turist rehberliği ve ziyaretçiler için danışmanlık faaliyetleri (gezilerle ilgili bilgi sağlanması)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'79.90.02',
                   'business'=>'Spor, müzik, tiyatro ve diğer eğlence etkinlikleri için yer ayırma (rezervasyon) ve bilet satılması faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'79.90.90',
                   'business'=>'Bys. diğer rezervasyon hizmetleri ve ilgili faaliyetler (devre mülk takas faaliyetleri, turizmi arttırma faaliyetleri, vb. dahil, seyahat acentelerinin ve tur operatörlerinin faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'80.10.05',
                   'business'=>'Özel güvenlik faaliyetleri (şirketlerce zırhlı araç sağlama, para, vb. değerli şeylerin toplanması ve dağıtımı, koruma ve devriye, araç park kontrol, koruma köpeği eğitimi, parmak izi tespiti vb. dahil, kamu güvenliği hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'80.20.01',
                   'business'=>'Güvenlik sistemleri hizmet faaliyetleri (hırsız ve yangın alarmı, elektronik kasa gibi güvenlik sistemlerinin kontrolü, kurulumu, bakımı, alınan alarm sinyali ile sistemin doğrulanması ve polis, itfaiye gibi birimlerin harekete geçirilmesi)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'80.20.02',
                   'business'=>'Başka yerde sınıflandırılmamış yangın önleme/söndürme hizmetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'80.30.04',
                   'business'=>'Soruşturma faaliyetleri (özel dedektiflik faaliyetleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'80.30.05',
                   'business'=>'İmza ve el yazısı tespit faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'81.10.01',
                   'business'=>'Tesis bünyesindeki kombine destek hizmetleri (işletme veya tesis bünyesinde temizlik, bakım, çöplerin bertarafı, koruma ve güvenlik, posta dağıtımı, çamaşırhane, resepsiyon vb. yardımcı hizmet ve görevlerin birden fazlasının sağlanması)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'81.21.01',
                   'business'=>'Binaların genel temizliği (daire, apartman, büro, fabrika, kurum, mağaza vb. her türlü binanın genel temizliği dahil, pencere, baca, sanayi makinesi, vb. uzmanlaşmış temizlik faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'81.22.03',
                   'business'=>'(Ek satır:RG-8/3/2020-31062) Nesne veya binaların (ameliyathaneler vb.) sterilizasyonu faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'81.22.99',
                   'business'=>'(Ek satır:RG-8/3/2020-31062)  Başka yerde sınıflandırılmamış diğer bina ve endüstriyel temizlik faaliyetleri (binaların dışı, pencere, baca, fırın, kalorifer kazanı, havalandırma kanalı, egzoz ünitesi, sanayi makinesi temizliği vb. uzmanlaşmış temizlik faaliyetleri) (sterilizasyon faaliyetleri hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'81.29.02',
                   'business'=>'Yol ve pistlerdeki kar ve buzun kaldırılması (kum, tuz dökülmesi dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'81.29.03',
                   'business'=>'Park ve caddelerin süpürülerek yıkanması, temizlenmesi faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'81.29.04',
                   'business'=>'Böceklerin, kemirgenlerin ve diğer zararlıların imhası ve haşere kontrol faaliyetleri (tarımsal zararlılarla mücadele hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'81.29.90',
                   'business'=>'Diğer temizlik faaliyetleri (yüzme havuzları, tren, otobüs, uçak, tanker, plaj ve şişelerin temizlenmesi ile dezenfekte faaliyetleri dahil, oto yıkama hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'81.30.01',
                   'business'=>'Gürültü, rüzgar, erozyon, yansıma, vb.ne karşı koruyucu bitkilerin dikimi ve bakımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'81.30.05',
                   'business'=>'Spor alanları (futbol sahaları, golf alanları gibi), oyun alanları, güneş banyosu için çimenler ve diğer eğlence parkları için yeşil alanların dikimi ve bakımı faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'81.30.90',
                   'business'=>'Diğer çevre düzenlemesi ve bakımı ile peyzaj projelerinin uygulanması faaliyetleri (park, bahçe ve yeşil alanların dikimi, bakım ve onarımı)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.11.01',
                   'business'=>'Kombine büro yönetim hizmeti faaliyetleri (bir ücret veya sözleşme temelinde sekreterlik, finansal planlama, faturalama ve kayıt tutulması, personel ve posta vb. hizmetlerin kombinasyonunun sağlanması)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.19.01',
                   'business'=>'Fotokopi, doküman hazırlama ve diğer uzmanlaşmış büro destek hizmetleri (doküman hazırlama, daktilo, sekreterya, fotokopi, ozalit çekimi, mektup, çoğaltma vb.) (adres derleme ve postalama hizmetleri dahil, tez yazımı hariç)',
                   'hazard_class'=>' Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.19.03',
                   'business'=>'Tez vb. yazım bürolarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.20.01',
                   'business'=>'Çağrı merkezlerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.30.02',
                   'business'=>'Gösteri, kongre, konferans, ticari fuar, vb. etkinliklerin organizasyonu faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.91.01',
                   'business'=>'Tahsilat büroları ve kredi kayıt bürolarının faaliyetleri (telefon, elektrik, su, vb. fatura ve borç toplama, kişilerin veya işletmelerin kredi veya çalışma geçmişleri hakkında bilgi toplama, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.92.01',
                   'business'=>'Tehlikesiz ürünleri paketleme faaliyetleri (bir ücret veya sözleşme temelinde yiyecek, içecek dahil sıvıların şişelenmesi, katı maddelerin paketlenmesi, etiketleme, damgalama, marka basma, paket ambalajlama, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'82.92.05',
                   'business'=>'Tehlikeli ürünleri paketleme faaliyetleri (bir ücret veya sözleşme temelinde sıvıların şişelenmesi, katı maddelerin paketlenmesi, etiketleme, damgalama, marka basma, paket ambalajlama, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'82.99.02',
                   'business'=>'Elektrik, gaz, su ve ısınma sayaçlarını okuma ve faturalama faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.99.04',
                   'business'=>'Trafik müşavirliği',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.99.05',
                   'business'=>'Harfi harfine raporlama ve stenografi kayıt faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.99.06',
                   'business'=>'Telefona dayalı destek faaliyetleri (telefon cevaplama ve uyandırma hizmetleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.99.07',
                   'business'=>'Barkodlama faaliyetleri (paketleme faaliyeti dışındakiler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.99.08',
                   'business'=>'İş takipçiliği faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'82.99.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer iş destek hizmet faaliyetleri (borcu ödenmeyen malların geri alınması, indirim kuponu dağıtım hizmetleri, park sayacından paraların toplanması ve diğer iş destek hizmetleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.11.41',
                   'business'=>'Belediyelerin kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.11.42',
                   'business'=>'Ekonomik ve sosyal planlama ile istatistik ile ilgili kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.11.43',
                   'business'=>'Finansal, mali ve denetim ile ilgili kamu yönetimi hizmetleri (defterdarlık, mal müdürlükleri, vergi daireleri, Sayıştay, kamu borç ve fonlarının yönetimi dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.11.44',
                   'business'=>'Genel personel işleri ile ilgili kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.11.45',
                   'business'=>'Gümrüklerle ilgili kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.11.46',
                   'business'=>'Muhtarların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.11.47',
                   'business'=>'Valiliklerin ve kaymakamlıkların kamu yönetimi hizmetleri (il ve ilçe özel idarelerinin faaliyetleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.11.48',
                   'business'=>'Yasama ve yürütme hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.11.90',
                   'business'=>'Kamu için diğer destekleyici kamu yönetimi hizmetleri (merkezi kamu ihale ve tedarik hizmetleri ile haritacılık vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.12.11',
                   'business'=>'Eğitime ilişkin kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.12.12',
                   'business'=>'İskan ve toplum refahına ilişkin kamu yönetimi hizmetleri (su temini ve çevre koruma programları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.12.13',
                   'business'=>'Sağlığa ve sosyal hizmetlere ilişkin kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.12.14',
                   'business'=>'Spor, dinlence, kültür ve dine ilişkin kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.13.11',
                   'business'=>'Çok amaçlı geliştirme projeleri ile ilgili kamu yönetimi hizmetleri (bölgesel kalkınma projeleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.13.12',
                   'business'=>'Genel ekonomik, ticari ve işgücü ile ilgili kamu yönetimi hizmetleri (genel ekonomi politikalarının oluşturulması, teşvik faaliyetleri, patent işleri, genel istihdam politikaları, metroloji işleri, istihdam vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.13.13',
                   'business'=>'Madencilik, doğal kaynaklar, imalat ve inşaat ile ilgili kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.13.14',
                   'business'=>'Tarım, ormancılık, balıkçılık ve avcılıkla ilgili kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.13.15',
                   'business'=>'Ticaret, otelcilik ve lokantacılık ile ilgili kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.13.16',
                   'business'=>'Turizm ile ilgili kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.13.17',
                   'business'=>'Ulaştırma ve iletişim ile ilgili kamu yönetimi hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.13.18',
                   'business'=>'Yakıt ve enerji ile ilgili kamu yönetimi hizmetleri (enerji bakanlığı, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.21.05',
                   'business'=>'Dış işleri ile ilgili kamu yönetimi hizmetleri (yurt dışı diplomatik hizmetler ve konsolosluk hizmetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.21.06',
                   'business'=>'Yurt dışı diplomatik hizmetler ve konsolosluk hizmetleri (yabancı konsolosluklar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.22.05',
                   'business'=>'(Değişik:RG-31/1/2018-30318) Askeri savunma hizmetleri (silahlı kuvvetler ve savunma ile ilgili idari hizmetler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.22.06',
                   'business'=>'Sivil savunma hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.23.04',
                   'business'=>'(Değişik:RG-31/1/2018-30318) Adli sistemin yönetilmesi, cumhuriyet savcılıklarının ve icra müdürlüklerinin faaliyetleri (ceza infaz kurumlarının ve mahkemelerin faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.23.05',
                   'business'=>'(Değişik:RG-31/1/2018-30318) Ceza infaz ve tutuk evlerinin faaliyetleri (rehabilitasyon faaliyetleri dahil, eğitim faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'84.23.06',
                   'business'=>'Mahkemelerin faaliyetleri (yüksek yargı organları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'84.24.01',
                   'business'=>'Kamu düzeni ve güvenliği ile ilgili faaliyetler (polis hizmetleri, sahil güvenlik vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'84.25.01',
                   'business'=>'İtfaiye hizmetleri (hava taşıtlarıyla yapılanlar ile orman yangınlarıyla mücadele ve koruma faaliyetleri hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'84.25.02',
                   'business'=>'Hava taşıtları yoluyla yapılan itfaiye hizmetleri (orman yangınlarıyla mücadele ve koruma faaliyetleri hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'84.30.01',
                   'business'=>'Zorunlu sosyal güvenlik faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.10.01',
                   'business'=>'Kamu kurumları tarafından verilen okul öncesi eğitim faaliyeti (okula yönelik eğitim verilmeyen gündüz bakım (kreş) faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.10.02',
                   'business'=>'Özel öğretim kurumları tarafından verilen okul öncesi eğitim faaliyeti (okula yönelik eğitim verilmeyen gündüz bakım (kreş) faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.20.06',
                   'business'=>'Kamu kurumları tarafından verilen fiziksel veya zihinsel engellilere yönelik ilköğretim faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.20.07',
                   'business'=>'Kamu kurumları tarafından verilen ilköğretim faaliyeti (yetişkinlere yönelik okuma yazma programlarının verilmesi dahil, engelliler için verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.20.08',
                   'business'=>'Özel öğretim kurumları tarafından verilen fiziksel veya zihinsel engellilere yönelik ilköğretim faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.20.09',
                   'business'=>'Özel öğretim kurumları tarafından verilen ilköğretim faaliyeti (yetişkinlere yönelik okuma yazma programlarının verilmesi dahil, engelliler için verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.31.12',
                   'business'=>'Kamu kurumları tarafından verilen genel ortaöğretim (ortaokul/lise) faaliyeti (engellilere yönelik verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.31.13',
                   'business'=>'Kamu kurumları tarafından verilen fiziksel veya zihinsel engellilere yönelik genel ortaöğretim (ortaokul/lise) faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.31.14',
                   'business'=>'Özel öğretim kurumları tarafından verilen genel ortaöğretim (ortaokul/lise) faaliyeti (engellilere yönelik verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.31.16',
                   'business'=>'Özel öğretim kurumları tarafından verilen fiziksel veya zihinsel engellilere yönelik genel ortaöğretim (ortaokul/lise) faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.32.10',
                   'business'=>'Kamu kurumları tarafından verilen fiziksel veya zihinsel engellilere yönelik teknik ve mesleki ortaöğretim (ortaokul/lise) faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.32.11',
                   'business'=>'Kamu kurumları tarafından verilen teknik ve mesleki ortaöğretim (ortaokul/lise) faaliyeti (engellilere yönelik verilen eğitim hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'85.32.12',
                   'business'=>'Özel öğretim kurumları tarafından verilen fiziksel veya zihinsel engellilere yönelik teknik ve mesleki ortaöğretim (ortaokul/lise) faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.32.13',
                   'business'=>'Özel öğretim kurumları tarafından verilen teknik ve mesleki ortaöğretim (ortaokul/lise) faaliyeti (engellilere yönelik verilen eğitim hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'85.32.14',
                   'business'=>'Çıraklık eğitimi',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'85.32.15',
                   'business'=>'Ticari sertifika veren havacılık, yelkencilik, gemicilik, vb. kursların faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'85.32.16',
                   'business'=>'Ticari taşıt kullanma belgesi veren sürücü kurslarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.32.90',
                   'business'=>'Mesleki amaçlı eğitim veren diğer kursların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.41.01',
                   'business'=>'Ortaöğretim sonrası yükseköğretim derecesinde olmayan eğitim faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.42.01',
                   'business'=>'Kamu kurumları tarafından verilen yükseköğretim faaliyeti (yükseköğretim düzeyinde eğitim sağlayan konservatuarlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.42.03',
                   'business'=>'Özel öğretim kurumları tarafından verilen yükseköğretim faaliyeti (yükseköğretim düzeyinde eğitim sağlayan konservatuarlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.51.03',
                   'business'=>'Spor ve eğlence eğitim kursları (futbol, dövüş sanatları, jimnastik, binicilik, yüzme, dalgıçlık, paraşüt, briç, yoga, vb. eğitimi ile profesyonel spor eğitimcilerinin faaliyetleri dahil, temel, orta ve yükseköğretim düzeyinde verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.52.05',
                   'business'=>'Kültürel eğitim veren kursların faaliyeti (bale, dans, müzik, fotoğraf, halk oyunu, resim, drama, vb. eğitimi dahil, temel, orta ve yükseköğretim düzeyinde verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.53.01',
                   'business'=>'Sürücü kursu faaliyetleri (ticari sertifika veren sürücülük, havacılık, yelkencilik, gemicilik eğitimi hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.01',
                   'business'=>'Halk eğitim merkezlerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.03',
                   'business'=>'Bilgisayar, yazılım, veritabanı, vb. eğitimi veren kursların faaliyetleri (temel, orta ve yükseköğretim düzeyinde verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.05',
                   'business'=>'Orta öğretime, yüksek öğretime, kamu personeli vb. sınavlara yönelik kurs ve etüt merkezlerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.06',
                   'business'=>'Biçki, dikiş, nakış, halıcılık, güzellik, berberlik, kuaförlük kurslarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.08',
                   'business'=>'Kuran kursları ve diğer dini eğitim veren yerlerin faaliyetleri (temel, orta ve yükseköğretim düzeyinde verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.09',
                   'business'=>'Dil ve konuşma becerileri eğitimi veren kursların faaliyetleri (temel, orta ve yükseköğretim düzeyinde verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.10',
                   'business'=>'Mankenlik, modelistlik, stilistlik kurslarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.12',
                   'business'=>'Muhasebe eğitimi kurslarının faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.15',
                   'business'=>'Akademik özel ders verme faaliyeti (temel, orta ve yükseköğretim düzeyinde bire bir eğitim)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.16',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Çocuk kulüplerinin faaliyetleri (6 yaş ve üzeri çocuklar için)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.59.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer eğitim kursu faaliyetleri (cankurtaranlık, hayatta kalma, topluluğa konuşma, hızlı okuma, vb. eğitimi dahil, yetişkin okuma yazma programları ile temel, orta ve yükseköğretim düzeyinde verilen eğitim hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'85.60.02',
                   'business'=>'Eğitimi destekleyici faaliyetler (eğitim rehberlik, danışmanlık (yurt dışı eğitim danışmanlığı dahil), test değerlendirme, öğrenci değişim programlarının organizasyonu, yaprak test ve soru bankası hazırlama gibi eğitimi destekleyen öğrenim dışı faaliyetler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'86.10.04',
                   'business'=>'Kamu kurumları tarafından verilen insan sağlığına yönelik özel ihtisas gerektiren yataklı hastane hizmetleri (kadın doğum, onkoloji, kemik, ruh ve sinir hastalıkları hastaneleri, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'86.10.05',
                   'business'=>'Kamu kurumları tarafından verilen insan sağlığına yönelik yataklı hastane hizmetleri (devlet üniversite hastaneleri dahil, özel ihtisas hastaneleri ile dişçilik, ambulansla taşıma, tıbbi laboratuvar test faaliyetleri hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'86.10.12',
                   'business'=>'Özel sağlık kurumları tarafından verilen insan sağlığına yönelik özel ihtisas gerektiren yataklı hastane hizmetleri (kadın doğum, onkoloji, kemik, ruh ve sinir hastalıkları hastaneleri, vb.)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'86.10.13',
                   'business'=>'Özel sağlık kurumları tarafından verilen insan sağlığına yönelik yataklı hastane hizmetleri (özel veya vakıf üniversite hastaneleri dahil, dişçilik, ambulansla taşıma, tıbbi laboratuvar testleri faaliyetleri hariç)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'86.21.02',
                   'business'=>'Aile ve toplum sağlığı merkezleri tarafından sağlanan yatılı olmayan genel hekimlik uygulama faaliyetleri (yatılı hastane faaliyetleri ile ebeler, hemşireler ve fizyoterapistlerce gerçekleştirilen paramedikal faaliyetler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.21.03',
                   'business'=>'Özel sağlık kurumları tarafından polikliniklerde sağlanan yatılı olmayan genel hekimlik uygulama faaliyetleri (özel muayene ve yatılı hastane faaliyetleri ile ebe, hemşire ve fizyoterapistlerin paramedikal faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.21.04',
                   'business'=>'Özel muayenehanelerde sağlanan yatılı olmayan genel hekimlik uygulama faaliyetleri (hastane ve poliklinik faaliyetleri ile ebe, hemşire ve fizyoterapistlerin paramedikal faaliyetleri hariç) ',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.21.05',
                   'business'=>'(Ek satır:RG-11/8/2023-32276) Ortak sağlık ve güvenlik birimlerinin (OSGB) faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.21.90',
                   'business'=>'(Değişik satır:RG-11/8/2023-32276) Diğer yatılı olmayan genel hekimlik uygulama faaliyetleri (ev, iş yeri, okul vb. yerlerde sağlananlar dahil; ebe, hemşire ve fizyoterapistlerin paramedikal faaliyetleri ile OSGB’lerin faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.22.02',
                   'business'=>'Özel muayenehanelerde sağlanan uzman hekimlik ile ilgili yatılı olmayan uygulama faaliyetleri (hastane ve poliklinik faaliyetleri ile ebe, hemşire ve fizyoterapistlerin paramedikal faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.22.05',
                   'business'=>'Özel sağlık kurumları tarafından poliklinik ve yatılı olmayan tıp merkezlerinde sağlanan uzman hekimlik ile ilgili uygulama faaliyetleri (yatılı hastane faaliyetleri ile ebe, hemşire ve fizyoterapistlerin paramedikal faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.22.06',
                   'business'=>'Aile ve toplum sağlığı merkezleri tarafından sağlanan yatılı olmayan uzman hekimlik uygulama faaliyetleri (yatılı hastane faaliyetleri ile ebe, hemşire ve fizyoterapistlerin paramedikal faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.22.07',
                   'business'=>'Diyaliz merkezleri (hastane dışı)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.22.90',
                   'business'=>'Diğer yatılı olmayan uzman hekimlik uygulama faaliyetleri (ev, iş yeri, okul vb. yerlerde sağlananlar dahil, ebe, hemşire ve fizyoterapistlerin paramedikal faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.23.01',
                   'business'=>'Özel sağlık kurumları tarafından sağlanan diş hekimliği uygulama faaliyetleri (yatılı hastane faaliyetleri ile diş hijyenistleri gibi paramedikal diş sağlığı personelinin faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.23.03',
                   'business'=>'Özel muayenehanelerde sağlanan diş hekimliği uygulama faaliyetleri (yatılı hastane faaliyetleri ile diş hijyenistleri gibi paramedikal diş sağlığı personelinin faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.23.05',
                   'business'=>'Kamu kurumları tarafından sağlanan diş hekimliği uygulama faaliyetleri (yatılı hastane faaliyetleri ile diş hijyenistleri gibi paramedikal diş sağlığı personelinin faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.01',
                   'business'=>'Hemşirelik hizmetleri (evdeki hastalar için bakım, koruma, anne bakımı, çocuk sağlığı ve hemşirelik bakımı alanındaki benzeri hizmetler dahil, hemşireli yatılı bakım tesislerinin faaliyetleri ile tıp doktorlarının hizmetleri hariç) (hastane dışı)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.03',
                   'business'=>'Tıp doktorları dışında yetkili kişilerce sağlanan akupunkturla tedavi faaliyeti (hastane dışı)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.04',
                   'business'=>'Ambulansla hasta taşıma faaliyeti (hastane dışı)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.05',
                   'business'=>'Ebe, sağlık memuru, sünnetçi, iğneci, pansumancı vb.leri tarafından verilen hizmetler (tıp doktorları dışında yetkili kişilerce sağlanan gebelik süresince ve doğum sonrası izleme ve tıbbi işlemleri kapsayan aile planlaması hizmetleri dahil) (hastane dışı)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.06',
                   'business'=>'Fizyoterapi hizmetleri (tıp doktorları dışında yetkili kişilerce sağlanan fizyoterapi, ergoterapi vb. alanlardaki hizmetler) (hastane dışı)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.07',
                   'business'=>'Analiz veya raporlama olmaksızın teşhis amaçlı görüntüleme hizmetleri (tıp doktorları dışında yetkili kişilerce sağlanan röntgen, ultrason, manyetik rezonans (MR) vb. görüntüleme hizmetleri) (hastane dışı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.09',
                   'business'=>'Kan, sperm ve organ bankalarının faaliyetleri (hastane dışı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.10',
                   'business'=>'Tıbbi laboratuvarların hizmetleri (adli tıp ve diş laboratuvarlarının faaliyetleri hariç) (hastane dışı)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.14 (Değişik:RG-18/3/2022-31782) ',
                   'business'=>'Tıp doktorları dışında yetkili kişilerce sağlanan akıl sağlığı hizmetleri (psikoanalistler, psikologlar, psikoterapistler ve psikolojik danışmanlar tarafından sağlanan hizmetler) (hastane dışı)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.16',
                   'business'=>'Adli tıp laboratuvarlarının faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.17',
                   'business'=>'(Ek satır:RG-12/3/2019-30712) Kan merkezlerinin faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'86.90.90',
                   'business'=>'Bys. diğer paramedikal insan sağlığı hizmetleri (tıp doktorları dışında yetkili kişilerce sağlanan mesleki terapi, aroma terapi, konuşma terapisi, homeopati, besin tedavisi, ayak bakımı, diş hijyeni vb. hizmetler) (hastane dışı)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'87.10.01',
                   'business'=>'Hemşireli yatılı bakım faaliyetleri (hemşireli bakım evlerinin, hemşireli huzur evlerinin faaliyetleri dahil, sadece asgari düzeyde hemşire bakımı sağlanan yaşlı evlerinin, yetimhanelerin, yurtların faaliyetleri ile evlerde sağlanan hizmetler hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'87.20.02',
                   'business'=>'Zihinsel engellilik, ruh sağlığı ve madde bağımlılığına yönelik yatılı bakım faaliyetleri (hastanelerin faaliyetleri ile yatılı sosyal hizmet faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'87.30.02',
                   'business'=>'Yaşlılara ve bedensel engellilere yönelik yatılı bakım faaliyetleri (destekli yaşam tesisleri, hemşire bakımı olmayan huzurevleri ve asgari düzeyde hemşire bakımı olan evlerin faaliyetleri dahil, yaşlılar için hemşire bakımlı evlerin faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'87.90.03',
                   'business'=>'Çocuklara ve gençlere yönelik diğer yatılı bakım faaliyetleri (kimsesiz çocuklar için sosyal hizmetler, çocuk bakım evleri dahil, çocuk ıslah evlerinin ve hemşireli bakım tesislerinin faaliyetleri ile bedensel engelliler için olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'87.90.04',
                   'business'=>'Çocuklara ve gençlere yönelik ıslah evleri ile çocuk suçlu ve sabıkalılar için bakım evlerince sağlanan diğer yatılı bakım faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'87.90.90',
                   'business'=>'Yetişkinlere yönelik bys diğer yatılı bakım faaliyetleri (sığınma evleri, geçici evsiz barınakları, suçlu ve sabıkalılar için bakım evleri dahil, hemşireli bakım tesislerinin faaliyetleri ile yaşlılar ve bedensel engelliler için olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'88.10.02',
                   'business'=>'Yaşlılar ve bedensel engelliler için barınacak yer sağlanmaksızın verilen sosyal hizmetler (yatılı bakım faaliyetleri ile engelli çocuklara yönelik gündüz bakım (kreş) faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'88.91.01',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Çocuk gündüz bakım (kreş) faaliyetleri (engelli çocuklar için olanlar ile bebek bakıcılığı dahil; okul öncesi eğitim faaliyetleri ile çocuk kulüpleri (6 yaş ve üzeri çocuklar için) hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'88.99.07',
                   'business'=>'Barınacak yer sağlanmaksızın mesleki rehabilitasyon hizmetleri (bedensel engelliler için rehabilitasyon hizmetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'88.99.08',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712)  Bys. barınacak yer sağlanmaksızın verilen diğer sosyal yardım hizmetleri (aile danışmanlığı ve rehberliği, borç danışmanlığı, sosyal hizmet için para toplama, evlat edindirme, evsiz, afetzede ve mültecilere geçici barınak sağlama, yardım için uygun kişi belirleme vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'88.99.09',
                   'business'=>'Barınacak yer sağlanmaksızın çocuk ve gençlere yönelik rehabilitasyon hizmetleri (zihinsel engelliler için olanlar dahil, bedensel engellilere yönelik olanlar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'90.01.14',
                   'business'=>'Canlı tiyatro, opera, bale, müzikal, konser vb. yapımların sahneye konulması faaliyetleri (illüzyon gösterileri, kukla gösterileri ve kumpanyalar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'90.01.15',
                   'business'=>'Orkestra ve bandoların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'90.01.16',
                   'business'=>'Bağımsız müzisyen, ses sanatçısı, konuşmacı, sunucu vb.lerin faaliyetleri (müzik grupları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'90.01.17',
                   'business'=>'Bağımsız manken ve modellerin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'90.01.18',
                   'business'=>'Bağımsız aktör, aktrist ve dublörlerin faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'90.01.20',
                   'business'=>'Sirklerin faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'90.01.90',
                   'business'=>'Bys. diğer gösteri sanatları',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'90.02.11',
                   'business'=>'Gösteri sanatlarına yönelik yönetmenlerin ve yapımcıların faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'90.02.12',
                   'business'=>'Gösteri sanatlarına yönelik diğer destekleyici faaliyetler (sahne tasarımcıları, dekoratörleri ve kostüm tasarımcılarının faaliyetleri ile gösteri için dekor ve arka perdenin, ışıklandırma ve ses ekipmanlarının işletilmesi)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'90.03.09',
                   'business'=>'Yazar, bestekar, heykeltıraş, ressam, karikatürcü, gravürcü, ebru sanatçısı, vb. bireysel sanatçıların faaliyetleri (hakkakçılık, hattatçılık, eşya ve motif süslemeciliği (tezyinatçılık) dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'90.03.11',
                   'business'=>'Bağımsız gazetecilerin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'90.03.12',
                   'business'=>'Tablo, gravür vb. sanat eserlerinin restorasyonu (müzelerde ve özel koleksiyonlarda yer alan eserlerin restorasyonu dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'90.04.01',
                   'business'=>'Sanat tesislerinin işletilmesi (sanat galerileri, konser ve tiyatro salonları ve diğer sanat tesisleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'91.01.02',
                   'business'=>'Kütüphane ve arşivlerin faaliyetleri (devlet arşivleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'91.02.02',
                   'business'=>'(Ek satır:RG-8/3/2020-31062) Müzelerin faaliyetleri (müzelerde ve özel koleksiyonlarda yer alan eserlerin konservasyonu faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'91.02.03',
                   'business'=>'(Ek satır:RG-8/3/2020-31062)  Müzelerde ve özel koleksiyonlarda yer alan eserlerin konservasyonu faaliyetleri',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'91.03.02',
                   'business'=>'Tarihi alanlar ve yapılar ile benzeri turistik yerlerin işletilmesi (tarihi alanların ve yapıların korunması dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'91.04.02',
                   'business'=>'Botanik bahçeleri, hayvanat bahçeleri ve tabiatı koruma alanlarıyla ilgili faaliyetler (milli parklar dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'92.00.01',
                   'business'=>'Müşterek bahis faaliyetleri (at yarışı, köpek yarışı, futbol ve diğer spor yarışmaları konusunda bahis hizmetleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'92.00.02',
                   'business'=>'Loto, vb. sayısal şans oyunlarına ilişkin faaliyetler (piyango biletlerinin satışı dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'92.00.03',
                   'business'=>'Kumarhanelerin faaliyetleri (çevrim içi olanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.11.01',
                   'business'=>'Spor tesislerinin işletilmesi (futbol, hokey, paten, golf, vb. sahaları, yarış pistleri, stadyumlar, yüzme havuzları, tenis kortları, bovling alanları, boks arenaları, vb. tesisler)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.11.02',
                   'business'=>'Hipodromların işletilmesi',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.12.01',
                   'business'=>'Atıcılık ve okçuluk kulüplerinin faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'93.12.03',
                   'business'=>'Futbol, voleybol, basketbol vb. kulüplerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.12.04',
                   'business'=>'Güreş kulüplerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.12.05',
                   'business'=>'Jokey kulüplerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.12.06',
                   'business'=>'Tenis kulüplerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.12.07',
                   'business'=>'Yüzme kulüplerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.12.09',
                   'business'=>'Atletizm kulüplerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.12.90',
                   'business'=>'Diğer spor kulüplerinin faaliyetleri (golf, bovling, satranç, kayak, buz pateni, vb. kulüpleri)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.13.01',
                   'business'=>'Form tutma ve vücut geliştirme salonlarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.19.01',
                   'business'=>'Kendi hesabına bireysel çalışan atlet, hakem, zaman tutucu, antrenör, spor eğitmeni vb. sporcuların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.19.02',
                   'business'=>'Spor ve eğlence amaçlı spor etkinliği ve karşılaşması düzenleyicilerinin ve organizatörlerin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.19.03',
                   'business'=>'Spor ve eğlence amaçlı sporlara ilişkin destek hizmetler (balıkçılık ve avcılık spor alanlarının işletilmesi, avcılık, balıkçılık ve dağcılık rehberliği, yarış atı ahırı ve yarış aracı garajlarının hizmetleri, spor ve eğlence hayvanlarının eğitimi, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'93.19.04',
                   'business'=>'Spor ligleri ve düzenleyici birimlerin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.19.05',
                   'business'=>'Bilardo salonlarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.19.06',
                   'business'=>'Atış poligonlarının faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'93.19.90',
                   'business'=>'Diğer spor ve eğlence amaçlı spor hizmetleri (paraşüt hizmetleri, delta-kanat hizmetleri, dalgıçlık hizmetleri ve bys. Diğer spor ve eğlence hizmetleri)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'93.21.01',
                   'business'=>'Eğlence parkları ve lunaparkların faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.01',
                   'business'=>'Plaj alanlarının işletilmesi (bu tesislerin bütünleyici bir parçası olan soyunma odası, dolap, sandalye, kano, deniz motosikleti vb. kiralanması dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.02',
                   'business'=>'(Değişik satır:RG-12/3/2019-30712) Düğün, balo ve kokteyl salonlarının işletilmesi',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.03',
                   'business'=>'(Değişik:RG-31/1/2018-30318) Oyun makinelerinin işletilmesi',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.05',
                   'business'=>'Dans pistlerinin, diskoteklerin işletilmesi (içecek sunum hizmetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.07',
                   'business'=>'Marina, vb. dinlence amaçlı ulaştırma tesislerinin işletilmesi',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.08',
                   'business'=>'Havai fişek ile "ses ve ışık" gösterisi faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.09',
                   'business'=>'Kayak pistlerinin işletilmesi',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.10',
                   'business'=>'Dinlence (rekreasyon) parklarının faaliyetleri (konaklamalı olanlar ile eğlence parkları ve lunaparkların işletilmesi hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.11 (Ek:RG-18/3/2022-31782) ',
                   'business'=>'Elektronik spor (e-spor) oyun merkezlerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'93.29.90',
                   'business'=>'Başka yerde sınıflandırılmamış çeşitli eğlence hizmetleri (boğa güreşi, rodeo vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'94.11.03',
                   'business'=>'Esnaf ve sanatkar odaları, birlikleri ve üst kuruluşlarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.11.04',
                   'business'=>'Çiftçi ve ziraat odaları, birlikleri ve üst kuruluşlarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.11.05',
                   'business'=>'Ticaret ve sanayi odaları, deniz ticaret odaları ve üst kuruluşlarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.11.06',
                   'business'=>'İşveren sendikalarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.11.90',
                   'business'=>'Diğer iş ve işveren odaları, birlikleri ve üst kuruluşlarının faaliyetleri (işçi, işveren ve memur sendikaları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.12.01',
                   'business'=>'Baroların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.12.05',
                   'business'=>'Mesleki birlikler, dernekler ve odaların faaliyetleri (mimar, mühendis, tabip, muhasebeci, yazar vb. dernek ve odaları) (barolar hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.12.90',
                   'business'=>'Diğer profesyonel meslek kuruluşlarının faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.20.01',
                   'business'=>'İşçi ve memur sendikalarının faaliyetleri (üst kuruluşları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.91.02',
                   'business'=>'Üyelik gerektiren dini kuruluşların faaliyetleri (cami, kilise, sinagog vb. yerlerde ibadet edenlere doğrudan hizmet sağlayan dini organizasyonların veya kişilerin faaliyetleri vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.92.02',
                   'business'=>'Siyasi kuruluşların faaliyetleri (siyasi partiler, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.01',
                   'business'=>'Üyelik gerektiren çevre ve doğal hayatın korunmasına yönelik dernek ve birliklerin faaliyetleri (vahşi yaşamı koruma kuruluşları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.02',
                   'business'=>'Üyelik gerektiren gençlik dernek ve birliklerinin faaliyetleri (öğrenci birlikleri ile izci birlik ve kulüpleri dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.03',
                   'business'=>'Üyelik gerektiren yurtsever dernek ve birliklerinin faaliyetleri (savaş gazisi birlikleri vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.04',
                   'business'=>'Üyelik gerektiren hayvanları koruma dernek ve birliklerinin faaliyetleri (hayvanları koruma derneği, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.05',
                   'business'=>'Üyelik gerektiren kadın hakları koruma dernek ve birliklerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.08',
                   'business'=>'Okul aile birlikleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.09',
                   'business'=>'Üyelik gerektiren kültür, dayanışma ve eğlence dernek ve birliklerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.12',
                   'business'=>'Üyelik gerektiren ideoloji ve düşünce kuruluşlarının ve derneklerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.13',
                   'business'=>'(Değişik:RG-31/1/2018-30318) Üyelik gerektiren sivil arama ve kurtarma dernek ve birliklerinin faaliyetleri (sivil savunma faaliyetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.14',
                   'business'=>'Üyelik gerektiren bireysel özgürlük ve insan hakları dernek ve birliklerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.15',
                   'business'=>'Üyelik gerektiren gönüllü sağlık dernek ve birliklerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.16',
                   'business'=>'Engellilere, etnik gruplara ve azınlıklara yönelik üyelik gerektiren birlik ve kuruluşların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.17',
                   'business'=>'Üyelik gerektiren toplumsal hayatı geliştirme ve iyileştirmeye yönelik oluşturulan birlik ve kuruluşların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.18',
                   'business'=>'Üyelik gerektiren tüketici haklarını savunan birlikler ve kuruluşların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.19',
                   'business'=>'Havacılığın geliştirilmesine yönelik üyelik gerektiren kuruluş ve derneklerin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.20',
                   'business'=>'Üye olunan derneklerin üst kuruluşları ve üst birlikleri (iş, işveren ve mesleki birlik ve derneklerin üst kuruluşları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.21',
                   'business'=>'Üyelik gerektiren yardım kuruluşlarının ve derneklerinin faaliyetleri (doğal afetlerde zarar görenler, evsizler, fakirler için organizasyonlar, vb.) (arama ve kurtarma hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.22',
                   'business'=>'Üyelik gerektiren eğitim ve araştırma birlik ve derneklerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.23',
                   'business'=>'Üyelik gerektiren konut ve kalkınma birlik ve derneklerinin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.24',
                   'business'=>'Üyelik gerektiren mezun dernek ve birliklerinin faaliyetleri (profesyonel meslek kuruluşları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'94.99.90',
                   'business'=>'Üyelik gerektiren başka yerde sınıflandırılmamış diğer üye olunan kuruluşların faaliyetleri (klasik araba birlikleri, kiracı birlikleri, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.11.01',
                   'business'=>'Bilgisayarların ve bilgisayar çevre birimlerinin onarımı (ATM\'ler ve pos cihazları dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.12.01',
                   'business'=>'İletişim araç ve gereçlerinin onarımı (kablosuz telefonlar, telsizler, cep telefonları, çağrı cihazları, ticari kameralar vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.21.01',
                   'business'=>'Tüketici elektroniği ürünlerinin bakım ve onarımı (televizyon, radyo, CD/DVD oynatıcıları, ev tipi video kameraları vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.22.01',
                   'business'=>'Evde kullanılan elektrikli cihazların onarımı (buzdolabı, fırın, çamaşır makinesi, bulaşık makinesi, oda kliması, elektrikli küçük ev aletleri, vb.)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'95.22.02',
                   'business'=>'Ev ve bahçe gereçlerinin onarımı (mutfak eşyası, makas, çim biçme makinesi, budama makasları, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.22.03',
                   'business'=>'Termosifon, şofben, banyo kazanı vb. bakım ve onarımı (merkezi ısıtma kazanlarının (boylerler) onarımı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'95.23.01',
                   'business'=>'Ayakkabı ve deri eşyaların onarımı (ayakkabı, valiz, el çantası, vb.) (deri giyim eşyası hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'95.24.01',
                   'business'=>'Mobilyaların ve ev döşemelerinin onarımı (büro ve ev mobilyalarının yeniden döşenmesi, kaplanması, onarımı ve yenilenmesi dahil, halı ve kilim onarımı hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'95.25.01',
                   'business'=>'Saatlerin onarımı (kronometreler dahil, devam kayıt cihazları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.25.02',
                   'business'=>'Mücevherlerin onarımı',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'95.29.02',
                   'business'=>'Giyim eşyası ve ev tekstil ürünlerinin onarımı ve tadilatı (deri giyim eşyaları hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.29.03',
                   'business'=>'Spor araç ve gereçleri ile kamp malzemelerinin bakımı ve onarımı (kayak, sörf tahtası, paten, raket, diğer spor ve açık hava oyunlarına ait eşya ve ekipmanlar) (spor ve eğlence amaçlı silahların onarımı hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.29.04',
                   'business'=>'Çilingirlik ve anahtar çoğaltma hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.29.05',
                   'business'=>'Bisiklet onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.29.06',
                   'business'=>'Müzik aletlerinin bakım ve onarımı (piyano akordu dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.29.07',
                   'business'=>'Deri ve deri bileşimli giyim eşyaları ile kürk giyim eşyalarının onarımı',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'95.29.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer kişisel ve ev eşyalarının bakım ve onarımı (kitap, aydınlatma eşyaları, oyuncak, vb. onarımı ile kimlik kartlarının plastikle kaplanması dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.01.01',
                   'business'=>'Çamaşırhane hizmetleri (para veya jetonla çalışan makinelerle yapılanlar dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.01.02',
                   'business'=>'Halı ve kilim yıkama hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.01.03',
                   'business'=>'Giyim eşyası ve diğer tekstil ürünlerini boyama ve renklendirme hizmetleri (imalat aşamasında yapılanlar hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.01.04',
                   'business'=>'Kuru temizleme hizmetleri (giysi ve diğer tekstil ürünlerinin, kürk ve deri ürünlerinin kuru temizlenmesi)',
                   'hazard_class'=>'Çok Tehlikeli',
                ],
                [
                   'nace_code'=>'96.01.05',
                   'business'=>'Giyim eşyası ve diğer tekstil ürünlerini ütüleme hizmetleri (pres ve silindir ütüleme hizmetleri dahil)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.02.01',
                   'business'=>'Güzellik salonlarının faaliyetleri (cilt bakımı, kaş alma, ağda, manikür, pedikür, makyaj, kalıcı makyaj vb.nin bir arada sunulduğu salonlar) (sağlık bakım hizmetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.02.02',
                   'business'=>'Erkekler için kuaför ve berber işletmelerinin faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.02.03',
                   'business'=>'Kadınlar için kuaför işletmelerinin faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.02.04',
                   'business'=>'Sadece manikür ve pedikür hizmeti sunan salonların faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.02.05',
                   'business'=>'Sadece ağdacılık hizmeti sunan salonların faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.03.01',
                   'business'=>'(Değişik:RG-31/1/2018-30318) Cenaze işleri ile ilgili faaliyetler (cenaze yıkama yerlerinin işletilmesi, cenazenin nakli, yıkama hizmetleri, defin hizmetleri vb.)',
                   'hazard_class'=>' Tehlikeli',
                ],
                [
                   'nace_code'=>'96.03.02',
                   'business'=>'(Ek:RG-31/1/2018-30318) Mezarlıkların satış hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.04.01',
                   'business'=>'Hamam, sauna, vb. yerlerin faaliyetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.04.02',
                   'business'=>'Kaplıca, ılıca, içmeler, spa merkezleri, vb. yerlerin faaliyetleri (konaklama hizmetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.04.03',
                   'business'=>'Zayıflama salonu, masaj salonu, solaryum, vb. yerlerin işletilmesi faaliyetleri (form tutma salonlarının ve diyetisyenlerin faaliyetleri hariç)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.01',
                   'business'=>'Ayakkabı boyama hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.02',
                   'business'=>'Nikah salonlarının hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.03',
                   'business'=>'Fal , astroloji ve spiritualist hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.04',
                   'business'=>'Genel tuvaletlerin işletilmesi faaliyeti',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.05',
                   'business'=>'Hamallık hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.07',
                   'business'=>'Kendi hesabına çalışan valelerin hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.08',
                   'business'=>'Eskort ve refakat hizmetleri (güvenlik hizmetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.09',
                   'business'=>'Tanıştırma bürolarının ve evlendirme ajanslarının hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.10',
                   'business'=>'Kendi hesabına çalışan yamak, garson, vb. hizmet sunanların faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.12',
                   'business'=>'Genelev hizmetleri',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.14',
                   'business'=>'Ev hayvanları bakım hizmetleri (ev hayvanlarına verilen besleme, bakım, barındırma, kuaförlük, eğitim, vb. hizmetler)',
                   'hazard_class'=>'Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.15',
                   'business'=>'Şecere bulma faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.16',
                   'business'=>'Jeton ile çalışan kişisel hizmet makinelerinin işletilmesi faaliyetleri (jetonlu makinelerle vesikalık fotoğraf, emanet dolapları, tartı, tansiyon ölçümü vb. hizmetler dahil, oyun ve kumar makineleri ile çamaşırhane hizmetleri hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.18',
                   'business'=>'Arzuhalcilerin faaliyetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'96.09.90',
                   'business'=>'Başka yerde sınıflandırılmamış diğer hizmet faaliyetleri (dövme ve piercing hizmetleri, vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'97.00.10',
                   'business'=>'Ev içi çalışan personelin işverenleri olarak hanehalklarının hizmetleri',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'98.10.01',
                   'business'=>'Hanehalkları tarafından kendi kullanımlarına yönelik olarak üretilen ayrım yapılmamış mallar',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'98.20.01',
                   'business'=>'Hanehalkları tarafından kendi kullanımlarına yönelik olarak üretilen ayrım yapılmamış hizmetler',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'99.00.15',
                   'business'=>'Uluslararası örgütler ve temsilciliklerinin faaliyetleri (yabancı ülke elçilikleri, milletlerarası işbirliği örgütleri, vb. dahil)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.13.02',
                   'business'=>'(Ek satır:RG-11/8/2023-32276) Kendi adına menkul sermaye iradı faaliyetleri (temettü, banka faizi, iştirak kazançları vb. dahil; ücret geliri elde etme hariç)',
                   'hazard_class'=>'Az Tehlikeli',
                ],
                [
                   'nace_code'=>'66.13.03',
                   'business'=>'(Ek satır:RG-11/8/2023-32276) Ücret geliri elde etme faaliyetleri (huzur hakkı vb.)',
                   'hazard_class'=>'Az Tehlikeli',
                ],

            ];


            // Modelinizi kullanarak yeni kayıtları ekleyin
            foreach ($new_records as $record) {
                NaceCodes::create($record);
            }
    }
}
