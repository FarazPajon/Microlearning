<div>
    {{-- microlearning content card --}}
        <div class="container mx-auto my-8">
            <h1 class="text-3xl text-gray-900 font-medium mb-5">
                Microlearning
            </h1>
            {{-- card baru --}}
            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($mcl as $item)
                <div class="relative bg-white rounded-xl shadow-md mb-10">
                    <div class="p-8 items-start flex flex-col">
                        <button class="mb-5 rounded-full bg-white p-1.5 transition ease-in-out delay-100 hover:-translate hover:scale-110 duration-300">
                            <span style="color: {{ $item->refs['color'] }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                                    <path d="M6 3a3 3 0 0 0-3 3v2.25a3 3 0 0 0 3 3h2.25a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H6ZM15.75 3a3 3 0 0 0-3 3v2.25a3 3 0 0 0 3 3H18a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3h-2.25ZM6 12.75a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h2.25a3 3 0 0 0 3-3v-2.25a3 3 0 0 0-3-3H6ZM17.625 13.5a.75.75 0 0 0-1.5 0v2.625H13.5a.75.75 0 0 0 0 1.5h2.625v2.625a.75.75 0 0 0 1.5 0v-2.625h2.625a.75.75 0 0 0 0-1.5h-2.625V13.5Z" />
                                </svg>
                            </span>
                        </button>
                        <span class="text-sm mt-5 text-gray-400">{{ $item->pembelajaran->count() }} microlearning</span>
                        <h2 class="text-2xl text-gray-700 font-semibold mb-10">{{ $item->judul }}</h2>
                        <div class="p-5 items-center">
                            <div class="absolute bottom-8 left-8">
                                <a href="{{ route('studi.index', ['mcid' => $item->id]) }}" type="button" class="border-solid border-green-600 border text-green-600 text-lg px-12 py-2 rounded-full mt-auto hover:bg-green-600 hover:text-white">Cek Materi →</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> --}}
            {{-- end card baru --}}

            <!-- card lama -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($mcl as $item)
                <!-- Card -->
                <div class="relative bg-white rounded-xl shadow-md mb-10">
                    <div class="p-8 items-center">
                        <svg style="color: {{ $item->refs['color'] }}" class="w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
                        </svg>
                        {{-- <img src="{{ asset('image/icon.png') }}" alt="Logo" class="mb-5 h-16 w-16"> --}}
                        <span class="text-sm mt-5 text-gray-400">{{ $item->pembelajaran->count() }} microlearning</span>
                        <h2 class="text-2xl text-gray-700 font-semibold mb-10">{{ $item->judul }}</h2>
                        <div class="p-5 items-center">
                            <div class="absolute bottom-8 left-8">
                                <a href="{{ route('studi.index', ['mcid' => $item->id]) }}" type="button" class="border-solid border-green-600 border text-green-600 text-lg px-12 py-2 rounded-full mt-auto hover:bg-green-600 hover:text-white">Cek Materi →</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    {{-- end microlearning content card --}}


    {{-- layanan --}}
    <div class="container mx-auto my-8">
        <h2 class="text-3xl text-gray-900 font-medium mb-5">Layanan Kami</h2>

        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 justify-stretch">
            <a href="https://paskerid.kemnaker.go.id/layanan-detail/4273f2f2-ded5-4710-9931-31a78adf0112" class="py-8 border rounded-md hover:border-gray-400 group">
                <img class="h-12 mx-auto" src="https://paskerid.kemnaker.go.id/storage/4273f2f2-ded5-4710-9931-31a78adf0112_Logo SIAPkerja.png" alt="siapkerja">
                <p class="pt-4 text-center group-hover:text-blue-600">SIAPKerja</p>
            </a>
            <a href="https://paskerid.kemnaker.go.id/layanan-detail/ea93475e-54d2-4358-b295-9a72d4c77015" class="py-8 border rounded-md hover:border-gray-400 group">
                <img class="h-12 mx-auto" src="https://paskerid.kemnaker.go.id/storage/ea93475e-54d2-4358-b295-9a72d4c77015_Logo Karirhub.png" alt="siapkerja">
                <p class="pt-4 text-center group-hover:text-blue-600">Karirhub</p>
            </a>
            <a href="https://paskerid.kemnaker.go.id/layanan-detail/173e7033-8219-4ddf-809c-ec5f067d718d" class="py-8 border rounded-md hover:border-gray-400 group">
                <img class="h-12 mx-auto" src="https://paskerid.kemnaker.go.id/storage/173e7033-8219-4ddf-809c-ec5f067d718d_Logo Talenthub.png" alt="siapkerja">
                <p class="pt-4 text-center group-hover:text-blue-600">Talenthub</p>
            </a>
        </div>
    </div>
    {{-- end layanan --}}
</div>
