<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                @hasSection('page-title')
                <h1 class="mb-0 fs-3">@yield('page-title')</h1>
                @endif

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  
                </nav>
                Actions
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>