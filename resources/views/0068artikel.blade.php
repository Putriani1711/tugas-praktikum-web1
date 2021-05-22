<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            
                <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
            
                <a href="{{ url('/artikel') }}" class="text-sm text-gray-700 underline">Artikel</a>

                <a href="{{ url('/kontak') }}" class="ml-4 text-sm text-gray-700 underline">Kontak</a>
            
        </div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                
                <h4>pengertian PHP</h4>
                <p>PHP menjadi bahasa pemrograman yang sangat dinamis, tapi semenjak adanya 
                Laravel, dia menjadi lebih powerful, cepat, aman, dan simpel. Setiap rilis 
                versi terbaru, Laravel  selalu memunculkan teknologi baru di antara framework PHP lainnya.</p>
                <p>Laravel diluncurkan sejak tahun 2011 dan mengalami pertumbuhan yang cukup eksponensial. 
                Di tahun 2015, Laravel adalah framework yang paling banyak mendapatkan bintang di Github. 
                Sekarang framework ini menjadi salah satu yang populer di dunia, tidak terkecuali di Indonesia. </p>
                <h4>pengertian Codelgniter</h4>
                <p>CodeIgniter adalah sebuah web application network yang bersifat open source yang digunakan untuk membangun aplikasi php dinamis</p>
                <p>CodeIgniter menjadi sebuah framework PHP dengan model MVC (Model, View, Controller) untuk membangun website dinamis dengan menggunakan PHP yang dapat mempercepat pengembang untuk membuat sebuah aplikasi web. 
                Selain ringan dan cepat, CodeIgniter juga memiliki dokumentasi yang super lengkap disertai dengan contoh implementasi kodenya. Dokumentasi yang lengkap inilah yang menjadi salah satu alasan kuat mengapa banyak orang memilih CodeIgniter sebagai framework pilihannya. 
                Karena kelebihan-kelebihan yang dimiliki oleh CodeIgniter, pembuat PHP Rasmus Lerdorf memuji CodeIgniter di frOSCon (Agustus 2008) dengan mengatakan bahwa dia menyukai CodeIgniter karena “it is faster, lighter and the least like a framework.”</p>
                <h4>pengertian Zend Framework</h4>
                <p>Zend Framework adalah sebuah kerangka kerja 5 open source untuk web mengembangkan aplikasi dan layanan dengan PHP. 
                Zend Framework diimplementasikan dengan menggunakan kode berorientasi obyek-100%. 
                Struktur komponen Zend Framework agak unik, karena setiap komponen dirancang dengan beberapa dependensi pada komponen lainnya. 
                Sangant fleksibel, bisa ditambah arsitektur yang memungkinkan pengembang untuk menggunakan komponen secara individual. 
                Kita sering menyebutnya sebagai “gunakan-di-akan (use-at-will)” desain.</p>
                <p>Zend Framework sering disebut ‘perpustakaan komponen’, karena fleksibel bisa ditambah komponen yang dapat Anda gunakan lebih atau sedikit. 
                Tapi Zend Framework juga menyediakan model canggih-View-controller (MVC) implementasi yang dapat digunakan untuk menetapkan suatu struktur dasar untuk aplikasi Zend Framework. 
                Berikut adalah daftar lengkap dari komponen Zend Framework bersama dengan deskripsi singkatnya.</p>
                <h4>pengertian symfony</h4>
                <p>Symfony merupakan Framework lengkap yang dirancang untuk mengoptimalkan pengembangan aplikasi berbasis web dengan menghadirkan beberapa fitur andalan</p>
                <p>Symfony menyediakan berbagai alat dan kelas yang ditujukan untuk mempersingkat waktu pengembangan aplikasi web yang kompleks.
                Selain itu, symfony mengotomatiskan tugas-tugas umum sehingga pengembang dapat fokus pada spesifikasi aplikasi secara keseluruhan.
                Sebagai hasil akhir, keuntungan ini berarti bahwa tidak perlu menemukan kembali roda ketika aplikasi web baru akan dibangun.
                Symfony sepenuhnya ditulis menggunakan PHP 5. Symfony telah sepenuhnya diuji dalam berbagai proyek dunia nyata.
                Dan pada kenyataannya symfony telah digunakan pada situs web e-bisnis dengan lalu lintas yang padat.</p>
            </div>
        </div>
 </body>
</html>
