<!-- nav-secion -->
<div class="header-all">
    <section class="nav-section">
        <div class="nav">
            <a href="#">
                <img class="logo" width="60px" height="60px" src="{{asset('assets/img/logo.svg')}}" alt="logo">
            </a>

            <input type="checkbox" id="check" name="nav-toggle">
            <label for="check">
                    <span class="menu">
                        <img src="{{asset('assets/img/icon/menu-icon.svg')}}" alt="icon">
                    </span>
                <span class="menu-close">
                        <img src="{{ asset('assets/img/icon/menu-x.svg') }}" alt="icon">
                    </span>
            </label>

            <ul class="nav-list-items">
                <li>
                    <a class="nav-active" href="#">Home</a>
                </li>
                <li>
                    <a href="#">Product</a>
                </li>
                <li>
                    <a href="#">Product Categories</a>
                </li>
                <li>
                    <a href="#">Our Story</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
            </ul>
            <div class="nav-icons">
                <a href="#">
                    <img width="23px" height="23px" src="{{ asset('assets/img/icon/ser-icon.svg') }}" alt="icon">
                </a>
                <a href="#">
                    <img width="23px" height="23px" src="{{ asset('assets/img/icon/user-icon.svg') }}" alt="icon">
                </a>
                <a href="#">
                    <img width="23px" height="23px" src="{{ asset('assets/img/icon/in-icon.svg') }}" alt="icon">
                </a>
            </div>
        </div>
    </section>
    <!-- nav-secion -->
</div>
