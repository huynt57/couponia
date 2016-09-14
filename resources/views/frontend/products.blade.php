@extends('frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <aside class="sidebar-left">
                    <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                        <li class="active"><a href="#"><i class="fa fa-ticket"></i>All<span>36</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-cutlery"></i>Food & Drink<span>36</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-calendar"></i>Events<span>40</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-female"></i>Beauty<span>38</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-bolt"></i>Fitness<span>43</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-headphones"></i>Electronics<span>37</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-image"></i>Furniture<span>32</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-umbrella"></i>Fashion<span>48</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping<span>45</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-home"></i>Home & Graden<span>31</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-plane"></i>Travel<span>49</span></a>
                        </li>
                    </ul>
                    <div class="sidebar-box">
                        <h5>Filter By Price</h5>
                        <input type="text" id="price-slider">
                    </div>
                    <div class="sidebar-box">
                        <h5>Product Feature</h5>
                        <ul class="checkbox-list">
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">New <small>(50)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Ending Soon <small>(70)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Popular <small>(32)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Featured <small>(27)</small>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <h5>When</h5>
                        <ul class="checkbox-list">
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">This Week <small>(60)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Next Week <small>(37)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Later <small>(23)</small>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <h5>Location</h5>
                        <ul class="checkbox-list">
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">All <small>(657)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">All Washington <small>(120)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">NoMa <small>(13)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Chinatown <small>(32)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Penn Quarter <small>(53)</small>
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Adams Morgan <small>(21)</small>
                                </label>
                            </li>
                        </ul>
                    </div>
                </aside>

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-sort">
                            <span class="product-sort-selected">sort by <b>Price</b></span>
                            <a href="#" class="product-sort-order fa fa-angle-down"></a>
                            <ul>
                                <li><a href="#">sort by Name</a>
                                </li>
                                <li><a href="#">sort by Ended Soon</a>
                                </li>
                                <li><a href="#">sort by Popularity</a>
                                </li>
                                <li><a href="#">sort by Location</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-7">
                        <div class="product-view pull-right">
                            <a class="fa fa-th-large active" href="#"></a>
                            <a class="fa fa-list" href="category-page-thumbnails-coupon-horizontal.html"></a>
                        </div>
                    </div>
                </div>
                <div class="row row-wrap">
                    @foreach ($products as $product)
                        <a class="col-md-4" href="#">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="{{$product->image_preview}}" alt="Image Alternative text" title="Hot mixer" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">{{$product->name}}</h5>

                                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 10 days 23 h remaining</span>
                                        <ul class="product-price-list">
                                            <li><span class="product-price">{{$product->price}}</span>
                                            </li>


                                        </ul>
                                    </div>
                                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                {!! $products->render() !!}

                <div class="gap"></div>
            </div>
        </div>

    </div>
@endsection