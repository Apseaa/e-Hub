@extends('layout.master1')
@section('bot')
    <div class="container">
        <nav aria-label="breadcrumb" style="background: none;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="help" class="text-dark">Topics</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sample</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-4">
                <div class="widget widget_categories col-12 col-md-6 col-lg-9">
                    <div class="widget-inside">
                        <div class="shadow card card-creative">
                            <div class="card-header">
                                <h4 class="widget-title m-2"><a href="help">Need Help?</a></h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li><a href="button"> <i class="fa-solid fa-newspaper"></i> <span
                                                class="category-text m-2"> Sample 1</span></a></li>
                                    <li><a href="page2"><i class="fa-solid fa-newspaper"></i> <span
                                                class="category-text m-2"> Sample 2</span></a></li>
                                    <li><a href="button"> <i class="fa-solid fa-newspaper"></i><span
                                                class="category-text m-2"> Sample 3</span></a></li>
                                    <li><a href="button"><i class="fa-solid fa-newspaper"></i> <span
                                                class="category-text m-2"> Sample 4</span></a></li>
                                    <li><a href="button"><i class="fa-solid fa-newspaper"></i> <span
                                                class="category-text m-2"> Sample 5</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                @foreach ($android_table as $android_table)
                    <div class="justify-content-center">
                        <div class="entry-header d-flex">
                            <div class="entry-header-inner">
                                <h2 class="entry-title mb--0 mt--0"><a href=""
                                        class="link-dark">{!! $android_table->title !!}</a></h2>
                                <div class="entry-meta mt--xs text-secondary">
                                    <i class="fa-sharp fa-regular fa-calendar-days"></i>
                                    <span class="meta-item meta-date"><span
                                            class="updated">{!! $android_table->created_at !!}</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="entry-content mt--md">
                            <p>{!! $android_table->description !!}
                            </p>
                        </div>
                        <p class="text-muted">Category: {!! $android_table->category !!}
                        </p>
                        <span class="align-text-bottom">{{ str_replace('Text to Remove', '', $android_table->tags) }}</span>
                    </div>
                    <hr>
                @endforeach
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="bg-light py-3 sticky-bottom">
        <div class="container pt-2">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2021 My Company. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#">Privacy Policy</a>
                    <span class="mx-2">|</span>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
@endsection
