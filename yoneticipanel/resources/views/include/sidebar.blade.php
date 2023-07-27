  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{ asset('panel') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('panel') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>

          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="{{ route('index') }}" class="nav-link {{request()->is('admin/home') ? 'active' : ''}}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Anasayfa
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview {{request()->is('admin/blogs','admin/blog-add', 'admin/blog-edit','admin/admin/blog-category','admin/admin/blog-category-add','admin/admin/blog-category-edit') ? 'menu-open' : ''}}">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fab fa-blogger-b"></i>
                          <p>
                              Bloglar
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item">
                              <a href="{{ route('blogs') }}" class="nav-link {{request()->is('admin/blogs') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Blog Liste</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="{{ route('blog-add') }}" class="nav-link {{request()->is('admin/blog-add') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Blog Ekle</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="{{ route('blog-category') }}" class="nav-link {{request()->is('admin/blog-category') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Blog Kategori</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('blog-category-add') }}" class="nav-link {{request()->is('admin/blog-category-add') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Blog Kategori Ekle</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-pager"></i>
                          <p>
                              Sayfalar
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{route('page-add')}}" class="nav-link {{request()->is('admin/page-add') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sayfa Ekle</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('pages')}}" class="nav-link {{request()->is('admin/pages') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sayfa Listesi</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-images"></i>
                          <p>
                              Slider
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{route('slider-add')}}" class="nav-link {{request()->is('admin/slider-add') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Slider Ekle</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('sliders')}}" class="nav-link {{request()->is('admin/sliders') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sayfa Listesi</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-compass"></i>
                          <p>
                              Menüler
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{route('menu-add')}}" class="nav-link {{request()->is('admin/menu-add') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Menü Ekle</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('menus')}}" class="nav-link {{request()->is('admin/menus') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Menü Listesi</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Kullanıcılar
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{route('users-add')}}" class="nav-link {{request()->is('admin/user-add') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Kullanıcı Ekle</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('users')}}" class="nav-link {{request()->is('admin/users') ? 'active' : ''}}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Kullanıcı Listesi</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('settings')}}" class="nav-link">
                          <i class="nav-icon fas fa-cogs"></i>
                          <p>
                              Site Ayarları
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
      </div>
  </aside>
