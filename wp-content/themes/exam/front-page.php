<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hw21serhatyi
 */

get_header(); ?>
    <div class="container">
        <div id="primary" class="content-area">

            <main id="main" class="site-main" role="main">

                <div class="front-page-main">
                    <p class="welcome-text">Welcome to</p>
                    <h1>Business plus</h1>
                    <p class="main-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        Lorem Ipsum has been the industry's standard dummy text ever.
                    <div class="main-button"><a href="#">Read more</a></div>
                </div>
                <div class="about">
                    <div class="heading">
                        <h2>About Us</h2>
                        <p>Our Short Story</p>
                    </div>
                    <div class="description">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="read-more-button"><a href="#">Read more</a></div>
                    </div>
                </div>
                <div class="services">
                    <div class="heading">
                        <h2>Services</h2>
                        <p>What we are doing?</p>
                    </div>
                    <div class="content">
                        <div class="item">
                            <img src="img/boosting-your-business_icon.png" alt="Loading..."/>
                            <h3>Boosting your business</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and industry
                                Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <div class="item">
                            <img src="img/analyzing_icon.png" alt="Loading..."/>
                            <h3>analyzing business strategy</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and industry
                                Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <div class="item">
                            <img src="img/oline-support_icon.png" alt="Loading..."/>
                            <h3>Online support</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and industry
                                Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <div class="item">
                            <img src="img/clock_icon.png" alt="Loading..."/>
                            <h3>Time managment</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and industry
                                Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <div class="read-more-button">View more</div>
                    </div>
                    <div class="clients">
                        <div class="heading">
                            <h2>Clients</h2>
                            <p>What our client says</p>
                        </div>
                        <div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
                            <img src="img/client1.png">
                            <p class="name">Krishnan Unni</p>
                            <p class="designation">Designation</p>
                        </div>
                        <div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
                            <img src="img/client2.png">
                            <p class="name">Mariya Jeorge</p>
                            <p class="designation">Designation</p>
                        </div>
                        <div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
                            <img src="img/client3.png">
                            <p class="name">Akhil Designer</p>
                            <p class="designation">Designation</p>
                        </div>
                    </div>
                    <div class="news">
                        <a href="#"><img src="img/news.png"></a>
                    </div>
                    <div class="partners">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <a href="#"><img src="/img/partner1.png" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/img/partner2.png" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/img/partner3.png" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/img/partner4.png" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/img/partner5.png" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/img/partner6.png" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </main><!-- #main -->
        </div><!-- #primary -->

<?php
get_footer();