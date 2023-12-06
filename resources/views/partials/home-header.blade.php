@if( Options::get_option( 'homepage_header_image' ) )
<style>
.homepage-header {
    margin-top: -10px;
    background-image: url('/public/{{ Options::get_option( 'homepage_header_image' ) }}');
}



.container-mobile {
    padding-right: 0px !important;
    padding-left: 0px !important;
    margin-right: 0px !important;
    margin-left: 0px !important;
}

@media (max-width: 576px) {
    .search-mobile{
        position: absolute !important;
        top: 369px !important;
        width: 100% !important;
        margin: 0 !important;
    }
}


@media (min-width: 576px) {
    .d-sm-block-t {
        display: flex !important;
    }
    
    .d-none-t {
        display: flex !important;
    }
}
</style>
@endif

<div class="homepage-header">
<div class="container container-mobile">
  <div class="homepage-header-container">
  <h1 class="display-5 text-center">
    <span style="background: #56554f4d;color: #ffffff;border-radius: 4px; padding: 4px;">
      {{ Options::get_option( 'site_description', '#1 Trusted Health Service Reviews' ) }}
    </span><!-- /.label label-primary -->
  </h1>
  <h3 class="text-center">
    <span class="badge badge-warning">{{ Options::get_option( 'site_belowdescription', 'From People Like You' ) }}</span>
  </h3>
  <div class="searchProcessing"></div><!-- /.searchProcessing -->
  <form method="GET" action="{{ route('search') }}" id="searchUser">
  <div class="row d-none d-sm-block d-sm-block-t d-none-t">
    <div class="col-md-3 col-1">&nbsp;</div><!-- /.col-md-1 -->
    <div class="col-md-6 col-8 no-padding">
        <input type="text" name="searchQuery" class="form-control search-padding" placeholder="{{ __('Search for a facility') }}" required>
    </div><!-- /.col-7 -->
      <div class="col-md-1 col-2 no-padding">
          <input type="submit" name="searchAction" class="btn btn-warning btn-block search-btn-padding" value="{{ __('Go') }}">
      </div><!-- /.col-md-1 no-padding -->
    </div><!-- /.row -->
    
    
    <div class="row search-mobile d-sm-block d-xs-block d-md-none d-lg-none">
    <!--<div class="col-md-3 col-1">&nbsp;</div>--><!-- /.col-md-1 -->
    <div class="col-md-10 col-10 no-padding">
        <input type="text" name="searchQuery" class="form-control search-padding" placeholder="{{ __('Search for a facility') }}" required>
    </div><!-- /.col-7 -->
      <div class="col-md-1 col-2 no-padding">
          <input type="submit" name="searchAction" class="btn btn-warning btn-block search-btn-padding" value="{{ __('Go') }}">
      </div><!-- /.col-md-1 no-padding -->
    </div><!-- /.row -->
  </form>
  </div><!-- /.homepage-header-container -->
</div>
</div><!-- ./jumbotron-->