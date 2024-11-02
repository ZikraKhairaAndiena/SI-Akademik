<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
              {{-- <svg class="bi"><use xlink:href="#house-fill"/></svg> --}}
              <i class="bi bi-house"></i>
              Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-mahasiswa">
              {{-- <svg class="bi"><use xlink:href="#file-earmark"/></svg> --}}
              <i class="bi bi-people"></i>
              Mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-dosen">
              {{-- <svg class="bi"><use xlink:href="#file-earmark-text"/></svg> --}}
              <i class="bi bi-person-video"></i>
              Dosen
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-prodi">
              {{-- <svg class="bi"><use xlink:href="#file-earmark-text"/></svg> --}}
              <i class="bi bi-rocket-takeoff"></i>
              Prodi
            </a>
          </li>
          @can('admin')
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-user">
              {{-- <svg class="bi"><use xlink:href="#file-earmark-text"/></svg> --}}
              <i class="bi bi-person"></i>
              User
            </a>
          </li>
          @endcan
          @can('admin')
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-matakuliah">
              {{-- <svg class="bi"><use xlink:href="#file-earmark-text"/></svg> --}}
              <i class="bi bi-rocket-takeoff"></i>
              Mata Kuliah
            </a>
          </li>
          @endcan


        <hr class="my-3">

        <li class="nav-item">
            <form action="/logout" method="post">
                @csrf
                <button class="nav-link d-flex align-items-center gap-2" type="submit">
                    <i class="bi bi-power"></i>
                    Sign out
                </button>
            </form>
        </li>

{{--
        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/logout">
              {{-- <svg class="bi"><use xlink:href="#door-closed"/></svg> --}}
              {{-- <i class="bi bi-power"></i>
              Sign out
            </a>
          </li>
        </ul> --}}

      </div>
    </div>
  </div>
