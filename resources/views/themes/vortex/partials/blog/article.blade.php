<article class="post post-single">
    <div class="post-meta font-alt">
        <?php $categories = $post->categories; ?>
        @if ($siteMeta->show_author_post)
            {{ trans('public.by') }}
            <a href="{{ url('/user/' . $post->user->username) }}">{{ $post->user->name }}</a>
            @if(count($categories) > 0)
                {{ trans('public.in') }}
            @endif
        @endif
        @if(count($categories) > 0)
            <?php $catLinks = []; ?>
            @foreach($categories as $category)
                <?php $catLinks[] = "<a href='/category/" . $category->slug . "'>" . $category->category . "</a>"; ?>
            @endforeach
            {!! implode(', ', $catLinks) !!}
        @endif
    </div>
    <div class="post-header">
        <h1 class="post-title font-alt">
            {{ $post->title }}
        </h1>
    </div>
    <div class="post-entry">
        {!! $post->body !!}
    </div>
    <div class="tags">
        @foreach($post->tags as $tag)
            @include('themes.vortex.partials.blog.tags')
        @endforeach
    </div>
</article>
<div>
    @if ($siteMeta->adsense_enabled)
        {!! $siteMeta->adsense_script !!}
    @endif
</div>