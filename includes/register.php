<?php
    $PAGE_CSS = 'register.css';
    include __DIR__ .'/header.php';
?>
<div class="registerarea sp_top_90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="registerarea__wraper">
                            <div class="section__title registerarea__section__title">
                                <div class="section__title__button">
                                    <div class="default__small__button">Course List</div>
                                </div>
                                <div class="section__title__heading heading__underline">
                                    <h2 class= "register-h2">Register Your <span>Account </span>Get free access to <small>60000</small> online course
                                    </h2>
                                </div>
                            </div>
                            <div class="registerarea__content">
                                <div class="registerarea__video">
                                    <div class="video__pop__btn">
                                        <a class="video-btn" href="https://www.youtube.com/watch?v=vHdclsdkp28"> <img loading="lazy" src="<?= BASE_URL ?>assets/images/banner/video.png" alt=""></a>
                                    </div>
                                    <div class="registerarea__para">
                                        <p>Learn Something new &amp; Build Your Career From Anywhere In The World</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="registerarea__form">
                            <div class="registerarea__form__heading">
                                <h4>Fill Your Registration</h4>
                            </div>
                            <form method= "POST" action="<?= BASE_URL ?>includes/register_code.php">
                                <input class="register__input" name="full_name" type="text" placeholder="Your Name" fdprocessedid="ullj2">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input class="register__input" type="text" placeholder="Email Address" fdprocessedid="3f4hij" name= "email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input class="register__input" type="text" placeholder="Phone" fdprocessedid="q3nqz" name= "phone">
                                    </div>
                                </div>
                                <input class="register__input" type="text" placeholder="Address" fdprocessedid="35s8tq" name= "address">
                                <textarea class="register__input textarea" id="#" cols="30" rows="10" name= "comment" placeholder= "Comment"></textarea>
                                <div class="registerarea__button" type= "submit">
                                    <button type= "submit" class= "submit_btn">Sign Up
                                        <i class="icofont-long-arrow-right"></i>
                                    </button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="registerarea__img">
                <img loading="lazy" class="register__1" src="<?= BASE_URL ?>assets/images/banner/register__1.png" alt="register">
                <img loading="lazy" class="register__2" src="<?= BASE_URL ?>assets/images/banner/register__2.png" alt="register">
                <img loading="lazy" class="register__3" src="<?= BASE_URL ?>assets/images/banner/register__3.png" alt="register">
            </div>
        </div>