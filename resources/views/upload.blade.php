<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <nav class="border-b border-gray-300 relative z-20">
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="relative flex items-center space-x-6">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="relative hidden sm:flex items-center space-x-6">
                        <div class="relative">
                            <div class="flex items-center space-x-2 hover:text-sky-600 cursor-pointer" id="dropdownToggle">
                                <i class="fa-regular fa-circle-question text-2xl mr-2"></i>
                                <span>Giới thiệu</span>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            <div id="dropdownMenu" class="absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg hidden z-10">
                                <ul class="py-1">
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-code mr-2"></i>Plugin</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-gear mr-2"></i>API</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-landmark mr-2"></i> Terms of service</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-lock mr-2"></i> Privacy</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-at mr-2"></i>Contact</li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center space-x-2 hover:text-sky-600 cursor-pointer" id="languageDropdownToggle">
                                <i class="fa-solid fa-language text-2xl"></i>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            <div id="languageDropdownMenu" class="absolute left-0 mt-2 w-[950px] bg-white border border-gray-300 rounded-md shadow-lg hidden z-10">
                                <div class="grid grid-cols-5 gap-2 p-2">
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="flex justify-center flex-grow sm:flex-grow-0">
                    <a href="/"><img src="{{ url('') }}/img/logo.png" alt="Logo" class="h-10"></a>
                </div>
    
                <div class="flex items-center space-x-4 relative">
                    <span class="cursor-pointer flex items-center" id="uploadToggle">
                        <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                        <span class="hidden sm:inline ml-2">Upload</span> 
                    </span>
                    <span class="cursor-pointer flex items-center">
                        <i class="fa-solid fa-right-to-bracket text-xl"></i>
                        <span class="hidden sm:inline ml-2">Đăng nhập</span>
                    </span>
                    <a href="#" class="bg-sky-600 text-white px-4 py-2 rounded hover:bg-sky-700 transition duration-300 hidden sm:block">Đăng ký</a>
                </div>
            </div>
            
           
            <div id="overlay" class="fixed inset-0 bg-black opacity-75 z-10 hidden" style="top: 4rem;"></div>
            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div id="uploadDropdown" class="fixed left-0 right-0 top-16 w-full bg-white border-t border-gray-300 shadow-lg overflow-y-auto transition-all duration-500 ease-in-out z-20 opacity-0 pointer-events-none" style="height: 50vh;">
                <!-- Nội dung của phần upload -->
                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-4">Tải lên hình ảnh</h2>
                    <input type="file" name="images[]" multiple class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tải lên</button>
                </div>
            </div>
            </form>
        </div>
    </nav>
    
    
<div class=" mx-auto flex flex-col items-center justify-center min-h-screen  py-12 text-center">
        <div class="mb-8">
                <h1 class="text-5xl font-semibold text-gray-800 my-2.5;" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.25);">Đăng và chia sẻ những bức ảnh của bạn</h1>
                <p class="w-[790px] my-5 text-xl text-gray-600 hidden sm:flex" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.25);">Drag and drop anywhere you want and start uploading your images now. 32 MB limit. Direct image links, BBCode and HTML thumbnails.</p>
        </div>
        <div>
                <a href="" class="bg-sky-600 text-white px-6 py-3 rounded-full hover:bg-sky-700 transition duration-300">Start uploading</a>
        </div>
</div>
</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM đã sẵn sàng');

    function toggleDropdown(toggleId, menuId) {
        const toggle = document.getElementById(toggleId);
        const menu = document.getElementById(menuId);
        
        console.log(`Tìm thấy toggle ${toggleId}:`, !!toggle);
        console.log(`Tìm thấy menu ${menuId}:`, !!menu);

        if (toggle && menu) {
            toggle.addEventListener('click', function(event) {
                event.stopPropagation();
                menu.classList.toggle('hidden');
                console.log(`Đã chuyển đổi trạng thái của ${menuId}`);
            });
        } else {
            console.error(`Không tìm thấy phần tử cho ${toggleId} hoặc ${menuId}`);
        }
    }

    toggleDropdown('dropdownToggle', 'dropdownMenu');
    toggleDropdown('languageDropdownToggle', 'languageDropdownMenu');

    // Đóng tất cả các dropdown khi click bên ngoài
    document.addEventListener('click', function() {
        const dropdowns = document.querySelectorAll('.absolute');
        dropdowns.forEach(dropdown => {
            if (!dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
                console.log('Đã ẩn dropdown');
            }
        });
    });

    // Kiểm tra xem các phần tử có tồn tại không
    console.log('dropdownToggle exists:', !!document.getElementById('dropdownToggle'));
    console.log('dropdownMenu exists:', !!document.getElementById('dropdownMenu'));
    console.log('languageDropdownToggle exists:', !!document.getElementById('languageDropdownToggle'));
    console.log('languageDropdownMenu exists:', !!document.getElementById('languageDropdownMenu'));

    // Xử lý hiển thị/ẩn phần upload
    const uploadToggle = document.getElementById('uploadToggle');
    const uploadDropdown = document.getElementById('uploadDropdown');
    const closeDropdown = document.getElementById('closeDropdown');

    console.log('uploadToggle exists:', !!uploadToggle);
    console.log('uploadDropdown exists:', !!uploadDropdown);
    console.log('closeDropdown exists:', !!closeDropdown);

    if (uploadToggle && uploadDropdown) {
        uploadToggle.addEventListener('click', function(event) {
            event.stopPropagation();
            uploadDropdown.classList.toggle('opacity-0');
            uploadDropdown.classList.toggle('pointer-events-none');
            console.log('Đã chuyển đổi trạng thái của uploadDropdown');
            console.log('Nội dung của uploadDropdown:', uploadDropdown.innerHTML);
        });
    }

    if (closeDropdown) {
        closeDropdown.addEventListener('click', function() {
            uploadDropdown.classList.add('opacity-0', 'pointer-events-none');
            console.log('Đã đóng uploadDropdown');
        });
    }

    // Đóng uploadDropdown khi click bên ngoài
    document.addEventListener('click', function(event) {
        if (uploadDropdown && !uploadDropdown.contains(event.target) && !uploadToggle.contains(event.target)) {
            uploadDropdown.classList.add('opacity-0', 'pointer-events-none');
            console.log('Đã đóng uploadDropdown (click bên ngoài)');
        }
    });
});
</script>

</html>
