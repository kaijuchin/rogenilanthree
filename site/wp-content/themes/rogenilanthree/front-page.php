<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richocean</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="#" class="flex items-center">
                <img src="<?= get_theme_file_uri('/assets/images/Richocean-Logo.png'); ?>" alt="" class="h-10">
            </a>
            <!-- Navbar links -->
            <div class="md:flex items-center ml-32">
                <a href="#" class="mx-8 my-2.5 text-gray-700 hover:text-red-500">Home</a>
                <div class="relative group">
                    <a href="#" class="mx-8 my-2.5 pb-4 text-gray-700 hover:text-red-500">Products</a>
                    <div class="block pointer-events-none group-hover:pointer-events-auto hover:pointer-events-auto group-hover:block <?= do_shortcode('[nav_dropdown_items_class]'); ?>">
                        <!-- Office Furniture Section -->
                        <div class="flex w-[72rem]">
                            <!-- Image -->
                            <div class="flex-none">
                                <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/assets/images/Sliding_Window_Residential_504_3.jpg" alt="Office Furniture" class="w-48 h-48 object-cover rounded-lg p-6">
                            </div>
                            <div class="flex flex-col">
                                <!-- Icon and Title -->
                                <div class="flex pt-[1.5rem] items-center">
                                    <img class="w-[2.5rem] h-[2.5rem]" src="http://www.rogenilan.com/template/pc/rogenilancom/style/images/CasementWindows.png" alt="">️
                                    <p class="pl-[1rem] text-[1.2rem]">Windows</p>
                                </div>
                                <!-- List of Items -->
                                <div class="flex flex-wrap w-[60rem] p-4 gap-y-[.75rem] text-[0.8125rem] text-zinc-500">
				                    <?php foreach (WINDOWS_SYSTEMS as $item): ?>
                                        <span class="w-1/4">
                                            <a class="hover:text-red-600" href=""><?= $item['name']; ?></a>
                                        </span>
				                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-[72rem]">
                            <!-- Image -->
                            <div class="flex-none">
                                <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/assets/images/folding-doors.webp" alt="Office Furniture" class="w-48 h-48 object-cover rounded-lg p-6">
                            </div>
                            <div class="flex flex-col">
                                <!-- Icon and Title -->
                                <div class="flex pt-[1.5rem] items-center">
                                    <img class="w-[2.5rem] h-[2.5rem]" src="http://www.rogenilan.com/upload/sort/1648105836472820.png" alt="">️
                                    <p class="pl-[1rem] text-[1.2rem]">Doors</p>
                                </div>
                                <!-- List of Items -->
                                <div class="flex flex-wrap w-[60rem] p-4 gap-y-[.75rem] text-[0.8125rem] text-zinc-500">
				                    <?php foreach (DOORS_SYSTEMS as $item): ?>
                                        <span class="w-1/4">
                                            <a class="hover:text-red-600" href=""><?= $item['name']; ?></a>
                                        </span>
				                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-[72rem]">
                            <!-- Image -->
                            <div class="flex-none">
                                <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/assets/images/skylight.webp" alt="Office Furniture" class="w-48 h-48 object-cover rounded-lg p-6">
                            </div>
                            <div class="flex flex-col">
                                <!-- Icon and Title -->
                                <div class="flex pt-[1.5rem] items-center">
                                    <img class="w-[2.5rem] h-[2.5rem]" src="http://www.rogenilan.com/template/pc/rogenilancom/style/images/Sunrooms.png" alt="">️
                                    <p class="pl-[1rem] text-[1.2rem]">More Products</p>
                                </div>
                                <!-- List of Items -->
                                <div class="flex flex-wrap w-[60rem] p-4 gap-y-[.75rem] text-[0.8125rem] text-zinc-500">
				                    <?php foreach (MORE_PRODUCTS as $item): ?>
                                        <span class="w-1/4">
                                            <a class="hover:text-red-600" href=""><?= $item['name']; ?></a>
                                        </span>
				                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="mx-8 my-2.5 text-gray-700 hover:text-red-600">Blog</a>
                <div class="relative group">
                    <a href="#" class="mx-8 my-2.5 text-gray-700 hover:text-red-500">About</a>
                    <div class="<?= do_shortcode('[nav_dropdown_items_class]'); ?> min-w-48">
                        <a href="#" class="<?= do_shortcode('[nav_dropdown_items_class name=item]'); ?>">Our Story</a>
                        <a href="#" class="<?= do_shortcode('[nav_dropdown_items_class name=item]'); ?>">Why Choose Us</a>
                    </div>
                </div>
                <a href="#" class="mx-8 my-2.5 text-gray-700 hover:text-red-500">Contact</a>
            </div>
        </div>
    </div>
</nav>

</body>
</html>