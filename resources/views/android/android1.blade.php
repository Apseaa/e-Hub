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
                                <h4 class="widget-title m-2"><a href="help" style="color: black; text-decoration: none;">Need Help?</a></h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled" style="">
                                   <?php foreach($data['sub_posts'] as $postsCategories): ?>
                                   <li style="margin-bottom: 10px;">

                                            <a href="" style="color: black; text-decoration: none;"><?= $postsCategories['title']; ?></a>
                                        </li>
                                   <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="justify-content-center">
                    <div class="entry-header d-flex">
                        <div class="col entry-header-inner d-flex ">
                            <div>
                                <h2 class="entry-title mb--0 mt--0">{!! $data['android_table']['title'] !!}</h2>
                                <div class="entry-meta mt--xs text-secondary">
                                    <i class="fa-sharp fa-regular fa-calendar-days"></i>
                                    <span class="meta-item meta-date"><span class="updated">{!! $data['android_table']['created_at'] !!}</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="entry-content mt--md">
                        <p>{!! $data['android_table']['description'] !!}</p>
                    </div>
                    <div class="col text-end">
                        <p class="text-muted ">Category: {{ $data['android_table']['category'] }}</p>
                        @if ($data['android_table']['tags'])
                            <span
                                class="align-text-bottom tagify__tag">{{ str_replace(['[', ']', 'value', '{', '}', '"', '"', ':'], '', $data['android_table']['tags']) }}</span>
                        @endif
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
