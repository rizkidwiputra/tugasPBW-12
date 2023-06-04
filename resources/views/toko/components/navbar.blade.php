

<nav>
  <div class="nav-wrapper">
      <!-- ============================================================== -->
      <!-- Logo you can find that scss in header.scss -->
      <!-- ============================================================== -->
      <a href="javascript:void(0)" class="brand-logo">
          <span class="icon">
              <img class="light-logo" src="../../assets/images/logo-light-icon.png">
              <img class="dark-logo" src="../../assets/images/logo-icon.png">
          </span>
          <span class="text">
              <img class="light-logo" src="../../assets/images/logo-light-text.png">
              <img class="dark-logo" src="../../assets/images/logo-text.png">
          </span>
      </a>

      <!-- ============================================================== -->
      <!-- Left topbar icon scss in header.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right topbar icon scss in header.scss -->
      <!-- ============================================================== -->
      <ul class="right">

        <!-- ============================================================== -->
        <!-- Profile icon scss in header.scss -->
        <!-- ============================================================== -->
        <form action="{{ url('logout') }}" method="POST">
            <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="../../assets/images/users/2.jpg" alt="user" class="circle profile-pic"></a>
                @csrf
                @method('POST')
                <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                    <li><a href="{{  url('logout')  }}" ><i class="material-icons">power_settings_new</i> Logout</button></li>
                </ul>
            </li>
        </form>
    </ul>
      <!-- ============================================================== -->
      <!-- Right topbar icon scss in header.scss -->
      <!-- ============================================================== -->
  </div>
</nav>