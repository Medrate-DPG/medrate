<footer class="container-fluid">
<hr>
<div class="row">
<div class="col-md-6 col-xs-12 text-center">
  <h5><i class="far fa-star"></i> {{ Options::get_option( 'site_title', 'PHP Trusted Reviews' ) }}</h5>
</div><!-- /.pull-left -->
<div class="col-md-6 col-xs-12 text-center">
  @foreach( App\Page::all() as $page )
  <a href="/p-{{ $page->page_slug }}">{{ $page->page_title }}</a> | 
  @endforeach
  <a href="{{ route('contact') }}">{{ __('Get In Touch') }}</a> | 
  <a href="{{ route('sitemap') }}">{{ __('Sitemap') }}</a>
</div><!-- /.pull-right -->
</div><!-- /.row -->
</footer>