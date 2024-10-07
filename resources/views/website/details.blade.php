@extends('website.layouts.app')
@section('content')

<style>
    .responsive-text {
      display: flex;
      flex-direction: column; /* Stack elements on smaller screens */
      font-size: 14px;
      line-height: 1.5;
    }
  
    .icon-text {
      display: flex;
      align-items: flex-start; /* Aligns the icon and text at the start */
    }
  
    .icon {
      font-size: 5px; 
      margin-right: 8px; /* Space between icon and text */
      margin-top:6px;
    }
  
    .text {
      display: inline-block; 
      width:86%;
    }
  
    .text-line {
      padding-left: 16px; /* Indentation for the second line */
    }
  
    @media (min-width: 768px) { /* Adjust for larger screens */
      .responsive-text {
        flex-direction: row; /* Align elements side by side */
      }
      
      .text-line {
        padding-left: 0; /* Remove indentation for larger screens */
      }
    }
  </style>

        <!--==========================-->
        <!--=         Banner         =-->
        <!--==========================-->
        <section id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="page-title-content">
                            <h1 class="h2">Gulf coast Expo 2025</h1>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========================-->
        <!--=          Event        =-->
        <!--=========================-->
        {{-- <section id="page-content-wrap">
            <div class="event-page-content-wrap section-padding">
                <div class="container">
                    <div class="event-countdown-details">
                        <div class="event-countdown-counter" data-date="2025/6/25"></div>
                        
                    </div>
                    <div style="margin-top:120px">
                        <p style="font-size:25px; font-weight:bold">Gulf coast Expo 2025</p>
                        <p style="font-size:16px; font-weight:500">Date: Jun 5th 2025</p>
                        <p style="font-size:16px; font-weight:500">Venue: Renaissance Montgomery Hotel & Spa at the Convention Centre, Montgomery, AL.</p>
                        <p style="font-size:14px;font-weight:500">Come network with top industry innovators and make plans to join us this fall at Ocean Center, Renaissance Montgomery Hotel & Spa at the Convention Centre, Montgomery, AL.. Each year we continue to grow, evolve and rise to new levels of success because of your participation and partnership! Your company will not want to miss this upcoming opportunity to connect with petroleum marketers, c-store chains, liquor store owners, independent operators as well as major oil and fuel wholesalers.</p>
                        <p style="font-size:14px;font-weight:500" class="mt-5 mb-5">We are excited to deliver your company an Expo with brand new events, fresh ideas, education and a fun value-packed agenda! Please stay tuned for more details to follow!</p>
                        <p style="font-size:14px;font-weight:500">For more information, Contact Visal Patel 251-776-3546 / Minesh Patel 251-725-4127 ‬</p>
                        <h5 class="mt-5 mb-5" style="font-size:22px;font-weight:600">Attendees: What can you expect at Gulf coast Expo 2025?</h5>
                        <li class="mb-2" style="font-size:16px;font-weight:500">Networking and Fun: Join us at the "Casino Party" and Welcome Reception</li>
                        <li class="mb-2" style="font-size:16px;font-weight:500">Discover new trends and see the latest in technology, products, services, and explore over 200 booths.</li>
                        <li class="mb-5" style="font-size:16px;font-weight:500">Can your business afford for you not to attend?</li>

                        <a style="background:#dd9933; height:40px; border-radius:5px; font-size:15px; color:rgb(39, 38, 38); color:rgb(241, 240, 240)" class="btn me-3">AASOA Exhibitor Package</a>
                        <a style="background:#dd9933; height:40px; border-radius:5px; font-size:15px; color:rgb(39, 38, 38); color:rgb(241, 240, 240)" class="btn">AASOA Exhibitor Package</a>
                    </div>
                </div>
            </div>
        </section> --}}
        <section id="page-content-wrap">
            <div style="margin-top:75px; margin-bottom:55px" class="event-page-content-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <h5 class="mt-5 mb-5" style="font-size:22px;">Expo Details</h5>
                        
                            <p class="mb-4 responsive-text">
                                <span class="icon-text">
                                    <i class="fa fa-square-full icon"></i>
                                    <span class="text">Largest & Only C Store Trade Expo of Alabama.</span>
                                </span>
                            </p>
                            
                            <p class="mb-4 responsive-text">
                                <span class="icon-text">
                                    <i class="fa fa-square-full icon"></i>
                                    <span class="text">200+ Exhibitors are participating and growing every year since inception.</span>
                                </span>
                            </p>
                            
                            <p class="mb-4 responsive-text">
                                <span class="icon-text">
                                    <i class="fa fa-square-full icon"></i>
                                    <span class="text">5000+ C-Store Owner/Operators, Gas station owners, and franchise owners personally invited by mail from Mississippi, Alabama, Florida, and neighboring states.</span>
                                </span>
                            </p>
                            
                            <p class="mb-4 responsive-text">
                                <span class="icon-text">
                                    <i class="fa fa-square-full icon"></i>
                                    <span class="text">Vendor Set-up Schedule: Wednesday, June 4th, 2025. Time: 12:00 PM – 4:00 PM.</span>
                                </span>
                            </p>
                            
                            <p class="mb-4 responsive-text">
                                <span class="icon-text">
                                    <i class="fa fa-square-full icon"></i>
                                    <span class="text">Trade Expo Schedule: Thursday, June 5th, 2025. Time: 10:00 AM - 4:00 PM.</span>
                                </span>
                            </p>
                            
                            <p class="mb-4 responsive-text">
                                <span class="icon-text">
                                    <i class="fa fa-square-full icon"></i>
                                    <span class="text">Complimentary lunch featuring Indian and American foods for all exhibitors, vendors & attendees.</span>
                                </span>
                            </p>
                            
                            <p class="mb-4 responsive-text">
                                <span class="icon-text">
                                    <i class="fa fa-square-full icon"></i>
                                    <span class="text">Drayage services are available for a full range of end-to-end Expo solutions from our prime authorized vendor.</span>
                                </span>
                            </p>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <h5 class="mt-5 mb-5" style="font-size:22px;">Expo Contact</h5>
                            <p>Email Us: omor@gmail.com</p>
                            <p class="mb-5">call Us: omor@gmail.com</p>
                            <a style="width:93%; height:60px; border:1px solid gray; line-height:45px; font-size:18px; margin-bottom:15px; background:rgb(2, 147, 167); color:white" class="btn">Exhibitor Registration</a>
                            <a style="width:93%; height:60px; border:1px solid gray; line-height:45px; font-size:18px; margin-bottom:15px; background:rgb(173, 70, 10); color:white" class="btn">AASOA - Expo Kit</a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <img style="width:100%; height:450px" src="{{ asset('frontend/assets/images/slider/t1.jpg') }}" alt="Description of the image" />

                            <h5 class="mt-5 mb-5" style="font-size:22px;">Expo Directory</h5>
                            <a style="width:100%; height:60px; border:1px solid gray; line-height:45px; font-size:18px; margin-bottom:15px" class="btn">Expo 2025</a>
                            <a style="width:100%; height:60px; border:1px solid gray; line-height:45px; font-size:18px; margin-bottom:15px" class="btn">Expo 2024</a>
                            <a style="width:100%; height:60px; border:1px solid gray; line-height:45px; font-size:18px; margin-bottom:15px" class="btn">Expo 2023</a>
                            <a style="width:100%; height:60px; border:1px solid gray; line-height:45px; font-size:18px; margin-bottom:15px" class="btn">Expo 2022</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
