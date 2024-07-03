<x-app-layout>
    @section('title', 'Dashboard - ' . config('app.name'))
    @section('breadcrumb-title', 'Dashboard')

    <main id="main" class="main">

        <div class="pagetitle">
            {{-- <h1>Hello, {{ session('user')->first_name }}!👋</h1> --}}
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">@yield('breadcrumb-title', 'Breadcrumb Name')</li>
                </ol>
            </nav>
        </div>

          <section class="section dashboard">
            <div class="row">
                @if (auth()->user()->role === 'superadmin')
                    @include('dashboard.superadmin')
                @endif
                @if (auth()->user()->role === 'admin')
                    @include('dashboard.admin')
                @endif
                @if (auth()->user()->role === 'sme')
                    @include('dashboard.smes')
                @endif
                @if (auth()->user()->role === 'genpub')
                    @include('dashboard.genpub')
                @endif
            </div>
        </section>
        

    </main>
</x-app-layout>
