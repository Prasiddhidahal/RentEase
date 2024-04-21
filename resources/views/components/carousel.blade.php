@props(['property_detail'])
  
  @php
  $counter=0;
  $image = explode('|',$property_detail->property_photo);
  foreach ($image as $item) {
     $counter+=1; 
  }
 @endphp
  @if ($counter==1)
  <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset($property_detail->property_photo)}}); max-height:600px;margin-top:1px;">
  @endif
  @if ($counter!=1)
  <div class="carousel-item-a intro-item bg-image" style="background-image: url({{URL::to($image[0])}});max-height:600px;margin-top:1px;">
      
 @endif
  
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">
                    
                  <h1 class="intro-title ">
                    <span class="color-b">{{$property_detail->id}} </span> {{$property_detail->title}}
                    <br> {{$property_detail->sale_type}}</h1>
                  <p class="intro-subtitle intro-price">
                    <a href="#"><span class="price-a">rent | Rs {{$property_detail->price}}</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
   
  
<!--/ Carousel end /-->

      </div>
    </div>
           