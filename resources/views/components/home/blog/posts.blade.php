@foreach ($posts as $post)
<div class="item-blog flex flex-col sm:flex-row gap-6 min-w-240 max-h-64">
    <div class="img-item-blog sm:w-1/2 rounded-lg overflow-hidden">
        <a href="{{route("post", ["slug"=> $post->slug])}}"><img class="object-cover object-center w-full h-full transform scale-110"
            src="{{Storage::url($post->thumbnail)}}" alt="blog"></a>
    </div>
    <div class="content-blog sm:w-1/2">
        <h3 class="text-lg"><a href="{{route("post", ["slug"=> $post->slug])}}">{{$post->title}}</a></h3>
        <div class="date-post text-sm">{{$post->created_at->format('d M, Y')}}</div>
        <div class="caption-blog my-6">
            <p>
                {{$post->brief()}}
            </p>
        </div>
        <div class="read-more text-sm text-yellow-400 font-semibold"><a
                href="{{route("post", ["slug"=> $post->slug])}}">READ MORE...</a></div>
    </div>
</div>

@endforeach