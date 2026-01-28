<h1>Portofolio</h1>

<div class="row">
    @foreach($portofolios as $portofolio)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $portofolio->title }}</h5>
                    <p class="card-text">{{ $portofolio->description }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
