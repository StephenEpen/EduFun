@props(['img', 'title', 'createdAt', 'author', 'description', 'category'])

<div class="card mx-5 my-4 border-0" style="">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset($img) }}" class="img-fluid" alt="Human and Computer Interaction" style="border-radius: 40px">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title fw-bold fs-3">{{ $title }}</h5>
          <p class="card-text fs-6">{{ \Carbon\Carbon::parse($createdAt)->format('d M Y') }}| by: {{ $author }}</p>
          <p class="card-text fs-3">{{ \Illuminate\Support\Str::words($description, 15, '...') }}</p>
          <div class="d-flex justify-content-end">
              <a type="button" href="{{ route('categoryArticle', ['category'=> $category, 'article'=>$title]) }}" class="btn btn-dark rounded-pill px-5 py-3">read more...</a>
          </div>
        </div>
      </div>
    </div>
  </div>