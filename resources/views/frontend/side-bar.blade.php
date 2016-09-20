

<aside class="sidebar-left">
    <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
    @if(!empty($source))

        <li class="active"><a href="#"><i class="fa fa-ticket"></i>Tất cả<span>36</span></a>
        </li>

<?php $categories = \App\Deal\Functions::getCategories($source)?>

        @foreach($categories as $category)

        <li><a href="#"><i class="fa fa-cutlery"></i>{{$category->name}}<span>36</span></a>
        </li>

            @endforeach


    @else
        <?php $providers = \App\Deal\Functions::getProviders();?>

            @foreach($providers as $provider)
            <li><a href="#"><i class="fa fa-cutlery"></i>{{$provider->name}}<span>36</span></a>
            </li>
            @endforeach
    @endif
    </ul>

    <div class="sidebar-box">
        <h5>Lọc theo giá</h5>

        <form id="form-filter-price">

            <div class="form-group mb10">
                <div class="row">
                    <div class="col-md-12">
                    <input type="text" id="price-slider">
                        </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-6">  <input type="text" class="form-control" name="min_price" id="min_price"></div>
                    <div class="col-md-6"> <input type="text" class="form-control" name="max_price" id="max_price"></div>
                </div>


            </div>
            <p class="mb10" id="submit-filter-price"></p>
            <button type="button" class="btn btn-primary" value="Đăng ký" id="btn-submit-filter-price">Tìm</button>
        </form>

    </div>
</aside>
