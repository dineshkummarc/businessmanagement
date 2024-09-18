@extends('backend.admin-master')
@section('site-title')
    {{__('Product Area')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-error-msg/>
                <x-flash-msg/>
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Product Area Settings')}}</h4>

                        <form action="{{route('admin.home18.product.area')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @foreach($all_languages as $key => $lang)
                                        <a class="nav-item nav-link @if($key == 0) active @endif" id="nav-home-tab" data-toggle="tab" href="#nav-home-{{$lang->slug}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$lang->name}}</a>
                                    @endforeach
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                @foreach($all_languages as $key => $lang)
                                    <div class="tab-pane fade @if($key == 0) show active @endif" id="nav-home-{{$lang->slug}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="form-group">
                                            <label for="grocery_home_page_{{$lang}}_product_section_subtitle">{{__('Subtitle')}}</label>
                                            <input type="text" name="grocery_home_page_{{$lang->slug}}_product_section_subtitle" value="{{get_static_option('grocery_home_page_'.$lang->slug.'_product_section_subtitle')}}" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="grocery_home_page_{{$lang}}_product_section_title">{{__('Title')}}</label>
                                            <input type="text" name="grocery_home_page_{{$lang->slug}}_product_section_title" value="{{get_static_option('grocery_home_page_'.$lang->slug.'_product_section_title')}}" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="grocery_home_page_{{$lang}}_product_section_button_text">{{__('Button Text')}}</label>
                                            <input type="text" name="grocery_home_page_{{$lang->slug}}_product_section_button_text" value="{{get_static_option('grocery_home_page_'.$lang->slug.'_product_section_button_text')}}" class="form-control" >
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="home_page_products_area_items">{{__('Items')}}</label>
                                <input type="number" name="home_page_products_area_items" value="{{get_static_option('home_page_products_area_items')}}" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Settings')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
