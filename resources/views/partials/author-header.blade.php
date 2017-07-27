<div class="page-header">
  <div class="image-wrapper">
    {!! $profile_photo !!}
  </div>
  <div class="details-wrapper">
    <h1>{!! App\title() !!}</h1>
    <p>{{ get_the_author_meta('description')}}
  </div>

</div>
