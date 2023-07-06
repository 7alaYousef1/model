<?php
use Illuminate\Support\Facades\Route;
// كلاس route بيشتغل عادي بدون ما اعمل use  لانه كلاسات معرفة glouble وهو منهم
//بقدر اشوف الكلاسات المعرفة عن طريق ctrl  واضغط على الملف الموجود في routes app اخر واحد

////كل يلي بلارفيل بيكونوا static
// aninoums function لحالها بتكون بدون استدعاء زي يلي بتكون في الroute

//namespace لتعريف الكلاس
// للاستدعاء use عند استخدام كلاس معين
/*
في php يسمح يكون عندي اكتر من كلاس بنفس السم ولكن بمسار مختلف
*/
/*
لما يكون الرابط مس موجود

دالة fallback لحتى اغير صفحة404

App\Providers\RouteServiceProvider بروح اغير رابط الويب للرابط يلي بدي ياه
ضغط مرتين و alt

*/

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "welcome";
});

Route::get('/about', function () {
    return view('about');
});

/*
اسرع منput من patch (تعديل )
عنصر واحد فقط put من patch
*/
// about , contact , services , hala
// .$اسم المتغير في ال return



