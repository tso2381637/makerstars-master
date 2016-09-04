<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href=" {{ route('home') }} ">創坑</a>
                            </li>
                            <li>@yield('title')</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>