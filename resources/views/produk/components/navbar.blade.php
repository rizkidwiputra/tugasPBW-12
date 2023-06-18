

<nav>
  <div class="nav-wrapper">
      <!-- ============================================================== -->
      <!-- Logo you can find that scss in header.scss -->
      <!-- ============================================================== -->
      <div href="javascript:void(0)" class="brand-logo">
        <img class="light-logo" src="../../assets/images/logoputih.svg" style="width: 80%; margin-left:auto; margin-right:auto;">
      </div>

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
          <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="../../assets/images/users/2.jpg" alt="user" class="circle profile-pic"></a>
              <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn">
                            Logout
                        </button>
                    </form>
                </li>
              </ul>
          </li>
      </ul>
      <!-- ============================================================== -->
      <!-- Right topbar icon scss in header.scss -->
      <!-- ============================================================== -->
  </div>
</nav>