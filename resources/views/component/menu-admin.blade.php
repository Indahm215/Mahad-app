      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <li class="nav-item">
                  <a href="{{ url('/admin/fakultas') }}" class="nav-link">
                      <i class="nav-icon fa fa-graduation-cap"></i>
                      <p>
                          Fakultas
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/admin/jurusan') }}" class="nav-link">
                      <i class="nav-icon fa fa-book "></i>
                      <p>
                          Jurusan
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ url('/admin/gedung') }}" class="nav-link">
                      <i class="nav-icon fa fa-building"></i>
                      <p>
                          Gedung
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ url('/admin/kamar') }}" class="nav-link">
                      <i class="nav-icon fa fa-bed"></i>
                      <p>
                          Kamar
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/galeri') }}" class="nav-link">
                      <i class="nav-icon fa fa-image"></i>
                      <p>
                          Galeri
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/faq') }}" class="nav-link">
                      <i class="nav-icon fa fa-question-circle"></i>
                      <p>
                          FAQ
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('blog') }}" class="nav-link">
                      <i class="nav-icon fa fa-globe"></i>
                      <p>
                          Blog
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/pendaftaran') }}" class="nav-link">
                      <i class="nav-icon fa fa-edit"></i>
                      <p>
                          Pendaftaran
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/petugas') }}" class="nav-link">
                      <i class="nav-icon fa fa-user"></i>
                      <p>
                          Admin
                      </p>
                  </a>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->