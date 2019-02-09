  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/')}}" class="brand-link">
    <img src="{{url('/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{avatar_path(Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name!=null ? Auth::user()->name : "Administrator"}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{url('/')}}" class="nav-link">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview {!! classActivePath(1,'users') !!}">
          <a href="" class="nav-link {!! classActiveSegment(1, 'users') !!}">
            <i class="nav-icon fa fa-users"></i>
            <p>
              Users
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.users.index')}}" class="nav-link {!! active_path('users') !!}">
                <i class="nav-icon fa fa-circle-o"></i>
                <p>User Lists</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.users.create')}}" class="nav-link {!! active_path('users/create') !!}">
                <i class="nav-icon fa fa-circle-o"></i>
                <p>Add New User</p>
              </a>
            </li>
          </ul>
        </li>

      {{-- if u don't want to use Delete it Start--}}


          <li class="nav-item">
              <a href="https://adminlte.io/themes/dev/AdminLTE/pages/widgets.html" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                  <p>
                    Widgets
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-pie-chart"></i>
                    <p>
                      Charts
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/charts/chartjs.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>ChartJS</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/charts/flot.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Flot</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/charts/inline.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Inline</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-tree"></i>
                <p>
                  UI Elements
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/UI/general.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>General</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/UI/icons.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Icons</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/UI/buttons.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Buttons</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/UI/sliders.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Sliders</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  Forms
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/forms/general.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>General Elements</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/forms/advanced.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Advanced Elements</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/forms/editors.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Editors</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  Tables
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/tables/simple.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Simple Tables</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/tables/data.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Data Tables</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
              <a href="https://adminlte.io/themes/dev/AdminLTE/pages/calendar.html" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  Calendar
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
          </li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-envelope-open"></i>
                <p>
                  Mailbox
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/mailbox/mailbox.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Inbox</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/mailbox/compose.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Compose</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/mailbox/read-mail.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Read</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Pages
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/examples/invoice.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Invoice</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/examples/profile.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Profile</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/examples/login.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Login</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/examples/register.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Register</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/examples/lockscreen.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Lockscreen</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-plus-square"></i>
                <p>
                  Extras
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/examples/404.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Error 404</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/examples/500.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Error 500</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/themes/dev/AdminLTE/pages/examples/blank.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Blank Page</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="starter.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Starter Page</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
              <a href="https://adminlte.io/docs" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>Documentation</p>
              </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-circle-o-notch text-danger"></i>
                <p class="text">Important</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-circle-o-notch text-warning"></i>
                <p>Warning</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-circle-o-notch text-info"></i>
                <p>Informational</p>
              </a>
          </li>
          {{-- if u don't want to use Delete it END --}}
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  </aside>