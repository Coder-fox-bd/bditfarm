<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="rounded-full h-14 w-14 flex items-center justify-center text-5xl text-red-700 bg-white shadow-md fixed">
                <a href="/">
                    <i class="uil uil-arrow-circle-left"></i>
                </a>
            </div>
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class=" title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl">BDITFirm COURS</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">
                  Enseigner c'est apprendre deux fois. J'aime partager mes connaissances et mes découvertses.
                </p>
            </div>
            <div class="flex justify-center flex-wrap">
                @foreach ($datas as $data)
                <div class="xl:w-1/2 md:w-1/2 p-4">
                    <div class="md:flex shadow-lg md:mx-auto max-w-lg md:max-w-xl">
                        <img class="w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="{{ Storage::url($data->fileName) }}" alt="Image">
                        <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
                        <div class="flex items-center">
                            <h2 class="text-xl text-gray-800 font-medium mr-auto">{{ $data->trainingName }}</h2>
                            <p class="text-gray-800 font-semibold tracking-tighter">
                                @if(!$data->discount)
                                    মাত্র
                                    ৳{{ $data->amount }}
                                @else
                                    মাত্র
                                    <i class="text-gray-600 line-through">৳{{ $data->amount }}</i>
                                    ৳{{ $data->discount }}
                                @endif
                            </p>
                        </div>
                        <p class="text-sm text-gray-700 mt-4">
                            {{ $data->details }}
                        </p>
                        <div class="flex items-center justify-end mt-4 top-auto">
                            <button class=" bg-blue-600 text-gray-200 px-2 py-2 rounded-md ">Register</button>
                        </div>
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
    </div>
    <x-footer />
</x-guest-layout>