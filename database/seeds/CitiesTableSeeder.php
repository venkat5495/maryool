<?php

use Illuminate\Database\Seeder;
use App\City;
class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('cities')->truncate();

    	$cities=
	    '[{
	        "city_id" : 1,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "تبوك",
	            "en" : "Tabuk"
	        }
	    },
	    {
	        "city_id" : 2,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "نعمي",
	            "en" : "Nami"
	        }
	    },
	    {
	        "city_id" : 3,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرياض",
	            "en" : "Riyadh"
	        }
	    },
	    {
	        "city_id" : 4,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "حميط",
	            "en" : "Humayt"
	        }
	    },
	    {
	        "city_id" : 5,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الطائف",
	            "en" : "At Taif"
	        }
	    },
	    {
	        "city_id" : 6,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مكة المكرمة",
	            "en" : "Makkah Al Mukarramah"
	        }
	    },
	    {
	        "city_id" : 7,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "رجم الطيارة",
	            "en" : "Rajm At Tayarah"
	        }
	    },
	    {
	        "city_id" : 8,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الثميد",
	            "en" : "Ath Thumayd"
	        }
	    },
	    {
	        "city_id" : 9,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "عسيلة",
	            "en" : "Asillah"
	        }
	    },
	    {
	        "city_id" : 10,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "حائل",
	            "en" : "Hail"
	        }
	    },
	    {
	        "city_id" : 11,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بريدة",
	            "en" : "Buraydah"
	        }
	    },
	    {
	        "city_id" : 12,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الهفوف",
	            "en" : "Al Hufuf"
	        }
	    },
	    {
	        "city_id" : 13,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الدمام",
	            "en" : "Ad Dammam"
	        }
	    },
	    {
	        "city_id" : 14,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المدينة المنورة",
	            "en" : "Al Madinah Al Munawwarah"
	        }
	    },
	    {
	        "city_id" : 15,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ابها",
	            "en" : "Abha"
	        }
	    },
	    {
	        "city_id" : 16,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "حالة عمار",
	            "en" : "Halat Ammar"
	        }
	    },
	    {
	        "city_id" : 17,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "جازان",
	            "en" : "Jazan"
	        }
	    },
	    {
	        "city_id" : 18,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "جدة",
	            "en" : "Jeddah"
	        }
	    },
	    {
	        "city_id" : 19,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الشايب",
	            "en" : "Ash Shayib"
	        }
	    },
	    {
	        "city_id" : 20,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الفوهة",
	            "en" : "Al Fawhah"
	        }
	    },
	    {
	        "city_id" : 21,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "اللوز",
	            "en" : "Al Lawz"
	        }
	    },
	    {
	        "city_id" : 22,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "عين الأخضر",
	            "en" : "Ayn Al Akhdar"
	        }
	    },
	    {
	        "city_id" : 23,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "ذات الحاج",
	            "en" : "Dhat Al Hajj"
	        }
	    },
	    {
	        "city_id" : 24,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المجمعة",
	            "en" : "Al Majmaah"
	        }
	    },
	    {
	        "city_id" : 25,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "قيال",
	            "en" : "Qiyal"
	        }
	    },
	    {
	        "city_id" : 26,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الاخضر",
	            "en" : "Al Akhdar"
	        }
	    },
	    {
	        "city_id" : 27,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "البديعة",
	            "en" : "Al Badiah"
	        }
	    },
	    {
	        "city_id" : 28,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "مغيرة",
	            "en" : "Mughayrah"
	        }
	    },
	    {
	        "city_id" : 29,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الهوجاء",
	            "en" : "Al Hawja"
	        }
	    },
	    {
	        "city_id" : 30,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "البديعة",
	            "en" : "Al Badiah"
	        }
	    },
	    {
	        "city_id" : 31,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الخبر",
	            "en" : "Al Khubar"
	        }
	    },
	    {
	        "city_id" : 32,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "ابار قنا",
	            "en" : "Abar Qana"
	        }
	    },
	    {
	        "city_id" : 33,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الجبعاوية",
	            "en" : "Al Jabawiyah"
	        }
	    },
	    {
	        "city_id" : 34,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الحميضة",
	            "en" : "Al Humaydah"
	        }
	    },
	    {
	        "city_id" : 35,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "البيانة",
	            "en" : "Al Bayyanah"
	        }
	    },
	    {
	        "city_id" : 36,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "حقل",
	            "en" : "Haql"
	        }
	    },
	    {
	        "city_id" : 37,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الدرة",
	            "en" : "Ad Durrah"
	        }
	    },
	    {
	        "city_id" : 38,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الزيتة",
	            "en" : "Az Zaytah"
	        }
	    },
	    {
	        "city_id" : 39,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "علقان",
	            "en" : "Alaqan"
	        }
	    },
	    {
	        "city_id" : 40,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الوادي الجديد",
	            "en" : "Al Wadi Al Jadid"
	        }
	    },
	    {
	        "city_id" : 41,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "مليح",
	            "en" : "Mulayh"
	        }
	    },
	    {
	        "city_id" : 42,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "ابو الحنشان",
	            "en" : "Abu Al Hinshan"
	        }
	    },
	    {
	        "city_id" : 43,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "مقنا",
	            "en" : "Maqna"
	        }
	    },
	    {
	        "city_id" : 44,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ابو قعر",
	            "en" : "Abu Qaar"
	        }
	    },
	    {
	        "city_id" : 45,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "مركز العوجاء",
	            "en" : "Markaz Al Awja"
	        }
	    },
	    {
	        "city_id" : 46,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "مركز العليمة",
	            "en" : "Markaz Al Ulayyimah"
	        }
	    },
	    {
	        "city_id" : 47,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "حفر الباطن",
	            "en" : "Hafar Al Batin"
	        }
	    },
	    {
	        "city_id" : 48,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "القلت",
	            "en" : "Al Qalt"
	        }
	    },
	    {
	        "city_id" : 49,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "النظيم",
	            "en" : "An Nadhim"
	        }
	    },
	    {
	        "city_id" : 50,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ابن طوالة",
	            "en" : "Ibn Tuwalah"
	        }
	    },
	    {
	        "city_id" : 51,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الصداوي",
	            "en" : "As Sidawi"
	        }
	    },
	    {
	        "city_id" : 52,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ام قليب",
	            "en" : "Umm Qulaib"
	        }
	    },
	    {
	        "city_id" : 53,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "عريفج",
	            "en" : "Urayfij"
	        }
	    },
	    {
	        "city_id" : 54,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ابن شرار",
	            "en" : "Ibn Sharar"
	        }
	    },
    {
        "city_id" : 55,
        "region_id" : 13,
        "name" : {
            "ar" : "القيصومة",
            "en" : "Al Qaysumah"
        }
    },
    {
        "city_id" : 56,
        "region_id" : 13,
        "name" : {
            "ar" : "الرقعي الجديدة",
            "en" : "Ar Ruqi Al Jadidah"
        }
    },
    {
        "city_id" : 57,
        "region_id" : 13,
        "name" : {
            "ar" : "ذبحة",
            "en" : "Dhabhah"
        }
    },
    {
        "city_id" : 58,
        "region_id" : 13,
        "name" : {
            "ar" : "الصفيري",
            "en" : "As Sufairy"
        }
    },
    {
        "city_id" : 59,
        "region_id" : 13,
        "name" : {
            "ar" : "الوايلية",
            "en" : "Al Wayliyah"
        }
    },
    {
        "city_id" : 60,
        "region_id" : 13,
        "name" : {
            "ar" : "الفيوان",
            "en" : "Al Fiwan"
        }
    },
    {
        "city_id" : 61,
        "region_id" : 13,
        "name" : {
            "ar" : "الحماطيات",
            "en" : "Al Hamatiyat"
        }
    },
    {
        "city_id" : 62,
        "region_id" : 8,
        "name" : {
            "ar" : "خميس مشيط",
            "en" : "Khamis Mushayt"
        }
    },
    {
        "city_id" : 63,
        "region_id" : 13,
        "name" : {
            "ar" : "الجبو",
            "en" : "Al Jabu"
        }
    },
    {
        "city_id" : 64,
        "region_id" : 13,
        "name" : {
            "ar" : "المسناة",
            "en" : "Al Masnah"
        }
    },
    {
        "city_id" : 65,
        "region_id" : 8,
        "name" : {
            "ar" : "احد رفيده",
            "en" : "Ahad Rifaydah"
        }
    },
    {
        "city_id" : 66,
        "region_id" : 13,
        "name" : {
            "ar" : "ام عشر الشرقية",
            "en" : "Umm Ishar Ash Sharqiyyah"
        }
    },
    {
        "city_id" : 67,
        "region_id" : 13,
        "name" : {
            "ar" : "القطيف",
            "en" : "Al Qatif"
        }
    },
    {
        "city_id" : 68,
        "region_id" : 3,
        "name" : {
            "ar" : "بوهان",
            "en" : "Buhan"
        }
    },
    {
        "city_id" : 69,
        "region_id" : 3,
        "name" : {
            "ar" : "السنانيات",
            "en" : "As Sananiyat"
        }
    },
    {
        "city_id" : 70,
        "region_id" : 3,
        "name" : {
            "ar" : "حزايا",
            "en" : "Hazaya"
        }
    },
    {
        "city_id" : 71,
        "region_id" : 3,
        "name" : {
            "ar" : "أكباد",
            "en" : "Akbad"
        }
    },
    {
        "city_id" : 72,
        "region_id" : 3,
        "name" : {
            "ar" : "بئر الحيز",
            "en" : "Bir Al Hayz"
        }
    },
    {
        "city_id" : 73,
        "region_id" : 3,
        "name" : {
            "ar" : "جريداء",
            "en" : "Jurayda"
        }
    },
    {
        "city_id" : 74,
        "region_id" : 3,
        "name" : {
            "ar" : "تيماء",
            "en" : "Tayma"
        }
    },
    {
        "city_id" : 75,
        "region_id" : 3,
        "name" : {
            "ar" : "العسافية",
            "en" : "Al Assafiyah"
        }
    },
    {
        "city_id" : 76,
        "region_id" : 3,
        "name" : {
            "ar" : "عردة",
            "en" : "Ardah"
        }
    },
    {
        "city_id" : 77,
        "region_id" : 3,
        "name" : {
            "ar" : "الكتيب",
            "en" : "Al Kutaib"
        }
    },
    {
        "city_id" : 78,
        "region_id" : 3,
        "name" : {
            "ar" : "بئر فجر",
            "en" : "Bir Fajr"
        }
    },
    {
        "city_id" : 79,
        "region_id" : 3,
        "name" : {
            "ar" : "القليبة",
            "en" : "Al Qalibah"
        }
    },
    {
        "city_id" : 80,
        "region_id" : 5,
        "name" : {
            "ar" : "عنيزة",
            "en" : "Unayzah"
        }
    },
    {
        "city_id" : 81,
        "region_id" : 13,
        "name" : {
            "ar" : "الرافعية",
            "en" : "Ar Rafiyah"
        }
    },
    {
        "city_id" : 82,
        "region_id" : 13,
        "name" : {
            "ar" : "الكبريت",
            "en" : "Al Kabarit"
        }
    },
    {
        "city_id" : 83,
        "region_id" : 13,
        "name" : {
            "ar" : "رغوة",
            "en" : "Raghwah"
        }
    },
    {
        "city_id" : 84,
        "region_id" : 13,
        "name" : {
            "ar" : "حمى",
            "en" : "Hamma"
        }
    },
    {
        "city_id" : 85,
        "region_id" : 13,
        "name" : {
            "ar" : "الزبر",
            "en" : "Az Zabr"
        }
    },
    {
        "city_id" : 86,
        "region_id" : 13,
        "name" : {
            "ar" : "السفانية",
            "en" : "As Saffaniyah"
        }
    },
    {
        "city_id" : 87,
        "region_id" : 13,
        "name" : {
            "ar" : "المحوى",
            "en" : "Al Mahawa"
        }
    },
    {
        "city_id" : 88,
        "region_id" : 13,
        "name" : {
            "ar" : "أم غور",
            "en" : "Umm Ghawr"
        }
    },
    {
        "city_id" : 89,
        "region_id" : 13,
        "name" : {
            "ar" : "قرية العليا",
            "en" : "Qaryat Al Ulya"
        }
    },
    {
        "city_id" : 90,
        "region_id" : 13,
        "name" : {
            "ar" : "الرفيعة",
            "en" : "Ar Rafiah"
        }
    },
    {
        "city_id" : 91,
        "region_id" : 13,
        "name" : {
            "ar" : "جرارة",
            "en" : "Jarrarah"
        }
    },
    {
        "city_id" : 92,
        "region_id" : 13,
        "name" : {
            "ar" : "قرية",
            "en" : "Qurayyah"
        }
    },
    {
        "city_id" : 93,
        "region_id" : 13,
        "name" : {
            "ar" : "البويبيات",
            "en" : "Al Buwaybiyat"
        }
    },
    {
        "city_id" : 94,
        "region_id" : 13,
        "name" : {
            "ar" : "السعيرة",
            "en" : "As Suayyirah"
        }
    },
    {
        "city_id" : 95,
        "region_id" : 13,
        "name" : {
            "ar" : "مناخ",
            "en" : "Manakh"
        }
    },
    {
        "city_id" : 96,
        "region_id" : 13,
        "name" : {
            "ar" : "الحيرا",
            "en" : "Al Hayra"
        }
    },
    {
        "city_id" : 97,
        "region_id" : 13,
        "name" : {
            "ar" : "ام الشفلح",
            "en" : "Umm Ash Shifallah"
        }
    },
    {
        "city_id" : 98,
        "region_id" : 13,
        "name" : {
            "ar" : "اللهابة",
            "en" : "Al Lahabah"
        }
    },
    {
        "city_id" : 99,
        "region_id" : 13,
        "name" : {
            "ar" : "الفريدة",
            "en" : "Al Farridah"
        }
    },
    {
        "city_id" : 100,
        "region_id" : 13,
        "name" : {
            "ar" : "الشامية",
            "en" : "Ash Shamiyah"
        }
    },
    {
        "city_id" : 101,
        "region_id" : 13,
        "name" : {
            "ar" : "العيطلية",
            "en" : "Al Aytaliyah"
        }
    },
    {
        "city_id" : 102,
        "region_id" : 13,
        "name" : {
            "ar" : "سحمة",
            "en" : "Sihmah"
        }
    },
    {
        "city_id" : 103,
        "region_id" : 13,
        "name" : {
            "ar" : "الشملول / ام عقلا",
            "en" : "Ash Shamlul / Umm Aqla"
        }
    },
    {
        "city_id" : 104,
        "region_id" : 13,
        "name" : {
            "ar" : "ام الهوشات",
            "en" : "Umm Al Hawshat"
        }
    },
    {
        "city_id" : 105,
        "region_id" : 13,
        "name" : {
            "ar" : "الشيط",
            "en" : "Ash Shayyit"
        }
    },
    {
        "city_id" : 106,
        "region_id" : 13,
        "name" : {
            "ar" : "العاذرية",
            "en" : "Al Adhiriyah"
        }
    },
    {
        "city_id" : 107,
        "region_id" : 13,
        "name" : {
            "ar" : "الشيحية",
            "en" : "Ash Shihiyah"
        }
    },
    {
        "city_id" : 108,
        "region_id" : 13,
        "name" : {
            "ar" : "حزوة / العمانية",
            "en" : "Hizwah / Al Umaniyah"
        }
    },
    {
        "city_id" : 109,
        "region_id" : 13,
        "name" : {
            "ar" : "القرعاء",
            "en" : "Al Qara"
        }
    },
    {
        "city_id" : 110,
        "region_id" : 13,
        "name" : {
            "ar" : "اللصافة",
            "en" : "Al Lisafah"
        }
    },
    {
        "city_id" : 111,
        "region_id" : 13,
        "name" : {
            "ar" : "النقيرة",
            "en" : "An Nuqayrah"
        }
    },
    {
        "city_id" : 112,
        "region_id" : 13,
        "name" : {
            "ar" : "هجرة أولاد حثلين",
            "en" : "Hijrat Awlad Hithlin"
        }
    },
    {
        "city_id" : 113,
        "region_id" : 13,
        "name" : {
            "ar" : "الجبيل",
            "en" : "Al Jubail"
        }
    },
    {
        "city_id" : 114,
        "region_id" : 13,
        "name" : {
            "ar" : "فرزان",
            "en" : "Farzan"
        }
    },
    {
        "city_id" : 115,
        "region_id" : 13,
        "name" : {
            "ar" : "النعيرية",
            "en" : "An Nuayriyah"
        }
    },
    {
        "city_id" : 116,
        "region_id" : 13,
        "name" : {
            "ar" : "ام ضليع",
            "en" : "Umm Dulay"
        }
    },
    {
        "city_id" : 117,
        "region_id" : 13,
        "name" : {
            "ar" : "مليجة",
            "en" : "Mulayjah"
        }
    },
    {
        "city_id" : 118,
        "region_id" : 13,
        "name" : {
            "ar" : "الصرار",
            "en" : "As Sarrar"
        }
    },
    {
        "city_id" : 119,
        "region_id" : 13,
        "name" : {
            "ar" : "حنيذ",
            "en" : "Hanidh"
        }
    },
    {
        "city_id" : 120,
        "region_id" : 13,
        "name" : {
            "ar" : "مغطي",
            "en" : "Mughati"
        }
    },
    {
        "city_id" : 121,
        "region_id" : 13,
        "name" : {
            "ar" : "شفية",
            "en" : "Shifiyah"
        }
    },
    {
        "city_id" : 122,
        "region_id" : 13,
        "name" : {
            "ar" : "عتيق",
            "en" : "Utayyiq"
        }
    },
    {
        "city_id" : 123,
        "region_id" : 13,
        "name" : {
            "ar" : "الحسي",
            "en" : "Al Husayy"
        }
    },
    {
        "city_id" : 124,
        "region_id" : 13,
        "name" : {
            "ar" : "ثاج",
            "en" : "Thaj"
        }
    },
    {
        "city_id" : 125,
        "region_id" : 13,
        "name" : {
            "ar" : "الحناة",
            "en" : "Al Hinnah"
        }
    },
    {
        "city_id" : 126,
        "region_id" : 13,
        "name" : {
            "ar" : "الكهفة",
            "en" : "Al Kahafah"
        }
    },
    {
        "city_id" : 127,
        "region_id" : 13,
        "name" : {
            "ar" : "الصحاف",
            "en" : "As Sahaf"
        }
    },
    {
        "city_id" : 128,
        "region_id" : 13,
        "name" : {
            "ar" : "العيينة",
            "en" : "Al Uyaynah"
        }
    },
    {
        "city_id" : 129,
        "region_id" : 13,
        "name" : {
            "ar" : "القليب",
            "en" : "Al Qulayyib"
        }
    },
    {
        "city_id" : 130,
        "region_id" : 13,
        "name" : {
            "ar" : "الونان",
            "en" : "Al Wannan"
        }
    },
    {
        "city_id" : 131,
        "region_id" : 13,
        "name" : {
            "ar" : "غنوى",
            "en" : "Ghanwa"
        }
    },
    {
        "city_id" : 132,
        "region_id" : 13,
        "name" : {
            "ar" : "الزغين",
            "en" : "Az Zughayn"
        }
    },
    {
        "city_id" : 133,
        "region_id" : 13,
        "name" : {
            "ar" : "نطاع",
            "en" : "Nita"
        }
    },
    {
        "city_id" : 134,
        "region_id" : 13,
        "name" : {
            "ar" : "ام الحمام",
            "en" : "Umm Al Hamam"
        }
    },
    {
        "city_id" : 135,
        "region_id" : 13,
        "name" : {
            "ar" : "ام ربيعة",
            "en" : "Umm Rubayah"
        }
    },
    {
        "city_id" : 136,
        "region_id" : 13,
        "name" : {
            "ar" : "ابو حدرية",
            "en" : "Abu Hadriyah"
        }
    },
    {
        "city_id" : 137,
        "region_id" : 13,
        "name" : {
            "ar" : "منيفة",
            "en" : "Munifah"
        }
    },
    {
        "city_id" : 140,
        "region_id" : 6,
        "name" : {
            "ar" : "الوسيعة",
            "en" : "Al Wasiah"
        }
    },
    {
        "city_id" : 141,
        "region_id" : 6,
        "name" : {
            "ar" : "تمرية",
            "en" : "Tamriyah"
        }
    },
    {
        "city_id" : 142,
        "region_id" : 6,
        "name" : {
            "ar" : "ابو خسيفاء",
            "en" : "Abu Khusayfa"
        }
    },
    {
        "city_id" : 143,
        "region_id" : 6,
        "name" : {
            "ar" : "النخيل",
            "en" : "An Nakhil"
        }
    },
    {
        "city_id" : 144,
        "region_id" : 6,
        "name" : {
            "ar" : "السحيمي",
            "en" : "As Suhaymi"
        }
    },
    {
        "city_id" : 145,
        "region_id" : 6,
        "name" : {
            "ar" : "مصدة",
            "en" : "Musiddah"
        }
    },
    {
        "city_id" : 146,
        "region_id" : 6,
        "name" : {
            "ar" : "أم سديرة",
            "en" : "Umm Sudayrah"
        }
    },
    {
        "city_id" : 147,
        "region_id" : 6,
        "name" : {
            "ar" : "التنهاة",
            "en" : "At Tanhah"
        }
    },
    {
        "city_id" : 148,
        "region_id" : 6,
        "name" : {
            "ar" : "قري التويم",
            "en" : "Qiri At Tuwaym"
        }
    },
    {
        "city_id" : 149,
        "region_id" : 6,
        "name" : {
            "ar" : "الشحمة",
            "en" : "Ash Shahmah"
        }
    },
    {
        "city_id" : 150,
        "region_id" : 6,
        "name" : {
            "ar" : "الودي",
            "en" : "Al Wudayy"
        }
    },
    {
        "city_id" : 151,
        "region_id" : 6,
        "name" : {
            "ar" : "جوي",
            "en" : "Juwayy"
        }
    },
    {
        "city_id" : 152,
        "region_id" : 6,
        "name" : {
            "ar" : "مقبلة",
            "en" : "Muqbilah"
        }
    },
    {
        "city_id" : 153,
        "region_id" : 6,
        "name" : {
            "ar" : "حرمة",
            "en" : "Harmah"
        }
    },
    {
        "city_id" : 154,
        "region_id" : 3,
        "name" : {
            "ar" : "المعظم",
            "en" : "Al Madham"
        }
    },
    {
        "city_id" : 155,
        "region_id" : 6,
        "name" : {
            "ar" : "جراب",
            "en" : "Jirab"
        }
    },
    {
        "city_id" : 156,
        "region_id" : 6,
        "name" : {
            "ar" : "العقلة",
            "en" : "Al Uqlah"
        }
    },
    {
        "city_id" : 157,
        "region_id" : 6,
        "name" : {
            "ar" : "النغيق",
            "en" : "An Nughayq"
        }
    },
    {
        "city_id" : 158,
        "region_id" : 6,
        "name" : {
            "ar" : "حويمضة",
            "en" : "Huwaimidah"
        }
    },
    {
        "city_id" : 159,
        "region_id" : 6,
        "name" : {
            "ar" : "البتيراء",
            "en" : "Al Butaira"
        }
    },
    {
        "city_id" : 160,
        "region_id" : 6,
        "name" : {
            "ar" : "المشاش",
            "en" : "Al Mishash"
        }
    },
    {
        "city_id" : 161,
        "region_id" : 6,
        "name" : {
            "ar" : "الفروثي",
            "en" : "Al Furuthi"
        }
    },
    {
        "city_id" : 162,
        "region_id" : 6,
        "name" : {
            "ar" : "جلاجل",
            "en" : "Jalajil"
        }
    },
    {
        "city_id" : 163,
        "region_id" : 6,
        "name" : {
            "ar" : "الدخيلة",
            "en" : "Ad Dakhilah"
        }
    },
    {
        "city_id" : 164,
        "region_id" : 6,
        "name" : {
            "ar" : "الحصون",
            "en" : "Al Husun"
        }
    },
    {
        "city_id" : 165,
        "region_id" : 6,
        "name" : {
            "ar" : "حوطة سدير",
            "en" : "Hawtat Sudair"
        }
    },
    {
        "city_id" : 166,
        "region_id" : 6,
        "name" : {
            "ar" : "روضة سدير",
            "en" : "Rawdhat Sudair"
        }
    },
    {
        "city_id" : 167,
        "region_id" : 6,
        "name" : {
            "ar" : "تمير",
            "en" : "Tumair"
        }
    },
    {
        "city_id" : 168,
        "region_id" : 6,
        "name" : {
            "ar" : "الارطاوية",
            "en" : "Al Artawiyah"
        }
    },
    {
        "city_id" : 169,
        "region_id" : 6,
        "name" : {
            "ar" : "العمار",
            "en" : "Al Amar"
        }
    },
    {
        "city_id" : 170,
        "region_id" : 6,
        "name" : {
            "ar" : "الخيس",
            "en" : "Al Khis"
        }
    },
    {
        "city_id" : 171,
        "region_id" : 6,
        "name" : {
            "ar" : "المعشبة",
            "en" : "Al Maashbah"
        }
    },
    {
        "city_id" : 172,
        "region_id" : 6,
        "name" : {
            "ar" : "التويم",
            "en" : "At Tuwaym"
        }
    },
    {
        "city_id" : 173,
        "region_id" : 6,
        "name" : {
            "ar" : "الخطامة",
            "en" : "Al Khutamah"
        }
    },
    {
        "city_id" : 174,
        "region_id" : 6,
        "name" : {
            "ar" : "الرويضة",
            "en" : "Ar Ruwaydah"
        }
    },
    {
        "city_id" : 175,
        "region_id" : 6,
        "name" : {
            "ar" : "الشعب",
            "en" : "Ash Shib"
        }
    },
    {
        "city_id" : 176,
        "region_id" : 6,
        "name" : {
            "ar" : "عشيرة سدير",
            "en" : "Asharat Sudair"
        }
    },
    {
        "city_id" : 177,
        "region_id" : 6,
        "name" : {
            "ar" : "الجنيفي",
            "en" : "Al Junayfi"
        }
    },
    {
        "city_id" : 178,
        "region_id" : 6,
        "name" : {
            "ar" : "العطار",
            "en" : "Al Attar"
        }
    },
    {
        "city_id" : 179,
        "region_id" : 6,
        "name" : {
            "ar" : "ام الجماجم",
            "en" : "Umm Al Jamajim"
        }
    },
    {
        "city_id" : 180,
        "region_id" : 6,
        "name" : {
            "ar" : "مشلح",
            "en" : "Mishlah"
        }
    },
    {
        "city_id" : 181,
        "region_id" : 6,
        "name" : {
            "ar" : "ام رجوم",
            "en" : "Umm Rujum"
        }
    },
    {
        "city_id" : 182,
        "region_id" : 6,
        "name" : {
            "ar" : "الرويضة",
            "en" : "Ar Ruwaidah"
        }
    },
    {
        "city_id" : 183,
        "region_id" : 6,
        "name" : {
            "ar" : "الفيصلية",
            "en" : "Al Faisaliyah"
        }
    },
    {
        "city_id" : 184,
        "region_id" : 6,
        "name" : {
            "ar" : "بوضاء",
            "en" : "Bawda"
        }
    },
    {
        "city_id" : 185,
        "region_id" : 6,
        "name" : {
            "ar" : "الحائر",
            "en" : "Al Hair"
        }
    },
    {
        "city_id" : 186,
        "region_id" : 6,
        "name" : {
            "ar" : "وشي",
            "en" : "Wushayy"
        }
    },
    {
        "city_id" : 187,
        "region_id" : 6,
        "name" : {
            "ar" : "عودة سدير",
            "en" : "Awdat Sudayr"
        }
    },
    {
        "city_id" : 188,
        "region_id" : 6,
        "name" : {
            "ar" : "مبايض",
            "en" : "Mubayid"
        }
    },
    {
        "city_id" : 189,
        "region_id" : 6,
        "name" : {
            "ar" : "القاعية",
            "en" : "Al Qaiyah"
        }
    },
    {
        "city_id" : 190,
        "region_id" : 7,
        "name" : {
            "ar" : "دبدبة فضلاء",
            "en" : "Dibdibbat Fudala"
        }
    },
    {
        "city_id" : 191,
        "region_id" : 7,
        "name" : {
            "ar" : "الحجب",
            "en" : "Al Hajab"
        }
    },
    {
        "city_id" : 192,
        "region_id" : 7,
        "name" : {
            "ar" : "الضلفة",
            "en" : "Adh Dhalfah"
        }
    },
    {
        "city_id" : 193,
        "region_id" : 7,
        "name" : {
            "ar" : "أبو طاقة",
            "en" : "Abu Taqah"
        }
    },
    {
        "city_id" : 194,
        "region_id" : 7,
        "name" : {
            "ar" : "العين الجديدة",
            "en" : "Al Ayn Al Jadidah"
        }
    },
    {
        "city_id" : 195,
        "region_id" : 7,
        "name" : {
            "ar" : "القعرة",
            "en" : "Al Qiarah"
        }
    },
    {
        "city_id" : 196,
        "region_id" : 7,
        "name" : {
            "ar" : "أم زرب",
            "en" : "Umm Zarb"
        }
    },
    {
        "city_id" : 197,
        "region_id" : 7,
        "name" : {
            "ar" : "هدية",
            "en" : "Hadiyah"
        }
    },
    {
        "city_id" : 198,
        "region_id" : 7,
        "name" : {
            "ar" : "القعرة",
            "en" : "Al Qarah"
        }
    },
    {
        "city_id" : 199,
        "region_id" : 7,
        "name" : {
            "ar" : "العلا",
            "en" : "Al Ula"
        }
    },
    {
        "city_id" : 200,
        "region_id" : 7,
        "name" : {
            "ar" : "الجهراء",
            "en" : "Al Jahara"
        }
    },
    {
        "city_id" : 201,
        "region_id" : 7,
        "name" : {
            "ar" : "رحيب",
            "en" : "Ruhayb"
        }
    },
    {
        "city_id" : 202,
        "region_id" : 7,
        "name" : {
            "ar" : "شلال",
            "en" : "Shalal"
        }
    },
    {
        "city_id" : 203,
        "region_id" : 7,
        "name" : {
            "ar" : "ضاعا",
            "en" : "Daa"
        }
    },
    {
        "city_id" : 204,
        "region_id" : 7,
        "name" : {
            "ar" : "جيدة",
            "en" : "Jaydah"
        }
    },
    {
        "city_id" : 205,
        "region_id" : 7,
        "name" : {
            "ar" : "قلبان عشرة",
            "en" : "Qulban Isharah"
        }
    },
    {
        "city_id" : 206,
        "region_id" : 7,
        "name" : {
            "ar" : "النجيل",
            "en" : "An Najil"
        }
    },
    {
        "city_id" : 207,
        "region_id" : 7,
        "name" : {
            "ar" : "الرزيقية",
            "en" : "Ar Ruzayqiyah"
        }
    },
    {
        "city_id" : 208,
        "region_id" : 7,
        "name" : {
            "ar" : "الحميدية",
            "en" : "Al Hamidiyah"
        }
    },
    {
        "city_id" : 209,
        "region_id" : 7,
        "name" : {
            "ar" : "صدر",
            "en" : "Sadr"
        }
    },
    {
        "city_id" : 210,
        "region_id" : 7,
        "name" : {
            "ar" : "مغيراء",
            "en" : "Mughayra"
        }
    },
    {
        "city_id" : 211,
        "region_id" : 7,
        "name" : {
            "ar" : "قصيب ابو سيال",
            "en" : "Qusayb Abu Siyal"
        }
    },
    {
        "city_id" : 212,
        "region_id" : 7,
        "name" : {
            "ar" : "ابو اراكة",
            "en" : "Abu Arakah"
        }
    },
    {
        "city_id" : 213,
        "region_id" : 7,
        "name" : {
            "ar" : "مدائن الصالح",
            "en" : "Madain As Salih"
        }
    },
    {
        "city_id" : 214,
        "region_id" : 7,
        "name" : {
            "ar" : "عورش",
            "en" : "Awarsh"
        }
    },
    {
        "city_id" : 215,
        "region_id" : 7,
        "name" : {
            "ar" : "النشيفة",
            "en" : "An Nushayfah"
        }
    },
    {
        "city_id" : 216,
        "region_id" : 7,
        "name" : {
            "ar" : "الزباير",
            "en" : "Az Zubayir"
        }
    },
    {
        "city_id" : 217,
        "region_id" : 7,
        "name" : {
            "ar" : "الضليعة",
            "en" : "Ad Dulayah"
        }
    },
    {
        "city_id" : 218,
        "region_id" : 7,
        "name" : {
            "ar" : "متان العريقة",
            "en" : "Mitan Al Urayqah"
        }
    },
    {
        "city_id" : 219,
        "region_id" : 7,
        "name" : {
            "ar" : "الابرق",
            "en" : "Al Abraq"
        }
    },
    {
        "city_id" : 220,
        "region_id" : 7,
        "name" : {
            "ar" : "اميرة",
            "en" : "Amirah"
        }
    },
    {
        "city_id" : 221,
        "region_id" : 7,
        "name" : {
            "ar" : "الجديدة",
            "en" : "Al Jadidah"
        }
    },
    {
        "city_id" : 222,
        "region_id" : 7,
        "name" : {
            "ar" : "كتيفة مصادر",
            "en" : "Kutayfat Masadir"
        }
    },
    {
        "city_id" : 223,
        "region_id" : 3,
        "name" : {
            "ar" : "الراس",
            "en" : "Ar Ras"
        }
    },
    {
        "city_id" : 224,
        "region_id" : 3,
        "name" : {
            "ar" : "البيت",
            "en" : "Al Bayt"
        }
    },
    {
        "city_id" : 225,
        "region_id" : 3,
        "name" : {
            "ar" : "بئر بحار",
            "en" : "Bir Bahar"
        }
    },
    {
        "city_id" : 226,
        "region_id" : 3,
        "name" : {
            "ar" : "سبحان",
            "en" : "Sabhan"
        }
    },
    {
        "city_id" : 227,
        "region_id" : 13,
        "name" : {
            "ar" : "الظهران",
            "en" : "Adh Dhahran"
        }
    },
    {
        "city_id" : 228,
        "region_id" : 3,
        "name" : {
            "ar" : "أم الريح",
            "en" : "Umm Ar Rih"
        }
    },
    {
        "city_id" : 229,
        "region_id" : 3,
        "name" : {
            "ar" : "حرم",
            "en" : "Haram"
        }
    },
    {
        "city_id" : 230,
        "region_id" : 3,
        "name" : {
            "ar" : "عكوز",
            "en" : "Akuz"
        }
    },
    {
        "city_id" : 231,
        "region_id" : 3,
        "name" : {
            "ar" : "السديد",
            "en" : "As Sudayd"
        }
    },
    {
        "city_id" : 232,
        "region_id" : 3,
        "name" : {
            "ar" : "الحفيرة",
            "en" : "Al Hufayrah"
        }
    },
    {
        "city_id" : 233,
        "region_id" : 3,
        "name" : {
            "ar" : "الوجه",
            "en" : "Al Wajh"
        }
    },
    {
        "city_id" : 234,
        "region_id" : 3,
        "name" : {
            "ar" : "النابع",
            "en" : "An Nabi"
        }
    },
    {
        "city_id" : 235,
        "region_id" : 3,
        "name" : {
            "ar" : "عنتر",
            "en" : "Antar"
        }
    },
    {
        "city_id" : 236,
        "region_id" : 3,
        "name" : {
            "ar" : "المنجور",
            "en" : "Al Manjur"
        }
    },
    {
        "city_id" : 237,
        "region_id" : 3,
        "name" : {
            "ar" : "ابا القزاز",
            "en" : "Aba Al Qizaz"
        }
    },
    {
        "city_id" : 238,
        "region_id" : 3,
        "name" : {
            "ar" : "بداء",
            "en" : "Bada"
        }
    },
    {
        "city_id" : 239,
        "region_id" : 3,
        "name" : {
            "ar" : "خرباء",
            "en" : "Khurba"
        }
    },
    {
        "city_id" : 240,
        "region_id" : 3,
        "name" : {
            "ar" : "الكر",
            "en" : "Al Kurr"
        }
    },
    {
        "city_id" : 241,
        "region_id" : 13,
        "name" : {
            "ar" : "برق الأسيدية",
            "en" : "Burq Al Usaydiyah"
        }
    },
    {
        "city_id" : 242,
        "region_id" : 13,
        "name" : {
            "ar" : "الفاضلي",
            "en" : "Al Fadili"
        }
    },
    {
        "city_id" : 243,
        "region_id" : 13,
        "name" : {
            "ar" : "بقيق",
            "en" : "Buqayq"
        }
    },
    {
        "city_id" : 244,
        "region_id" : 13,
        "name" : {
            "ar" : "قرية",
            "en" : "Qurayyah"
        }
    },
    {
        "city_id" : 245,
        "region_id" : 13,
        "name" : {
            "ar" : "ظلوم",
            "en" : "Dhulum"
        }
    },
    {
        "city_id" : 246,
        "region_id" : 13,
        "name" : {
            "ar" : "عين دار",
            "en" : "Ayn Dar"
        }
    },
    {
        "city_id" : 247,
        "region_id" : 13,
        "name" : {
            "ar" : "عين دار القديمة",
            "en" : "Old Ain Dar"
        }
    },
    {
        "city_id" : 248,
        "region_id" : 13,
        "name" : {
            "ar" : "علاة",
            "en" : "Allat"
        }
    },
    {
        "city_id" : 249,
        "region_id" : 13,
        "name" : {
            "ar" : "فودة",
            "en" : "Fudah"
        }
    },
    {
        "city_id" : 250,
        "region_id" : 13,
        "name" : {
            "ar" : "الكدادية",
            "en" : "Al Kidadiyah"
        }
    },
    {
        "city_id" : 251,
        "region_id" : 13,
        "name" : {
            "ar" : "يكرب",
            "en" : "Yakrub"
        }
    },
    {
        "city_id" : 252,
        "region_id" : 13,
        "name" : {
            "ar" : "الجابرية",
            "en" : "Al Jabiriyah"
        }
    },
    {
        "city_id" : 253,
        "region_id" : 13,
        "name" : {
            "ar" : "صلاصل",
            "en" : "Salasil"
        }
    },
    {
        "city_id" : 254,
        "region_id" : 13,
        "name" : {
            "ar" : "شهيلاء",
            "en" : "Shuhayla"
        }
    },
    {
        "city_id" : 255,
        "region_id" : 13,
        "name" : {
            "ar" : "عصيفرات",
            "en" : "Usayfirat"
        }
    },
    {
        "city_id" : 257,
        "region_id" : 13,
        "name" : {
            "ar" : "الدغيمية",
            "en" : "Ad Dughaymiyah"
        }
    },
    {
        "city_id" : 258,
        "region_id" : 6,
        "name" : {
            "ar" : "الروضة",
            "en" : "Ar Rawdah"
        }
    },
    {
        "city_id" : 259,
        "region_id" : 6,
        "name" : {
            "ar" : "المنسف",
            "en" : "Al Mansaf"
        }
    },
    {
        "city_id" : 260,
        "region_id" : 6,
        "name" : {
            "ar" : "منسية الغربية",
            "en" : "Mansiyah Al Gharbiyah"
        }
    },
    {
        "city_id" : 261,
        "region_id" : 6,
        "name" : {
            "ar" : "عشيرة",
            "en" : "Ushayrah"
        }
    },
    {
        "city_id" : 262,
        "region_id" : 6,
        "name" : {
            "ar" : "الفيصلية",
            "en" : "Al Faysaliyah"
        }
    },
    {
        "city_id" : 263,
        "region_id" : 6,
        "name" : {
            "ar" : "الثوير",
            "en" : "Ath Thuwayr"
        }
    },
    {
        "city_id" : 264,
        "region_id" : 6,
        "name" : {
            "ar" : "زليغف",
            "en" : "Zulayghif"
        }
    },
    {
        "city_id" : 265,
        "region_id" : 6,
        "name" : {
            "ar" : "مزارع الاثلة",
            "en" : "Mazari Al Athlah"
        }
    },
    {
        "city_id" : 266,
        "region_id" : 6,
        "name" : {
            "ar" : "مزارع الرحية",
            "en" : "Mazari Ar Ruhayyah"
        }
    },
    {
        "city_id" : 267,
        "region_id" : 6,
        "name" : {
            "ar" : "قصيباء",
            "en" : "Qusayba"
        }
    },
    {
        "city_id" : 268,
        "region_id" : 6,
        "name" : {
            "ar" : "مزرعة بيضاء نثيل",
            "en" : "Mazraat Bayda Nuthayl"
        }
    },
    {
        "city_id" : 269,
        "region_id" : 6,
        "name" : {
            "ar" : "امارة المستوي",
            "en" : "Imarat Al Mistawi"
        }
    },
    {
        "city_id" : 270,
        "region_id" : 6,
        "name" : {
            "ar" : "الزلفي",
            "en" : "Az Zulfi"
        }
    },
    {
        "city_id" : 271,
        "region_id" : 6,
        "name" : {
            "ar" : "سمنان",
            "en" : "Samnan"
        }
    },
    {
        "city_id" : 272,
        "region_id" : 6,
        "name" : {
            "ar" : "علقة",
            "en" : "Iliqah"
        }
    },
    {
        "city_id" : 273,
        "region_id" : 7,
        "name" : {
            "ar" : "العين",
            "en" : "Al Ayn"
        }
    },
    {
        "city_id" : 274,
        "region_id" : 7,
        "name" : {
            "ar" : "المضاويح",
            "en" : "Al Mudhawih"
        }
    },
    {
        "city_id" : 275,
        "region_id" : 7,
        "name" : {
            "ar" : "ابا البقر",
            "en" : "Aba Al Baqar"
        }
    },
    {
        "city_id" : 276,
        "region_id" : 7,
        "name" : {
            "ar" : "الحرضة",
            "en" : "Al Hardhah"
        }
    },
    {
        "city_id" : 277,
        "region_id" : 7,
        "name" : {
            "ar" : "الضرس",
            "en" : "Adh Dhars"
        }
    },
    {
        "city_id" : 278,
        "region_id" : 7,
        "name" : {
            "ar" : "الخريبة",
            "en" : "Al Khoraibah"
        }
    },
    {
        "city_id" : 279,
        "region_id" : 7,
        "name" : {
            "ar" : "العرائد",
            "en" : "Al Araid"
        }
    },
    {
        "city_id" : 280,
        "region_id" : 7,
        "name" : {
            "ar" : "غمرة",
            "en" : "Ghamrah"
        }
    },
    {
        "city_id" : 281,
        "region_id" : 7,
        "name" : {
            "ar" : "العقيلة",
            "en" : "Al Uqilah"
        }
    },
    {
        "city_id" : 282,
        "region_id" : 7,
        "name" : {
            "ar" : "العدلة",
            "en" : "Al Adlah"
        }
    },
    {
        "city_id" : 283,
        "region_id" : 7,
        "name" : {
            "ar" : "الديسة",
            "en" : "Ad Disah"
        }
    },
    {
        "city_id" : 284,
        "region_id" : 7,
        "name" : {
            "ar" : "السليمي",
            "en" : "As Sulaymi"
        }
    },
    {
        "city_id" : 285,
        "region_id" : 7,
        "name" : {
            "ar" : "الجرف",
            "en" : "Al Jarf"
        }
    },
    {
        "city_id" : 286,
        "region_id" : 7,
        "name" : {
            "ar" : "الهذلولي",
            "en" : "Al Hadhluli"
        }
    },
    {
        "city_id" : 287,
        "region_id" : 7,
        "name" : {
            "ar" : "جدعاء",
            "en" : "Jada"
        }
    },
    {
        "city_id" : 288,
        "region_id" : 7,
        "name" : {
            "ar" : "خيبر",
            "en" : "Khaybar"
        }
    },
    {
        "city_id" : 289,
        "region_id" : 7,
        "name" : {
            "ar" : "اللحن",
            "en" : "Al Lihin"
        }
    },
    {
        "city_id" : 290,
        "region_id" : 7,
        "name" : {
            "ar" : "العشاش",
            "en" : "Al Ishash"
        }
    },
    {
        "city_id" : 291,
        "region_id" : 7,
        "name" : {
            "ar" : "الصلصلة",
            "en" : "As Silsilah"
        }
    },
    {
        "city_id" : 292,
        "region_id" : 7,
        "name" : {
            "ar" : "الثمد",
            "en" : "Al Thamad"
        }
    },
    {
        "city_id" : 293,
        "region_id" : 7,
        "name" : {
            "ar" : "العينية",
            "en" : "Al Uyaynah"
        }
    },
    {
        "city_id" : 294,
        "region_id" : 6,
        "name" : {
            "ar" : "رماح",
            "en" : "Rumah"
        }
    },
    {
        "city_id" : 295,
        "region_id" : 6,
        "name" : {
            "ar" : "حفر العتك",
            "en" : "Hafr Al Atk"
        }
    },
    {
        "city_id" : 296,
        "region_id" : 6,
        "name" : {
            "ar" : "المزيرع",
            "en" : "Al Muzayri"
        }
    },
    {
        "city_id" : 297,
        "region_id" : 6,
        "name" : {
            "ar" : "شوية",
            "en" : "Shawyah"
        }
    },
    {
        "city_id" : 298,
        "region_id" : 6,
        "name" : {
            "ar" : "الحفنة",
            "en" : "Al Hifnah"
        }
    },
    {
        "city_id" : 299,
        "region_id" : 6,
        "name" : {
            "ar" : "الغيلانة",
            "en" : "Al Ghaylanah"
        }
    },
    {
        "city_id" : 300,
        "region_id" : 6,
        "name" : {
            "ar" : "الرمحية",
            "en" : "Ar Rumhiyah"
        }
    },
    {
        "city_id" : 301,
        "region_id" : 13,
        "name" : {
            "ar" : "الراكة",
            "en" : "Ar Rakah"
        }
    },
    {
        "city_id" : 302,
        "region_id" : 3,
        "name" : {
            "ar" : "الخريطة",
            "en" : "Al Khuraytah"
        }
    },
    {
        "city_id" : 303,
        "region_id" : 13,
        "name" : {
            "ar" : "الثقبة",
            "en" : "Ath Thuqbah"
        }
    },
    {
        "city_id" : 304,
        "region_id" : 13,
        "name" : {
            "ar" : "العزيزية",
            "en" : "Al Aziziyah"
        }
    },
    {
        "city_id" : 305,
        "region_id" : 3,
        "name" : {
            "ar" : "شدوا",
            "en" : "Shadwa"
        }
    },
    {
        "city_id" : 306,
        "region_id" : 6,
        "name" : {
            "ar" : "الغاط",
            "en" : "Al Ghat"
        }
    },
    {
        "city_id" : 307,
        "region_id" : 6,
        "name" : {
            "ar" : "مليح",
            "en" : "Mulayh"
        }
    },
    {
        "city_id" : 308,
        "region_id" : 3,
        "name" : {
            "ar" : "الشبعان",
            "en" : "Ash Shaban"
        }
    },
    {
        "city_id" : 309,
        "region_id" : 3,
        "name" : {
            "ar" : "الدقم",
            "en" : "Ad Duqum"
        }
    },
    {
        "city_id" : 310,
        "region_id" : 3,
        "name" : {
            "ar" : "القرص",
            "en" : "Al Qars"
        }
    },
    {
        "city_id" : 311,
        "region_id" : 3,
        "name" : {
            "ar" : "حراض",
            "en" : "Hirad"
        }
    },
    {
        "city_id" : 312,
        "region_id" : 3,
        "name" : {
            "ar" : "الشبحة",
            "en" : "Ash Shibahah"
        }
    },
    {
        "city_id" : 313,
        "region_id" : 3,
        "name" : {
            "ar" : "روضة الاغيدرات",
            "en" : "Rawdat Al Aghaydirat"
        }
    },
    {
        "city_id" : 314,
        "region_id" : 3,
        "name" : {
            "ar" : "الخضراء الجديدة",
            "en" : "Al Khadra Al Jadidah"
        }
    },
    {
        "city_id" : 315,
        "region_id" : 3,
        "name" : {
            "ar" : "سمور",
            "en" : "Samur"
        }
    },
    {
        "city_id" : 316,
        "region_id" : 3,
        "name" : {
            "ar" : "الرويضات",
            "en" : "Al Ruwaydat"
        }
    },
    {
        "city_id" : 317,
        "region_id" : 3,
        "name" : {
            "ar" : "المهدرة",
            "en" : "Al Mahadrah"
        }
    },
    {
        "city_id" : 318,
        "region_id" : 3,
        "name" : {
            "ar" : "بقيلة",
            "en" : "Buqaylah"
        }
    },
    {
        "city_id" : 319,
        "region_id" : 3,
        "name" : {
            "ar" : "النعيلة",
            "en" : "An Nuaylah"
        }
    },
    {
        "city_id" : 320,
        "region_id" : 3,
        "name" : {
            "ar" : "الزغلية",
            "en" : "Az Zaghliyah"
        }
    },
    {
        "city_id" : 321,
        "region_id" : 3,
        "name" : {
            "ar" : "توله",
            "en" : "Tuwalah"
        }
    },
    {
        "city_id" : 322,
        "region_id" : 3,
        "name" : {
            "ar" : "العين",
            "en" : "Al Ayn"
        }
    },
    {
        "city_id" : 323,
        "region_id" : 3,
        "name" : {
            "ar" : "املج",
            "en" : "Umluj"
        }
    },
    {
        "city_id" : 324,
        "region_id" : 3,
        "name" : {
            "ar" : "فم شثاث",
            "en" : "Famm Shithath"
        }
    },
    {
        "city_id" : 325,
        "region_id" : 3,
        "name" : {
            "ar" : "الحرة",
            "en" : "Al Harrah"
        }
    },
    {
        "city_id" : 326,
        "region_id" : 3,
        "name" : {
            "ar" : "العمبجة",
            "en" : "Al Ambijah"
        }
    },
    {
        "city_id" : 327,
        "region_id" : 3,
        "name" : {
            "ar" : "الشدخ",
            "en" : "Ash Shidakh"
        }
    },
    {
        "city_id" : 328,
        "region_id" : 3,
        "name" : {
            "ar" : "المرامية",
            "en" : "Al Maramiyah"
        }
    },
    {
        "city_id" : 329,
        "region_id" : 6,
        "name" : {
            "ar" : "مزارع البدائع",
            "en" : "Mazari Al Badai"
        }
    },
    {
        "city_id" : 330,
        "region_id" : 6,
        "name" : {
            "ar" : "الخاتلة",
            "en" : "Al Khatilah"
        }
    },
    {
        "city_id" : 331,
        "region_id" : 6,
        "name" : {
            "ar" : "البلاد الوسطى",
            "en" : "Al Bilad Al Wusta"
        }
    },
    {
        "city_id" : 332,
        "region_id" : 6,
        "name" : {
            "ar" : "العليا",
            "en" : "Al Ulya"
        }
    },
    {
        "city_id" : 333,
        "region_id" : 6,
        "name" : {
            "ar" : "الحسيان",
            "en" : "Al Hisyan"
        }
    },
    {
        "city_id" : 334,
        "region_id" : 6,
        "name" : {
            "ar" : "الضلعي",
            "en" : "Ad Dul Ayi"
        }
    },
    {
        "city_id" : 335,
        "region_id" : 6,
        "name" : {
            "ar" : "تنيبيكة",
            "en" : "Tunaibikah"
        }
    },
    {
        "city_id" : 336,
        "region_id" : 6,
        "name" : {
            "ar" : "عبلة",
            "en" : "Abla"
        }
    },
    {
        "city_id" : 337,
        "region_id" : 6,
        "name" : {
            "ar" : "عبلية",
            "en" : "Abliyah"
        }
    },
    {
        "city_id" : 338,
        "region_id" : 6,
        "name" : {
            "ar" : "هجرة السلات",
            "en" : "Hijrat As Silat"
        }
    },
    {
        "city_id" : 339,
        "region_id" : 6,
        "name" : {
            "ar" : "ام طلحة",
            "en" : "Umm Talhah"
        }
    },
    {
        "city_id" : 340,
        "region_id" : 6,
        "name" : {
            "ar" : "معرج قليشة",
            "en" : "Muarij Qulaishah"
        }
    },
    {
        "city_id" : 341,
        "region_id" : 6,
        "name" : {
            "ar" : "داغان",
            "en" : "Daghan"
        }
    },
    {
        "city_id" : 342,
        "region_id" : 6,
        "name" : {
            "ar" : "الجرفية",
            "en" : "Al Jurfiyah"
        }
    },
    {
        "city_id" : 343,
        "region_id" : 6,
        "name" : {
            "ar" : "حشاشة",
            "en" : "Hashashah"
        }
    },
    {
        "city_id" : 344,
        "region_id" : 6,
        "name" : {
            "ar" : "دار المردمة",
            "en" : "Dar Al Marudumah"
        }
    },
    {
        "city_id" : 345,
        "region_id" : 6,
        "name" : {
            "ar" : "لهدة الصياهد",
            "en" : "Lahdat As Sayahid"
        }
    },
    {
        "city_id" : 346,
        "region_id" : 6,
        "name" : {
            "ar" : "البرزاء",
            "en" : "Al Barza"
        }
    },
    {
        "city_id" : 347,
        "region_id" : 6,
        "name" : {
            "ar" : "الفيضة",
            "en" : "Al Faydah"
        }
    },
    {
        "city_id" : 348,
        "region_id" : 6,
        "name" : {
            "ar" : "الخالدية",
            "en" : "Al Khaldiyah"
        }
    },
    {
        "city_id" : 349,
        "region_id" : 6,
        "name" : {
            "ar" : "الحمادة",
            "en" : "Al Hamadah"
        }
    },
    {
        "city_id" : 350,
        "region_id" : 6,
        "name" : {
            "ar" : "القرارة",
            "en" : "Al Qararah"
        }
    },
    {
        "city_id" : 351,
        "region_id" : 7,
        "name" : {
            "ar" : "المزرع",
            "en" : "Al Mizari"
        }
    },
    {
        "city_id" : 352,
        "region_id" : 7,
        "name" : {
            "ar" : "أم الغيران",
            "en" : "Umm Al Ghiran"
        }
    },
    {
        "city_id" : 353,
        "region_id" : 7,
        "name" : {
            "ar" : "المندسة",
            "en" : "Al Mundassah"
        }
    },
    {
        "city_id" : 354,
        "region_id" : 7,
        "name" : {
            "ar" : "السليمية",
            "en" : "As Silaymiyah"
        }
    },
    {
        "city_id" : 355,
        "region_id" : 7,
        "name" : {
            "ar" : "البراقية",
            "en" : "Al Barraqiyah"
        }
    },
    {
        "city_id" : 356,
        "region_id" : 7,
        "name" : {
            "ar" : "السراقي",
            "en" : "As Siraqi"
        }
    },
    {
        "city_id" : 357,
        "region_id" : 7,
        "name" : {
            "ar" : "آبار دحمولة",
            "en" : "Abar Dahmulah"
        }
    },
    {
        "city_id" : 358,
        "region_id" : 7,
        "name" : {
            "ar" : "القويعية",
            "en" : "Al Quwayiyah"
        }
    },
    {
        "city_id" : 359,
        "region_id" : 7,
        "name" : {
            "ar" : "بدائع الهراسين",
            "en" : "Badai Al Harasin"
        }
    },
    {
        "city_id" : 360,
        "region_id" : 7,
        "name" : {
            "ar" : "مهد الذهب",
            "en" : "Mahd Adh Dhahab"
        }
    },
    {
        "city_id" : 361,
        "region_id" : 7,
        "name" : {
            "ar" : "صفينة",
            "en" : "Sufaynah"
        }
    },
    {
        "city_id" : 362,
        "region_id" : 7,
        "name" : {
            "ar" : "صفينة",
            "en" : "Sufaynah"
        }
    },
    {
        "city_id" : 363,
        "region_id" : 7,
        "name" : {
            "ar" : "الصلحانية",
            "en" : "As Sulhaniyah"
        }
    },
    {
        "city_id" : 364,
        "region_id" : 7,
        "name" : {
            "ar" : "الغاشية",
            "en" : "Al Ghashiyah"
        }
    },
    {
        "city_id" : 365,
        "region_id" : 7,
        "name" : {
            "ar" : "الاصيحر",
            "en" : "Al Asayhir"
        }
    },
    {
        "city_id" : 366,
        "region_id" : 7,
        "name" : {
            "ar" : "السويرقية",
            "en" : "As Suwayriqiyah"
        }
    },
    {
        "city_id" : 367,
        "region_id" : 7,
        "name" : {
            "ar" : "ثرب",
            "en" : "Tharb"
        }
    },
    {
        "city_id" : 368,
        "region_id" : 7,
        "name" : {
            "ar" : "حاذة",
            "en" : "Hadhah"
        }
    },
    {
        "city_id" : 369,
        "region_id" : 7,
        "name" : {
            "ar" : "العمق",
            "en" : "Al Umaq"
        }
    },
    {
        "city_id" : 370,
        "region_id" : 7,
        "name" : {
            "ar" : "الصعبية",
            "en" : "As Sabiyah"
        }
    },
    {
        "city_id" : 371,
        "region_id" : 11,
        "name" : {
            "ar" : "القعرة",
            "en" : "Al Qaarah"
        }
    },
    {
        "city_id" : 372,
        "region_id" : 11,
        "name" : {
            "ar" : "الجحفة",
            "en" : "Al Juhfah"
        }
    },
    {
        "city_id" : 373,
        "region_id" : 11,
        "name" : {
            "ar" : "راين",
            "en" : "Rayin"
        }
    },
    {
        "city_id" : 374,
        "region_id" : 11,
        "name" : {
            "ar" : "الزويراء",
            "en" : "Az Zuwayra"
        }
    },
    {
        "city_id" : 375,
        "region_id" : 11,
        "name" : {
            "ar" : "النويبع",
            "en" : "Al Nuwaybi"
        }
    },
    {
        "city_id" : 376,
        "region_id" : 11,
        "name" : {
            "ar" : "العقلة",
            "en" : "Al Uqlah"
        }
    },
    {
        "city_id" : 377,
        "region_id" : 11,
        "name" : {
            "ar" : "رابغ",
            "en" : "Rabigh"
        }
    },
    {
        "city_id" : 378,
        "region_id" : 11,
        "name" : {
            "ar" : "مستورة",
            "en" : "Masturah"
        }
    },
    {
        "city_id" : 379,
        "region_id" : 11,
        "name" : {
            "ar" : "الابواء",
            "en" : "Al Abwa"
        }
    },
    {
        "city_id" : 380,
        "region_id" : 11,
        "name" : {
            "ar" : "شلوة",
            "en" : "Shuluwah"
        }
    },
    {
        "city_id" : 381,
        "region_id" : 11,
        "name" : {
            "ar" : "كلية",
            "en" : "Kilayyah"
        }
    },
    {
        "city_id" : 382,
        "region_id" : 11,
        "name" : {
            "ar" : "حجر",
            "en" : "Hajur"
        }
    },
    {
        "city_id" : 383,
        "region_id" : 11,
        "name" : {
            "ar" : "صعبر",
            "en" : "Sabar"
        }
    },
    {
        "city_id" : 384,
        "region_id" : 11,
        "name" : {
            "ar" : "التنضبية",
            "en" : "At Tandabiyah"
        }
    },
    {
        "city_id" : 385,
        "region_id" : 11,
        "name" : {
            "ar" : "قويزة",
            "en" : "Quwayzah"
        }
    },
    {
        "city_id" : 386,
        "region_id" : 11,
        "name" : {
            "ar" : "النزة",
            "en" : "An Nazzah"
        }
    },
    {
        "city_id" : 387,
        "region_id" : 11,
        "name" : {
            "ar" : "الشعبة",
            "en" : "Ash Shubah"
        }
    },
    {
        "city_id" : 388,
        "region_id" : 11,
        "name" : {
            "ar" : "الصدر",
            "en" : "As Sadr"
        }
    },
    {
        "city_id" : 389,
        "region_id" : 11,
        "name" : {
            "ar" : "المغاربة",
            "en" : "Al Magharibah"
        }
    },
    {
        "city_id" : 390,
        "region_id" : 11,
        "name" : {
            "ar" : "الكويسية",
            "en" : "Al Kuwaysiyah"
        }
    },
    {
        "city_id" : 391,
        "region_id" : 11,
        "name" : {
            "ar" : "ابو حليفاء",
            "en" : "Abu Hulayfa"
        }
    },
    {
        "city_id" : 392,
        "region_id" : 11,
        "name" : {
            "ar" : "محجوبة",
            "en" : "Mahjubah"
        }
    },
    {
        "city_id" : 393,
        "region_id" : 6,
        "name" : {
            "ar" : "بئر الفيضة",
            "en" : "Bir Al Faydah"
        }
    },
    {
        "city_id" : 394,
        "region_id" : 6,
        "name" : {
            "ar" : "الهميج",
            "en" : "Al Humayj"
        }
    },
    {
        "city_id" : 395,
        "region_id" : 6,
        "name" : {
            "ar" : "الذيبية",
            "en" : "Adh Dhibiyah"
        }
    },
    {
        "city_id" : 396,
        "region_id" : 6,
        "name" : {
            "ar" : "خضراء",
            "en" : "Khadra"
        }
    },
    {
        "city_id" : 397,
        "region_id" : 6,
        "name" : {
            "ar" : "البدايع",
            "en" : "Al Badayi"
        }
    },
    {
        "city_id" : 398,
        "region_id" : 6,
        "name" : {
            "ar" : "بطاحة",
            "en" : "Battahah"
        }
    },
    {
        "city_id" : 399,
        "region_id" : 6,
        "name" : {
            "ar" : "الصقرة",
            "en" : "As Saqrah"
        }
    },
    {
        "city_id" : 400,
        "region_id" : 6,
        "name" : {
            "ar" : "وبرة",
            "en" : "Wabrah"
        }
    },
    {
        "city_id" : 401,
        "region_id" : 6,
        "name" : {
            "ar" : "أبو عشرة",
            "en" : "Abu Isharah"
        }
    },
    {
        "city_id" : 402,
        "region_id" : 6,
        "name" : {
            "ar" : "المعلق",
            "en" : "Al Muallaq"
        }
    },
    {
        "city_id" : 403,
        "region_id" : 6,
        "name" : {
            "ar" : "الرميثي",
            "en" : "Ar Rumaythi"
        }
    },
    {
        "city_id" : 404,
        "region_id" : 6,
        "name" : {
            "ar" : "الهرانية",
            "en" : "Al Hiraniyah"
        }
    },
    {
        "city_id" : 405,
        "region_id" : 6,
        "name" : {
            "ar" : "الرضم",
            "en" : "Ar Radum"
        }
    },
    {
        "city_id" : 406,
        "region_id" : 6,
        "name" : {
            "ar" : "الثعل",
            "en" : "Ath Thaal"
        }
    },
    {
        "city_id" : 407,
        "region_id" : 6,
        "name" : {
            "ar" : "الانسيات",
            "en" : "Al Unsiyat"
        }
    },
    {
        "city_id" : 408,
        "region_id" : 6,
        "name" : {
            "ar" : "فرعة الرميثي",
            "en" : "Farat Ar Rumaythi"
        }
    },
    {
        "city_id" : 409,
        "region_id" : 6,
        "name" : {
            "ar" : "البطين",
            "en" : "Al Butin"
        }
    },
    {
        "city_id" : 410,
        "region_id" : 6,
        "name" : {
            "ar" : "مشرفة",
            "en" : "Mushrifah"
        }
    },
    {
        "city_id" : 411,
        "region_id" : 6,
        "name" : {
            "ar" : "بديدة",
            "en" : "Bidaydah"
        }
    },
    {
        "city_id" : 412,
        "region_id" : 6,
        "name" : {
            "ar" : "المجهلية",
            "en" : "Al Mijhiliyah"
        }
    },
    {
        "city_id" : 413,
        "region_id" : 6,
        "name" : {
            "ar" : "البحرة",
            "en" : "Al Baharah"
        }
    },
    {
        "city_id" : 414,
        "region_id" : 6,
        "name" : {
            "ar" : "بديعة",
            "en" : "Budayah"
        }
    },
    {
        "city_id" : 415,
        "region_id" : 6,
        "name" : {
            "ar" : "الجثوم",
            "en" : "Al Juthum"
        }
    },
    {
        "city_id" : 416,
        "region_id" : 6,
        "name" : {
            "ar" : "الشويطن",
            "en" : "Ash Shuwaytin"
        }
    },
    {
        "city_id" : 417,
        "region_id" : 6,
        "name" : {
            "ar" : "المحامة",
            "en" : "Al Mahamah"
        }
    },
    {
        "city_id" : 418,
        "region_id" : 6,
        "name" : {
            "ar" : "عفيف",
            "en" : "Afif"
        }
    },
    {
        "city_id" : 419,
        "region_id" : 6,
        "name" : {
            "ar" : "ابرقية",
            "en" : "Abraqiyah"
        }
    },
    {
        "city_id" : 420,
        "region_id" : 6,
        "name" : {
            "ar" : "الجمانية",
            "en" : "Al Jammaniyah"
        }
    },
    {
        "city_id" : 421,
        "region_id" : 6,
        "name" : {
            "ar" : "الاشعرية",
            "en" : "Al Ashariyah"
        }
    },
    {
        "city_id" : 422,
        "region_id" : 6,
        "name" : {
            "ar" : "الخضارة",
            "en" : "Al Khadarah"
        }
    },
    {
        "city_id" : 423,
        "region_id" : 6,
        "name" : {
            "ar" : "الصالحية",
            "en" : "As Salihiyah"
        }
    },
    {
        "city_id" : 424,
        "region_id" : 6,
        "name" : {
            "ar" : "بدائع العضيان",
            "en" : "Bidai Al Idyan"
        }
    },
    {
        "city_id" : 425,
        "region_id" : 6,
        "name" : {
            "ar" : "أم أرطى",
            "en" : "Umm Arta"
        }
    },
    {
        "city_id" : 426,
        "region_id" : 6,
        "name" : {
            "ar" : "المكلاة",
            "en" : "Al Maklah"
        }
    },
    {
        "city_id" : 427,
        "region_id" : 6,
        "name" : {
            "ar" : "عشيران",
            "en" : "Ushayran"
        }
    },
    {
        "city_id" : 428,
        "region_id" : 6,
        "name" : {
            "ar" : "بعيثران",
            "en" : "Buaythiran"
        }
    },
    {
        "city_id" : 429,
        "region_id" : 6,
        "name" : {
            "ar" : "أم قصور",
            "en" : "Umm Qusur"
        }
    },
    {
        "city_id" : 430,
        "region_id" : 6,
        "name" : {
            "ar" : "عبدة",
            "en" : "Abdah"
        }
    },
    {
        "city_id" : 431,
        "region_id" : 6,
        "name" : {
            "ar" : "خريصة",
            "en" : "Khuraysah"
        }
    },
    {
        "city_id" : 432,
        "region_id" : 6,
        "name" : {
            "ar" : "عجابة",
            "en" : "Ajabah"
        }
    },
    {
        "city_id" : 433,
        "region_id" : 6,
        "name" : {
            "ar" : "المديفع",
            "en" : "Al Mudayfi"
        }
    },
    {
        "city_id" : 434,
        "region_id" : 6,
        "name" : {
            "ar" : "القدراوية",
            "en" : "Al Qidrawiyah"
        }
    },
    {
        "city_id" : 435,
        "region_id" : 6,
        "name" : {
            "ar" : "الرفيعة",
            "en" : "Ar Rafiah"
        }
    },
    {
        "city_id" : 436,
        "region_id" : 6,
        "name" : {
            "ar" : "أم أثلة",
            "en" : "Umm Athlah"
        }
    },
    {
        "city_id" : 437,
        "region_id" : 6,
        "name" : {
            "ar" : "الأخضر",
            "en" : "Al Akhdar"
        }
    },
    {
        "city_id" : 438,
        "region_id" : 6,
        "name" : {
            "ar" : "مطيعة",
            "en" : "Mutiah"
        }
    },
    {
        "city_id" : 439,
        "region_id" : 6,
        "name" : {
            "ar" : "المدارة",
            "en" : "Al Madarah"
        }
    },
    {
        "city_id" : 440,
        "region_id" : 6,
        "name" : {
            "ar" : "عسيلة",
            "en" : "Usaylah"
        }
    },
    {
        "city_id" : 441,
        "region_id" : 6,
        "name" : {
            "ar" : "الحلوة",
            "en" : "Al Hilwah"
        }
    },
    {
        "city_id" : 442,
        "region_id" : 6,
        "name" : {
            "ar" : "الدبيجة",
            "en" : "Ad Dubayjah"
        }
    },
    {
        "city_id" : 443,
        "region_id" : 6,
        "name" : {
            "ar" : "ثادق",
            "en" : "Thadiq"
        }
    },
    {
        "city_id" : 444,
        "region_id" : 6,
        "name" : {
            "ar" : "الروبضة / رغبة",
            "en" : "Ar Rawbidah / Raghabah"
        }
    },
    {
        "city_id" : 445,
        "region_id" : 6,
        "name" : {
            "ar" : "رويضة السهول",
            "en" : "Rawdat As Suhul"
        }
    },
    {
        "city_id" : 446,
        "region_id" : 6,
        "name" : {
            "ar" : "مشاش السهول",
            "en" : "Mishash As Suhul"
        }
    },
    {
        "city_id" : 447,
        "region_id" : 6,
        "name" : {
            "ar" : "الحسي",
            "en" : "Al Hisi"
        }
    },
    {
        "city_id" : 448,
        "region_id" : 6,
        "name" : {
            "ar" : "الصفرات",
            "en" : "As Sufarat"
        }
    },
    {
        "city_id" : 449,
        "region_id" : 6,
        "name" : {
            "ar" : "البير",
            "en" : "Al Bir"
        }
    },
    {
        "city_id" : 450,
        "region_id" : 6,
        "name" : {
            "ar" : "رويغب",
            "en" : "Ruwayghib"
        }
    },
    {
        "city_id" : 451,
        "region_id" : 7,
        "name" : {
            "ar" : "النجف",
            "en" : "An Najf"
        }
    },
    {
        "city_id" : 452,
        "region_id" : 7,
        "name" : {
            "ar" : "السطيح",
            "en" : "As Sutayh"
        }
    },
    {
        "city_id" : 453,
        "region_id" : 7,
        "name" : {
            "ar" : "الخيمة",
            "en" : "Al Khaymah"
        }
    },
    {
        "city_id" : 454,
        "region_id" : 13,
        "name" : {
            "ar" : "سيهات",
            "en" : "Sayhat"
        }
    },
    {
        "city_id" : 455,
        "region_id" : 7,
        "name" : {
            "ar" : "تفيدة",
            "en" : "Tafidah"
        }
    },
    {
        "city_id" : 456,
        "region_id" : 13,
        "name" : {
            "ar" : "تاروت",
            "en" : "Tarut"
        }
    },
    {
        "city_id" : 457,
        "region_id" : 7,
        "name" : {
            "ar" : "ندياء",
            "en" : "Nadya"
        }
    },
    {
        "city_id" : 458,
        "region_id" : 7,
        "name" : {
            "ar" : "مشرفة",
            "en" : "Mishrifah"
        }
    },
    {
        "city_id" : 459,
        "region_id" : 7,
        "name" : {
            "ar" : "دوينه",
            "en" : "Duwayyinah"
        }
    },
    {
        "city_id" : 460,
        "region_id" : 7,
        "name" : {
            "ar" : "عدن",
            "en" : "Adan"
        }
    },
    {
        "city_id" : 461,
        "region_id" : 7,
        "name" : {
            "ar" : "الأحمر",
            "en" : "Al Ahmar"
        }
    },
    {
        "city_id" : 462,
        "region_id" : 7,
        "name" : {
            "ar" : "الكلبة",
            "en" : "Al Kalbah"
        }
    },
    {
        "city_id" : 463,
        "region_id" : 7,
        "name" : {
            "ar" : "الكلبة",
            "en" : "Al Kalbah"
        }
    },
    {
        "city_id" : 464,
        "region_id" : 7,
        "name" : {
            "ar" : "البقاع",
            "en" : "Al Biqa"
        }
    },
    {
        "city_id" : 465,
        "region_id" : 7,
        "name" : {
            "ar" : "النجيل",
            "en" : "An Nujayl"
        }
    },
    {
        "city_id" : 466,
        "region_id" : 7,
        "name" : {
            "ar" : "البثنة",
            "en" : "Al Bathnah"
        }
    },
    {
        "city_id" : 467,
        "region_id" : 7,
        "name" : {
            "ar" : "خيف حسين",
            "en" : "Khayf Husayn"
        }
    },
    {
        "city_id" : 468,
        "region_id" : 7,
        "name" : {
            "ar" : "البقارية",
            "en" : "Al Baqqariyah"
        }
    },
    {
        "city_id" : 469,
        "region_id" : 7,
        "name" : {
            "ar" : "الفقعلي",
            "en" : "Al Fuqali"
        }
    },
    {
        "city_id" : 470,
        "region_id" : 7,
        "name" : {
            "ar" : "المشريف",
            "en" : "Al Mushayrif"
        }
    },
    {
        "city_id" : 471,
        "region_id" : 7,
        "name" : {
            "ar" : "أم المسن",
            "en" : "Umm Al Misin"
        }
    },
    {
        "city_id" : 472,
        "region_id" : 7,
        "name" : {
            "ar" : "البديع",
            "en" : "Al Budayyi"
        }
    },
    {
        "city_id" : 473,
        "region_id" : 7,
        "name" : {
            "ar" : "الدارة",
            "en" : "Ad Darah"
        }
    },
    {
        "city_id" : 474,
        "region_id" : 7,
        "name" : {
            "ar" : "القري",
            "en" : "Al Quray"
        }
    },
    {
        "city_id" : 475,
        "region_id" : 7,
        "name" : {
            "ar" : "السليم",
            "en" : "As Sulaym"
        }
    },
    {
        "city_id" : 476,
        "region_id" : 7,
        "name" : {
            "ar" : "اللثامة",
            "en" : "Al Luthamah"
        }
    },
    {
        "city_id" : 477,
        "region_id" : 7,
        "name" : {
            "ar" : "المقنع",
            "en" : "Al Muqanna"
        }
    },
    {
        "city_id" : 478,
        "region_id" : 7,
        "name" : {
            "ar" : "ضفيان",
            "en" : "Dufyan"
        }
    },
    {
        "city_id" : 479,
        "region_id" : 7,
        "name" : {
            "ar" : "عضاد",
            "en" : "Adad"
        }
    },
    {
        "city_id" : 480,
        "region_id" : 7,
        "name" : {
            "ar" : "العدوة",
            "en" : "Al Idwah"
        }
    },
    {
        "city_id" : 481,
        "region_id" : 7,
        "name" : {
            "ar" : "النباة",
            "en" : "An Nabah"
        }
    },
    {
        "city_id" : 482,
        "region_id" : 7,
        "name" : {
            "ar" : "البريدي",
            "en" : "Al Baridi"
        }
    },
    {
        "city_id" : 483,
        "region_id" : 7,
        "name" : {
            "ar" : "ينبع",
            "en" : "Yanbu"
        }
    },
    {
        "city_id" : 484,
        "region_id" : 7,
        "name" : {
            "ar" : "القراصة",
            "en" : "Al Qarrasah"
        }
    },
    {
        "city_id" : 485,
        "region_id" : 7,
        "name" : {
            "ar" : "العيص",
            "en" : "Al Is"
        }
    },
    {
        "city_id" : 486,
        "region_id" : 7,
        "name" : {
            "ar" : "الجابرية",
            "en" : "Al Jabiriyah"
        }
    },
    {
        "city_id" : 487,
        "region_id" : 7,
        "name" : {
            "ar" : "ينبع النخل",
            "en" : "Yanbu An Nakhil"
        }
    },
    {
        "city_id" : 488,
        "region_id" : 7,
        "name" : {
            "ar" : "جراجر",
            "en" : "Jarajir"
        }
    },
    {
        "city_id" : 489,
        "region_id" : 7,
        "name" : {
            "ar" : "ترعة",
            "en" : "Tirah"
        }
    },
    {
        "city_id" : 490,
        "region_id" : 7,
        "name" : {
            "ar" : "المربع",
            "en" : "Al Murabba"
        }
    },
    {
        "city_id" : 491,
        "region_id" : 7,
        "name" : {
            "ar" : "نبط",
            "en" : "Nabt"
        }
    },
    {
        "city_id" : 492,
        "region_id" : 7,
        "name" : {
            "ar" : "السليلة",
            "en" : "As Sulayyilah"
        }
    },
    {
        "city_id" : 493,
        "region_id" : 6,
        "name" : {
            "ar" : "القرائن",
            "en" : "Al Qarain"
        }
    },
    {
        "city_id" : 494,
        "region_id" : 6,
        "name" : {
            "ar" : "الشكيرة",
            "en" : "Ash Shukayyrah"
        }
    },
    {
        "city_id" : 495,
        "region_id" : 6,
        "name" : {
            "ar" : "هجرة المغر",
            "en" : "Hijrat Al Mughur"
        }
    },
    {
        "city_id" : 496,
        "region_id" : 6,
        "name" : {
            "ar" : "مزارع المحتجبة",
            "en" : "Mazari Al Muhtajibah"
        }
    },
    {
        "city_id" : 497,
        "region_id" : 6,
        "name" : {
            "ar" : "الغرابة",
            "en" : "Al Ghurabah"
        }
    },
    {
        "city_id" : 498,
        "region_id" : 6,
        "name" : {
            "ar" : "القاعية",
            "en" : "Al Qaiyah"
        }
    },
    {
        "city_id" : 499,
        "region_id" : 6,
        "name" : {
            "ar" : "غسلة",
            "en" : "Ghuslah"
        }
    },
    {
        "city_id" : 500,
        "region_id" : 6,
        "name" : {
            "ar" : "شقراء",
            "en" : "Shaqra"
        }
    },
    {
        "city_id" : 501,
        "region_id" : 6,
        "name" : {
            "ar" : "الهفوف",
            "en" : "Al Hafuf"
        }
    },
    {
        "city_id" : 502,
        "region_id" : 6,
        "name" : {
            "ar" : "حلوان",
            "en" : "Halwan"
        }
    },
    {
        "city_id" : 503,
        "region_id" : 6,
        "name" : {
            "ar" : "حصرة",
            "en" : "Hasarah"
        }
    },
    {
        "city_id" : 504,
        "region_id" : 6,
        "name" : {
            "ar" : "الثمامية",
            "en" : "Ath Thumamiyah"
        }
    },
    {
        "city_id" : 505,
        "region_id" : 6,
        "name" : {
            "ar" : "لبيدة",
            "en" : "Lubaydah"
        }
    },
    {
        "city_id" : 506,
        "region_id" : 6,
        "name" : {
            "ar" : "العضيانية",
            "en" : "Al Idayyaniyah"
        }
    },
    {
        "city_id" : 507,
        "region_id" : 6,
        "name" : {
            "ar" : "عجلة",
            "en" : "Ajlah"
        }
    },
    {
        "city_id" : 508,
        "region_id" : 6,
        "name" : {
            "ar" : "سعدة",
            "en" : "Sadah"
        }
    },
    {
        "city_id" : 509,
        "region_id" : 6,
        "name" : {
            "ar" : "جفن ضب",
            "en" : "Jafn Dabb"
        }
    },
    {
        "city_id" : 510,
        "region_id" : 6,
        "name" : {
            "ar" : "دلقان",
            "en" : "Dalqan"
        }
    },
    {
        "city_id" : 511,
        "region_id" : 6,
        "name" : {
            "ar" : "أم السباع",
            "en" : "Umm As Siba"
        }
    },
    {
        "city_id" : 512,
        "region_id" : 6,
        "name" : {
            "ar" : "الجله الأعلى",
            "en" : "Al Jilh Al Ala"
        }
    },
    {
        "city_id" : 513,
        "region_id" : 6,
        "name" : {
            "ar" : "الخفق الجنوبي",
            "en" : "Al Khafaq Al Janubi"
        }
    },
    {
        "city_id" : 514,
        "region_id" : 6,
        "name" : {
            "ar" : "الدحوة",
            "en" : "Ad Dihwah"
        }
    },
    {
        "city_id" : 515,
        "region_id" : 6,
        "name" : {
            "ar" : "الخفق القديم",
            "en" : "Al Khafaq Al Qadim"
        }
    },
    {
        "city_id" : 516,
        "region_id" : 6,
        "name" : {
            "ar" : "الشرمية",
            "en" : "Ash Sharmiyah"
        }
    },
    {
        "city_id" : 517,
        "region_id" : 6,
        "name" : {
            "ar" : "مراغان",
            "en" : "Maraghan"
        }
    },
    {
        "city_id" : 518,
        "region_id" : 6,
        "name" : {
            "ar" : "الفيضة",
            "en" : "Al Faydah"
        }
    },
    {
        "city_id" : 519,
        "region_id" : 6,
        "name" : {
            "ar" : "الجروية",
            "en" : "Al Jarwiyah"
        }
    },
    {
        "city_id" : 520,
        "region_id" : 6,
        "name" : {
            "ar" : "العوشزية",
            "en" : "Al Awshaziyah"
        }
    },
    {
        "city_id" : 521,
        "region_id" : 6,
        "name" : {
            "ar" : "أبو رجوم",
            "en" : "Abu Rijum"
        }
    },
    {
        "city_id" : 522,
        "region_id" : 6,
        "name" : {
            "ar" : "القلتة",
            "en" : "Al Qaltah"
        }
    },
    {
        "city_id" : 523,
        "region_id" : 6,
        "name" : {
            "ar" : "لعلع",
            "en" : "Lili"
        }
    },
    {
        "city_id" : 524,
        "region_id" : 6,
        "name" : {
            "ar" : "الغريري",
            "en" : "Al Ghurayri"
        }
    },
    {
        "city_id" : 525,
        "region_id" : 6,
        "name" : {
            "ar" : "الخنقة",
            "en" : "Al Khunqah"
        }
    },
    {
        "city_id" : 526,
        "region_id" : 6,
        "name" : {
            "ar" : "النسق القديم",
            "en" : "An Nasaq Al Qadim"
        }
    },
    {
        "city_id" : 527,
        "region_id" : 6,
        "name" : {
            "ar" : "وثيلان",
            "en" : "Wuthaylan"
        }
    },
    {
        "city_id" : 528,
        "region_id" : 6,
        "name" : {
            "ar" : "بيضاء نثيل",
            "en" : "Bayda Nthayl"
        }
    },
    {
        "city_id" : 529,
        "region_id" : 6,
        "name" : {
            "ar" : "أم الدباء",
            "en" : "Umm Ad Diba"
        }
    },
    {
        "city_id" : 530,
        "region_id" : 6,
        "name" : {
            "ar" : "الأمار",
            "en" : "Al Amar"
        }
    },
    {
        "city_id" : 531,
        "region_id" : 6,
        "name" : {
            "ar" : "عسيلان",
            "en" : "Usaylan"
        }
    },
    {
        "city_id" : 532,
        "region_id" : 6,
        "name" : {
            "ar" : "السدرية",
            "en" : "As Sidriyah"
        }
    },
    {
        "city_id" : 533,
        "region_id" : 6,
        "name" : {
            "ar" : "أم الشبرم",
            "en" : "Umm Ash Shubrum"
        }
    },
    {
        "city_id" : 534,
        "region_id" : 6,
        "name" : {
            "ar" : "الحجاجي",
            "en" : "Al Hijjaji"
        }
    },
    {
        "city_id" : 535,
        "region_id" : 6,
        "name" : {
            "ar" : "الغبياء",
            "en" : "Al Ghubayya"
        }
    },
    {
        "city_id" : 536,
        "region_id" : 6,
        "name" : {
            "ar" : "الفيضة",
            "en" : "Al Faydah"
        }
    },
    {
        "city_id" : 537,
        "region_id" : 6,
        "name" : {
            "ar" : "أبو حميض",
            "en" : "Abu Humayd"
        }
    },
    {
        "city_id" : 538,
        "region_id" : 6,
        "name" : {
            "ar" : "النبيبيع",
            "en" : "An Nubaybi"
        }
    },
    {
        "city_id" : 539,
        "region_id" : 6,
        "name" : {
            "ar" : "النباع",
            "en" : "An Naba"
        }
    },
    {
        "city_id" : 540,
        "region_id" : 6,
        "name" : {
            "ar" : "الملقى",
            "en" : "Al Malqa"
        }
    },
    {
        "city_id" : 541,
        "region_id" : 6,
        "name" : {
            "ar" : "حجيلاء",
            "en" : "Hujayla"
        }
    },
    {
        "city_id" : 542,
        "region_id" : 6,
        "name" : {
            "ar" : "العبد",
            "en" : "Al Abd"
        }
    },
    {
        "city_id" : 543,
        "region_id" : 6,
        "name" : {
            "ar" : "أم الجثجاث",
            "en" : "Umm Al Jithjath"
        }
    },
    {
        "city_id" : 544,
        "region_id" : 6,
        "name" : {
            "ar" : "أم جفر",
            "en" : "Umm Jafr"
        }
    },
    {
        "city_id" : 545,
        "region_id" : 6,
        "name" : {
            "ar" : "الخلفية",
            "en" : "Al Khalfiyah"
        }
    },
    {
        "city_id" : 546,
        "region_id" : 11,
        "name" : {
            "ar" : "الجدعان",
            "en" : "Al Jidhan"
        }
    },
    {
        "city_id" : 547,
        "region_id" : 11,
        "name" : {
            "ar" : "زنقاحة",
            "en" : "Zinqahah"
        }
    },
    {
        "city_id" : 548,
        "region_id" : 11,
        "name" : {
            "ar" : "العمشان",
            "en" : "Al Umshan"
        }
    },
    {
        "city_id" : 549,
        "region_id" : 11,
        "name" : {
            "ar" : "الجذية",
            "en" : "Al Judhayyah"
        }
    },
    {
        "city_id" : 550,
        "region_id" : 11,
        "name" : {
            "ar" : "العقدة",
            "en" : "Al Uqdah"
        }
    },
    {
        "city_id" : 551,
        "region_id" : 11,
        "name" : {
            "ar" : "القرا",
            "en" : "Al Qara"
        }
    },
    {
        "city_id" : 552,
        "region_id" : 11,
        "name" : {
            "ar" : "الفطيمة",
            "en" : "Al Futaymah"
        }
    },
    {
        "city_id" : 553,
        "region_id" : 11,
        "name" : {
            "ar" : "المحارزة",
            "en" : "Al Maharizah"
        }
    },
    {
        "city_id" : 554,
        "region_id" : 11,
        "name" : {
            "ar" : "الحمة",
            "en" : "Al Hamah"
        }
    },
    {
        "city_id" : 555,
        "region_id" : 11,
        "name" : {
            "ar" : "صيادة",
            "en" : "Sayyadah"
        }
    },
    {
        "city_id" : 556,
        "region_id" : 11,
        "name" : {
            "ar" : "الدفينة",
            "en" : "Ad Difinah"
        }
    },
    {
        "city_id" : 557,
        "region_id" : 11,
        "name" : {
            "ar" : "الوهط",
            "en" : "Al Wahat"
        }
    },
    {
        "city_id" : 558,
        "region_id" : 11,
        "name" : {
            "ar" : "الغنم",
            "en" : "Al Ghunnam"
        }
    },
    {
        "city_id" : 559,
        "region_id" : 11,
        "name" : {
            "ar" : "ابو غيل",
            "en" : "Abu Ghayl"
        }
    },
    {
        "city_id" : 560,
        "region_id" : 11,
        "name" : {
            "ar" : "ام البكار",
            "en" : "Umm Al Bikar"
        }
    },
    {
        "city_id" : 561,
        "region_id" : 11,
        "name" : {
            "ar" : "الفعور",
            "en" : "Al Fuur"
        }
    },
    {
        "city_id" : 562,
        "region_id" : 11,
        "name" : {
            "ar" : "الصخيرة",
            "en" : "As Sukhayrah"
        }
    },
    {
        "city_id" : 563,
        "region_id" : 11,
        "name" : {
            "ar" : "السريح",
            "en" : "As Sirayh"
        }
    },
    {
        "city_id" : 564,
        "region_id" : 11,
        "name" : {
            "ar" : "الملعب",
            "en" : "Al Malab"
        }
    },
    {
        "city_id" : 565,
        "region_id" : 11,
        "name" : {
            "ar" : "الغمير",
            "en" : "Al Ghimayr"
        }
    },
    {
        "city_id" : 566,
        "region_id" : 11,
        "name" : {
            "ar" : "الوزير",
            "en" : "Al Wazir"
        }
    },
    {
        "city_id" : 567,
        "region_id" : 11,
        "name" : {
            "ar" : "ثمالة",
            "en" : "Thumalah"
        }
    },
    {
        "city_id" : 568,
        "region_id" : 11,
        "name" : {
            "ar" : "النصبة",
            "en" : "An Nusbah"
        }
    },
    {
        "city_id" : 569,
        "region_id" : 11,
        "name" : {
            "ar" : "عباسة",
            "en" : "Abbasah"
        }
    },
    {
        "city_id" : 570,
        "region_id" : 11,
        "name" : {
            "ar" : "الحفيرة",
            "en" : "Al Hifayrah"
        }
    },
    {
        "city_id" : 571,
        "region_id" : 11,
        "name" : {
            "ar" : "غرابة",
            "en" : "Ghirabah"
        }
    },
    {
        "city_id" : 572,
        "region_id" : 11,
        "name" : {
            "ar" : "الحلقة",
            "en" : "Al Halaqah"
        }
    },
    {
        "city_id" : 573,
        "region_id" : 11,
        "name" : {
            "ar" : "الرخيلة",
            "en" : "Ar Rikhaylah"
        }
    },
    {
        "city_id" : 574,
        "region_id" : 6,
        "name" : {
            "ar" : "القصب",
            "en" : "Al Qasab"
        }
    },
	    {
	        "city_id" : 575,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المشاش",
	            "en" : "Al Mishash"
	        }
	    },
	    {
	        "city_id" : 576,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الصوح",
	            "en" : "As Suh"
	        }
	    },
	    {
	        "city_id" : 577,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "اشيقر",
	            "en" : "Ushayqir"
	        }
	    },
	    {
	        "city_id" : 578,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ام طليحة",
	            "en" : "Umm Tulaihah"
	        }
	    },
	    {
	        "city_id" : 579,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الداهنة",
	            "en" : "Ad Dahinah"
	        }
	    },
	    {
	        "city_id" : 580,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحريق",
	            "en" : "Al Hurayyiq"
	        }
	    },
	    {
	        "city_id" : 581,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الجريفة",
	            "en" : "Al Juraifah"
	        }
	    },
	    {
	        "city_id" : 582,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الوقف",
	            "en" : "Al Waqf"
	        }
	    },
	    {
	        "city_id" : 583,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العلوة",
	            "en" : "Al Uluwah"
	        }
	    },
	    {
	        "city_id" : 584,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "فرحة",
	            "en" : "Farhah"
	        }
	    },
	    {
	        "city_id" : 585,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عروى",
	            "en" : "Arawa"
	        }
	    },
	    {
	        "city_id" : 586,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "فردة",
	            "en" : "Fardah"
	        }
	    },
	    {
	        "city_id" : 587,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مويسل",
	            "en" : "Muwaysil"
	        }
	    },
	    {
	        "city_id" : 588,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الشاة",
	            "en" : "Ash Shat"
	        }
	    },
	    {
	        "city_id" : 589,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفيضة",
	            "en" : "Al Faydah"
	        }
	    },
	    {
	        "city_id" : 590,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مشرف",
	            "en" : "Mushrif"
	        }
	    },
	    {
	        "city_id" : 591,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "بدائع سويقة",
	            "en" : "Bidai Suwayqah"
	        }
	    },
	    {
	        "city_id" : 592,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الصلبية",
	            "en" : "As Sulubiyah"
	        }
	    },
	    {
	        "city_id" : 593,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مشرفة",
	            "en" : "Mishrifah"
	        }
	    },
	    {
	        "city_id" : 594,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزارع الروضة",
	            "en" : "Mazari Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 595,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "هرمولة",
	            "en" : "Hurmulah"
	        }
	    },
	    {
	        "city_id" : 596,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "السليسية",
	            "en" : "As Silaysiyah"
	        }
	    },
	    {
	        "city_id" : 597,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدارة",
	            "en" : "Ad Darah"
	        }
	    },
	    {
	        "city_id" : 598,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مطربة",
	            "en" : "Mutribah"
	        }
	    },
	    {
	        "city_id" : 599,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "رغلة",
	            "en" : "Raghlah"
	        }
	    },
	    {
	        "city_id" : 600,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مشرفة",
	            "en" : "Mushrifah"
	        }
	    },
	    {
	        "city_id" : 601,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ضبة",
	            "en" : "Dabbah"
	        }
	    },
	    {
	        "city_id" : 602,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العطاوي",
	            "en" : "Al Atawi"
	        }
	    },
	    {
	        "city_id" : 603,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحفائر",
	            "en" : "Al Hafair"
	        }
	    },
	    {
	        "city_id" : 604,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزارع طينان",
	            "en" : "Mazari Tinan"
	        }
	    },
	    {
	        "city_id" : 605,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "منيفة",
	            "en" : "Munifah"
	        }
	    },
	    {
	        "city_id" : 606,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "قويعان",
	            "en" : "Quwayan"
	        }
	    },
	    {
	        "city_id" : 607,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحنابج",
	            "en" : "Al Hanabij"
	        }
	    },
	    {
	        "city_id" : 608,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الشفلحية",
	            "en" : "Ash Shifallahiyah"
	        }
	    },
	    {
	        "city_id" : 609,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "روضة وثيلان",
	            "en" : "Rawdat Wuthaylan"
	        }
	    },
	    {
	        "city_id" : 610,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ابو ركب",
	            "en" : "Abu Rukab"
	        }
	    },
	    {
	        "city_id" : 611,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخالدية",
	            "en" : "Al Khalidiyah"
	        }
	    },
	    {
	        "city_id" : 612,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحفنة",
	            "en" : "Al Hifnah"
	        }
	    },
	    {
	        "city_id" : 613,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أبو عرينة",
	            "en" : "Abu Uraynah"
	        }
	    },
	    {
	        "city_id" : 614,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفرعة",
	            "en" : "Al Farah"
	        }
	    },
	    {
	        "city_id" : 615,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "بحار الجديد",
	            "en" : "Bihar Al Jadid"
	        }
	    },
	    {
	        "city_id" : 616,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفرعة",
	            "en" : "Al Farah"
	        }
	    },
	    {
	        "city_id" : 617,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أبو عرينة",
	            "en" : "Abu Urainah"
	        }
	    },
	    {
	        "city_id" : 618,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العقلة",
	            "en" : "Al Uqlah"
	        }
	    },
	    {
	        "city_id" : 619,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحفنة",
	            "en" : "Al Hifnah"
	        }
	    },
	    {
	        "city_id" : 620,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدهاسية",
	            "en" : "Ad Dahasiyah"
	        }
	    },
	    {
	        "city_id" : 621,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المصلوم",
	            "en" : "Al Maslum"
	        }
	    },
	    {
	        "city_id" : 622,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "سعدة",
	            "en" : "Saadah"
	        }
	    },
	    {
	        "city_id" : 623,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أم رضمة",
	            "en" : "Umm Rudmah"
	        }
	    },
	    {
	        "city_id" : 624,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "السنارية",
	            "en" : "As Sinnariyah"
	        }
	    },
	    {
	        "city_id" : 625,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الديرية",
	            "en" : "Ad Dirirah"
	        }
	    },
	    {
	        "city_id" : 626,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المغزل",
	            "en" : "Al Mighzal"
	        }
	    },
	    {
	        "city_id" : 627,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "جوباح",
	            "en" : "Jubah"
	        }
	    },
	    {
	        "city_id" : 628,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القرنة",
	            "en" : "Al Qurnah"
	        }
	    },
	    {
	        "city_id" : 629,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "وثيلان",
	            "en" : "Wuthaylan"
	        }
	    },
	    {
	        "city_id" : 630,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عين الصوينع",
	            "en" : "Ayn As Suwayni"
	        }
	    },
	    {
	        "city_id" : 631,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الأرطاوي",
	            "en" : "Al Artawi"
	        }
	    },
	    {
	        "city_id" : 632,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الثندوة",
	            "en" : "Ath Thiduwah"
	        }
	    },
	    {
	        "city_id" : 633,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أبو جلال",
	            "en" : "Abu Jilal"
	        }
	    },
	    {
	        "city_id" : 634,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "جنوب البرود",
	            "en" : "Janub Al Burud"
	        }
	    },
	    {
	        "city_id" : 635,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "غرب البرود",
	            "en" : "Gharb Al Burud"
	        }
	    },
	    {
	        "city_id" : 636,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الريشية",
	            "en" : "Ar Rishiyah"
	        }
	    },
	    {
	        "city_id" : 637,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عبلة",
	            "en" : "Ablah"
	        }
	    },
	    {
	        "city_id" : 638,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزرعة البيضة",
	            "en" : "Mazraat Al Bidah"
	        }
	    },
	    {
	        "city_id" : 639,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "السليسية",
	            "en" : "As Sulaysiyah"
	        }
	    },
	    {
	        "city_id" : 640,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزرعة سليسان",
	            "en" : "Mazraat Sulaysan"
	        }
	    },
	    {
	        "city_id" : 641,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العويجاء",
	            "en" : "Al Uwayja"
	        }
	    },
	    {
	        "city_id" : 642,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العدوة",
	            "en" : "Al Udwah"
	        }
	    },
	    {
	        "city_id" : 643,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الجديدة",
	            "en" : "Al Jadidah"
	        }
	    },
	    {
	        "city_id" : 644,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "بدائع الهمجة",
	            "en" : "Badai Al Hamjah"
	        }
	    },
	    {
	        "city_id" : 645,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "فيضة القوازين",
	            "en" : "Faydat Al Quwazin"
	        }
	    },
	    {
	        "city_id" : 646,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزارع مصيقرة",
	            "en" : "Mazari Musayqirat"
	        }
	    },
	    {
	        "city_id" : 647,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفيحاء",
	            "en" : "Al Fayha"
	        }
	    },
	    {
	        "city_id" : 648,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدسمة",
	            "en" : "Ad Dasmah"
	        }
	    },
	    {
	        "city_id" : 649,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "صفاقة",
	            "en" : "Saffaqah"
	        }
	    },
	    {
	        "city_id" : 650,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "قبيعة",
	            "en" : "Qubayah"
	        }
	    },
	    {
	        "city_id" : 651,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الشبرمية",
	            "en" : "Ash Shubrumiyah"
	        }
	    },
	    {
	        "city_id" : 652,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "كويكبة",
	            "en" : "Kuwaykibah"
	        }
	    },
	    {
	        "city_id" : 654,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أم طليحة",
	            "en" : "Umm Tulayhah"
	        }
	    },
	    {
	        "city_id" : 655,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرقيبة",
	            "en" : "Ar Raqibah"
	        }
	    },
	    {
	        "city_id" : 656,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "بدع الصعكي",
	            "en" : "Bid As Siaki"
	        }
	    },
	    {
	        "city_id" : 657,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "سلطانة",
	            "en" : "Sultanah"
	        }
	    },
	    {
	        "city_id" : 658,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عبلة",
	            "en" : "Ablah"
	        }
	    },
	    {
	        "city_id" : 659,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الملينية",
	            "en" : "Al Milayyiniyah"
	        }
	    },
	    {
	        "city_id" : 660,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البديعة",
	            "en" : "Al Bidiah"
	        }
	    },
	    {
	        "city_id" : 661,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "روضة جهام",
	            "en" : "Rawdat Jaham"
	        }
	    },
	    {
	        "city_id" : 662,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزارع الجديدة",
	            "en" : "Mazari Al Jadidah"
	        }
	    },
	    {
	        "city_id" : 663,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "منيفة المغايرة",
	            "en" : "Munifat Al Maghayirah"
	        }
	    },
	    {
	        "city_id" : 664,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدرعية",
	            "en" : "Ad Diriyah"
	        }
	    },
	    {
	        "city_id" : 665,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرميحة",
	            "en" : "Ar Rumayhah"
	        }
	    },
	    {
	        "city_id" : 666,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حسو الحيد",
	            "en" : "Hasu Al Hayd"
	        }
	    },
	    {
	        "city_id" : 667,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حديجة",
	            "en" : "Hudayjah"
	        }
	    },
	    {
	        "city_id" : 668,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدارة",
	            "en" : "Ad Darah"
	        }
	    },
	    {
	        "city_id" : 669,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدوادمي",
	            "en" : "Ad Duwadimi"
	        }
	    },
	    {
	        "city_id" : 670,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدمثي",
	            "en" : "Ad Damthi"
	        }
	    },
	    {
	        "city_id" : 671,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أوضاخ",
	            "en" : "Udakh"
	        }
	    },
	    {
	        "city_id" : 672,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "كبشان",
	            "en" : "Kabshan"
	        }
	    },
	    {
	        "city_id" : 673,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حديجة",
	            "en" : "Hudayjah"
	        }
	    },
	    {
	        "city_id" : 674,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القرارة",
	            "en" : "Al Qararah"
	        }
	    },
	    {
	        "city_id" : 675,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العوشزية",
	            "en" : "Al Awshaziyah"
	        }
	    },
	    {
	        "city_id" : 676,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الجمش",
	            "en" : "Al Jimsh"
	        }
	    },
	    {
	        "city_id" : 677,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "نجخ",
	            "en" : "Najkh"
	        }
	    },
	    {
	        "city_id" : 678,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "جريسة",
	            "en" : "Juraysah"
	        }
	    },
	    {
	        "city_id" : 679,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ام العثاكل",
	            "en" : "Umm Al Athakil"
	        }
	    },
	    {
	        "city_id" : 680,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عرجاء",
	            "en" : "Arja"
	        }
	    },
	    {
	        "city_id" : 681,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أم سليم",
	            "en" : "Umm Sulaym"
	        }
	    },
	    {
	        "city_id" : 682,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ساجر",
	            "en" : "Sajir"
	        }
	    },
	    {
	        "city_id" : 683,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرفيعة",
	            "en" : "Ar Rafiah"
	        }
	    },
	    {
	        "city_id" : 684,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "نفي",
	            "en" : "Nifi"
	        }
	    },
	    {
	        "city_id" : 685,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مصدة",
	            "en" : "Musiddah"
	        }
	    },
	    {
	        "city_id" : 686,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخفيفية",
	            "en" : "Al Khufayfiyah"
	        }
	    },
	    {
	        "city_id" : 687,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عسيلة",
	            "en" : "Usaylah"
	        }
	    },
	    {
	        "city_id" : 688,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أرطاوي الرقاص",
	            "en" : "Artawi Ar Raqqas"
	        }
	    },
	    {
	        "city_id" : 689,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عشيران",
	            "en" : "Ushayran"
	        }
	    },
	    {
	        "city_id" : 690,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزرعة الخفيسة",
	            "en" : "Mazraat Al Khufaysah"
	        }
	    },
	    {
	        "city_id" : 691,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عين القنور",
	            "en" : "Ayn Al Qannur"
	        }
	    },
	    {
	        "city_id" : 692,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "التسرير",
	            "en" : "At Tasrir"
	        }
	    },
	    {
	        "city_id" : 693,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الاثلة",
	            "en" : "Al Athlah"
	        }
	    },
	    {
	        "city_id" : 694,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عريفيجان",
	            "en" : "Urayfijan"
	        }
	    },
	    {
	        "city_id" : 695,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "السكران",
	            "en" : "As Sakran"
	        }
	    },
	    {
	        "city_id" : 696,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "جفن",
	            "en" : "Jifin"
	        }
	    },
	    {
	        "city_id" : 697,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البرود",
	            "en" : "Al Burud"
	        }
	    },
	    {
	        "city_id" : 698,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "جفنا",
	            "en" : "Jifana"
	        }
	    },
	    {
	        "city_id" : 699,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الصالحية",
	            "en" : "As Salhiyah"
	        }
	    },
	    {
	        "city_id" : 700,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العاذرية",
	            "en" : "Al Adhiriyah"
	        }
	    },
	    {
	        "city_id" : 701,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البجادية",
	            "en" : "Al Bijadiyah"
	        }
	    },
	    {
	        "city_id" : 702,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرفائع",
	            "en" : "Ar Rafai"
	        }
	    },
	    {
	        "city_id" : 703,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "جهام ابو عشر",
	            "en" : "Jaham Abu Ishar"
	        }
	    },
	    {
	        "city_id" : 704,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مشرفة",
	            "en" : "Mushrifah"
	        }
	    },
	    {
	        "city_id" : 705,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحزيمية",
	            "en" : "Al Huzaymiyah"
	        }
	    },
	    {
	        "city_id" : 706,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "خف",
	            "en" : "Khuff"
	        }
	    },
	    {
	        "city_id" : 707,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المحمدية",
	            "en" : "Al Muhammadiyah"
	        }
	    },
	    {
	        "city_id" : 708,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحفيرة",
	            "en" : "Al Hufayyirah"
	        }
	    },
	    {
	        "city_id" : 709,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ماسل",
	            "en" : "Masal"
	        }
	    },
	    {
	        "city_id" : 710,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القاعية",
	            "en" : "Al Qaiyah"
	        }
	    },
	    {
	        "city_id" : 711,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "منيفة",
	            "en" : "Munifah"
	        }
	    },
	    {
	        "city_id" : 712,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "رضوى",
	            "en" : "Radwa"
	        }
	    },
	    {
	        "city_id" : 713,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ارطاوي حليت",
	            "en" : "Artawi Hillit"
	        }
	    },
	    {
	        "city_id" : 714,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عواضة",
	            "en" : "Awwadah"
	        }
	    },
	    {
	        "city_id" : 715,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "شرارة",
	            "en" : "Shararah"
	        }
	    },
	    {
	        "city_id" : 716,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحزم",
	            "en" : "Al Hazim"
	        }
	    },
	    {
	        "city_id" : 717,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "صقرة",
	            "en" : "Saqrah"
	        }
	    },
	    {
	        "city_id" : 718,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العقيشية",
	            "en" : "Al Uqayshiyah"
	        }
	    },
	    {
	        "city_id" : 719,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القرين",
	            "en" : "Al Qurayn"
	        }
	    },
	    {
	        "city_id" : 720,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عقلة الغويري",
	            "en" : "Uqlat Al Uwayri"
	        }
	    },
	    {
	        "city_id" : 721,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ام زموع",
	            "en" : "Umm Zumu"
	        }
	    },
	    {
	        "city_id" : 722,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عين البراحة",
	            "en" : "Ayn Al Barahah"
	        }
	    },
	    {
	        "city_id" : 723,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مغيراء",
	            "en" : "Mughayra"
	        }
	    },
	    {
	        "city_id" : 724,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الضحوي",
	            "en" : "Ad Dahawi"
	        }
	    },
	    {
	        "city_id" : 725,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عسيلة",
	            "en" : "Usaylah"
	        }
	    },
	    {
	        "city_id" : 726,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المغيب",
	            "en" : "Al Maghib"
	        }
	    },
	    {
	        "city_id" : 727,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "فيضة المفص",
	            "en" : "Faydat Al Mafass"
	        }
	    },
	    {
	        "city_id" : 728,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عريدة",
	            "en" : "Urayyidah"
	        }
	    },
	    {
	        "city_id" : 729,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الشعراء",
	            "en" : "Ash Shaara"
	        }
	    },
	    {
	        "city_id" : 730,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العازمية",
	            "en" : "Al Azimiyah"
	        }
	    },
	    {
	        "city_id" : 731,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المحوي",
	            "en" : "Al Mahawi"
	        }
	    },
	    {
	        "city_id" : 732,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المدرع",
	            "en" : "Al Mudarri"
	        }
	    },
	    {
	        "city_id" : 733,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "سرورة",
	            "en" : "Sururah"
	        }
	    },
	    {
	        "city_id" : 734,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عصماء",
	            "en" : "Asma"
	        }
	    },
	    {
	        "city_id" : 735,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ام طليحة",
	            "en" : "Umm Tulayhah"
	        }
	    },
	    {
	        "city_id" : 736,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مشرفة",
	            "en" : "Mushrifah"
	        }
	    },
	    {
	        "city_id" : 737,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مساوي",
	            "en" : "Musawi"
	        }
	    },
	    {
	        "city_id" : 738,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "النقعة",
	            "en" : "An Niqah"
	        }
	    },
	    {
	        "city_id" : 739,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "افقرا",
	            "en" : "Afqirah"
	        }
	    },
	    {
	        "city_id" : 740,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرفاع",
	            "en" : "Ar Rufa"
	        }
	    },
	    {
	        "city_id" : 741,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفقارة",
	            "en" : "Al Fuqarah"
	        }
	    },
	    {
	        "city_id" : 742,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الودي",
	            "en" : "Al Wuday"
	        }
	    },
	    {
	        "city_id" : 743,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرفيعة",
	            "en" : "Ar Rufiah"
	        }
	    },
	    {
	        "city_id" : 744,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخبة",
	            "en" : "Al Khubbah"
	        }
	    },
	    {
	        "city_id" : 745,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "النبوان",
	            "en" : "An Nabuwan"
	        }
	    },
	    {
	        "city_id" : 746,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرديفة",
	            "en" : "Ar Rudifah"
	        }
	    },
	    {
	        "city_id" : 747,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرشاوية",
	            "en" : "Ar Rishawiyah"
	        }
	    },
	    {
	        "city_id" : 748,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مطربة",
	            "en" : "Mutribah"
	        }
	    },
	    {
	        "city_id" : 749,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المستجدة",
	            "en" : "Al Mustajiddah"
	        }
	    },
	    {
	        "city_id" : 750,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العامرية",
	            "en" : "Al Amiriyah"
	        }
	    },
	    {
	        "city_id" : 751,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفيضة",
	            "en" : "Al Faydah"
	        }
	    },
	    {
	        "city_id" : 752,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الظلماوي",
	            "en" : "Adh Dhalmawi"
	        }
	    },
	    {
	        "city_id" : 753,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "شبيرمة",
	            "en" : "Shubayrimah"
	        }
	    },
	    {
	        "city_id" : 754,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عصام",
	            "en" : "Isam"
	        }
	    },
	    {
	        "city_id" : 755,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عبادة",
	            "en" : "Abbadah"
	        }
	    },
	    {
	        "city_id" : 756,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحيد",
	            "en" : "Al Hayd"
	        }
	    },
	    {
	        "city_id" : 757,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العبل",
	            "en" : "Al Abal"
	        }
	    },
	    {
	        "city_id" : 758,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ارطاوي الحماميد",
	            "en" : "Artawi Al Hamamid"
	        }
	    },
	    {
	        "city_id" : 759,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "بدائع ابن نجم",
	            "en" : "Badai Ibn Najim"
	        }
	    },
	    {
	        "city_id" : 760,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المرية",
	            "en" : "Al Marriyah"
	        }
	    },
	    {
	        "city_id" : 761,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الشقران",
	            "en" : "Ash Shuqran"
	        }
	    },
	    {
	        "city_id" : 762,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الكريزية",
	            "en" : "Al Kurayziyah"
	        }
	    },
	    {
	        "city_id" : 763,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "ذارة",
	            "en" : "Dharah"
	        }
	    },
	    {
	        "city_id" : 764,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "قصيباء",
	            "en" : "Qusayba"
	        }
	    },
	    {
	        "city_id" : 765,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "رحبة علوش",
	            "en" : "Rahbat Allush"
	        }
	    },
	    {
	        "city_id" : 766,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الكريزية",
	            "en" : "Al Kurayziyah"
	        }
	    },
	    {
	        "city_id" : 767,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "البديعة",
	            "en" : "Al Bidayyiah"
	        }
	    },
	    {
	        "city_id" : 768,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "صبحا",
	            "en" : "Sabha"
	        }
	    },
	    {
	        "city_id" : 769,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "حزرة",
	            "en" : "Hazrah"
	        }
	    },
	    {
	        "city_id" : 770,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "غراب",
	            "en" : "Ghurab"
	        }
	    },
	    {
	        "city_id" : 771,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الحجرية",
	            "en" : "Al Hijriyah"
	        }
	    },
	    {
	        "city_id" : 772,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أبو مغير",
	            "en" : "Abu Mughayr"
	        }
	    },
	    {
	        "city_id" : 773,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العد",
	            "en" : "Al Idd"
	        }
	    },
	    {
	        "city_id" : 774,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الربثة",
	            "en" : "Ar Rabtah"
	        }
	    },
	    {
	        "city_id" : 775,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "البركة",
	            "en" : "Al Birkah"
	        }
	    },
	    {
	        "city_id" : 776,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "النفازي",
	            "en" : "An Nafazi"
	        }
	    },
	    {
	        "city_id" : 777,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الحناكية",
	            "en" : "Al Hinakiyah"
	        }
	    },
	    {
	        "city_id" : 778,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المحفر",
	            "en" : "Al Mahaffar"
	        }
	    },
	    {
	        "city_id" : 779,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "النخيل",
	            "en" : "An Nakhyil"
	        }
	    },
	    {
	        "city_id" : 780,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الصمد",
	            "en" : "As Samd"
	        }
	    },
	    {
	        "city_id" : 781,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الضميرية",
	            "en" : "Ad Dumayriyah"
	        }
	    },
	    {
	        "city_id" : 782,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المحامة",
	            "en" : "Al Mahamah"
	        }
	    },
	    {
	        "city_id" : 783,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الحسو",
	            "en" : "Al Hisu"
	        }
	    },
	    {
	        "city_id" : 784,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الهميج",
	            "en" : "Al Humayj"
	        }
	    },
	    {
	        "city_id" : 785,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "صخيبرة",
	            "en" : "Sukhaybirah"
	        }
	    },
	    {
	        "city_id" : 786,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "هدبان",
	            "en" : "Hadban"
	        }
	    },
	    {
	        "city_id" : 787,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "بلغة",
	            "en" : "Bilghah"
	        }
	    },
	    {
	        "city_id" : 788,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الماوية",
	            "en" : "Al Mawiyah"
	        }
	    },
	    {
	        "city_id" : 789,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "قصيرة",
	            "en" : "Qusayrah"
	        }
	    },
	    {
	        "city_id" : 790,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العوشزي",
	            "en" : "Al Awshazi"
	        }
	    },
	    {
	        "city_id" : 791,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "عرجاء",
	            "en" : "Arja"
	        }
	    },
	    {
	        "city_id" : 792,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "طلال",
	            "en" : "Talal"
	        }
	    },
	    {
	        "city_id" : 793,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحزم",
	            "en" : "Al Hazm"
	        }
	    },
	    {
	        "city_id" : 794,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الطوقي",
	            "en" : "At Tawqi"
	        }
	    },
	    {
	        "city_id" : 795,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حريملاء",
	            "en" : "Huraymila"
	        }
	    },
	    {
	        "city_id" : 796,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ملهم",
	            "en" : "Malham"
	        }
	    },
	    {
	        "city_id" : 797,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "سدوس",
	            "en" : "Sudus"
	        }
	    },
	    {
	        "city_id" : 798,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حزوى",
	            "en" : "Hizwa"
	        }
	    },
	    {
	        "city_id" : 799,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "دقلة",
	            "en" : "Diqalah"
	        }
	    },
	    {
	        "city_id" : 800,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حليفة",
	            "en" : "Hulayfah"
	        }
	    },
	    {
	        "city_id" : 801,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "صلبوخ",
	            "en" : "Sulbukh"
	        }
	    },
	    {
	        "city_id" : 802,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البرة",
	            "en" : "Al Barrah"
	        }
	    },
	    {
	        "city_id" : 803,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العويند",
	            "en" : "Al Uwaynid"
	        }
	    },
	    {
	        "city_id" : 804,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البويب",
	            "en" : "Al Buwayb"
	        }
	    },
	    {
	        "city_id" : 805,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "عيينة",
	            "en" : "Uyaynah"
	        }
	    },
	    {
	        "city_id" : 806,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "إبن غنام",
	            "en" : "Ibn Ghannam"
	        }
	    },
	    {
	        "city_id" : 807,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الغنامية",
	            "en" : "Al Ghanamiyah"
	        }
	    },
	    {
	        "city_id" : 808,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العماج",
	            "en" : "Al Ammaj"
	        }
	    },
	    {
	        "city_id" : 809,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "هيت",
	            "en" : "Hit"
	        }
	    },
	    {
	        "city_id" : 810,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحائر",
	            "en" : "Al Hair"
	        }
	    },
	    {
	        "city_id" : 811,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "كهف برمة",
	            "en" : "Kahf Barmah"
	        }
	    },
	    {
	        "city_id" : 812,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "بنبان",
	            "en" : "Banban"
	        }
	    },
	    {
	        "city_id" : 813,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الثمامة",
	            "en" : "Ath Thumamah"
	        }
	    },
	    {
	        "city_id" : 814,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "لبن",
	            "en" : "Laban"
	        }
	    },
	    {
	        "city_id" : 815,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العريدية",
	            "en" : "Al Uraydiyah"
	        }
	    },
	    {
	        "city_id" : 816,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العباسية",
	            "en" : "Al Abbasiyah"
	        }
	    },
	    {
	        "city_id" : 817,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أم رضمة",
	            "en" : "Umm Radmah"
	        }
	    },
	    {
	        "city_id" : 818,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أم سليم",
	            "en" : "Umm Sulaym"
	        }
	    },
	    {
	        "city_id" : 819,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ثرمداء",
	            "en" : "Tharmada"
	        }
	    },
	    {
	        "city_id" : 820,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مرات",
	            "en" : "Marat"
	        }
	    },
	    {
	        "city_id" : 821,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أثيثية",
	            "en" : "Uthaythiyah"
	        }
	    },
	    {
	        "city_id" : 822,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "لبخة",
	            "en" : "Labkhah"
	        }
	    },
	    {
	        "city_id" : 823,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "روضة الفرس",
	            "en" : "Rawdat Al Faras"
	        }
	    },
	    {
	        "city_id" : 824,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ام طلحة",
	            "en" : "Umm Talhah"
	        }
	    },
	    {
	        "city_id" : 825,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حويتة",
	            "en" : "Huwaytah"
	        }
	    },
	    {
	        "city_id" : 826,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الطويلة",
	            "en" : "At Tawilah"
	        }
	    },
	    {
	        "city_id" : 827,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أوبير",
	            "en" : "Ubayr"
	        }
	    },
	    {
	        "city_id" : 828,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدرعية",
	            "en" : "Ad Diriyah"
	        }
	    },
	    {
	        "city_id" : 829,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عرقة",
	            "en" : "Irqah"
	        }
	    },
	    {
	        "city_id" : 830,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العيينة",
	            "en" : "Al Uyainah"
	        }
	    },
	    {
	        "city_id" : 831,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الوصيل",
	            "en" : "Al Wusayl"
	        }
	    },
	    {
	        "city_id" : 832,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أبا الكباش",
	            "en" : "Aba Al Kibash"
	        }
	    },
	    {
	        "city_id" : 833,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الجبيلة",
	            "en" : "Al Jubaylah"
	        }
	    },
	    {
	        "city_id" : 834,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العمارية",
	            "en" : "Al Ammariyah"
	        }
	    },
	    {
	        "city_id" : 835,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "بوضة",
	            "en" : "Bawdah"
	        }
	    },
	    {
	        "city_id" : 836,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العليا",
	            "en" : "Al Ulayya"
	        }
	    },
	    {
	        "city_id" : 837,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "قصر القرينة",
	            "en" : "Qasr Al Quraynah"
	        }
	    },
	    {
	        "city_id" : 838,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "قصر فيهق",
	            "en" : "Qasr Fayhaq"
	        }
	    },
	    {
	        "city_id" : 839,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ضرما",
	            "en" : "Duruma"
	        }
	    },
	    {
	        "city_id" : 840,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "قصور المقبل",
	            "en" : "Qusur Al Muqbil"
	        }
	    },
	    {
	        "city_id" : 841,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الغطغط",
	            "en" : "Al Ghutghut"
	        }
	    },
	    {
	        "city_id" : 842,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "قصر ابن شهيل",
	            "en" : "Qasr Ibn Shuhayl"
	        }
	    },
	    {
	        "city_id" : 843,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المغرفية",
	            "en" : "Al Maghrafiyah"
	        }
	    },
	    {
	        "city_id" : 844,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "جو",
	            "en" : "Jaww"
	        }
	    },
	    {
	        "city_id" : 845,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الغزيز",
	            "en" : "Al Ghuzayz"
	        }
	    },
	    {
	        "city_id" : 846,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الثمامي",
	            "en" : "Ath Thumamy"
	        }
	    },
	    {
	        "city_id" : 847,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "وعلة",
	            "en" : "Waalah"
	        }
	    },
	    {
	        "city_id" : 848,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الشامانية",
	            "en" : "Ash Shamaniyah"
	        }
	    },
	    {
	        "city_id" : 849,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القصورية",
	            "en" : "Al Qusuriyah"
	        }
	    },
	    {
	        "city_id" : 850,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزلة",
	            "en" : "Mazallah"
	        }
	    },
	    {
	        "city_id" : 851,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عصيلة",
	            "en" : "Usaylah"
	        }
	    },
	    {
	        "city_id" : 852,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الشواة",
	            "en" : "Ash Shawah"
	        }
	    },
	    {
	        "city_id" : 853,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عليان",
	            "en" : "Ilayyan"
	        }
	    },
	    {
	        "city_id" : 854,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عيدان",
	            "en" : "Idan"
	        }
	    },
	    {
	        "city_id" : 855,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "سيح الدبول",
	            "en" : "Sayh Ad Dubul"
	        }
	    },
	    {
	        "city_id" : 856,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الهمجة",
	            "en" : "Al Hamjah"
	        }
	    },
	    {
	        "city_id" : 857,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرفيعة",
	            "en" : "Ar Rafiah"
	        }
	    },
	    {
	        "city_id" : 858,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الكدرة",
	            "en" : "Al Kadrah"
	        }
	    },
	    {
	        "city_id" : 859,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفيضة",
	            "en" : "Al Faydah"
	        }
	    },
	    {
	        "city_id" : 860,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخيس",
	            "en" : "Al Khis"
	        }
	    },
	    {
	        "city_id" : 861,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدويرة",
	            "en" : "Ad Duwayrah"
	        }
	    },
	    {
	        "city_id" : 862,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أبو مروة",
	            "en" : "Abu Marwah"
	        }
	    },
	    {
	        "city_id" : 863,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "سماح",
	            "en" : "Samah"
	        }
	    },
	    {
	        "city_id" : 864,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القرنة",
	            "en" : "Al Qarnah"
	        }
	    },
	    {
	        "city_id" : 865,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "داحس",
	            "en" : "Dahis"
	        }
	    },
	    {
	        "city_id" : 866,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "دسمان",
	            "en" : "Dasman"
	        }
	    },
	    {
	        "city_id" : 867,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العويسية",
	            "en" : "Al Uwaysiyah"
	        }
	    },
	    {
	        "city_id" : 868,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العلياء",
	            "en" : "Al Ulayya"
	        }
	    },
	    {
	        "city_id" : 869,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزرعة مزعلة",
	            "en" : "Mazraat Mizilah"
	        }
	    },
	    {
	        "city_id" : 870,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القوسة",
	            "en" : "Al Qawsah"
	        }
	    },
	    {
	        "city_id" : 871,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الروغ",
	            "en" : "Ar Rawgh"
	        }
	    },
	    {
	        "city_id" : 872,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الوسيطاء",
	            "en" : "Al Wusayta"
	        }
	    },
	    {
	        "city_id" : 873,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البعيثية",
	            "en" : "Al Buaythiyah"
	        }
	    },
	    {
	        "city_id" : 874,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الشتلانية",
	            "en" : "Ash Shatlaniyah"
	        }
	    },
	    {
	        "city_id" : 875,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "جدالة",
	            "en" : "Jaddalah"
	        }
	    },
	    {
	        "city_id" : 876,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "قفرة",
	            "en" : "Qafarah"
	        }
	    },
	    {
	        "city_id" : 877,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أجزالا",
	            "en" : "Ajzala"
	        }
	    },
	    {
	        "city_id" : 878,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الجفارة",
	            "en" : "Al Jafarah"
	        }
	    },
	    {
	        "city_id" : 879,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "غودة",
	            "en" : "Ghawdah"
	        }
	    },
	    {
	        "city_id" : 880,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القويعية",
	            "en" : "Quwayiyah"
	        }
	    },
	    {
	        "city_id" : 881,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حلبان",
	            "en" : "Halaban"
	        }
	    },
	    {
	        "city_id" : 882,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "سنام",
	            "en" : "Sanam"
	        }
	    },
	    {
	        "city_id" : 883,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرجع",
	            "en" : "Ar Raj"
	        }
	    },
	    {
	        "city_id" : 884,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "طحي",
	            "en" : "Tuhayy"
	        }
	    },
	    {
	        "city_id" : 885,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرويضة",
	            "en" : "Ar Ruwaydah"
	        }
	    },
	    {
	        "city_id" : 886,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخنيقية",
	            "en" : "Al Khunayqiyah"
	        }
	    },
	    {
	        "city_id" : 887,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الناصفة",
	            "en" : "An Nasifah"
	        }
	    },
	    {
	        "city_id" : 888,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المثناة",
	            "en" : "Al Mathnah"
	        }
	    },
	    {
	        "city_id" : 889,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الجله",
	            "en" : "Al Jilh"
	        }
	    },
	    {
	        "city_id" : 890,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الربواء",
	            "en" : "Ar Rabwa"
	        }
	    },
	    {
	        "city_id" : 891,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "لجعة",
	            "en" : "Lajah"
	        }
	    },
	    {
	        "city_id" : 892,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "نخيلان",
	            "en" : "Nukhaylan"
	        }
	    },
	    {
	        "city_id" : 893,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عنان",
	            "en" : "Inan"
	        }
	    },
	    {
	        "city_id" : 894,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البدع",
	            "en" : "Al Bad"
	        }
	    },
	    {
	        "city_id" : 895,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "صبحاء",
	            "en" : "Sabha"
	        }
	    },
	    {
	        "city_id" : 896,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القصر",
	            "en" : "Al Qasr"
	        }
	    },
	    {
	        "city_id" : 897,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ترعة",
	            "en" : "Tirah"
	        }
	    },
	    {
	        "city_id" : 898,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ظلم",
	            "en" : "Dhalam"
	        }
	    },
	    {
	        "city_id" : 899,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخفاشة",
	            "en" : "Al Khafashah"
	        }
	    },
	    {
	        "city_id" : 900,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "براش",
	            "en" : "Barash"
	        }
	    },
	    {
	        "city_id" : 901,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشريف",
	            "en" : "Ash Sharif"
	        }
	    },
	    {
	        "city_id" : 903,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفرع",
	            "en" : "Al Far"
	        }
	    },
	    {
	        "city_id" : 904,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حرجل",
	            "en" : "Harjal"
	        }
	    },
	    {
	        "city_id" : 905,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "هديل",
	            "en" : "Hidayl"
	        }
	    },
	    {
	        "city_id" : 906,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ام الحصن",
	            "en" : "Umm Al Hisn"
	        }
	    },
	    {
	        "city_id" : 907,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "اللحيان",
	            "en" : "Al Lahyan"
	        }
	    },
	    {
	        "city_id" : 908,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الاسراب",
	            "en" : "Al Asrab"
	        }
	    },
	    {
	        "city_id" : 909,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العثرية",
	            "en" : "Al Athriyah"
	        }
	    },
	    {
	        "city_id" : 910,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الوطاة",
	            "en" : "Al Wutah"
	        }
	    },
	    {
	        "city_id" : 911,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "غضي",
	            "en" : "Ghudayy"
	        }
	    },
	    {
	        "city_id" : 912,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحيطان",
	            "en" : "Al Hitan"
	        }
	    },
	    {
	        "city_id" : 913,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصريف",
	            "en" : "As Sarif"
	        }
	    },
	    {
	        "city_id" : 914,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الفايزية",
	            "en" : "Al Fayziyah"
	        }
	    },
	    {
	        "city_id" : 915,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصعيبية",
	            "en" : "As Suaybiyah"
	        }
	    },
	    {
	        "city_id" : 916,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "نقرة العمارين",
	            "en" : "Nuqrat Al Amarin"
	        }
	    },
	    {
	        "city_id" : 917,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "رغيلة",
	            "en" : "Rughaylah"
	        }
	    },
	    {
	        "city_id" : 918,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الدغمانيات",
	            "en" : "Mazari Ad Daghmaniyat"
	        }
	    },
	    {
	        "city_id" : 919,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الراشد",
	            "en" : "Mazari Ar Rashid"
	        }
	    },
	    {
	        "city_id" : 920,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العليا",
	            "en" : "Al Ulayya"
	        }
	    },
	    {
	        "city_id" : 921,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الروضة",
	            "en" : "Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 922,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أبلق",
	            "en" : "Ablaq"
	        }
	    },
	    {
	        "city_id" : 923,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ضراس",
	            "en" : "Diras"
	        }
	    },
	    {
	        "city_id" : 924,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم مكرية",
	            "en" : "Umm Makriyah"
	        }
	    },
	    {
	        "city_id" : 925,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الخناصة",
	            "en" : "Al Khinnasah"
	        }
	    },
	    {
	        "city_id" : 926,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الصقيريات",
	            "en" : "Mazari As Suqayriyat"
	        }
	    },
	    {
	        "city_id" : 927,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "رياض الرماح",
	            "en" : "Riyad Ar Rimah"
	        }
	    },
	    {
	        "city_id" : 928,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العقلة",
	            "en" : "Al Uqlah"
	        }
	    },
	    {
	        "city_id" : 929,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "روض ابن كميان",
	            "en" : "Rawd Ibn Kumayyan"
	        }
	    },
	    {
	        "city_id" : 930,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القرو",
	            "en" : "Al Qaru"
	        }
	    },
	    {
	        "city_id" : 931,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحديدية",
	            "en" : "Al Hadidiyah"
	        }
	    },
	    {
	        "city_id" : 932,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البعيثة",
	            "en" : "Al Biithah"
	        }
	    },
	    {
	        "city_id" : 933,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصغيرية",
	            "en" : "As Sughayriyah"
	        }
	    },
	    {
	        "city_id" : 934,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "حويلان",
	            "en" : "Huwaylan"
	        }
	    },
	    {
	        "city_id" : 935,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصباخ",
	            "en" : "As Subakh"
	        }
	    },
	    {
	        "city_id" : 936,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "اللسيب",
	            "en" : "Al Lusayb"
	        }
	    },
	    {
	        "city_id" : 937,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الدعيسة",
	            "en" : "Ad Daisah"
	        }
	    },
	    {
	        "city_id" : 938,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العاقول",
	            "en" : "Al Aqul"
	        }
	    },
	    {
	        "city_id" : 939,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البصر",
	            "en" : "Al Busur"
	        }
	    },
	    {
	        "city_id" : 940,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "المريشدية",
	            "en" : "Al Murayshdiyah"
	        }
	    },
	    {
	        "city_id" : 941,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الطرفية",
	            "en" : "At Turfiyah"
	        }
	    },
	    {
	        "city_id" : 942,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القرعاء",
	            "en" : "Al Qara"
	        }
	    },
	    {
	        "city_id" : 943,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المليداء",
	            "en" : "Al Mulayda"
	        }
	    },
	    {
	        "city_id" : 944,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البطين",
	            "en" : "Al Butayn"
	        }
	    },
	    {
	        "city_id" : 945,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "محير الترمس",
	            "en" : "Mihir At Turmus"
	        }
	    },
	    {
	        "city_id" : 946,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "شري",
	            "en" : "Shari"
	        }
	    },
	    {
	        "city_id" : 947,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشقة العليا",
	            "en" : "Ash Shiqqah Al Ulya"
	        }
	    },
	    {
	        "city_id" : 948,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشقة السفلى",
	            "en" : "Ash Shiqqah As Suflah"
	        }
	    },
	    {
	        "city_id" : 949,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الزبيرة",
	            "en" : "Az Zubayrah"
	        }
	    },
	    {
	        "city_id" : 950,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "قصيباء",
	            "en" : "Qusayba"
	        }
	    },
	    {
	        "city_id" : 951,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القوارة",
	            "en" : "Al Quwarah"
	        }
	    },
	    {
	        "city_id" : 952,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الهدية",
	            "en" : "Al Hudayyah"
	        }
	    },
	    {
	        "city_id" : 953,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الغماس",
	            "en" : "Al Ghammas"
	        }
	    },
	    {
	        "city_id" : 954,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مدرج",
	            "en" : "Mudarraj"
	        }
	    },
	    {
	        "city_id" : 955,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "قبة",
	            "en" : "Qibah"
	        }
	    },
	    {
	        "city_id" : 956,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أم سريحة",
	            "en" : "Umm Surayhah"
	        }
	    },
	    {
	        "city_id" : 957,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخروعية",
	            "en" : "Al Kharwaiyah"
	        }
	    },
	    {
	        "city_id" : 958,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المجذمية",
	            "en" : "Al Majdhamiyah"
	        }
	    },
	    {
	        "city_id" : 959,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحفيرة / حصاة قحطان",
	            "en" : "Al Hufayyirah / Hasat Qahtan"
	        }
	    },
	    {
	        "city_id" : 960,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحرملية",
	            "en" : "Al Harmaliyah"
	        }
	    },
	    {
	        "city_id" : 961,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "خبراء الثوير",
	            "en" : "Khabra Ath Thawir"
	        }
	    },
	    {
	        "city_id" : 962,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرين",
	            "en" : "Ar Rayn"
	        }
	    },
	    {
	        "city_id" : 963,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "محيرقة",
	            "en" : "Muhairiqah"
	        }
	    },
	    {
	        "city_id" : 964,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مرقان",
	            "en" : "Marqan"
	        }
	    },
	    {
	        "city_id" : 965,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ام نخيلة",
	            "en" : "Umm Nakhilah"
	        }
	    },
	    {
	        "city_id" : 966,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ام الدبي",
	            "en" : "Umm Ad Dibay"
	        }
	    },
	    {
	        "city_id" : 967,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "خبراء حلوة",
	            "en" : "Khabra Halwah"
	        }
	    },
	    {
	        "city_id" : 968,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حجيلا",
	            "en" : "Hujaila"
	        }
	    },
	    {
	        "city_id" : 969,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفويلق",
	            "en" : "Al Fuwayliq"
	        }
	    },
	    {
	        "city_id" : 970,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القويع",
	            "en" : "Al Quway"
	        }
	    },
	    {
	        "city_id" : 971,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مزعل",
	            "en" : "Mizil"
	        }
	    },
	    {
	        "city_id" : 972,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "بدائع المشاعلة",
	            "en" : "Badai Al Mashailah"
	        }
	    },
	    {
	        "city_id" : 973,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "خبراء فاران",
	            "en" : "Khabra Faran"
	        }
	    },
	    {
	        "city_id" : 974,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "خبيب الريم",
	            "en" : "Khubayb Ar Rim"
	        }
	    },
	    {
	        "city_id" : 975,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القرارة",
	            "en" : "Al Qararah"
	        }
	    },
	    {
	        "city_id" : 976,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أم طليح",
	            "en" : "Umm Tulayh"
	        }
	    },
	    {
	        "city_id" : 977,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المانعية",
	            "en" : "Al Maniiyah"
	        }
	    },
	    {
	        "city_id" : 978,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الجديدة",
	            "en" : "Al Jadidah"
	        }
	    },
	    {
	        "city_id" : 979,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العدوة",
	            "en" : "Al Idwah"
	        }
	    },
	    {
	        "city_id" : 980,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الذيبية",
	            "en" : "Adh Dhibiyah"
	        }
	    },
	    {
	        "city_id" : 981,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الصدر",
	            "en" : "As Sadr"
	        }
	    },
	    {
	        "city_id" : 982,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أبرقية",
	            "en" : "Abraqiyah"
	        }
	    },
	    {
	        "city_id" : 983,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حجرفة",
	            "en" : "Hajrufah"
	        }
	    },
	    {
	        "city_id" : 984,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "معانيق",
	            "en" : "Maaniq"
	        }
	    },
	    {
	        "city_id" : 985,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الصيهد",
	            "en" : "As Sayhad"
	        }
	    },
	    {
	        "city_id" : 986,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "اللغفة",
	            "en" : "Al Laghfah"
	        }
	    },
	    {
	        "city_id" : 987,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخفق الجديد",
	            "en" : "Al Khafaq Al Jadid"
	        }
	    },
	    {
	        "city_id" : 988,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ظلماء",
	            "en" : "Dhalma"
	        }
	    },
	    {
	        "city_id" : 989,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخلائق الشرقية",
	            "en" : "Al Khalaiq Ash Sharqiyah"
	        }
	    },
	    {
	        "city_id" : 990,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المزاحمية",
	            "en" : "Al Muzahimiyah"
	        }
	    },
	    {
	        "city_id" : 991,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "تبراك",
	            "en" : "Tibrak"
	        }
	    },
	    {
	        "city_id" : 992,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفيضة",
	            "en" : "Al Faydah"
	        }
	    },
	    {
	        "city_id" : 993,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الاوسط",
	            "en" : "Al Awsat"
	        }
	    },
	    {
	        "city_id" : 994,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحويرة",
	            "en" : "Al Huwayrrah"
	        }
	    },
	    {
	        "city_id" : 995,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "خشم معضد",
	            "en" : "Khashm Midad"
	        }
	    },
	    {
	        "city_id" : 996,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البخرا",
	            "en" : "Al Bakhra"
	        }
	    },
	    {
	        "city_id" : 997,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "اللغفية",
	            "en" : "Al Lughfiyah"
	        }
	    },
	    {
	        "city_id" : 998,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المسبر",
	            "en" : "Al Masbar"
	        }
	    },
	    {
	        "city_id" : 999,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "النظيم",
	            "en" : "An Nadhim"
	        }
	    },
	    {
	        "city_id" : 1000,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حفرة نساح",
	            "en" : "Hafirat Nisah"
	        }
	    },
	    {
	        "city_id" : 1001,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عجاج",
	            "en" : "Ajaj"
	        }
	    },
	    {
	        "city_id" : 1002,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المشاعلة",
	            "en" : "Al Mashailah"
	        }
	    },
	    {
	        "city_id" : 1003,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "قنيفذة",
	            "en" : "Qunayfidhah"
	        }
	    },
	    {
	        "city_id" : 1004,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "عفرية",
	            "en" : "Ifriyah"
	        }
	    },
	    {
	        "city_id" : 1005,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخلائق الغربية",
	            "en" : "Al Khalaiq Al Gharbiyah"
	        }
	    },
	    {
	        "city_id" : 1006,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الجفير",
	            "en" : "Al Jufayr"
	        }
	    },
	    {
	        "city_id" : 1007,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الأسطح",
	            "en" : "Al Astah"
	        }
	    },
	    {
	        "city_id" : 1008,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الرجع",
	            "en" : "Ar Raj"
	        }
	    },
	    {
	        "city_id" : 1009,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "دمان",
	            "en" : "Duman"
	        }
	    },
	    {
	        "city_id" : 1010,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المفرق",
	            "en" : "Al Mafraq"
	        }
	    },
	    {
	        "city_id" : 1011,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الغزلان",
	            "en" : "Al Ghuzlan"
	        }
	    },
	    {
	        "city_id" : 1012,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الجديد",
	            "en" : "Al Jadid"
	        }
	    },
	    {
	        "city_id" : 1013,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "وجمة",
	            "en" : "Wajmah"
	        }
	    },
	    {
	        "city_id" : 1014,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "عرقوص",
	            "en" : "Arqus"
	        }
	    },
	    {
	        "city_id" : 1015,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العنيق",
	            "en" : "Al Unayq"
	        }
	    },
	    {
	        "city_id" : 1016,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "مرتجة",
	            "en" : "Murattijah"
	        }
	    },
	    {
	        "city_id" : 1017,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الفقرة",
	            "en" : "Al Faqrah"
	        }
	    },
	    {
	        "city_id" : 1018,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "خلص",
	            "en" : "Khals"
	        }
	    },
	    {
	        "city_id" : 1019,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "القفاف",
	            "en" : "Al Qifaf"
	        }
	    },
	    {
	        "city_id" : 1020,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أم البرك",
	            "en" : "Umm Al Birak"
	        }
	    },
	    {
	        "city_id" : 1021,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "مريخة",
	            "en" : "Muraykhah"
	        }
	    },
	    {
	        "city_id" : 1022,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العبلا",
	            "en" : "Al Abla"
	        }
	    },
	    {
	        "city_id" : 1023,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "مرموماء",
	            "en" : "Marmuma"
	        }
	    },
	    {
	        "city_id" : 1024,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "قرظة",
	            "en" : "Qurudhah"
	        }
	    },
	    {
	        "city_id" : 1025,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أم فحي",
	            "en" : "Umm Fahi"
	        }
	    },
	    {
	        "city_id" : 1026,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "البركة",
	            "en" : "Al Barkah"
	        }
	    },
	    {
	        "city_id" : 1027,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الهدى",
	            "en" : "Al Hada"
	        }
	    },
	    {
	        "city_id" : 1028,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الغور",
	            "en" : "Al Ghur"
	        }
	    },
	    {
	        "city_id" : 1029,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "مثعر",
	            "en" : "Mathar"
	        }
	    },
	    {
	        "city_id" : 1030,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الحسينية",
	            "en" : "Al Husayniyah"
	        }
	    },
	    {
	        "city_id" : 1031,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الشفية",
	            "en" : "Ash Shufayyah"
	        }
	    },
	    {
	        "city_id" : 1032,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "السليمية",
	            "en" : "As Sulaymiyah"
	        }
	    },
	    {
	        "city_id" : 1033,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أبو قرن",
	            "en" : "Abu Qarn"
	        }
	    },
	    {
	        "city_id" : 1034,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المسجد",
	            "en" : "Al Masjid"
	        }
	    },
	    {
	        "city_id" : 1035,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "اللهبان",
	            "en" : "Al Lahban"
	        }
	    },
	    {
	        "city_id" : 1036,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الجوابرة",
	            "en" : "Al Jawabirat"
	        }
	    },
	    {
	        "city_id" : 1037,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "خرص",
	            "en" : "Khuruss"
	        }
	    },
	    {
	        "city_id" : 1038,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "عاصر",
	            "en" : "Asir"
	        }
	    },
	    {
	        "city_id" : 1039,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الأثود",
	            "en" : "Al Athud"
	        }
	    },
	    {
	        "city_id" : 1040,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "ترجم",
	            "en" : "Tarjim"
	        }
	    },
	    {
	        "city_id" : 1041,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "كتيدة",
	            "en" : "Kitaydah"
	        }
	    },
	    {
	        "city_id" : 1042,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "سفاء",
	            "en" : "Safa"
	        }
	    },
	    {
	        "city_id" : 1043,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "رحقان",
	            "en" : "Rahqan"
	        }
	    },
	    {
	        "city_id" : 1044,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "ثعيل",
	            "en" : "Thuayyil"
	        }
	    },
	    {
	        "city_id" : 1045,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المفرق",
	            "en" : "Al Mafraq"
	        }
	    },
	    {
	        "city_id" : 1046,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الميث",
	            "en" : "Al Mayth"
	        }
	    },
	    {
	        "city_id" : 1047,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "بئر الغنم",
	            "en" : "Bir Al Ghanam"
	        }
	    },
	    {
	        "city_id" : 1048,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المرتجة",
	            "en" : "Al Murtajjah"
	        }
	    },
	    {
	        "city_id" : 1049,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المعيزلة",
	            "en" : "Al Maayzilah"
	        }
	    },
	    {
	        "city_id" : 1050,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الحار",
	            "en" : "Al Har"
	        }
	    },
	    {
	        "city_id" : 1051,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الصديرة",
	            "en" : "As Sudayyirah"
	        }
	    },
	    {
	        "city_id" : 1052,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "دريبس",
	            "en" : "Diraybis"
	        }
	    },
	    {
	        "city_id" : 1053,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "بدر",
	            "en" : "Badr"
	        }
	    },
	    {
	        "city_id" : 1054,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "بئر قيضي",
	            "en" : "Bir Qaydi"
	        }
	    },
	    {
	        "city_id" : 1055,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الواسطة",
	            "en" : "Al Wasithah"
	        }
	    },
	    {
	        "city_id" : 1056,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الرايس",
	            "en" : "Ar Rayis"
	        }
	    },
	    {
	        "city_id" : 1057,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المسيجيد",
	            "en" : "Al Musayjid"
	        }
	    },
	    {
	        "city_id" : 1058,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العين",
	            "en" : "Al Ayn"
	        }
	    },
	    {
	        "city_id" : 1059,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "خفس دغرة",
	            "en" : "Khafs Daghrah"
	        }
	    },
	    {
	        "city_id" : 1060,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البياض",
	            "en" : "Al Biyad"
	        }
	    },
	    {
	        "city_id" : 1061,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخرج",
	            "en" : "Al Kharj"
	        }
	    },
	    {
	        "city_id" : 1062,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "اليمامة",
	            "en" : "Al Yamamah"
	        }
	    },
	    {
	        "city_id" : 1063,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرفاع",
	            "en" : "Ar Rufa"
	        }
	    },
	    {
	        "city_id" : 1064,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البرة",
	            "en" : "Al Barrah"
	        }
	    },
	    {
	        "city_id" : 1065,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "فرزان",
	            "en" : "Farzan"
	        }
	    },
	    {
	        "city_id" : 1066,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرفيعه",
	            "en" : "Ar Rafiah"
	        }
	    },
	    {
	        "city_id" : 1067,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرفائع",
	            "en" : "Ar Rufai"
	        }
	    },
	    {
	        "city_id" : 1068,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "العذار",
	            "en" : "Al Adhar"
	        }
	    },
	    {
	        "city_id" : 1069,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "زميقة",
	            "en" : "Zumayqah"
	        }
	    },
	    {
	        "city_id" : 1070,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحزم",
	            "en" : "Al Hazim"
	        }
	    },
	    {
	        "city_id" : 1071,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الهياثم",
	            "en" : "Al Hayathim"
	        }
	    },
	    {
	        "city_id" : 1072,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البدع القديم",
	            "en" : "Al Bada Al Qadim"
	        }
	    },
	    {
	        "city_id" : 1073,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدلم",
	            "en" : "Ad Dilam"
	        }
	    },
	    {
	        "city_id" : 1074,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الضبعية",
	            "en" : "Ad Dubayah"
	        }
	    },
	    {
	        "city_id" : 1075,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "نعجان",
	            "en" : "Najan"
	        }
	    },
	    {
	        "city_id" : 1076,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حي القطار",
	            "en" : "Hai Al Qitar"
	        }
	    },
	    {
	        "city_id" : 1077,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الناصفة",
	            "en" : "An Nasifah"
	        }
	    },
	    {
	        "city_id" : 1078,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "السلمية",
	            "en" : "As Silimiyah"
	        }
	    },
	    {
	        "city_id" : 1079,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البدع",
	            "en" : "Al Bada"
	        }
	    },
	    {
	        "city_id" : 1080,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "السهباء",
	            "en" : "As Sahba"
	        }
	    },
	    {
	        "city_id" : 1081,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الثليما",
	            "en" : "Ath Thalima"
	        }
	    },
	    {
	        "city_id" : 1082,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "التوضيحية",
	            "en" : "At Tawdihiyyah"
	        }
	    },
	    {
	        "city_id" : 1083,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المحطة",
	            "en" : "Al Mahattah"
	        }
	    },
	    {
	        "city_id" : 1084,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الرغيب",
	            "en" : "Ar Rughayb"
	        }
	    },
	    {
	        "city_id" : 1085,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المحمدي",
	            "en" : "Al Muhammadi"
	        }
	    },
	    {
	        "city_id" : 1086,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الصحنة",
	            "en" : "As Sahanah"
	        }
	    },
	    {
	        "city_id" : 1087,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الجريسية",
	            "en" : "Al Juraysiyah"
	        }
	    },
	    {
	        "city_id" : 1088,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الغمر",
	            "en" : "Al Ghamr"
	        }
	    },
	    {
	        "city_id" : 1089,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المزرع",
	            "en" : "Al Mazri"
	        }
	    },
	    {
	        "city_id" : 1090,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "هبا",
	            "en" : "Haba"
	        }
	    },
	    {
	        "city_id" : 1091,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الصحن",
	            "en" : "As Sahan"
	        }
	    },
	    {
	        "city_id" : 1092,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "مشوقة",
	            "en" : "Mashuqah"
	        }
	    },
	    {
	        "city_id" : 1093,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أم العراد",
	            "en" : "Umm Al Arad"
	        }
	    },
	    {
	        "city_id" : 1094,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الهرارة",
	            "en" : "Al Harrarah"
	        }
	    },
	    {
	        "city_id" : 1095,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "السدرة",
	            "en" : "As Sidrah"
	        }
	    },
	    {
	        "city_id" : 1096,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الجصة",
	            "en" : "Al Jissa"
	        }
	    },
	    {
	        "city_id" : 1097,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الحويمضة",
	            "en" : "Al Huwaymidah"
	        }
	    },
	    {
	        "city_id" : 1098,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "قران",
	            "en" : "Qaran"
	        }
	    },
	    {
	        "city_id" : 1099,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الخفيق",
	            "en" : "Al Khufayq"
	        }
	    },
	    {
	        "city_id" : 1100,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الهميجة",
	            "en" : "Al Humayjah"
	        }
	    },
	    {
	        "city_id" : 1101,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الصالحية",
	            "en" : "As Salhiyah"
	        }
	    },
	    {
	        "city_id" : 1102,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "مريغان",
	            "en" : "Murayghan"
	        }
	    },
	    {
	        "city_id" : 1103,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العشاي",
	            "en" : "Al Ashshay"
	        }
	    },
	    {
	        "city_id" : 1104,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القعر الاسفل",
	            "en" : "Al Qaar Al Asfal"
	        }
	    },
	    {
	        "city_id" : 1105,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "خليص",
	            "en" : "Khulays"
	        }
	    },
	    {
	        "city_id" : 1106,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحدباء",
	            "en" : "Al Hadba"
	        }
	    },
	    {
	        "city_id" : 1107,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الرهوة",
	            "en" : "Ar Rahawah"
	        }
	    },
	    {
	        "city_id" : 1108,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القوز",
	            "en" : "Al Qawz"
	        }
	    },
	    {
	        "city_id" : 1109,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخنفسة",
	            "en" : "Al Khunfusah"
	        }
	    },
	    {
	        "city_id" : 1110,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حشاش",
	            "en" : "Hishash"
	        }
	    },
	    {
	        "city_id" : 1111,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الضبية",
	            "en" : "Ad Dubayyah"
	        }
	    },
	    {
	        "city_id" : 1112,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البريكة",
	            "en" : "Al Buraykah"
	        }
	    },
	    {
	        "city_id" : 1113,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفز",
	            "en" : "Al Fazz"
	        }
	    },
	    {
	        "city_id" : 1114,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الطينة",
	            "en" : "At Tinah"
	        }
	    },
	    {
	        "city_id" : 1115,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ام الجرم",
	            "en" : "Umm Al Jurm"
	        }
	    },
	    {
	        "city_id" : 1116,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدوارة",
	            "en" : "Ad Duwwarah"
	        }
	    },
	    {
	        "city_id" : 1117,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ابو مراغة",
	            "en" : "Abu Maraghah"
	        }
	    },
	    {
	        "city_id" : 1118,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحفياء",
	            "en" : "Al Hafya"
	        }
	    },
	    {
	        "city_id" : 1119,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخيف",
	            "en" : "Al Khayf"
	        }
	    },
	    {
	        "city_id" : 1120,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المكسر",
	            "en" : "Al Maksir"
	        }
	    },
	    {
	        "city_id" : 1121,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفيج",
	            "en" : "Al Fij"
	        }
	    },
	    {
	        "city_id" : 1122,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السهم",
	            "en" : "Al Saham"
	        }
	    },
	    {
	        "city_id" : 1123,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدف",
	            "en" : "Ad Daff"
	        }
	    },
	    {
	        "city_id" : 1124,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المشريفة",
	            "en" : "Al Musharifah"
	        }
	    },
	    {
	        "city_id" : 1125,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الوقب",
	            "en" : "Al Waqib"
	        }
	    },
	    {
	        "city_id" : 1126,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحلقة",
	            "en" : "Al Halqah"
	        }
	    },
	    {
	        "city_id" : 1127,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "جليل",
	            "en" : "Julayyil"
	        }
	    },
	    {
	        "city_id" : 1128,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حلمة",
	            "en" : "Hilimah"
	        }
	    },
	    {
	        "city_id" : 1129,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجضع",
	            "en" : "Al Jid"
	        }
	    },
	    {
	        "city_id" : 1130,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البيار",
	            "en" : "Al Biyar"
	        }
	    },
	    {
	        "city_id" : 1131,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المعالي",
	            "en" : "Al Maali"
	        }
	    },
	    {
	        "city_id" : 1132,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المديد",
	            "en" : "Al Madid"
	        }
	    },
	    {
	        "city_id" : 1133,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المريصيع",
	            "en" : "Al Maraysi"
	        }
	    },
	    {
	        "city_id" : 1134,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "جليلة",
	            "en" : "Jilayyilah"
	        }
	    },
	    {
	        "city_id" : 1135,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المسماة",
	            "en" : "Al Masammah"
	        }
	    },
	    {
	        "city_id" : 1136,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحصينية",
	            "en" : "Al Hasayniyah"
	        }
	    },
	    {
	        "city_id" : 1137,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغروف",
	            "en" : "Al Ghuruf"
	        }
	    },
	    {
	        "city_id" : 1138,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البحول",
	            "en" : "Al Bahawal"
	        }
	    },
	    {
	        "city_id" : 1139,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "دوقة",
	            "en" : "Dawqah"
	        }
	    },
	    {
	        "city_id" : 1140,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البخترية",
	            "en" : "Al Bakhtariyah"
	        }
	    },
	    {
	        "city_id" : 1141,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البرزة",
	            "en" : "Al Barzah"
	        }
	    },
	    {
	        "city_id" : 1142,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السليم",
	            "en" : "As Silaym"
	        }
	    },
	    {
	        "city_id" : 1143,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مهايع",
	            "en" : "Al Mahaya"
	        }
	    },
	    {
	        "city_id" : 1144,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المعداء",
	            "en" : "Al Maada"
	        }
	    },
	    {
	        "city_id" : 1145,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ام العرمط",
	            "en" : "Umm Al Urmut"
	        }
	    },
	    {
	        "city_id" : 1146,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المليحة",
	            "en" : "Al Milayhah"
	        }
	    },
	    {
	        "city_id" : 1147,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدحلة",
	            "en" : "Ad Dahalah"
	        }
	    },
	    {
	        "city_id" : 1148,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصليلات",
	            "en" : "As Salaylat"
	        }
	    },
	    {
	        "city_id" : 1149,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "غصين",
	            "en" : "Ghusayyin"
	        }
	    },
	    {
	        "city_id" : 1150,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الكامل",
	            "en" : "Al Kamil"
	        }
	    },
	    {
	        "city_id" : 1151,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العيبة العليا",
	            "en" : "Al Aybah Al Ulya"
	        }
	    },
	    {
	        "city_id" : 1152,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القعور",
	            "en" : "Al Quur"
	        }
	    },
	    {
	        "city_id" : 1153,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القعور",
	            "en" : "Al Quur"
	        }
	    },
	    {
	        "city_id" : 1154,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغريب",
	            "en" : "Al Gharayyib"
	        }
	    },
	    {
	        "city_id" : 1155,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مشرق",
	            "en" : "Mishriq"
	        }
	    },
	    {
	        "city_id" : 1156,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "اللصب",
	            "en" : "Al Lusub"
	        }
	    },
	    {
	        "city_id" : 1157,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العقلة",
	            "en" : "Al Uqlah"
	        }
	    },
	    {
	        "city_id" : 1158,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العمودة",
	            "en" : "Al Amudah"
	        }
	    },
	    {
	        "city_id" : 1159,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الوقبة",
	            "en" : "Al Waqbah"
	        }
	    },
	    {
	        "city_id" : 1160,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفارع",
	            "en" : "Al Fari"
	        }
	    },
	    {
	        "city_id" : 1161,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخديد",
	            "en" : "Al Khidayd"
	        }
	    },
	    {
	        "city_id" : 1162,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المغاوي",
	            "en" : "Al Maghawi"
	        }
	    },
	    {
	        "city_id" : 1163,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المقفي",
	            "en" : "Al Maqfa"
	        }
	    },
	    {
	        "city_id" : 1164,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحطامية",
	            "en" : "Al Hatamiyah"
	        }
	    },
	    {
	        "city_id" : 1165,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "كدوة الأعوج",
	            "en" : "Kidwat Al Awaj"
	        }
	    },
	    {
	        "city_id" : 1166,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "هشيمة",
	            "en" : "Hishaymah"
	        }
	    },
	    {
	        "city_id" : 1167,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "خبت مزقة",
	            "en" : "Khabt Mizqah"
	        }
	    },
	    {
	        "city_id" : 1168,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السبت",
	            "en" : "As Sabt"
	        }
	    },
	    {
	        "city_id" : 1169,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "النيلة",
	            "en" : "An Nilah"
	        }
	    },
	    {
	        "city_id" : 1170,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القرن",
	            "en" : "Al Qarn"
	        }
	    },
	    {
	        "city_id" : 1171,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحليفة",
	            "en" : "Al Hulayfah"
	        }
	    },
	    {
	        "city_id" : 1172,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المسيليم",
	            "en" : "Al Musaylim"
	        }
	    },
	    {
	        "city_id" : 1173,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القرى",
	            "en" : "Al Qara"
	        }
	    },
	    {
	        "city_id" : 1174,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "جمعة ربيعة",
	            "en" : "Jumat At Rabiah"
	        }
	    },
	    {
	        "city_id" : 1175,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفالق",
	            "en" : "Al Faliq"
	        }
	    },
	    {
	        "city_id" : 1176,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "خميس حرب",
	            "en" : "Khamis Harb"
	        }
	    },
	    {
	        "city_id" : 1177,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجرد",
	            "en" : "Al Jard"
	        }
	    },
	    {
	        "city_id" : 1178,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الركح",
	            "en" : "Ar Rakh"
	        }
	    },
	    {
	        "city_id" : 1179,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السبطة",
	            "en" : "As Sabatah"
	        }
	    },
	    {
	        "city_id" : 1180,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الثلوث",
	            "en" : "Ath Thuluth"
	        }
	    },
	    {
	        "city_id" : 1181,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشصرة",
	            "en" : "Ash Shasarah"
	        }
	    },
	    {
	        "city_id" : 1182,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عمرات",
	            "en" : "Amrat"
	        }
	    },
	    {
	        "city_id" : 1183,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عاجة",
	            "en" : "Ajah"
	        }
	    },
	    {
	        "city_id" : 1184,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العقدة",
	            "en" : "Al Uqdah"
	        }
	    },
	    {
	        "city_id" : 1185,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخمجان",
	            "en" : "Al Khumjan"
	        }
	    },
	    {
	        "city_id" : 1186,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الكدنة",
	            "en" : "Al Kadanah"
	        }
	    },
	    {
	        "city_id" : 1187,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شينانة",
	            "en" : "Shaynanah"
	        }
	    },
	    {
	        "city_id" : 1188,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجلمة",
	            "en" : "Al Jilamah"
	        }
	    },
	    {
	        "city_id" : 1189,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصرح",
	            "en" : "As Sarh"
	        }
	    },
	    {
	        "city_id" : 1190,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصعيب",
	            "en" : "As Saayb"
	        }
	    },
	    {
	        "city_id" : 1191,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القرية",
	            "en" : "Al Qarayyah"
	        }
	    },
	    {
	        "city_id" : 1192,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المضحاة",
	            "en" : "Al Madhah"
	        }
	    },
	    {
	        "city_id" : 1193,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "النهيمية",
	            "en" : "An Nihaymiyah"
	        }
	    },
	    {
	        "city_id" : 1194,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغريف",
	            "en" : "Al Gharif"
	        }
	    },
	    {
	        "city_id" : 1195,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشرع",
	            "en" : "Ash Shar"
	        }
	    },
	    {
	        "city_id" : 1196,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدغمية",
	            "en" : "Ad Dughmiyah"
	        }
	    },
	    {
	        "city_id" : 1197,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "أم راكة",
	            "en" : "Umm Rakah"
	        }
	    },
	    {
	        "city_id" : 1198,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدبيلة",
	            "en" : "Ad Dubayyilah"
	        }
	    },
	    {
	        "city_id" : 1199,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "جبار",
	            "en" : "Jabbar"
	        }
	    },
	    {
	        "city_id" : 1200,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحجف",
	            "en" : "Al Hijif"
	        }
	    },
	    {
	        "city_id" : 1201,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "أبو جميدة",
	            "en" : "Abu Jumaydah"
	        }
	    },
	    {
	        "city_id" : 1202,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "غثاة",
	            "en" : "Ghithah"
	        }
	    },
	    {
	        "city_id" : 1203,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الضحياء",
	            "en" : "Ad Dahya"
	        }
	    },
	    {
	        "city_id" : 1204,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الطراق",
	            "en" : "At Tiraq"
	        }
	    },
	    {
	        "city_id" : 1205,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الخريمي",
	            "en" : "Al Khuraymi"
	        }
	    },
	    {
	        "city_id" : 1206,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مزارع الدوية",
	            "en" : "Mazari Ad Dawayyah"
	        }
	    },
	    {
	        "city_id" : 1207,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القرفاء",
	            "en" : "Al Qarfa"
	        }
	    },
	    {
	        "city_id" : 1208,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الجرعاء",
	            "en" : "Al Jara"
	        }
	    },
	    {
	        "city_id" : 1209,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الروق",
	            "en" : "Ar Ruwaq"
	        }
	    },
	    {
	        "city_id" : 1210,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "السليل",
	            "en" : "As Silayyil"
	        }
	    },
	    {
	        "city_id" : 1211,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "سبيعة",
	            "en" : "Sibiah"
	        }
	    },
	    {
	        "city_id" : 1212,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الرشاوية",
	            "en" : "Ar Rishawiyah"
	        }
	    },
	    {
	        "city_id" : 1213,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الميركة",
	            "en" : "Al Mirakah"
	        }
	    },
	    {
	        "city_id" : 1214,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشلالة",
	            "en" : "Ash Shallalah"
	        }
	    },
	    {
	        "city_id" : 1215,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "أم العماير",
	            "en" : "Umm Al Amayir"
	        }
	    },
	    {
	        "city_id" : 1216,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مزارع تخاييل",
	            "en" : "Mazari Takhayil"
	        }
	    },
	    {
	        "city_id" : 1217,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدائع إبضة",
	            "en" : "Badai Ibdah"
	        }
	    },
	    {
	        "city_id" : 1218,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحورا",
	            "en" : "Al Hawra"
	        }
	    },
	    {
	        "city_id" : 1219,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدائع علقة",
	            "en" : "Badai Ilqih"
	        }
	    },
	    {
	        "city_id" : 1220,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "إبضة",
	            "en" : "Ibdah"
	        }
	    },
	    {
	        "city_id" : 1221,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "ثرال",
	            "en" : "Thiral"
	        }
	    },
	    {
	        "city_id" : 1222,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "زيخين",
	            "en" : "Zikhin"
	        }
	    },
	    {
	        "city_id" : 1223,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الخيط",
	            "en" : "Al Khayt"
	        }
	    },
	    {
	        "city_id" : 1224,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الصلبية",
	            "en" : "As Sulubiyah"
	        }
	    },
	    {
	        "city_id" : 1225,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المعازل",
	            "en" : "Al Maazil"
	        }
	    },
	    {
	        "city_id" : 1226,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المضابيع",
	            "en" : "Al Madabi"
	        }
	    },
	    {
	        "city_id" : 1227,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الساقية",
	            "en" : "As Saqiyah"
	        }
	    },
	    {
	        "city_id" : 1228,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشنان",
	            "en" : "Ash Shinan"
	        }
	    },
	    {
	        "city_id" : 1229,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العدوة",
	            "en" : "Al Idwah"
	        }
	    },
	    {
	        "city_id" : 1230,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "السعيرة",
	            "en" : "As Siayyirah"
	        }
	    },
	    {
	        "city_id" : 1231,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "رك",
	            "en" : "Rakk"
	        }
	    },
	    {
	        "city_id" : 1232,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الفويلق / الرشاوية",
	            "en" : "Al Fuwaileq / Ar Rishawiyah"
	        }
	    },
	    {
	        "city_id" : 1233,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الابيتر",
	            "en" : "Al Ubaitir"
	        }
	    },
	    {
	        "city_id" : 1234,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الكهيفية",
	            "en" : "Al Kihayfiyah"
	        }
	    },
	    {
	        "city_id" : 1235,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العظيم",
	            "en" : "Al Udhaim"
	        }
	    },
	    {
	        "city_id" : 1236,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المقيصر",
	            "en" : "Al Muqaysir"
	        }
	    },
	    {
	        "city_id" : 1237,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الوطاة",
	            "en" : "Al Watah"
	        }
	    },
	    {
	        "city_id" : 1238,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الزرب",
	            "en" : "Az Zirb"
	        }
	    },
	    {
	        "city_id" : 1239,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "اللويات",
	            "en" : "Al Luwayyat"
	        }
	    },
	    {
	        "city_id" : 1240,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الأريقط",
	            "en" : "Al Urayqit"
	        }
	    },
	    {
	        "city_id" : 1241,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المعيزيلة",
	            "en" : "Al Muazilah"
	        }
	    },
	    {
	        "city_id" : 1242,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشرفية",
	            "en" : "Ash Shurufiyah"
	        }
	    },
	    {
	        "city_id" : 1243,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البريكة",
	            "en" : "Al Buraykah"
	        }
	    },
	    {
	        "city_id" : 1244,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الظليم",
	            "en" : "Ad Dhalim"
	        }
	    },
	    {
	        "city_id" : 1245,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحنو",
	            "en" : "Al Hinu"
	        }
	    },
	    {
	        "city_id" : 1246,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجعيرة",
	            "en" : "Al Juayrah"
	        }
	    },
	    {
	        "city_id" : 1247,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحزم",
	            "en" : "Al Hazm"
	        }
	    },
	    {
	        "city_id" : 1248,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخرمة",
	            "en" : "Al Khurmah"
	        }
	    },
	    {
	        "city_id" : 1249,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغريف",
	            "en" : "Al Gharif"
	        }
	    },
	    {
	        "city_id" : 1250,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شبيرم",
	            "en" : "Shubayrim"
	        }
	    },
	    {
	        "city_id" : 1251,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مطية",
	            "en" : "Mityah"
	        }
	    },
	    {
	        "city_id" : 1252,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "دف زيني",
	            "en" : "Daff Zayni"
	        }
	    },
	    {
	        "city_id" : 1253,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "النويدرة",
	            "en" : "An Nuwaydirah"
	        }
	    },
	    {
	        "city_id" : 1254,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصمد",
	            "en" : "As Samad"
	        }
	    },
	    {
	        "city_id" : 1255,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المرشدية",
	            "en" : "Al Murshidiyah"
	        }
	    },
	    {
	        "city_id" : 1256,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدوح الكبير",
	            "en" : "Ad Dawh Al Kabir"
	        }
	    },
	    {
	        "city_id" : 1257,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجموم",
	            "en" : "Al Jumum"
	        }
	    },
	    {
	        "city_id" : 1258,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ابو عروة",
	            "en" : "Abu Urwah"
	        }
	    },
	    {
	        "city_id" : 1259,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البرابير",
	            "en" : "Al Brabir"
	        }
	    },
	    {
	        "city_id" : 1260,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "قرن السرور",
	            "en" : "Qarn As Surur"
	        }
	    },
	    {
	        "city_id" : 1261,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحميمة",
	            "en" : "Al Hamimah"
	        }
	    },
	    {
	        "city_id" : 1262,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حرة الجبل",
	            "en" : "Harat Al Jabal"
	        }
	    },
	    {
	        "city_id" : 1263,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سمد الحميمة",
	            "en" : "Samd Al Humaymah"
	        }
	    },
	    {
	        "city_id" : 1264,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "النزهة",
	            "en" : "An Nuzhah"
	        }
	    },
	    {
	        "city_id" : 1265,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشعبة",
	            "en" : "Ash Shubah"
	        }
	    },
	    {
	        "city_id" : 1266,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القذال",
	            "en" : "Al Qadhal"
	        }
	    },
	    {
	        "city_id" : 1267,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "شواحط",
	            "en" : "Shawahit"
	        }
	    },
	    {
	        "city_id" : 1268,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عدمن",
	            "en" : "Adaman"
	        }
	    },
	    {
	        "city_id" : 1269,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المنيظر",
	            "en" : "Al Munaydhir"
	        }
	    },
	    {
	        "city_id" : 1270,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "محبة",
	            "en" : "Mahabbah"
	        }
	    },
	    {
	        "city_id" : 1271,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفصعيلة",
	            "en" : "Al Fasilah"
	        }
	    },
	    {
	        "city_id" : 1272,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المسلمة",
	            "en" : "Al Maslamah"
	        }
	    },
	    {
	        "city_id" : 1273,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخوش",
	            "en" : "Al Khawsh"
	        }
	    },
	    {
	        "city_id" : 1274,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الكنبي",
	            "en" : "Al Kanabi"
	        }
	    },
	    {
	        "city_id" : 1275,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القيوار",
	            "en" : "Al Qiwar"
	        }
	    },
	    {
	        "city_id" : 1276,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القنعات",
	            "en" : "Al Qanaat"
	        }
	    },
	    {
	        "city_id" : 1277,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الميفاء",
	            "en" : "Al Mifa"
	        }
	    },
	    {
	        "city_id" : 1278,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "صعابان",
	            "en" : "Saaban"
	        }
	    },
	    {
	        "city_id" : 1279,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مكهاف",
	            "en" : "Makhaf"
	        }
	    },
	    {
	        "city_id" : 1280,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المنظر",
	            "en" : "Al Mandhar"
	        }
	    },
	    {
	        "city_id" : 1281,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "أم فرع",
	            "en" : "Umm Fura"
	        }
	    },
	    {
	        "city_id" : 1282,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القريحة",
	            "en" : "Al Qurayhah"
	        }
	    },
	    {
	        "city_id" : 1283,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفرعة",
	            "en" : "Al Farah"
	        }
	    },
	    {
	        "city_id" : 1284,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "أم شعبين",
	            "en" : "Umm Shbayn"
	        }
	    },
	    {
	        "city_id" : 1285,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مشرف",
	            "en" : "Mishrif"
	        }
	    },
	    {
	        "city_id" : 1286,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قزة",
	            "en" : "Quzzah"
	        }
	    },
	    {
	        "city_id" : 1287,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سيالة",
	            "en" : "Sayalah"
	        }
	    },
	    {
	        "city_id" : 1288,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الأحسر",
	            "en" : "Al Ahsar"
	        }
	    },
	    {
	        "city_id" : 1289,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفاضية",
	            "en" : "Al Fadiyah"
	        }
	    },
	    {
	        "city_id" : 1290,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "نعص",
	            "en" : "Nas"
	        }
	    },
	    {
	        "city_id" : 1291,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الضحي",
	            "en" : "Ad Dahi"
	        }
	    },
	    {
	        "city_id" : 1292,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحيد عبس",
	            "en" : "Al Hayd Abs"
	        }
	    },
	    {
	        "city_id" : 1293,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الطرقة",
	            "en" : "At Taraqah"
	        }
	    },
	    {
	        "city_id" : 1294,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المجاردة",
	            "en" : "Al Majardah"
	        }
	    },
	    {
	        "city_id" : 1295,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحمة",
	            "en" : "Al Himah"
	        }
	    },
	    {
	        "city_id" : 1296,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العقيقة",
	            "en" : "Al Aqiqah"
	        }
	    },
	    {
	        "city_id" : 1297,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بارق",
	            "en" : "Bariq"
	        }
	    },
	    {
	        "city_id" : 1298,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الهرير الشرقي - الجازي",
	            "en" : "Al Hurayr Ash Sharqi / Al Jazi"
	        }
	    },
	    {
	        "city_id" : 1299,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "طيب الإسم",
	            "en" : "Tayyib Al Ism"
	        }
	    },
	    {
	        "city_id" : 1300,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العمارة",
	            "en" : "Al Ammarah"
	        }
	    },
	    {
	        "city_id" : 1301,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بيشة",
	            "en" : "Bishah"
	        }
	    },
	    {
	        "city_id" : 1302,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المزارقة",
	            "en" : "Al Mazarqah"
	        }
	    },
	    {
	        "city_id" : 1303,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل غيثان",
	            "en" : "Al Ghaythan"
	        }
	    },
	    {
	        "city_id" : 1304,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الشريفي",
	            "en" : "Al Ash Shirayfi"
	        }
	    },
	    {
	        "city_id" : 1305,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل التوم",
	            "en" : "Al At Tum"
	        }
	    },
	    {
	        "city_id" : 1306,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل سويد",
	            "en" : "Al Suwayd"
	        }
	    },
	    {
	        "city_id" : 1307,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الصمدة",
	            "en" : "As Simidah"
	        }
	    },
	    {
	        "city_id" : 1308,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفيض",
	            "en" : "Al Fayd"
	        }
	    },
	    {
	        "city_id" : 1309,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مريح",
	            "en" : "Al Mirayyih"
	        }
	    },
	    {
	        "city_id" : 1310,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "صفوان",
	            "en" : "Safwan"
	        }
	    },
	    {
	        "city_id" : 1311,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرونة",
	            "en" : "Ar Runah"
	        }
	    },
	    {
	        "city_id" : 1312,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الذيب",
	            "en" : "Al Adh Dhib"
	        }
	    },
	    {
	        "city_id" : 1313,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "روضان",
	            "en" : "Rawdan"
	        }
	    },
	    {
	        "city_id" : 1314,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ابو مراغ",
	            "en" : "Abu Maragh"
	        }
	    },
	    {
	        "city_id" : 1315,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حداء",
	            "en" : "Hada"
	        }
	    },
	    {
	        "city_id" : 1316,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المقايث",
	            "en" : "Al Maqayth"
	        }
	    },
	    {
	        "city_id" : 1317,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القرينة / هداة الشام",
	            "en" : "Al Qurainah / Hadat Ash Sham"
	        }
	    },
	    {
	        "city_id" : 1318,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القعضبة",
	            "en" : "Al Qidubah"
	        }
	    },
	    {
	        "city_id" : 1319,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الزلال",
	            "en" : "Az Zallal"
	        }
	    },
	    {
	        "city_id" : 1320,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الرويغة",
	            "en" : "Ar Ruwayghag"
	        }
	    },
	    {
	        "city_id" : 1321,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العصب",
	            "en" : "Al Asb"
	        }
	    },
	    {
	        "city_id" : 1322,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القعرة",
	            "en" : "Al Qaarah"
	        }
	    },
	    {
	        "city_id" : 1323,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المعلاة",
	            "en" : "Al Malah"
	        }
	    },
	    {
	        "city_id" : 1324,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجرف",
	            "en" : "Al Jarf"
	        }
	    },
	    {
	        "city_id" : 1325,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجيشي",
	            "en" : "Al Jayshi"
	        }
	    },
	    {
	        "city_id" : 1326,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الزريب",
	            "en" : "Az Zurayb"
	        }
	    },
	    {
	        "city_id" : 1327,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البناية",
	            "en" : "Al Binayah"
	        }
	    },
	    {
	        "city_id" : 1328,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "فيدة",
	            "en" : "Faydah"
	        }
	    },
	    {
	        "city_id" : 1329,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشامية",
	            "en" : "Ash Shamiyah"
	        }
	    },
	    {
	        "city_id" : 1330,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المقيطيع",
	            "en" : "Al Muqayti"
	        }
	    },
	    {
	        "city_id" : 1331,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المقايتة",
	            "en" : "Al Maqaytah"
	        }
	    },
	    {
	        "city_id" : 1332,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المقر",
	            "en" : "Al Miqarr"
	        }
	    },
	    {
	        "city_id" : 1333,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ابو حصانية",
	            "en" : "Abu Hasaniyah"
	        }
	    },
	    {
	        "city_id" : 1334,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "النوارية",
	            "en" : "An Nawariyah"
	        }
	    },
	    {
	        "city_id" : 1335,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخيف",
	            "en" : "Al Khayf"
	        }
	    },
	    {
	        "city_id" : 1336,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الضرس",
	            "en" : "Ad Dirs"
	        }
	    },
	    {
	        "city_id" : 1337,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القرية",
	            "en" : "Al Qurayyah"
	        }
	    },
	    {
	        "city_id" : 1338,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مشجي",
	            "en" : "Mushaji"
	        }
	    },
	    {
	        "city_id" : 1339,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخلاصة",
	            "en" : "Al Khulasah"
	        }
	    },
	    {
	        "city_id" : 1340,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القاحة",
	            "en" : "Al Qahah"
	        }
	    },
	    {
	        "city_id" : 1341,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القاع",
	            "en" : "Al Qa"
	        }
	    },
	    {
	        "city_id" : 1342,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عسفان",
	            "en" : "Isfan"
	        }
	    },
	    {
	        "city_id" : 1343,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المجمعة",
	            "en" : "Al Majmaah"
	        }
	    },
	    {
	        "city_id" : 1344,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مدركة",
	            "en" : "Madrakah"
	        }
	    },
	    {
	        "city_id" : 1345,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عين شمس",
	            "en" : "Ayn Shams"
	        }
	    },
	    {
	        "city_id" : 1346,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الريان",
	            "en" : "Ar Rayyan"
	        }
	    },
	    {
	        "city_id" : 1347,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "جرير",
	            "en" : "Jarir"
	        }
	    },
	    {
	        "city_id" : 1348,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفائزية",
	            "en" : "Al Faiziyah"
	        }
	    },
	    {
	        "city_id" : 1349,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المصارير",
	            "en" : "Al Masarir"
	        }
	    },
	    {
	        "city_id" : 1350,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "النويعمة",
	            "en" : "An Nuwaymah"
	        }
	    },
	    {
	        "city_id" : 1351,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "وادي الدواسر",
	            "en" : "Wadi Ad Dawasir"
	        }
	    },
	    {
	        "city_id" : 1352,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ابرق النعام",
	            "en" : "Abraq An Na Am"
	        }
	    },
	    {
	        "city_id" : 1353,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "كمدة",
	            "en" : "Kamdah"
	        }
	    },
	    {
	        "city_id" : 1354,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفاو",
	            "en" : "Al Faw"
	        }
	    },
	    {
	        "city_id" : 1355,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حرجة الزفر",
	            "en" : "Hirjat Az Zufur"
	        }
	    },
	    {
	        "city_id" : 1356,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حجلة السواد",
	            "en" : "Hajlat As Suwad"
	        }
	    },
	    {
	        "city_id" : 1357,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الكواكب",
	            "en" : "Al Kawakib"
	        }
	    },
	    {
	        "city_id" : 1358,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الدلعبي",
	            "en" : "Ad Dhalaaby"
	        }
	    },
	    {
	        "city_id" : 1359,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "بني لبيب",
	            "en" : "Bani Labib"
	        }
	    },
	    {
	        "city_id" : 1360,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "خشم البازوم",
	            "en" : "Khashm Al Bazum"
	        }
	    },
	    {
	        "city_id" : 1361,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "السليل",
	            "en" : "As Sulayyil"
	        }
	    },
	    {
	        "city_id" : 1362,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "خيران",
	            "en" : "Khayran"
	        }
	    },
	    {
	        "city_id" : 1363,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "تمرة",
	            "en" : "Tamrah"
	        }
	    },
	    {
	        "city_id" : 1364,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حمام",
	            "en" : "Himam"
	        }
	    },
	    {
	        "city_id" : 1365,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ريدا",
	            "en" : "Rayda"
	        }
	    },
	    {
	        "city_id" : 1366,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الوسقة",
	            "en" : "Al Wasqah"
	        }
	    },
	    {
	        "city_id" : 1367,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المدرج",
	            "en" : "Al Midrij"
	        }
	    },
	    {
	        "city_id" : 1368,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحدبة",
	            "en" : "Al Hadabah"
	        }
	    },
	    {
	        "city_id" : 1369,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخصرة",
	            "en" : "Al Khasirah"
	        }
	    },
	    {
	        "city_id" : 1370,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عوية",
	            "en" : "Uwayyah"
	        }
	    },
	    {
	        "city_id" : 1371,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المشاش",
	            "en" : "Al Mishash"
	        }
	    },
	    {
	        "city_id" : 1372,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الرهوة",
	            "en" : "Ar Rahwah"
	        }
	    },
	    {
	        "city_id" : 1373,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحصاحص",
	            "en" : "Al Hasahis"
	        }
	    },
	    {
	        "city_id" : 1374,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المدير",
	            "en" : "Al Mudir"
	        }
	    },
	    {
	        "city_id" : 1375,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ذي رهجان",
	            "en" : "Dhi Rahjan"
	        }
	    },
	    {
	        "city_id" : 1376,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "اللغيسيم",
	            "en" : "Al Lughaysim"
	        }
	    },
	    {
	        "city_id" : 1377,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الوقرين",
	            "en" : "Al Waqrayn"
	        }
	    },
	    {
	        "city_id" : 1378,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصواملة",
	            "en" : "As Suwamilah"
	        }
	    },
	    {
	        "city_id" : 1379,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصدية",
	            "en" : "As Sadiyah"
	        }
	    },
	    {
	        "city_id" : 1380,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سوق الجمعة",
	            "en" : "Suq Al Jumah"
	        }
	    },
	    {
	        "city_id" : 1381,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مسعدة",
	            "en" : "Masadah"
	        }
	    },
	    {
	        "city_id" : 1382,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ظهي",
	            "en" : "Dhaha"
	        }
	    },
	    {
	        "city_id" : 1383,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سلم الزواهرة",
	            "en" : "Salam Az Zuwahirah"
	        }
	    },
	    {
	        "city_id" : 1384,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "أم الشوك",
	            "en" : "Umm Ash Shawk"
	        }
	    },
	    {
	        "city_id" : 1385,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحريقة",
	            "en" : "Al Hariqah"
	        }
	    },
	    {
	        "city_id" : 1386,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحبقة",
	            "en" : "Al Habqah"
	        }
	    },
	    {
	        "city_id" : 1387,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "كرش",
	            "en" : "Karsh"
	        }
	    },
	    {
	        "city_id" : 1388,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مفتاح",
	            "en" : "Miftah"
	        }
	    },
	    {
	        "city_id" : 1389,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الكردم",
	            "en" : "Al Kurdum"
	        }
	    },
	    {
	        "city_id" : 1390,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الليث",
	            "en" : "Al Lith"
	        }
	    },
	    {
	        "city_id" : 1391,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجائزة",
	            "en" : "Al Jaizah"
	        }
	    },
	    {
	        "city_id" : 1392,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "قاعس",
	            "en" : "Qais"
	        }
	    },
	    {
	        "city_id" : 1393,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المضحاة",
	            "en" : "Al Madhah"
	        }
	    },
	    {
	        "city_id" : 1394,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الميثاء",
	            "en" : "Al Maytha"
	        }
	    },
	    {
	        "city_id" : 1395,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغرات",
	            "en" : "Al Ghurrat"
	        }
	    },
	    {
	        "city_id" : 1396,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "صلعة",
	            "en" : "Salaah"
	        }
	    },
	    {
	        "city_id" : 1397,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ضبيعة",
	            "en" : "Dubayah"
	        }
	    },
	    {
	        "city_id" : 1398,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشعبة",
	            "en" : "Ash Shubah"
	        }
	    },
	    {
	        "city_id" : 1399,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحلي",
	            "en" : "Al Hulay"
	        }
	    },
	    {
	        "city_id" : 1400,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القري",
	            "en" : "Al Qari"
	        }
	    },
	    {
	        "city_id" : 1401,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الرنيفة",
	            "en" : "Ar Runayfah"
	        }
	    },
	    {
	        "city_id" : 1402,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سوق اللصفة",
	            "en" : "Suq Al Lusafah"
	        }
	    },
	    {
	        "city_id" : 1403,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عيون حارة",
	            "en" : "Uyun Harrah"
	        }
	    },
	    {
	        "city_id" : 1404,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السوحة",
	            "en" : "As Siwahah"
	        }
	    },
	    {
	        "city_id" : 1405,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ربوع العين",
	            "en" : "Rubu Al Ayn"
	        }
	    },
	    {
	        "city_id" : 1406,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المجيرمة",
	            "en" : "Al Mijayrimah"
	        }
	    },
	    {
	        "city_id" : 1407,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السعدية",
	            "en" : "As Sadiyah"
	        }
	    },
	    {
	        "city_id" : 1408,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سوق ذرى",
	            "en" : "Suq Dhara"
	        }
	    },
	    {
	        "city_id" : 1409,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سوق ترعا",
	            "en" : "Suq Taraa"
	        }
	    },
	    {
	        "city_id" : 1410,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الرفغ",
	            "en" : "Ar Rafugh"
	        }
	    },
	    {
	        "city_id" : 1411,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "قرضة",
	            "en" : "Qaradah"
	        }
	    },
	    {
	        "city_id" : 1412,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البرد",
	            "en" : "Al Barid"
	        }
	    },
	    {
	        "city_id" : 1413,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سوق بني يزيد",
	            "en" : "Suq Bani Yazid"
	        }
	    },
	    {
	        "city_id" : 1414,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حقال",
	            "en" : "Haqal"
	        }
	    },
	    {
	        "city_id" : 1415,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الساعي",
	            "en" : "As Sai"
	        }
	    },
	    {
	        "city_id" : 1416,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ذنباء",
	            "en" : "Dhanaba"
	        }
	    },
	    {
	        "city_id" : 1417,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المقسبة",
	            "en" : "Al Maqsabah"
	        }
	    },
	    {
	        "city_id" : 1418,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شراقب",
	            "en" : "Sharaqib"
	        }
	    },
	    {
	        "city_id" : 1419,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شيباي",
	            "en" : "Shaybay"
	        }
	    },
	    {
	        "city_id" : 1420,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "قفيلان",
	            "en" : "Qufaylan"
	        }
	    },
	    {
	        "city_id" : 1421,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصالف",
	            "en" : "As Salif"
	        }
	    },
	    {
	        "city_id" : 1422,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "صبح",
	            "en" : "Sabah"
	        }
	    },
	    {
	        "city_id" : 1423,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغالة",
	            "en" : "Al Ghallah"
	        }
	    },
	    {
	        "city_id" : 1424,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "غميقة",
	            "en" : "Ghumayqah"
	        }
	    },
	    {
	        "city_id" : 1425,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الحجرة",
	            "en" : "Al Hajrah"
	        }
	    },
	    {
	        "city_id" : 1426,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "لملم",
	            "en" : "Lamlam"
	        }
	    },
	    {
	        "city_id" : 1427,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجرين",
	            "en" : "Al Jarin"
	        }
	    },
	    {
	        "city_id" : 1428,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشاقة / الصهوة",
	            "en" : "Al Shaqqah / As Shwah"
	        }
	    },
	    {
	        "city_id" : 1429,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السفح",
	            "en" : "As Safah"
	        }
	    },
	    {
	        "city_id" : 1430,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حزم مفتاح",
	            "en" : "Hazm Miftah"
	        }
	    },
	    {
	        "city_id" : 1431,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "جاش",
	            "en" : "Jash"
	        }
	    },
	    {
	        "city_id" : 1432,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "روضة جاش",
	            "en" : "Rudat Jash"
	        }
	    },
	    {
	        "city_id" : 1433,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحرفين",
	            "en" : "Al Harfayn"
	        }
	    },
	    {
	        "city_id" : 1434,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لاعس",
	            "en" : "Lais"
	        }
	    },
	    {
	        "city_id" : 1435,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مريغان",
	            "en" : "Murayghan"
	        }
	    },
	    {
	        "city_id" : 1436,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الدريب",
	            "en" : "Ad Dirayb"
	        }
	    },
	    {
	        "city_id" : 1437,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجازع",
	            "en" : "Al Jazi"
	        }
	    },
	    {
	        "city_id" : 1438,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفاخرية",
	            "en" : "Al Fakhriyah"
	        }
	    },
	    {
	        "city_id" : 1439,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "كتنة",
	            "en" : "Kutnah"
	        }
	    },
	    {
	        "city_id" : 1440,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجزيرة",
	            "en" : "Al Jazirah"
	        }
	    },
	    {
	        "city_id" : 1441,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرهوة",
	            "en" : "Ar Rahawah"
	        }
	    },
	    {
	        "city_id" : 1442,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مريخة",
	            "en" : "Muraykhah"
	        }
	    },
	    {
	        "city_id" : 1443,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "تثليث",
	            "en" : "Tathilith"
	        }
	    },
	    {
	        "city_id" : 1444,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ال سويدان",
	            "en" : "Al Suwaydan"
	        }
	    },
	    {
	        "city_id" : 1445,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ال عيفان",
	            "en" : "Al Ayfan"
	        }
	    },
	    {
	        "city_id" : 1446,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ال خميسة",
	            "en" : "Al Khumaysah"
	        }
	    },
	    {
	        "city_id" : 1447,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القيرة",
	            "en" : "Al Qirah"
	        }
	    },
	    {
	        "city_id" : 1448,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحمضة",
	            "en" : "Al Hamdah"
	        }
	    },
	    {
	        "city_id" : 1449,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الزرق",
	            "en" : "Az Zurq"
	        }
	    },
	    {
	        "city_id" : 1450,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حبية",
	            "en" : "Habiyah"
	        }
	    },
	    {
	        "city_id" : 1451,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "رغوان",
	            "en" : "Rughwan"
	        }
	    },
	    {
	        "city_id" : 1452,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العين",
	            "en" : "Al Ayn"
	        }
	    },
	    {
	        "city_id" : 1453,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الامواه",
	            "en" : "Al Amwah"
	        }
	    },
	    {
	        "city_id" : 1454,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الصبيخة",
	            "en" : "As Subaykhah"
	        }
	    },
	    {
	        "city_id" : 1455,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الإشتاء",
	            "en" : "Al Ishta"
	        }
	    },
	    {
	        "city_id" : 1456,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "المكاتيم",
	            "en" : "Al Makatim"
	        }
	    },
	    {
	        "city_id" : 1457,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الحكمان",
	            "en" : "Al Hukman"
	        }
	    },
	    {
	        "city_id" : 1458,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الكلبة",
	            "en" : "Al Kalibah"
	        }
	    },
	    {
	        "city_id" : 1459,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الثراوين",
	            "en" : "Ath Tharawin"
	        }
	    },
	    {
	        "city_id" : 1460,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "قريش الحسن",
	            "en" : "Quraysh Al Hasan"
	        }
	    },
	    {
	        "city_id" : 1461,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الضبيعات",
	            "en" : "Ad Dubayat"
	        }
	    },
	    {
	        "city_id" : 1462,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "وادي بطحان",
	            "en" : "Wadi Bathan"
	        }
	    },
	    {
	        "city_id" : 1463,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الكرادسة",
	            "en" : "Al Karadisah"
	        }
	    },
	    {
	        "city_id" : 1464,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "سبيحة العليا",
	            "en" : "Sabihah Al Ulya"
	        }
	    },
	    {
	        "city_id" : 1465,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "القرى",
	            "en" : "Al Qara"
	        }
	    },
	    {
	        "city_id" : 1466,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الاطاولة",
	            "en" : "Al Atawlah"
	        }
	    },
	    {
	        "city_id" : 1467,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بيدة",
	            "en" : "Baydah"
	        }
	    },
	    {
	        "city_id" : 1468,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "القسمة",
	            "en" : "Al Qisamah"
	        }
	    },
	    {
	        "city_id" : 1469,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "نخال",
	            "en" : "Nikhal"
	        }
	    },
	    {
	        "city_id" : 1470,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخليج",
	            "en" : "Al Khalij"
	        }
	    },
	    {
	        "city_id" : 1471,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الصبيحي",
	            "en" : "As Sabihi"
	        }
	    },
	    {
	        "city_id" : 1472,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المدراء",
	            "en" : "Al Madra"
	        }
	    },
	    {
	        "city_id" : 1473,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الباقرة",
	            "en" : "Al Baqirah"
	        }
	    },
	    {
	        "city_id" : 1474,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "نمران",
	            "en" : "Namran"
	        }
	    },
	    {
	        "city_id" : 1475,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "شديق",
	            "en" : "Shudayq"
	        }
	    },
	    {
	        "city_id" : 1476,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحرف",
	            "en" : "Al Harf"
	        }
	    },
	    {
	        "city_id" : 1477,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العطف",
	            "en" : "Al Atf"
	        }
	    },
	    {
	        "city_id" : 1478,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الدحو",
	            "en" : "Ad Dihu"
	        }
	    },
	    {
	        "city_id" : 1479,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحريرة",
	            "en" : "Al Hurayrah"
	        }
	    },
	    {
	        "city_id" : 1480,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشقيقة",
	            "en" : "Ash Shaqiqah"
	        }
	    },
	    {
	        "city_id" : 1481,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "النقيع",
	            "en" : "An Naqi"
	        }
	    },
	    {
	        "city_id" : 1482,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرفائع",
	            "en" : "Ar Rafai"
	        }
	    },
	    {
	        "city_id" : 1483,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجنينة",
	            "en" : "Al Junaynah"
	        }
	    },
	    {
	        "city_id" : 1484,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عيدان",
	            "en" : "Idan"
	        }
	    },
	    {
	        "city_id" : 1485,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "أم الفروغ",
	            "en" : "Umm Al Furugh"
	        }
	    },
	    {
	        "city_id" : 1486,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عقيلية",
	            "en" : "Aqiliyah"
	        }
	    },
	    {
	        "city_id" : 1487,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بينة",
	            "en" : "Baynah"
	        }
	    },
	    {
	        "city_id" : 1488,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عرمان",
	            "en" : "Arman"
	        }
	    },
	    {
	        "city_id" : 1489,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القديح",
	            "en" : "Al Qidayh"
	        }
	    },
	    {
	        "city_id" : 1490,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "واعر",
	            "en" : "Wair"
	        }
	    },
	    {
	        "city_id" : 1491,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشط",
	            "en" : "Ash Shatt"
	        }
	    },
	    {
	        "city_id" : 1492,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المروة",
	            "en" : "Al Marwah"
	        }
	    },
	    {
	        "city_id" : 1493,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المهامل",
	            "en" : "Al Mahamil"
	        }
	    },
	    {
	        "city_id" : 1494,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المجمعة",
	            "en" : "Al Majmaah"
	        }
	    },
	    {
	        "city_id" : 1495,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحيفة",
	            "en" : "Al Hifah"
	        }
	    },
	    {
	        "city_id" : 1496,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مهر",
	            "en" : "Muhr"
	        }
	    },
	    {
	        "city_id" : 1497,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البهيم",
	            "en" : "Al Bahim"
	        }
	    },
	    {
	        "city_id" : 1498,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الغفرات",
	            "en" : "Al Ghafrat"
	        }
	    },
	    {
	        "city_id" : 1499,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المعدن",
	            "en" : "Al Madin"
	        }
	    },
	    {
	        "city_id" : 1500,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القوز",
	            "en" : "Al Quz"
	        }
	    },
	    {
	        "city_id" : 1501,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بادية",
	            "en" : "Badiyah"
	        }
	    },
	    {
	        "city_id" : 1502,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القاع",
	            "en" : "Al Qa"
	        }
	    },
	    {
	        "city_id" : 1503,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "كتنة",
	            "en" : "Kutnah"
	        }
	    },
	    {
	        "city_id" : 1504,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مجحم",
	            "en" : "Mujahhim"
	        }
	    },
	    {
	        "city_id" : 1505,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحجون",
	            "en" : "Al Hajun"
	        }
	    },
	    {
	        "city_id" : 1506,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "صمخ",
	            "en" : "Samakh"
	        }
	    },
	    {
	        "city_id" : 1507,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الهجرة",
	            "en" : "Al Hijrah"
	        }
	    },
	    {
	        "city_id" : 1508,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الثنية",
	            "en" : "Ath Thiniyah"
	        }
	    },
	    {
	        "city_id" : 1509,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القوزية",
	            "en" : "Al Qawziyah"
	        }
	    },
	    {
	        "city_id" : 1510,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القوباء",
	            "en" : "Al Qawba"
	        }
	    },
	    {
	        "city_id" : 1511,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قطبة",
	            "en" : "Qutbah"
	        }
	    },
	    {
	        "city_id" : 1512,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "دفرخرشان",
	            "en" : "Dafir Kharshan"
	        }
	    },
	    {
	        "city_id" : 1513,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "جلال",
	            "en" : "Jallal"
	        }
	    },
	    {
	        "city_id" : 1514,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بيشة",
	            "en" : "Bishah"
	        }
	    },
	    {
	        "city_id" : 1515,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الديلمي",
	            "en" : "Ad Dailami"
	        }
	    },
	    {
	        "city_id" : 1516,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرقيطاء",
	            "en" : "Ar Ruqaita"
	        }
	    },
	    {
	        "city_id" : 1517,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "تبالة",
	            "en" : "Tabalah"
	        }
	    },
	    {
	        "city_id" : 1518,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحازمي",
	            "en" : "Al Hazmi"
	        }
	    },
	    {
	        "city_id" : 1519,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخضراء",
	            "en" : "Al Khadra"
	        }
	    },
	    {
	        "city_id" : 1520,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الهضبة",
	            "en" : "Al Hadabah"
	        }
	    },
	    {
	        "city_id" : 1521,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الأبناء",
	            "en" : "Al Abna"
	        }
	    },
	    {
	        "city_id" : 1522,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بني جرة",
	            "en" : "Bani Jarrah"
	        }
	    },
	    {
	        "city_id" : 1523,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "آل مرزوق",
	            "en" : "Al Marzuq"
	        }
	    },
	    {
	        "city_id" : 1524,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "آل حميد",
	            "en" : "Al Himayd"
	        }
	    },
	    {
	        "city_id" : 1525,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "جبر",
	            "en" : "Jabr"
	        }
	    },
	    {
	        "city_id" : 1526,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "حوالة",
	            "en" : "Hawalah"
	        }
	    },
	    {
	        "city_id" : 1527,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الأزاهرة",
	            "en" : "Al Azahirah"
	        }
	    },
	    {
	        "city_id" : 1528,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "دارالسوق",
	            "en" : "Dar As Suq"
	        }
	    },
	    {
	        "city_id" : 1529,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بني كبير",
	            "en" : "Bani Kabir"
	        }
	    },
	    {
	        "city_id" : 1530,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الحمران",
	            "en" : "Al Humran"
	        }
	    },
	    {
	        "city_id" : 1531,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بلجرشي",
	            "en" : "Biljurashi"
	        }
	    },
	    {
	        "city_id" : 1532,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الرهوة",
	            "en" : "Ar Rahwah"
	        }
	    },
	    {
	        "city_id" : 1533,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بالشهم",
	            "en" : "Bal Shaham"
	        }
	    },
	    {
	        "city_id" : 1534,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بادية بني كبير",
	            "en" : "Badiyat Bani Kabir"
	        }
	    },
	    {
	        "city_id" : 1535,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بلعلاء",
	            "en" : "Balala"
	        }
	    },
	    {
	        "city_id" : 1536,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "العفوص",
	            "en" : "Al Ufus"
	        }
	    },
	    {
	        "city_id" : 1537,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "خيرة",
	            "en" : "Khirah"
	        }
	    },
	    {
	        "city_id" : 1538,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "قرن ظبي",
	            "en" : "Qarn Dhabi"
	        }
	    },
	    {
	        "city_id" : 1539,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "شبرقة",
	            "en" : "Shibriqah"
	        }
	    },
	    {
	        "city_id" : 1540,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الغشامرة",
	            "en" : "Al Ghashamrah"
	        }
	    },
	    {
	        "city_id" : 1541,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "العباس",
	            "en" : "Al Abbas"
	        }
	    },
	    {
	        "city_id" : 1542,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الباحة",
	            "en" : "Al Baha"
	        }
	    },
	    {
	        "city_id" : 1543,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "رغدان",
	            "en" : "Raghdan"
	        }
	    },
	    {
	        "city_id" : 1544,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الظفير",
	            "en" : "Adh Dhafir"
	        }
	    },
	    {
	        "city_id" : 1545,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بني حسن",
	            "en" : "Bani Hasan"
	        }
	    },
	    {
	        "city_id" : 1546,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بيضان",
	            "en" : "Baydan"
	        }
	    },
	    {
	        "city_id" : 1547,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الصغرة",
	            "en" : "As Saghrah"
	        }
	    },
	    {
	        "city_id" : 1548,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بني ظبيان",
	            "en" : "Bani Dhabyan"
	        }
	    },
	    {
	        "city_id" : 1549,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشقيق",
	            "en" : "Ash Shaqiq"
	        }
	    },
	    {
	        "city_id" : 1550,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البظاظة",
	            "en" : "Al Badhdhadhah"
	        }
	    },
	    {
	        "city_id" : 1551,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحرجة",
	            "en" : "Al Harajah"
	        }
	    },
	    {
	        "city_id" : 1552,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل يزيد",
	            "en" : "Al Yazid"
	        }
	    },
	    {
	        "city_id" : 1553,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القعرة",
	            "en" : "Al Qarah"
	        }
	    },
	    {
	        "city_id" : 1554,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفرع",
	            "en" : "Al Far"
	        }
	    },
	    {
	        "city_id" : 1555,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البلس",
	            "en" : "Al Balas"
	        }
	    },
	    {
	        "city_id" : 1556,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العظة",
	            "en" : "Al Idhah"
	        }
	    },
	    {
	        "city_id" : 1557,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الصرف",
	            "en" : "As Suruf"
	        }
	    },
	    {
	        "city_id" : 1558,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ثما",
	            "en" : "Thamma"
	        }
	    },
	    {
	        "city_id" : 1559,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العاسرة",
	            "en" : "Al Asirah"
	        }
	    },
	    {
	        "city_id" : 1560,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حجاب",
	            "en" : "Hijab"
	        }
	    },
	    {
	        "city_id" : 1561,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحصنة",
	            "en" : "Al Husanah"
	        }
	    },
	    {
	        "city_id" : 1562,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الزارية",
	            "en" : "Al Az Zariyah"
	        }
	    },
	    {
	        "city_id" : 1563,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحصباء",
	            "en" : "Al Hasba"
	        }
	    },
	    {
	        "city_id" : 1564,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل سلمة",
	            "en" : "Al Salamah"
	        }
	    },
	    {
	        "city_id" : 1565,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ال الشيخ",
	            "en" : "Al Ash Shaykh"
	        }
	    },
	    {
	        "city_id" : 1566,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البشائر",
	            "en" : "Al Bashair"
	        }
	    },
	    {
	        "city_id" : 1567,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القاع",
	            "en" : "Al Qa"
	        }
	    },
	    {
	        "city_id" : 1568,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "أبو علي",
	            "en" : "Abu Ali"
	        }
	    },
	    {
	        "city_id" : 1569,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العمودية",
	            "en" : "Al Amudiyah"
	        }
	    },
	    {
	        "city_id" : 1570,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "قرن بن ساهر",
	            "en" : "Qarn Bin Sahir"
	        }
	    },
	    {
	        "city_id" : 1571,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ثلوث عمارة",
	            "en" : "Thuluth Imarah"
	        }
	    },
	    {
	        "city_id" : 1572,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حرف مبرة",
	            "en" : "Harf Mibrah"
	        }
	    },
	    {
	        "city_id" : 1573,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفايجة",
	            "en" : "Al Fayijah"
	        }
	    },
	    {
	        "city_id" : 1574,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحمضة",
	            "en" : "Al Hamadah"
	        }
	    },
	    {
	        "city_id" : 1575,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ناخسة",
	            "en" : "Nakhusah"
	        }
	    },
	    {
	        "city_id" : 1576,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "نمرة",
	            "en" : "Numarah"
	        }
	    },
	    {
	        "city_id" : 1577,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القزعة",
	            "en" : "Al Qazaah"
	        }
	    },
	    {
	        "city_id" : 1578,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصحنة",
	            "en" : "As Sahnah"
	        }
	    },
	    {
	        "city_id" : 1579,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المعقص",
	            "en" : "Al Muaqas"
	        }
	    },
	    {
	        "city_id" : 1580,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المروة",
	            "en" : "Al Marwah"
	        }
	    },
	    {
	        "city_id" : 1581,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصفي",
	            "en" : "As Sufay"
	        }
	    },
	    {
	        "city_id" : 1582,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشغز",
	            "en" : "Ash Shaghaz"
	        }
	    },
	    {
	        "city_id" : 1583,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القضب",
	            "en" : "Al Qadab"
	        }
	    },
	    {
	        "city_id" : 1584,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العجالين",
	            "en" : "Al Ajalin"
	        }
	    },
	    {
	        "city_id" : 1585,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشعب",
	            "en" : "Ash Shib"
	        }
	    },
	    {
	        "city_id" : 1586,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصلب",
	            "en" : "As Sulb"
	        }
	    },
	    {
	        "city_id" : 1587,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفريق",
	            "en" : "Al Fariq"
	        }
	    },
	    {
	        "city_id" : 1588,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السلامة",
	            "en" : "As Salamah"
	        }
	    },
	    {
	        "city_id" : 1589,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصهوة",
	            "en" : "As Sahwah"
	        }
	    },
	    {
	        "city_id" : 1590,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عنيكر",
	            "en" : "Unaykir"
	        }
	    },
	    {
	        "city_id" : 1591,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الكدسة",
	            "en" : "Al Kidsah"
	        }
	    },
	    {
	        "city_id" : 1592,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عجلان",
	            "en" : "Ajlan"
	        }
	    },
	    {
	        "city_id" : 1593,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القحمان",
	            "en" : "Al Quhman"
	        }
	    },
	    {
	        "city_id" : 1594,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العرجاء",
	            "en" : "Al Arja"
	        }
	    },
	    {
	        "city_id" : 1595,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البريم",
	            "en" : "Al Buraym"
	        }
	    },
	    {
	        "city_id" : 1596,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفرشة",
	            "en" : "Al Farshah"
	        }
	    },
	    {
	        "city_id" : 1597,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الزعاترة",
	            "en" : "Az Zaatirah"
	        }
	    },
	    {
	        "city_id" : 1598,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العماير",
	            "en" : "Al Amayir"
	        }
	    },
	    {
	        "city_id" : 1599,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السمرة",
	            "en" : "As Samrah"
	        }
	    },
	    {
	        "city_id" : 1600,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شعب سامر",
	            "en" : "Shaib Samir"
	        }
	    },
	    {
	        "city_id" : 1601,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السادة",
	            "en" : "As Sadah"
	        }
	    },
	    {
	        "city_id" : 1602,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القحب",
	            "en" : "Al Qahb"
	        }
	    },
	    {
	        "city_id" : 1603,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "بلاقة",
	            "en" : "Ballaqah"
	        }
	    },
	    {
	        "city_id" : 1604,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "زبيد",
	            "en" : "Zubayd"
	        }
	    },
	    {
	        "city_id" : 1605,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مخشوش",
	            "en" : "Makhshush"
	        }
	    },
	    {
	        "city_id" : 1606,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العينة",
	            "en" : "Al Aynah"
	        }
	    },
	    {
	        "city_id" : 1607,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "خبت السبت",
	            "en" : "Khabt As Sabt"
	        }
	    },
	    {
	        "city_id" : 1608,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفاهمة",
	            "en" : "Al Fahimah"
	        }
	    },
	    {
	        "city_id" : 1609,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ثريبان",
	            "en" : "Thurayban"
	        }
	    },
	    {
	        "city_id" : 1610,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المبنى",
	            "en" : "Al Mabna"
	        }
	    },
	    {
	        "city_id" : 1611,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القاع",
	            "en" : "Al Qa"
	        }
	    },
	    {
	        "city_id" : 1612,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحذيفة",
	            "en" : "Al Hudhayfah"
	        }
	    },
	    {
	        "city_id" : 1613,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ناخس",
	            "en" : "Nakhis"
	        }
	    },
	    {
	        "city_id" : 1614,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الزبيري",
	            "en" : "Az Zubayri"
	        }
	    },
	    {
	        "city_id" : 1615,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "غراب",
	            "en" : "Ghurab"
	        }
	    },
	    {
	        "city_id" : 1616,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السر",
	            "en" : "As Sirr"
	        }
	    },
	    {
	        "city_id" : 1617,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "آل عامر",
	            "en" : "Al Amir"
	        }
	    },
	    {
	        "city_id" : 1618,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "النبيعة",
	            "en" : "An Nubayah"
	        }
	    },
	    {
	        "city_id" : 1619,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحرش",
	            "en" : "Al Harsh"
	        }
	    },
	    {
	        "city_id" : 1620,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحدباء",
	            "en" : "Al Hadba"
	        }
	    },
	    {
	        "city_id" : 1621,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصدرة",
	            "en" : "As Sudarah"
	        }
	    },
	    {
	        "city_id" : 1622,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الهدارة",
	            "en" : "Al Haddarah"
	        }
	    },
	    {
	        "city_id" : 1623,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشرى",
	            "en" : "Ash Shara"
	        }
	    },
	    {
	        "city_id" : 1624,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الأنفة",
	            "en" : "Al Anafah"
	        }
	    },
	    {
	        "city_id" : 1625,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القنفذة",
	            "en" : "Al Qunfidhah"
	        }
	    },
	    {
	        "city_id" : 1626,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بلقرن",
	            "en" : "Balqarn"
	        }
	    },
	    {
	        "city_id" : 1627,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العلاية",
	            "en" : "Al Alayah"
	        }
	    },
	    {
	        "city_id" : 1628,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القوز",
	            "en" : "Al Qawz"
	        }
	    },
	    {
	        "city_id" : 1629,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "كياد",
	            "en" : "Kiyad"
	        }
	    },
	    {
	        "city_id" : 1630,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصفة",
	            "en" : "As Suffah"
	        }
	    },
	    {
	        "city_id" : 1631,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المظيلف",
	            "en" : "Al Mudhaylif"
	        }
	    },
	    {
	        "city_id" : 1632,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحبيل",
	            "en" : "Al Habil"
	        }
	    },
	    {
	        "city_id" : 1633,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "صبياء",
	            "en" : "Sabya"
	        }
	    },
	    {
	        "city_id" : 1634,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "باشوت",
	            "en" : "Bashut"
	        }
	    },
	    {
	        "city_id" : 1635,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "معشوقة",
	            "en" : "Mashuqah"
	        }
	    },
	    {
	        "city_id" : 1636,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "دوقة",
	            "en" : "Dawqah"
	        }
	    },
	    {
	        "city_id" : 1637,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سبت شمران",
	            "en" : "Sabt Shumran"
	        }
	    },
	    {
	        "city_id" : 1638,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "احد بني زيد",
	            "en" : "Ahd Bani Zayd"
	        }
	    },
	    {
	        "city_id" : 1639,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سبت الجارة",
	            "en" : "Sabt Al Jarah"
	        }
	    },
	    {
	        "city_id" : 1640,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قدرين",
	            "en" : "Qudrayn"
	        }
	    },
	    {
	        "city_id" : 1641,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل سفيان",
	            "en" : "Al Sufyan"
	        }
	    },
	    {
	        "city_id" : 1642,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البدلة",
	            "en" : "Al Badlah"
	        }
	    },
	    {
	        "city_id" : 1643,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مملح",
	            "en" : "Mamlah"
	        }
	    },
	    {
	        "city_id" : 1644,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل جودة",
	            "en" : "Al Jawdah"
	        }
	    },
	    {
	        "city_id" : 1645,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بني زهير",
	            "en" : "Bani Zuhayr"
	        }
	    },
	    {
	        "city_id" : 1646,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحدباء",
	            "en" : "Al Hadba"
	        }
	    },
	    {
	        "city_id" : 1647,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل إثيبة",
	            "en" : "Al Ithibah"
	        }
	    },
	    {
	        "city_id" : 1648,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "تلاء",
	            "en" : "Tala"
	        }
	    },
	    {
	        "city_id" : 1649,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القيسة",
	            "en" : "Al Qaysah"
	        }
	    },
	    {
	        "city_id" : 1650,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل فارس",
	            "en" : "Al Faris"
	        }
	    },
	    {
	        "city_id" : 1651,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الذفراء",
	            "en" : "Adh Dhafra"
	        }
	    },
	    {
	        "city_id" : 1652,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بطحة",
	            "en" : "Bathah"
	        }
	    },
	    {
	        "city_id" : 1653,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بني قيس",
	            "en" : "Bani Qays"
	        }
	    },
	    {
	        "city_id" : 1654,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القضوى",
	            "en" : "Al Qadwa"
	        }
	    },
	    {
	        "city_id" : 1655,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحميطة",
	            "en" : "Al Humayyitah"
	        }
	    },
	    {
	        "city_id" : 1656,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرشداء",
	            "en" : "Ar Rashda"
	        }
	    },
	    {
	        "city_id" : 1657,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لبوة",
	            "en" : "Labwah"
	        }
	    },
	    {
	        "city_id" : 1658,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل حضينان",
	            "en" : "Al Hidaynan"
	        }
	    },
	    {
	        "city_id" : 1659,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المجرا",
	            "en" : "Al Mujra"
	        }
	    },
	    {
	        "city_id" : 1660,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخرب",
	            "en" : "Al Kharb"
	        }
	    },
	    {
	        "city_id" : 1661,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل صقر",
	            "en" : "Al Saqr"
	        }
	    },
	    {
	        "city_id" : 1662,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "جليلة",
	            "en" : "Jilayyiah"
	        }
	    },
	    {
	        "city_id" : 1663,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "طعمة",
	            "en" : "Timah"
	        }
	    },
	    {
	        "city_id" : 1664,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المعاملة",
	            "en" : "Al Muamalah"
	        }
	    },
	    {
	        "city_id" : 1665,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحيمة",
	            "en" : "Al Haymah"
	        }
	    },
	    {
	        "city_id" : 1666,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البطنة",
	            "en" : "Al Batnah"
	        }
	    },
	    {
	        "city_id" : 1667,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بيش",
	            "en" : "Bish"
	        }
	    },
	    {
	        "city_id" : 1668,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحيفة",
	            "en" : "Al Hifah"
	        }
	    },
	    {
	        "city_id" : 1669,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الطريف الأعلى",
	            "en" : "At Turayf Al Ala"
	        }
	    },
	    {
	        "city_id" : 1670,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المضة",
	            "en" : "Al Maddah"
	        }
	    },
	    {
	        "city_id" : 1671,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عرقة",
	            "en" : "Irqah"
	        }
	    },
	    {
	        "city_id" : 1672,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ثفرة",
	            "en" : "Thafrah"
	        }
	    },
	    {
	        "city_id" : 1673,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "فرعة قواء",
	            "en" : "Farat Quwa"
	        }
	    },
	    {
	        "city_id" : 1674,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البرقاء",
	            "en" : "Al Barqa"
	        }
	    },
	    {
	        "city_id" : 1675,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "فرسان",
	            "en" : "Farasan"
	        }
	    },
	    {
	        "city_id" : 1676,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لسس",
	            "en" : "Lasas"
	        }
	    },
	    {
	        "city_id" : 1677,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القوز",
	            "en" : "Al Qawz"
	        }
	    },
	    {
	        "city_id" : 1678,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الصفا الملبد",
	            "en" : "As Safa Al Mulabad"
	        }
	    },
	    {
	        "city_id" : 1679,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الثعيلبة",
	            "en" : "Ath Thuaylibah"
	        }
	    },
	    {
	        "city_id" : 1680,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الطلحة",
	            "en" : "At Talhah"
	        }
	    },
	    {
	        "city_id" : 1681,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بادية",
	            "en" : "Badiyah"
	        }
	    },
	    {
	        "city_id" : 1682,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العين",
	            "en" : "Al Ayn"
	        }
	    },
	    {
	        "city_id" : 1683,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البغث",
	            "en" : "Al Baghath"
	        }
	    },
	    {
	        "city_id" : 1684,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المريفق",
	            "en" : "Al Murayfiq"
	        }
	    },
	    {
	        "city_id" : 1685,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحرفين",
	            "en" : "Al Harfayn"
	        }
	    },
	    {
	        "city_id" : 1686,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القضة",
	            "en" : "Al Qaddah"
	        }
	    },
	    {
	        "city_id" : 1687,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحامض",
	            "en" : "Al Hamid"
	        }
	    },
	    {
	        "city_id" : 1688,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الطلاح",
	            "en" : "At Tilah"
	        }
	    },
	    {
	        "city_id" : 1689,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "واسط",
	            "en" : "Wasit"
	        }
	    },
	    {
	        "city_id" : 1690,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "خشم شاع",
	            "en" : "Khashm Sha"
	        }
	    },
	    {
	        "city_id" : 1691,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخضاير",
	            "en" : "Al Khadayir"
	        }
	    },
	    {
	        "city_id" : 1692,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مشحذ",
	            "en" : "Mashhidh"
	        }
	    },
	    {
	        "city_id" : 1693,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بريم السليل",
	            "en" : "Buraym As Silil"
	        }
	    },
	    {
	        "city_id" : 1694,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البردان",
	            "en" : "Al Burdan"
	        }
	    },
	    {
	        "city_id" : 1695,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "رغوة",
	            "en" : "Righwah"
	        }
	    },
	    {
	        "city_id" : 1696,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل سعيد",
	            "en" : "Al Said"
	        }
	    },
	    {
	        "city_id" : 1697,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الغول",
	            "en" : "Al Ghawl"
	        }
	    },
	    {
	        "city_id" : 1698,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الهايلة",
	            "en" : "Al Al Hayilah"
	        }
	    },
	    {
	        "city_id" : 1699,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل جرمان",
	            "en" : "Al Jarman"
	        }
	    },
	    {
	        "city_id" : 1700,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عرقة",
	            "en" : "Irqah"
	        }
	    },
	    {
	        "city_id" : 1701,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحواويش",
	            "en" : "Al Hawawish"
	        }
	    },
	    {
	        "city_id" : 1702,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المري",
	            "en" : "Al Marri"
	        }
	    },
	    {
	        "city_id" : 1703,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل شويل",
	            "en" : "Al Shuwayl"
	        }
	    },
	    {
	        "city_id" : 1704,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "كدمان",
	            "en" : "Kidman"
	        }
	    },
	    {
	        "city_id" : 1705,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الصفية",
	            "en" : "As Sufayyah"
	        }
	    },
	    {
	        "city_id" : 1706,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "إبن نجم",
	            "en" : "Ibn Nijam"
	        }
	    },
	    {
	        "city_id" : 1707,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المثناة",
	            "en" : "Al Mathnah"
	        }
	    },
	    {
	        "city_id" : 1708,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "هدباء",
	            "en" : "Hadba"
	        }
	    },
	    {
	        "city_id" : 1709,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "وادي ابن هشبل",
	            "en" : "Wadi Ibn Hashbal"
	        }
	    },
	    {
	        "city_id" : 1710,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ال بي ثور",
	            "en" : "Al Bi Thawr"
	        }
	    },
	    {
	        "city_id" : 1711,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السلع",
	            "en" : "As Sila"
	        }
	    },
	    {
	        "city_id" : 1712,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المضة",
	            "en" : "Al Maddah"
	        }
	    },
	    {
	        "city_id" : 1713,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الروضة",
	            "en" : "Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 1714,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "خيبر الجنوب",
	            "en" : "Khaybar Al Janub"
	        }
	    },
	    {
	        "city_id" : 1715,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحثدة",
	            "en" : "Al Hithadah"
	        }
	    },
	    {
	        "city_id" : 1716,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الباعق",
	            "en" : "Al Baiq"
	        }
	    },
	    {
	        "city_id" : 1717,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العرض",
	            "en" : "Al Ard"
	        }
	    },
	    {
	        "city_id" : 1718,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "أم ضحي",
	            "en" : "Umm Dahi"
	        }
	    },
	    {
	        "city_id" : 1719,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل ثوبان",
	            "en" : "Al Thawban"
	        }
	    },
	    {
	        "city_id" : 1720,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحيلة",
	            "en" : "Al Haylah"
	        }
	    },
	    {
	        "city_id" : 1721,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مراتخ",
	            "en" : "Muratikh"
	        }
	    },
	    {
	        "city_id" : 1722,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "أم ظهور الرفود",
	            "en" : "Umm Dhuhur Ar Rafud"
	        }
	    },
	    {
	        "city_id" : 1723,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مجزوعة",
	            "en" : "Majzuah"
	        }
	    },
	    {
	        "city_id" : 1724,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرونة",
	            "en" : "Al Qurunah"
	        }
	    },
	    {
	        "city_id" : 1725,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الريع",
	            "en" : "Ar Ri"
	        }
	    },
	    {
	        "city_id" : 1726,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قنيفد",
	            "en" : "Qinayfid"
	        }
	    },
	    {
	        "city_id" : 1727,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المربع",
	            "en" : "Al Murabba"
	        }
	    },
	    {
	        "city_id" : 1728,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفاهمة",
	            "en" : "Al Fahmah"
	        }
	    },
	    {
	        "city_id" : 1729,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل محصن",
	            "en" : "Al Muhsun"
	        }
	    },
	    {
	        "city_id" : 1730,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "النصب",
	            "en" : "An Nusub"
	        }
	    },
	    {
	        "city_id" : 1731,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المسلم",
	            "en" : "Al Muslim"
	        }
	    },
	    {
	        "city_id" : 1732,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الريش",
	            "en" : "Ar Raysh"
	        }
	    },
	    {
	        "city_id" : 1733,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحاجب",
	            "en" : "Al Hajib"
	        }
	    },
	    {
	        "city_id" : 1734,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل علين",
	            "en" : "Al Illin"
	        }
	    },
	    {
	        "city_id" : 1735,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحضن",
	            "en" : "Al Hudn"
	        }
	    },
	    {
	        "city_id" : 1736,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العين",
	            "en" : "Al Ayn"
	        }
	    },
	    {
	        "city_id" : 1737,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المكثر",
	            "en" : "Al Mukaththir"
	        }
	    },
	    {
	        "city_id" : 1738,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البارك",
	            "en" : "Al Barik"
	        }
	    },
	    {
	        "city_id" : 1739,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المغمر",
	            "en" : "Al Maghmar"
	        }
	    },
	    {
	        "city_id" : 1740,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العيدة",
	            "en" : "Al Idah"
	        }
	    },
	    {
	        "city_id" : 1741,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحجف",
	            "en" : "Al Hajf"
	        }
	    },
	    {
	        "city_id" : 1742,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المقاعد",
	            "en" : "Al Maqaid"
	        }
	    },
	    {
	        "city_id" : 1743,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "شعب دريب",
	            "en" : "Shib Durayb"
	        }
	    },
	    {
	        "city_id" : 1744,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الكديد",
	            "en" : "Al Kadid"
	        }
	    },
	    {
	        "city_id" : 1745,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السحر",
	            "en" : "As Sahar"
	        }
	    },
	    {
	        "city_id" : 1746,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "إبن عبيدي",
	            "en" : "Ibn Abidi"
	        }
	    },
	    {
	        "city_id" : 1747,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجبهة",
	            "en" : "Al Jabhah"
	        }
	    },
	    {
	        "city_id" : 1748,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحرة",
	            "en" : "Al Harrah"
	        }
	    },
	    {
	        "city_id" : 1749,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "معصم",
	            "en" : "Masam"
	        }
	    },
	    {
	        "city_id" : 1750,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحدبات",
	            "en" : "Al Hadabat"
	        }
	    },
	    {
	        "city_id" : 1751,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المعشور",
	            "en" : "Al Mashur"
	        }
	    },
	    {
	        "city_id" : 1752,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المسلمة",
	            "en" : "Al Maslamah"
	        }
	    },
	    {
	        "city_id" : 1753,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بين الجبلين",
	            "en" : "Bayn Al Jablayn"
	        }
	    },
	    {
	        "city_id" : 1754,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحشف",
	            "en" : "Al Hashaf"
	        }
	    },
	    {
	        "city_id" : 1755,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ريمان",
	            "en" : "Rayman"
	        }
	    },
	    {
	        "city_id" : 1756,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخليف",
	            "en" : "Al Khalif"
	        }
	    },
	    {
	        "city_id" : 1757,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الراحة",
	            "en" : "Ar Rahah"
	        }
	    },
	    {
	        "city_id" : 1758,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العفارة",
	            "en" : "Al Afarah"
	        }
	    },
	    {
	        "city_id" : 1759,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البجيلي",
	            "en" : "Al Bajili"
	        }
	    },
	    {
	        "city_id" : 1760,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العقل",
	            "en" : "Al Aql"
	        }
	    },
	    {
	        "city_id" : 1761,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المجمعة",
	            "en" : "Al Majmaah"
	        }
	    },
	    {
	        "city_id" : 1762,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سيال",
	            "en" : "Sayyal"
	        }
	    },
	    {
	        "city_id" : 1763,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل معلوي",
	            "en" : "Al Malawi"
	        }
	    },
	    {
	        "city_id" : 1764,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخطيم",
	            "en" : "Al Khutaym"
	        }
	    },
	    {
	        "city_id" : 1765,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفي",
	            "en" : "Al Fayy"
	        }
	    },
	    {
	        "city_id" : 1766,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجردان",
	            "en" : "Al Jardan"
	        }
	    },
	    {
	        "city_id" : 1767,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "خارف",
	            "en" : "Kharif"
	        }
	    },
	    {
	        "city_id" : 1768,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشرف",
	            "en" : "Ash Sharaf"
	        }
	    },
	    {
	        "city_id" : 1769,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سارة",
	            "en" : "Sarah"
	        }
	    },
	    {
	        "city_id" : 1770,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سقامة",
	            "en" : "Siqamah"
	        }
	    },
	    {
	        "city_id" : 1771,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخبارة",
	            "en" : "Al Khabarah"
	        }
	    },
	    {
	        "city_id" : 1772,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "غديقة",
	            "en" : "Ghudayqah"
	        }
	    },
	    {
	        "city_id" : 1773,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخرجة",
	            "en" : "Al Kharjah"
	        }
	    },
	    {
	        "city_id" : 1774,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدبانية",
	            "en" : "Ad Dubaniyah"
	        }
	    },
	    {
	        "city_id" : 1775,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصبخة",
	            "en" : "As Sabkhah"
	        }
	    },
	    {
	        "city_id" : 1776,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "صعبة",
	            "en" : "Sabah"
	        }
	    },
	    {
	        "city_id" : 1777,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "صور بن شكوان",
	            "en" : "Sur Bin Shakwan"
	        }
	    },
	    {
	        "city_id" : 1778,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخشاشة",
	            "en" : "Al Khashashah"
	        }
	    },
	    {
	        "city_id" : 1779,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العوصاء",
	            "en" : "Al Awsa"
	        }
	    },
	    {
	        "city_id" : 1780,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخشة",
	            "en" : "Al Khushshah"
	        }
	    },
	    {
	        "city_id" : 1781,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "لغب",
	            "en" : "Laghab"
	        }
	    },
	    {
	        "city_id" : 1782,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الرحى",
	            "en" : "Ar Raha"
	        }
	    },
	    {
	        "city_id" : 1783,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حريزة",
	            "en" : "Harizah"
	        }
	    },
	    {
	        "city_id" : 1784,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخضراء",
	            "en" : "Al Khadra"
	        }
	    },
	    {
	        "city_id" : 1785,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحورة",
	            "en" : "Al Hawrah"
	        }
	    },
	    {
	        "city_id" : 1786,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "رضوان",
	            "en" : "Radwan"
	        }
	    },
	    {
	        "city_id" : 1787,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حبث",
	            "en" : "Habath"
	        }
	    },
	    {
	        "city_id" : 1788,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل ناهية",
	            "en" : "Al Nahiyah"
	        }
	    },
	    {
	        "city_id" : 1789,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الذيب",
	            "en" : "Al Adh Dhib"
	        }
	    },
	    {
	        "city_id" : 1790,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "فتاح",
	            "en" : "Futah"
	        }
	    },
	    {
	        "city_id" : 1791,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مسلت",
	            "en" : "Maslat"
	        }
	    },
	    {
	        "city_id" : 1792,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل شدادي",
	            "en" : "Al Shaddadi"
	        }
	    },
	    {
	        "city_id" : 1793,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عاصمي",
	            "en" : "Al Asimi"
	        }
	    },
	    {
	        "city_id" : 1794,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ذي حصيمو",
	            "en" : "Dhi Husaymu"
	        }
	    },
	    {
	        "city_id" : 1795,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "وسانب",
	            "en" : "Wusanib"
	        }
	    },
	    {
	        "city_id" : 1796,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الزهراء",
	            "en" : "Az Zaha"
	        }
	    },
	    {
	        "city_id" : 1797,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المسقوي",
	            "en" : "Al Masqawi"
	        }
	    },
	    {
	        "city_id" : 1798,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "هدة",
	            "en" : "Hidah"
	        }
	    },
	    {
	        "city_id" : 1799,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الغال",
	            "en" : "Al Ghal"
	        }
	    },
	    {
	        "city_id" : 1800,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "خميس مطير",
	            "en" : "Khamis Mutair"
	        }
	    },
	    {
	        "city_id" : 1801,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "محايل",
	            "en" : "Muhayil"
	        }
	    },
	    {
	        "city_id" : 1802,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قنا البحر",
	            "en" : "Qana & Al Bahr"
	        }
	    },
	    {
	        "city_id" : 1803,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "خميس البحر",
	            "en" : "Khamis Al Bahr"
	        }
	    },
	    {
	        "city_id" : 1804,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قشيعة",
	            "en" : "Qushayah"
	        }
	    },
	    {
	        "city_id" : 1805,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "دالج",
	            "en" : "Dalaj"
	        }
	    },
	    {
	        "city_id" : 1806,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "شط إبن جازعة",
	            "en" : "Shatt Ibn Jaziah"
	        }
	    },
	    {
	        "city_id" : 1807,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "منقش",
	            "en" : "Manqash"
	        }
	    },
	    {
	        "city_id" : 1808,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الدماغ",
	            "en" : "Ad Dimagh"
	        }
	    },
	    {
	        "city_id" : 1809,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ثلوث ريم",
	            "en" : "Thuluth Rim"
	        }
	    },
	    {
	        "city_id" : 1810,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحضن",
	            "en" : "Al Hadan"
	        }
	    },
	    {
	        "city_id" : 1811,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الضاجع",
	            "en" : "Ad Daji"
	        }
	    },
	    {
	        "city_id" : 1812,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرصعة",
	            "en" : "Ar Rasah"
	        }
	    },
	    {
	        "city_id" : 1813,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سنومة",
	            "en" : "Sanumah"
	        }
	    },
	    {
	        "city_id" : 1814,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجرف",
	            "en" : "Al Jarf"
	        }
	    },
	    {
	        "city_id" : 1815,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السرو",
	            "en" : "As Sarw"
	        }
	    },
	    {
	        "city_id" : 1816,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العشة",
	            "en" : "Al Ashshah"
	        }
	    },
	    {
	        "city_id" : 1817,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مجم",
	            "en" : "Al Majam"
	        }
	    },
	    {
	        "city_id" : 1818,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحصون",
	            "en" : "Al Husun"
	        }
	    },
	    {
	        "city_id" : 1819,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القارية",
	            "en" : "Al Qariyah"
	        }
	    },
	    {
	        "city_id" : 1820,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الذروة",
	            "en" : "Adh Dhurwah"
	        }
	    },
	    {
	        "city_id" : 1821,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشعبين",
	            "en" : "Ash Shibayn"
	        }
	    },
	    {
	        "city_id" : 1822,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عيسى",
	            "en" : "Al Isa"
	        }
	    },
	    {
	        "city_id" : 1823,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مرجومة",
	            "en" : "Marjumah"
	        }
	    },
	    {
	        "city_id" : 1824,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بيغ",
	            "en" : "Bayyagh"
	        }
	    },
	    {
	        "city_id" : 1825,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجزوة",
	            "en" : "Al Jazwah"
	        }
	    },
	    {
	        "city_id" : 1826,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "فقوة",
	            "en" : "Faqwah"
	        }
	    },
	    {
	        "city_id" : 1827,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل متعالي",
	            "en" : "Al Mutali"
	        }
	    },
	    {
	        "city_id" : 1828,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "دبلاء",
	            "en" : "Dabla"
	        }
	    },
	    {
	        "city_id" : 1829,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرن",
	            "en" : "Al Qurun"
	        }
	    },
	    {
	        "city_id" : 1830,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "كلمة",
	            "en" : "Kalmah"
	        }
	    },
	    {
	        "city_id" : 1831,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مصم",
	            "en" : "Al Masam"
	        }
	    },
	    {
	        "city_id" : 1832,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "يسراة",
	            "en" : "Yasrah"
	        }
	    },
	    {
	        "city_id" : 1833,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الأثل",
	            "en" : "Al Athl"
	        }
	    },
	    {
	        "city_id" : 1834,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لصناي",
	            "en" : "Lasnay"
	        }
	    },
	    {
	        "city_id" : 1835,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عكية",
	            "en" : "Ukyah"
	        }
	    },
	    {
	        "city_id" : 1836,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرار",
	            "en" : "Al Qarar"
	        }
	    },
	    {
	        "city_id" : 1837,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجرف",
	            "en" : "Al Jarf"
	        }
	    },
	    {
	        "city_id" : 1838,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "فيشان",
	            "en" : "Fayshan"
	        }
	    },
	    {
	        "city_id" : 1839,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العين",
	            "en" : "Al Ayn"
	        }
	    },
	    {
	        "city_id" : 1840,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الراحة",
	            "en" : "Ar Rahah"
	        }
	    },
	    {
	        "city_id" : 1841,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "اللصبة",
	            "en" : "Al Lasbah"
	        }
	    },
	    {
	        "city_id" : 1842,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "جو جيبة",
	            "en" : "Jaww Jibah"
	        }
	    },
	    {
	        "city_id" : 1843,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لهد",
	            "en" : "Luhud"
	        }
	    },
	    {
	        "city_id" : 1844,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الهدانة",
	            "en" : "Al Hadanah"
	        }
	    },
	    {
	        "city_id" : 1845,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "أبو ذراع",
	            "en" : "Abu Dhira"
	        }
	    },
	    {
	        "city_id" : 1846,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "رجال المع",
	            "en" : "Rijal Alma"
	        }
	    },
	    {
	        "city_id" : 1847,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السودة",
	            "en" : "As Sudah"
	        }
	    },
	    {
	        "city_id" : 1848,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحريضة",
	            "en" : "Al Huraydah"
	        }
	    },
	    {
	        "city_id" : 1849,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخطوة",
	            "en" : "Al Khutwah"
	        }
	    },
	    {
	        "city_id" : 1850,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحبيل",
	            "en" : "Al Habil"
	        }
	    },
	    {
	        "city_id" : 1851,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل قفيع",
	            "en" : "Al Qifay"
	        }
	    },
	    {
	        "city_id" : 1852,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المضيق",
	            "en" : "Al Madiq"
	        }
	    },
	    {
	        "city_id" : 1853,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل لغر",
	            "en" : "Al Laghir"
	        }
	    },
	    {
	        "city_id" : 1854,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الهضبة",
	            "en" : "Al Hadabah"
	        }
	    },
	    {
	        "city_id" : 1855,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل دلهم",
	            "en" : "Al Dalham"
	        }
	    },
	    {
	        "city_id" : 1856,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عنقرة",
	            "en" : "Unqarah"
	        }
	    },
	    {
	        "city_id" : 1857,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل لوط",
	            "en" : "Al Lut"
	        }
	    },
	    {
	        "city_id" : 1858,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مكر",
	            "en" : "Al Makir"
	        }
	    },
	    {
	        "city_id" : 1859,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عرق",
	            "en" : "Al Irq"
	        }
	    },
	    {
	        "city_id" : 1860,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سرايم",
	            "en" : "Sarayim"
	        }
	    },
	    {
	        "city_id" : 1861,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لزمة",
	            "en" : "Lazmah"
	        }
	    },
	    {
	        "city_id" : 1862,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الدرب",
	            "en" : "Ad Darb"
	        }
	    },
	    {
	        "city_id" : 1863,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بني تميم",
	            "en" : "Bani Tamim"
	        }
	    },
	    {
	        "city_id" : 1864,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرحاء",
	            "en" : "Al Qarha"
	        }
	    },
	    {
	        "city_id" : 1865,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عمرة",
	            "en" : "Al Amrah"
	        }
	    },
	    {
	        "city_id" : 1866,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الداحس",
	            "en" : "Al Ad Dahis"
	        }
	    },
	    {
	        "city_id" : 1867,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل زهير",
	            "en" : "Al Zuhayr"
	        }
	    },
	    {
	        "city_id" : 1868,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عراب",
	            "en" : "Irab"
	        }
	    },
	    {
	        "city_id" : 1869,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مشهور",
	            "en" : "Al Mashhur"
	        }
	    },
	    {
	        "city_id" : 1870,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عامر",
	            "en" : "Al Amir"
	        }
	    },
	    {
	        "city_id" : 1871,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل حديلة",
	            "en" : "Al Hidaylah"
	        }
	    },
	    {
	        "city_id" : 1872,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل حلامي",
	            "en" : "Al Hilami"
	        }
	    },
	    {
	        "city_id" : 1873,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "صفحان",
	            "en" : "Safhan"
	        }
	    },
	    {
	        "city_id" : 1874,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "سامودة",
	            "en" : "Samudah"
	        }
	    },
	    {
	        "city_id" : 1875,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغبة",
	            "en" : "Al Ghubbah"
	        }
	    },
	    {
	        "city_id" : 1876,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المحاميد",
	            "en" : "Al Mahamid"
	        }
	    },
	    {
	        "city_id" : 1877,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مسنى الازيار",
	            "en" : "Masna Al Azyar"
	        }
	    },
	    {
	        "city_id" : 1878,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحذيفة القالة",
	            "en" : "Al Hudhayfat Al Qalah"
	        }
	    },
	    {
	        "city_id" : 1879,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ثول",
	            "en" : "Thuwal"
	        }
	    },
	    {
	        "city_id" : 1880,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ام السلم",
	            "en" : "Umm As Salam"
	        }
	    },
	    {
	        "city_id" : 1881,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حدة",
	            "en" : "Haddah"
	        }
	    },
	    {
	        "city_id" : 1882,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "بحرة المجاهدين",
	            "en" : "Bahrah Al Mujahidin"
	        }
	    },
	    {
	        "city_id" : 1883,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "بحرة القديمة",
	            "en" : "Bahrah Al Qadimah"
	        }
	    },
	    {
	        "city_id" : 1884,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حداء الجديدة",
	            "en" : "Hada Al Jadidah"
	        }
	    },
	    {
	        "city_id" : 1885,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ذهبان",
	            "en" : "Dhahban"
	        }
	    },
	    {
	        "city_id" : 1886,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغولاء",
	            "en" : "Al Ghawla"
	        }
	    },
	    {
	        "city_id" : 1887,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العوجانية",
	            "en" : "Al Awjaniyah"
	        }
	    },
	    {
	        "city_id" : 1888,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصفحة",
	            "en" : "As Safhah"
	        }
	    },
	    {
	        "city_id" : 1889,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القضيمة",
	            "en" : "Al Qadimah"
	        }
	    },
	    {
	        "city_id" : 1890,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ميناء القضيمة",
	            "en" : "Al Qadimah Port"
	        }
	    },
	    {
	        "city_id" : 1891,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المواليد",
	            "en" : "Al Mawalid"
	        }
	    },
	    {
	        "city_id" : 1892,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "دغماء",
	            "en" : "Daghma"
	        }
	    },
	    {
	        "city_id" : 1893,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحفيرة",
	            "en" : "Al Hufayyirah"
	        }
	    },
	    {
	        "city_id" : 1894,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحفيرة",
	            "en" : "Al Hufayyirah"
	        }
	    },
	    {
	        "city_id" : 1895,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القهب",
	            "en" : "Al Qahab"
	        }
	    },
	    {
	        "city_id" : 1896,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجحصة",
	            "en" : "Al Jahasah"
	        }
	    },
	    {
	        "city_id" : 1897,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدقم",
	            "en" : "Ad Duqum"
	        }
	    },
	    {
	        "city_id" : 1898,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشهومة",
	            "en" : "Ash Shuhumah"
	        }
	    },
	    {
	        "city_id" : 1899,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عوية",
	            "en" : "Uwayyah"
	        }
	    },
	    {
	        "city_id" : 1900,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "سيحان",
	            "en" : "Sayhan"
	        }
	    },
	    {
	        "city_id" : 1901,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحوية",
	            "en" : "Al Hawiyah"
	        }
	    },
	    {
	        "city_id" : 1902,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "خميس",
	            "en" : "Humays"
	        }
	    },
	    {
	        "city_id" : 1903,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشعبة",
	            "en" : "Ash Shabah"
	        }
	    },
	    {
	        "city_id" : 1904,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الاحلاف",
	            "en" : "Al Ahlaf"
	        }
	    },
	    {
	        "city_id" : 1905,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المويه القديم",
	            "en" : "Al Muwayh Al Qadim"
	        }
	    },
	    {
	        "city_id" : 1906,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البحرة",
	            "en" : "Al Baharah"
	        }
	    },
	    {
	        "city_id" : 1907,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البادرية",
	            "en" : "Al Badiriyah"
	        }
	    },
	    {
	        "city_id" : 1908,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحفيرة",
	            "en" : "Al Hufayyirah"
	        }
	    },
	    {
	        "city_id" : 1909,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الذويب",
	            "en" : "Adh Dhuwayb"
	        }
	    },
	    {
	        "city_id" : 1910,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مروان",
	            "en" : "Marwan"
	        }
	    },
	    {
	        "city_id" : 1911,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القرارة",
	            "en" : "Al Qararah"
	        }
	    },
	    {
	        "city_id" : 1912,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "أم الدوم",
	            "en" : "Umm Ad Dawm"
	        }
	    },
	    {
	        "city_id" : 1913,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "دغيبجة",
	            "en" : "Dughaybjah"
	        }
	    },
	    {
	        "city_id" : 1914,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الرميدة",
	            "en" : "Ar Rumaydah"
	        }
	    },
	    {
	        "city_id" : 1915,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "خد الحاج",
	            "en" : "Khadd Al Haj"
	        }
	    },
	    {
	        "city_id" : 1916,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شويحط",
	            "en" : "Shuwayhit"
	        }
	    },
	    {
	        "city_id" : 1917,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "وطيلح",
	            "en" : "Witaylih"
	        }
	    },
	    {
	        "city_id" : 1918,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "العنبة",
	            "en" : "Al Anabah"
	        }
	    },
	    {
	        "city_id" : 1919,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخضر",
	            "en" : "Al Khudr"
	        }
	    },
	    {
	        "city_id" : 1920,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الودية",
	            "en" : "Al Wudiyah"
	        }
	    },
	    {
	        "city_id" : 1921,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصالحية",
	            "en" : "As Salhiyah"
	        }
	    },
	    {
	        "city_id" : 1922,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المحاني",
	            "en" : "Al Mahani"
	        }
	    },
	    {
	        "city_id" : 1923,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدار البيضاء",
	            "en" : "Ad Dar Al Bayda"
	        }
	    },
	    {
	        "city_id" : 1924,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "النمور",
	            "en" : "An Namur"
	        }
	    },
	    {
	        "city_id" : 1925,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المبيرز",
	            "en" : "Al Mubayriz"
	        }
	    },
	    {
	        "city_id" : 1926,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ملح",
	            "en" : "Malah"
	        }
	    },
	    {
	        "city_id" : 1927,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغديرين",
	            "en" : "Al Ghadirayn"
	        }
	    },
	    {
	        "city_id" : 1928,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الهامة",
	            "en" : "Al Hamah"
	        }
	    },
	    {
	        "city_id" : 1929,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "بئر ابو العجاج",
	            "en" : "Bir Abu Al Ajjaj"
	        }
	    },
	    {
	        "city_id" : 1930,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "بئر السادي",
	            "en" : "Bir As Sadi"
	        }
	    },
	    {
	        "city_id" : 1931,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "قلعة الاذنم",
	            "en" : "Qalat Al Adhnum"
	        }
	    },
	    {
	        "city_id" : 1932,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "سلوى",
	            "en" : "Salwa"
	        }
	    },
	    {
	        "city_id" : 1933,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "وادي ابو طينة",
	            "en" : "Wadi Abu Tinah"
	        }
	    },
	    {
	        "city_id" : 1934,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الصورة",
	            "en" : "As Surah"
	        }
	    },
	    {
	        "city_id" : 1935,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "تريم",
	            "en" : "Tiraym"
	        }
	    },
	    {
	        "city_id" : 1936,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "بئر فحيمان",
	            "en" : "Bir Fhayman"
	        }
	    },
	    {
	        "city_id" : 1937,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "قاصرة",
	            "en" : "Qasrah"
	        }
	    },
	    {
	        "city_id" : 1938,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "هداج",
	            "en" : "Haddaj"
	        }
	    },
	    {
	        "city_id" : 1939,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الحواويط",
	            "en" : "Al Hawawit"
	        }
	    },
	    {
	        "city_id" : 1940,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "جبة",
	            "en" : "Jubbah"
	        }
	    },
	    {
	        "city_id" : 1941,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "المهارش",
	            "en" : "Al Mharish"
	        }
	    },
	    {
	        "city_id" : 1942,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "ضوجي",
	            "en" : "Duji"
	        }
	    },
	    {
	        "city_id" : 1943,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "المرير",
	            "en" : "Al Murayr"
	        }
	    },
	    {
	        "city_id" : 1944,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "شواق",
	            "en" : "Shuwaq"
	        }
	    },
	    {
	        "city_id" : 1945,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "آمدان",
	            "en" : "Amdan"
	        }
	    },
	    {
	        "city_id" : 1946,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "رواقا",
	            "en" : "Ruwaqa"
	        }
	    },
	    {
	        "city_id" : 1947,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "ضبا",
	            "en" : "Duba"
	        }
	    },
	    {
	        "city_id" : 1948,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الخريبة",
	            "en" : "Al Khuraybah"
	        }
	    },
	    {
	        "city_id" : 1949,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "صر",
	            "en" : "Surr"
	        }
	    },
	    {
	        "city_id" : 1950,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "صدر",
	            "en" : "Sadr"
	        }
	    },
	    {
	        "city_id" : 1951,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "نابع داما",
	            "en" : "Nabi Dama"
	        }
	    },
	    {
	        "city_id" : 1952,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "قبقاب",
	            "en" : "Qabqab"
	        }
	    },
	    {
	        "city_id" : 1953,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "شرماء",
	            "en" : "Sharma"
	        }
	    },
	    {
	        "city_id" : 1954,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "شغب",
	            "en" : "Shaghab"
	        }
	    },
	    {
	        "city_id" : 1955,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "المويلح",
	            "en" : "Al Muwaylih"
	        }
	    },
	    {
	        "city_id" : 1956,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الديسة",
	            "en" : "Ad Disah"
	        }
	    },
	    {
	        "city_id" : 1957,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "السالمية",
	            "en" : "As Salmiyah"
	        }
	    },
	    {
	        "city_id" : 1958,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المريديسية",
	            "en" : "Al Muraydisiyah"
	        }
	    },
	    {
	        "city_id" : 1959,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصفراء",
	            "en" : "As Safra"
	        }
	    },
	    {
	        "city_id" : 1960,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "خب روضان",
	            "en" : "Khabb Rawdan"
	        }
	    },
	    {
	        "city_id" : 1961,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المنتزة",
	            "en" : "Al Muntazah"
	        }
	    },
	    {
	        "city_id" : 1962,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مشرفة",
	            "en" : "Mushrifah"
	        }
	    },
	    {
	        "city_id" : 1963,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "فيد",
	            "en" : "Fayd"
	        }
	    },
	    {
	        "city_id" : 1964,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "طابة",
	            "en" : "Tabah"
	        }
	    },
	    {
	        "city_id" : 1965,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الكهفة",
	            "en" : "Al Kahafah"
	        }
	    },
	    {
	        "city_id" : 1966,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "عقلة بن داني",
	            "en" : "Uqlat Ibn Dani"
	        }
	    },
	    {
	        "city_id" : 1967,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "عقلة اللبن",
	            "en" : "Uqlat Al Laban"
	        }
	    },
	    {
	        "city_id" : 1968,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الصفراء",
	            "en" : "As Safra"
	        }
	    },
	    {
	        "city_id" : 1969,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البير",
	            "en" : "Al Bir"
	        }
	    },
	    {
	        "city_id" : 1970,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "عقلة ابن كليب",
	            "en" : "Uqlat Ibn Kulayb"
	        }
	    },
	    {
	        "city_id" : 1971,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "عريجاء",
	            "en" : "Uraija"
	        }
	    },
	    {
	        "city_id" : 1972,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المطرفية",
	            "en" : "Al Matrafiyah"
	        }
	    },
	    {
	        "city_id" : 1973,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المضيح",
	            "en" : "Al Mudayyih"
	        }
	    },
	    {
	        "city_id" : 1974,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "غمرة",
	            "en" : "Ghamrah"
	        }
	    },
	    {
	        "city_id" : 1975,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "النعي",
	            "en" : "An Niayy"
	        }
	    },
	    {
	        "city_id" : 1976,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الجحفة",
	            "en" : "Al Juhfah"
	        }
	    },
	    {
	        "city_id" : 1977,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العش",
	            "en" : "Al Ishsh"
	        }
	    },
	    {
	        "city_id" : 1978,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "السبعان",
	            "en" : "As Saban"
	        }
	    },
	    {
	        "city_id" : 1979,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "قصر العبد الله",
	            "en" : "Qasr Al Abdallah"
	        }
	    },
	    {
	        "city_id" : 1980,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الحفيرات",
	            "en" : "Mazari Al Hufayrat"
	        }
	    },
	    {
	        "city_id" : 1981,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشنانة",
	            "en" : "Ash Shananah"
	        }
	    },
	    {
	        "city_id" : 1982,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "السمراء",
	            "en" : "As Samra"
	        }
	    },
	    {
	        "city_id" : 1983,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العطشان",
	            "en" : "Al Atshan"
	        }
	    },
	    {
	        "city_id" : 1984,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "السيق",
	            "en" : "As Siq"
	        }
	    },
	    {
	        "city_id" : 1985,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القعرة",
	            "en" : "Al Qaarah"
	        }
	    },
	    {
	        "city_id" : 1986,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الاسياح",
	            "en" : "Al Asyah"
	        }
	    },
	    {
	        "city_id" : 1987,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "التنومة",
	            "en" : "At Tannumah"
	        }
	    },
	    {
	        "city_id" : 1988,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البرود",
	            "en" : "Al Burud"
	        }
	    },
	    {
	        "city_id" : 1989,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "خصيبة",
	            "en" : "Khusayyibah"
	        }
	    },
	    {
	        "city_id" : 1990,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "طريف",
	            "en" : "Turayf"
	        }
	    },
	    {
	        "city_id" : 1991,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البندرية",
	            "en" : "Al Bandariyah"
	        }
	    },
	    {
	        "city_id" : 1992,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "حنيظل",
	            "en" : "Hunaydhil"
	        }
	    },
	    {
	        "city_id" : 1993,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الجعلة",
	            "en" : "Al Jaalah"
	        }
	    },
	    {
	        "city_id" : 1994,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ابا الدود",
	            "en" : "Aba Ad Dud"
	        }
	    },
	    {
	        "city_id" : 1995,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ضيدة",
	            "en" : "Didah"
	        }
	    },
	    {
	        "city_id" : 1996,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النمرية",
	            "en" : "An Nimriyah"
	        }
	    },
	    {
	        "city_id" : 1997,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المطيوي الشمالي",
	            "en" : "Al Mutaywi Ash Shamali"
	        }
	    },
	    {
	        "city_id" : 1998,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المحلاني",
	            "en" : "Al Mahalani"
	        }
	    },
	    {
	        "city_id" : 1999,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عيون الجواء",
	            "en" : "Uyun Al Jawa"
	        }
	    },
	    {
	        "city_id" : 2000,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أوثال",
	            "en" : "Uthal"
	        }
	    },
	    {
	        "city_id" : 2001,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "غاف الجواء",
	            "en" : "Ghaf Al Jiwa"
	        }
	    },
	    {
	        "city_id" : 2002,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "روض الجواء",
	            "en" : "Rawd Al Jiwa"
	        }
	    },
	    {
	        "city_id" : 2003,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الشهارين",
	            "en" : "Ash Shaharin"
	        }
	    },
	    {
	        "city_id" : 2004,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العاذرية",
	            "en" : "Al Adhiriyah"
	        }
	    },
	    {
	        "city_id" : 2005,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "هجرة أم العراد",
	            "en" : "Hijrat Umm Al Irad"
	        }
	    },
	    {
	        "city_id" : 2006,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العبيلة",
	            "en" : "Al Ubaylah"
	        }
	    },
	    {
	        "city_id" : 2007,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "شبيطة",
	            "en" : "Shubaytah"
	        }
	    },
	    {
	        "city_id" : 2008,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "شوالة",
	            "en" : "Shawwalah"
	        }
	    },
	    {
	        "city_id" : 2009,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "مركز الشيبة",
	            "en" : "Markaz Ash Shaybah"
	        }
	    },
	    {
	        "city_id" : 2010,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "مركز الخيران",
	            "en" : "Markaz Al Khiran"
	        }
	    },
	    {
	        "city_id" : 2011,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "هجرة الطويلة",
	            "en" : "Hijrat At Tawilah"
	        }
	    },
	    {
	        "city_id" : 2012,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "عجائب",
	            "en" : "Ajaib"
	        }
	    },
	    {
	        "city_id" : 2013,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الطربيل",
	            "en" : "At Tarbil"
	        }
	    },
	    {
	        "city_id" : 2014,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "التهيمية",
	            "en" : "At Tuhaymiyah"
	        }
	    },
	    {
	        "city_id" : 2015,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "المقدام",
	            "en" : "Al Miqdam"
	        }
	    },
	    {
	        "city_id" : 2016,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "السبايرة",
	            "en" : "As Sabayirah"
	        }
	    },
	    {
	        "city_id" : 2017,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "السباط",
	            "en" : "As Sabat"
	        }
	    },
	    {
	        "city_id" : 2018,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الجرن",
	            "en" : "Al Jarn"
	        }
	    },
	    {
	        "city_id" : 2019,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "برقاء  الركبان",
	            "en" : "Barqa Al Rukban"
	        }
	    },
	    {
	        "city_id" : 2020,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "البطالية",
	            "en" : "Al Bataliyah"
	        }
	    },
	    {
	        "city_id" : 2021,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "عمرات",
	            "en" : "Amrat"
	        }
	    },
	    {
	        "city_id" : 2022,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "بطحاء",
	            "en" : "Batha"
	        }
	    },
	    {
	        "city_id" : 2023,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العديد",
	            "en" : "Al Adid"
	        }
	    },
	    {
	        "city_id" : 2024,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "عردة",
	            "en" : "Ardah"
	        }
	    },
	    {
	        "city_id" : 2025,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ذعبلوتن",
	            "en" : "Dhablutin"
	        }
	    },
	    {
	        "city_id" : 2026,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الجديدة",
	            "en" : "Al Jadidah"
	        }
	    },
	    {
	        "city_id" : 2027,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "نعلة شدقم",
	            "en" : "Nalat Shadqam"
	        }
	    },
	    {
	        "city_id" : 2028,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الخويس",
	            "en" : "Al Khuways"
	        }
	    },
	    {
	        "city_id" : 2029,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "شدقم",
	            "en" : "Shadqam"
	        }
	    },
	    {
	        "city_id" : 2030,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ابرقية",
	            "en" : "Abraqiyah"
	        }
	    },
	    {
	        "city_id" : 2031,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الفوارة",
	            "en" : "Al Fawwarah"
	        }
	    },
	    {
	        "city_id" : 2032,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ابن سرحان",
	            "en" : "Ibn Sirhan"
	        }
	    },
	    {
	        "city_id" : 2033,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "المرضف",
	            "en" : "Al Muraddaf"
	        }
	    },
	    {
	        "city_id" : 2034,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الحوية",
	            "en" : "Al Hawiyah"
	        }
	    },
	    {
	        "city_id" : 2035,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العضيلية",
	            "en" : "Al Udayliyah"
	        }
	    },
	    {
	        "city_id" : 2036,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العثمانية",
	            "en" : "Al Uthmaniyah"
	        }
	    },
	    {
	        "city_id" : 2037,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "حرض",
	            "en" : "Harad"
	        }
	    },
	    {
	        "city_id" : 2038,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العيون",
	            "en" : "Al Uyun"
	        }
	    },
	    {
	        "city_id" : 2039,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحائط",
	            "en" : "Al Hait"
	        }
	    },
	    {
	        "city_id" : 2040,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفرعة",
	            "en" : "Al Farah"
	        }
	    },
	    {
	        "city_id" : 2041,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "غزال",
	            "en" : "Ghazal"
	        }
	    },
	    {
	        "city_id" : 2042,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السلامة",
	            "en" : "As Salamah"
	        }
	    },
	    {
	        "city_id" : 2044,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المويه الجديد",
	            "en" : "Al Muwayh Al Jadid"
	        }
	    },
	    {
	        "city_id" : 2045,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عبال",
	            "en" : "Abal"
	        }
	    },
	    {
	        "city_id" : 2046,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجعلان",
	            "en" : "Al Jilan"
	        }
	    },
	    {
	        "city_id" : 2047,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حلباء",
	            "en" : "Halaba"
	        }
	    },
	    {
	        "city_id" : 2048,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حداد",
	            "en" : "Haddad"
	        }
	    },
	    {
	        "city_id" : 2049,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السيل الصغير",
	            "en" : "As Sayl As Saghir"
	        }
	    },
	    {
	        "city_id" : 2050,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ريحة",
	            "en" : "Rayhah"
	        }
	    },
	    {
	        "city_id" : 2051,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العرفاء",
	            "en" : "Al Arfa"
	        }
	    },
	    {
	        "city_id" : 2052,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الرحبة",
	            "en" : "Ar Rahbah"
	        }
	    },
	    {
	        "city_id" : 2053,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القهيب",
	            "en" : "Al Quhayb"
	        }
	    },
	    {
	        "city_id" : 2054,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القران",
	            "en" : "Al Qaran"
	        }
	    },
	    {
	        "city_id" : 2055,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحوية",
	            "en" : "Al Hawiyah"
	        }
	    },
	    {
	        "city_id" : 2056,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السيل الكبير",
	            "en" : "As Sayl Al Kabir"
	        }
	    },
	    {
	        "city_id" : 2057,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السوارفية",
	            "en" : "As Sawarqiyah"
	        }
	    },
	    {
	        "city_id" : 2058,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عشيرة الجديدة",
	            "en" : "Ushayrah Al Jadidah"
	        }
	    },
	    {
	        "city_id" : 2059,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العطيف",
	            "en" : "Al Atif"
	        }
	    },
	    {
	        "city_id" : 2060,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القرشيات",
	            "en" : "Al Qurrashiyat"
	        }
	    },
	    {
	        "city_id" : 2061,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عشيرة",
	            "en" : "Ashayrah"
	        }
	    },
	    {
	        "city_id" : 2062,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السايلة",
	            "en" : "As Sayilah"
	        }
	    },
	    {
	        "city_id" : 2063,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفراع",
	            "en" : "Al Fira"
	        }
	    },
	    {
	        "city_id" : 2064,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "النجمة",
	            "en" : "An Najmah"
	        }
	    },
	    {
	        "city_id" : 2065,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العصمان",
	            "en" : "Al Usman"
	        }
	    },
	    {
	        "city_id" : 2066,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العاصد",
	            "en" : "Al Asid"
	        }
	    },
	    {
	        "city_id" : 2067,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "اليعاسيب",
	            "en" : "Al Yaasib"
	        }
	    },
	    {
	        "city_id" : 2068,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشبان",
	            "en" : "Ash Shubban"
	        }
	    },
	    {
	        "city_id" : 2069,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العنع",
	            "en" : "Al Qana"
	        }
	    },
	    {
	        "city_id" : 2070,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الطوال",
	            "en" : "At Tuwal"
	        }
	    },
	    {
	        "city_id" : 2071,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفارعة",
	            "en" : "Al Fariah"
	        }
	    },
	    {
	        "city_id" : 2072,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المريفق",
	            "en" : "Al Murayfiq"
	        }
	    },
	    {
	        "city_id" : 2073,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السد",
	            "en" : "As Sadd"
	        }
	    },
	    {
	        "city_id" : 2074,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مشرق",
	            "en" : "Mashriq"
	        }
	    },
	    {
	        "city_id" : 2075,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البورة",
	            "en" : "Al Burah"
	        }
	    },
	    {
	        "city_id" : 2076,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشرى",
	            "en" : "Ash Shara"
	        }
	    },
	    {
	        "city_id" : 2077,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ريشان",
	            "en" : "Rishan"
	        }
	    },
	    {
	        "city_id" : 2078,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المثان",
	            "en" : "Mithan"
	        }
	    },
	    {
	        "city_id" : 2079,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المناضح",
	            "en" : "Al Manadih"
	        }
	    },
	    {
	        "city_id" : 2080,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العمار",
	            "en" : "Al Umar"
	        }
	    },
	    {
	        "city_id" : 2081,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المجرد",
	            "en" : "Al Majrad"
	        }
	    },
	    {
	        "city_id" : 2082,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "آل عطى",
	            "en" : "Al Ata"
	        }
	    },
	    {
	        "city_id" : 2083,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السلاقا",
	            "en" : "As Salaqa"
	        }
	    },
	    {
	        "city_id" : 2084,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدار الحمراء",
	            "en" : "Al Dar Al Hamra"
	        }
	    },
	    {
	        "city_id" : 2085,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مران",
	            "en" : "Marran"
	        }
	    },
	    {
	        "city_id" : 2086,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحفيرة",
	            "en" : "Al Hufayyirah"
	        }
	    },
	    {
	        "city_id" : 2087,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شقصان",
	            "en" : "Shaqasan"
	        }
	    },
	    {
	        "city_id" : 2088,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مظللة",
	            "en" : "Mudallilah"
	        }
	    },
	    {
	        "city_id" : 2089,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ام النخلة",
	            "en" : "Umm An Nakhlah"
	        }
	    },
	    {
	        "city_id" : 2090,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الذيابات",
	            "en" : "Adh Dhiyabat"
	        }
	    },
	    {
	        "city_id" : 2091,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "غزايل",
	            "en" : "Ghazayil"
	        }
	    },
	    {
	        "city_id" : 2092,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "قيا",
	            "en" : "Qiya"
	        }
	    },
	    {
	        "city_id" : 2093,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "بوا",
	            "en" : "Buwa"
	        }
	    },
	    {
	        "city_id" : 2094,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "عشيرة مكتن",
	            "en" : "Ishayra Maktan"
	        }
	    },
	    {
	        "city_id" : 2095,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحفائر",
	            "en" : "Al Hafair"
	        }
	    },
	    {
	        "city_id" : 2096,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "رمحة",
	            "en" : "Rumhah"
	        }
	    },
	    {
	        "city_id" : 2097,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السلمة",
	            "en" : "As Salamah"
	        }
	    },
	    {
	        "city_id" : 2098,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "حضن",
	            "en" : "Hadan"
	        }
	    },
	    {
	        "city_id" : 2099,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "بئر عن",
	            "en" : "Bir Inn"
	        }
	    },
	    {
	        "city_id" : 2100,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الثابتية",
	            "en" : "Ath Thabitiyah"
	        }
	    },
	    {
	        "city_id" : 2101,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "جليل",
	            "en" : "Jalil"
	        }
	    },
	    {
	        "city_id" : 2102,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "صلبة",
	            "en" : "Sulubah"
	        }
	    },
	    {
	        "city_id" : 2103,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الاخاضر",
	            "en" : "Al Akhadir"
	        }
	    },
	    {
	        "city_id" : 2104,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخرائق",
	            "en" : "Al Kharaiq"
	        }
	    },
	    {
	        "city_id" : 2105,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "كلاخ",
	            "en" : "Kulakh"
	        }
	    },
	    {
	        "city_id" : 2106,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "زبيدة",
	            "en" : "Zubaidah"
	        }
	    },
	    {
	        "city_id" : 2107,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "زعفران",
	            "en" : "Zafaran"
	        }
	    },
	    {
	        "city_id" : 2108,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مرفوض",
	            "en" : "Marfud"
	        }
	    },
	    {
	        "city_id" : 2109,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القضيفة",
	            "en" : "Al Qudaifah"
	        }
	    },
	    {
	        "city_id" : 2110,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "بسل",
	            "en" : "Bisil"
	        }
	    },
	    {
	        "city_id" : 2111,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السديرة",
	            "en" : "As Sudayrah"
	        }
	    },
	    {
	        "city_id" : 2112,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المعقر",
	            "en" : "Al Maqir"
	        }
	    },
	    {
	        "city_id" : 2113,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الطفلان",
	            "en" : "At Tuflan"
	        }
	    },
	    {
	        "city_id" : 2114,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصفاة",
	            "en" : "As Sufah"
	        }
	    },
	    {
	        "city_id" : 2115,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحلقة",
	            "en" : "Al Halqah"
	        }
	    },
	    {
	        "city_id" : 2116,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجدير",
	            "en" : "Al Jadir"
	        }
	    },
	    {
	        "city_id" : 2117,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخليف",
	            "en" : "Al Khulayyif"
	        }
	    },
	    {
	        "city_id" : 2118,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحوطة",
	            "en" : "Al Hawtah"
	        }
	    },
	    {
	        "city_id" : 2119,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "جويرة",
	            "en" : "Juwairah"
	        }
	    },
	    {
	        "city_id" : 2120,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الطفيحاء",
	            "en" : "At Tufayha"
	        }
	    },
	    {
	        "city_id" : 2121,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "جوش",
	            "en" : "Jush"
	        }
	    },
	    {
	        "city_id" : 2122,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القحوم",
	            "en" : "Al Qahum"
	        }
	    },
	    {
	        "city_id" : 2123,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغريب",
	            "en" : "Al Gharib"
	        }
	    },
	    {
	        "city_id" : 2124,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحمراء",
	            "en" : "Al Hamra"
	        }
	    },
	    {
	        "city_id" : 2125,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القصر",
	            "en" : "Al Qasr"
	        }
	    },
	    {
	        "city_id" : 2126,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "اللبة",
	            "en" : "Al Libbah"
	        }
	    },
	    {
	        "city_id" : 2127,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القريع",
	            "en" : "Al Qari"
	        }
	    },
	    {
	        "city_id" : 2128,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشعاعيب",
	            "en" : "Ash Shaaib"
	        }
	    },
	    {
	        "city_id" : 2129,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ميسان",
	            "en" : "Maysan"
	        }
	    },
	    {
	        "city_id" : 2130,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "قها",
	            "en" : "Qaha"
	        }
	    },
	    {
	        "city_id" : 2131,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "برحرح",
	            "en" : "Barahrah"
	        }
	    },
	    {
	        "city_id" : 2132,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصور",
	            "en" : "As Sur"
	        }
	    },
	    {
	        "city_id" : 2133,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ابو راكة",
	            "en" : "Abu Rakah"
	        }
	    },
	    {
	        "city_id" : 2134,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفريع",
	            "en" : "Al Furay"
	        }
	    },
	    {
	        "city_id" : 2135,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الوطاة",
	            "en" : "Al Watah"
	        }
	    },
	    {
	        "city_id" : 2136,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القويعية",
	            "en" : "Al Quwayiyah"
	        }
	    },
	    {
	        "city_id" : 2137,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "إبن غنام",
	            "en" : "Ibn Ghannam"
	        }
	    },
	    {
	        "city_id" : 2138,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ذواد",
	            "en" : "Dhawwad"
	        }
	    },
	    {
	        "city_id" : 2139,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المبرك",
	            "en" : "Al Mabrak"
	        }
	    },
	    {
	        "city_id" : 2140,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العلاوة",
	            "en" : "Al Ilawah"
	        }
	    },
	    {
	        "city_id" : 2141,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحائرية",
	            "en" : "Al Hairiyah"
	        }
	    },
	    {
	        "city_id" : 2142,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "دعيمر",
	            "en" : "Duaymir"
	        }
	    },
	    {
	        "city_id" : 2143,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "وساعد",
	            "en" : "Wusaad"
	        }
	    },
	    {
	        "city_id" : 2144,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المدرة",
	            "en" : "Al Midarah"
	        }
	    },
	    {
	        "city_id" : 2145,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الديرة",
	            "en" : "Ad Dayyirah"
	        }
	    },
	    {
	        "city_id" : 2146,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الخالدية",
	            "en" : "Al Khalidiyah"
	        }
	    },
	    {
	        "city_id" : 2147,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغرابة",
	            "en" : "Al Ghirabah"
	        }
	    },
	    {
	        "city_id" : 2148,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العلبة",
	            "en" : "Al Ilabah"
	        }
	    },
	    {
	        "city_id" : 2149,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العابسية",
	            "en" : "Al Abisiyah"
	        }
	    },
	    {
	        "city_id" : 2150,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العرقين",
	            "en" : "Al Irqayn"
	        }
	    },
	    {
	        "city_id" : 2151,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغرمول",
	            "en" : "Al Gharmul"
	        }
	    },
	    {
	        "city_id" : 2152,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العصلة",
	            "en" : "Al Isalah"
	        }
	    },
	    {
	        "city_id" : 2153,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "زلاقة",
	            "en" : "Zallaqah"
	        }
	    },
	    {
	        "city_id" : 2154,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحشفة",
	            "en" : "Al Hashafah"
	        }
	    },
	    {
	        "city_id" : 2155,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ابو مظلة",
	            "en" : "Abu Madhallah"
	        }
	    },
	    {
	        "city_id" : 2156,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "تربه",
	            "en" : "Turbah"
	        }
	    },
	    {
	        "city_id" : 2157,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحشرج",
	            "en" : "Al Hashraj"
	        }
	    },
	    {
	        "city_id" : 2158,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شعر",
	            "en" : "Shir"
	        }
	    },
	    {
	        "city_id" : 2159,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الربيعية",
	            "en" : "Ar Rabiiyah"
	        }
	    },
	    {
	        "city_id" : 2160,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "بئر ابن رشدان",
	            "en" : "Bir Ibn Rashdan"
	        }
	    },
	    {
	        "city_id" : 2161,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "القديح",
	            "en" : "Al Qudayh"
	        }
	    },
	    {
	        "city_id" : 2162,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الخويلدية",
	            "en" : "Al Khuwildiyah"
	        }
	    },
	    {
	        "city_id" : 2163,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الدريدي",
	            "en" : "Ad Duraidy"
	        }
	    },
	    {
	        "city_id" : 2164,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الخترشية",
	            "en" : "Al Khatrashiyah"
	        }
	    },
	    {
	        "city_id" : 2165,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ابو معن",
	            "en" : "Abu Maan"
	        }
	    },
	    {
	        "city_id" : 2166,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ام الساهك",
	            "en" : "Umm As Sahik"
	        }
	    },
	    {
	        "city_id" : 2167,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "صفوى",
	            "en" : "Safwa"
	        }
	    },
	    {
	        "city_id" : 2168,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "حزم ام الساهك",
	            "en" : "Hazam Umm As Sahik"
	        }
	    },
	    {
	        "city_id" : 2169,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الفرش",
	            "en" : "Al Farsh"
	        }
	    },
	    {
	        "city_id" : 2170,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الجش",
	            "en" : "Al Jish"
	        }
	    },
	    {
	        "city_id" : 2171,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "عنك",
	            "en" : "Inak"
	        }
	    },
	    {
	        "city_id" : 2172,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "حلة محيش",
	            "en" : "Hilat Muhish"
	        }
	    },
	    {
	        "city_id" : 2173,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "التوبي",
	            "en" : "At Tubi"
	        }
	    },
	    {
	        "city_id" : 2174,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الملاحة",
	            "en" : "Al Milahah"
	        }
	    },
	    {
	        "city_id" : 2175,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العصيلي",
	            "en" : "Al Usayli"
	        }
	    },
	    {
	        "city_id" : 2176,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "دارين",
	            "en" : "Darin"
	        }
	    },
	    {
	        "city_id" : 2177,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العوامية",
	            "en" : "Al Awwamiyah"
	        }
	    },
	    {
	        "city_id" : 2178,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "النابية",
	            "en" : "An Nabiyah"
	        }
	    },
	    {
	        "city_id" : 2179,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الزور",
	            "en" : "Az Zawr"
	        }
	    },
	    {
	        "city_id" : 2180,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الفريع",
	            "en" : "Al Furay"
	        }
	    },
	    {
	        "city_id" : 2181,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ابو مراغ",
	            "en" : "Abu Maragh"
	        }
	    },
	    {
	        "city_id" : 2182,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شرائع المجاهدين",
	            "en" : "Sharai Al Mujahidin"
	        }
	    },
	    {
	        "city_id" : 2183,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "التنعيم",
	            "en" : "At Tanim"
	        }
	    },
	    {
	        "city_id" : 2184,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الشرف",
	            "en" : "Ash Sharaf"
	        }
	    },
	    {
	        "city_id" : 2185,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشرائع",
	            "en" : "Ash Sharai"
	        }
	    },
	    {
	        "city_id" : 2186,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الريجة",
	            "en" : "Ar Rayjah"
	        }
	    },
	    {
	        "city_id" : 2187,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "قابل عيفان",
	            "en" : "Qabil Ifan"
	        }
	    },
	    {
	        "city_id" : 2188,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "بني عمير",
	            "en" : "Bani Umayr"
	        }
	    },
	    {
	        "city_id" : 2189,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "البجيدي",
	            "en" : "Al Bijaydi"
	        }
	    },
	    {
	        "city_id" : 2190,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "قرى الصدر",
	            "en" : "Qura As Sadr"
	        }
	    },
	    {
	        "city_id" : 2191,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المضيق",
	            "en" : "Al Madiq"
	        }
	    },
	    {
	        "city_id" : 2192,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المجاريش",
	            "en" : "Al Majarish"
	        }
	    },
	    {
	        "city_id" : 2193,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحسن",
	            "en" : "Al Hasan"
	        }
	    },
	    {
	        "city_id" : 2194,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشدقاء",
	            "en" : "Ash Shadqa"
	        }
	    },
	    {
	        "city_id" : 2195,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الريقة",
	            "en" : "Ar Riqah"
	        }
	    },
	    {
	        "city_id" : 2196,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الزيمة",
	            "en" : "Az Zaymah"
	        }
	    },
	    {
	        "city_id" : 2197,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشميسي",
	            "en" : "Ash Shumaysi"
	        }
	    },
	    {
	        "city_id" : 2198,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ام حبيتر",
	            "en" : "Umm Hubaytir"
	        }
	    },
	    {
	        "city_id" : 2199,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الصرف",
	            "en" : "As Sarf"
	        }
	    },
	    {
	        "city_id" : 2200,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "شداد",
	            "en" : "Shadad"
	        }
	    },
	    {
	        "city_id" : 2201,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ام الزلة",
	            "en" : "Umm Al Zillah"
	        }
	    },
	    {
	        "city_id" : 2202,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "بني دعد",
	            "en" : "Bani Daad"
	        }
	    },
	    {
	        "city_id" : 2203,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ام الراكة",
	            "en" : "Umm Ar Rakah"
	        }
	    },
	    {
	        "city_id" : 2204,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الشعيبة",
	            "en" : "Ash Shaibah"
	        }
	    },
	    {
	        "city_id" : 2205,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الدحيلة",
	            "en" : "Ad Duhaylah"
	        }
	    },
	    {
	        "city_id" : 2206,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الروضة",
	            "en" : "Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 2207,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "جعرانة",
	            "en" : "Juranah"
	        }
	    },
	    {
	        "city_id" : 2208,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "طريف",
	            "en" : "Turaif"
	        }
	    },
	    {
	        "city_id" : 2209,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "الجراني",
	            "en" : "Al Jirani"
	        }
	    },
	    {
	        "city_id" : 2210,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "الحماد",
	            "en" : "Al Hamad"
	        }
	    },
	    {
	        "city_id" : 2211,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "نعيج",
	            "en" : "Nuayj"
	        }
	    },
	    {
	        "city_id" : 2212,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "قاع الحنو",
	            "en" : "Qa Al Hinu"
	        }
	    },
	    {
	        "city_id" : 2213,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "عرعر",
	            "en" : "Arar"
	        }
	    },
	    {
	        "city_id" : 2214,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "مركز الصحن",
	            "en" : "Markaz As Sahan"
	        }
	    },
	    {
	        "city_id" : 2215,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "العويقلية",
	            "en" : "Al Uwayqilah"
	        }
	    },
	    {
	        "city_id" : 2216,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "أبا الرواث",
	            "en" : "Aba Ar Rawath"
	        }
	    },
	    {
	        "city_id" : 2217,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "الكاسب",
	            "en" : "Al Kasib"
	        }
	    },
	    {
	        "city_id" : 2218,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "أم خنصر",
	            "en" : "Umm Khunsur"
	        }
	    },
	    {
	        "city_id" : 2219,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "حزم الجلاميد",
	            "en" : "Hazm Al Jalamid"
	        }
	    },
	    {
	        "city_id" : 2220,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "الدويد",
	            "en" : "Ad Duwayd"
	        }
	    },
	    {
	        "city_id" : 2221,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "جديدة عرعر",
	            "en" : "Jadidat Arar"
	        }
	    },
	    {
	        "city_id" : 2222,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "كاف",
	            "en" : "Kaf"
	        }
	    },
	    {
	        "city_id" : 2223,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "القرقر",
	            "en" : "Al Qarqar"
	        }
	    },
	    {
	        "city_id" : 2224,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "إثرة",
	            "en" : "Ithrah"
	        }
	    },
	    {
	        "city_id" : 2225,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "غطي",
	            "en" : "Ghutayy"
	        }
	    },
	    {
	        "city_id" : 2226,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "القريات",
	            "en" : "Al Qurayyat"
	        }
	    },
	    {
	        "city_id" : 2227,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "عين الحواسي",
	            "en" : "Ayn Al Hawasi"
	        }
	    },
	    {
	        "city_id" : 2228,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "قليب خضر",
	            "en" : "Qulayyib Khudr"
	        }
	    },
	    {
	        "city_id" : 2229,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "العيساوية",
	            "en" : "Al Isawiyah"
	        }
	    },
	    {
	        "city_id" : 2230,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الحديثة",
	            "en" : "Al Hadithah"
	        }
	    },
	    {
	        "city_id" : 2231,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الناصفة",
	            "en" : "An Nasifah"
	        }
	    },
	    {
	        "city_id" : 2232,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الشقيق",
	            "en" : "Ash Saqayq"
	        }
	    },
	    {
	        "city_id" : 2233,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الحوي",
	            "en" : "Al Hawi"
	        }
	    },
	    {
	        "city_id" : 2234,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "صوير",
	            "en" : "Suwayr"
	        }
	    },
	    {
	        "city_id" : 2235,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "حدرج",
	            "en" : "Hidrij"
	        }
	    },
	    {
	        "city_id" : 2236,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "ام طليحة",
	            "en" : "Umm Tulayhah"
	        }
	    },
	    {
	        "city_id" : 2237,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "سكاكا",
	            "en" : "Sakaka"
	        }
	    },
	    {
	        "city_id" : 2238,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "اللقايط",
	            "en" : "Al Laqayit"
	        }
	    },
	    {
	        "city_id" : 2239,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "صبيحة",
	            "en" : "Subayhah"
	        }
	    },
	    {
	        "city_id" : 2240,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "طبرجل",
	            "en" : "Tubarjal"
	        }
	    },
	    {
	        "city_id" : 2241,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الفياض",
	            "en" : "Al Fiyad"
	        }
	    },
	    {
	        "city_id" : 2242,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "قارا",
	            "en" : "Qara"
	        }
	    },
	    {
	        "city_id" : 2243,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الثنية",
	            "en" : "Ath Thaniyah"
	        }
	    },
	    {
	        "city_id" : 2244,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "ام نخيلة",
	            "en" : "Umm Nukhaylah"
	        }
	    },
	    {
	        "city_id" : 2245,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "المرير",
	            "en" : "A Murayr"
	        }
	    },
	    {
	        "city_id" : 2246,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "زلوم",
	            "en" : "Zallum"
	        }
	    },
	    {
	        "city_id" : 2247,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "النبك ابو قصر",
	            "en" : "An Nabk Abu Qasr"
	        }
	    },
	    {
	        "city_id" : 2248,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "طلعة عمار",
	            "en" : "Talat Ammar"
	        }
	    },
	    {
	        "city_id" : 2249,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "عذفاء",
	            "en" : "Adhfa"
	        }
	    },
	    {
	        "city_id" : 2250,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "خوعاء",
	            "en" : "Khawa"
	        }
	    },
	    {
	        "city_id" : 2251,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الشويحطية",
	            "en" : "Ash Shuwayhitiyah"
	        }
	    },
	    {
	        "city_id" : 2252,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "مركز أم الحيران",
	            "en" : "Markaz Umm Al Hiran"
	        }
	    },
	    {
	        "city_id" : 2253,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "مركز سماح الجديد",
	            "en" : "Markaz Samah Al Jadid"
	        }
	    },
	    {
	        "city_id" : 2254,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "مركز الظهرة",
	            "en" : "Markaz Adh Dhahrah"
	        }
	    },
	    {
	        "city_id" : 2255,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "إبن سوقي",
	            "en" : "Ibn Suqi"
	        }
	    },
	    {
	        "city_id" : 2256,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "رفحاء",
	            "en" : "Rafha"
	        }
	    },
	    {
	        "city_id" : 2257,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "نصاب",
	            "en" : "Nisab"
	        }
	    },
	    {
	        "city_id" : 2258,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "سماح",
	            "en" : "Samah"
	        }
	    },
	    {
	        "city_id" : 2259,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "لوقة",
	            "en" : "Lawqah"
	        }
	    },
	    {
	        "city_id" : 2260,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "ام رضمة",
	            "en" : "Umm Rudmah"
	        }
	    },
	    {
	        "city_id" : 2261,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "ابن لغيصم",
	            "en" : "Ibn Lughaisim"
	        }
	    },
	    {
	        "city_id" : 2262,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "روضة هباس",
	            "en" : "Rawdat Habbas"
	        }
	    },
	    {
	        "city_id" : 2263,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "التمياط",
	            "en" : "Timiat"
	        }
	    },
	    {
	        "city_id" : 2264,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "إبن شريم",
	            "en" : "Ibn Shuraym"
	        }
	    },
	    {
	        "city_id" : 2265,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "الشعبة",
	            "en" : "Ash Shubah"
	        }
	    },
	    {
	        "city_id" : 2266,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "لينة",
	            "en" : "Linah"
	        }
	    },
	    {
	        "city_id" : 2267,
	        "region_id" : 1,
	        "name" : {
	            "ar" : "المركوز",
	            "en" : "Al Markuz"
	        }
	    },
	    {
	        "city_id" : 2268,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "دومة الجندل",
	            "en" : "Dawmat Al Jandal"
	        }
	    },
	    {
	        "city_id" : 2269,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "ميقوع",
	            "en" : "Mayqu"
	        }
	    },
	    {
	        "city_id" : 2270,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الأضارع",
	            "en" : "Al Adari"
	        }
	    },
	    {
	        "city_id" : 2271,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "صفان",
	            "en" : "Safan"
	        }
	    },
	    {
	        "city_id" : 2272,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الرديفة",
	            "en" : "Ar Radifah"
	        }
	    },
	    {
	        "city_id" : 2273,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "ابو عجرم",
	            "en" : "Abu Ajram"
	        }
	    },
	    {
	        "city_id" : 2274,
	        "region_id" : 2,
	        "name" : {
	            "ar" : "الطوير",
	            "en" : "At Tuwayr"
	        }
	    },
	    {
	        "city_id" : 2275,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "صديان",
	            "en" : "Sadyan"
	        }
	    },
	    {
	        "city_id" : 2276,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الوسيطاء",
	            "en" : "Al Wasayta"
	        }
	    },
	    {
	        "city_id" : 2277,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البير",
	            "en" : "Al Bir"
	        }
	    },
	    {
	        "city_id" : 2278,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البويطن",
	            "en" : "Al Buwaytin"
	        }
	    },
	    {
	        "city_id" : 2279,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدائع العش",
	            "en" : "Badai Al Ishsh"
	        }
	    },
	    {
	        "city_id" : 2280,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "صحي",
	            "en" : "Sahayy"
	        }
	    },
	    {
	        "city_id" : 2281,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الوبيرية",
	            "en" : "Al Wubayriyah"
	        }
	    },
	    {
	        "city_id" : 2282,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "قصيريات",
	            "en" : "Qusayriyat"
	        }
	    },
	    {
	        "city_id" : 2283,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "سعيدان",
	            "en" : "Suaydan"
	        }
	    },
	    {
	        "city_id" : 2284,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "جفيفاء",
	            "en" : "Jufayfa"
	        }
	    },
	    {
	        "city_id" : 2285,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الغمياء",
	            "en" : "Al Ghamya"
	        }
	    },
	    {
	        "city_id" : 2286,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الفرحانية",
	            "en" : "Al Farhaniyah"
	        }
	    },
	    {
	        "city_id" : 2287,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المليح",
	            "en" : "Al Mulayh"
	        }
	    },
	    {
	        "city_id" : 2288,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "حفيرة الشقيق",
	            "en" : "Hafirat Ash Shaqayq"
	        }
	    },
	    {
	        "city_id" : 2289,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "جرمة",
	            "en" : "Jurumah"
	        }
	    },
	    {
	        "city_id" : 2290,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "السفن",
	            "en" : "As Sufun"
	        }
	    },
	    {
	        "city_id" : 2291,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "منيفة القاعد",
	            "en" : "Munifat Al Qaid"
	        }
	    },
	    {
	        "city_id" : 2292,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القاعد",
	            "en" : "Al Qaid"
	        }
	    },
	    {
	        "city_id" : 2293,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الطوال",
	            "en" : "At Tuwal"
	        }
	    },
	    {
	        "city_id" : 2294,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشعفة",
	            "en" : "Ash Shaafah"
	        }
	    },
	    {
	        "city_id" : 2295,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الجلف",
	            "en" : "Al Jilf"
	        }
	    },
	    {
	        "city_id" : 2296,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الهرير",
	            "en" : "Al Hurayr"
	        }
	    },
	    {
	        "city_id" : 2297,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "طوية",
	            "en" : "Tuwayyah"
	        }
	    },
	    {
	        "city_id" : 2298,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البدع",
	            "en" : "Al Bid"
	        }
	    },
	    {
	        "city_id" : 2299,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الجديدة",
	            "en" : "Al Judayyidah"
	        }
	    },
	    {
	        "city_id" : 2300,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الرويع",
	            "en" : "Ar Ruway"
	        }
	    },
	    {
	        "city_id" : 2301,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العضدي",
	            "en" : "Al Iddi"
	        }
	    },
	    {
	        "city_id" : 2302,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المرمى",
	            "en" : "Al Marma"
	        }
	    },
	    {
	        "city_id" : 2303,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المندسة الشرقية",
	            "en" : "Al Mindassah Ash Sharqiyah"
	        }
	    },
	    {
	        "city_id" : 2304,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "التيم",
	            "en" : "At Tim"
	        }
	    },
	    {
	        "city_id" : 2305,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القليبين",
	            "en" : "Al Qulaybayn"
	        }
	    },
	    {
	        "city_id" : 2306,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "رينبة",
	            "en" : "Raynibah"
	        }
	    },
	    {
	        "city_id" : 2307,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المكظم",
	            "en" : "Al Mukadhum"
	        }
	    },
	    {
	        "city_id" : 2308,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحميراء",
	            "en" : "Al Humayra"
	        }
	    },
	    {
	        "city_id" : 2309,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الغار",
	            "en" : "Al Ghar"
	        }
	    },
	    {
	        "city_id" : 2310,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المعيقلات",
	            "en" : "Al Muayqilat"
	        }
	    },
	    {
	        "city_id" : 2311,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المويكر",
	            "en" : "Al Muwaykir"
	        }
	    },
	    {
	        "city_id" : 2312,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المكظم",
	            "en" : "Al Makdham"
	        }
	    },
	    {
	        "city_id" : 2313,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الدارة",
	            "en" : "Al Darah"
	        }
	    },
	    {
	        "city_id" : 2314,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشبيكة",
	            "en" : "Ash Shubaykah"
	        }
	    },
	    {
	        "city_id" : 2315,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المبعوثة",
	            "en" : "Al Mabuthah"
	        }
	    },
	    {
	        "city_id" : 2316,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الجفر",
	            "en" : "Al Jafur"
	        }
	    },
	    {
	        "city_id" : 2317,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المعترضة",
	            "en" : "Al Mutaridah"
	        }
	    },
	    {
	        "city_id" : 2318,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "اللقيطه",
	            "en" : "Al Liqitah"
	        }
	    },
	    {
	        "city_id" : 2319,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "منشار",
	            "en" : "Minshar"
	        }
	    },
	    {
	        "city_id" : 2320,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "سهلة بدنة",
	            "en" : "Sahlat Badanah"
	        }
	    },
	    {
	        "city_id" : 2321,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدائع مريفق",
	            "en" : "Badai Murayfiq"
	        }
	    },
	    {
	        "city_id" : 2322,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "السليل",
	            "en" : "As Sulayyil"
	        }
	    },
	    {
	        "city_id" : 2323,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الصليعاء",
	            "en" : "As Sulaya"
	        }
	    },
	    {
	        "city_id" : 2324,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الصبيحية",
	            "en" : "As Subayhiyah"
	        }
	    },
	    {
	        "city_id" : 2325,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الأثلة",
	            "en" : "Al Athlah"
	        }
	    },
	    {
	        "city_id" : 2326,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "حويان",
	            "en" : "Huwayyan"
	        }
	    },
	    {
	        "city_id" : 2327,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المبيدع",
	            "en" : "Al Mubaydi"
	        }
	    },
	    {
	        "city_id" : 2328,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المبدع",
	            "en" : "Al Mabda"
	        }
	    },
	    {
	        "city_id" : 2329,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "كلوة",
	            "en" : "Kilwah"
	        }
	    },
	    {
	        "city_id" : 2330,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشملي",
	            "en" : "Ash Shamli"
	        }
	    },
	    {
	        "city_id" : 2331,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العمائر",
	            "en" : "Al Amair"
	        }
	    },
	    {
	        "city_id" : 2332,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشملي",
	            "en" : "Ash Shamli"
	        }
	    },
	    {
	        "city_id" : 2333,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المسلسل",
	            "en" : "Al Musalsal"
	        }
	    },
	    {
	        "city_id" : 2334,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "سبطر",
	            "en" : "Sibutar"
	        }
	    },
	    {
	        "city_id" : 2335,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحفيرة",
	            "en" : "Al Hufayrah"
	        }
	    },
	    {
	        "city_id" : 2336,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "غرمول العويد",
	            "en" : "Ghurmul Al Uwayd"
	        }
	    },
	    {
	        "city_id" : 2337,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحامرية",
	            "en" : "Al Hamiriyah"
	        }
	    },
	    {
	        "city_id" : 2338,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الخبة",
	            "en" : "Al Khabbah"
	        }
	    },
	    {
	        "city_id" : 2339,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحطي",
	            "en" : "Al Hati"
	        }
	    },
	    {
	        "city_id" : 2340,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الصنينا",
	            "en" : "As Sunayna"
	        }
	    },
	    {
	        "city_id" : 2341,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "دليهان",
	            "en" : "Dulayhan"
	        }
	    },
	    {
	        "city_id" : 2342,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشقيق",
	            "en" : "Ash Shuqayq"
	        }
	    },
	    {
	        "city_id" : 2343,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "ابا الحيران",
	            "en" : "Aba Al Hiran"
	        }
	    },
	    {
	        "city_id" : 2344,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "قليب الاطرم",
	            "en" : "Qalib Al Atram"
	        }
	    },
	    {
	        "city_id" : 2345,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بيضاء نثيل",
	            "en" : "Bayda Nathil"
	        }
	    },
	    {
	        "city_id" : 2346,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "قناء",
	            "en" : "Qina"
	        }
	    },
	    {
	        "city_id" : 2347,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المشيطية",
	            "en" : "Al Mushaytiyah"
	        }
	    },
	    {
	        "city_id" : 2348,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "التربية",
	            "en" : "At Turbiyah"
	        }
	    },
	    {
	        "city_id" : 2349,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الخطة",
	            "en" : "Al Khuttah"
	        }
	    },
	    {
	        "city_id" : 2350,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "جبه",
	            "en" : "Jubbah"
	        }
	    },
	    {
	        "city_id" : 2351,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "موقق",
	            "en" : "Mawqaq"
	        }
	    },
	    {
	        "city_id" : 2352,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "عقلة بن جبرين",
	            "en" : "Uqlat Bin Jabrin"
	        }
	    },
	    {
	        "city_id" : 2353,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "ام القلبان",
	            "en" : "Umm Al Qulban"
	        }
	    },
	    {
	        "city_id" : 2354,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مزارع السحل",
	            "en" : "Mazari As Sihhal"
	        }
	    },
	    {
	        "city_id" : 2355,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مزارع الرغلية",
	            "en" : "Mazari Ar Righliyah"
	        }
	    },
	    {
	        "city_id" : 2356,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الطليحة",
	            "en" : "At Tulayhah"
	        }
	    },
	    {
	        "city_id" : 2357,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مزارع الصفيا",
	            "en" : "Mazari As Safya"
	        }
	    },
	    {
	        "city_id" : 2358,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البدائع",
	            "en" : "Al Badai"
	        }
	    },
	    {
	        "city_id" : 2359,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الهمجة",
	            "en" : "Al Hamjah"
	        }
	    },
	    {
	        "city_id" : 2360,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المهينية",
	            "en" : "Al Mihayniyah"
	        }
	    },
	    {
	        "city_id" : 2361,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الجابرية",
	            "en" : "Al Jabriyah"
	        }
	    },
	    {
	        "city_id" : 2362,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الوعيلي",
	            "en" : "Al Wuayli"
	        }
	    },
	    {
	        "city_id" : 2363,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مزارع الرخيصية",
	            "en" : "Mazari Ar Rikhaysiyah"
	        }
	    },
	    {
	        "city_id" : 2364,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مزارع بيط",
	            "en" : "Mazari Bayt"
	        }
	    },
	    {
	        "city_id" : 2365,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الجثياثة",
	            "en" : "Al Jithyathah"
	        }
	    },
	    {
	        "city_id" : 2366,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القصعاء",
	            "en" : "Al Qasa"
	        }
	    },
	    {
	        "city_id" : 2367,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "اللويبدة",
	            "en" : "Al Luwaybidah"
	        }
	    },
	    {
	        "city_id" : 2368,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الجثامية",
	            "en" : "Al Jithamiyyah"
	        }
	    },
	    {
	        "city_id" : 2369,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "السويفلة",
	            "en" : "As Suwayfilah"
	        }
	    },
	    {
	        "city_id" : 2370,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بقعاء",
	            "en" : "Baqa"
	        }
	    },
	    {
	        "city_id" : 2371,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الاجفر",
	            "en" : "Al Ajfar"
	        }
	    },
	    {
	        "city_id" : 2372,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "تربه",
	            "en" : "Turubah"
	        }
	    },
	    {
	        "city_id" : 2373,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "ضبيعة",
	            "en" : "Dubayah"
	        }
	    },
	    {
	        "city_id" : 2374,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشيحية",
	            "en" : "Ash Shihiyah"
	        }
	    },
	    {
	        "city_id" : 2375,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشعيبة",
	            "en" : "Ash Shuaybah"
	        }
	    },
	    {
	        "city_id" : 2376,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بقعاء الشرقية",
	            "en" : "Baqa Ash Sharqiyah"
	        }
	    },
	    {
	        "city_id" : 2377,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الثنيان",
	            "en" : "Ath Thinayyan"
	        }
	    },
	    {
	        "city_id" : 2378,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الجديدة",
	            "en" : "Al Jadidah"
	        }
	    },
	    {
	        "city_id" : 2379,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشعلانية",
	            "en" : "Ash Shalaniyah"
	        }
	    },
	    {
	        "city_id" : 2380,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "طلحاء",
	            "en" : "Talha"
	        }
	    },
	    {
	        "city_id" : 2381,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "العمود",
	            "en" : "Al Amud"
	        }
	    },
	    {
	        "city_id" : 2382,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الحميرة",
	            "en" : "Al Humayrah"
	        }
	    },
	    {
	        "city_id" : 2383,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الغال",
	            "en" : "Al Ghal"
	        }
	    },
	    {
	        "city_id" : 2384,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "عينونة",
	            "en" : "Aynunah"
	        }
	    },
	    {
	        "city_id" : 2385,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الحشا",
	            "en" : "Al Hasha"
	        }
	    },
	    {
	        "city_id" : 2386,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "عينونة",
	            "en" : "Aynunah"
	        }
	    },
	    {
	        "city_id" : 2387,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "بئر عودة",
	            "en" : "Bir Audah"
	        }
	    },
	    {
	        "city_id" : 2388,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الجدة",
	            "en" : "Al Jiddah"
	        }
	    },
	    {
	        "city_id" : 2389,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مطربة",
	            "en" : "Mutribah"
	        }
	    },
	    {
	        "city_id" : 2390,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الطرفية الغربية",
	            "en" : "At Turfiyah Al Gharbiyah"
	        }
	    },
	    {
	        "city_id" : 2391,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البديعة",
	            "en" : "Al Bidayyiah"
	        }
	    },
	    {
	        "city_id" : 2392,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عريفجان ساحوق",
	            "en" : "Urayfjan Sahuq"
	        }
	    },
	    {
	        "city_id" : 2393,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصليبي",
	            "en" : "As Sulaybi"
	        }
	    },
	    {
	        "city_id" : 2394,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الزهيرية",
	            "en" : "Az Zihayriyah"
	        }
	    },
	    {
	        "city_id" : 2395,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "روضة قرادان",
	            "en" : "Rawdat Qiradan"
	        }
	    },
	    {
	        "city_id" : 2396,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أبانات",
	            "en" : "Abanat"
	        }
	    },
	    {
	        "city_id" : 2397,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحنينية",
	            "en" : "Al Hinayniyah"
	        }
	    },
	    {
	        "city_id" : 2398,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "خضراء",
	            "en" : "Khadra"
	        }
	    },
	    {
	        "city_id" : 2399,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ضليع رشيد",
	            "en" : "Dulay Rashid"
	        }
	    },
	    {
	        "city_id" : 2400,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الخطيم",
	            "en" : "Al Khutaym"
	        }
	    },
	    {
	        "city_id" : 2401,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عطا",
	            "en" : "Ata"
	        }
	    },
	    {
	        "city_id" : 2402,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عطي",
	            "en" : "Utayy"
	        }
	    },
	    {
	        "city_id" : 2403,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الهمجة",
	            "en" : "Al Hamjah"
	        }
	    },
	    {
	        "city_id" : 2404,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "رفائع اللهيب",
	            "en" : "Rufai Al Luhayb"
	        }
	    },
	    {
	        "city_id" : 2405,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الجرذاوية",
	            "en" : "Al Jardhawiyah"
	        }
	    },
	    {
	        "city_id" : 2406,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الركنة",
	            "en" : "Ar Ruknah"
	        }
	    },
	    {
	        "city_id" : 2407,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البتراء",
	            "en" : "Al Batra"
	        }
	    },
	    {
	        "city_id" : 2408,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العقلة",
	            "en" : "Al Uqlah"
	        }
	    },
	    {
	        "city_id" : 2409,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحوطة",
	            "en" : "Al Hawtah"
	        }
	    },
	    {
	        "city_id" : 2410,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العبيل",
	            "en" : "Al Ubayl"
	        }
	    },
	    {
	        "city_id" : 2411,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الوسيطاء",
	            "en" : "Al Wusayta"
	        }
	    },
	    {
	        "city_id" : 2412,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "نفجة",
	            "en" : "Nafjah"
	        }
	    },
	    {
	        "city_id" : 2413,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الغيدانية",
	            "en" : "Al Ghaydaniyah"
	        }
	    },
	    {
	        "city_id" : 2414,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العبلة",
	            "en" : "Al Abla"
	        }
	    },
	    {
	        "city_id" : 2415,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الجراوة",
	            "en" : "Mazari Al Jirawah"
	        }
	    },
	    {
	        "city_id" : 2416,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "السميراء",
	            "en" : "As Sumayra"
	        }
	    },
	    {
	        "city_id" : 2417,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الرضيمة",
	            "en" : "Al Rudaymah"
	        }
	    },
	    {
	        "city_id" : 2418,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القوعي",
	            "en" : "Al Qawi"
	        }
	    },
	    {
	        "city_id" : 2419,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع العقل",
	            "en" : "Mazari Al Aql"
	        }
	    },
	    {
	        "city_id" : 2420,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "دخنة",
	            "en" : "Dukhnah"
	        }
	    },
	    {
	        "city_id" : 2421,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الرس",
	            "en" : "Ar Rass"
	        }
	    },
	    {
	        "city_id" : 2422,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشنانة",
	            "en" : "Ash Shinanah"
	        }
	    },
	    {
	        "city_id" : 2423,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشورقية",
	            "en" : "Ash Shawraqiyah"
	        }
	    },
	    {
	        "city_id" : 2424,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القاع",
	            "en" : "Al Qa"
	        }
	    },
	    {
	        "city_id" : 2425,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الروضة",
	            "en" : "Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 2426,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الطلعة",
	            "en" : "At Talah"
	        }
	    },
	    {
	        "city_id" : 2427,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مظيفيرة",
	            "en" : "Mudhayfirah"
	        }
	    },
	    {
	        "city_id" : 2428,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الوشحاء",
	            "en" : "Al Washha"
	        }
	    },
	    {
	        "city_id" : 2429,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الهيشة",
	            "en" : "Al Hishah"
	        }
	    },
	    {
	        "city_id" : 2430,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحزم",
	            "en" : "Al Hazm"
	        }
	    },
	    {
	        "city_id" : 2431,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العدان",
	            "en" : "Al Adan"
	        }
	    },
	    {
	        "city_id" : 2432,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عين العقيلي",
	            "en" : "Ayn Al Uqayli"
	        }
	    },
	    {
	        "city_id" : 2433,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "روضة اللواف",
	            "en" : "Rawdat Al Lawwaf"
	        }
	    },
	    {
	        "city_id" : 2434,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العكرشية",
	            "en" : "Al Ikrashiyah"
	        }
	    },
	    {
	        "city_id" : 2435,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "زهلولة",
	            "en" : "Zihlulah"
	        }
	    },
	    {
	        "city_id" : 2436,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الرحيمية",
	            "en" : "Ar Ruhaymiyah"
	        }
	    },
	    {
	        "city_id" : 2437,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الوسطى",
	            "en" : "Al Wista"
	        }
	    },
	    {
	        "city_id" : 2438,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المفيض",
	            "en" : "Al Mafid"
	        }
	    },
	    {
	        "city_id" : 2439,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المحروقة",
	            "en" : "Al Mahruqah"
	        }
	    },
	    {
	        "city_id" : 2440,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع خريمان",
	            "en" : "Mazari Khurayman"
	        }
	    },
	    {
	        "city_id" : 2441,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الربقية",
	            "en" : "Ar Ribqiyah"
	        }
	    },
	    {
	        "city_id" : 2442,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم طليحة",
	            "en" : "Umm Tulayhah"
	        }
	    },
	    {
	        "city_id" : 2443,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "فردة",
	            "en" : "Fardah"
	        }
	    },
	    {
	        "city_id" : 2444,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الناصرية",
	            "en" : "An Nasiriyah"
	        }
	    },
	    {
	        "city_id" : 2445,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الخرماء الجنوبية",
	            "en" : "Al Kharma Al Janubiyah"
	        }
	    },
	    {
	        "city_id" : 2446,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النعايم",
	            "en" : "An Naayim"
	        }
	    },
	    {
	        "city_id" : 2447,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "خريمان",
	            "en" : "Khurayman"
	        }
	    },
	    {
	        "city_id" : 2448,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المذنب",
	            "en" : "Al Midhnab"
	        }
	    },
	    {
	        "city_id" : 2449,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "علباء",
	            "en" : "Alba"
	        }
	    },
	    {
	        "city_id" : 2450,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "روضة الحسو",
	            "en" : "Rawdat Al Hisu"
	        }
	    },
	    {
	        "city_id" : 2451,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المربع",
	            "en" : "Al Murabba"
	        }
	    },
	    {
	        "city_id" : 2452,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المحلاوية",
	            "en" : "Al Muhallawiyah"
	        }
	    },
	    {
	        "city_id" : 2453,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الحزم",
	            "en" : "Mazari Al Hazm"
	        }
	    },
	    {
	        "city_id" : 2454,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ظليم",
	            "en" : "Dhulyim"
	        }
	    },
	    {
	        "city_id" : 2455,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الباطن",
	            "en" : "Al Batin"
	        }
	    },
	    {
	        "city_id" : 2456,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المرغلة",
	            "en" : "Al Murghalah"
	        }
	    },
	    {
	        "city_id" : 2457,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "رغابية",
	            "en" : "Raghabiyah"
	        }
	    },
	    {
	        "city_id" : 2458,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الطعمية",
	            "en" : "At Tumiyah"
	        }
	    },
	    {
	        "city_id" : 2459,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العداين",
	            "en" : "Al Adayin"
	        }
	    },
	    {
	        "city_id" : 2460,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البويطن",
	            "en" : "Al Buwaytin"
	        }
	    },
	    {
	        "city_id" : 2461,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الرقة",
	            "en" : "Ar Riqa"
	        }
	    },
	    {
	        "city_id" : 2462,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العبلة",
	            "en" : "Al Ablah"
	        }
	    },
	    {
	        "city_id" : 2463,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الروغاني",
	            "en" : "Ar Rawghany"
	        }
	    },
	    {
	        "city_id" : 2464,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الخفجي",
	            "en" : "Al Khafji"
	        }
	    },
	    {
	        "city_id" : 2465,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العوشزية",
	            "en" : "Al Awshaziyah"
	        }
	    },
	    {
	        "city_id" : 2466,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "وادى أبو على",
	            "en" : "Wadi Abu Ali"
	        }
	    },
	    {
	        "city_id" : 2467,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "رياض الخبراء",
	            "en" : "Riyad Al Khabra"
	        }
	    },
	    {
	        "city_id" : 2468,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "سمراء عيسى",
	            "en" : "Samra Isa"
	        }
	    },
	    {
	        "city_id" : 2469,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "صبيح",
	            "en" : "Subayh"
	        }
	    },
	    {
	        "city_id" : 2470,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "نبيها",
	            "en" : "Nubayha"
	        }
	    },
	    {
	        "city_id" : 2471,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشبيبة",
	            "en" : "Ash Shibibiyah"
	        }
	    },
	    {
	        "city_id" : 2472,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البدائع أم تلعة",
	            "en" : "Al Badai Umm Talah"
	        }
	    },
	    {
	        "city_id" : 2473,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البدائع العليا",
	            "en" : "Al Badai Al Ulya"
	        }
	    },
	    {
	        "city_id" : 2474,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العبيلة",
	            "en" : "Al Ubaylah"
	        }
	    },
	    {
	        "city_id" : 2475,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزرعة عبلا",
	            "en" : "Mazraat At Abla"
	        }
	    },
	    {
	        "city_id" : 2476,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عبل عبلا",
	            "en" : "Abal Abla"
	        }
	    },
	    {
	        "city_id" : 2477,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الروضة",
	            "en" : "Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 2478,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العبدلية",
	            "en" : "Al Abdaliyah"
	        }
	    },
	    {
	        "city_id" : 2479,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحجناوي",
	            "en" : "Al Hajnawi"
	        }
	    },
	    {
	        "city_id" : 2480,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الدحلة",
	            "en" : "Ad Dahlah"
	        }
	    },
	    {
	        "city_id" : 2481,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البدائع",
	            "en" : "Al Badai"
	        }
	    },
	    {
	        "city_id" : 2482,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "دهيماء",
	            "en" : "Duhayma"
	        }
	    },
	    {
	        "city_id" : 2483,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الابرق",
	            "en" : "Al Abraq"
	        }
	    },
	    {
	        "city_id" : 2484,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العبيد",
	            "en" : "Al Ubayd"
	        }
	    },
	    {
	        "city_id" : 2485,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النفيد",
	            "en" : "An Nufayyid"
	        }
	    },
	    {
	        "city_id" : 2486,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الخبراء",
	            "en" : "Al Khabra"
	        }
	    },
	    {
	        "city_id" : 2487,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المحوى",
	            "en" : "Al Mahawa"
	        }
	    },
	    {
	        "city_id" : 2488,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "فيضة ذيبان",
	            "en" : "Faydat Dhiban"
	        }
	    },
	    {
	        "city_id" : 2489,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مشرف",
	            "en" : "Mushrif"
	        }
	    },
	    {
	        "city_id" : 2490,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العابر",
	            "en" : "Al Abir"
	        }
	    },
	    {
	        "city_id" : 2491,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الحقباء",
	            "en" : "Mazari Al Haqba"
	        }
	    },
	    {
	        "city_id" : 2492,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحجبة",
	            "en" : "Al Hajbah"
	        }
	    },
	    {
	        "city_id" : 2493,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الظبة",
	            "en" : "Adh Dhabah"
	        }
	    },
	    {
	        "city_id" : 2494,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الدعثة",
	            "en" : "Ad Daathah"
	        }
	    },
	    {
	        "city_id" : 2495,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الضبة",
	            "en" : "Ad Dabbah"
	        }
	    },
	    {
	        "city_id" : 2496,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحنية",
	            "en" : "Al Haniyah"
	        }
	    },
	    {
	        "city_id" : 2497,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ابو خشبة",
	            "en" : "Abu Khashabah"
	        }
	    },
	    {
	        "city_id" : 2498,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم الخراسع",
	            "en" : "Umm Al Kharasi"
	        }
	    },
	    {
	        "city_id" : 2499,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الثامرية",
	            "en" : "Ath Thamiriyah"
	        }
	    },
	    {
	        "city_id" : 2500,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الداث",
	            "en" : "Ad Dath"
	        }
	    },
	    {
	        "city_id" : 2501,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مهدومة",
	            "en" : "Mahdumah"
	        }
	    },
	    {
	        "city_id" : 2502,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع أم أرطى",
	            "en" : "Mazari Umm Arta"
	        }
	    },
	    {
	        "city_id" : 2503,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الجرارية",
	            "en" : "Al Jarrariyah"
	        }
	    },
	    {
	        "city_id" : 2504,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "خربشاء",
	            "en" : "Kharbasha"
	        }
	    },
	    {
	        "city_id" : 2505,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الظاهرية الشمالية",
	            "en" : "Adh Dhahiriyah Ash Shamaliyah"
	        }
	    },
	    {
	        "city_id" : 2506,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الظاهرية الجنوبية",
	            "en" : "Adh Dhahiriyah Al Janubiyah"
	        }
	    },
	    {
	        "city_id" : 2507,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الناعمة",
	            "en" : "An Naimah"
	        }
	    },
	    {
	        "city_id" : 2508,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الوطاة",
	            "en" : "Al Wutah"
	        }
	    },
	    {
	        "city_id" : 2509,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الغضياء",
	            "en" : "Al Ghadya"
	        }
	    },
	    {
	        "city_id" : 2510,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع ثويدج",
	            "en" : "Mazari Thuwaydij"
	        }
	    },
	    {
	        "city_id" : 2511,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الجرير",
	            "en" : "Al Jarir"
	        }
	    },
	    {
	        "city_id" : 2512,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القيصومة",
	            "en" : "Al Qaysumah"
	        }
	    },
	    {
	        "city_id" : 2513,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الكنهبلة",
	            "en" : "Al Kanahbilah"
	        }
	    },
	    {
	        "city_id" : 2514,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السهوة",
	            "en" : "As Sahwah"
	        }
	    },
	    {
	        "city_id" : 2515,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "يانف",
	            "en" : "Yanif"
	        }
	    },
	    {
	        "city_id" : 2516,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حلباء",
	            "en" : "Halaba"
	        }
	    },
	    {
	        "city_id" : 2517,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العدوة",
	            "en" : "Al Idwah"
	        }
	    },
	    {
	        "city_id" : 2518,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الطلحة",
	            "en" : "At Talhah"
	        }
	    },
	    {
	        "city_id" : 2519,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "النماص",
	            "en" : "An Namas / Tanumah"
	        }
	    },
	    {
	        "city_id" : 2520,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "حمراء نثيل / ابو شداد",
	            "en" : "Hamrah Nithil / Abu Shadad"
	        }
	    },
	    {
	        "city_id" : 2521,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "خجيم",
	            "en" : "Khajim"
	        }
	    },
	    {
	        "city_id" : 2522,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "يدمة",
	            "en" : "Yadamah"
	        }
	    },
	    {
	        "city_id" : 2523,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "ابا الرخم",
	            "en" : "Aba Ar Rakham"
	        }
	    },
	    {
	        "city_id" : 2524,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "مركز الوجيد",
	            "en" : "Markaz Al Wujid"
	        }
	    },
	    {
	        "city_id" : 2525,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "ظلماء",
	            "en" : "Dhalma"
	        }
	    },
	    {
	        "city_id" : 2526,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "تباشعة",
	            "en" : "Tubashah"
	        }
	    },
	    {
	        "city_id" : 2527,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "أم خيسة",
	            "en" : "Umm Khisah"
	        }
	    },
	    {
	        "city_id" : 2528,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "صلحلح",
	            "en" : "Salahlah"
	        }
	    },
	    {
	        "city_id" : 2529,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل خضاري",
	            "en" : "Al Khidari"
	        }
	    },
	    {
	        "city_id" : 2530,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "النقرة",
	            "en" : "An Nuqrah"
	        }
	    },
	    {
	        "city_id" : 2531,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "كمب الضلوع",
	            "en" : "Kamp Ad Dulu"
	        }
	    },
	    {
	        "city_id" : 2532,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحفير",
	            "en" : "Al Hufayr"
	        }
	    },
	    {
	        "city_id" : 2533,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الودي",
	            "en" : "Al Wudayy"
	        }
	    },
	    {
	        "city_id" : 2534,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "قصر العشروات",
	            "en" : "Qasr Al Ishruwat"
	        }
	    },
	    {
	        "city_id" : 2535,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "سراء",
	            "en" : "Sara"
	        }
	    },
	    {
	        "city_id" : 2536,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "فيضة بن سويلم",
	            "en" : "Faydat Ibn Suwaylim"
	        }
	    },
	    {
	        "city_id" : 2537,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "النيصية",
	            "en" : "An Nisiyah"
	        }
	    },
	    {
	        "city_id" : 2538,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مريفق",
	            "en" : "Murayfiq"
	        }
	    },
	    {
	        "city_id" : 2539,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "قفار",
	            "en" : "Qufar"
	        }
	    },
	    {
	        "city_id" : 2540,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "توارين",
	            "en" : "Tuwarin"
	        }
	    },
	    {
	        "city_id" : 2541,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "عقدة",
	            "en" : "Iqdah"
	        }
	    },
	    {
	        "city_id" : 2542,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المحفر",
	            "en" : "Al Muhaffar"
	        }
	    },
	    {
	        "city_id" : 2543,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المختلف",
	            "en" : "Al Mukhtalif"
	        }
	    },
	    {
	        "city_id" : 2544,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الصهوة",
	            "en" : "As Sahwah"
	        }
	    },
	    {
	        "city_id" : 2545,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "اللويمي",
	            "en" : "Al Luwaymi"
	        }
	    },
	    {
	        "city_id" : 2546,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المستجدة",
	            "en" : "Al Mustajiddah"
	        }
	    },
	    {
	        "city_id" : 2547,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العجاجة",
	            "en" : "Al Ajajah"
	        }
	    },
	    {
	        "city_id" : 2548,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الرقب",
	            "en" : "Ar Raqab"
	        }
	    },
	    {
	        "city_id" : 2549,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "النمارة",
	            "en" : "An Nimarah"
	        }
	    },
	    {
	        "city_id" : 2550,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العيثمة",
	            "en" : "Al Aythamah"
	        }
	    },
	    {
	        "city_id" : 2551,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "لبدة",
	            "en" : "Libdah"
	        }
	    },
	    {
	        "city_id" : 2552,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "ضرغط",
	            "en" : "Darghat"
	        }
	    },
	    {
	        "city_id" : 2553,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "ضريغط",
	            "en" : "Duraighat"
	        }
	    },
	    {
	        "city_id" : 2554,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحميمة",
	            "en" : "Al Humaimah"
	        }
	    },
	    {
	        "city_id" : 2555,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدائع اول",
	            "en" : "Badai Awl"
	        }
	    },
	    {
	        "city_id" : 2556,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الثمامية",
	            "en" : "Ath Thimamiyah"
	        }
	    },
	    {
	        "city_id" : 2557,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحليفة العليا",
	            "en" : "Al Hulayfah Al Ulya"
	        }
	    },
	    {
	        "city_id" : 2558,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مرحب الشمالي",
	            "en" : "Marhab Ash Shamali"
	        }
	    },
	    {
	        "city_id" : 2559,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العرادية",
	            "en" : "Al Aradiyah"
	        }
	    },
	    {
	        "city_id" : 2560,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "فيضة اثقب",
	            "en" : "Faydat Athqab"
	        }
	    },
	    {
	        "city_id" : 2561,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "روض ابن هادي",
	            "en" : "Rawd Ibn Hadi"
	        }
	    },
	    {
	        "city_id" : 2562,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الوسعة",
	            "en" : "Al Wasah"
	        }
	    },
	    {
	        "city_id" : 2563,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشويمس",
	            "en" : "Ash Shiwaymis"
	        }
	    },
	    {
	        "city_id" : 2564,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البرقة",
	            "en" : "Al Barqah"
	        }
	    },
	    {
	        "city_id" : 2565,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الدابية",
	            "en" : "Ad Dabiyah"
	        }
	    },
	    {
	        "city_id" : 2566,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحويط",
	            "en" : "Al Huwayyit"
	        }
	    },
	    {
	        "city_id" : 2567,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العقلة",
	            "en" : "Al Uqlah"
	        }
	    },
	    {
	        "city_id" : 2568,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "عمائر المرير",
	            "en" : "Amair Al Murayr"
	        }
	    },
	    {
	        "city_id" : 2569,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدع ابن خلف",
	            "en" : "Bid Ibn Khalaf"
	        }
	    },
	    {
	        "city_id" : 2570,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المرير",
	            "en" : "Al Murayr"
	        }
	    },
	    {
	        "city_id" : 2571,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "ام روشن",
	            "en" : "Umm Rawshan"
	        }
	    },
	    {
	        "city_id" : 2572,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "صفيط",
	            "en" : "Sufayt"
	        }
	    },
	    {
	        "city_id" : 2573,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "النحيتية",
	            "en" : "An Nuhaytiyah"
	        }
	    },
	    {
	        "city_id" : 2574,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مبرز",
	            "en" : "Mibarriz"
	        }
	    },
	    {
	        "city_id" : 2575,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المعرش",
	            "en" : "Al Maarrash"
	        }
	    },
	    {
	        "city_id" : 2576,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العوشزية",
	            "en" : "Al Awshaziyah"
	        }
	    },
	    {
	        "city_id" : 2577,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "وسيطاء الحفن",
	            "en" : "Wusayta Al Hafan"
	        }
	    },
	    {
	        "city_id" : 2578,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البعايث",
	            "en" : "Al Baayith"
	        }
	    },
	    {
	        "city_id" : 2579,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الزغيبية",
	            "en" : "Az Zughaibiyah"
	        }
	    },
	    {
	        "city_id" : 2580,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الفرعة",
	            "en" : "Al Farah"
	        }
	    },
	    {
	        "city_id" : 2581,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بدائع الصغوي",
	            "en" : "Badai As Sighwa"
	        }
	    },
	    {
	        "city_id" : 2582,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصغوى",
	            "en" : "As Sighawa"
	        }
	    },
	    {
	        "city_id" : 2583,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "فيضة يكلب",
	            "en" : "Faydat Yaklib"
	        }
	    },
	    {
	        "city_id" : 2584,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع القرائن",
	            "en" : "Mazari Al Qarain"
	        }
	    },
	    {
	        "city_id" : 2585,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النويبات",
	            "en" : "An Nuwaybat"
	        }
	    },
	    {
	        "city_id" : 2586,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزرعة مشرفة",
	            "en" : "Mazraat Mishrifah"
	        }
	    },
	    {
	        "city_id" : 2587,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المخرم",
	            "en" : "Al Makhram"
	        }
	    },
	    {
	        "city_id" : 2588,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الطراق",
	            "en" : "At Tiraq"
	        }
	    },
	    {
	        "city_id" : 2589,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصلبية",
	            "en" : "As Sulubiyah"
	        }
	    },
	    {
	        "city_id" : 2590,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "راس تنورة",
	            "en" : "Ras Tannurah"
	        }
	    },
	    {
	        "city_id" : 2591,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "رحيمة",
	            "en" : "Rahimah"
	        }
	    },
	    {
	        "city_id" : 2592,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدائع الصفران",
	            "en" : "Badai As Sufran"
	        }
	    },
	    {
	        "city_id" : 2593,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "حمر القعساء",
	            "en" : "Humr Al Qaasa"
	        }
	    },
	    {
	        "city_id" : 2594,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "حريد",
	            "en" : "Hurayd"
	        }
	    },
	    {
	        "city_id" : 2595,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الديماسة",
	            "en" : "Ad Dimasah"
	        }
	    },
	    {
	        "city_id" : 2596,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القعساء",
	            "en" : "Al Qaasa"
	        }
	    },
	    {
	        "city_id" : 2597,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "وتدة",
	            "en" : "Wutidah"
	        }
	    },
	    {
	        "city_id" : 2598,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "عقيلة اللبن",
	            "en" : "Uqaylat Al Laban"
	        }
	    },
	    {
	        "city_id" : 2599,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البلازية",
	            "en" : "Al Ballaziyah"
	        }
	    },
	    {
	        "city_id" : 2600,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "خنقة الرماحي",
	            "en" : "Khanqat Ar Rimahi"
	        }
	    },
	    {
	        "city_id" : 2601,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "غسل",
	            "en" : "Ghisil"
	        }
	    },
	    {
	        "city_id" : 2602,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "سميراء",
	            "en" : "Simira"
	        }
	    },
	    {
	        "city_id" : 2603,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الرفايع",
	            "en" : "Ar Rufayi"
	        }
	    },
	    {
	        "city_id" : 2604,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "قصير متروك",
	            "en" : "Qusayr Matruk"
	        }
	    },
	    {
	        "city_id" : 2605,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "كتيفة",
	            "en" : "Kutaifah"
	        }
	    },
	    {
	        "city_id" : 2606,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "وسيط",
	            "en" : "Wusayt"
	        }
	    },
	    {
	        "city_id" : 2607,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "نفجة",
	            "en" : "Nafjah"
	        }
	    },
	    {
	        "city_id" : 2608,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الروضة",
	            "en" : "Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 2609,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المعدا",
	            "en" : "Al Maada"
	        }
	    },
	    {
	        "city_id" : 2610,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الشيحية",
	            "en" : "Mazari Ash Shihiyah"
	        }
	    },
	    {
	        "city_id" : 2611,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشيحية",
	            "en" : "Ash Shihiyah"
	        }
	    },
	    {
	        "city_id" : 2612,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم قدة",
	            "en" : "Umm Qiddah"
	        }
	    },
	    {
	        "city_id" : 2613,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "قليب خنيفسة",
	            "en" : "Qalib Khunayfisah"
	        }
	    },
	    {
	        "city_id" : 2614,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزرعة الغبية",
	            "en" : "Mazraat Al Ghibyah"
	        }
	    },
	    {
	        "city_id" : 2615,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم العراد",
	            "en" : "Umm Al Arad"
	        }
	    },
	    {
	        "city_id" : 2616,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الثابتية",
	            "en" : "Al Thabitiyah"
	        }
	    },
	    {
	        "city_id" : 2617,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بقيعاء الشمالية",
	            "en" : "Buqaya Ash Shamaliyah"
	        }
	    },
	    {
	        "city_id" : 2618,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الرفائع",
	            "en" : "Mazari Ar Rufai"
	        }
	    },
	    {
	        "city_id" : 2619,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عسيلة",
	            "en" : "Usaylah"
	        }
	    },
	    {
	        "city_id" : 2620,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النجبة",
	            "en" : "An Nijibah"
	        }
	    },
	    {
	        "city_id" : 2621,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "قليب الرجيمية",
	            "en" : "Qalib Ar Rujaymiyah"
	        }
	    },
	    {
	        "city_id" : 2622,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عقدة",
	            "en" : "Uqdah"
	        }
	    },
	    {
	        "city_id" : 2623,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم خطوط",
	            "en" : "Umm Khutut"
	        }
	    },
	    {
	        "city_id" : 2624,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الوسيطاء",
	            "en" : "Mazari Al Wusayta"
	        }
	    },
	    {
	        "city_id" : 2625,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المكحول",
	            "en" : "Al Makhul"
	        }
	    },
	    {
	        "city_id" : 2626,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "كحلة",
	            "en" : "Kahlah"
	        }
	    },
	    {
	        "city_id" : 2627,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الأرطاوي الشمالي",
	            "en" : "Al Artawi Ash Shamali"
	        }
	    },
	    {
	        "city_id" : 2628,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الفيضة",
	            "en" : "Al Faydah"
	        }
	    },
	    {
	        "city_id" : 2629,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الهلالية",
	            "en" : "Al Hilaliyah"
	        }
	    },
	    {
	        "city_id" : 2630,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البكيرية",
	            "en" : "Al Bukayriyah"
	        }
	    },
	    {
	        "city_id" : 2631,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الفويلق",
	            "en" : "Al Fuwayliq"
	        }
	    },
	    {
	        "city_id" : 2632,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مشاش جرود",
	            "en" : "Mishash Jurud"
	        }
	    },
	    {
	        "city_id" : 2633,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الضلفعة",
	            "en" : "Ad Dalfaah"
	        }
	    },
	    {
	        "city_id" : 2634,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الطوال",
	            "en" : "At Tuwal"
	        }
	    },
	    {
	        "city_id" : 2635,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العليا",
	            "en" : "Al Ulayya"
	        }
	    },
	    {
	        "city_id" : 2636,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الرفيعة",
	            "en" : "Ar Rafiah"
	        }
	    },
	    {
	        "city_id" : 2637,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشباكية",
	            "en" : "Ash Shabbakiyah"
	        }
	    },
	    {
	        "city_id" : 2638,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الجابرية",
	            "en" : "Al Jabriyah"
	        }
	    },
	    {
	        "city_id" : 2639,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "المراح",
	            "en" : "Al Marah"
	        }
	    },
	    {
	        "city_id" : 2640,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "جودة",
	            "en" : "Judah"
	        }
	    },
	    {
	        "city_id" : 2641,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "سلوى",
	            "en" : "Salwa"
	        }
	    },
	    {
	        "city_id" : 2642,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العقير",
	            "en" : "Al Uqayr"
	        }
	    },
	    {
	        "city_id" : 2643,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "يبرين",
	            "en" : "Yabrin / Jabrin"
	        }
	    },
	    {
	        "city_id" : 2644,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "البطالية",
	            "en" : "Al Bataliyah"
	        }
	    },
	    {
	        "city_id" : 2645,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الشقيق",
	            "en" : "Ash Shaqiq"
	        }
	    },
	    {
	        "city_id" : 2646,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "القرين",
	            "en" : "Al Qarin"
	        }
	    },
	    {
	        "city_id" : 2647,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الوزية",
	            "en" : "Al Wizyah"
	        }
	    },
	    {
	        "city_id" : 2648,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "القرن",
	            "en" : "Al Qarn"
	        }
	    },
	    {
	        "city_id" : 2649,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الخرس",
	            "en" : "Al Khars"
	        }
	    },
	    {
	        "city_id" : 2650,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الغويبة",
	            "en" : "Al Ghuwaybah"
	        }
	    },
	    {
	        "city_id" : 2651,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "مريطبة",
	            "en" : "Muraytibah"
	        }
	    },
	    {
	        "city_id" : 2652,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "سوده",
	            "en" : "Sudah"
	        }
	    },
	    {
	        "city_id" : 2653,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العمران",
	            "en" : "Al Umran"
	        }
	    },
	    {
	        "city_id" : 2654,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مجادب",
	            "en" : "Al Mijadib"
	        }
	    },
	    {
	        "city_id" : 2655,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السبت",
	            "en" : "As Sabt"
	        }
	    },
	    {
	        "city_id" : 2656,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الصعدي",
	            "en" : "Al As Sadi"
	        }
	    },
	    {
	        "city_id" : 2657,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سدوان",
	            "en" : "Sadwan"
	        }
	    },
	    {
	        "city_id" : 2658,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشعف",
	            "en" : "Ash Shaf"
	        }
	    },
	    {
	        "city_id" : 2659,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لربوعة",
	            "en" : "Larbuah"
	        }
	    },
	    {
	        "city_id" : 2660,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قريش",
	            "en" : "Qiraysh"
	        }
	    },
	    {
	        "city_id" : 2661,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل دحمان",
	            "en" : "Al Dahman"
	        }
	    },
	    {
	        "city_id" : 2662,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجفر",
	            "en" : "Al Jafr"
	        }
	    },
	    {
	        "city_id" : 2663,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "النماص",
	            "en" : "An Namas"
	        }
	    },
	    {
	        "city_id" : 2664,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "شوحطة",
	            "en" : "Shuhitah"
	        }
	    },
	    {
	        "city_id" : 2665,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرهوة",
	            "en" : "Ar Rahwah"
	        }
	    },
	    {
	        "city_id" : 2666,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قاها",
	            "en" : "Qaha"
	        }
	    },
	    {
	        "city_id" : 2667,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عزة",
	            "en" : "Al Azzah"
	        }
	    },
	    {
	        "city_id" : 2668,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بيحان",
	            "en" : "Bihan"
	        }
	    },
	    {
	        "city_id" : 2669,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قرآنية",
	            "en" : "Quraniyah"
	        }
	    },
	    {
	        "city_id" : 2670,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العطوف",
	            "en" : "Al Utuf"
	        }
	    },
	    {
	        "city_id" : 2671,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "طلحة",
	            "en" : "Talhah"
	        }
	    },
	    {
	        "city_id" : 2672,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القصير",
	            "en" : "Al Qusayr"
	        }
	    },
	    {
	        "city_id" : 2673,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المهاش",
	            "en" : "Al Mahash"
	        }
	    },
	    {
	        "city_id" : 2674,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القاعية",
	            "en" : "Al Qaiyah"
	        }
	    },
	    {
	        "city_id" : 2675,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدائع قني",
	            "en" : "Badai Qunay"
	        }
	    },
	    {
	        "city_id" : 2676,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مغيضة",
	            "en" : "Mughaydah"
	        }
	    },
	    {
	        "city_id" : 2677,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بطيحان",
	            "en" : "Butayhan"
	        }
	    },
	    {
	        "city_id" : 2678,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القحصية",
	            "en" : "Al Qahsiyah"
	        }
	    },
	    {
	        "city_id" : 2679,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الدوادمي",
	            "en" : "Ad Duwadimi"
	        }
	    },
	    {
	        "city_id" : 2680,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البنانة",
	            "en" : "Al Bananah"
	        }
	    },
	    {
	        "city_id" : 2681,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الركية",
	            "en" : "Ar Rukayyah"
	        }
	    },
	    {
	        "city_id" : 2682,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مرموثة العلم",
	            "en" : "Marmuthat Al Alam"
	        }
	    },
	    {
	        "city_id" : 2683,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "نخلة",
	            "en" : "Nakhlah"
	        }
	    },
	    {
	        "city_id" : 2684,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "النميرة",
	            "en" : "An Numayyirah"
	        }
	    },
	    {
	        "city_id" : 2685,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "قصيباء",
	            "en" : "Qusayba"
	        }
	    },
	    {
	        "city_id" : 2686,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "ملحاء",
	            "en" : "Malha"
	        }
	    },
	    {
	        "city_id" : 2687,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الطرفاوي",
	            "en" : "At Tarfawi"
	        }
	    },
	    {
	        "city_id" : 2688,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشقة",
	            "en" : "Ash Shiqqah"
	        }
	    },
	    {
	        "city_id" : 2689,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشعيلاء",
	            "en" : "Ash Shuayla"
	        }
	    },
	    {
	        "city_id" : 2690,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدائع الفقي",
	            "en" : "Bdai Al Fuqayy"
	        }
	    },
	    {
	        "city_id" : 2691,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "أم هشيم",
	            "en" : "Umm Hashim"
	        }
	    },
	    {
	        "city_id" : 2692,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "خفيج أم هشيم",
	            "en" : "Khufayj Umm Hashim"
	        }
	    },
	    {
	        "city_id" : 2693,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الباحة",
	            "en" : "Al Bahah"
	        }
	    },
	    {
	        "city_id" : 2694,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العمائر",
	            "en" : "Al Amair"
	        }
	    },
	    {
	        "city_id" : 2695,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الصور",
	            "en" : "As Sur"
	        }
	    },
	    {
	        "city_id" : 2696,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "قرية عشيرة",
	            "en" : "Qaryat Ishayrah"
	        }
	    },
	    {
	        "city_id" : 2697,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "عقلة المخروق",
	            "en" : "Uqlat Al Makhruq"
	        }
	    },
	    {
	        "city_id" : 2698,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "أم هشيم",
	            "en" : "Umm Hshim"
	        }
	    },
	    {
	        "city_id" : 2699,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مصدة",
	            "en" : "Masadah"
	        }
	    },
	    {
	        "city_id" : 2700,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "أبلة",
	            "en" : "Ablah"
	        }
	    },
	    {
	        "city_id" : 2701,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القصيلة",
	            "en" : "Al Qusailah"
	        }
	    },
	    {
	        "city_id" : 2702,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "السليمي",
	            "en" : "As Sulaymi"
	        }
	    },
	    {
	        "city_id" : 2703,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحماد",
	            "en" : "Al Hamad"
	        }
	    },
	    {
	        "city_id" : 2704,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الوهيبيات",
	            "en" : "Al Wuhaybiyat"
	        }
	    },
	    {
	        "city_id" : 2705,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "أرينبة",
	            "en" : "Uraynibah"
	        }
	    },
	    {
	        "city_id" : 2706,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "فرتاج",
	            "en" : "Firtaj"
	        }
	    },
	    {
	        "city_id" : 2707,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشبرية الصفراء",
	            "en" : "Ash Shibriyah As Safra"
	        }
	    },
	    {
	        "city_id" : 2708,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الشبرية الحمراء",
	            "en" : "Ash Shibriyah Al Hamra"
	        }
	    },
	    {
	        "city_id" : 2709,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الوسيطي",
	            "en" : "Al Wusayti"
	        }
	    },
	    {
	        "city_id" : 2710,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الصخنة",
	            "en" : "As Sikhinah"
	        }
	    },
	    {
	        "city_id" : 2711,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "أفيعية",
	            "en" : "Afayiyah"
	        }
	    },
	    {
	        "city_id" : 2712,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الهمجة",
	            "en" : "Al Hamjah"
	        }
	    },
	    {
	        "city_id" : 2713,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المعاذب",
	            "en" : "Al Maadhib"
	        }
	    },
	    {
	        "city_id" : 2714,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الهدية",
	            "en" : "Al Hudayyah"
	        }
	    },
	    {
	        "city_id" : 2715,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الغزالة",
	            "en" : "Al Ghazalah"
	        }
	    },
	    {
	        "city_id" : 2716,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الغريسة",
	            "en" : "Al Gharisah"
	        }
	    },
	    {
	        "city_id" : 2717,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المجيصة",
	            "en" : "Al Mijayssah"
	        }
	    },
	    {
	        "city_id" : 2718,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "البركة",
	            "en" : "Al Birkah"
	        }
	    },
	    {
	        "city_id" : 2719,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "طلوح",
	            "en" : "Tuluh"
	        }
	    },
	    {
	        "city_id" : 2720,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحليفة السفلى",
	            "en" : "Al Hulayfah As Suflah"
	        }
	    },
	    {
	        "city_id" : 2721,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الحائط",
	            "en" : "Al Hait"
	        }
	    },
	    {
	        "city_id" : 2722,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الروضة",
	            "en" : "Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 2723,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "قاع حجلا",
	            "en" : "Qa Hajla"
	        }
	    },
	    {
	        "city_id" : 2724,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الخفج",
	            "en" : "Al Khufj"
	        }
	    },
	    {
	        "city_id" : 2725,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الفقي",
	            "en" : "Al Fuqay"
	        }
	    },
	    {
	        "city_id" : 2726,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "النبوان",
	            "en" : "An Nabuwan"
	        }
	    },
	    {
	        "city_id" : 2727,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العقلة",
	            "en" : "Al Uqlah"
	        }
	    },
	    {
	        "city_id" : 2728,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "العوشري",
	            "en" : "Al Awshari"
	        }
	    },
	    {
	        "city_id" : 2729,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "مرغان",
	            "en" : "Maraghan"
	        }
	    },
	    {
	        "city_id" : 2730,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "الهويدي",
	            "en" : "Al Huwaidi"
	        }
	    },
	    {
	        "city_id" : 2731,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "القصيصة",
	            "en" : "Al Qusaysah"
	        }
	    },
	    {
	        "city_id" : 2732,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "المسجد",
	            "en" : "Al Masjid"
	        }
	    },
	    {
	        "city_id" : 2733,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "سقف",
	            "en" : "Saqf"
	        }
	    },
	    {
	        "city_id" : 2734,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدع ابن حويط",
	            "en" : "Bid Bin Huwayyit"
	        }
	    },
	    {
	        "city_id" : 2735,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "بدائع الصداعية",
	            "en" : "Badai As Sudaiyah"
	        }
	    },
	    {
	        "city_id" : 2736,
	        "region_id" : 4,
	        "name" : {
	            "ar" : "ريع البكر",
	            "en" : "Ri Al Bakr"
	        }
	    },
	    {
	        "city_id" : 2737,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الكلابية",
	            "en" : "Al Kilabiyah"
	        }
	    },
	    {
	        "city_id" : 2738,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "المنيزلة",
	            "en" : "Al Munaizlah"
	        }
	    },
	    {
	        "city_id" : 2739,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "القارة",
	            "en" : "Al Qarah"
	        }
	    },
	    {
	        "city_id" : 2740,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "المنصورة",
	            "en" : "Al Mansurah"
	        }
	    },
	    {
	        "city_id" : 2741,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "المزاوي",
	            "en" : "Al Mazawi"
	        }
	    },
	    {
	        "city_id" : 2742,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الحوطة",
	            "en" : "Al Hawtah"
	        }
	    },
	    {
	        "city_id" : 2743,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "المركز",
	            "en" : "Al Markaz"
	        }
	    },
	    {
	        "city_id" : 2744,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الفضول",
	            "en" : "Al Fudul"
	        }
	    },
	    {
	        "city_id" : 2745,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الرميلة",
	            "en" : "Ar Rumaylah"
	        }
	    },
	    {
	        "city_id" : 2746,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الجشة",
	            "en" : "Al Jishshah"
	        }
	    },
	    {
	        "city_id" : 2747,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الشعبة",
	            "en" : "Ash Shibah"
	        }
	    },
	    {
	        "city_id" : 2748,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "المبرز",
	            "en" : "Al Mubarraz"
	        }
	    },
	    {
	        "city_id" : 2749,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الجليجلة",
	            "en" : "Al Julijlah"
	        }
	    },
	    {
	        "city_id" : 2750,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "المطيرفي",
	            "en" : "Al Mutairifi"
	        }
	    },
	    {
	        "city_id" : 2751,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "العضيلية",
	            "en" : "Al Udhailiyyah"
	        }
	    },
	    {
	        "city_id" : 2752,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "بني معن",
	            "en" : "Bani Mun"
	        }
	    },
	    {
	        "city_id" : 2753,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الحفيرة",
	            "en" : "Al Hafirah"
	        }
	    },
	    {
	        "city_id" : 2754,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الخن",
	            "en" : "Al Khinn"
	        }
	    },
	    {
	        "city_id" : 2755,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "ام اثلة",
	            "en" : "Umm Athlah"
	        }
	    },
	    {
	        "city_id" : 2756,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "خريص",
	            "en" : "Khurays"
	        }
	    },
	    {
	        "city_id" : 2757,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "عريعرة",
	            "en" : "Urayirah"
	        }
	    },
	    {
	        "city_id" : 2758,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "متالع / ام تالع",
	            "en" : "Matali / Umm Tali"
	        }
	    },
	    {
	        "city_id" : 2759,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "التويثير",
	            "en" : "At Tuwaythir"
	        }
	    },
	    {
	        "city_id" : 2760,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الدالوة",
	            "en" : "Ad Dalwah"
	        }
	    },
	    {
	        "city_id" : 2761,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الشهادين",
	            "en" : "Ash Shahadin"
	        }
	    },
	    {
	        "city_id" : 2762,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الحليلة",
	            "en" : "Al Halilah"
	        }
	    },
	    {
	        "city_id" : 2763,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الطرف",
	            "en" : "At Taraf"
	        }
	    },
	    {
	        "city_id" : 2764,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الجفر",
	            "en" : "Al Jafr"
	        }
	    },
	    {
	        "city_id" : 2765,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الحني",
	            "en" : "Al Hunayy"
	        }
	    },
	    {
	        "city_id" : 2766,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "القصيبي",
	            "en" : "Al Qusaybi"
	        }
	    },
	    {
	        "city_id" : 2767,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الحبل",
	            "en" : "Al Habl"
	        }
	    },
	    {
	        "city_id" : 2768,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الحرملية",
	            "en" : "Al Harmaliyah"
	        }
	    },
	    {
	        "city_id" : 2769,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "نباك",
	            "en" : "Nibak"
	        }
	    },
	    {
	        "city_id" : 2770,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البرجسية",
	            "en" : "Al Barjasiyah"
	        }
	    },
	    {
	        "city_id" : 2771,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزرعة الزرقاء",
	            "en" : "Mazraat Az Zarqa"
	        }
	    },
	    {
	        "city_id" : 2772,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع أم ظهيرة",
	            "en" : "Mazrai Umm Dhuhayrah"
	        }
	    },
	    {
	        "city_id" : 2773,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النبتى رية",
	            "en" : "An Nabta Rayyah"
	        }
	    },
	    {
	        "city_id" : 2774,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الرويضة",
	            "en" : "Ar Ruwaydah"
	        }
	    },
	    {
	        "city_id" : 2775,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الركية",
	            "en" : "Ar Rukayyah"
	        }
	    },
	    {
	        "city_id" : 2776,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم طليحة",
	            "en" : "Umm Tulayhah"
	        }
	    },
	    {
	        "city_id" : 2777,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشماسية",
	            "en" : "Ash Shimasiyah"
	        }
	    },
	    {
	        "city_id" : 2778,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الربيعية",
	            "en" : "Ar Rubayiyah"
	        }
	    },
	    {
	        "city_id" : 2779,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العويقلية",
	            "en" : "Al Uwayqiliyah"
	        }
	    },
	    {
	        "city_id" : 2780,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النبقية",
	            "en" : "An Nubqiyah"
	        }
	    },
	    {
	        "city_id" : 2781,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم حزم",
	            "en" : "Umm Hazm"
	        }
	    },
	    {
	        "city_id" : 2782,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "الخشة",
	            "en" : "Al Khashah"
	        }
	    },
	    {
	        "city_id" : 2783,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القرين",
	            "en" : "Al Qurayn"
	        }
	    },
	    {
	        "city_id" : 2784,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الهبيرية",
	            "en" : "Al Hubayriyah"
	        }
	    },
	    {
	        "city_id" : 2785,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البدع",
	            "en" : "Al Bid"
	        }
	    },
	    {
	        "city_id" : 2786,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ساق",
	            "en" : "Saq"
	        }
	    },
	    {
	        "city_id" : 2787,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشقران",
	            "en" : "Ash Shuqran"
	        }
	    },
	    {
	        "city_id" : 2788,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البكرة",
	            "en" : "Al Bakrah"
	        }
	    },
	    {
	        "city_id" : 2789,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "دوبح",
	            "en" : "Dawbah"
	        }
	    },
	    {
	        "city_id" : 2790,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الفيضة",
	            "en" : "Al Faydah"
	        }
	    },
	    {
	        "city_id" : 2791,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "طوال جبيرة",
	            "en" : "Tuwal Jubayrah"
	        }
	    },
	    {
	        "city_id" : 2792,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "جبيرة",
	            "en" : "Jubayrah"
	        }
	    },
	    {
	        "city_id" : 2793,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الرحيمية",
	            "en" : "Ar Ruhaymiyah"
	        }
	    },
	    {
	        "city_id" : 2794,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجمدة",
	            "en" : "Al Jimdah"
	        }
	    },
	    {
	        "city_id" : 2795,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ام الفروغ",
	            "en" : "Umm Al Furugh"
	        }
	    },
	    {
	        "city_id" : 2796,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفجانة",
	            "en" : "Al Fajjanah"
	        }
	    },
	    {
	        "city_id" : 2797,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحجرة",
	            "en" : "Al Hujrah"
	        }
	    },
	    {
	        "city_id" : 2798,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجريف",
	            "en" : "Al Jurayf"
	        }
	    },
	    {
	        "city_id" : 2799,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحجيرة",
	            "en" : "Al Hujayrah"
	        }
	    },
	    {
	        "city_id" : 2800,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "رنية",
	            "en" : "Ranyah"
	        }
	    },
	    {
	        "city_id" : 2801,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العمائر",
	            "en" : "Al Amair"
	        }
	    },
	    {
	        "city_id" : 2802,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القوز",
	            "en" : "Al Qawz"
	        }
	    },
	    {
	        "city_id" : 2803,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الابرق",
	            "en" : "Al Abraq"
	        }
	    },
	    {
	        "city_id" : 2804,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "كويكب",
	            "en" : "Kuwaykib"
	        }
	    },
	    {
	        "city_id" : 2805,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الضرم",
	            "en" : "Ad Duram"
	        }
	    },
	    {
	        "city_id" : 2806,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العويلة",
	            "en" : "Al Uwaylah"
	        }
	    },
	    {
	        "city_id" : 2807,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الاملح",
	            "en" : "Al Amlah"
	        }
	    },
	    {
	        "city_id" : 2808,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "تربة الخيالة",
	            "en" : "Turabat Al Khiyalah"
	        }
	    },
	    {
	        "city_id" : 2809,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بني فروة",
	            "en" : "Bani Farwah"
	        }
	    },
	    {
	        "city_id" : 2810,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "خدعة",
	            "en" : "Khidah"
	        }
	    },
	    {
	        "city_id" : 2811,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الحضيري",
	            "en" : "Al Hudayri"
	        }
	    },
	    {
	        "city_id" : 2812,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "النعرة",
	            "en" : "An Naarah"
	        }
	    },
	    {
	        "city_id" : 2813,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الثودة",
	            "en" : "Ath Thudah"
	        }
	    },
	    {
	        "city_id" : 2814,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "جعبة",
	            "en" : "Jiabah"
	        }
	    },
	    {
	        "city_id" : 2815,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بني سار",
	            "en" : "Bani Sar"
	        }
	    },
	    {
	        "city_id" : 2816,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الربوة",
	            "en" : "Ar Rabwah"
	        }
	    },
	    {
	        "city_id" : 2817,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الحشرج",
	            "en" : "Al Hashraj"
	        }
	    },
	    {
	        "city_id" : 2818,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "مرازيق",
	            "en" : "Maraziq"
	        }
	    },
	    {
	        "city_id" : 2819,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "العقيق",
	            "en" : "Al Aqiq"
	        }
	    },
	    {
	        "city_id" : 2820,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "المطرية",
	            "en" : "Al Mutariyah"
	        }
	    },
	    {
	        "city_id" : 2821,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "معشوقة",
	            "en" : "Mashuqah"
	        }
	    },
	    {
	        "city_id" : 2822,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "وراخ",
	            "en" : "Wurakh"
	        }
	    },
	    {
	        "city_id" : 2823,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "جرب",
	            "en" : "Jarab"
	        }
	    },
	    {
	        "city_id" : 2824,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "كرا الحائط",
	            "en" : "Kara Al Hait"
	        }
	    },
	    {
	        "city_id" : 2825,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "النصباء",
	            "en" : "An Nasba"
	        }
	    },
	    {
	        "city_id" : 2826,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بالحكم",
	            "en" : "Balhakam"
	        }
	    },
	    {
	        "city_id" : 2827,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "آل صقاعة",
	            "en" : "Al Suqaah"
	        }
	    },
	    {
	        "city_id" : 2828,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "المغثة",
	            "en" : "Al Maghthah"
	        }
	    },
	    {
	        "city_id" : 2829,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "حظوة",
	            "en" : "Hadhwah"
	        }
	    },
	    {
	        "city_id" : 2830,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "العقب",
	            "en" : "Al Aqib"
	        }
	    },
	    {
	        "city_id" : 2831,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "عمضان",
	            "en" : "Amdan"
	        }
	    },
	    {
	        "city_id" : 2832,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "آل حبيبة",
	            "en" : "Al Habibah"
	        }
	    },
	    {
	        "city_id" : 2833,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "مراوة",
	            "en" : "Marawah"
	        }
	    },
	    {
	        "city_id" : 2834,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الصفح",
	            "en" : "As Safh"
	        }
	    },
	    {
	        "city_id" : 2835,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "المندق",
	            "en" : "Al Mandaq"
	        }
	    },
	    {
	        "city_id" : 2836,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "بالخزمر",
	            "en" : "Bal Khazmar"
	        }
	    },
	    {
	        "city_id" : 2837,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "القرن",
	            "en" : "Al Qarn"
	        }
	    },
	    {
	        "city_id" : 2838,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "ال نعمة",
	            "en" : "Al Namah"
	        }
	    },
	    {
	        "city_id" : 2839,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "دوس",
	            "en" : "Daws"
	        }
	    },
	    {
	        "city_id" : 2840,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الطرف",
	            "en" : "At Taraf"
	        }
	    },
	    {
	        "city_id" : 2841,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الخليف",
	            "en" : "Al Khalif"
	        }
	    },
	    {
	        "city_id" : 2842,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "أبو غبار",
	            "en" : "Abu Ghubar"
	        }
	    },
	    {
	        "city_id" : 2843,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مرقان",
	            "en" : "Maraqan"
	        }
	    },
	    {
	        "city_id" : 2844,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الإفيهد",
	            "en" : "Al Ifayhid"
	        }
	    },
	    {
	        "city_id" : 2845,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحمادة",
	            "en" : "Al Hamadah"
	        }
	    },
	    {
	        "city_id" : 2846,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أشقر النومانيات",
	            "en" : "Ashqar An Numaniyat"
	        }
	    },
	    {
	        "city_id" : 2847,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النومانية",
	            "en" : "An Numaniyah"
	        }
	    },
	    {
	        "city_id" : 2848,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العمودة الجنوبية",
	            "en" : "Al Amudah Al Janubiyah"
	        }
	    },
	    {
	        "city_id" : 2849,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العمودة الشمالية",
	            "en" : "Al Amudah Ash Shamaliyah"
	        }
	    },
	    {
	        "city_id" : 2850,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الجرير",
	            "en" : "Al Jurayyir"
	        }
	    },
	    {
	        "city_id" : 2851,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الأشيعل",
	            "en" : "Al Ishayil"
	        }
	    },
	    {
	        "city_id" : 2852,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القهيبية",
	            "en" : "Al Qihabiyah"
	        }
	    },
	    {
	        "city_id" : 2853,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشعيفانية",
	            "en" : "Ash Shifaniyah"
	        }
	    },
	    {
	        "city_id" : 2854,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المشاش",
	            "en" : "Al Mishash"
	        }
	    },
	    {
	        "city_id" : 2855,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "دريميحة",
	            "en" : "Diraymihah"
	        }
	    },
	    {
	        "city_id" : 2856,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المصك",
	            "en" : "Al Masak"
	        }
	    },
	    {
	        "city_id" : 2857,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الوسيطة",
	            "en" : "Al Wasitah"
	        }
	    },
	    {
	        "city_id" : 2858,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزارع الوسيطاء",
	            "en" : "Mazari Al Wusayta"
	        }
	    },
	    {
	        "city_id" : 2859,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "قصر البطاح",
	            "en" : "Qasr Al Battah"
	        }
	    },
	    {
	        "city_id" : 2860,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "السيح",
	            "en" : "As Sayh"
	        }
	    },
	    {
	        "city_id" : 2861,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحملية",
	            "en" : "Al Himliyah"
	        }
	    },
	    {
	        "city_id" : 2862,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصويتية",
	            "en" : "As Suwaytiyah"
	        }
	    },
	    {
	        "city_id" : 2863,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الأسامر",
	            "en" : "Al Asamir"
	        }
	    },
	    {
	        "city_id" : 2864,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الأساس",
	            "en" : "Al Asas"
	        }
	    },
	    {
	        "city_id" : 2865,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أبو نخلة",
	            "en" : "Abu Nakhlah"
	        }
	    },
	    {
	        "city_id" : 2866,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الشبيكية",
	            "en" : "Ash Shubaykiyah"
	        }
	    },
	    {
	        "city_id" : 2867,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الوسيطاء",
	            "en" : "Al Wusayta"
	        }
	    },
	    {
	        "city_id" : 2868,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "جديد",
	            "en" : "Jadid"
	        }
	    },
	    {
	        "city_id" : 2869,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الطرفاوي",
	            "en" : "At Tarfawi"
	        }
	    },
	    {
	        "city_id" : 2870,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الخشيبي",
	            "en" : "Al Khishaybi"
	        }
	    },
	    {
	        "city_id" : 2871,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحجازية",
	            "en" : "Al Hajjaziyah"
	        }
	    },
	    {
	        "city_id" : 2872,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "زور العقارب",
	            "en" : "Zur Al Aqarib"
	        }
	    },
	    {
	        "city_id" : 2873,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الغافية",
	            "en" : "Al Ghafiyah"
	        }
	    },
	    {
	        "city_id" : 2874,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "صفاه",
	            "en" : "Sufah"
	        }
	    },
	    {
	        "city_id" : 2875,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "العضبات",
	            "en" : "Al Adabat"
	        }
	    },
	    {
	        "city_id" : 2876,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "قطان",
	            "en" : "Qatan"
	        }
	    },
	    {
	        "city_id" : 2877,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "ثار",
	            "en" : "Thar"
	        }
	    },
	    {
	        "city_id" : 2878,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "حمى",
	            "en" : "Hima"
	        }
	    },
	    {
	        "city_id" : 2879,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشرفات",
	            "en" : "Ash Shurafat"
	        }
	    },
	    {
	        "city_id" : 2880,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرعي",
	            "en" : "Ar Ray"
	        }
	    },
	    {
	        "city_id" : 2881,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الطرق",
	            "en" : "At Tirq"
	        }
	    },
	    {
	        "city_id" : 2882,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجرمة",
	            "en" : "Al Jirmah"
	        }
	    },
	    {
	        "city_id" : 2883,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحشافة",
	            "en" : "Al Hashafah"
	        }
	    },
	    {
	        "city_id" : 2884,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حمضة",
	            "en" : "Hamadah"
	        }
	    },
	    {
	        "city_id" : 2885,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المطعن",
	            "en" : "Al Matan"
	        }
	    },
	    {
	        "city_id" : 2886,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المنجحة",
	            "en" : "Al Manjahah"
	        }
	    },
	    {
	        "city_id" : 2887,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفيض",
	            "en" : "Al Fayd"
	        }
	    },
	    {
	        "city_id" : 2888,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "غالب",
	            "en" : "Ghalib"
	        }
	    },
	    {
	        "city_id" : 2889,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سعيدة",
	            "en" : "Saidah"
	        }
	    },
	    {
	        "city_id" : 2890,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الأجرع الشمالي",
	            "en" : "Al Ajra Ash Shamali"
	        }
	    },
	    {
	        "city_id" : 2891,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ذهبان",
	            "en" : "Dhahban"
	        }
	    },
	    {
	        "city_id" : 2892,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "دبساء",
	            "en" : "Dabsa"
	        }
	    },
	    {
	        "city_id" : 2893,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البرك",
	            "en" : "Al Birk"
	        }
	    },
	    {
	        "city_id" : 2894,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القحمة",
	            "en" : "Al Qahmah"
	        }
	    },
	    {
	        "city_id" : 2895,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عمق",
	            "en" : "Amaq"
	        }
	    },
	    {
	        "city_id" : 2896,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحظيرة",
	            "en" : "Al Hadhirah"
	        }
	    },
	    {
	        "city_id" : 2897,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل حامد",
	            "en" : "Al Hamid"
	        }
	    },
	    {
	        "city_id" : 2898,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل يوسف",
	            "en" : "Al Yusuf"
	        }
	    },
	    {
	        "city_id" : 2899,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البدلة",
	            "en" : "Al Badlah"
	        }
	    },
	    {
	        "city_id" : 2900,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لولاة",
	            "en" : "Lawlah"
	        }
	    },
	    {
	        "city_id" : 2901,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "نجد قرض",
	            "en" : "Najd Qarad"
	        }
	    },
	    {
	        "city_id" : 2902,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "جمان",
	            "en" : "Jumman"
	        }
	    },
	    {
	        "city_id" : 2903,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "كثم",
	            "en" : "Kathm"
	        }
	    },
	    {
	        "city_id" : 2904,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السلامة",
	            "en" : "As Salamah"
	        }
	    },
	    {
	        "city_id" : 2905,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المثناة",
	            "en" : "Al Mathnah"
	        }
	    },
	    {
	        "city_id" : 2906,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الهضبة",
	            "en" : "Al Hadbah"
	        }
	    },
	    {
	        "city_id" : 2907,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لعصان",
	            "en" : "Lisan"
	        }
	    },
	    {
	        "city_id" : 2908,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المحالة",
	            "en" : "Al Mahalah"
	        }
	    },
	    {
	        "city_id" : 2909,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشرف",
	            "en" : "Ash Sharaf"
	        }
	    },
	    {
	        "city_id" : 2910,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سر آل السريع",
	            "en" : "Sirr Al As Siri"
	        }
	    },
	    {
	        "city_id" : 2911,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العبب",
	            "en" : "Al Abab"
	        }
	    },
	    {
	        "city_id" : 2912,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الدارة",
	            "en" : "Ad Darah"
	        }
	    },
	    {
	        "city_id" : 2913,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجرجر",
	            "en" : "Al Jarjar"
	        }
	    },
	    {
	        "city_id" : 2914,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عدوان",
	            "en" : "Adwan"
	        }
	    },
	    {
	        "city_id" : 2915,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العين",
	            "en" : "Al Ayn"
	        }
	    },
	    {
	        "city_id" : 2916,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجعجاع",
	            "en" : "Al Jaja"
	        }
	    },
	    {
	        "city_id" : 2917,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الموسطة",
	            "en" : "Al Mawsatah"
	        }
	    },
	    {
	        "city_id" : 2918,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل جمعة",
	            "en" : "Al Jumah"
	        }
	    },
	    {
	        "city_id" : 2919,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العزيزة",
	            "en" : "Al Azizah"
	        }
	    },
	    {
	        "city_id" : 2920,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الهرير الغربي",
	            "en" : "Al Hirayr Al Gharbi"
	        }
	    },
	    {
	        "city_id" : 2921,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "إيتارة",
	            "en" : "Itarah"
	        }
	    },
	    {
	        "city_id" : 2922,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "أبو نخلة",
	            "en" : "Abu Nakhlah"
	        }
	    },
	    {
	        "city_id" : 2923,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرح",
	            "en" : "Al Qurh"
	        }
	    },
	    {
	        "city_id" : 2924,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العرف",
	            "en" : "Al Urf"
	        }
	    },
	    {
	        "city_id" : 2925,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "أبو جرشة",
	            "en" : "Abu Jarshah"
	        }
	    },
	    {
	        "city_id" : 2926,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخشم",
	            "en" : "Al Khashm"
	        }
	    },
	    {
	        "city_id" : 2927,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "روغ العاند",
	            "en" : "Rugh Al Anid"
	        }
	    },
	    {
	        "city_id" : 2928,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل بالفلاح",
	            "en" : "Al Balfalah"
	        }
	    },
	    {
	        "city_id" : 2929,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حجلا",
	            "en" : "Hajla"
	        }
	    },
	    {
	        "city_id" : 2930,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العطفة",
	            "en" : "Al Utfah"
	        }
	    },
	    {
	        "city_id" : 2931,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "تانة",
	            "en" : "Tanah"
	        }
	    },
	    {
	        "city_id" : 2932,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الشيخ",
	            "en" : "Al Ash Shaykh"
	        }
	    },
	    {
	        "city_id" : 2933,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حبيب",
	            "en" : "Hubayyib"
	        }
	    },
	    {
	        "city_id" : 2934,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "رغفة",
	            "en" : "Rughfah"
	        }
	    },
	    {
	        "city_id" : 2935,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عضاضة",
	            "en" : "Adadah"
	        }
	    },
	    {
	        "city_id" : 2936,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل سرحان",
	            "en" : "Al Sirhan"
	        }
	    },
	    {
	        "city_id" : 2937,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القعرة",
	            "en" : "Al Qurah"
	        }
	    },
	    {
	        "city_id" : 2938,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل يزيد",
	            "en" : "Al Yazid"
	        }
	    },
	    {
	        "city_id" : 2939,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المجمع",
	            "en" : "Al Majma"
	        }
	    },
	    {
	        "city_id" : 2940,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الصيحاني",
	            "en" : "As Sayhani"
	        }
	    },
	    {
	        "city_id" : 2941,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البهيمة",
	            "en" : "Al Bihaymah"
	        }
	    },
	    {
	        "city_id" : 2942,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرعاء",
	            "en" : "Al Qara"
	        }
	    },
	    {
	        "city_id" : 2943,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجر الصغير",
	            "en" : "Al Jarr As Saghir"
	        }
	    },
	    {
	        "city_id" : 2944,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشعف",
	            "en" : "Ash Shaaf"
	        }
	    },
	    {
	        "city_id" : 2945,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "تمنية",
	            "en" : "Tamniyah"
	        }
	    },
	    {
	        "city_id" : 2946,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرن",
	            "en" : "Al Qarn"
	        }
	    },
	    {
	        "city_id" : 2947,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل علي",
	            "en" : "Al Ali"
	        }
	    },
	    {
	        "city_id" : 2948,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عين الذيبة",
	            "en" : "Ayn Adh Dhibah"
	        }
	    },
	    {
	        "city_id" : 2949,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "البارك",
	            "en" : "Al Barik"
	        }
	    },
	    {
	        "city_id" : 2950,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قرضة",
	            "en" : "Qaradah"
	        }
	    },
	    {
	        "city_id" : 2951,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل زيدي",
	            "en" : "Al Zaydi"
	        }
	    },
	    {
	        "city_id" : 2952,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حصن الجرين",
	            "en" : "Husn Al Jarin"
	        }
	    },
	    {
	        "city_id" : 2953,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عاصم",
	            "en" : "Al Asim"
	        }
	    },
	    {
	        "city_id" : 2954,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجنفور",
	            "en" : "Al Janfur"
	        }
	    },
	    {
	        "city_id" : 2955,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عرايس",
	            "en" : "Arayis"
	        }
	    },
	    {
	        "city_id" : 2956,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عمام",
	            "en" : "Umam"
	        }
	    },
	    {
	        "city_id" : 2957,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرهوة",
	            "en" : "Ar Rahwah"
	        }
	    },
	    {
	        "city_id" : 2958,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "شوحط",
	            "en" : "Shuhat"
	        }
	    },
	    {
	        "city_id" : 2959,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "منادرالعين",
	            "en" : "Manadir Al Ayn"
	        }
	    },
	    {
	        "city_id" : 2960,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بني رزام",
	            "en" : "Bani Rizam"
	        }
	    },
	    {
	        "city_id" : 2961,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الملاحة",
	            "en" : "Al Malahah"
	        }
	    },
	    {
	        "city_id" : 2962,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الطلحة",
	            "en" : "At Talhah"
	        }
	    },
	    {
	        "city_id" : 2963,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "شرمة",
	            "en" : "Sharmah"
	        }
	    },
	    {
	        "city_id" : 2964,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحنق",
	            "en" : "Al Hanaq"
	        }
	    },
	    {
	        "city_id" : 2965,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرين",
	            "en" : "Al Qurayn"
	        }
	    },
	    {
	        "city_id" : 2966,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مجمل",
	            "en" : "Al Mujammal"
	        }
	    },
	    {
	        "city_id" : 2967,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "بجدة",
	            "en" : "Bajdah"
	        }
	    },
	    {
	        "city_id" : 2968,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "طبب",
	            "en" : "Tabab"
	        }
	    },
	    {
	        "city_id" : 2969,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشطاط",
	            "en" : "Al Shutat"
	        }
	    },
	    {
	        "city_id" : 2970,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العبيدية",
	            "en" : "Al Abidiyah"
	        }
	    },
	    {
	        "city_id" : 2971,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السبت",
	            "en" : "As Sabt"
	        }
	    },
	    {
	        "city_id" : 2972,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حمالة",
	            "en" : "Himalah"
	        }
	    },
	    {
	        "city_id" : 2973,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العقيق",
	            "en" : "Al Aqiq"
	        }
	    },
	    {
	        "city_id" : 2974,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العطفة",
	            "en" : "Al Utfah"
	        }
	    },
	    {
	        "city_id" : 2975,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل بسام",
	            "en" : "Al Bassam"
	        }
	    },
	    {
	        "city_id" : 2976,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل دكين",
	            "en" : "Al Dukayn"
	        }
	    },
	    {
	        "city_id" : 2977,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مهدي",
	            "en" : "Al Mahadi"
	        }
	    },
	    {
	        "city_id" : 2978,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المصياد",
	            "en" : "Al Misyad"
	        }
	    },
	    {
	        "city_id" : 2979,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجزعة",
	            "en" : "Al Juzah"
	        }
	    },
	    {
	        "city_id" : 2980,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مشدود",
	            "en" : "Al Mashdud"
	        }
	    },
	    {
	        "city_id" : 2981,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجهمة",
	            "en" : "Al Jihmah"
	        }
	    },
	    {
	        "city_id" : 2982,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العسران",
	            "en" : "Al Usran"
	        }
	    },
	    {
	        "city_id" : 2983,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل بحبيب",
	            "en" : "Al Bihabib"
	        }
	    },
	    {
	        "city_id" : 2984,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل قوشع",
	            "en" : "Al Qawsha"
	        }
	    },
	    {
	        "city_id" : 2985,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرن",
	            "en" : "Al Qarn"
	        }
	    },
	    {
	        "city_id" : 2986,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الدليمية",
	            "en" : "Ad Dilaymiyah"
	        }
	    },
	    {
	        "city_id" : 2987,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الفوارة",
	            "en" : "Al Fawwarah"
	        }
	    },
	    {
	        "city_id" : 2988,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عقلة الصقور",
	            "en" : "Uqlat As Suqur"
	        }
	    },
	    {
	        "city_id" : 2989,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الذيبية",
	            "en" : "Adh Dhibiyah"
	        }
	    },
	    {
	        "city_id" : 2990,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "قصر ابن عقيل",
	            "en" : "Qasr Ibn Uqayyil"
	        }
	    },
	    {
	        "city_id" : 2991,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "قطن",
	            "en" : "Qitan"
	        }
	    },
	    {
	        "city_id" : 2992,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البصيري",
	            "en" : "Al Basiri"
	        }
	    },
	    {
	        "city_id" : 2993,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الخريشاء",
	            "en" : "Al Khuraysha"
	        }
	    },
	    {
	        "city_id" : 2994,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الدحلة",
	            "en" : "Ad Dihalah"
	        }
	    },
	    {
	        "city_id" : 2995,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النقرة",
	            "en" : "An Naqrah"
	        }
	    },
	    {
	        "city_id" : 2996,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مباري",
	            "en" : "Mibari"
	        }
	    },
	    {
	        "city_id" : 2997,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الجفن",
	            "en" : "Al Jifn"
	        }
	    },
	    {
	        "city_id" : 2998,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ديم",
	            "en" : "Daym"
	        }
	    },
	    {
	        "city_id" : 2999,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الهميلية",
	            "en" : "Al Humayliyah"
	        }
	    },
	    {
	        "city_id" : 3000,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عماير سعيدة",
	            "en" : "Amayir Siidah"
	        }
	    },
	    {
	        "city_id" : 3001,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ذوقان الركايا",
	            "en" : "Dhawqan Ar Rakaya"
	        }
	    },
	    {
	        "city_id" : 3002,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الضاحي",
	            "en" : "Ad Dahi"
	        }
	    },
	    {
	        "city_id" : 3003,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الوهلان",
	            "en" : "Al Wahalan"
	        }
	    },
	    {
	        "city_id" : 3004,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العونية",
	            "en" : "Al Awniyah"
	        }
	    },
	    {
	        "city_id" : 3005,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحفيرة",
	            "en" : "Al Hufayyirah"
	        }
	    },
	    {
	        "city_id" : 3006,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الأشرفية",
	            "en" : "Al Ashrafiyah"
	        }
	    },
	    {
	        "city_id" : 3007,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مزرعة البسامية",
	            "en" : "Mazraat Al Bassamiyah"
	        }
	    },
	    {
	        "city_id" : 3008,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الضلعة",
	            "en" : "Ad Dalah"
	        }
	    },
	    {
	        "city_id" : 3009,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "غدفاء",
	            "en" : "Ghadfa"
	        }
	    },
	    {
	        "city_id" : 3010,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الغريبية",
	            "en" : "Al Ghuraybiyah"
	        }
	    },
	    {
	        "city_id" : 3011,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الفيحاء",
	            "en" : "Al Fayha"
	        }
	    },
	    {
	        "city_id" : 3012,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم غويفة",
	            "en" : "Umm Ghuwayfah"
	        }
	    },
	    {
	        "city_id" : 3013,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الجناح",
	            "en" : "Al Janah"
	        }
	    },
	    {
	        "city_id" : 3014,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحزم",
	            "en" : "Al Hazm"
	        }
	    },
	    {
	        "city_id" : 3015,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "رياض قناء",
	            "en" : "Riyad Qana"
	        }
	    },
	    {
	        "city_id" : 3016,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المندسة",
	            "en" : "Al Mindassah"
	        }
	    },
	    {
	        "city_id" : 3017,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "رفائع الحميمة",
	            "en" : "Rafai Al Humaymah"
	        }
	    },
	    {
	        "city_id" : 3018,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مظيفر",
	            "en" : "Mudhayfir"
	        }
	    },
	    {
	        "city_id" : 3019,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العمودة",
	            "en" : "Al Amudah"
	        }
	    },
	    {
	        "city_id" : 3020,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الروضة",
	            "en" : "Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 3021,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أبو طلح",
	            "en" : "Abu Talh"
	        }
	    },
	    {
	        "city_id" : 3022,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مهيضة",
	            "en" : "Mihayyidah"
	        }
	    },
	    {
	        "city_id" : 3023,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "جرار",
	            "en" : "Jarrar"
	        }
	    },
	    {
	        "city_id" : 3024,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "فياضة",
	            "en" : "Fayyadah"
	        }
	    },
	    {
	        "city_id" : 3025,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "كحلة",
	            "en" : "Kihlah"
	        }
	    },
	    {
	        "city_id" : 3026,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "رفائع الحجرة",
	            "en" : "Rufai Al Hajrah"
	        }
	    },
	    {
	        "city_id" : 3027,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مشاش ركيان",
	            "en" : "Mishash Rukayyan"
	        }
	    },
	    {
	        "city_id" : 3028,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أبو عرداء",
	            "en" : "Abu Arda"
	        }
	    },
	    {
	        "city_id" : 3029,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الناصفة",
	            "en" : "An Nasifa"
	        }
	    },
	    {
	        "city_id" : 3030,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "النبهانية",
	            "en" : "An Nabhaniyah"
	        }
	    },
	    {
	        "city_id" : 3031,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ثادج",
	            "en" : "Thadij"
	        }
	    },
	    {
	        "city_id" : 3032,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ربيق",
	            "en" : "Rubayq"
	        }
	    },
	    {
	        "city_id" : 3033,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "سامودة",
	            "en" : "Samudah"
	        }
	    },
	    {
	        "city_id" : 3034,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الملقاء",
	            "en" : "Al Malqa"
	        }
	    },
	    {
	        "city_id" : 3035,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الخرماء",
	            "en" : "Al Kharma"
	        }
	    },
	    {
	        "city_id" : 3036,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الخرماءالشمالية",
	            "en" : "Al Kharma Ash Shamaliyah"
	        }
	    },
	    {
	        "city_id" : 3037,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحيسونية",
	            "en" : "Al Haysuniyah"
	        }
	    },
	    {
	        "city_id" : 3038,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القعير",
	            "en" : "Al Quayyir"
	        }
	    },
	    {
	        "city_id" : 3039,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العمار",
	            "en" : "Al Amar"
	        }
	    },
	    {
	        "city_id" : 3040,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "قريضة",
	            "en" : "Quraydah"
	        }
	    },
	    {
	        "city_id" : 3041,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الجصة",
	            "en" : "Al Jissah"
	        }
	    },
	    {
	        "city_id" : 3042,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "بيار علي",
	            "en" : "Biyar Ali"
	        }
	    },
	    {
	        "city_id" : 3043,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أبو كبير",
	            "en" : "Abu Kabir"
	        }
	    },
	    {
	        "city_id" : 3044,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الدويخلة",
	            "en" : "Ad Duwaykhilah"
	        }
	    },
	    {
	        "city_id" : 3045,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الوعيرة",
	            "en" : "Al Wuayrah"
	        }
	    },
	    {
	        "city_id" : 3046,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الجرف",
	            "en" : "Al Jurf"
	        }
	    },
	    {
	        "city_id" : 3047,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العيون",
	            "en" : "Al Ayun"
	        }
	    },
	    {
	        "city_id" : 3048,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الخليل",
	            "en" : "Al Khulayl"
	        }
	    },
	    {
	        "city_id" : 3049,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "نعامين",
	            "en" : "Naamin"
	        }
	    },
	    {
	        "city_id" : 3050,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "مليحة",
	            "en" : "Mulayhah"
	        }
	    },
	    {
	        "city_id" : 3051,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العاقول",
	            "en" : "Al Aqul"
	        }
	    },
	    {
	        "city_id" : 3052,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الحار السفلى",
	            "en" : "Al Har As Sufla"
	        }
	    },
	    {
	        "city_id" : 3053,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "مفرحات",
	            "en" : "Mufarrihat"
	        }
	    },
	    {
	        "city_id" : 3054,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "القطيعاء",
	            "en" : "Al Qutaya"
	        }
	    },
	    {
	        "city_id" : 3055,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الفرع",
	            "en" : "Al Fara"
	        }
	    },
	    {
	        "city_id" : 3056,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الفقارة",
	            "en" : "Al Fuqarah"
	        }
	    },
	    {
	        "city_id" : 3057,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أرباق",
	            "en" : "Arbaq"
	        }
	    },
	    {
	        "city_id" : 3058,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المليليح",
	            "en" : "Al Mulaylih"
	        }
	    },
	    {
	        "city_id" : 3059,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المغرة",
	            "en" : "Al Magharah"
	        }
	    },
	    {
	        "city_id" : 3060,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أبو نمصات",
	            "en" : "Abu Numasat"
	        }
	    },
	    {
	        "city_id" : 3061,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "دثير",
	            "en" : "Dithir"
	        }
	    },
	    {
	        "city_id" : 3062,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العقيلة",
	            "en" : "Al Uqaylah"
	        }
	    },
	    {
	        "city_id" : 3063,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العوينة",
	            "en" : "Al Uwaynah"
	        }
	    },
	    {
	        "city_id" : 3064,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الخضراء",
	            "en" : "Al Khadra"
	        }
	    },
	    {
	        "city_id" : 3065,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الثعلة",
	            "en" : "Ath Thaalah"
	        }
	    },
	    {
	        "city_id" : 3066,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الحار العليا",
	            "en" : "Al Har Al Ulya"
	        }
	    },
	    {
	        "city_id" : 3067,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المضيبعة",
	            "en" : "Al Mudaybiah"
	        }
	    },
	    {
	        "city_id" : 3068,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "السوسي",
	            "en" : "As Susi"
	        }
	    },
	    {
	        "city_id" : 3069,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الشلايل",
	            "en" : "Ash Shalayil"
	        }
	    },
	    {
	        "city_id" : 3070,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أويدك",
	            "en" : "Uwaydik"
	        }
	    },
	    {
	        "city_id" : 3071,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الغريض",
	            "en" : "Al Gharid"
	        }
	    },
	    {
	        "city_id" : 3072,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الصيفي",
	            "en" : "As Sayfi"
	        }
	    },
	    {
	        "city_id" : 3073,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الغصن",
	            "en" : "Al Ghusan"
	        }
	    },
	    {
	        "city_id" : 3074,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الظمو",
	            "en" : "Adh Dhamu"
	        }
	    },
	    {
	        "city_id" : 3075,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الطرقية",
	            "en" : "Al Tarqiyah"
	        }
	    },
	    {
	        "city_id" : 3076,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أم العيال",
	            "en" : "Umm Al Iyal"
	        }
	    },
	    {
	        "city_id" : 3077,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الملبنة",
	            "en" : "Al Malbanah"
	        }
	    },
	    {
	        "city_id" : 3078,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "حنذ",
	            "en" : "Hanadh"
	        }
	    },
	    {
	        "city_id" : 3079,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الهندية",
	            "en" : "Al Hindiyah"
	        }
	    },
	    {
	        "city_id" : 3080,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المرير",
	            "en" : "Al Murayr"
	        }
	    },
	    {
	        "city_id" : 3081,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الدحو",
	            "en" : "Ad Duhu"
	        }
	    },
	    {
	        "city_id" : 3082,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "النقيعاء",
	            "en" : "An Nuqaya"
	        }
	    },
	    {
	        "city_id" : 3083,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المشينية",
	            "en" : "Al Mushayniyah"
	        }
	    },
	    {
	        "city_id" : 3084,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "القافلة",
	            "en" : "Al Qafilah"
	        }
	    },
	    {
	        "city_id" : 3085,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "اللثامة",
	            "en" : "Al Lithamah"
	        }
	    },
	    {
	        "city_id" : 3086,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الملحة",
	            "en" : "Al Milhah"
	        }
	    },
	    {
	        "city_id" : 3087,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العيزاء",
	            "en" : "Al Ayza"
	        }
	    },
	    {
	        "city_id" : 3088,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "النقرة",
	            "en" : "An Nuqrah"
	        }
	    },
	    {
	        "city_id" : 3089,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "البردية",
	            "en" : "Al Bardiyah"
	        }
	    },
	    {
	        "city_id" : 3090,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العشيرة",
	            "en" : "Al Ushayrah"
	        }
	    },
	    {
	        "city_id" : 3091,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "القصيبة",
	            "en" : "Al Qisayyibah"
	        }
	    },
	    {
	        "city_id" : 3092,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الشوامين",
	            "en" : "Ash Shuwamin"
	        }
	    },
	    {
	        "city_id" : 3093,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الشفية",
	            "en" : "Ash Shifayyah"
	        }
	    },
	    {
	        "city_id" : 3094,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "تيتد",
	            "en" : "Taytad"
	        }
	    },
	    {
	        "city_id" : 3095,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "البييرات",
	            "en" : "Al Buyayrat"
	        }
	    },
	    {
	        "city_id" : 3096,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "هرمة",
	            "en" : "Hurumah"
	        }
	    },
	    {
	        "city_id" : 3097,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العثيا",
	            "en" : "Al Uthayya"
	        }
	    },
	    {
	        "city_id" : 3098,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "شقري",
	            "en" : "Shiqri"
	        }
	    },
	    {
	        "city_id" : 3099,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "شجوى",
	            "en" : "Shajwa"
	        }
	    },
	    {
	        "city_id" : 3100,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "البوير",
	            "en" : "Al Buwair"
	        }
	    },
	    {
	        "city_id" : 3101,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الشقرة",
	            "en" : "Ash Shuqrah"
	        }
	    },
	    {
	        "city_id" : 3102,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الصويدرة",
	            "en" : "As Suwaydirah"
	        }
	    },
	    {
	        "city_id" : 3103,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الفريش",
	            "en" : "Al Furaysh"
	        }
	    },
	    {
	        "city_id" : 3104,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الريان",
	            "en" : "Ar Rayyan"
	        }
	    },
	    {
	        "city_id" : 3105,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المليليح",
	            "en" : "Al Mulaylih"
	        }
	    },
	    {
	        "city_id" : 3106,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الرصيعة",
	            "en" : "Ar Rasiah"
	        }
	    },
	    {
	        "city_id" : 3107,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "ابار الماشي",
	            "en" : "Abar Al Mashi"
	        }
	    },
	    {
	        "city_id" : 3108,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "رواوة",
	            "en" : "Ruwawah"
	        }
	    },
	    {
	        "city_id" : 3109,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الجفر",
	            "en" : "Al Jafur"
	        }
	    },
	    {
	        "city_id" : 3110,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "ابو ضباع",
	            "en" : "Abu Diba"
	        }
	    },
	    {
	        "city_id" : 3111,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المضيق",
	            "en" : "Al Madiq"
	        }
	    },
	    {
	        "city_id" : 3112,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الاكحل",
	            "en" : "Al Akhal"
	        }
	    },
	    {
	        "city_id" : 3113,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "اليتمة",
	            "en" : "Al Yitimah"
	        }
	    },
	    {
	        "city_id" : 3114,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الفقير",
	            "en" : "Al Faqir"
	        }
	    },
	    {
	        "city_id" : 3115,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المندسة",
	            "en" : "Al Mandassah"
	        }
	    },
	    {
	        "city_id" : 3116,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "بواط",
	            "en" : "Buwat"
	        }
	    },
	    {
	        "city_id" : 3117,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "العصيلب",
	            "en" : "Al Usaylib"
	        }
	    },
	    {
	        "city_id" : 3118,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "الجفدور",
	            "en" : "Al Jifdur"
	        }
	    },
	    {
	        "city_id" : 3119,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "مسكة",
	            "en" : "Miskah"
	        }
	    },
	    {
	        "city_id" : 3120,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "أم المحاش",
	            "en" : "Umm Al Mahash"
	        }
	    },
	    {
	        "city_id" : 3121,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "عيدة",
	            "en" : "Idah"
	        }
	    },
	    {
	        "city_id" : 3122,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الرفائع",
	            "en" : "Ar Rufai"
	        }
	    },
	    {
	        "city_id" : 3123,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "صميعر",
	            "en" : "Sumayir"
	        }
	    },
	    {
	        "city_id" : 3124,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "فيضة سلام",
	            "en" : "Faydat Salam"
	        }
	    },
	    {
	        "city_id" : 3125,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "طفيلة",
	            "en" : "Tufaylah"
	        }
	    },
	    {
	        "city_id" : 3126,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "حليوة",
	            "en" : "Hulaywah"
	        }
	    },
	    {
	        "city_id" : 3127,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "هرمول",
	            "en" : "Hurmul"
	        }
	    },
	    {
	        "city_id" : 3128,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "روضة عسعس",
	            "en" : "Rawdat Asas"
	        }
	    },
	    {
	        "city_id" : 3129,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المطيوي",
	            "en" : "Al Mutaywi"
	        }
	    },
	    {
	        "city_id" : 3130,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بدائع هويشلة",
	            "en" : "Badai Huwayshilah"
	        }
	    },
	    {
	        "city_id" : 3131,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الكفية",
	            "en" : "Al Kuffiyah"
	        }
	    },
	    {
	        "city_id" : 3132,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بقيعاء الجنوبية",
	            "en" : "Buqaya Al Janubiyah"
	        }
	    },
	    {
	        "city_id" : 3133,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الرفايع",
	            "en" : "Ar Rufayi"
	        }
	    },
	    {
	        "city_id" : 3134,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الظاهرية",
	            "en" : "Adh Dhahiriyah"
	        }
	    },
	    {
	        "city_id" : 3135,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "المندسة",
	            "en" : "Al Mindassah"
	        }
	    },
	    {
	        "city_id" : 3136,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العقلة",
	            "en" : "Al Uqlah"
	        }
	    },
	    {
	        "city_id" : 3137,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القاعية",
	            "en" : "Al Qaiyah"
	        }
	    },
	    {
	        "city_id" : 3138,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الضبعية",
	            "en" : "Ad Dibiyah"
	        }
	    },
	    {
	        "city_id" : 3139,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بدائع الضبعية",
	            "en" : "Badai Ad Dibiyah"
	        }
	    },
	    {
	        "city_id" : 3140,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "جفرة الجديدة",
	            "en" : "Jafrat Al Jadidah"
	        }
	    },
	    {
	        "city_id" : 3141,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "جفرة",
	            "en" : "Jafrah"
	        }
	    },
	    {
	        "city_id" : 3142,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الحمادة",
	            "en" : "Al Hamadah"
	        }
	    },
	    {
	        "city_id" : 3143,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بدائع مشرفة",
	            "en" : "Badai Mushrifah"
	        }
	    },
	    {
	        "city_id" : 3144,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "نجخ الجنوبي",
	            "en" : "Najikh Al Janubi"
	        }
	    },
	    {
	        "city_id" : 3145,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "نجخ الشمالي",
	            "en" : "Najikh Al Shamali"
	        }
	    },
	    {
	        "city_id" : 3146,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "القويعية",
	            "en" : "Al Quwayiyah"
	        }
	    },
	    {
	        "city_id" : 3147,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "صعينين",
	            "en" : "Suaynin"
	        }
	    },
	    {
	        "city_id" : 3148,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ليم",
	            "en" : "Laym"
	        }
	    },
	    {
	        "city_id" : 3149,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "السليسية",
	            "en" : "As Sulaysiyah"
	        }
	    },
	    {
	        "city_id" : 3150,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بئر زهيميلة",
	            "en" : "Bir Zuhaymilah"
	        }
	    },
	    {
	        "city_id" : 3151,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "ضرية",
	            "en" : "Dariyah"
	        }
	    },
	    {
	        "city_id" : 3152,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "الصمعورية",
	            "en" : "As Sumuriyah"
	        }
	    },
	    {
	        "city_id" : 3153,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "سلام",
	            "en" : "Salam"
	        }
	    },
	    {
	        "city_id" : 3154,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "العاقر",
	            "en" : "Al Aqir"
	        }
	    },
	    {
	        "city_id" : 3155,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بدائع ريمان",
	            "en" : "Badai Riman"
	        }
	    },
	    {
	        "city_id" : 3156,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "بدائع الضبطان",
	            "en" : "Badai Ad Dubtan"
	        }
	    },
	    {
	        "city_id" : 3157,
	        "region_id" : 5,
	        "name" : {
	            "ar" : "البعجاء",
	            "en" : "Al Baja"
	        }
	    },
	    {
	        "city_id" : 3158,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحريق",
	            "en" : "Al Hariq"
	        }
	    },
	    {
	        "city_id" : 3159,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "نعام",
	            "en" : "An Naam"
	        }
	    },
	    {
	        "city_id" : 3160,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حوطة الحلوة",
	            "en" : "Hutat Al Hilwah"
	        }
	    },
	    {
	        "city_id" : 3161,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حوطة بني تميم",
	            "en" : "Hawtat Bani Tamim"
	        }
	    },
	    {
	        "city_id" : 3162,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "اسفل الباطن",
	            "en" : "Asfal Al Batin"
	        }
	    },
	    {
	        "city_id" : 3163,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفرعة",
	            "en" : "Al Farah"
	        }
	    },
	    {
	        "city_id" : 3164,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المثعب",
	            "en" : "Al Mithab"
	        }
	    },
	    {
	        "city_id" : 3165,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحلوة",
	            "en" : "Al Hilwah"
	        }
	    },
	    {
	        "city_id" : 3166,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحيطان",
	            "en" : "Al Haytan"
	        }
	    },
	    {
	        "city_id" : 3167,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "وادي البرك",
	            "en" : "Wadi Al Bark"
	        }
	    },
	    {
	        "city_id" : 3168,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الشكرة",
	            "en" : "Ash Shukrah"
	        }
	    },
	    {
	        "city_id" : 3169,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الفيصلية",
	            "en" : "Al Faysaliyah"
	        }
	    },
	    {
	        "city_id" : 3170,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "النايفية",
	            "en" : "An Naifiyah"
	        }
	    },
	    {
	        "city_id" : 3171,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "القطين",
	            "en" : "Al Qatin"
	        }
	    },
	    {
	        "city_id" : 3172,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الخرفة",
	            "en" : "Al Kharfah"
	        }
	    },
	    {
	        "city_id" : 3173,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الروضة",
	            "en" : "Ar Rawdah"
	        }
	    },
	    {
	        "city_id" : 3174,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ليلى",
	            "en" : "Layla"
	        }
	    },
	    {
	        "city_id" : 3175,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "سويدانا",
	            "en" : "Swidana"
	        }
	    },
	    {
	        "city_id" : 3176,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مروان",
	            "en" : "Marwan"
	        }
	    },
	    {
	        "city_id" : 3177,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "واسط",
	            "en" : "Wasit"
	        }
	    },
	    {
	        "city_id" : 3178,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الحمر",
	            "en" : "Al Hamr"
	        }
	    },
	    {
	        "city_id" : 3179,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البديع الجنوبى",
	            "en" : "Al Badi Al Janubi"
	        }
	    },
	    {
	        "city_id" : 3180,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البديع الشمالي",
	            "en" : "Al Badi Ash Shamali"
	        }
	    },
	    {
	        "city_id" : 3181,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الهدار",
	            "en" : "Al Haddar"
	        }
	    },
	    {
	        "city_id" : 3182,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ساقي الناهض",
	            "en" : "Saqi An Nahid"
	        }
	    },
	    {
	        "city_id" : 3183,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "الغيل",
	            "en" : "Al Ghayl"
	        }
	    },
	    {
	        "city_id" : 3184,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "ستارة",
	            "en" : "Sitarah"
	        }
	    },
	    {
	        "city_id" : 3185,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "حراضة",
	            "en" : "Haradah"
	        }
	    },
	    {
	        "city_id" : 3186,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الفرعة",
	            "en" : "Al Farah"
	        }
	    },
	    {
	        "city_id" : 3187,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العثيثي",
	            "en" : "Al Uthaythi"
	        }
	    },
	    {
	        "city_id" : 3188,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "ا لحفائر",
	            "en" : "Al Hafair"
	        }
	    },
	    {
	        "city_id" : 3189,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السلم",
	            "en" : "As Salam"
	        }
	    },
	    {
	        "city_id" : 3190,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القاعية",
	            "en" : "Al Qaiyah"
	        }
	    },
	    {
	        "city_id" : 3191,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "القوامة",
	            "en" : "Al Quwamah"
	        }
	    },
	    {
	        "city_id" : 3192,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الغافة",
	            "en" : "Al Ghafah"
	        }
	    },
	    {
	        "city_id" : 3193,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحدة",
	            "en" : "Al Hiddah"
	        }
	    },
	    {
	        "city_id" : 3194,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "المغراء",
	            "en" : "Al Maghara"
	        }
	    },
	    {
	        "city_id" : 3195,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "العفيرية",
	            "en" : "Al Ufayriyah"
	        }
	    },
	    {
	        "city_id" : 3196,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "أبو ملوح",
	            "en" : "Abu Miluh"
	        }
	    },
	    {
	        "city_id" : 3197,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "النغر",
	            "en" : "An Naghar"
	        }
	    },
	    {
	        "city_id" : 3198,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "السدر",
	            "en" : "As Sadr"
	        }
	    },
	    {
	        "city_id" : 3199,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الجر ثمية",
	            "en" : "Al Jarr Thamiyyah"
	        }
	    },
	    {
	        "city_id" : 3200,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "الحجف",
	            "en" : "Al Hijif"
	        }
	    },
	    {
	        "city_id" : 3201,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "إبن غوف",
	            "en" : "Ibn Ghuf"
	        }
	    },
	    {
	        "city_id" : 3202,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الميفا",
	            "en" : "Al Mifa"
	        }
	    },
	    {
	        "city_id" : 3203,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "القرن",
	            "en" : "Al Qarn"
	        }
	    },
	    {
	        "city_id" : 3204,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الامرة",
	            "en" : "Al Umrah"
	        }
	    },
	    {
	        "city_id" : 3205,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "النجيل",
	            "en" : "An Nijil"
	        }
	    },
	    {
	        "city_id" : 3206,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الطيف",
	            "en" : "At Tayf"
	        }
	    },
	    {
	        "city_id" : 3207,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "السمعة",
	            "en" : "As Samaah"
	        }
	    },
	    {
	        "city_id" : 3208,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "نابر",
	            "en" : "Nabir"
	        }
	    },
	    {
	        "city_id" : 3209,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الضاحي",
	            "en" : "Ad Dahi"
	        }
	    },
	    {
	        "city_id" : 3210,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الزرعة",
	            "en" : "Az Ziraah"
	        }
	    },
	    {
	        "city_id" : 3211,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الاشيرة",
	            "en" : "Al Ishayrah"
	        }
	    },
	    {
	        "city_id" : 3212,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الصور",
	            "en" : "As Sur"
	        }
	    },
	    {
	        "city_id" : 3213,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "فرعة العطاردة",
	            "en" : "Farat Al Atardah"
	        }
	    },
	    {
	        "city_id" : 3214,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "القهب",
	            "en" : "Al Qahab"
	        }
	    },
	    {
	        "city_id" : 3215,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الحصحص",
	            "en" : "Al Hashas"
	        }
	    },
	    {
	        "city_id" : 3216,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "قراما",
	            "en" : "Qurama"
	        }
	    },
	    {
	        "city_id" : 3217,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "العياش",
	            "en" : "Al Ayyash"
	        }
	    },
	    {
	        "city_id" : 3218,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "آل سعيد",
	            "en" : "Al Said"
	        }
	    },
	    {
	        "city_id" : 3219,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الغصنة",
	            "en" : "Al Ghasanah"
	        }
	    },
	    {
	        "city_id" : 3220,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "قلوة",
	            "en" : "Qilwah"
	        }
	    },
	    {
	        "city_id" : 3221,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الشعراء",
	            "en" : "Ash Shara"
	        }
	    },
	    {
	        "city_id" : 3222,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "نيرا",
	            "en" : "Nira"
	        }
	    },
	    {
	        "city_id" : 3223,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الجوة",
	            "en" : "Al Jiwah"
	        }
	    },
	    {
	        "city_id" : 3224,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الفرع",
	            "en" : "Al Far"
	        }
	    },
	    {
	        "city_id" : 3225,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الهتافرة",
	            "en" : "Al Hatafirah"
	        }
	    },
	    {
	        "city_id" : 3226,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "القريع",
	            "en" : "Al Qari"
	        }
	    },
	    {
	        "city_id" : 3227,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "المسودة",
	            "en" : "Al Maswadah"
	        }
	    },
	    {
	        "city_id" : 3228,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الحشو",
	            "en" : "Al Hashu"
	        }
	    },
	    {
	        "city_id" : 3229,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "فرعة بني سهيم",
	            "en" : "Farat Bani Suhaym"
	        }
	    },
	    {
	        "city_id" : 3230,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "العقدة",
	            "en" : "Al Uqdah"
	        }
	    },
	    {
	        "city_id" : 3231,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "العواصية",
	            "en" : "Al Awasiyah"
	        }
	    },
	    {
	        "city_id" : 3232,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "القصيباء",
	            "en" : "Al Qusayba"
	        }
	    },
	    {
	        "city_id" : 3233,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الرهوة",
	            "en" : "Ar Rahwah"
	        }
	    },
	    {
	        "city_id" : 3234,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "الحصن",
	            "en" : "Al Husn"
	        }
	    },
	    {
	        "city_id" : 3235,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "غامد الزناد",
	            "en" : "Ghamid Az Zinad"
	        }
	    },
	    {
	        "city_id" : 3236,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "المخواة",
	            "en" : "Al Mukhwah"
	        }
	    },
	    {
	        "city_id" : 3237,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "نصبة",
	            "en" : "Nusubah"
	        }
	    },
	    {
	        "city_id" : 3238,
	        "region_id" : 9,
	        "name" : {
	            "ar" : "ناوان",
	            "en" : "Nawan"
	        }
	    },
	    {
	        "city_id" : 3239,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العرق",
	            "en" : "Al Irq"
	        }
	    },
	    {
	        "city_id" : 3240,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "كعب",
	            "en" : "Kab"
	        }
	    },
	    {
	        "city_id" : 3241,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخاضرة",
	            "en" : "Al Khadirah"
	        }
	    },
	    {
	        "city_id" : 3242,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرن الأبيض",
	            "en" : "Al Qarn Al Abyad"
	        }
	    },
	    {
	        "city_id" : 3243,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الدحض",
	            "en" : "Ad Dahid"
	        }
	    },
	    {
	        "city_id" : 3244,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الظهارة",
	            "en" : "Adh Dhaharah"
	        }
	    },
	    {
	        "city_id" : 3245,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مخدرة",
	            "en" : "Makhdarah"
	        }
	    },
	    {
	        "city_id" : 3246,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخضراء",
	            "en" : "Al Khadra"
	        }
	    },
	    {
	        "city_id" : 3247,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرية",
	            "en" : "Al Qaryah"
	        }
	    },
	    {
	        "city_id" : 3248,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بني مليح",
	            "en" : "Bany Mulayh"
	        }
	    },
	    {
	        "city_id" : 3249,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "وادي الغيل",
	            "en" : "Wadi Al Ghayl"
	        }
	    },
	    {
	        "city_id" : 3250,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مليح",
	            "en" : "Milayyah"
	        }
	    },
	    {
	        "city_id" : 3251,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ربوع السرو",
	            "en" : "Rubu As Sarw"
	        }
	    },
	    {
	        "city_id" : 3252,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل بو خشيف",
	            "en" : "Al Bukhishayf"
	        }
	    },
	    {
	        "city_id" : 3253,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بهوان",
	            "en" : "Bahwan"
	        }
	    },
	    {
	        "city_id" : 3254,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الضاربين",
	            "en" : "Ad Daribayn"
	        }
	    },
	    {
	        "city_id" : 3255,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مخلد",
	            "en" : "Al Makhlad"
	        }
	    },
	    {
	        "city_id" : 3256,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عباس",
	            "en" : "Al Abbas"
	        }
	    },
	    {
	        "city_id" : 3257,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مضرة",
	            "en" : "Al Midrah"
	        }
	    },
	    {
	        "city_id" : 3258,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "غاشرة",
	            "en" : "Ghashirah"
	        }
	    },
	    {
	        "city_id" : 3259,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ذبوب",
	            "en" : "Dhabub"
	        }
	    },
	    {
	        "city_id" : 3260,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مجالد",
	            "en" : "Mijalid"
	        }
	    },
	    {
	        "city_id" : 3261,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل سخيطة",
	            "en" : "Al Sakhaytah"
	        }
	    },
	    {
	        "city_id" : 3262,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عبالة",
	            "en" : "Aballah"
	        }
	    },
	    {
	        "city_id" : 3263,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عبيد",
	            "en" : "Al Ubayd"
	        }
	    },
	    {
	        "city_id" : 3264,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مشاعر",
	            "en" : "Al Mishair"
	        }
	    },
	    {
	        "city_id" : 3265,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مسفرة",
	            "en" : "Misfirah"
	        }
	    },
	    {
	        "city_id" : 3266,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل فرش",
	            "en" : "Al Farsh"
	        }
	    },
	    {
	        "city_id" : 3267,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحفاة",
	            "en" : "Al Hufah"
	        }
	    },
	    {
	        "city_id" : 3268,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الصرة",
	            "en" : "As Surrah"
	        }
	    },
	    {
	        "city_id" : 3269,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حوراء",
	            "en" : "Hawra"
	        }
	    },
	    {
	        "city_id" : 3270,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القرن",
	            "en" : "Al Qarn"
	        }
	    },
	    {
	        "city_id" : 3271,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "كبدة",
	            "en" : "Kubadah"
	        }
	    },
	    {
	        "city_id" : 3272,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العينين",
	            "en" : "Al Aynayn"
	        }
	    },
	    {
	        "city_id" : 3273,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "تنومة",
	            "en" : "Tanumah"
	        }
	    },
	    {
	        "city_id" : 3274,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الواديين",
	            "en" : "Al Wadiyayn"
	        }
	    },
	    {
	        "city_id" : 3275,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بللسمر",
	            "en" : "Billasmar"
	        }
	    },
	    {
	        "city_id" : 3276,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل لجم",
	            "en" : "Al Lajam"
	        }
	    },
	    {
	        "city_id" : 3277,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الاثنين",
	            "en" : "Al Ithnayn"
	        }
	    },
	    {
	        "city_id" : 3278,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل غلفق",
	            "en" : "Al Ghalfaq"
	        }
	    },
	    {
	        "city_id" : 3279,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سحيبان",
	            "en" : "Suhayban"
	        }
	    },
	    {
	        "city_id" : 3280,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العمارة",
	            "en" : "Al Ammarah"
	        }
	    },
	    {
	        "city_id" : 3281,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "قيان",
	            "en" : "Qiyan"
	        }
	    },
	    {
	        "city_id" : 3282,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الغرس",
	            "en" : "Al Ghars"
	        }
	    },
	    {
	        "city_id" : 3283,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحكيمة",
	            "en" : "Al Hakimah"
	        }
	    },
	    {
	        "city_id" : 3284,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرقوة",
	            "en" : "Ar Raqwah"
	        }
	    },
	    {
	        "city_id" : 3285,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الجلدة",
	            "en" : "Al Al Jildah"
	        }
	    },
	    {
	        "city_id" : 3286,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "مشروفة",
	            "en" : "Mashrufah"
	        }
	    },
	    {
	        "city_id" : 3287,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "لاهمة",
	            "en" : "Lahmah"
	        }
	    },
	    {
	        "city_id" : 3288,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل فهيد",
	            "en" : "Al Fuhayd"
	        }
	    },
	    {
	        "city_id" : 3289,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحدباء",
	            "en" : "Al Hadba"
	        }
	    },
	    {
	        "city_id" : 3290,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل صنيج",
	            "en" : "Al Sunayj"
	        }
	    },
	    {
	        "city_id" : 3291,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عرفان",
	            "en" : "Al Urfan"
	        }
	    },
	    {
	        "city_id" : 3292,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل كشيم",
	            "en" : "Al Kushaym"
	        }
	    },
	    {
	        "city_id" : 3293,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحذيان",
	            "en" : "Al Hadhyan"
	        }
	    },
	    {
	        "city_id" : 3294,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العرفان",
	            "en" : "Al Urfan"
	        }
	    },
	    {
	        "city_id" : 3295,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حافظ",
	            "en" : "Hafidh"
	        }
	    },
	    {
	        "city_id" : 3296,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العلوبي",
	            "en" : "Al Ulubi"
	        }
	    },
	    {
	        "city_id" : 3297,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرمضة",
	            "en" : "Ar Rumadah"
	        }
	    },
	    {
	        "city_id" : 3298,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العرين",
	            "en" : "Al Arin"
	        }
	    },
	    {
	        "city_id" : 3299,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "فرعة طريب",
	            "en" : "Turaib"
	        }
	    },
	    {
	        "city_id" : 3300,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الزهرة",
	            "en" : "Az Zahrah"
	        }
	    },
	    {
	        "city_id" : 3301,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل معدي",
	            "en" : "Al Maaddi"
	        }
	    },
	    {
	        "city_id" : 3302,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الغلقة",
	            "en" : "Al Ghiliqah"
	        }
	    },
	    {
	        "city_id" : 3303,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجلدة",
	            "en" : "Al Jildah"
	        }
	    },
	    {
	        "city_id" : 3304,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل قنبة",
	            "en" : "Al Qunbah"
	        }
	    },
	    {
	        "city_id" : 3305,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الربعة",
	            "en" : "Ar Ribaah"
	        }
	    },
	    {
	        "city_id" : 3306,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الوهابة",
	            "en" : "Al Wahabah"
	        }
	    },
	    {
	        "city_id" : 3307,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل سعيدة",
	            "en" : "Al Saidah"
	        }
	    },
	    {
	        "city_id" : 3308,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل كولت",
	            "en" : "Al Kulat"
	        }
	    },
	    {
	        "city_id" : 3309,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل جلال",
	            "en" : "Al Jallal"
	        }
	    },
	    {
	        "city_id" : 3310,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل محي",
	            "en" : "Al Mihi"
	        }
	    },
	    {
	        "city_id" : 3311,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحدباء",
	            "en" : "Al Hadba"
	        }
	    },
	    {
	        "city_id" : 3312,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحنجور",
	            "en" : "Al Hunjur"
	        }
	    },
	    {
	        "city_id" : 3313,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحنو",
	            "en" : "Al Hinu"
	        }
	    },
	    {
	        "city_id" : 3314,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المنابية",
	            "en" : "Al Manabiyah"
	        }
	    },
	    {
	        "city_id" : 3315,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الزهيد",
	            "en" : "Az Zuhayd"
	        }
	    },
	    {
	        "city_id" : 3316,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المحزمة",
	            "en" : "Al Muhazmah"
	        }
	    },
	    {
	        "city_id" : 3317,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الدربين",
	            "en" : "Ad Darbayn"
	        }
	    },
	    {
	        "city_id" : 3318,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الشعاقة",
	            "en" : "Ash Shaaqah"
	        }
	    },
	    {
	        "city_id" : 3319,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عدن",
	            "en" : "Idin"
	        }
	    },
	    {
	        "city_id" : 3320,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الغول",
	            "en" : "Al Ghawl"
	        }
	    },
	    {
	        "city_id" : 3321,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "درامة",
	            "en" : "Diramah"
	        }
	    },
	    {
	        "city_id" : 3322,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الخلف",
	            "en" : "Al Al Khalaf"
	        }
	    },
	    {
	        "city_id" : 3323,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل مانع",
	            "en" : "Al Mani"
	        }
	    },
	    {
	        "city_id" : 3324,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "نقعة",
	            "en" : "Naqah"
	        }
	    },
	    {
	        "city_id" : 3325,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل غبران",
	            "en" : "Al Ghubran"
	        }
	    },
	    {
	        "city_id" : 3326,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفقاعيس",
	            "en" : "Al Fuqais"
	        }
	    },
	    {
	        "city_id" : 3327,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحريقة",
	            "en" : "Al Hariqah"
	        }
	    },
	    {
	        "city_id" : 3328,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "سراة عبيدة",
	            "en" : "Sarat Abidah"
	        }
	    },
	    {
	        "city_id" : 3329,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العطفة",
	            "en" : "Al Utfah"
	        }
	    },
	    {
	        "city_id" : 3330,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الفرشة",
	            "en" : "Al Farshah"
	        }
	    },
	    {
	        "city_id" : 3331,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الربوعة",
	            "en" : "Ar Rabuah"
	        }
	    },
	    {
	        "city_id" : 3332,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجوة",
	            "en" : "Al Jawwah"
	        }
	    },
	    {
	        "city_id" : 3333,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "عرضين",
	            "en" : "Ardayn"
	        }
	    },
	    {
	        "city_id" : 3334,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "ام الوهط",
	            "en" : "Umm Al Whaht"
	        }
	    },
	    {
	        "city_id" : 3335,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "المنخلي",
	            "en" : "Al Minkhali"
	        }
	    },
	    {
	        "city_id" : 3336,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "خد قيس",
	            "en" : "Khad Qays"
	        }
	    },
	    {
	        "city_id" : 3337,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الحمضة",
	            "en" : "Al Hamdah"
	        }
	    },
	    {
	        "city_id" : 3338,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "تريمة",
	            "en" : "Tirimah"
	        }
	    },
	    {
	        "city_id" : 3339,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الظاهرة",
	            "en" : "Adh Dhahirah"
	        }
	    },
	    {
	        "city_id" : 3340,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "رضية",
	            "en" : "Rudayyah"
	        }
	    },
	    {
	        "city_id" : 3341,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "حزامة",
	            "en" : "Hazamah"
	        }
	    },
	    {
	        "city_id" : 3342,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "بدر الجنوب",
	            "en" : "Badr Al Janub"
	        }
	    },
	    {
	        "city_id" : 3343,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الحرشف",
	            "en" : "Al Harshaf"
	        }
	    },
	    {
	        "city_id" : 3344,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "هدادة",
	            "en" : "Hadadah"
	        }
	    },
	    {
	        "city_id" : 3345,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الخانق",
	            "en" : "Al Khaniq"
	        }
	    },
	    {
	        "city_id" : 3346,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الجفة",
	            "en" : "Al Jifah"
	        }
	    },
	    {
	        "city_id" : 3347,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "شرورة",
	            "en" : "Sharurah"
	        }
	    },
	    {
	        "city_id" : 3348,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "شقة الكناور",
	            "en" : "Shiqqat Al Kanawir"
	        }
	    },
	    {
	        "city_id" : 3349,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "التماني",
	            "en" : "At Tamani"
	        }
	    },
	    {
	        "city_id" : 3350,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الوديعة",
	            "en" : "Al Wadiah"
	        }
	    },
	    {
	        "city_id" : 3351,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المجمع",
	            "en" : "Al Majma"
	        }
	    },
	    {
	        "city_id" : 3352,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "شيبة مسورة",
	            "en" : "Shaybat Miswarah"
	        }
	    },
	    {
	        "city_id" : 3353,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل ثابت",
	            "en" : "Al Thabit"
	        }
	    },
	    {
	        "city_id" : 3354,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الجربة",
	            "en" : "Al Jirbah"
	        }
	    },
	    {
	        "city_id" : 3355,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الغيل",
	            "en" : "Al Ghayl"
	        }
	    },
	    {
	        "city_id" : 3356,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المجزعة",
	            "en" : "Al Majzaah"
	        }
	    },
	    {
	        "city_id" : 3357,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عليا",
	            "en" : "Al Alya"
	        }
	    },
	    {
	        "city_id" : 3358,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل بيضاء",
	            "en" : "Al Bayda"
	        }
	    },
	    {
	        "city_id" : 3359,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل معمر",
	            "en" : "Al Muammar"
	        }
	    },
	    {
	        "city_id" : 3360,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الملحة",
	            "en" : "Al Malhah"
	        }
	    },
	    {
	        "city_id" : 3361,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحاجر",
	            "en" : "Al Hajir"
	        }
	    },
	    {
	        "city_id" : 3362,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "علب",
	            "en" : "Alb"
	        }
	    },
	    {
	        "city_id" : 3363,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الملطاء",
	            "en" : "Al Malta"
	        }
	    },
	    {
	        "city_id" : 3364,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الرهوة",
	            "en" : "Ar Rahwah"
	        }
	    },
	    {
	        "city_id" : 3365,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المجازة",
	            "en" : "Al Mijazah"
	        }
	    },
	    {
	        "city_id" : 3366,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "بن لكرم",
	            "en" : "Bin Lakram"
	        }
	    },
	    {
	        "city_id" : 3367,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "السلاطين",
	            "en" : "As Salatin"
	        }
	    },
	    {
	        "city_id" : 3368,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "المحجر",
	            "en" : "Al Mahjar"
	        }
	    },
	    {
	        "city_id" : 3369,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الوسط",
	            "en" : "Al Wasat"
	        }
	    },
	    {
	        "city_id" : 3370,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العقدة",
	            "en" : "Al Uqdah"
	        }
	    },
	    {
	        "city_id" : 3371,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل الأشعث",
	            "en" : "Al Al Ashath"
	        }
	    },
	    {
	        "city_id" : 3372,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العنثري",
	            "en" : "Al Anthari"
	        }
	    },
	    {
	        "city_id" : 3373,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل عمران",
	            "en" : "Al Imran"
	        }
	    },
	    {
	        "city_id" : 3374,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل جحالي",
	            "en" : "Al Jihali"
	        }
	    },
	    {
	        "city_id" : 3375,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "العرف",
	            "en" : "Al Araf"
	        }
	    },
	    {
	        "city_id" : 3376,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "دهر",
	            "en" : "Dihir"
	        }
	    },
	    {
	        "city_id" : 3377,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحظيرة",
	            "en" : "Al Hadhirah"
	        }
	    },
	    {
	        "city_id" : 3378,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الخضراء",
	            "en" : "Al Khadra"
	        }
	    },
	    {
	        "city_id" : 3379,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "علاف",
	            "en" : "Allaf"
	        }
	    },
	    {
	        "city_id" : 3380,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل يعلى",
	            "en" : "Al Yala"
	        }
	    },
	    {
	        "city_id" : 3381,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "ظهران الجنوب",
	            "en" : "Dhahran Al Janub"
	        }
	    },
	    {
	        "city_id" : 3382,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الطلحة",
	            "en" : "At Talaha"
	        }
	    },
	    {
	        "city_id" : 3383,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الحرجه",
	            "en" : "Al Harajah"
	        }
	    },
	    {
	        "city_id" : 3384,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "الكولة",
	            "en" : "Al Kulah"
	        }
	    },
	    {
	        "city_id" : 3385,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "القصب",
	            "en" : "Al Qasab"
	        }
	    },
	    {
	        "city_id" : 3386,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "حمران",
	            "en" : "Humran"
	        }
	    },
	    {
	        "city_id" : 3387,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "آل لهوة",
	            "en" : "Al Lahwah"
	        }
	    },
	    {
	        "city_id" : 3388,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الهويمل",
	            "en" : "Al Huwaymil"
	        }
	    },
	    {
	        "city_id" : 3389,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "بئر خباش",
	            "en" : "Bir Khubash"
	        }
	    },
	    {
	        "city_id" : 3390,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الخضراء",
	            "en" : "Al Khadra"
	        }
	    },
	    {
	        "city_id" : 3391,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "قابل منيف",
	            "en" : "Qabil Minif"
	        }
	    },
	    {
	        "city_id" : 3392,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الهويد",
	            "en" : "Al Hawid"
	        }
	    },
	    {
	        "city_id" : 3393,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الحجف",
	            "en" : "Al Hijf"
	        }
	    },
	    {
	        "city_id" : 3394,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الدواس",
	            "en" : "Ad Dawas"
	        }
	    },
	    {
	        "city_id" : 3395,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "لاهومة",
	            "en" : "Lahumah"
	        }
	    },
	    {
	        "city_id" : 3396,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "حبونا",
	            "en" : "Hubuna"
	        }
	    },
	    {
	        "city_id" : 3397,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الحصينية",
	            "en" : "Al Husayniyah"
	        }
	    },
	    {
	        "city_id" : 3398,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "قرار",
	            "en" : "Qarar"
	        }
	    },
	    {
	        "city_id" : 3399,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الكدارة",
	            "en" : "Al Kadarah"
	        }
	    },
	    {
	        "city_id" : 3400,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الهجنبة",
	            "en" : "Al Hajanbah"
	        }
	    },
	    {
	        "city_id" : 3401,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القاع",
	            "en" : "Al Qa"
	        }
	    },
	    {
	        "city_id" : 3402,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الدرب",
	            "en" : "Ad Darb"
	        }
	    },
	    {
	        "city_id" : 3403,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ابو السداد",
	            "en" : "Abu As Sadad"
	        }
	    },
	    {
	        "city_id" : 3404,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الشقيق",
	            "en" : "Al Shuqayq"
	        }
	    },
	    {
	        "city_id" : 3405,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحروف",
	            "en" : "Al Huruf"
	        }
	    },
	    {
	        "city_id" : 3406,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "عتود",
	            "en" : "Itwad"
	        }
	    },
	    {
	        "city_id" : 3407,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "رملان",
	            "en" : "Ramlan"
	        }
	    },
	    {
	        "city_id" : 3408,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المنجارة",
	            "en" : "Al Minjarah"
	        }
	    },
	    {
	        "city_id" : 3409,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الدولة",
	            "en" : "Ad Dawlah"
	        }
	    },
	    {
	        "city_id" : 3410,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "مسلية",
	            "en" : "Misliyah"
	        }
	    },
	    {
	        "city_id" : 3411,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الفطيحة",
	            "en" : "Al Fatihah"
	        }
	    },
	    {
	        "city_id" : 3412,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الفيصلية",
	            "en" : "Al Faysaliyah"
	        }
	    },
	    {
	        "city_id" : 3413,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "معمر ريمان",
	            "en" : "Mamar Riman"
	        }
	    },
	    {
	        "city_id" : 3414,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "دوح",
	            "en" : "Dawwah"
	        }
	    },
	    {
	        "city_id" : 3415,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "النقعاء",
	            "en" : "An Naqa"
	        }
	    },
	    {
	        "city_id" : 3416,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "النقعاء",
	            "en" : "An Naqa"
	        }
	    },
	    {
	        "city_id" : 3417,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "نجران",
	            "en" : "Najran"
	        }
	    },
	    {
	        "city_id" : 3418,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "بئر عسكر",
	            "en" : "Bir Askar"
	        }
	    },
	    {
	        "city_id" : 3419,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "نهوقة",
	            "en" : "Nahuqah"
	        }
	    },
	    {
	        "city_id" : 3420,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "ال شهي",
	            "en" : "Al Shahi"
	        }
	    },
	    {
	        "city_id" : 3421,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "رجلاء",
	            "en" : "Rijla"
	        }
	    },
	    {
	        "city_id" : 3422,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "آل سوار",
	            "en" : "Alsuwar"
	        }
	    },
	    {
	        "city_id" : 3423,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "المجمع",
	            "en" : "Al Majma"
	        }
	    },
	    {
	        "city_id" : 3424,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "البرك",
	            "en" : "Al Barak"
	        }
	    },
	    {
	        "city_id" : 3425,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "العريسة",
	            "en" : "Al Arayyisah"
	        }
	    },
	    {
	        "city_id" : 3426,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "رخية",
	            "en" : "Rakhyah"
	        }
	    },
	    {
	        "city_id" : 3427,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الريث",
	            "en" : "Ar Rayth"
	        }
	    },
	    {
	        "city_id" : 3428,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الرهوة",
	            "en" : "Al Rahwah"
	        }
	    },
	    {
	        "city_id" : 3429,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "عثوان",
	            "en" : "Athwan"
	        }
	    },
	    {
	        "city_id" : 3430,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القعقاع",
	            "en" : "Al Qaqa"
	        }
	    },
	    {
	        "city_id" : 3431,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الشملاة",
	            "en" : "Ash Shamlah"
	        }
	    },
	    {
	        "city_id" : 3432,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السهية",
	            "en" : "As Suhayyah"
	        }
	    },
	    {
	        "city_id" : 3433,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "عراب",
	            "en" : "Urab"
	        }
	    },
	    {
	        "city_id" : 3434,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخطوة",
	            "en" : "Al Khutwah"
	        }
	    },
	    {
	        "city_id" : 3435,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحناية",
	            "en" : "Al Hinnayah"
	        }
	    },
	    {
	        "city_id" : 3436,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "النفيعة",
	            "en" : "An Nafiah"
	        }
	    },
	    {
	        "city_id" : 3437,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "زوزاء",
	            "en" : "Zawza"
	        }
	    },
	    {
	        "city_id" : 3438,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الركبة",
	            "en" : "Ar Rukbah"
	        }
	    },
	    {
	        "city_id" : 3439,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العزة",
	            "en" : "Al Izzah"
	        }
	    },
	    {
	        "city_id" : 3440,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "خويعمة",
	            "en" : "Khuwayimah"
	        }
	    },
	    {
	        "city_id" : 3441,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الدخرة",
	            "en" : "Ad Dikarah"
	        }
	    },
	    {
	        "city_id" : 3442,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخشعة",
	            "en" : "Al Khashah"
	        }
	    },
	    {
	        "city_id" : 3443,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الكوابسة",
	            "en" : "Al Kawabisar"
	        }
	    },
	    {
	        "city_id" : 3444,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الهيجاء",
	            "en" : "Al Hayja"
	        }
	    },
	    {
	        "city_id" : 3445,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "اليمانية",
	            "en" : "Al Yamaniyah"
	        }
	    },
	    {
	        "city_id" : 3446,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "فيفاء",
	            "en" : "Fayfa"
	        }
	    },
	    {
	        "city_id" : 3447,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الدائر",
	            "en" : "Ad Dair"
	        }
	    },
	    {
	        "city_id" : 3448,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "عيبان",
	            "en" : "Aiban"
	        }
	    },
	    {
	        "city_id" : 3449,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الطرف",
	            "en" : "Al Taraf"
	        }
	    },
	    {
	        "city_id" : 3450,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ظاهرة الصفا",
	            "en" : "Dhahirat As Safa"
	        }
	    },
	    {
	        "city_id" : 3451,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القاع",
	            "en" : "Al Qa"
	        }
	    },
	    {
	        "city_id" : 3452,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القتب",
	            "en" : "Al Qatab"
	        }
	    },
	    {
	        "city_id" : 3453,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الهياج",
	            "en" : "Al Hiyaj"
	        }
	    },
	    {
	        "city_id" : 3454,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العقدة",
	            "en" : "Al Uqdah"
	        }
	    },
	    {
	        "city_id" : 3455,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العيدابي",
	            "en" : "Al Aydabi"
	        }
	    },
	    {
	        "city_id" : 3456,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "مقزع",
	            "en" : "Muqza"
	        }
	    },
	    {
	        "city_id" : 3457,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "هروب",
	            "en" : "Harub"
	        }
	    },
	    {
	        "city_id" : 3458,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الشريعة",
	            "en" : "Ash Shariah"
	        }
	    },
	    {
	        "city_id" : 3459,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحجروف",
	            "en" : "Al Hajruf"
	        }
	    },
	    {
	        "city_id" : 3460,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "نورة",
	            "en" : "Nurah"
	        }
	    },
	    {
	        "city_id" : 3461,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الأثلة",
	            "en" : "Al Athlah"
	        }
	    },
	    {
	        "city_id" : 3462,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "بيش",
	            "en" : "Baysh"
	        }
	    },
	    {
	        "city_id" : 3463,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحضن",
	            "en" : "Al Hadan"
	        }
	    },
	    {
	        "city_id" : 3464,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القوز",
	            "en" : "Al Qawz"
	        }
	    },
	    {
	        "city_id" : 3465,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحقو",
	            "en" : "Al Haqu"
	        }
	    },
	    {
	        "city_id" : 3466,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القوام",
	            "en" : "Al Quwam"
	        }
	    },
	    {
	        "city_id" : 3467,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المطعن",
	            "en" : "Al Matan"
	        }
	    },
	    {
	        "city_id" : 3468,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العداية",
	            "en" : "Al Addayah"
	        }
	    },
	    {
	        "city_id" : 3469,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الباحر",
	            "en" : "Al Bahir"
	        }
	    },
	    {
	        "city_id" : 3470,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المعترض",
	            "en" : "Al Mutarid"
	        }
	    },
	    {
	        "city_id" : 3471,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "نخلان",
	            "en" : "Nakhlan"
	        }
	    },
	    {
	        "city_id" : 3472,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الغرا",
	            "en" : "Al Ghara"
	        }
	    },
	    {
	        "city_id" : 3473,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العبادلة",
	            "en" : "Al Abadilah"
	        }
	    },
	    {
	        "city_id" : 3474,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العريش",
	            "en" : "Al Arish"
	        }
	    },
	    {
	        "city_id" : 3475,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "مشلحة",
	            "en" : "Mushallahah"
	        }
	    },
	    {
	        "city_id" : 3476,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الرايغة",
	            "en" : "Ar Rayighah"
	        }
	    },
	    {
	        "city_id" : 3477,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الملحاة",
	            "en" : "Al Malha"
	        }
	    },
	    {
	        "city_id" : 3478,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الدهنا",
	            "en" : "Ad Dahna"
	        }
	    },
	    {
	        "city_id" : 3479,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "صبيا",
	            "en" : "Sabya"
	        }
	    },
	    {
	        "city_id" : 3480,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "قائم الدش",
	            "en" : "Qaim Ad Dashsh"
	        }
	    },
	    {
	        "city_id" : 3481,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "صبيا الجديدة",
	            "en" : "Sabya Al Jadidah"
	        }
	    },
	    {
	        "city_id" : 3482,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الكدمي",
	            "en" : "Al Kudmi"
	        }
	    },
	    {
	        "city_id" : 3483,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العشة",
	            "en" : "Al Shshah"
	        }
	    },
	    {
	        "city_id" : 3484,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السلام العليا",
	            "en" : "As Salam Al Ulya"
	        }
	    },
	    {
	        "city_id" : 3485,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ابو القعايد",
	            "en" : "Abu Alqaayid"
	        }
	    },
	    {
	        "city_id" : 3486,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ابو السلع",
	            "en" : "Abu As Sala"
	        }
	    },
	    {
	        "city_id" : 3487,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العالية",
	            "en" : "Al Aliyah"
	        }
	    },
	    {
	        "city_id" : 3488,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "غوان",
	            "en" : "Ghawwan"
	        }
	    },
	    {
	        "city_id" : 3489,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحسيني",
	            "en" : "Al Husayni"
	        }
	    },
	    {
	        "city_id" : 3490,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الظبية",
	            "en" : "Al Dhabyah"
	        }
	    },
	    {
	        "city_id" : 3491,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الجمالة",
	            "en" : "Al Jammalah"
	        }
	    },
	    {
	        "city_id" : 3492,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السبخة",
	            "en" : "Al Sabakhah"
	        }
	    },
	    {
	        "city_id" : 3493,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الفقرة",
	            "en" : "Al Fiqarah"
	        }
	    },
	    {
	        "city_id" : 3494,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "خبت سعيدة",
	            "en" : "Khabt Saidah"
	        }
	    },
	    {
	        "city_id" : 3495,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحمي",
	            "en" : "Al Hima"
	        }
	    },
	    {
	        "city_id" : 3496,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السليل",
	            "en" : "As Sulayl"
	        }
	    },
	    {
	        "city_id" : 3497,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الجهو",
	            "en" : "Al Jahw"
	        }
	    },
	    {
	        "city_id" : 3498,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القمري",
	            "en" : "Al Qumri / Amri /omri"
	        }
	    },
	    {
	        "city_id" : 3499,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ضمد",
	            "en" : "Damad"
	        }
	    },
	    {
	        "city_id" : 3500,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخضيرة",
	            "en" : "Al Khudayrah"
	        }
	    },
	    {
	        "city_id" : 3501,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الشقيري",
	            "en" : "Ash Shuqairi"
	        }
	    },
	    {
	        "city_id" : 3502,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "زبارة رشيد",
	            "en" : "Zabarat Rashid"
	        }
	    },
	    {
	        "city_id" : 3503,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "قنبورة",
	            "en" : "Qanbura"
	        }
	    },
	    {
	        "city_id" : 3504,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "بحرة",
	            "en" : "Bahrah"
	        }
	    },
	    {
	        "city_id" : 3505,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القائم",
	            "en" : "Al Qaim"
	        }
	    },
	    {
	        "city_id" : 3506,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المحصام",
	            "en" : "Al Muhsam"
	        }
	    },
	    {
	        "city_id" : 3507,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحجاجة",
	            "en" : "Al Hajajah"
	        }
	    },
	    {
	        "city_id" : 3508,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الجربة",
	            "en" : "Al Jirbah"
	        }
	    },
	    {
	        "city_id" : 3509,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السادلية",
	            "en" : "As Sadiliyah"
	        }
	    },
	    {
	        "city_id" : 3510,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "مريخية",
	            "en" : "Muraykhiyah"
	        }
	    },
	    {
	        "city_id" : 3511,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العروس",
	            "en" : "Al Arus"
	        }
	    },
	    {
	        "city_id" : 3512,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخزنة",
	            "en" : "Al Khuznah"
	        }
	    },
	    {
	        "city_id" : 3513,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العسيلة",
	            "en" : "Al Usaylah"
	        }
	    },
	    {
	        "city_id" : 3514,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "سد ملاكي",
	            "en" : "Sadd Malaki"
	        }
	    },
	    {
	        "city_id" : 3515,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الكتيفة",
	            "en" : "Al Kutayfah"
	        }
	    },
	    {
	        "city_id" : 3516,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السيبة",
	            "en" : "As Syabah"
	        }
	    },
	    {
	        "city_id" : 3517,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المرزوق",
	            "en" : "Al Marzuq"
	        }
	    },
	    {
	        "city_id" : 3518,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحريقة",
	            "en" : "Al Hariqah"
	        }
	    },
	    {
	        "city_id" : 3519,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الرد",
	            "en" : "Ar Radd"
	        }
	    },
	    {
	        "city_id" : 3520,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "دودة",
	            "en" : "Dudah"
	        }
	    },
	    {
	        "city_id" : 3521,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الدوشية",
	            "en" : "Ad Dawshiyah"
	        }
	    },
	    {
	        "city_id" : 3522,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "أم الحجل",
	            "en" : "Umm Al Hajal"
	        }
	    },
	    {
	        "city_id" : 3523,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المقيدر",
	            "en" : "Al Muqaydir"
	        }
	    },
	    {
	        "city_id" : 3524,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السلامة",
	            "en" : "As Salamah"
	        }
	    },
	    {
	        "city_id" : 3525,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ابو عريش",
	            "en" : "Abu Arish"
	        }
	    },
	    {
	        "city_id" : 3526,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحميرة",
	            "en" : "Al Humayrah"
	        }
	    },
	    {
	        "city_id" : 3527,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "فلس",
	            "en" : "Falas"
	        }
	    },
	    {
	        "city_id" : 3528,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "حاكمة",
	            "en" : "Hakimah"
	        }
	    },
	    {
	        "city_id" : 3529,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الصيابة",
	            "en" : "As Sayyabah"
	        }
	    },
	    {
	        "city_id" : 3530,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العباسية",
	            "en" : "Al Abbasiyah"
	        }
	    },
	    {
	        "city_id" : 3531,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الكروس",
	            "en" : "Al Kurus"
	        }
	    },
	    {
	        "city_id" : 3532,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المبيت",
	            "en" : "Al Mubayyat"
	        }
	    },
	    {
	        "city_id" : 3533,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السرداح",
	            "en" : "As Sirdah"
	        }
	    },
	    {
	        "city_id" : 3534,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المعزاب",
	            "en" : "Al Mizab"
	        }
	    },
	    {
	        "city_id" : 3535,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السودي",
	            "en" : "As Sudy"
	        }
	    },
	    {
	        "city_id" : 3536,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحلحلة",
	            "en" : "Al Halhalah"
	        }
	    },
	    {
	        "city_id" : 3537,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "وعلان",
	            "en" : "Walan"
	        }
	    },
	    {
	        "city_id" : 3538,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "البيسري",
	            "en" : "Al Baysuri"
	        }
	    },
	    {
	        "city_id" : 3539,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ديحمة",
	            "en" : "Dayhamah"
	        }
	    },
	    {
	        "city_id" : 3540,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخلايف",
	            "en" : "Al Khalayif"
	        }
	    },
	    {
	        "city_id" : 3541,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الشنامرة",
	            "en" : "Al Shanamirah"
	        }
	    },
	    {
	        "city_id" : 3542,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "صامطة",
	            "en" : "Samtah"
	        }
	    },
	    {
	        "city_id" : 3543,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الجرادية",
	            "en" : "Al Juradiyah"
	        }
	    },
	    {
	        "city_id" : 3544,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ابو حجر الاسفل",
	            "en" : "Abu Hajar Al Asfal"
	        }
	    },
	    {
	        "city_id" : 3545,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الدغارير",
	            "en" : "Ad Dagharir"
	        }
	    },
	    {
	        "city_id" : 3546,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "حاكمة",
	            "en" : "Hakimah"
	        }
	    },
	    {
	        "city_id" : 3547,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "حاكمة الدغارير",
	            "en" : "Hakimat Ad Dagharir"
	        }
	    },
	    {
	        "city_id" : 3548,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القفل",
	            "en" : "Al Qufl"
	        }
	    },
	    {
	        "city_id" : 3549,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السر",
	            "en" : "As Sirr"
	        }
	    },
	    {
	        "city_id" : 3550,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "اللقية",
	            "en" : "Al Laqyah"
	        }
	    },
	    {
	        "city_id" : 3551,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ابو حجر الأعلى",
	            "en" : "Abu Hajar Al Ala"
	        }
	    },
	    {
	        "city_id" : 3552,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "النجامية",
	            "en" : "An Nujamiyah"
	        }
	    },
	    {
	        "city_id" : 3553,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "شعب الذئب",
	            "en" : "Shib Adh Dhib"
	        }
	    },
	    {
	        "city_id" : 3554,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخوجرة",
	            "en" : "Al Khawjarah"
	        }
	    },
	    {
	        "city_id" : 3555,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الطوال",
	            "en" : "At Tuwal"
	        }
	    },
	    {
	        "city_id" : 3556,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المجنة",
	            "en" : "Al Mijannah"
	        }
	    },
	    {
	        "city_id" : 3557,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "عنطوطة",
	            "en" : "Antutah"
	        }
	    },
	    {
	        "city_id" : 3558,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الجاظع",
	            "en" : "Al Jadhi"
	        }
	    },
	    {
	        "city_id" : 3559,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الركوبة",
	            "en" : "Ar Rukubah"
	        }
	    },
	    {
	        "city_id" : 3560,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "مجعر",
	            "en" : "Mujur"
	        }
	    },
	    {
	        "city_id" : 3561,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الموسم",
	            "en" : "Al Muwassam"
	        }
	    },
	    {
	        "city_id" : 3562,
	        "region_id" : 12,
	        "name" : {
	            "ar" : "الخرخير",
	            "en" : "Al Kharkhir"
	        }
	    },
	    {
	        "city_id" : 3563,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "أبو طوق",
	            "en" : "Abu Tawq"
	        }
	    },
	    {
	        "city_id" : 3564,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العقيل",
	            "en" : "Al Uqail"
	        }
	    },
	    {
	        "city_id" : 3565,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "ختب",
	            "en" : "Khatb"
	        }
	    },
	    {
	        "city_id" : 3566,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "صير",
	            "en" : "Sir"
	        }
	    },
	    {
	        "city_id" : 3567,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القصار",
	            "en" : "Al Qsar"
	        }
	    },
	    {
	        "city_id" : 3568,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المحرق",
	            "en" : "Al Muharq"
	        }
	    },
	    {
	        "city_id" : 3569,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "جنابه",
	            "en" : "Gnaba"
	        }
	    },
	    {
	        "city_id" : 3570,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الميناء الجديد",
	            "en" : "New Port"
	        }
	    },
	    {
	        "city_id" : 3571,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "فرسان",
	            "en" : "Farasan"
	        }
	    },
	    {
	        "city_id" : 3572,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "أم صمدين",
	            "en" : "Umm Sumdayn"
	        }
	    },
	    {
	        "city_id" : 3573,
	        "region_id" : 7,
	        "name" : {
	            "ar" : "المشران",
	            "en" : "Al Mishran"
	        }
	    },
	    {
	        "city_id" : 3581,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "بئر بن هرماس",
	            "en" : "Bir Ibn Hermas"
	        }
	    },
	    {
	        "city_id" : 3582,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الحليسية",
	            "en" : "Al Hulaysiyah"
	        }
	    },
	    {
	        "city_id" : 3583,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "راس ام قصبة",
	            "en" : "Ras Umm Qusbah"
	        }
	    },
	    {
	        "city_id" : 3584,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "خبت البقر",
	            "en" : "Khabt Al Baqar"
	        }
	    },
	    {
	        "city_id" : 3585,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحنبة",
	            "en" : "Al Hanabah"
	        }
	    },
	    {
	        "city_id" : 3586,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "عرق",
	            "en" : "Irq"
	        }
	    },
	    {
	        "city_id" : 3587,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "أبو العشرة",
	            "en" : "Abu Al Usharah"
	        }
	    },
	    {
	        "city_id" : 3588,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "جرار",
	            "en" : "Jarrar"
	        }
	    },
	    {
	        "city_id" : 3589,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العيشة",
	            "en" : "Al Ayshah"
	        }
	    },
	    {
	        "city_id" : 3590,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "جبل عبادل",
	            "en" : "Jabal Abadil"
	        }
	    },
	    {
	        "city_id" : 3591,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "البحثة",
	            "en" : "Al Bihthah"
	        }
	    },
	    {
	        "city_id" : 3592,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المجازيع",
	            "en" : "Al Mijazi"
	        }
	    },
	    {
	        "city_id" : 3593,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المسكية",
	            "en" : "Al Maskiyah"
	        }
	    },
	    {
	        "city_id" : 3594,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "حمية",
	            "en" : "Hamayah"
	        }
	    },
	    {
	        "city_id" : 3595,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السحار",
	            "en" : "As Sahhar"
	        }
	    },
	    {
	        "city_id" : 3596,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القصبة",
	            "en" : "Al Qasabah"
	        }
	    },
	    {
	        "city_id" : 3597,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العارضة",
	            "en" : "Al Aridah"
	        }
	    },
	    {
	        "city_id" : 3598,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "سنابس",
	            "en" : "Sanabis"
	        }
	    },
	    {
	        "city_id" : 3599,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "قيس",
	            "en" : "Qays"
	        }
	    },
	    {
	        "city_id" : 3600,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الوحلة",
	            "en" : "Al Wahlah"
	        }
	    },
	    {
	        "city_id" : 3601,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العشوة",
	            "en" : "Al Ishwah"
	        }
	    },
	    {
	        "city_id" : 3602,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الفقهاء",
	            "en" : "Al Fuqha"
	        }
	    },
	    {
	        "city_id" : 3603,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "دحيقة",
	            "en" : "Duhayqah"
	        }
	    },
	    {
	        "city_id" : 3604,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الشواجرة",
	            "en" : "Ash Shawajirah"
	        }
	    },
	    {
	        "city_id" : 3605,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "بخشة",
	            "en" : "Bakhshah"
	        }
	    },
	    {
	        "city_id" : 3606,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الاساملة",
	            "en" : "Al Asamilah"
	        }
	    },
	    {
	        "city_id" : 3607,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخلفة",
	            "en" : "Al Khalfah"
	        }
	    },
	    {
	        "city_id" : 3608,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "جاضع المحاضين",
	            "en" : "Jadi Al Mahadin"
	        }
	    },
	    {
	        "city_id" : 3609,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخمس",
	            "en" : "Al Khums"
	        }
	    },
	    {
	        "city_id" : 3610,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "مستورة",
	            "en" : "Masturah"
	        }
	    },
	    {
	        "city_id" : 3611,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السداد",
	            "en" : "As Sudad"
	        }
	    },
	    {
	        "city_id" : 3612,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الزهبين",
	            "en" : "Az Zahabayn"
	        }
	    },
	    {
	        "city_id" : 3613,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "صنبة",
	            "en" : "Sanbah"
	        }
	    },
	    {
	        "city_id" : 3614,
	        "region_id" : 3,
	        "name" : {
	            "ar" : "البدع",
	            "en" : "Al Bad"
	        }
	    },
	    {
	        "city_id" : 3615,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المعبوج",
	            "en" : "Al Mabuj"
	        }
	    },
	    {
	        "city_id" : 3616,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخصاوية",
	            "en" : "Al Khasawiyah"
	        }
	    },
	    {
	        "city_id" : 3617,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المضاية",
	            "en" : "Al Madayah"
	        }
	    },
	    {
	        "city_id" : 3618,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "البديع والقرفي",
	            "en" : "Al Badi Wal Qarafi"
	        }
	    },
	    {
	        "city_id" : 3619,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "مزهرة",
	            "en" : "Mizhirah"
	        }
	    },
	    {
	        "city_id" : 3620,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الكربوص",
	            "en" : "Al Karbus"
	        }
	    },
	    {
	        "city_id" : 3621,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الواصلي",
	            "en" : "Al Wasili"
	        }
	    },
	    {
	        "city_id" : 3622,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الريان",
	            "en" : "Ar Rayyan"
	        }
	    },
	    {
	        "city_id" : 3623,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "قامزة",
	            "en" : "Qamizah"
	        }
	    },
	    {
	        "city_id" : 3624,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "شهرين",
	            "en" : "Shahrayn"
	        }
	    },
	    {
	        "city_id" : 3625,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المروة",
	            "en" : "Al Marwah"
	        }
	    },
	    {
	        "city_id" : 3626,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الظهر",
	            "en" : "Adh Dhahar"
	        }
	    },
	    {
	        "city_id" : 3627,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "العقم",
	            "en" : "Al Aqum"
	        }
	    },
	    {
	        "city_id" : 3628,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الصبخاية",
	            "en" : "As Subkhayah"
	        }
	    },
	    {
	        "city_id" : 3629,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "جلاح",
	            "en" : "Jilah"
	        }
	    },
	    {
	        "city_id" : 3630,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الراحة",
	            "en" : "Ar Rahah"
	        }
	    },
	    {
	        "city_id" : 3631,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المهدف",
	            "en" : "Al Mihdaf"
	        }
	    },
	    {
	        "city_id" : 3632,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "مخشوش",
	            "en" : "Makhshush"
	        }
	    },
	    {
	        "city_id" : 3633,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخوبة",
	            "en" : "Al Khawbah"
	        }
	    },
	    {
	        "city_id" : 3634,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "القحمة",
	            "en" : "Al Qahmah"
	        }
	    },
	    {
	        "city_id" : 3635,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخشل",
	            "en" : "Al Khashal"
	        }
	    },
	    {
	        "city_id" : 3636,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الجابري",
	            "en" : "Al Jabiri"
	        }
	    },
	    {
	        "city_id" : 3637,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "جحا",
	            "en" : "Juha"
	        }
	    },
	    {
	        "city_id" : 3638,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السر",
	            "en" : "As Sirr"
	        }
	    },
	    {
	        "city_id" : 3639,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الهجنبة",
	            "en" : "Al Hijanbah"
	        }
	    },
	    {
	        "city_id" : 3640,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الشطيفية",
	            "en" : "Ash Shutayfiyah"
	        }
	    },
	    {
	        "city_id" : 3641,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحصامة",
	            "en" : "Al Hassamah"
	        }
	    },
	    {
	        "city_id" : 3642,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخضراء الشمالية",
	            "en" : "Al Khadra Ash Shamaliyah"
	        }
	    },
	    {
	        "city_id" : 3643,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السويدية",
	            "en" : "Al Suwaydiyah"
	        }
	    },
	    {
	        "city_id" : 3644,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "رعشة",
	            "en" : "Rashah"
	        }
	    },
	    {
	        "city_id" : 3645,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المجامة",
	            "en" : "Al Mujammah"
	        }
	    },
	    {
	        "city_id" : 3646,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المخشلية",
	            "en" : "Al Mukhashshaliyah"
	        }
	    },
	    {
	        "city_id" : 3647,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحامضة",
	            "en" : "Al Hamidah"
	        }
	    },
	    {
	        "city_id" : 3648,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الجعدية",
	            "en" : "Al Jadiyah"
	        }
	    },
	    {
	        "city_id" : 3649,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المحامل",
	            "en" : "Al Mahamil"
	        }
	    },
	    {
	        "city_id" : 3650,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحصمة",
	            "en" : "Al Hasamah"
	        }
	    },
	    {
	        "city_id" : 3651,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "حاكمة",
	            "en" : "Hakimah"
	        }
	    },
	    {
	        "city_id" : 3652,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "احد المسارحة",
	            "en" : "Ahad Al Musarihah"
	        }
	    },
	    {
	        "city_id" : 3653,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحجفار",
	            "en" : "Al Hijfar"
	        }
	    },
	    {
	        "city_id" : 3654,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الطاهرية",
	            "en" : "At Tahiriyah"
	        }
	    },
	    {
	        "city_id" : 3655,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحضرور",
	            "en" : "Al Hadrur"
	        }
	    },
	    {
	        "city_id" : 3656,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الدريعية",
	            "en" : "Ad Durayiyah"
	        }
	    },
	    {
	        "city_id" : 3657,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "البدوي",
	            "en" : "Al Badawi"
	        }
	    },
	    {
	        "city_id" : 3658,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الهلية",
	            "en" : "Al Halliyah"
	        }
	    },
	    {
	        "city_id" : 3659,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحنيني",
	            "en" : "Al Hanini"
	        }
	    },
	    {
	        "city_id" : 3660,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "قمعة",
	            "en" : "Qamaah"
	        }
	    },
	    {
	        "city_id" : 3661,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المنجارة",
	            "en" : "Al Minjarah"
	        }
	    },
	    {
	        "city_id" : 3662,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السودي",
	            "en" : "As Sawadi"
	        }
	    },
	    {
	        "city_id" : 3663,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "المحطة",
	            "en" : "Al Mahattah"
	        }
	    },
	    {
	        "city_id" : 3664,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الحقلة",
	            "en" : "Al Haqlah"
	        }
	    },
	    {
	        "city_id" : 3665,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "أبو الرديف",
	            "en" : "Abu Ar Radif"
	        }
	    },
	    {
	        "city_id" : 3666,
	        "region_id" : 11,
	        "name" : {
	            "ar" : "مدينة الملك عبدالله الاقتصادية",
	            "en" : "King Abdullah Economic City"
	        }
	    },
	    {
	        "city_id" : 3667,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "الخارش",
	            "en" : "Al Kharesh"
	        }
	    },
	    {
	        "city_id" : 3668,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "السهي",
	            "en" : "As Sahi"
	        }
	    },
	    {
	        "city_id" : 3669,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "رمادا",
	            "en" : "Ramada"
	        }
	    },
	    {
	        "city_id" : 3670,
	        "region_id" : 10,
	        "name" : {
	            "ar" : "روان",
	            "en" : "Rowan"
	        }
	    },
	    {
	        "city_id" : 3671,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "هجرة شهيل",
	            "en" : "Hijrat Shuhayl"
	        }
	    },
	    {
	        "city_id" : 3672,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "البرزة",
	            "en" : "Al Barzah"
	        }
	    },
	    {
	        "city_id" : 3673,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "أم سدرة",
	            "en" : "Umm Sidrah"
	        }
	    },
	    {
	        "city_id" : 3674,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "مشذوبة",
	            "en" : "Mashdhubah"
	        }
	    },
	    {
	        "city_id" : 3675,
	        "region_id" : 6,
	        "name" : {
	            "ar" : "المفيجر",
	            "en" : "Al Mufaijir"
	        }
	    },
	    {
	        "city_id" : 3676,
	        "region_id" : 8,
	        "name" : {
	            "ar" : "وادي الحياة",
	            "en" : "Wadi Al Hayat"
	        }
	    },
	    {
	        "city_id" : 3677,
	        "region_id" : 13,
	        "name" : {
	            "ar" : "الاحساء",
	            "en" : ""
	        }
	    }]';

		$ci = json_decode($cities,true);

		$dataArray = [];

		foreach ($ci as $key => $value) {
	            $cit['state_id'] = $value['region_id'];
	            $cit['cities_name_en'] = $value['name']['en'];
	            $cit['cities_name_ar'] = $value['name']['ar'];
	            $dataArray[] = $cit;
	    }

	    foreach ($dataArray as $key => $value)
	    {
	    	$val['state_id'] = $value['state_id'];
	    	$val['city_name_en'] = $value['cities_name_en'];
	    	$val['city_name_ar'] = $value['cities_name_ar'];
	    	// $val['created_at'] = date("Y-m-d H:i:s");
	    	// $val['updated_at'] = date("Y-m-d H:i:s");

	    	DB::table('cities')->insert($val);
	    }
    }
}
