    {{-- <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>



        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                   @foreach ($menu as $item)
                   <form action="{{route('addtocart')}}" method="POST"  >
                        @csrf
                    <div class="item">
                    <div class="card card3" style="background-image: url('{{ asset('upload/posts/'.$item->image) }}')">
                            <div class="price"><h6>{{$item->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$item->title}}</h1>
                              <p class='description'>{{$item->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">  <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <input type="number" min="1" value="1" name="quantity" id="">
                    <input type="hidden" value="{{$item->id}}" name="food_id" id="">

                    <input type="submit" name="" value="AddCart"  id="">


                    </form>
                   @endforeach
                </div>
            </div>
        </div>
    </section> --}}
