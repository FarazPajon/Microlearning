<div class="h-screen">
    <div class="fixed top-0 z-10 w-full border-b bg-white">
        <div class="flex items-center my-auto h-14">
            <div class="flex flex-1 gap-2 p-2 items-center">
                <a href="/" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </a>
                <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>

                <a href="{{ route('studi.index', ['mcid' => $pmb->microlearning->id]) }}" class="text-xl font-bold truncate">{{ $pmb->microlearning->judul }}</a>
                <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
                <span class="flex-1 text-lg font-bold truncate">{{ $pmb->judul }}</span>
            </div>

            <div class="flex items-center shrink-0">
                @php
                    if (Auth::user()->role === 'admin') {
                        $board = 'admin.dashboard';
                    } else {
                        $board = 'dashboard';
                    }
                @endphp
                <a href="{{ url($board) }}" class="px-1.5 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
            </div>
        </div>
    </div>

    <div class="flex w-full h-full pt-16" x-data="playerData({ytid:'{{ $ytid }}', material:{{ $material }}, pbid:{{ $pbid }}})">
        <div class="flex-1 flex">
            <!-- Left Side List -->
            <div class="w-1/3 hidden flex-col sm:block lg:block justify-between bg-white shadow rounded-lg p-4 mr-4">
                <div class="flex-1 overflow-auto">
                    <h2 class="text-xl font-bold mb-4">Materi Pembelajaran</h2>
                    <div class="space-y-2">
                        <!-- List Items -->
                        @foreach ($pmb->materi as $item)
                            @php
                                $stat = $item->status()
                                    ->where('kelas_id', $kelas->id)
                                    ->first();
                            @endphp
                            <a href="{{ route('lesson.index', ['pbid'=>$pbid, 'material'=>$item->id]) }}" class="flex items-center p-4 text-lg leading-4 gap-x-2 min-h-12 hover:bg-gray-100  {{$material==$item->id?'bg-green-500 text-white rounded-lg hover:bg-green-500':'text-gray-900 rounded-lg'}}" wire:navigate>
                                {{-- <div class="pt-1">
                                    <div class="w-5 h-5 {{$stat?'bg-blue-500':'bg-gray-200'}} rounded-full"></div>
                                </div> --}}
                                <div class="flex flex-row leading-8 gap-2">
                                    <span class="justify-self-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="{{$stat?'text-green-500':'text-gray-300'}} h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <p>{{ $item->judul }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="relative w-full p-6">
                <div class="w-full mb-4">
                    <div class="flex h-12 gap-1">
                        <div class="flex-1 my-auto mr-4 justify-between">
                            <span>Materi: </span>
                            <span class="text-3xl font-black">{{ $index + 1 }}/{{ count($arr) }}</span>
                        </div>
                        <button class="flex items-center px-4 group hover:bg-sky-100 disabled:text-gray-400" wire:click='toPrev' {{ $prev ? '' : 'disabled' }}>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 rotate-180 group-hover:text-black text-sky-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                            </svg>
                            <span class="text-xs font-black">prev</span>
                        </button>
                        <button class="flex items-center px-4 group hover:bg-sky-100 disabled:text-gray-400" wire:click='toNext' {{ $next ? '' : 'disabled' }}>
                            <span class="text-xs font-black">next</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 group-hover:text-black text-sky-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <div class="flex flex-col">
                        <div id="ytplayer" class="mx-auto bg-sky-500"></div>

                        <div class="max-w-5xl mx-auto mt-4">
                            <p class="text-2xl font-bold underline py-6">Intro:</p>
                            <div class="text-xl leading-8 text-justify">{!! $intro !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="flex w-full h-full pt-14" x-data="playerData({ytid:'{{ $ytid }}', material:{{ $material }}, pbid:{{ $pbid }}})">
        <div class="hidden w-3/12 py-2 border-r lg:block">
            <p class="p-2 font-semibold underline underline-offset-2">MATERI PEMBELAJARAN</p>

            @foreach ($pmb->materi as $item)
                @php
                    $stat = $item->status()
                        ->where('kelas_id', $kelas->id)
                        ->first();
                @endphp
                <a
                    href="{{ route('lesson.index', ['pbid'=>$pbid, 'material'=>$item->id]) }}"
                    class="flex gap-2 px-4 py-2 place-items-start hover:bg-gray-100 {{$material==$item->id?'font-bold':'font-thin'}}"
                    wire:navigate
                >
                    <div class="pt-1">
                        <div class="w-5 h-5 {{$stat?'bg-blue-500':'bg-gray-200'}} rounded-full"></div>
                    </div>
                    <div class="leading-4">{{ $item->judul }}</div>
                </a>
            @endforeach
        </div>

        <div class="relative w-full">
            <div class="w-full mb-4">
                <div class="flex h-12 gap-1">
                    <div class="flex-1 my-auto mr-4 text-right">
                        <span>Materi: </span>
                        <span class="text-3xl font-black">{{ $index + 1 }}/{{ count($arr) }}</span>
                    </div>
                    <button class="flex items-center px-4 group hover:bg-sky-100 disabled:text-gray-400" wire:click='toPrev' {{ $prev ? '' : 'disabled' }}>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 rotate-180 group-hover:text-black text-sky-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="text-xs font-black">prev</span>
                    </button>
                    <button class="flex items-center px-4 group hover:bg-sky-100 disabled:text-gray-400" wire:click='toNext' {{ $next ? '' : 'disabled' }}>
                        <span class="text-xs font-black">next</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 group-hover:text-black text-sky-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="px-2">
                <div id="ytplayer" class="mx-auto bg-sky-500"></div>

                <div class="max-w-5xl mx-auto mt-4">
                    <p class="text-xl font-bold underline">Intro:</p>
                    <div>{!! $intro !!}</div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
