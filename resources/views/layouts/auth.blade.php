<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased font-inter bg-slate-100 text-slate-600">
    <!-- Snippet -->
    <main class="flex flex-col justify-center min-h-screen p-4 antialiased text-gray-600 bg-gray-200">
        <div class="h-full">
            <!-- Card -->
            <div class="max-w-[480px] mx-auto">
                {{ $slot }}
            </div>
        </div>
    </main>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@livewireScripts
<script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
    };
    window.addEventListener('toastr:success', (event) => {
        console.log(event.detail);
        toastr.success(event.detail.msg, 'success');
    });

    window.addEventListener('toastr:error', (event) => {
        console.log(event.detail);
        toastr.error(event.detail.msg, 'Oops');
    });

    window.addEventListener('toastr:info', (event) => {
        console.log(event.detail);
        toastr.info(event.detail.msg, 'Alert');
    });

    window.addEventListener('toastr:warning', (event) => {
        console.log(event.detail);
        toastr.error(event.detail.msg, 'Alert');
    });
</script>

</html>
