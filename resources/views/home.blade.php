@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-lg-12">
            <div class="bg-video">
                <video autoplay muted loop width="90%">
                    <source src="/storage/bg-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="gradient">

                </div>
                <div class="video-caption">
                <p>Fun and enriching opportunities for kids</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-info ">
        <div class="row info">
               

            <div class="col-lg-6 col-xl-6 col-sm-12 join-us">
            <svg class="rectangle9" xmlns="http://www.w3.org/2000/svg" width="316" height="314" viewBox="0 0 316 314" fill="none">
                <path opacity="0.8" d="M1.21634 122.816C8.09489 56.9774 94.5518 -3.87712 162.533 0.973435C230.514 5.824 322.965 145.082 314.523 180.703C306.081 216.324 182.174 342.294 126.982 308.041C71.7912 273.788 -5.66222 188.654 1.21634 122.816Z" fill="#CD2E94"/>
            </svg>
                  
            <img src='/storage/vector3.png' class="vector3">
                <h3>Join us for exceptional outdoor experiences <br> <span>that inspire, empower and shape young minds.</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare</p>
                <a href="" style="text-decoration:none">Book now</a>
            </div>
            <div class="col-lg-6 col-xl-6 col-sm-12 grid">
                <div class="frame-3">
                    <div class="pic-wrap">
                        <img src="/storage/foot.png">
                        <div class="caption">Thrilling programs</div>
                    </div>
                    <div class="pic-wrap1">
                        <img src="/storage/tag.png">
                        <div class="caption">Engaging Activities</div>
                    </div>
                </div>
                <div class="frame-4">
                    <div class="pic-wrap">
                        <img src="/storage/foot.png">
                        <div class="caption">Thrilling programs</div>
                    </div>
                    <div class="pic-wrap1">
                        <img src="/storage/tag.png">
                        <div class="caption">Engaging Activities</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-testimonials">
        <div class="space-headings">
            <h2>The Feeling is <span> Mutual</span></h2>
        </div>
        <div class="frame-13">
            <div class="star">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29" fill="none">
                    <path d="M15.1664 1L16.0301 0.496133C15.8509 0.188907 15.5221 0 15.1664 0C14.8106 0 14.4818 0.188907 14.3026 0.496133L15.1664 1ZM19.833 9L18.9693 9.50387L19.181 9.86687L19.5885 9.96964L19.833 9ZM28.4997 11.1858L29.2336 11.8651C29.4733 11.6061 29.5588 11.2397 29.4584 10.9013C29.358 10.5629 29.0865 10.3025 28.7442 10.2161L28.4997 11.1858ZM22.4997 17.6667L21.7658 16.9873L21.409 17.3728L21.5238 17.8853L22.4997 17.6667ZM24.7401 27.6667L24.3546 28.5893C24.6996 28.7335 25.0961 28.6732 25.3826 28.4329C25.6692 28.1928 25.7977 27.8128 25.716 27.448L24.7401 27.6667ZM15.1664 23.6667L15.5518 22.744L15.1664 22.5829L14.7809 22.744L15.1664 23.6667ZM5.59257 27.6667L4.61676 27.448C4.53503 27.8128 4.66361 28.1928 4.95011 28.4329C5.23659 28.6732 5.63313 28.7335 5.97808 28.5893L5.59257 27.6667ZM7.83303 17.6667L8.80884 17.8853L8.92367 17.3728L8.56684 16.9873L7.83303 17.6667ZM1.83303 11.1858L1.58848 10.2161C1.24617 10.3025 0.974747 10.5629 0.874334 10.9013C0.773921 11.2397 0.859388 11.6061 1.09921 11.8651L1.83303 11.1858ZM10.4997 9L10.7442 9.96964L11.1517 9.86687L11.3635 9.50387L10.4997 9ZM14.3026 1.50387L18.9693 9.50387L20.6968 8.49613L16.0301 0.496133L14.3026 1.50387ZM19.5885 9.96964L28.2552 12.1553L28.7442 10.2161L20.0776 8.03036L19.5885 9.96964ZM27.7658 10.5064L21.7658 16.9873L23.2336 18.346L29.2336 11.8651L27.7658 10.5064ZM21.5238 17.8853L23.7644 27.8853L25.716 27.448L23.4756 17.448L21.5238 17.8853ZM25.1257 26.744L15.5518 22.744L14.7809 24.5893L24.3546 28.5893L25.1257 26.744ZM14.7809 22.744L5.20707 26.744L5.97808 28.5893L15.5518 24.5893L14.7809 22.744ZM6.56839 27.8853L8.80884 17.8853L6.85721 17.448L4.61676 27.448L6.56839 27.8853ZM8.56684 16.9873L2.56684 10.5064L1.09921 11.8651L7.09921 18.346L8.56684 16.9873ZM2.07757 12.1553L10.7442 9.96964L10.2551 8.03036L1.58848 10.2161L2.07757 12.1553ZM11.3635 9.50387L16.0301 1.50387L14.3026 0.496133L9.63592 8.49613L11.3635 9.50387Z" fill="#FFD133"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29" fill="none">
                    <path d="M15.1664 1L16.0301 0.496133C15.8509 0.188907 15.5221 0 15.1664 0C14.8106 0 14.4818 0.188907 14.3026 0.496133L15.1664 1ZM19.833 9L18.9693 9.50387L19.181 9.86687L19.5885 9.96964L19.833 9ZM28.4997 11.1858L29.2336 11.8651C29.4733 11.6061 29.5588 11.2397 29.4584 10.9013C29.358 10.5629 29.0865 10.3025 28.7442 10.2161L28.4997 11.1858ZM22.4997 17.6667L21.7658 16.9873L21.409 17.3728L21.5238 17.8853L22.4997 17.6667ZM24.7401 27.6667L24.3546 28.5893C24.6996 28.7335 25.0961 28.6732 25.3826 28.4329C25.6692 28.1928 25.7977 27.8128 25.716 27.448L24.7401 27.6667ZM15.1664 23.6667L15.5518 22.744L15.1664 22.5829L14.7809 22.744L15.1664 23.6667ZM5.59257 27.6667L4.61676 27.448C4.53503 27.8128 4.66361 28.1928 4.95011 28.4329C5.23659 28.6732 5.63313 28.7335 5.97808 28.5893L5.59257 27.6667ZM7.83303 17.6667L8.80884 17.8853L8.92367 17.3728L8.56684 16.9873L7.83303 17.6667ZM1.83303 11.1858L1.58848 10.2161C1.24617 10.3025 0.974747 10.5629 0.874334 10.9013C0.773921 11.2397 0.859388 11.6061 1.09921 11.8651L1.83303 11.1858ZM10.4997 9L10.7442 9.96964L11.1517 9.86687L11.3635 9.50387L10.4997 9ZM14.3026 1.50387L18.9693 9.50387L20.6968 8.49613L16.0301 0.496133L14.3026 1.50387ZM19.5885 9.96964L28.2552 12.1553L28.7442 10.2161L20.0776 8.03036L19.5885 9.96964ZM27.7658 10.5064L21.7658 16.9873L23.2336 18.346L29.2336 11.8651L27.7658 10.5064ZM21.5238 17.8853L23.7644 27.8853L25.716 27.448L23.4756 17.448L21.5238 17.8853ZM25.1257 26.744L15.5518 22.744L14.7809 24.5893L24.3546 28.5893L25.1257 26.744ZM14.7809 22.744L5.20707 26.744L5.97808 28.5893L15.5518 24.5893L14.7809 22.744ZM6.56839 27.8853L8.80884 17.8853L6.85721 17.448L4.61676 27.448L6.56839 27.8853ZM8.56684 16.9873L2.56684 10.5064L1.09921 11.8651L7.09921 18.346L8.56684 16.9873ZM2.07757 12.1553L10.7442 9.96964L10.2551 8.03036L1.58848 10.2161L2.07757 12.1553ZM11.3635 9.50387L16.0301 1.50387L14.3026 0.496133L9.63592 8.49613L11.3635 9.50387Z" fill="#FFD133"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29" fill="none">
                    <path d="M15.1664 1L16.0301 0.496133C15.8509 0.188907 15.5221 0 15.1664 0C14.8106 0 14.4818 0.188907 14.3026 0.496133L15.1664 1ZM19.833 9L18.9693 9.50387L19.181 9.86687L19.5885 9.96964L19.833 9ZM28.4997 11.1858L29.2336 11.8651C29.4733 11.6061 29.5588 11.2397 29.4584 10.9013C29.358 10.5629 29.0865 10.3025 28.7442 10.2161L28.4997 11.1858ZM22.4997 17.6667L21.7658 16.9873L21.409 17.3728L21.5238 17.8853L22.4997 17.6667ZM24.7401 27.6667L24.3546 28.5893C24.6996 28.7335 25.0961 28.6732 25.3826 28.4329C25.6692 28.1928 25.7977 27.8128 25.716 27.448L24.7401 27.6667ZM15.1664 23.6667L15.5518 22.744L15.1664 22.5829L14.7809 22.744L15.1664 23.6667ZM5.59257 27.6667L4.61676 27.448C4.53503 27.8128 4.66361 28.1928 4.95011 28.4329C5.23659 28.6732 5.63313 28.7335 5.97808 28.5893L5.59257 27.6667ZM7.83303 17.6667L8.80884 17.8853L8.92367 17.3728L8.56684 16.9873L7.83303 17.6667ZM1.83303 11.1858L1.58848 10.2161C1.24617 10.3025 0.974747 10.5629 0.874334 10.9013C0.773921 11.2397 0.859388 11.6061 1.09921 11.8651L1.83303 11.1858ZM10.4997 9L10.7442 9.96964L11.1517 9.86687L11.3635 9.50387L10.4997 9ZM14.3026 1.50387L18.9693 9.50387L20.6968 8.49613L16.0301 0.496133L14.3026 1.50387ZM19.5885 9.96964L28.2552 12.1553L28.7442 10.2161L20.0776 8.03036L19.5885 9.96964ZM27.7658 10.5064L21.7658 16.9873L23.2336 18.346L29.2336 11.8651L27.7658 10.5064ZM21.5238 17.8853L23.7644 27.8853L25.716 27.448L23.4756 17.448L21.5238 17.8853ZM25.1257 26.744L15.5518 22.744L14.7809 24.5893L24.3546 28.5893L25.1257 26.744ZM14.7809 22.744L5.20707 26.744L5.97808 28.5893L15.5518 24.5893L14.7809 22.744ZM6.56839 27.8853L8.80884 17.8853L6.85721 17.448L4.61676 27.448L6.56839 27.8853ZM8.56684 16.9873L2.56684 10.5064L1.09921 11.8651L7.09921 18.346L8.56684 16.9873ZM2.07757 12.1553L10.7442 9.96964L10.2551 8.03036L1.58848 10.2161L2.07757 12.1553ZM11.3635 9.50387L16.0301 1.50387L14.3026 0.496133L9.63592 8.49613L11.3635 9.50387Z" fill="#FFD133"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29" fill="none">
                    <path d="M15.1664 1L16.0301 0.496133C15.8509 0.188907 15.5221 0 15.1664 0C14.8106 0 14.4818 0.188907 14.3026 0.496133L15.1664 1ZM19.833 9L18.9693 9.50387L19.181 9.86687L19.5885 9.96964L19.833 9ZM28.4997 11.1858L29.2336 11.8651C29.4733 11.6061 29.5588 11.2397 29.4584 10.9013C29.358 10.5629 29.0865 10.3025 28.7442 10.2161L28.4997 11.1858ZM22.4997 17.6667L21.7658 16.9873L21.409 17.3728L21.5238 17.8853L22.4997 17.6667ZM24.7401 27.6667L24.3546 28.5893C24.6996 28.7335 25.0961 28.6732 25.3826 28.4329C25.6692 28.1928 25.7977 27.8128 25.716 27.448L24.7401 27.6667ZM15.1664 23.6667L15.5518 22.744L15.1664 22.5829L14.7809 22.744L15.1664 23.6667ZM5.59257 27.6667L4.61676 27.448C4.53503 27.8128 4.66361 28.1928 4.95011 28.4329C5.23659 28.6732 5.63313 28.7335 5.97808 28.5893L5.59257 27.6667ZM7.83303 17.6667L8.80884 17.8853L8.92367 17.3728L8.56684 16.9873L7.83303 17.6667ZM1.83303 11.1858L1.58848 10.2161C1.24617 10.3025 0.974747 10.5629 0.874334 10.9013C0.773921 11.2397 0.859388 11.6061 1.09921 11.8651L1.83303 11.1858ZM10.4997 9L10.7442 9.96964L11.1517 9.86687L11.3635 9.50387L10.4997 9ZM14.3026 1.50387L18.9693 9.50387L20.6968 8.49613L16.0301 0.496133L14.3026 1.50387ZM19.5885 9.96964L28.2552 12.1553L28.7442 10.2161L20.0776 8.03036L19.5885 9.96964ZM27.7658 10.5064L21.7658 16.9873L23.2336 18.346L29.2336 11.8651L27.7658 10.5064ZM21.5238 17.8853L23.7644 27.8853L25.716 27.448L23.4756 17.448L21.5238 17.8853ZM25.1257 26.744L15.5518 22.744L14.7809 24.5893L24.3546 28.5893L25.1257 26.744ZM14.7809 22.744L5.20707 26.744L5.97808 28.5893L15.5518 24.5893L14.7809 22.744ZM6.56839 27.8853L8.80884 17.8853L6.85721 17.448L4.61676 27.448L6.56839 27.8853ZM8.56684 16.9873L2.56684 10.5064L1.09921 11.8651L7.09921 18.346L8.56684 16.9873ZM2.07757 12.1553L10.7442 9.96964L10.2551 8.03036L1.58848 10.2161L2.07757 12.1553ZM11.3635 9.50387L16.0301 1.50387L14.3026 0.496133L9.63592 8.49613L11.3635 9.50387Z" fill="#FFD133"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29" fill="none">
                    <path d="M15.1664 1L16.0301 0.496133C15.8509 0.188907 15.5221 0 15.1664 0C14.8106 0 14.4818 0.188907 14.3026 0.496133L15.1664 1ZM19.833 9L18.9693 9.50387L19.181 9.86687L19.5885 9.96964L19.833 9ZM28.4997 11.1858L29.2336 11.8651C29.4733 11.6061 29.5588 11.2397 29.4584 10.9013C29.358 10.5629 29.0865 10.3025 28.7442 10.2161L28.4997 11.1858ZM22.4997 17.6667L21.7658 16.9873L21.409 17.3728L21.5238 17.8853L22.4997 17.6667ZM24.7401 27.6667L24.3546 28.5893C24.6996 28.7335 25.0961 28.6732 25.3826 28.4329C25.6692 28.1928 25.7977 27.8128 25.716 27.448L24.7401 27.6667ZM15.1664 23.6667L15.5518 22.744L15.1664 22.5829L14.7809 22.744L15.1664 23.6667ZM5.59257 27.6667L4.61676 27.448C4.53503 27.8128 4.66361 28.1928 4.95011 28.4329C5.23659 28.6732 5.63313 28.7335 5.97808 28.5893L5.59257 27.6667ZM7.83303 17.6667L8.80884 17.8853L8.92367 17.3728L8.56684 16.9873L7.83303 17.6667ZM1.83303 11.1858L1.58848 10.2161C1.24617 10.3025 0.974747 10.5629 0.874334 10.9013C0.773921 11.2397 0.859388 11.6061 1.09921 11.8651L1.83303 11.1858ZM10.4997 9L10.7442 9.96964L11.1517 9.86687L11.3635 9.50387L10.4997 9ZM14.3026 1.50387L18.9693 9.50387L20.6968 8.49613L16.0301 0.496133L14.3026 1.50387ZM19.5885 9.96964L28.2552 12.1553L28.7442 10.2161L20.0776 8.03036L19.5885 9.96964ZM27.7658 10.5064L21.7658 16.9873L23.2336 18.346L29.2336 11.8651L27.7658 10.5064ZM21.5238 17.8853L23.7644 27.8853L25.716 27.448L23.4756 17.448L21.5238 17.8853ZM25.1257 26.744L15.5518 22.744L14.7809 24.5893L24.3546 28.5893L25.1257 26.744ZM14.7809 22.744L5.20707 26.744L5.97808 28.5893L15.5518 24.5893L14.7809 22.744ZM6.56839 27.8853L8.80884 17.8853L6.85721 17.448L4.61676 27.448L6.56839 27.8853ZM8.56684 16.9873L2.56684 10.5064L1.09921 11.8651L7.09921 18.346L8.56684 16.9873ZM2.07757 12.1553L10.7442 9.96964L10.2551 8.03036L1.58848 10.2161L2.07757 12.1553ZM11.3635 9.50387L16.0301 1.50387L14.3026 0.496133L9.63592 8.49613L11.3635 9.50387Z" fill="#FFD133"/>
                </svg>
            </div>
            <h5>4.9 average review on</h5>
            <h6>Google Trust Pilot</h6>

        </div>
        <div class="wrap">
            <img src="/storage/vector5.png" class="vector5">
            <div class="review-wrap">
                <div class="review-wrap-card">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <div class="client">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <circle cx="18" cy="18" r="18" fill="#D9D9D9"/>
                        </svg>
                        <h5>Client name</h5>
                    </div>
                </div>
            </div>
            <div class="review-wrap1">
                <div class="review-wrap-card1">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <div class="client">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <circle cx="18" cy="18" r="18" fill="#D9D9D9"/>
                        </svg>
                        <h5>Client name</h5>
                    </div>
                </div>
            </div>
            <div class="review-wrap2">
                <div class="review-wrap-card2">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <div class="client">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <circle cx="18" cy="18" r="18" fill="#D9D9D9"/>
                        </svg>
                        <h5>Client name</h5>
                    </div>
                </div>
            </div>
            <div class="review-wrap3">
                <div class="review-wrap-card3">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <div class="client">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <circle cx="18" cy="18" r="18" fill="#D9D9D9"/>
                        </svg>
                        <h5>Client name</h5>
                    </div>
                </div>
            </div>
            <div class="review-wrap4">
                <div class="review-wrap-card4">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <div class="client">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <circle cx="18" cy="18" r="18" fill="#D9D9D9"/>
                        </svg>
                        <h5>Client name</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-headings">
            <a href="" style="text-decoration:none;">Read more reviews</a>
        </div>

    </div>
    <div class="section-camps">
        <div class="space-headings">
            <h2><span> Upcoming</span> Camps</h2>
        </div>
        <div class="wrap justify-content-center align-items-center">
            <svg class="vector2" xmlns="http://www.w3.org/2000/svg" width="435" height="396" viewBox="0 0 435 396" fill="none">
            <path opacity="0.8" d="M250.5 395L1 229.5L97 1L433.5 227L250.5 395Z" fill="#FFD133" stroke="#FFD133"/>
            </svg>            
            @foreach($upcomings as $upcoming)
            <div class="event-card">
                <img src="/storage/{{$upcoming->image}}">
                <div class="event-item">
                    <h5>{{$upcoming->title}}</h5>
                    <h6>{{$upcoming->caption}}</h6>
                </div>
            </div>
            @endforeach                     
        </div>
        <div class="dot-group">
            <div class="dot-indicator"></div>
        </div>
    </div>
    <div class="section-pictorial justify-content-center align-items-center">
        <div class="space-headings">
            <h2>Play is Powerful</h2>
        </div>
        <div class="grid-container">
            <img src="/storage/pictorial.png" alt="Image 1" class="image-1">
            <img src="/storage/pictorial1.png" alt="Image 2" class="image-2">
            <img src="/storage/pictorial1.png" alt="Image 3" class="image-3">
            <img src="/storage/pictorial2.png" alt="Image 4" class="image-4">
            <img src="/storage/pictorial2.png" alt="Image 4" class="image-5">
            <img src="/storage/pictorial.png" alt="Image 4" class="image-6">
            <img src="/storage/pictorial1.png" alt="Image 7" class="image-7">
            <img src="/storage/pictorial1.png" alt="Image 8" class="image-8">
            <img src="/storage/pictorial.png" alt="Image 9" class="image-9">


        </div>
        <div class="wrap">           
          
            
                   
            
        </div>

    </div> 
    <div class="section-join">
        <div class="space-headings">
            <h2>Join Us!</h2>
        </div>
        <div class="CTA">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Outdoor Sports</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="" style="display: flex;
