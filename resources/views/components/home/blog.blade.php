<section id="blog">
    <h2 class="text-center text-lg sm:text-2xl mt-12 mb-5">My Lastest Blog</h2>
    <div class="wrapper-blog flex gap-5 mw-1080">
        <div class="wrapper-side-left-blog flex content-start overflow-x-scroll scroll-slider sm:flex-wrap gap-7 sm:w-2/3">
            <x-home.blog.posts :posts="$latest"/>
        </div>
        <div class="wrapper-side-right-blog contact hidden md:flex flex-col gap-5 w-1/3">
            <x-home.blog.popular-posts :posts="$popular"/>
            <x-home.blog.social/>
            <x-home.blog.subscribe/>
            <x-home.blog.tags/>
        </div>
    </div>
</section>

