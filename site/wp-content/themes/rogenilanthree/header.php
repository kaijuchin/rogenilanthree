<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richocean</title>
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous">
</head>
<body class="bg-gray-100">
<header>
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="#" class="flex items-center">
                    <img src="<?= get_theme_file_uri( '/assets/images/richocean-logo.png' ); ?>" alt="" class="h-10">
                </a>
                <div class="md:hidden">
                    <button id="navbar-toggle" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
                <!-- Navbar links -->
                <div id="navbar-links" class="hidden md:flex items-center md:ml-32 z-10">
                    <a href="#" class="mx-8 my-4 text-gray-700 hover:text-red-500">Home</a>
                    <div class="hidden md:block relative group">
                        <a href="#" class="mx-8 my-2.5 pb-4 text-gray-700 hover:text-red-500">Products</a>
                        <div class="w-full md:w-[768px] lg:w-[840px] xl:w-[1000px]  dropdown block pointer-events-none group-hover:pointer-events-auto hover:pointer-events-auto group-hover:block <?= do_shortcode( '[nav_dropdown_items_class]' ); ?>">
                            <!-- Office Furniture Section -->
                            <div class="flex w-full">
                                <!-- Image -->
                                <div class="hidden md:block flex-none">
                                    <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/assets/images/Sliding_Window_Residential_504_3.jpg"
                                         alt="Office Furniture"
                                         class="md:w-[12rem] lg:w-[14rem] xl:w-[16rem] md:h-[12rem] lg:h-[14rem] xl:h-[16rem] object-cover rounded-lg p-6">
                                </div>
                                <div class="flex flex-col">
                                    <!-- Icon and Title -->
                                    <div class="flex pt-[1.5rem] items-center">
                                        <img class="w-[2.5rem] h-[2.5rem]"
                                             src="http://www.rogenilan.com/template/pc/rogenilancom/style/images/CasementWindows.png"
                                             alt="">️
                                        <p class="pl-[1rem] text-[1.2rem]">Windows</p>
                                    </div>
                                    <!-- List of Items -->
                                    <div class="flex flex-wrap w-full md:w-[34rem] lg:w-[38rem] xl:w-[46rem] p-4 gap-y-[.75rem] text-[0.8125rem] text-zinc-500">
										<?php foreach ( WINDOWS_SYSTEMS as $item ): ?>
                                            <span class="w-1/4">
                                            <a class="hover:text-red-600" href=""><?= $item['name']; ?></a>
                                        </span>
										<?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full">
                                <!-- Image -->
                                <div class="flex-none">
                                    <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/assets/images/folding-doors.webp"
                                         alt="Office Furniture"
                                         class="md:w-[12rem] lg:w-[14rem] xl:w-[16rem] md:h-[12rem] lg:h-[14rem] xl:h-[16rem] object-cover rounded-lg p-6">
                                </div>
                                <div class="flex flex-col">
                                    <!-- Icon and Title -->
                                    <div class="flex pt-[1.5rem] items-center">
                                        <img class="w-[2.5rem] h-[2.5rem]"
                                             src="http://www.rogenilan.com/upload/sort/1648105836472820.png" alt="">️
                                        <p class="pl-[1rem] text-[1.2rem]">Doors</p>
                                    </div>
                                    <!-- List of Items -->
                                    <div class="flex flex-wrap w-full md:w-[34rem] lg:w-[38rem] xl:w-[46rem] p-4 gap-y-[.75rem] text-[0.8125rem] text-zinc-500">
										<?php foreach ( DOORS_SYSTEMS as $item ): ?>
                                            <span class="w-1/4">
                                            <a class="hover:text-red-600" href=""><?= $item['name']; ?></a>
                                        </span>
										<?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full">
                                <!-- Image -->
                                <div class="flex-none">
                                    <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/assets/images/skylight.webp"
                                         alt="Office Furniture"
                                         class="md:w-[12rem] lg:w-[14rem] xl:w-[16rem] md:h-[12rem] lg:h-[14rem] xl:h-[16rem] object-cover rounded-lg p-6">
                                </div>
                                <div class="flex flex-col">
                                    <!-- Icon and Title -->
                                    <div class="flex pt-[1.5rem] items-center">
                                        <img class="w-[2.5rem] h-[2.5rem]"
                                             src="http://www.rogenilan.com/template/pc/rogenilancom/style/images/Sunrooms.png"
                                             alt="">️
                                        <p class="pl-[1rem] text-[1.2rem]">More Products</p>
                                    </div>
                                    <!-- List of Items -->
                                    <div class="flex flex-wrap w-full md:w-[34rem] lg:w-[38rem] xl:w-[46rem] p-4 gap-y-[.75rem] text-[0.8125rem] text-zinc-500">
										<?php foreach ( MORE_PRODUCTS as $item ): ?>
                                            <span class="w-1/4">
                                            <a class="hover:text-red-600" href=""><?= $item['name']; ?></a>
                                        </span>
										<?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="m-windows" class="md:hidden relative group text-center w-full">
                        <a id="m-windows-toggle" href="#" class="block mx-8 my-4 text-gray-700 hover:text-red-500">Windows
                            <span class="sub-arrow"><i class="fas fa-chevron-down"></i></span></a>
                        <div id="m-windows-dropdown" class="hidden w-full bg-gray-700/[.05]">
							<?php foreach ( WINDOWS_SYSTEMS as $item ): ?>
                                <a href="#"
                                   class="<?= do_shortcode( '[nav_dropdown_items_class name=item]' ); ?>"><?= $item['name']; ?></a>
							<?php endforeach; ?>
                        </div>
                    </div>
                    <a href="#" class="mx-8 my-4 text-gray-700 hover:text-red-600">Blog</a>
                    <div class="hidden md:block relative group">
                        <a href="#" class="mx-8 my-4 text-gray-700 hover:text-red-500">About</a>
                        <div class="<?= do_shortcode( '[nav_dropdown_items_class]' ); ?> min-w-48">
                            <a href="#" class="<?= do_shortcode( '[nav_dropdown_items_class name=item]' ); ?>">Our
                                Story</a>
                            <a href="#" class="<?= do_shortcode( '[nav_dropdown_items_class name=item]' ); ?>">Why
                                Choose Us</a>
                        </div>
                    </div>
                    <div id="m-about" class="md:hidden relative group text-center w-full">
                        <a id="m-about-toggle" href="#"
                           class="block mx-8 my-4 text-gray-700 hover:text-red-500">About</a>
                        <div id="m-about-dropdown" class="hidden w-full bg-gray-700/[.05]">
                            <a href="#" class="<?= do_shortcode( '[nav_dropdown_items_class name=item]' ); ?>">Our
                                Story</a>
                            <a href="#" class="<?= do_shortcode( '[nav_dropdown_items_class name=item]' ); ?>">Why
                                Choose Us</a>
                        </div>
                    </div>
                    <a href="#" class="mx-8 my-4 text-gray-700 hover:text-red-500">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</header>