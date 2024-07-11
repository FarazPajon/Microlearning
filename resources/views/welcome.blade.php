<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pasker ID - Microlearning</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="antialiased">
        @include('components.header')

        <div class="container mx-auto my-8 px-12">
            <main>
                <section class="mb-10">
                    <img src="{{ asset('image/icon.png') }}" height="100px" width="100px">
                    <h1 class="mt-2 text-7xl font-bold text-left mb-6">MICRO<span class="text-green-800">LEARNING</span></h1>
                    <span class="text-gray-500 mb-12 text-medium bg-slate-100 px-2 py-1 text-center rounded-lg">
                        #LiterasiDuniaDigital
                    </span>
                    <span class="text-gray-500 mb-12 text-medium ml-3 bg-slate-100 px-2 py-1 text-center rounded-lg">
                        #LiterasiPengembanganDiri
                    </span>
                    <span class="text-gray-500 mb-12 text-medium ml-3 bg-slate-100 px-2 py-1 text-center rounded-lg">
                        #LiterasiKarir
                    </span>
                    <p class="text-xl text-justify text-gray-700 leading-relaxed mb-8 mt-12">
                        Kemampuan untuk mengenali diri, mengontrol diri, mengatur diri sendiri dan juga kemampuan untuk mengelola diri sendiri dengan baik dalam hal manajemen waktu, manajemen kinerja dan produktivitas dipercaya akan memampukan seseorang untuk memahami kekuatan dan kelemahan pribadinya, sehingga niscaya mampu mencapai kompetensi diri yang sesuai dengan potensi dan bakatnya demi meraih kesuksesan di dunia kerja dan memiliki karir yang cemerlang.
                    </p>
                    <p class="text-xl text-justify text-gray-700 leading-relaxed mb-8">
                        Memanfaatkan kemajuan teknologi digital dalam memperkuat keterampilan interpersonal, keterampilan sosial dan keterampilan pengelolaan diri di sinilah merupakan katalisator dalam pencapaian karir yang sukses di dunia kerja yang sangat fleksibel dan dinamis. Literasi dunia kerja, literasi pengembangan diri dan literasi karir sangat diperlukan untuk menjalani seluruh proses dalam meraih tujuan karir impian.
                    </p>
                    <p class="text-xl text-justify text-gray-700 leading-relaxed mb-8">
                        Pusat Pasar Kerja (Pasker.ID) mengembangkan konten dan media belajar terkait literasi dunia kerja, literasi pengembangan diri, dan literasi karir ke dalam Microlearning.
                    </p>
                    <p class="text-xl text-justify text-gray-700 leading-relaxed mb-8">
                        Setiap konten dibagi menjadi segmen-segmen kecil dan terfokus untuk memudahkan dan mempercepat pemahaman terkait substansi materi. Dengan pengembangan microlearning ini diharapkan para Pencari Kerja dapat memahami kompetensi abad 21 dan beradaptasi dengan perkembangan dunia kerja yang fleksibel dan dinamis.
                    </p>
                </section>
                <!-- Microlearning Cards -->
            </main>
            <div>
                <livewire:landing />
            </div>
            </div>
                @include('components.footer')
            </div>

        @livewireScripts
    </body>
</html>
