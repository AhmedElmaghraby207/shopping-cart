<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('product.index') }}">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('product.shoppingCart') }}"><i class="fas fa-shopping-cart"></i> Shopping Cart <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> User Options <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                            <li><a href="{{ route('user.profile') }}"><i class="fa fa-id-badge"></i> User Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('user.logout') }}"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                        @else
                            <li><a href="{{ route('user.signup') }}"><i class="fa fa-user-plus"></i> Sign Up</a></li>
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i> Sign In</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>