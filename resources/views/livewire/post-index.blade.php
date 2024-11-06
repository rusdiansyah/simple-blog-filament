<div>
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Single Post</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a wire:navigate href="{{ url('/') }}">Home</a></li>
                    <li class="current">Single Post</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">

                            <div class="post-img">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                    class="img-fluid">
                            </div>

                            <h2 class="title">{{ $post->title }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="#">{{ $post->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#"><time
                                                datetime="{{ $post->created_at->format('d-m-Y') }}">{{ $post->created_at->format('d-m-Y') }}</time></a>
                                    </li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                {!! str($post->body)->sanitizeHtml() !!}

                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">{{ $post->category->name }}</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article>

                    </div>
                </section><!-- /Blog Details Section -->



            </div>

            <div class="col-lg-4 sidebar">

                <div class="widgets-container">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">Search</h3>
                        <form action="">
                            <input type="text">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>

                    </div><!--/Search Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <h3 class="widget-title">Recent Posts</h3>
                        @foreach ($recent_post as $item)
                            <div class="post-item">
                                <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->title}}" class="flex-shrink-0">
                                <div>
                                    <h4><a wire:navigate href="{{url('post/'.$item->slug)}}">{{$item->title}}</a></h4>
                                    <time datetime="{{$item->created_at->format('d-m-Y')}}">{{$item->created_at->format('d-m-Y')}}</time>
                                </div>
                            </div><!-- End recent post item-->
                        @endforeach



                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

        </div>
    </div>
</div>
