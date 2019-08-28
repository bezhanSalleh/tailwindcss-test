        <div class="flex flex-col w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4  shadow text-center p-4 rounded m-2">
            
            <div class="flex justify-between mb-10 mt-4 leading-none">
                <h5 class="text-gray-700 uppercase leading-none text-xs font-bold">{{ $name }}</h5>
                <a href="#" class="text-blue-700 font-semibold">
                    <span>$</span>
                    <span class="text-3xl">{{ $amount }}</span>
                </a>
            </div>
            <img src="{{ asset('images/larysmart.svg') }}" alt="" class="mb-10">

            <p class="mb-8 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>

            <a href="#" class="bg-blue-700 text-white text-center py-3 text-xs font-semibold uppercase rounded-full mx-3 border-solid border-2 hover:bg-white hover:text-blue-700 hover:border-blue-600">Start Learning</a>

        </div>
