<div class="popular-posts shadow-md p-5 rounded-lg">
    <h3 class="font-extrabold mb-3">Popular Post</h3>
    @foreach ($posts as $post)
    <div class="item-popular-post mt-3 flex gap-2">
        <div class="rounded-lg overflow-hidden w-32">
            <a href="{{route("post", ["slug"=> $post->slug])}}">
                <img class="object-cover object-center w-full transform scale-150"
                    src="{{Storage::url($post->thumbnail)}}" alt="{{$post->title}}">
            </a>
        </div>
        <div class="content-popular-post flex flex-col justify-around">
            <h3 class="text-sm"><a class="block" href="{{route("post", ["slug"=> $post->slug])}}">{{$post->title}}</a>
            </h3>

            <div class="date-post text-xs">{{$post->created_at->format('d M, Y')}}</div>
        </div>
    </div>
    @endforeach
</div>