<x-guest-layout>
    <div class="bg-white flex flex-col font-sans">
        <div class="container mx-auto px-8">
            <x-header />
            <div class="flex flex-col-reverse sm:flex-row jusitfy-between items-center py-12">
                <x-home />
                <div class="mb-16 sm:mb-0 mt-8 sm:mt-0 sm:w-3/5 sm:pl-12">
                    <x-websvg />
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center" id="servicesdiv">
                <h1 class="uppercase text-6xl text-purple-900 font-bold leading-none tracking-wide mb-6">Services</h1>
            </div>
            <x-services />

            <div class="about text-center mt-16" id="aboutdiv">
                <h1 class="uppercase text-6xl text-purple-900 font-bold leading-none tracking-wide mb-2">About</h1>
            </div>
            <x-about />
            
            <div class="text-center mt-16" id="teamdiv">
                <h1 class="uppercase text-6xl text-purple-900 font-bold leading-none tracking-wide mb-2">Team</h1>
            </div>
            <x-team />

            <div class="text-center mt-16" id="contactdiv">
                <h1 class="uppercase text-6xl text-purple-900 font-bold leading-none tracking-wide mb-2">Contact</h1>
            </div>
            @livewire('contact')
        </div>
    </div>
    <x-footer />
</x-guest-layout>