<div>
    <x-slider></x-slider>
    <!-- Trending Category Section -->
    <section id="trending-category" class="trending-category section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            @if ($newOne)
                <div class="container" data-aos="fade-up">
                    <div class="row g-5">
                        <div class="col-lg-4">

                            <div class="post-entry lg">
                                <a href="{{ url('post/' . $newOne->slug) }}"><img
                                        src="{{ asset('storage/' . $newOne->image) }}" alt="{{ $newOne->title }}"
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">{{ $newOne->category->name }}</span> <span
                                        class="mx-1">•</span>
                                    <span>{{ $newOne->created_at->diffForHumans() }}</span>
                                </div>
                                <h2><a href="{{ url('post/' . $newOne->slug) }}">{{ $newOne->title }}</a></h2>
                                <p class="mb-4 d-block">
                                    @php
                                        $body = Str::limit(str($newOne->body)->sanitizeHtml(), 350);
                                    @endphp
                                    {!! $body !!}
                                </p>

                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="{{ asset('assets/img/person-1.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">{{ $newOne->user->name }}</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <div class="row g-5">
                                <div class="col-lg-4 border-start custom-border">
                                    @foreach ($news_left as $item)
                                        <div class="post-entry">
                                            <a wire:navigate href="{{ url('post/' . $item->slug) }}"><img
                                                    src="{{ asset('storage/' . $item->image) }}" alt=""
                                                    class="img-fluid"></a>
                                            <div class="post-meta"><span
                                                    class="date">{{ $item->category->name }}</span>
                                                <span class="mx-1">•</span>
                                                <span>{{ $item->created_at->diffForHumans() }}</span>
                                            </div>
                                            <h2><a wire:navigate
                                                    href="{{ url('post/' . $item->slug) }}">{{ $item->title }}</a>
                                            </h2>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="col-lg-4 border-start custom-border">
                                    @foreach ($news_right as $item)
                                        <div class="post-entry">
                                            <a wire:navigate href="{{ url('post/' . $item->slug) }}"><img
                                                    src="{{ asset('storage/' . $item->image) }}" alt=""
                                                    class="img-fluid"></a>
                                            <div class="post-meta"><span
                                                    class="date">{{ $item->category->name }}</span>
                                                <span class="mx-1">•</span>
                                                <span>{{ $item->created_at->diffForHumans() }}</span>
                                            </div>
                                            <h2><a wire:navigate
                                                    href="{{ url('post/' . $item->slug) }}">{{ $item->title }}</a>
                                            </h2>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Trending Section -->
                                <div class="col-lg-4">

                                    <div class="trending">
                                        <h3>Trending</h3>
                                        <ul class="trending-post">
                                            @foreach ($trending as $item)
                                                <li>
                                                    <a wire:navigate href="{{ url('post/' . $item->slug) }}">
                                                        <span class="number">{{ $loop->iteration }}</span>
                                                        <h3>{{ $item->title }}</h3>
                                                        <span class="author">{{ $item->user->name }}</span>
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>

                                </div> <!-- End Trending Section -->
                            </div>
                        </div>

                    </div> <!-- End .row -->
                </div>
            @endif
        </div>

    </section><!-- /Trending Category Section -->
</div>
