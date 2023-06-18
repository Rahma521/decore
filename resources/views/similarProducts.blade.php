<div class="col-lg-12 pg_none">
    <div class="prodect_more">
        <div class="row pg_none">
            <div class="col-lg-12">
                <div class="title">
                    <h2> تصاميم مشابهة  </h2>
                    <span>تصاميم مشابهة  </span>
                </div>
            </div>
            @foreach ($sItems as $sItem)
                <div class="col-lg-12">
                    <div class="owl-carousel  owl-theme maincarousel" id="slider_details">
                        <div class="item">
                                <!-- start sub_prodect_index-->
                                <div class="sub_prodect_index">
                                    <div class="img_prodect_index">                                        
                                    <div class="owl-carousel owl-theme slider-1" id="slider-1">
                                        <!--start item -->
                                        <div class="item" >
                                            <div class="sub_img_prodect_index">
                                                <img src="{{ asset('images/p2.png') }}" alt="">
                                            </div>
                                        </div>                                               
                                        <!-- end item -->
                                    </div>
                                    <div class="new">
                                        <span>  جديد </span>
                                    </div>
                                    <div class="links_sub_prodect_index">
                                        <ul>
                                            <li>  <a href="{{route('details',$sItem->id)}}"><i class="bi bi-eye-fill"></i> </a> </li>
                                            <li>  
                                                <form action="">
                                                    <input type="checkbox" id="clicks2" name="">
                                                    <label for="clicks2"> <i class="far fa-heart"></i></label>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>                               
                                    </div>
                                    <div class="text_sub_prodect_index">
                                        <div class="rate">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h2>{{$sItem->item_name}} </h2>
                                        <p>{{$sItem->item_price}} رس</p>                                              
                                    </div>
                                </div>
                            <!-- start sub_prodect_index -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>