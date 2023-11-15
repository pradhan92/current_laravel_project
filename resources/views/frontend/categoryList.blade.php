<x-frontend-template>
    <main class="main">
        <div class="page-header text-center" style="background-image: url('/frontend/assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Product Category View <span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav breadcrumb-with-filter">
            <div class="container">
                <a href="#" class="sidebar-toggler"><i class="icon-bars"></i>Filters</a>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                    <li class="breadcrumb-item"><a href="/categoryList">Product Category</a></li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="container py-5">
            <div class="row g-2">
                @foreach ($categories as $item)
                   <div class="col-4 d-flex align-items-center justify-content-center">
                     <div class="card ">
                       <div style="height: 250px; width:100%">
                         <img
                         style="height: 300px; width: 100%; object-fit: center; transform:scale(0.5 ,0.5)"
                         src="{{ $item->image }}" class="card-img-top d-flex align-items-center justify-content-center" alt="...">
                       </div>
                        <div class="card-body">
                            <h5 class="card-title d-flex align-items-center justify-content-center">{{ $item->name }}</h5>
                            <a href="#" class="btn btn-primary d-flex align-items-center justify-content-center">View Details</a>
                            {{-- <a href="#" class="btn btn-success">View Details</a> --}}
                        </div>
                    </div>
                   </div>
                @endforeach
            </div>
        </div>
    </main>
</x-frontend-template>
