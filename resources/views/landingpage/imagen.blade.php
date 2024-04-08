<div class="carousel-item {{ $item }}">
    <div class="row justify-content-center">
        <div class="col-md-5 portfolio-item filter-app">
            <img src="{{ $imagen }}"class="img-fluid w-100" style="height: 300px !important" alt="{{$texto}}">
            <div class="col-5 portfolio-info">
                <h4>Bienestar Sena CNCA</h4>
                <p>{{ $texto }}</p>
                <a href="{{ $imagen }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                    title="{{ $texto }}"><i class="bx bx-plus"></i></a>
            </div>
        </div>
        <div class="col-md-5 portfolio-item filter-app">
            <img src="{{ $imagen2 }}"class="img-fluid w-100" style="height: 300px !important" alt="{{$texto2}}">
            <div class="col-5 portfolio-info">
                <h4>Bienestar Sena CNCA</h4>
                <p>{{ $texto2 }}</p>
                <a href="{{ $imagen2 }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                    title="{{ $texto2 }}"><i class="bx bx-plus"></i></a>
            </div>
        </div>
    </div>
</div>