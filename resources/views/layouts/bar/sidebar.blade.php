<!-- Divider -->

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
        <h4 style="color:white;"><i class="fas fa-fw fa-home mt-4" ></i>Dashboard</h4>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>
                @if (!Auth::guest())
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item ">
                        <a class="nav-link" style="color:white;" href="{{ route('admin.dashboard') }}">
                          <i class="fas fa-fw fa-comments"></i>
                            <span>Pengaduan</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" style="color:white;" href="{{ route('admin.dashboard') }}">
                          <i class="fas fa-fw fa-file"></i>
                            <span>Tanggapan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:white;"href="{{ route('admin.dashboard') }}">
                          <i class="fas fa-fw fa-clipboard"></i>
                            <span>Laporan</span>
                        </a>
                    </li>
                    @elseif(Auth::User()->role == 'petugas')
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('petugas.dashboard') }}" style="color:white;">
                      </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" style="color:white;" href="{{ route('petugas.dashboard') }}">
                        </a>
                        <a href="#" style="color:white;"><i class="fas fa-fw fa-comments"></i> Pengaduan</a><br>
                        <a href="{{ route('tanggapan.index') }}" style="color:white;"><i class="fas fa-fw fa-file"></i> Tanggapan</a>
                    </li>
                    @elseif(Auth::User()->role == 'masyarakat')
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('masyarakat.dashboard') }}" style="color:white;">
                      </a>
                      <a href="{{route('pengaduan.index')}}" style="color:white;">
                      <i class="fas fa-fw fa-comments"></i> Pengaduan</a>
                    </li>
                    @else
                    <h1>Kamu Siapa?</h1>
                    @endif
                @endif
                <!-- Nav Item - Pages Collapse Menu -->

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
