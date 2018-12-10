<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// About Pages 

Route::get('project', function () {return view('guest.project');});

Route::get('member', function () {return view('guest.member');});

Route::get('myhub', function () {return view('guest.myhub');});

Route::get('about-company', function () {return view('pages.about.about-company');});

Route::get('about-me', function () {return view('pages.about.about-me');});

Route::get('about-team', function () {return view('pages.about.about-team');});

Route::get('coming-soon', function () {return view('pages.about.coming-soon');});

Route::get('contact', function () {return view('pages.about.contact');});

Route::get('contact2', function () {return view('pages.about.contact2');});

Route::get('contact3', function () {return view('pages.about.contact3');});


Route::get('maintenance', function () {return view('pages.about.maintenance');});

Route::get('service', function () {return view('pages.about.service');});

Route::get('service', function () {return view('pages.about.service');});

// Banner Pages 

Route::get('banner-html-video', function () {return view('pages.banner.banner-html-video');});

Route::get('banner-owl-slider', function () {return view('pages.banner.banner-owl-slider');});

Route::get('banner-text-rotator', function () {return view('pages.banner.banner-text-rotator');});

Route::get('banner-vimeo', function () {return view('pages.banner.banner-vimeo');});

Route::get('banner-youtube', function () {return view('pages.banner.banner-youtube');});

// Blog Pages

Route::get('blog-grid-boxed', function () {return view('pages.blog.blog-grid-boxed');});

Route::get('blog-grid-fullwidth', function () {return view('pages.blog.blog-grid-fullwidth');});

Route::get('blog-grid-right-side', function () {return view('pages.blog.blog-grid-right-side');});

Route::get('blog-grid-left-side', function () {return view('pages.blog.blog-grid-left-side');});

Route::get('blog-left-side', function () {return view('pages.blog.blog-left-side');});

Route::get('blog-right-side', function () {return view('pages.blog.blog-right-side');});

Route::get('blog-masonry-boxed', function () {return view('pages.blog.blog-masonry-boxed');});

Route::get('blog-masonry-fullwidth', function () {return view('pages.blog.blog-masonry-fullwidth');});

Route::get('blog-single-left-side', function () {return view('pages.blog.blog-single-left-side');});

Route::get('blog-single-no-side', function () {return view('pages.blog.blog-single-no-side');});

Route::get('blog-single-right-side', function () {return view('pages.blog.blog-single-right-side');});

// Element Pages 

Route::get('element-accordions', function () {return view('pages.element.element-accordions');});

Route::get('element-blockquote', function () {return view('pages.element.element-blockquote');});

Route::get('element-blog', function () {return view('pages.element.element-blog');});

Route::get('element-button', function () {return view('pages.element.element-button');});


Route::get('element-columns', function () {return view('pages.element.element-columns');});

Route::get('element-counter', function () {return view('pages.element.element-counter');});

Route::get('element-dropcap', function () {return view('pages.element.element-dropcap');});

Route::get('element-form', function () {return view('pages.element.element-form');});

Route::get('element-heading', function () {return view('pages.element.element-heading');});

Route::get('element-list', function () {return view('pages.element.element-list');});

Route::get('element-post', function () {return view('pages.element.element-post');});

Route::get('element-price-table', function () {return view('pages.element.element-price-table');});

Route::get('element-skil', function () {return view('pages.element.element-skil');});

Route::get('element-social', function () {return view('pages.element.element-social');});

Route::get('element-step-feature', function () {return view('pages.element.element-step-feature');});

Route::get('element-tab', function () {return view('pages.element.element-tab');});

Route::get('element-testimonials', function () {return view('pages.element.element-testimonials');});

Route::get('element-timeline', function () {return view('pages.element.element-timeline');});

// homepage Pages 

Route::get('construction', function () {return view('pages.homepage.construction');});

Route::get('consultant', function () {return view('pages.homepage.consultant');});

Route::get('corporate', function () {return view('pages.homepage.corporate');});

