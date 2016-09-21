

<aside class="sidebar-left">

    <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">

        <?php $providers = \App\Deal\Functions::getProvidersByAdmin()?>
        @foreach($providers as $provider)
            <li><a href="{{url('san-pham/nha-phan-phoi', ['slug'=> str_slug($provider->name),'id'=>$provider->id]) }}">{{$provider->name}}<span>{{\App\Deal\Functions::countProductByProvider($provider->id)}}</span></a>
            </li>
        @endforeach

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

    <div class="sidebar-box">
        <h5>Phân loại theo thời gian</h5>
        <ul class="checkbox-list">
            <li class="checkbox">
                <label>
                    <input type="checkbox" class="i-check">Mới <small>(50)</small>
                </label>
            </li>
            <li class="checkbox">
                <label>
                    <input type="checkbox" class="i-check">Sắp hết hạn <small>(70)</small>
                </label>
            </li>
            <li class="checkbox">
                <label>
                    <input type="checkbox" class="i-check">Phổ biến <small>(32)</small>
                </label>
            </li>
            <li class="checkbox">
                <label>
                    <input type="checkbox" class="i-check">Nổi bật<small>(27)</small>
                </label>
            </li>
        </ul>
    </div>
</aside>
