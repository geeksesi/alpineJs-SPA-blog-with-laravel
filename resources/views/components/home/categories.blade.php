<section id="category">
    <h2 class="text-lg sm:text-2xl mt-12 mb-5 text-center">Choose A Category</h2>
    <div id="slider-category" class="swiper-container mw-1080 pb-12 relative overflow-hidden">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($categories as $category)
            <div class="swiper-slide overflow-hidden rounded-lg">
                <a href="{{route("category", ["slug"=>$category->slug])}}">
                    <img class="mx-auto transform hover:scale-125 transition duration-300"
                        src="{{empty($category->thumbnail)?asset("img/category1.png"):storage::url($category->thumbnail)}}"
                        alt="{{$category->name}}">
                    <p class="absolute top-1/2 w-full text-center text-white text-lg -mt-3">{{$category->name}}</p>
                </a>
            </div>
            @endforeach

        </div>
        <!-- pagination -->
        <div class="swiper-pagination"></div>
        <!-- navigation buttons -->
        <div>
            <img class="swiper-button-prev transform rotate-180 bg-yellow-400 rounded-full w-8 h-9" src="img/Right.svg"
                alt="prev">
        </div>
        <div>
            <img class="swiper-button-next bg-yellow-400 rounded-full w-8 h-9" src="img/Right.svg" alt="next">
        </div>
    </div>
</section>