Route::get('gym', function () {return view('pages.homepage.gym');});

Route::get('index-default', function () {return view('pages.homepage.index-default');});

Route::get('medical', function () {return view('pages.homepage.medical');});

Route::get('mobile-app', function () {return view('pages.homepage.mobile-app');});

Route::get('personal', function () {return view('pages.homepage.personal');});

// Layouts Pages 

Route::get('footer1', function () {return view('pages.layouts.footer1');});

Route::get('footer2', function () {return view('pages.layouts.footer2');});

Route::get('footer3', function () {return view('pages.layouts.footer3');});

Route::get('footer4', function () {return view('pages.layouts.footer4');});

Route::get('footer5', function () {return view('pages.layouts.footer5');});

Route::get('header-default', function () {return view('pages.layouts.header-default');});

Route::get('header-fixed', function () {return view('pages.layouts.header-fixed');});

Route::get('header-fullscreen', function () {return view('pages.layouts.header-fullscreen');});

Route::get('header-fullwidth', function () {return view('pages.layouts.header-fullwidth');});

Route::get('header-logo-center', function () {return view('pages.layouts.header-logo-center');});

Route::get('header-logo-top', function () {return view('pages.layouts.header-logo-top');});

Route::get('header-side-left', function () {return view('pages.layouts.header-side-left');});

Route::get('header-topbar', function () {return view('pages.layouts.header-topbar');});

Route::get('header-transparent', function () {return view('pages.layouts.header-transparent');});

Route::get('page-title-bg', function () {return view('pages.layouts.page-title-bg');});

Route::get('page-title-center', function () {return view('pages.layouts.page-title-center');});

Route::get('page-title-dark', function () {return view('pages.layouts.page-title-dark');});

Route::get('page-title-grey', function () {return view('pages.layouts.page-title-grey');});

Route::get('page-title-html5', function () {return view('pages.layouts.page-title-html5');});

Route::get('page-title-left', function () {return view('pages.layouts.page-title-left');});

Route::get('page-title-lg', function () {return view('pages.layouts.page-title-lg');});

Route::get('page-title-md', function () {return view('pages.layouts.page-title-md');});

Route::get('page-title-parallax', function () {return view('pages.layouts.page-title-parallax');});

Route::get('page-title-right', function () {return view('pages.layouts.page-title-right');});

Route::get('page-title-sm', function () {return view('pages.layouts.page-title-sm');});

Route::get('page-title-theme', function () {return view('pages.layouts.page-title-theme');});

Route::get('page-title-vimeo', function () {return view('pages.layouts.page-title-vimeo');});

Route::get('page-title-xlg', function () {return view('pages.layouts.page-title-xlg');});

Route::get('page-title-youtube', function () {return view('pages.layouts.page-title-youtube');});

// Portfolio Pages

Route::get('portfolio-default', function () {return view('pages.portfolio.portfolio-default');});

Route::get('portfolio-grid-2-col', function () {return view('pages.portfolio.portfolio-grid-2-col');});

Route::get('portfolio-grid-3-col', function () {return view('pages.portfolio.portfolio-grid-3-col');});

Route::get('portfolio-grid-4-col', function () {return view('pages.portfolio.portfolio-grid-4-col');});

Route::get('portfolio-masonry-2-col', function () {return view('pages.portfolio.portfolio-masonry-2-col');});

Route::get('portfolio-masonry-3-col', function () {return view('pages.portfolio.portfolio-masonry-3-col');});

Route::get('portfolio-masonry-4-col', function () {return view('pages.portfolio.portfolio-masonry-4-col');});

Route::get('portfolio-standard-2-col', function () {return view('pages.portfolio.portfolio-standard-2-col');});

Route::get('portfolio-standard-3-col', function () {return view('pages.portfolio.portfolio-standard-3-col');});

Route::get('portfolio-standard-4-col', function () {return view('pages.portfolio.portfolio-standard-4-col');});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
