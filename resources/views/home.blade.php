@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

<div class="container-fluid p-0">
        <!-- banner -->
        <div id="banner">
            <div id="banner-text">
                <div class="row">
                    <div class="col-sm">
                        <h2 class="display-2">Uniquely <span>Fresh Taste</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p>Try our tasty coffee bean, produced with unique taste.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <a href="">Learn More</a>
                    </div>
                </div>
            </div>
            <ul id="banner-button" >
                <li class="marker-clicked float-start"></li>
                <li></li>
            </ul>
        </div>

        <!-- ADS (1) -->
        <div class="ads">
            <div class="ads-item" id="ads-item1">
                <div class="ads-text">
                    <h3>Seasonal Coffee Flavors</h3>
                    <a href="">Read more</a>
                </div>
            </div>

            <div class="ads-item" id="ads-item2">
                <div class="ads-text">
                    <h3>Coffee Bundle Packages</h3>
                    <a href="">Read more</a>
                </div>
            </div>
        </div>

         <!--MERCHANDISE  -->
          <div id="merch" class="merch">
                <div class="section-header">
                    <span>What happens here</span>
                    <h2>Coffee House Merchandise</h2>
                    <hr>
                </div>

                <div class="merch-gallery mt-2">
                    <div class="row">
                        <div class="merch-item1 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img1.jpg') }}" alt="">
                            <h3>Arabica - Extra Course</h3>
                            <span>*****</span>
                            <p>$70.00</p>
                        </div>
                
                        <div class="merch-item2 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img2.jpg') }}" alt="">
                            <h3>Arabica - Fine Grind</h3>
                            <span>*****</span>
                            <p>$70.00</p>
                        </div>
                
                        <div class="merch-item3 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img3.jpg') }}" alt="">
                            <h3>French Vanilla</h3>
                            <span>*****</span>
                            <p>$80.00</p>
                        </div>
                
                        <div class="merch-item4 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img4.jpg') }}" alt="">
                            <h3>Deluxe Chocolate</h3>
                            <span>*****</span>
                            <p>$100.00</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="merch-item5 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img5.jpg') }}" alt="">
                            <h3>Original Beans</h3>
                            <span>*****</span>
                            <p>$100.00</p>
                        </div>
                        <div class="merch-item6 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img6.jpg') }}" alt="">
                            <h3>Paper Pouch</h3>
                            <span>*****</span>
                            <p>$71.00</p>
                        </div>
                        <div class="merch-item7 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img7.jpg') }}" alt="">
                            <h3>freashly Picked</h3>
                            <span>*****</span>
                            <p>$71.00</p>
                        </div>
                        <div class="merch-item8 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img8.jpg') }}" alt="">
                            <h3>Mug</h3>
                            <span>*****</span>
                            <p>$25.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- discount -->
            <div class="discount" id="discount">
                <div class="discount-text">
                    <span>We brew them fresh daily</span>
                    <h3>Member's discounts up tp 40%</h3>
                    <a href="#sale">View Products</a>
                </div>
            </div>

            <!-- merch sale image 9~12 -->
            <div class="sale" id="sale">
                <div class="sale-header">
                    <span>What happens here</span>
                    <h3>Merchandise sale</h3>
                    <hr>
                </div>
                <div class="sale-gallery">
                    <div class="row">
                        <div class="sale-item1 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img9.jpg') }}" alt="">
                            <h3>Arabica with cup</h3>
                            <span>*****</span>
                            <p>$90.00</p>
                        </div>
                        <div class="sale-item2 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img10.jpg') }}" alt="">
                            <h3>Double Arabica</h3>
                            <span>*****</span>
                            <p>$120.00</p>
                        </div>
                        <div class="sale-item3 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img11.jpg') }}" alt="">
                            <h3>Paper Pouch</h3>
                            <span>*****</span>
                            <p>$100.00</p>
                        </div>
                        <div class="sale-item4 col-lg-3 col-md-6 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/merch-img12.jpg') }}" alt="">
                            <h3>Double Mug</h3>
                            <span>*****</span>
                            <p>$40.00</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ads(2) image 3~6 -->
            <div class="ads " id="ads2">
                <div class="row">
                    <div class="ads-item col-lg-6 col-md-6 col-sm-12 " id="ads-item3">
                        <div class="ads-text">
                            <h3>Coffee bean varieties</h3>
                            <a href="">Read more</a>
                        </div>
                    </div>
                    <div class="ads-item col-lg-6 col-md-6 col-sm-12" id="ads-item4">
                        <div class="ads-text">
                            <h3>Our barista's favorite</h3>
                            <a href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ads-item col-lg-6 col-md-6 col-sm-12" id="ads-item5">
                        <div class="ads-text">
                            <h3>The coffee best sellers</h3>
                            <a href="">Read more</a>
                        </div>
                    </div>
                    <div class="ads-item col-lg-6 col-md-6 col-sm-12" id="ads-item6">
                        <div class="ads-text">
                            <h3>More than just the coffee</h3>
                            <a href="">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reservation form -->
            <div id="reservation" class="reservation">
                <div class="section-header">
                    <h2>Reservation Form</h2>
                    <hr>
                </div>
                
                <form action="" method="post">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <label for="full-name">Full Name</label>
                            <input type="text" name="full_name" itemref="full-name" placeholder="Last Name, First Name">

                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="mail@mail.com">

                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" placeholder="(+83)912345678">

                            <p>Reservation Form</p>

                            <label for="guests">Number of Guest</label>
                            <select name="guests" id="guests">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">more than 4</option>
                            </select>

                            <label for="date">Reservation Date</label>
                            <input type="date" name="date" id="date">

                            <p>Reservation Time</p>
                            <div class="reserve-time">
                                <input type="radio" name="reserve_time" id="time-AM">
                                <label for="time-AM">Morning</label>

                                <input type="radio" name="reserve_time" id="time-PM">
                                <label for="time-PM">Afternoon</label>

                                <input type="radio" name="reserve_time" id="time-Night">
                                <label for="time-Night">Night</label>
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <label for="request">Additional Request</label>
                            <textarea name="request" id="request" cols="30" rows="10"></textarea>

                            <h3>Payment</h3>
                            <p>Payment Accepted Cards</p>

                            <label for="card-name">Full Name</label>
                            <input type="text" name="card_name" id="card-name" placeholder="John Doe">

                            <label for="card-num">Credit Card Number</label>
                            <input type="number" name="card_num" id="card-num" placeholder="1234567890">

                            <div class="reserve-agree">
                                <input type="checkbox" name="agree" id="agree">
                                <label for="agree">I agree to the Terms and Conditions.</label>
                            </div>

                            <!-- <button type="submit">Send</button> -->
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </form>
            </div>

            <footer>
                <div class="footer-content">
                    <div class="row">
                        <div class="footer-column col-lg-3 col-md-12 col-sm-12">
                            <h3>opening Hours</h3>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>..........</th>
                                        <th>Availability</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Monday</td>
                                        <td>..........</td>
                                        <td>Closed</td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>..........</td>
                                        <td>09:00~22:00</td>
                                    </tr>
                                    <tr>
                                        <td>Wednesday</td>
                                        <td>..........</td>
                                        <td>Closed</td>
                                    </tr>
                                    <tr>
                                        <td>Thursday</td>
                                        <td>..........</td>
                                        <td>09:00~22:00</td>
                                    </tr>
                                    <tr>
                                        <td>Friday</td>
                                        <td>..........</td>
                                        <td>09:00~22:00</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>..........</td>
                                        <td>09:00~22:00</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>..........</td>
                                        <td>09:00~22:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                        <div class="footer-column col-lg-3 col-md-12 col-sm-12">
                            <h3>Latest Post</h3>

                            <h4>Expand your mind, Change Everything</h4>
                            <p>14.02.2017</p>

                            <h4>Place to get lost</h4>
                            <p>14.02.2017</p>

                            <h4>Lewis Howes</h4>
                            <p>14.02.2017</p>

                            <h4>Elevate your Expectation</h4>
                            <p>14.02.2017</p>
                            
                        </div>
                        <div class="footer-column col-lg-3 col-md-12 col-sm-12">
                            <h3>Contact Us</h3>

                            <p>info@coffeebean.com</p>
                            <p>1-444-123-4559</p>
                            <p>Raymond Boulevard 224, New York</p>

                            <h3>The Last Standard Post</h3>
                            <form action="">
                                <input type="text" name="search" placeholder="Search">
                                <input type="submit" value="Search">
                            </form>
                        </div>
                        <div class="footer-column col-lg-3 col-md-12 col-sm-12">
                            <h3>Other Location</h3>

                            <h4>Coffee Bean Philipines</h4>
                            <p>1234 IT Park <br>Ceby City</p>

                            <h4>Coffee Bean Tokyo</h4>
                            <p>1234 Business park <br>Tokyo Japan</p>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="footer-social">
                <div class="social-column">
                    <h3>portfoliocafe</h3>
                </div>

                <div class="social-column">
                    <a href=""><img src="assets/images/icon-fb.png" alt=""></a>
                    <a href=""><img src="assets/images/icon-ig.png" alt=""></a>
                    <a href=""><img src="assets/images/icon-tw.png" alt=""></a>
                </div>
                <div class="social-column">
                    <p>&copy; 2024 | portfoliocafe</p>
                </div>
            </div>
        </div>
</div>

<script src="{{ asset('js/homepage_js.js') }}"></script>


@endsection
