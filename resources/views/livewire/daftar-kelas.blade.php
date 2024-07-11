<div class="p-6 text-gray-900">
    <a type="button" class="p-2 rounded-lg text-white bg-green-500" href="/" wire:navigate="">
        Kembali
    </a>
    <div>
        @if ($list->count() == 0)
        <div role="alert" class="rounded border-s-4 border-red-500 bg-red-50 p-4">
            <div class="flex items-center gap-2 text-red-500">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8">
                <path
                  fill-rule="evenodd"
                  d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                  clip-rule="evenodd"
                />
              </svg>
              <strong class="block font-medium">Anda belum mengikuti kelas, silahkan pilih kelas...</strong>
            </div>
        </div>

        <div class="container mx-auto my-8">
            <div class="grid justify-center grid-cols-2 gap-6 my-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($mcl as $item)
                <!-- Card -->
                <div class="relative bg-white rounded-xl shadow-md">
                    <div class="p-8 items-center">
                        <img src="{{ asset('image/icon.png') }}" alt="Logo" class="mb-5 h-16 w-16">
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
        @else
        <div class="container mx-auto my-8">
            <div class="grid justify-center grid-cols-2 gap-6 my-4 sm:grid-cols-2 lg:grid-cols-3">
                <p class="text-3xl font-semibold mb-8">Lanjut Belajar</p>
            </div>
            @foreach ($list as $item)
            <div class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row">
                <img class="px-4 object-cover md:rounded-none md:rounded-s-lg" src="{{$item->pembelajaran->refs['image']}}" height="100px" width="450px" alt="">
                <div>
                    @php
                    $mc = $item->pembelajaran->materi->count();
                    $sc = $item->pembelajaran->materi()->whereHas('status')->count();
                    $ts = ($sc/$mc);
                    if ($ts < 1) {
                        $ls = $item->pembelajaran->materi()
                            ->doesntHave('status')
                            ->orderBy('nomor')
                            ->first()
                            ->id;
                    }
                @endphp
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="py-2 mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $item->pembelajaran->judul }}</h5>
                    @foreach ($item->pembelajaran->materi as $materi)
                        <div class="flex flex-row justify-start items-start gap-y-4">
                            @if ($materi->status->where('kelas_id', $item->id)->count() != 0)
                            <span>
                                <svg class="w-3.5 h-3.5 me-2 text-green-500 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                            </span>
                            @else
                            <span>
                                <svg class="w-3.5 h-3.5 me-2 text-gray-300 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                            </span>
                            @endif
                            {{ $materi->nomor}}. {{ $materi->judul }}
                        </div>
                        @endforeach
                        @if ($ts < 1)
                        <div class="py-12">
                            <a href="{{ route('lesson.index', ['pbid' => $item->pembelajaran->id, 'material' => $ls]) }}" class="mt-auto bg-green-500 text-white font-semibold px-6 py-3 text-sm rounded-full hover:bg-green-600">Lanjut Belajar</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
