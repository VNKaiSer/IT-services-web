@extends('layouts.app')
@section('content')
<section class="services">
    <div class="services-container">
      <h3 class="services-header">Our <span>Services</span></h3>
        <div class="services-boxbig">
            @foreach ($services as $service)
            <div
                class="services-box"
                data-aos="fade-up"
                data-aos-offset="200"
                data-aos-delay="50"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
                >
                @if ($service->id % 2 == 0){

                    <div class="services-img">
                        <img srcset="{{ 'Images/'.$service->image.' 2x' }}" alt="" />
                    </div>
                    <div class="services-content">
                        <h2 class="services-heading">
                        {{ $service->title  }}
                        </h2>
                        <p class="services-desc">
                        {{ $service->description }}
                        </p>
                        <p class="services-desc-children"></p>
                        <a href="./contact1.html"
                        ><button class="button-black">Read more</button></a
                        >
                    </div>

                }@else{
                    <div class="services-content">
                        <h2 class="services-heading">
                        {{ $service->title  }}
                        </h2>
                        <p class="services-desc">
                        {{ $service->description }}
                        </p>
                        <p class="services-desc-children"></p>
                        <a href="./contact1.html"
                        ><button class="button-black">Read more</button></a
                        >
                    </div>
                    <div class="services-img">
                        <img srcset="{{ 'Images/'.$service->image.' 2x' }}" alt="" />
                    </div>
                }
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
