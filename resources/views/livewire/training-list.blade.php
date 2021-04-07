<div>
    <div  x-data="{ showModal2: false }" :class="{'overflow-y-hidden': showModal2 }">
        @include('livewire.trainingform')
        <div class="container mb-2 mt-6 flex mx-auto w-full items-center justify-center">
            <ul class="flex flex-col p-4">
                @foreach ($this->alltraining as $training)
                <li class="border-gray-400 flex flex-row p-4">
                <div class="select-none flex flex-1 items-center transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 hover:shadow-2xl border-red-400">
                    <div class="flex-1 pl-1 mr-16">
                        <div class="font-medium">
                            {{$training->trainingName}}
                        </div>
                    </div>
                    <div>
                        <a wire:click="edit({{$training->id}})" class="bg-green-600 font-semibold text-white p-3 rounded-xl hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" @click="showModal2 = true">
                            Edit
                        </a>
                    </div>
                </div>
                </li>
                @endforeach       
            </ul>
        </div>
    </div>
</div>