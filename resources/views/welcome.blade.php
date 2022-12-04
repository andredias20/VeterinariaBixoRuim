<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <svg width="83" height="52" viewBox="0 0 83 52" fill="#" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.0378 44L25.7738 33.888H9.26175L5.99775 44H0.557749L15.0217 0.48H20.2698L34.7978 44H29.0378ZM13.2937 21.344L10.8617 28.832H24.1098L21.6777 21.344L17.5177 7.904L13.2937 21.344ZM5.81525 44V0.48H18.6153C22.7966 0.48 25.8686 1.504 27.8313 3.552C29.8366 5.55733 30.8393 8.26667 30.8393 11.68V13.088C30.8393 14.9653 30.4126 16.6293 29.5593 18.08C28.7059 19.5307 27.4686 20.6827 25.8473 21.536C28.1086 22.2613 29.8153 23.456 30.9673 25.12C32.1619 26.7413 32.7593 28.704 32.7593 31.008V32.416C32.7593 35.9147 31.7353 38.7307 29.6873 40.864C27.6819 42.9547 24.5246 44 20.2153 44H5.81525ZM18.6153 5.6H11.3833V19.36H18.6153C20.7486 19.36 22.3486 18.8267 23.4153 17.76C24.5246 16.6507 25.0793 15.136 25.0793 13.216V11.68C25.0793 9.80267 24.5246 8.33067 23.4153 7.264C22.3486 6.15467 20.7486 5.6 18.6153 5.6ZM20.2153 24.48H11.3833V38.944H20.2153C22.4766 38.944 24.1619 38.368 25.2713 37.216C26.4233 36.064 26.9993 34.464 26.9993 32.416V30.88C26.9993 28.9173 26.4233 27.36 25.2713 26.208C24.1619 25.056 22.4766 24.48 20.2153 24.48ZM11.7008 26.976V44H6.13275V0.48H19.7648C23.8608 0.48 27.0181 1.568 29.2368 3.744C31.4981 5.87733 32.6288 8.736 32.6288 12.32V15.072C32.6288 17.632 32.0314 19.8507 30.8368 21.728C29.6848 23.6053 28.0208 24.992 25.8448 25.888C27.6794 28.832 29.3861 31.8187 30.9648 34.848C32.5434 37.8773 33.9941 40.928 35.3168 44H28.9168C26.4848 38.1973 23.6474 32.5227 20.4048 26.976H11.7008ZM19.7648 5.6H11.7008V21.856H19.7648C21.9408 21.856 23.6688 21.2587 24.9488 20.064C26.2288 18.8267 26.8688 17.1627 26.8688 15.072V12.32C26.8688 10.1867 26.2288 8.544 24.9488 7.392C23.6688 6.19733 21.9408 5.6 19.7648 5.6Z" fill="white"/>
                    <path d="M45.0878 40.768C47.5624 40.768 48.7998 39.8507 48.7998 38.016C48.7998 37.2693 48.6078 36.6827 48.2238 36.256C47.8611 35.8293 47.1784 35.456 46.1758 35.136L43.5518 34.272C40.4158 33.248 38.8478 31.1893 38.8478 28.096C38.8478 26.304 39.4024 24.832 40.5118 23.68C41.6424 22.5067 43.4024 21.92 45.7917 21.92C46.7944 21.92 47.7864 22.0373 48.7678 22.272C49.7491 22.4853 50.7944 22.8373 51.9038 23.328L50.7198 26.624C49.6958 26.2187 48.8211 25.9307 48.0958 25.76C47.3918 25.568 46.6664 25.472 45.9198 25.472C44.9384 25.472 44.1598 25.6533 43.5838 26.016C43.0291 26.3573 42.7518 26.9867 42.7518 27.904C42.7518 28.5867 42.9438 29.152 43.3278 29.6C43.7331 30.0267 44.3944 30.3893 45.3118 30.688L47.9358 31.552C49.5144 32.0853 50.6984 32.864 51.4878 33.888C52.2984 34.8907 52.7038 36.224 52.7038 37.888C52.7038 39.808 52.0958 41.3653 50.8798 42.56C49.6638 43.7333 47.7544 44.32 45.1518 44.32C44.1278 44.32 43.0611 44.2027 41.9518 43.968C40.8638 43.712 39.6691 43.2853 38.3678 42.688L39.5518 39.392C40.7464 39.904 41.7598 40.2667 42.5918 40.48C43.4451 40.672 44.2771 40.768 45.0878 40.768ZM62.1818 45.6C61.4778 47.5627 60.5818 48.9707 59.4938 49.824C58.4058 50.6987 56.9124 51.136 55.0138 51.136V47.456C56.1444 47.4133 57.0298 47.1573 57.6698 46.688C58.3311 46.24 58.8218 45.6107 59.1418 44.8L59.4298 44.064L53.6378 27.776H57.2858L60.0698 35.872L61.1578 39.296L62.2138 35.872L64.8698 27.776H68.5178L62.1818 45.6ZM76.1345 41.12C76.9238 41.12 77.5745 40.992 78.0865 40.736C78.5985 40.4587 78.8545 40.0533 78.8545 39.52C78.8545 39.0507 78.6838 38.688 78.3425 38.432C78.0225 38.1547 77.4358 37.9093 76.5825 37.696L74.7585 37.216C73.3505 36.8533 72.3052 36.2453 71.6225 35.392C70.9612 34.5387 70.6305 33.5253 70.6305 32.352C70.6305 30.9653 71.1105 29.8027 72.0705 28.864C73.0305 27.9253 74.5132 27.456 76.5185 27.456C77.3292 27.456 78.1825 27.552 79.0785 27.744C79.9745 27.936 80.9132 28.2453 81.8945 28.672L80.8385 31.808C79.9425 31.3813 79.1318 31.0827 78.4065 30.912C77.6812 30.7413 77.0412 30.656 76.4865 30.656C74.9718 30.656 74.2145 31.168 74.2145 32.192C74.2145 32.5973 74.3425 32.9173 74.5985 33.152C74.8758 33.3867 75.3772 33.6 76.1025 33.792L77.9265 34.272C79.4838 34.6773 80.6145 35.296 81.3185 36.128C82.0438 36.96 82.4065 38.0053 82.4065 39.264C82.4065 40.7573 81.8945 41.9733 80.8705 42.912C79.8678 43.8507 78.2785 44.32 76.1025 44.32C74.2465 44.32 72.2945 43.8933 70.2465 43.04L71.2385 40C72.2412 40.4053 73.1478 40.6933 73.9585 40.864C74.7692 41.0347 75.4945 41.12 76.1345 41.12Z" fill="white"/>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-light" role="button">Dashboard</a>
                        @else

                            <a href="{{ route('login') }}" class="btn btn-secondary" role="button">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-light" role="button">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>