padding: var(--spacing-0-rem, 0px);
align-items: flex-start;
gap: var(--spacing-075-rem, 12px);">
                        <a href="" style="text-decoration:none;" class="book">Book Now!</a>
                        <a href="" style="text-decoration:none;" class="see">See More</a>
                    </div>
                </div>
                <div class="col-lg-8 wrap">
                    <div class="activity-wrap">
                        <div class="activity-wrap-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="180" height="179" viewBox="0 0 180 179" fill="none">
                            <circle cx="90" cy="89.5" r="89.5" fill="#D9D9D9"/>
                            </svg>
                            <h5>CAMPS</h5>
                        </div>
                    </div>
                    <div class="activity-wrap1">
                        <div class="activity-wrap-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="180" height="179" viewBox="0 0 180 179" fill="none">
                            <circle cx="90" cy="89.5" r="89.5" fill="#D9D9D9"/>
                            </svg>
                            <h5>Birthday Packages</h5>
                        </div>
                    </div>
                    <div class="activity-wrap">
                        <div class="activity-wrap-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="180" height="179" viewBox="0 0 180 179" fill="none">
                            <circle cx="90" cy="89.5" r="89.5" fill="#D9D9D9"/>
                            </svg>
                            <h5>Activity name</h5>
                        </div>
                    </div>
                    <div class="activity-wrap1">
                        <div class="activity-wrap-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="180" height="179" viewBox="0 0 180 179" fill="none">
                            <circle cx="90" cy="89.5" r="89.5" fill="#D9D9D9"/>
                            </svg>
                            <h5>Activity name</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
